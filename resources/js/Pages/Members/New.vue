<template>
  <Head title="New Member" />
  <AuthenticatedLayout>
    <section>
      <div class="container">
        <div class="col-md-8 offset-2">
          <div class="card">
        <div class="card-header px-4 pt-2 pb-0">
          <h5>New Member</h5>
        </div>
        <div class="card-body">
          <form
            @submit.prevent="
              form.post(route('members.store'), {
                preserveScroll: false,
                onSuccess: () => form.reset(),
              })
            "
          >
            
              <div class="form-group mb-3">
                <img
                  class="rounded-circle"
                  id="previewImg"
                  height="100"
                  width="100"
                  src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973461_960_720.png"
                  alt="Placeholder"
                />
                <div class="control-input-image-position my-2">
                  <input
                    class="control-input-image form-control"
                    type="file"
                    @input="
                      form.household_member_photo = $event.target.files[0]
                    "
                    onchange="previewFile(this);"
                    required
                  />
                </div>
              </div>
              <div>
                
              </div>
              <input type="hidden" v-model="form.tenant_id">

              <div class="form-group mb-3">
                <label for="my-input">Full Name</label>
                <input
                  id="my-input"
                  class="form-control"
                  placeholder="Samuel Perry"
                  type="text"
                  v-model="form.household_member_fullname"
                  required
                />
              </div>

              <div class="form-group mb-3">
                <label for="inputTitle" class="form-label">Relationship</label>
                <select
                  id="inputTitle"
                  class="form-select"
                  v-model="form.household_member_relationship"
                  required
                >
                  <option selected disabled>Choose...</option>
                  <option>Father</option>
                  <option>Mother</option>
                  <option>Brother</option>
                  <option>Sister</option>
                  <option>Uncle</option>
                  <option>Aunty</option>
                  <option>Counsin</option>
                  <option>Nephew</option>
                  <option>Niece</option>
                  <option>Friend</option>
                </select>
              </div>

              <div class="form-group mb-3">
                <label for="inputTitle" class="form-label">Sex</label>
                <select
                  id="inputTitle"
                  class="form-select"
                  v-model="form.household_member_sex"
                  required
                >
                  <option selected disabled>Choose...</option>
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>

              <div class="form-group mb-3">
                <label for="my-input">Age</label>
                <input
                  id="my-input"
                  class="form-control"
                  placeholder="31"
                  type="number"
                  v-model="form.household_member_birth"
                  required
                />
              </div>

              <div class="form-group mb-3">
                <label for="my-input">Phone Number</label>
                <input
                  id="my-input"
                  class="form-control"
                  placeholder="08011111111"
                  type="tel"
                  v-model="form.household_member_phone"
                  required
                />
              </div>

              <div class="form-group mb-3">
                <label for="my-input">State of Origin</label>
                <input
                  id="my-input"
                  class="form-control"
                  placeholder="31"
                  type="text"
                  v-model="form.household_member_state"
                  required
                />
              </div>

              <div class="form-group mb-3">
                <label for="my-input">LGA</label>
                <input
                  id="my-input"
                  class="form-control"
                  placeholder="31"
                  type="text"
                  v-model="form.household_member_lga"
                  required
                />
              </div>

              <div class="form-group mb-3">
                <label for="inputTitle" class="form-label">Disability</label>
                <select
                  id="inputTitle"
                  class="form-select"
                  v-model="form.household_member_disability"
                  required
                >
                  <option disabled>Choose...</option>
                  <option>No</option>
                  <option>Yes</option>
                </select>
              </div>

              <progress
                v-if="form.progress"
                :value="form.progress.percentage"
                max="100"
              >
                {{ form.progress.percentage }}%
              </progress>
            
              <div class="d-flex justify-content-end">
                <button
                type="submit"
                class="btn btn-md btn-success"
                style="color: #fff"
              >
                <i class="bi bi-send-check"></i> Submit
              </button>
              </div>
              
          </form>
        </div>
      </div>
        </div>
      </div>
    </section>
    </AuthenticatedLayout>
</template>

<script>
    import AuthenticatedLayout from '@/Layouts/Authenticated.vue'
    import { Head, Link, useForm } from '@inertiajs/inertia-vue3'
    
    export default {
      components: {
        AuthenticatedLayout,
        Head,
        Link
      },
    
      props: {
        tenant: Object,
        detail: Object,
        assets: Array,
        items: Array,
        security: Object,
        members: Array,
        tenantIDforThisMember: Object
      },

      setup(props) {
    let form = useForm({
      tenant_id: props.tenantIDforThisMember,
      household_member_photo: '',
      household_member_fullname: '',
      household_member_relationship: 'Choose...',
      household_member_sex: 'Choose...',
      household_member_birth: '',
      household_member_phone: '',
      household_member_state: '',
      household_member_lga: '',
      household_member_disability: 'Choose...',
      household_member_photo: null,
    });
    return {
      form,
    };
  },


    }
    </script>