
<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center">
    <h1 class="logo me-auto"><a href="index.html">BTEC<span>.</span></a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

    <nav id="navbar" class="navbar order-last order-lg-0" style="margin-right: 10px;">
      <ul>
        <li><a class="nav-link scrollto active" href="#">Home</a></li>
        <li><a class="nav-link scrollto" href="#">Work</a></li>
        <li><a class="nav-link scrollto" href="#">Product</a></li>
        <li><a class="nav-link scrollto " href="#">About</a></li>
        <li><a class="nav-link scrollto" href="#">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
    @if (Auth::check() && Auth::user()->name !== 'admin')
      <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
            <img class="img-profile rounded-circle" src="Backend/img/undraw_profile.svg">
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              logout
            </a>
          </div>
        </li>
      </ul>
    @else
    <a href="{{route('login')}}" class="get-started-btn scrollto">Login</a>
    @endif
  </div>
</header><!-- End Header -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">you sure want to logout?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">cancel</button>
                <a class="btn btn-primary" href="{{route('logout')}}">logout</a>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="Backend/vendor/jquery/jquery.min.js"></script>
<script src="Backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="Backend/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="Backend/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="Backend/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="Backend/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="Backend/js/demo/datatables-demo.js"></script>
