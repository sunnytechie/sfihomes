<template>
    <Head title="Admin users" />
    <AuthenticatedLayout>
  
        <div class="row">
          <div class="col-12">
            <div class="card my-4">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-2 px-3 d-flex justify-content-between">
                  <h6 class="text-white text-capitalize pt-2">Authorized Administrators</h6>
                  <Link :href="route('users.create')" class="btn btn-success text-white" type="button" style="text-transform:capitalize">Create New Admin</Link>
                </div>

              </div>
              <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created_at</th>
                        <th class="text-secondary opacity-7"></th>
                      </tr>
                    </thead>
                    <tbody>
  
  
                      <tr v-for="user in users" :key="user.id">
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="/assets/img/team-3.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user2">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">{{ user.name }}</h6>
                              <p class="text-xs text-secondary mb-0">{{ user.email }}</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">{{ user.role }}</p>
                          <span class="text-xs text-white badge badge-sm bg-gradient-success mb-0" style="text-transform:capitalize">Verified</span>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <p class="text-xs text-secondary mb-0">{{ user.created_at }}</p>
                        </td>

                        <td class="align-middle text-center text-sm">
                          <button class="btn btn-danger text-sm text-white" @click="destroy(user.id)" type="button" style="text-transform:capitalize">Delete this User</button>
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
  import { Inertia } from '@inertiajs/inertia'
  
  export default {
    components: {
      AuthenticatedLayout,
      Head,
      Link
    },
  
    props: {
      users: Array,
    },

    setup() {
            let destroy = (id) => {
        if (confirm('Are you sure you want to delete this User?')) {
            Inertia.delete(route('users.destroy', { id }))
        }
       }

    return {
        destroy,
    }
  },
  }
  </script>