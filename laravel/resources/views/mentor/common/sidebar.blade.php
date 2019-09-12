  <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color=""
	style="background-color:#001B1F;">
      <div class="logo">
        <a href="{{route('mentor.students.list')}}" class="simple-text logo-normal">
 		<img src="/img/logo.png" style="width:150px;">
        </a>
      </div>

      <div class="sidebar-wrapper" style="color:white;">
        <ul class="nav">

          <li class="nav-item" style="height:30px;">
            <a class="nav-link @if (Request::is('info*')) active @endif" href="{{route('mentor.informations.list')}}">
              <p style="color:white; width:100px; display:inline;" >Informations</p>
              <span style="color:#ED6D1F; margin-left:10px; font-size:20px;">●</span>
            </a>
          </li>

          <li class="nav-item" style="height:30px;">
            <a class="nav-link @if (Request::is('student*')) active @endif" href="{{route('mentor.students.list')}}">
              <p style="color:white; display:inline;">Students</p>
            </a>
          </li>

          <li class="nav-item" style="height:30px;">
            <a class="nav-link @if (Request::is('experience*')) active @endif" href="{{route('mentor.experiences.list')}}">
              <p style="color:white; display:inline;">Learning Outcomes</p>
            </a>
          </li>

{{--
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

