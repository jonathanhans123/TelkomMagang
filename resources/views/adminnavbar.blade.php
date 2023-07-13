<nav class="navbar navbar-expand-lg pt-5" >
    <div class="container">
      <a class="navbar-brand" href="{{url("/")}}">
        <img src="{{asset('images/indihomelogo.jpg')}}" alt="Logo" width="150px"style="z-index: -2;">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item" style="float:right;">
            <a class="nav-link" href="/host/list">Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/host/add">Add Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
