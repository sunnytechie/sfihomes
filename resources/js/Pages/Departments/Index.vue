<template>
    <Head title="Departments" />
  <AuthenticatedLayout>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Department table</h6>
                    </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center justify-content-center mb-0">
                        <thead>
                            <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Location</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">View</th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="department in departments" :key="department.id">
                            <td>
                                <div class="d-flex px-2">
                                <div>
                                    <img src="/assets/img/small-logos/logo-asana.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                                </div>
                                <div class="my-auto">
                                    <h6 class="mb-0 text-sm">{{ department.name }}</h6>
                                </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm font-weight-bold mb-0">{{ department.location }}</p>
                            </td>
                            <td class="align-middle">
                                <Link class="btn btn-success text-white mb-0" :href="route('department.tenant', department.id)" style="text-transform: capitalize">
                                    <i class="bi bi-eye"></i> See tenants
                                </Link>
                            </td>
                            </tr>
                            
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
</AuthenticatedLayout>

  
</template>

<script>
import AuthenticatedLayout from '@/Layouts/Authenticated.vue'
import { Head, Link } from '@inertiajs/inertia-vue3'

export default {
  components: {
    AuthenticatedLayout,
    Head,
    Link
  },

  props: {
    departments: Array,
  }
 
}
</script>