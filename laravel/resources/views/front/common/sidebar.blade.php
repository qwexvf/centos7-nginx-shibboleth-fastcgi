  <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color=""
	style="background-color:#001B1F;">
      <div class="logo">
        <a href="/acount/dashboard" class="simple-text logo-normal">
 		<img src="/img/logo.png" style="width:150px;">
        </a>
      </div>

      <div class="logo" style="text-align:center; padding-bottom:50px;">   
	<a href="/profile">
	  <img src="https://d3cmdai71kklhc.cloudfront.net/post_watermark_sp_320/marketplace/38237/mp_20170517-231534959_ex5j8.jpg"
	  style="border-radius:100%; width:80px; height:80px;">
	  <p style="width:100%;">Hiroki Homma</p>
	</a>
      </div>

      <div class="sidebar-wrapper" style="color:white;">
        <ul class="nav">

{{--
          <li class="nav-item" style="height:30px;">
            <a class="nav-link @if (Request::is('/application')) active @endif" href="/">
              <p style="color:white; display:inline;">Allication ＋
              </p>
            </a>
          </li>
--}}

          <li class="nav-item" style="height:30px;">
            <a class="nav-link @if (Request::is('/')) active @endif" href="/">
              <p style="color:white; display:inline;">Dashboard 
	      </p>
            </a>
          </li>

          <li class="nav-item" style="height:30px;">
            <a class="nav-link @if (Request::is('info*')) active @endif" href="/info">
              <p style="color:white; width:100px; display:inline;" >Information</p>
              <span style="color:#ED6D1F; margin-left:10px; font-size:20px;">●</span>
            </a>
          </li>

          <li class="nav-item" style="height:30px;">
            <a class="nav-link @if (Request::is('career*')) active @endif" href="/career">
              <p style="color:white; display:inline;">CareerVision</p>
            </a>
          </li>

          <li class="nav-item" style="height:30px;">
            <a class="nav-link @if (Request::is('course*')) active @endif" href="/course">
              <p style="color:white; display:inline;">Course</p>
            </a>
          </li>

          <li class="nav-item" style="height:30px;">
            <a class="nav-link @if (Request::is('/competence')) active @endif" href="/competency">
              <p style="color:white; display:inline;">Competency</p>
            </a>
          </li>

          <li class="nav-item" style="height:30px;">
            <a class="nav-link @if (Request::is('delivery')) active @endif" href="/delivery">
              <p style="color:white; display:inline;">Learning Outcomes</p>
            </a>
          </li>

          <li class="nav-item" style="height:30px;">
            <a class="nav-link @if (Request::is('review*')) active @endif" href="/review">
              <p style="color:white; display:inline;">Review</p>
            </a>
          </li>

{{--
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
--}}

        </ul>
      </div>
    </div>

