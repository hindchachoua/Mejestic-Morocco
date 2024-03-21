{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          @auth
    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}">logout</a>
    </li>
@else
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">login</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">Register</a>
    </li>
@endauth

          
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <span class="navbar-text">@auth
          {{auth()->user()->name}}
        @endauth</span> 
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> 
       </div>
    </div>
  </nav> --}}
 
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
        <h1 class="text-primary m-0">{{ config('app.name') }}</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto p-4 p-lg-0">
            <a href="index.html" class="nav-item nav-link active">Home</a>
            <a href="about.html" class="nav-item nav-link">About</a>
            <a href="product.html" class="nav-item nav-link">Products</a>
           
            {{-- <a href="contact.html" class="nav-item nav-link">Contact</a> --}}
        </div>
        <div class=" d-none d-lg-flex">
          @auth
          <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}">logout</a>
          </li>
      @else
          <li class="nav-item">
             <button type="button" class="btn btn-primary me-3 d-lg-block"><a style="color: white" href="{{ route('login') }}">login</a></button> 
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Register</a>
          </li>
      @endauth
        </div>
        <span class="navbar-text">@auth
          {{auth()->user()->name}}
        @endauth</span> 
    </div>
</nav>