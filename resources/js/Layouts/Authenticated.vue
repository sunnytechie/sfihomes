<template>
  <section>
    <!-- Sidebar -->
      <Sidebar />
    <!-- //Sidebar -->

    
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

      <!-- Navigator -->
        <Navigator />
      <!-- //Navigator -->

      <!-- Page Content -->
      <div class="container-fluid py-4">
        <!-- Flash message  -->
        <div v-if="$page.props.flash.message" class="alert alert-primary alert-dismissible fade show bottom-alert" id="bottomAlert" role="alert" style="background: #fff; color: #000">
          {{ $page.props.flash.message }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x-lg"></i></button>
        </div>
        <!-- //End Flash message -->

        <slot />

        <!-- Footer -->
          <Footer />
        <!-- //Footer -->

        <!-- Footer -->
        <Offcanvas />
        <!-- //Footer -->
      </div>
      <!-- //Page Content -->

    </main>
    
  </section>
</template>

<script>
import Sidebar from '../Pages/Shared/Sidebar.vue'
import Navigator from '../Pages/Shared/Navbar.vue'
import Footer from '../Pages/Shared/Footer.vue'
import BreezeApplicationLogo from '@/Components/ApplicationLogo.vue'
import BreezeDropdown from '@/Components/Dropdown.vue'
import BreezeDropdownLink from '@/Components/DropdownLink.vue'
import BreezeNavLink from '@/Components/NavLink.vue'
import { Link } from '@inertiajs/inertia-vue3'
import { Inertia } from '@inertiajs/inertia'
import Offcanvas from '@/Pages/Shared/Offcanvas.vue'

export default {
  components: {
    BreezeApplicationLogo,
    BreezeDropdown,
    BreezeDropdownLink,
    BreezeNavLink,
    Link,
    Sidebar,
    Navigator,
    Footer,
    Offcanvas
},

  data() {
    return {
      showingNavigationDropdown: false,
    }
  },

  methods: {
    logout() {
      Inertia.post(route("logout"));
    }
  },
}
</script>
