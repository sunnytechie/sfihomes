<template>
    <Head title="Next of Kin and Referee" />
  <AuthenticatedLayout>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="d-flex justify-content-center align-items-center my-3">
                            <div class="progresses">
                                <div class="steps">
                                <span><i class="fa fa-check"></i></span>
                                </div>
                                <span class="line"></span>
                                <div class="steps">
                                    <span class="font-weight-bold">2</span>
                                </div>
                                <span class="line"></span>
                                <div class="steps">
                                <span class="font-weight-bold">3</span>
                                </div>
                            </div> 
                        </div>
                        <div class="card-body">
                            <h4 class="card-title mb-3">Tenant Next of Kin.</h4>
                            <form class="row g-3" @submit.prevent="form.post(route('details.update', $props.detail_id))">
                                
                                <div class="col-md-2">
                                    <img class="rounded-circle" id="previewImg" height="100" width="100" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973461_960_720.png" alt="Placeholder">
                                    <div class="control-input-image-position my-2">
                                        <input class="control-input-image form-control" type="file" @input="form.next_kin_photo = $event.target.files[0]" onchange="previewFile(this);">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label for="name" class="form-label">Fullname</label>
                                    <input type="text" class="form-control" id="name" v-model="form.next_kin_fullname" placeholder="name" required>
                                </div>

                                <div class="col-md-3">
                                    <label for="relationship" class="form-label">Relationship with Next of tenant</label>
                                    <select id="relationship" class="form-select" v-model="form.next_kin_relationship" required>
                                    <option selected disabled>Choose...</option>
                                    <option>Father</option>
                                    <option>Mother</option>
                                    <option>Sister</option>
                                    <option>Brother</option>
                                    <option>Friend</option>
                                    <option>Colleague</option>
                                    <option>Boss</option>
                                    <option>Pastor</option>
                                    <option>Minister</option>
                                    <option>Others</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" v-model="form.next_kin_address" placeholder="Location address" required>
                                </div>

                                <div class="col-md-2">
                                    <label for="postcode" class="form-label">Post Code</label>
                                    <input type="text" class="form-control" id="postcode" v-model="form.next_kin_postcode" placeholder="Optional">
                                </div>

                                <div class="col-md-3">
                                    <label for="state" class="form-label">State</label>
                                    <input type="text" class="form-control" id="state" v-model="form.next_kin_state" placeholder="Anambra" required>
                                </div>

                                <div class="col-md-3">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" class="form-control" id="city" v-model="form.next_kin_city" placeholder="Onitsha City" required>
                                </div>

                                <div class="col-md-2">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="phone" v-model="form.next_kin_phone" placeholder="0800000000" required>
                                </div>

                                <div class="col-md-2">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" v-model="form.next_kin_email" placeholder="nextofkin@mail.com">
                                </div> 

                                <h4 class="card-title mt-5">Tenant Referee.</h4>

                                <div class="col-md-4">
                                    <label for="name" class="form-label">FullName</label>
                                    <input type="text" class="form-control" id="name" v-model="form.referee_fullname" placeholder="Referee fullname" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="name" class="form-label">City</label>
                                    <input type="text" class="form-control" id="name" v-model="form.referee_city" placeholder="Onitsha" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="name" class="form-label">State</label>
                                    <input type="text" class="form-control" id="name" v-model="form.referee_state" placeholder="Anambra state" required>
                                </div>

                                <div class="col-md-3">
                                    <label for="name" class="form-label">LGA</label>
                                    <input type="text" class="form-control" id="name" v-model="form.referee_lga" placeholder="Orumba North" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="name" class="form-label">Location Address</label>
                                    <input type="text" class="form-control" id="name" v-model="form.referee_address" placeholder="No.1 Umuoji street" required>
                                </div>

                                <div class="col-md-3">
                                    <label for="name" class="form-label">Phone</label>
                                    <input type="tel" class="form-control" id="name" v-model="form.referee_phone" placeholder="0800000000" required>
                                </div>

                                <div class="col-md-3">
                                    <label for="name" class="form-label">Occupation</label>
                                    <input type="text" class="form-control" id="name" v-model="form.referee_occupation" placeholder="Civil servant" required>
                                </div>

                                <div class="col-md-3">
                                    <label for="name" class="form-label">Age</label>
                                    <input type="text" class="form-control" id="name" v-model="form.referee_age" placeholder="Age" required>
                                </div>

                                <div class="col-md-3">
                                    <label for="relationship" class="form-label">Relationship with Next of tenant</label>
                                    <select id="relationship" class="form-select" v-model="form.referee_relationship" required>
                                    <option selected disabled>Choose...</option>
                                    <option>Father</option>
                                    <option>Mother</option>
                                    <option>Sister</option>
                                    <option>Brother</option>
                                    <option>Friend</option>
                                    <option>Colleague</option>
                                    <option>Boss</option>
                                    <option>Pastor</option>
                                    <option>Minister</option>
                                    <option>Others</option>
                                    </select>
                                </div>



                                <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                                    {{ form.progress.percentage }}%
                                </progress>

                                <div class="form-group d-flex justify-content-end mt-3">
                                    <button type="submit" class="btn px-5 btn-success" style="color: #fff">Next <i class="bi bi-skip-forward"></i></button>
                                </div>
                            </form>
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
import { Head, useForm, Link } from '@inertiajs/inertia-vue3'

export default {
  components: {
    AuthenticatedLayout,
    Head,
    Link,
  },

props: {
    detail_id: Object,
},

  setup() {
    let form = useForm({
        _method: 'put',
        next_kin_photo: null,
        next_kin_fullname: '',
        next_kin_relationship: 'Choose...',
        next_kin_address: '',
        next_kin_postcode: '',
        next_kin_state: '',
        next_kin_city: '',
        next_kin_phone: '',
        next_kin_email: '',
        referee_fullname: '',
        referee_city: '',
        referee_state: '',
        referee_lga: '',
        referee_phone: '',
        referee_relationship: 'Choose...',
        referee_address: '',
        referee_occupation: '',
        referee_age: '',
    })
    return {
      form,
    }
  }
}
</script>
