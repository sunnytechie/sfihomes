<template>
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <Link class="navbar-brand m-0" href="/">
        <img src="/assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Tenants Data System</span>
      </Link>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <!-- <Link class="nav-link text-white active bg-gradient-primary" href="/"> -->
          <Link class="nav-link text-white" href="/">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link text-white" :href="route('families')">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="bi bi-people opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Families/Married</span>
          </Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link text-white " :href="route('singles')">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="bi bi-person opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Singles</span>
          </Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link text-white" :href="route('departments.index')">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="bi bi-microsoft-teams opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Departments</span>
          </Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link text-white" :href="route('buildings.index')">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="bi bi-building opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Quarters</span>
          </Link>
        </li>
        
        <li class="nav-item">
          <Link @click="logout" class="nav-link text-white">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="bi bi-box-arrow-in-left opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Sign Out</span>
          </Link>
        </li>
      </ul>
    </div>
  </aside>
</template>
<script>
import { Link } from '@inertiajs/inertia-vue3'
import { Inertia } from '@inertiajs/inertia'

export default {
  components: {
    Link,
  },
  data() {
    return {
      showingNavigationDropdown: false,
    }
  },
  methods: {
    logout() {
      Inertia.post(route("logout"));
    },
  },
}
</script>