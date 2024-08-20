<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 fixed-startbg-gradient-dark" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="#">
      <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white">Project Management</span>
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse sidebar w-auto  max-height-vh-100 offcanvas-body" id="sidenav-collapse-main">
    <ul class="navbar-nav nav flex-column">

      <li class="nav-item">
        <a class="nav-link text-white" href="#"> Home </a>
      </li>

      <li class="nav-item has-submenu">
        <a class="nav-link" href="#"> Manage Project </a>
        <ul class="submenu collapse">
          <li><a class="nav-link text-white" href="#"><span class="nav-link-text ms-1">Add Project</span></a></li>
          <li><a class="nav-link text-white" href="#"><span class="nav-link-text ms-1">Show Projects</span></a></li>
        </ul>

      <li class="nav-item has-submenu">
        <a class="nav-link" href="#"> Manage Employee </a>
        <ul class="submenu collapse">
          <li><a class="nav-link text-white" href="#"><span class="nav-link-text ms-1">Add Employee</span></a></li>
          <li><a class="nav-link text-white" href="#"><span class="nav-link-text ms-1">Show Employees</span></a></li>
        </ul>

      <li class="nav-item has-submenu">
        <a class="nav-link" href="#"> Manage Pages </a>
        <ul class="submenu collapse">
          <li><a class="nav-link text-white" href="#"><span class="nav-link-text ms-1">Show Pages</span></a></li>
          <li><a class="nav-link text-white" href="#"><span class="nav-link-text ms-1">Add Pages</span></a></li>
        </ul>

      <li class="nav-item has-submenu">
        <a class="nav-link" href="#"> Manage Bugs </a>
        <ul class="submenu collapse">
          <li><a class="nav-link text-white" href="#"><span class="nav-link-text ms-1">Show Pages</span></a></li>
          <li><a class="nav-link text-white" href="#"><span class="nav-link-text ms-1">Re-Assign</span></a></li>
        </ul>

    </ul>
  </div>


  <script>
    document.addEventListener("DOMContentLoaded", function() {
      document.querySelectorAll('.sidebar .nav-link').forEach(function(element) {

        element.addEventListener('click', function(e) {

          let nextEl = element.nextElementSibling;
          let parentEl = element.parentElement;

          if (nextEl) {
            e.preventDefault();
            let mycollapse = new bootstrap.Collapse(nextEl);

            if (nextEl.classList.contains('show')) {
              mycollapse.hide();
            } else {
              mycollapse.show();
              // find other submenus with class=show
              var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
              // if it exists, then close all of them
              if (opened_submenu) {
                new bootstrap.Collapse(opened_submenu);
              }
            }
          }
        }); // addEventListener
      }) // forEach
    });
  </script>

  <style>
    .sidebar li .submenu {
      list-style: none;
      margin: 0;
      padding: 0;
      padding-left: 1rem;
      padding-right: 1rem;
    }
  </style>
</aside>