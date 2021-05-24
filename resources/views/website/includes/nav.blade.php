<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Alfa Team</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
         <li class="nav-item active">
            <a class="nav-link" href="{{ URL::to('/') }}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ URL::to('/about-us') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ URL::to('') }}">Pages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ URL::to('/servicelist') }}">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ URL::to('') }}">Doctor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ URL::to('') }}">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ URL::to('') }}">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ URL::to('/login') }}">Login/Sign up</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>