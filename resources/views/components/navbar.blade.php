<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <i class="fas fa-coffee text-white fa-2x mx-3"></i>
      <a class="navbar-brand" href="#">Coffeeidea</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('contattami')}}">Lavora con noi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown link
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        @auth
        <li class="nav-item dropdown ms-auto">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                <i class="fas fa-user-check fa-2x text-white "></i>
            </a>
                
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="">Benvenuto {{Auth::user()->name}}</a></li>
                <li><a class="dropdown-item" href="" onclick="event.preventDefault();document.getElementById('form-logout').submit();">Logout</a></li>
            
                <form method="POST" action="{{route('logout')}}" style='display:none' id="form-logout">@csrf</form>
            </ul>
          </li>
          @else
          <li class="nav-item dropdown ms-auto">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user-slash fa-2x text-white "></i>
            
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Benvenuto nel mio sito fai la tua scelta:</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
            <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                
            </ul>
          </li>
       @endauth
      </div>
    </div>
  </nav>