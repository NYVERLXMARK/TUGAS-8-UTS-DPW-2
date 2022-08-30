<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="{{url('template')}}"><img src="{{url('public')}}/img/logo.png" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="{{url('template')}}"><img src="{{url('public')}}/admin/assets/images/icon.png" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('/')}}">
          <span class="menu-icon">
            <i class="mdi mdi-home"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('admin/artikel')}}">
          <span class="menu-icon">
            <i class="mdi mdi-apps"></i>
          </span>
          <span class="menu-title">Artikel</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('/blog')}}">
          <span class="menu-icon">
            <i class="mdi mdi-apps"></i>
          </span>
          <span class="menu-title">Blog</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('admin/user')}}">
          <span class="menu-icon">
            <i class="mdi mdi-account"></i>
          </span>
          <span class="menu-title">User</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('login')}}">
          <span class="menu-icon">
            <i class="mdi mdi-login"></i>
          </span>
          <span class="menu-title">Login</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('register')}}">
          <span class="menu-icon">
            <i class="mdi mdi-account-plus"></i>
          </span>
          <span class="menu-title">Register</span>
        </a>
      </li>
    </ul>
</nav>
