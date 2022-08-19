<template>
    <div class="home">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Welcome to Vue.js</h1>
                    <p>This is a simple Vue.js application.</p>

                    <breeze-dropdown-link @click="logout" as="button">
                        Log Out
                    </breeze-dropdown-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import BreezeDropdown from '@/Components/Dropdown.vue'
import BreezeDropdownLink from '@/Components/DropdownLink.vue'
import BreezeNavLink from '@/Components/NavLink.vue'
import { Link } from '@inertiajs/inertia-vue3'
import { Inertia } from '@inertiajs/inertia'

export default {
  components: {
    BreezeDropdown,
    BreezeDropdownLink,
    BreezeNavLink,
    Link,
  },
    methods: {
    logout() {
      Inertia.post(route("logout"));
    }
  },
}
</script>