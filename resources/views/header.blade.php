<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a  class="logo d-flex align-items-center">
    <h1>Admin</h1>
    <span class="d-none d-lg-block"></span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->

<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <li class="nav-item dropdown pe-3">
    @if(Auth::check())
							<h2 class="user" style="display: none;"> {{Auth::user()->user}}</h2>
							@endif
      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="/logout">
        <i class="bi bi-box-arrow-left"></i>
        <span>Log Out</span>
      </a><!-- End Profile Iamge Icon -->

     
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header>