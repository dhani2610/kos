<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin-new.layout.partials.head')
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('admin-new.layout.partials.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      @include('admin-new.layout.partials.setting')
   
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('admin-new.layout.partials.sidebar')
    
      <!-- partial -->
   
      @yield('content')
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  @include('admin-new.layout.partials.footer')

  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  @include('admin-new.layout.partials.foot')
 
  <!-- End custom js for this page-->
</body>

</html>

