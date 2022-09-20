<template>
  <section>
    <!-- Modal -->
    <div
      class="modal fade"
      id="memberModal"
      tabindex="-1"
      aria-labelledby="memberModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="memberModalLabel">New Members</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <form
            @submit.prevent="
              form.post(route('members.store'), {
                preserveScroll: false,
                onSuccess: () => form.reset(),
              })
            "
          >
            <div class="modal-body">
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
                  />
                </div>
              </div>
              <div>
                
              </div>
              <input type="text" v-model="form.tenant_id">

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
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>

              <progress
                v-if="form.progress"
                :value="form.progress.percentage"
                max="100"
              >
                {{ form.progress.percentage }}%
              </progress>
            </div>

            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-bs-dismiss="modal"
              >
                Close
              </button>
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
  </section>
</template>


<script>
import AuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { useForm, Head, Link } from "@inertiajs/inertia-vue3";

export default {
  components: {
    AuthenticatedLayout,
    Head,
    Link,
  },

props: {
    tenant: Object,
},

  setup() {
    let form = useForm({
      tenant_id: '',
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
  }
};
</script>