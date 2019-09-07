  <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color=""
	style="background-color:#001B1F;">
      <div class="logo">
        <a href="/acount/dashboard" class="simple-text logo-normal">
 		<img src="/img/logo.png" style="width:150px;">
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
            <a class="nav-link @if (Request::is('student*')) active @endif" href="/student">
              <p style="color:white; display:inline;">Student（途）</p>
            </a>
          </li>

          <li class="nav-item" style="height:30px;">
            <a class="nav-link @if (Request::is('experience*')) active @endif" href="/experience/list">
              <p style="color:white; display:inline;">Experience(未)</p>
            </a>
          </li>

          <li class="nav-item" style="height:30px;">
            <a class="nav-link @if (Request::is('experience*')) active @endif" href="/competency/list">
              <p style="color:white; display:inline;">Competency(未)</p>
            </a>
          </li>

          <li class="nav-item" style="height:30px;">
            <a class="nav-link @if (Request::is('experience*')) active @endif" href="/career/list">
              <p style="color:white; display:inline;">CareerVision(未)</p>
            </a>
          </li>

          <li class="nav-item" style="height:30px;">
            <a class="nav-link @if (Request::is('experience*')) active @endif" href="/teacher/list">
              <p style="color:white; display:inline;">Teacher(未)</p>
            </a>
          </li>

          <li class="nav-item" style="height:30px;">
            <a class="nav-link @if (Request::is('experience*')) active @endif" href="/user/list">
              <p style="color:white; display:inline;">AdminUser(未)</p>
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

