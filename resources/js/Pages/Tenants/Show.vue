<template>
    <Head title="Tenant's Fullname" />
  <AuthenticatedLayout>


        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
      </div>
      <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row gx-4 mb-2">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="/assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                Richard Davis
              </h5>
              <p class="mb-0 font-weight-normal text-sm">
                CEO / Co-Founder
              </p>
            </div>
          </div>
          
        </div>
        <div class="row">
          <div class="row">

            <div class="col-md-12">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <h6 class="mb-0">Profile Information</h6>
                    </div>
                    <div class="col-md-4 text-end">
                      <a href="javascript:;">
                        <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-body p-3">
                  <p class="text-sm">
                    Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the short term (pain avoidance is creating an illusion of equality).
                  </p>
                  <hr class="horizontal gray-light my-4">
                  <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> &nbsp; Alec M. Thompson</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp; (44) 123 1234 123</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; alecthompson@mail.com</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Location:</strong> &nbsp; USA</li>
                    <li class="list-group-item border-0 ps-0 pb-0">
                      <strong class="text-dark text-sm">Social:</strong> &nbsp;
                      <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                        <i class="fab fa-facebook fa-lg"></i>
                      </a>
                      <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                        <i class="fab fa-twitter fa-lg"></i>
                      </a>
                      <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                        <i class="fab fa-instagram fa-lg"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>



            <div class="col-12 mt-4">
              <div class="mb-5 ps-3">
                <h6 class="mb-1">Family</h6>
                <p class="text-sm">Members of same family</p>
              </div>
              <div class="row">


                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4 bordered-1">
                  <div class="card card-blog card-plain border">
                    <div class="card-header p-0 mt-n4 mx-auto" style="background-color: transparent; border-bottom: 0;">
                      <a class="d-block">
                        <img src="/assets/img/home-decor-1.jpg" height="100" width="100" alt="img-blur-shadow" class="rounded-circle">
                      </a>
                    </div>
                    <div class="card-body p-3">
                      <a href="javascript:;">
                        <h5 class="text-center">
                          Nonso Iredu
                        </h5>
                      </a>
                      <p class="mb-4 text-sm text-center">
                        As Uber works through a huge amount of internal management turmoil.
                      </p>

                      <div class="d-flex align-items-center justify-content-between">

                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Profile</button>

                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                            <img alt="Image placeholder" src="/assets/img/team-1.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                            <img alt="Image placeholder" src="/assets/img/team-2.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                            <img alt="Image placeholder" src="/assets/img/team-3.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                            <img alt="Image placeholder" src="/assets/img/team-4.jpg">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
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

  props: {
    tenant: Object,
    detail: Object,
    assets: Array,
    items: Array,
    securities: Array,
    members: Array,
  }
}
</script>