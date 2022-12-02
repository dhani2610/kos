<style>
.sidebar .nav .nav-item.active > .nav-link{
  background: #163358!important;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<nav class="sidebar sidebar-offcanvas shadow" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{url('/dashboard-new')}}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('/kost-new')}}">
        <i class="fa fa-home fa-fw"></i>
        <span class="menu-title" style="margin-left: 17px">Kost</span>
      </a>
    </li>
  </ul>
</nav>