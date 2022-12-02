<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="{{asset('images/Group 12 2.png')}}" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('images/Group 12 2.png')}}" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group" style="font-size: 16px;color: #25242E;font-weight: 500;">
              Kelas
            </div>
          </li>
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group" style="font-size: 16px;color: #25242E;font-weight: 500;">
              Acara
            </div>
          </li>
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group" style="font-size: 16px;color: #25242E;font-weight: 500;">
              Beasiswa
            </div>
          </li>
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group" style="font-size: 16px;color: #25242E;font-weight: 500;">
              Kontak
            </div>
          </li>
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group" style="font-size: 16px;color: #25242E;font-weight: 500;">
              Pemilik Kos
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{asset('admin-new/images/faces/face28.jpg')}}" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
       
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>