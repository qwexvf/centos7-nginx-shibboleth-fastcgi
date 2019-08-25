  <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="white">

      {{--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
      --}}

      <div class="logo">
        <a href="/acount/dashboard" class="simple-text logo-normal">
		Career Platform
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="material-icons">dashboard</i>
              <p>ダッシュボード</p>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/course">
              <i class="material-icons">person</i>
              <p>コース一覧</p>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/profile">
              <i class="material-icons">bubble_chart</i>
              <p>プロフィール</p>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/contact">
              <i class="material-icons">bubble_chart</i>
              <p>お問い合わせ</p>
            </a>
          </li>

          <li class="nav-item @if (Request::is('acount/setting*')) active @endif">
            <a class="nav-link" href="/acount/setting">
              <i class="material-icons">location_ons</i>
              <p>アカウント設定</p>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/acount/logout">
              <i class="material-icons">notifications</i>
              <p>ログアウト</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

