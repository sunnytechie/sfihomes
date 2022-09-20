<template>
    <Head :title=$props.tenant.tenant_surname />
  <AuthenticatedLayout>


        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('/assets/img/bg-smart-home-1.jpg');">
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
                {{ $props.tenant.tenant_title }} {{ $props.tenant.tenant_surname }} {{ $props.tenant.tenant_last }} {{ $props.tenant.tenant_middle_name }}
              </h5>
              <p class="mb-0 font-weight-normal text-sm">
                {{ $props.tenant.tenant_job_title }}
              </p>
              <p class="mb-0 font-weight-normal text-sm">
                {{ $props.building.name }}
              </p>
              <p class="mb-0 font-weight-normal text-sm">
                {{ $props.department.name }}
              </p>
            </div>
          </div>
        </div>


        <div class="row">
            <div class="col-md-4">
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
                  <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp; {{ $props.tenant.tenant_mobile_phone }}, {{ $props.tenant.tenant_office_number }}, {{ $props.tenant.tenant_home_number }}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; {{ $props.tenant.tenant_email }}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">City:</strong> &nbsp; <span>{{ $props.tenant.tenant_city }}</span></li>
                    <li class="list-group-item border-0 ps-0 pb-0 text-sm"><b>State:</b> &nbsp; <span>{{ $props.tenant.tenant_state_origin }}</span></li>
                    <li class="list-group-item border-0 ps-0 pb-0 text-sm"><b>LGA:</b> &nbsp; <span>{{ $props.tenant.tenant_lga }}</span></li>
                    <li class="list-group-item border-0 ps-0 pb-0 text-sm"><b>Postal Code:</b> &nbsp; <span>{{ $props.tenant.tenant_postcode }}</span></li>
                    <li class="list-group-item border-0 ps-0 pb-0 text-sm"><b>Address:</b> &nbsp; <span>{{ $props.tenant.tenant_resident_address }}</span></li>
                    <li class="list-group-item border-0 ps-0 pb-0 text-sm"><b>Relationship:</b> &nbsp; <span>{{ $props.tenant.tenant_relationship_status }}</span></li>
                    <li class="list-group-item border-0 ps-0 pb-0 text-sm"><b>Date of Birth:</b> &nbsp; <span>{{ $props.tenant.tenant_birth_date }}</span></li>
                    <li class="list-group-item border-0 ps-0 pb-0 text-sm"><b>Dissability:</b> &nbsp; <span>{{ $props.tenant.tenant_disability }}</span></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <h6 class="mb-0">Next of kin</h6>
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
                    <strong class="text-dark">Full Name:</strong> &nbsp; {{ $props.detail.next_kin_fullname }}
                  </p>
                  <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Relationship with tenant:</strong> &nbsp; {{ $props.detail.next_kin_relationship }}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp; {{ $props.detail.next_kin_phone }}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; {{ $props.detail.next_kin_email }}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Location:</strong> &nbsp; {{ $props.detail.next_kin_address }}, {{ $props.detail.next_kin_state }}, {{ $props.detail.next_kin_city }}</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <h6 class="mb-0">Referee</h6>
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
                    <strong class="text-dark">Full Name:</strong> &nbsp; {{ $props.detail.referee_fullname }}
                  </p>
                  <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Relationship with tenant:</strong> &nbsp; {{ $props.detail.referee_relationship }}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Occupation:</strong> &nbsp; {{ $props.detail.referee_occupation }}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp; {{ $props.detail.referee_phone }}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; {{ $props.detail.next_kin_email }}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Location:</strong> &nbsp; {{ $props.detail.referee_address }} {{ $props.detail.referee_city }}, {{ $props.detail.referee_state }}, {{ $props.detail.referee_lga }}</li>
                    
                  </ul>
                </div>
              </div>
            </div>
        </div>


        <div class="row">
        <div class="col-12">
          <div class="card my-5">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="shadow-primary border-radius-lg pt-3 pe-3 d-flex justify-content-between">
                <h6 class="text-dark text-capitalize ps-3 mt-2">Members</h6>
                <Link :href="route('new.tenant.member', $props.tenant.id)" class="btn btn-success text-white">
                  New Member
                </Link>
                
                <!-- <Link :href="route('members.create')" class="btn btn-success text-white" type="button">New Member</Link>                 -->
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Relationship</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Address</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dissability</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr v-for="member in members" :key="member.id">
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="/assets/img/team-3.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user2">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ member.household_member_fullname }}</h6>
                            <p class="text-xs text-secondary mb-0">{{ member.household_member_phone }}</p>
                          </div>
                        </div>
                      </td>

                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ member.household_member_relationship }}</p>
                        <p class="text-xs text-secondary mb-0">{{ member.household_member_sex }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">{{ member.household_member_phone }}</span>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ member.household_member_state }}</p>
                        <p class="text-xs text-secondary mb-0">{{ member.household_member_lga }}</p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ member.household_member_disability }}</span>
                      </td>
                      
                    </tr>
                    
                  </tbody>
                </table>
              </div>
             
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card my-5">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="shadow-primary border-radius-lg pt-3 pe-3 d-flex justify-content-between">
                <h6 class="text-dark text-capitalize ps-3 mt-2">Tenants Assets</h6>
                <a :href="route('assets.edit', $props.asset.id)" class="btn btn-success text-white">
                  Edit/Add to tenant's Asset
                </a>             
              </div>
            </div>
            <div class="card-body px-0 pb-2">

              <div class="table-responsive p-0" v-html="$props.asset.details">

              </div>
             
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card my-5">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="shadow-primary border-radius-lg pt-3 pe-3 d-flex justify-content-between">
                <h6 class="text-dark text-capitalize ps-3 mt-2">Tenants Items</h6>
                <a :href="route('items.edit', $props.item.id)" class="btn btn-success text-white">
                  Edit/Add to tenant's Item
                </a>               
              </div>
            </div>
            <div class="card-body px-0 pb-2">

              <div class="table-responsive p-0" v-html="$props.item.details">
                
              </div>
             
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card my-5">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="shadow-primary border-radius-lg pt-3 pe-3 d-flex justify-content-between">
                <h6 class="text-dark text-capitalize ps-3 mt-2">Security details</h6>
                <a :href="route('securities.edit', $props.security.id)" class="btn btn-success text-white" type="button">Edit/Add to Security details</a>                
              </div>
            </div>
            <div class="card-body px-0 pb-2">

              <div class="table-responsive p-0">
                <section v-html="$props.security.details"></section>
              </div>
             
            </div>
          </div>
        </div>
      </div>
      </div>

      <NewMember></NewMember>
      <!-- <NewItem></NewItem>
      <NewAsset></NewAsset> -->

    </AuthenticatedLayout>

  
</template>

<script>
import AuthenticatedLayout from '@/Layouts/Authenticated.vue'
import { Head, Link } from '@inertiajs/inertia-vue3'
import NewMember from '../Modal/New/Member.vue'
//import NewItem from '../Modal/New/Item.vue'
//import NewAsset from '../Modal/New/Asset.vue'

export default {
  components: {
    AuthenticatedLayout,
    Head,
    Link,
    NewMember,
  },

  props: {
    tenant: Object,
    detail: Object,
    asset: Object,
    item: Object,
    security: Object,
    members: Array,
    department: Object,
    building: Object,
  }
}
</script>

<style>
  .btn {
    text-transform: capitalize;
  }
</style>