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
        <slot />

        <!-- Footer -->
          <Footer />
        <!-- //Footer -->
      </div>
      <!-- //Page Content -->

    </main>

    <Settings />
    
  </section>
</template>

<script>
import Settings from '../Pages/Shared/Settings.vue'
import Sidebar from '../Pages/Shared/Sidebar.vue'
import Navigator from '../Pages/Shared/Navbar.vue'
import Footer from '../Pages/Shared/Footer.vue'
import BreezeApplicationLogo from '@/Components/ApplicationLogo.vue'
import BreezeDropdown from '@/Components/Dropdown.vue'
import BreezeDropdownLink from '@/Components/DropdownLink.vue'
import BreezeNavLink from '@/Components/NavLink.vue'
import { Link } from '@inertiajs/inertia-vue3'
import { Inertia } from '@inertiajs/inertia'

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
    Settings,
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
