<template>
    <Head title="Single Tenants" />
    <AuthenticatedLayout>
  
        <div class="row">
          <div class="col-12">
            <div class="card my-4">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <h6 class="text-white text-capitalize ps-3">Tenants Listings</h6>
                </div>
              </div>
              <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sex</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                        <th class="text-secondary opacity-7"></th>
                      </tr>
                    </thead>
                    <tbody>
  
  
                      <tr v-for="tenant in singleTenants" :key="tenant.id">
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="/assets/img/team-3.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user2">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">{{ tenant.tenant_title }} {{ tenant.tenant_surname }} {{ tenant.tenant_last }}</h6>
                              <p class="text-xs text-secondary mb-0">{{ tenant.tenant_email }}</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">{{ tenant.tenant_job_title }}</p>
                          <p class="text-xs text-secondary mb-0">{{ tenant.department.name }}</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                        <p class="text-xs text-secondary mb-0">{{ tenant.tenant_sex }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs text-secondary mb-0">{{ tenant.tenant_mobile_phone }}</p>
                      </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success">{{ tenant.tenant_status }}</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">{{ tenant.tenant_employed_at }}</span>
                        </td>
                        <td class="align-middle">
                          <Link :href="route('tenants.show', tenant.id)" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            More
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
        singleTenants: Array,
    }
  }
  </script>