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

          <li class="nav-item" style="height:30px;">
            <a class="nav-link" href="/">
              <i class="material-icons">dashboard</i>
              <p style="color:white; display:inline;">Allication ＋
              </p>
            </a>
          </li>

          <li class="nav-item" style="height:30px;">
            <a class="nav-link" href="/">
              <i class="material-icons">dashboard</i>
              <p style="color:white; display:inline;">Dashboard 
		@if (Request::is('/'))
		<span style="color:#ED6D1F; margin-left:10px; font-size:20px;">●</span>
		@endif
	      </p>
            </a>
          </li>

          <li class="nav-item" style="height:30px;">
            <a class="nav-link" href="/info">
              <i class="material-icons">dashboard</i>
              <p style="color:white; width:100px; display:inline;">Information</p>
                @if (Request::is('info*')) 
                <span style="color:#ED6D1F; margin-left:10px; font-size:20px;">●</span>
                @endif
            </a>
          </li>

          <li class="nav-item" style="height:30px;">
            <a class="nav-link" href="/career">
              <i class="material-icons">person</i>
              <p style="color:white; display:inline;">CareerVision</p>
                @if (Request::is('career*'))
                <span style="color:#ED6D1F; margin-left:10px; font-size:20px;">●</span>
                @endif
            </a>
          </li>

          <li class="nav-item" style="height:30px;">
            <a class="nav-link" href="/course">
              <i class="material-icons">bubble_chart</i>
              <p style="color:white; display:inline;">Course</p>
                @if (Request::is('course*'))
                <span style="color:#ED6D1F; margin-left:10px; font-size:20px;">●</span>
                @endif
            </a>
          </li>

          <li class="nav-item" style="height:30px;">
            <a class="nav-link" href="/capability">
              <i class="material-icons">bubble_chart</i>
              <p style="color:white; display:inline;">Capability</p>
                @if (Request::is('capability*'))
                <span style="color:#ED6D1F; margin-left:10px; font-size:20px;">●</span>
                @endif
            </a>
          </li>

          <li class="nav-item" style="height:30px;">
            <a class="nav-link" href="/delivery">
              <i class="material-icons">bubble_chart</i>
              <p style="color:white; display:inline;">Deliverable</p>
                @if (Request::is('delivery*'))
                <span style="color:#ED6D1F; margin-left:10px; font-size:20px;">●</span>
                @endif
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

