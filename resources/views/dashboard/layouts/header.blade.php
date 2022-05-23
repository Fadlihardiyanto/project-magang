<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow " style="background-color:rgb(32, 83, 117)">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-4 fw-semibold text-center" href="/dashboard">SPPD</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar navbar-dark">
      <div class="navbar-nav">
          <div class="nav-item text-nowrap">
              <a class="nav-link px-3" href="#"><span data-feather="user" class="align-text-bottom"></span> Hi, {{ auth()->user()->name }}</a>
          </div>
      </div>
      <div class="navbar-nav">
          <div class="nav-item text-nowrap">
              <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="nav-link px-3 border-0" style="background: rgb(32, 83, 117)"><span data-feather="power" class="align-text-bottom"></span> Log out</button>
              </form>
          </div>
      </div>
   </div>
  </header>