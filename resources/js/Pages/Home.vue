<template>
  <Head title="Tenants Board" />
  <AuthenticatedLayout>

      <div class="row">
          <div class="col-md-3 col-6 mb-4">
            <div class="card">
              <div class="card-header">
                Header
              </div>
              <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">Content</p>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-6 mb-4">
            <div class="card">
              <div class="card-header">
                Header
              </div>
              <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">Content</p>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-6 mb-4">
            <div class="card">
              <div class="card-header">
                Header
              </div>
              <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">Content</p>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-6 mb-4">
            <div class="card">
              <div class="card-header">
                Header
              </div>
              <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">Content</p>
              </div>
            </div>
          </div>
      </div>

  </AuthenticatedLayout>

  
</template>

<script>
import AuthenticatedLayout from '@/Layouts/Authenticated.vue'
import { Head } from '@inertiajs/inertia-vue3'

export default {
  components: {
    AuthenticatedLayout,
    Head,
  },
}
</script>