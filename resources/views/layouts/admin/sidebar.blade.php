  <!-- Vertical navbar -->
  <div class="vertical-nav" id="sidebar">
    <div class="py-4 px-3 mb-4">
      <div class="media d-flex align-items-center">
        <img loading="lazy" src="{{Auth::user()->getImage()}}" alt="..." width="80" height="80" class="mr-3 rounded-circle img-thumbnail shadow-sm" id="profile-pict">
        <div class="media-body">
          <h4 class="m-0">{{Auth::user()->name}}</h4>
          <p class="font-weight-normal text-muted mb-0">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</p>
        </div>
      </div>
    </div>

    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0 nav-divider">Dashboard</p>

    <ul class="nav flex-column mb-0">
      <li class="nav-item">
          <a href="{{url('/admin-home')}}" class="nav-link {{ (request()->is('admin-home')) ? 'sidebar-active' : '' }}">
            <i class="fa fa-th-large"></i> Dashboard
          </a>
      </li>
      <li class="nav-item">
          <a href="{{url('/user-data')}}" class="nav-link {{ (request()->is('user-data')) ? 'sidebar-active' : '' }}">
            <i class="fas fa-users"></i> Pengguna
          </a>
      </li>
      <li class="nav-item">
        <a class="nav-link dropdown-toggle {{ (request()->is('quizes/create') || request()->is('quizes/data')) ? 'sidebar-active' : '' }}" data-toggle="collapse" href="#quizCollapse" role="button" aria-expanded="false" aria-controls="quizCollapse">
          <i class="fas fa-book"></i> Quiz
        </a>
        <div class="collapse" id="quizCollapse">
          <ul class="nav flex-column ">
            <li class="nav-item dropdown-collapse">
              <a class="nav-link" aria-current="page" href="{{url('quizes/create')}}">Create Quiz</a>
            </li>
            <li class="nav-item dropdown-collapse">
              <a class="nav-link " href="{{url('questions')}}">Quiz Data</a>
            </li>
          </ul>
        </div>
      </li>
    <li class="nav-item">
        <a href="{{url('/rating-data')}}" class="nav-link {{ (request()->is('rating-data')) ? 'sidebar-active' : '' }}">
          <i class="fa fa-bar-chart"></i> Data Rating
        </a>
    </li>
    </ul>

    <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0 nav-divider">Personal</p>

    <ul class="nav flex-column mb-0">
      <li class="nav-item">
        <a class="nav-link dropdown-toggle {{ (request()->is('admin-profile') || request()->is('change-admin-password')) ? 'sidebar-active' : '' }}" data-toggle="collapse" href="#profileCollapse" role="button" aria-expanded="false" aria-controls="profileCollapse">
          <i class="fas fa-user-cog "></i> Profil
        </a>
        <div class="collapse" id="profileCollapse">
          <ul class="nav flex-column ">
            <li class="nav-item dropdown-collapse">
              <a class="nav-link" aria-current="page" href="{{url('/admin-profile')}}">Data Profil</a>
            </li>
            <li class="nav-item dropdown-collapse">
              <a class="nav-link " href="{{url('change-admin-password')}}">Ubah Kata Sandi</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a href="{{ url('/logout') }}" class="nav-link">
          <i class="fas fa-sign-out-alt"></i> Keluar
        </a>
      </li>
    </ul>
  </div>
  <!-- End vertical navbar -->
