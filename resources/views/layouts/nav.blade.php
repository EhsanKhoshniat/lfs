    <div class="blog-masthead">
      <div class="container">
        <nav class="nav">
          <a class="nav-link active" href="#">Home</a>
          <a class="nav-link" href="#">New features</a>
          <a class="nav-link" href="#">Press</a>
          <a class="nav-link" href="#">New hires</a>
          <a class="nav-link" href="#">About</a>
          
          @if (Auth::check())
            <div class="dropdwon navbar-nav flex-row ml-md-auto d-none d-md-flex ">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   {{ auth()->user()->name }}
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Profile</a>
              <a class="dropdown-item" href="#">Change Password</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/logout">Logout</a>
            </div>
            </div>
          @else
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
            <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
            &nbsp;
            <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
        </ul>
          @endif
          
        </nav>
      </div>
    </div>