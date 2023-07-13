<nav class="navbar navbar-expand-lg pt-5" >
    <div class="container">
    @if(Session::has('cekuser'))
      <a class="navbar-brand" href="{{url("/host")}}">
    @else
      <a class="navbar-brand" href="{{url("/")}}">
    @endif
        <img src="{{asset('images/indihomelogo.jpg')}}" alt="Logo" width="150px"style="z-index: -2;">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav mr-auto">
        @if(Session::has('cekuser'))
          <li class="nav-item">
            <a class="nav-link" href="{{url("/host/list")}}">Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url("/host/add")}}">Add Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url("/logout")}}">Logout</a>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="{{url("/")}}">Login</a>
          </li>
        @endif
        </ul>
      </div>
    </div>
  </nav>
