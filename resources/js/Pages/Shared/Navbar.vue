<template>
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl position-sticky blur shadow-blur mt-4 left-auto top-1 z-index-sticky" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <input type="text" class="form-control" placeholder="Search...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">

            <li class="nav-item dropdown me-4 border-1">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Add New
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><Link class="dropdown-item" href="tenants/create"><i class="bi bi-person-plus-fill"></i> Tenants</Link></li>
                <li><Link class="dropdown-item" href="/departments/create"><i class="bi bi-pc-display-horizontal"></i> Department</Link></li>
                <li><Link class="dropdown-item" href="/buildings/create"><i class="bi bi-building"></i> Building/Quaters</Link></li>
                <li><hr class="dropdown-divider"></li>
                <li><Link class="dropdown-item" href="/users"><i class="bi bi-person-lines-fill"></i> Administrators</Link></li>
              </ul>
            </li>

            <li class="nav-item d-flex align-items-center">
              <Link @click="logout" class="nav-link text-body px-2 font-weight-bold px-0" as="button">
                <i class="bi bi-box-arrow-left me-sm-1 me-1"></i>
                <span class="d-sm-inline d-none">Sign Out</span>
              </Link>
            </li>

            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <div class="nav-link text-body p-0" id="iconNavbarSidenav" style="cursor: pointer;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>

           
            
          </ul>
        </div>
      </div>
    </nav>
</template>

<script>
  import { Link } from "@inertiajs/inertia-vue3"
  import { Inertia } from '@inertiajs/inertia'
  export default {
    components: {
      Link
    },

    methods: {
    logout() {
      Inertia.post(route("logout"));
    }
  }
  }
</script>

<style>
  @media (min-width: 992px){
    .dropdown:not(.dropdown-hover) .dropdown-menu.show {
        margin-top: 0.1rem !important;
    }
  }

  .dropdown-menu {
    width: auto !important;
}

@media (min-width: 992px) {
  .dropdown .dropdown-menu:before {
    font-family: "FontAwesome";
    content: "\f0d8";
    position: absolute;
    top: 0;
    left: 28px;
    right: auto;
    font-size: 22px;
    color: #343A40 !important;
    transition: top 0.35s ease;
}
}
</style>