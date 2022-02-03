<nav class="navbar navbar-expand-md  sticky-top">
    <div class="container-fluid">
        <i class="fas fa-coffee text-white fa-2x mx-3"></i>
      <a class="navbar-brand text-white" href="/">Coffeeidea</a>
      <i class="fas fa-level-down-alt fa-2x navbar-toggler type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation""></i>
     
      
      {{-- <li class="nav-item">
        <a class="nav-link active text-white" aria-current="page" href="{{route('contattami')}}">{{__('ui.navbar_workwithus')}}</a>
          </li> --}}
        <div class="collapse navbar-collapse" id="navbarNavDropdown">

          <div class="flags d-flex ">
                                
            <a class="nav-item mx-md-1">
                @include('components.locale', ['lang'=>'it' , 'nation'=>'it'])
            </a>

            <a class="nav-item mx-md-1">
                @include('components.locale', ['lang'=>'en' , 'nation'=>'gb'])
            </a>

            
            <a class="nav-item mx-md-1">
                @include('components.locale', ['lang'=>'es' , 'nation'=>'es'])
            </a>
                

            <a class="nav-item mx-md-1">
              @include('components.locale', ['lang'=>'cn' , 'nation'=>'cn'])
            </a>

            
            
          </div>
        
      
        
        @auth
          <div class="dropdown ms-auto pupino">
            <a class="btn-sm  pupino" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user-check fa-2x text-white "></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-md-end" aria-labelledby="dropdownMenu2">
              <li><a class="dropdown-item" href="">{{__('ui.navbarl1')}} {{Auth::user()->name}}</a></li>
                <li><a class="dropdown-item" href="" onclick="event.preventDefault();document.getElementById('form-logout').submit();">Logout</a></li>
            
                <form method="POST" action="{{route('logout')}}" style='display:none' id="form-logout">@csrf</form>
            </ul>
          </div>
          @else
          <div class="dropdown ms-auto  pupino">
            <a class="btn-sm   pupino" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user-slash fa-2x text-white "></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-md-end" aria-labelledby="dropdownMenu2">
              <li><a class="dropdown-item" href="#">{{(__('ui.navbarnl1'))}}:</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{route('register')}}">{{(__('ui.navbarnl2'))}}</a></li>
              <li><a class="dropdown-item" href="{{route('login')}}">{{(__('ui.navbarnl3'))}}</a></li>
            </ul>
          </div>
          @endauth
          
                </div>
              </div>
            </nav>



