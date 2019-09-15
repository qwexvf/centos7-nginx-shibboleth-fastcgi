FROM centos:7


# Install Shibboleth's recommended Service Provider repo as per
# https://shibboleth.net/downloads/service-provider/RPMS/
ADD configs/centos-7/shibboleth.repo /etc/yum.repos.d/shibboleth.repo

# Accept Shibboleth's GPG key
RUN rpm --import https://shibboleth.net/downloads/service-provider/RPMS/repomd.xml.key

# Install EPEL for fcgi-devel
RUN yum install -y epel-release

# Install required packages for building
RUN yum install -y \
  make \
  rpm-build \
  rpmdevtools \
  sudo \
  yum-utils \
  rsync

# Make the build area available
RUN mkdir -p /app/build

COPY . /app

# 1. Build
# 2. Test by installing/running
#    Remove any installed packages from previous docker-compose runs
# 3. Copy the RPMs back to the host volume
RUN /app/shibboleth-rebuild.sh && \
  yum remove -y shibboleth* && \
  yum install -y ~/rpmbuild/RPMS/x86_64/*.rpm && \
  /usr/lib64/shibboleth/shibauthorizer && \
  /usr/lib64/shibboleth/shibresponder && \
  mkdir -p /app/build/centos-7/ && \
  rsync --no-relative -vahu ~/rpmbuild/RPMS ~/rpmbuild/SRPMS /app/build/centos-7/

ENV PATH $PATH:/usr/bin
ENV container docker

# enable systemd
RUN (cd /lib/systemd/system/sysinit.target.wants/; for i in *; do [ $i == \
systemd-tmpfiles-setup.service ] || rm -f $i; done); \
rm -f /lib/systemd/system/multi-user.target.wants/*;\
rm -f /etc/systemd/system/*.wants/*;\
rm -f /lib/systemd/system/local-fs.target.wants/*; \
rm -f /lib/systemd/system/sockets.target.wants/*udev*; \
rm -f /lib/systemd/system/sockets.target.wants/*initctl*; \
rm -f /lib/systemd/system/basic.target.wants/*;\
rm -f /lib/systemd/system/anaconda.target.wants/*;


# create nginx user
RUN useradd -M -s /sbin/nologin nginx

RUN yum -y update && \
    yum -y install epel-release && \
    yum -y install http://rpms.famillecollet.com/enterprise/remi-release-7.rpm

RUN yum groupinstall -y 'Development Tools'
RUN yum install -y pcre-devel zlib-devel wget openssl openssl-devel && \
    yum install -y --enablerepo=remi,remi-php73 php php-devel php-mbstring php-pdo php-gd php-xml php-mcrypt php-json php-opcache php-mysqlnd php-zip

# Delete mariadb
RUN yum remove -y mariadb-libs && rm -rf /var/lib/mysql

# Composerインストール
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === 'a5c698ffe4b8e849a443b120cd5ba38043260d5c4023dbf93e1558871f1f07f58274fc6f4c93bcfd858c6bd0775cd8d1') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

# 環境変数設定
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME "/opt/composer"
ENV PATH "$PATH:/opt/composer/vendor/bin"

# laravel インストール
RUN composer global require laravel/installer

RUN \
  wget https://nginx.org/download/nginx-1.14.2.tar.gz && \
  tar xvfz nginx-1.14.2.tar.gz && \
  cd nginx-1.14.2 && \
  git clone https://github.com/openresty/headers-more-nginx-module.git && \
  git clone https://github.com/nginx-shib/nginx-http-shibboleth.git && \
  ./configure \
    --user=nginx \
    --group=nginx \
    --prefix=/etc/nginx \
    --sbin-path=/usr/sbin/nginx \
    --conf-path=/etc/nginx/nginx.conf \
    --with-http_gzip_static_module \
    --with-http_stub_status_module \
    --with-http_ssl_module \
    --with-pcre \
    --with-file-aio \
    --with-http_realip_module \
    --without-http_scgi_module \
    --without-http_uwsgi_module \
    --with-http_realip_module \
    --add-module=./headers-more-nginx-module \
    --add-module=./nginx-http-shibboleth && \
  make && make install

COPY configs/services/shibauthorizer.service /lib/systemd/system/
COPY configs/services/shibauthorizer.socket /lib/systemd/system/
COPY configs/services/shibresponder.service /lib/systemd/system/
COPY configs/services/shibresponder.socket /lib/systemd/system/

VOLUME [ "/sys/fs/cgroup" ]
CMD ["/usr/sbin/init"]

EXPOSE 80
