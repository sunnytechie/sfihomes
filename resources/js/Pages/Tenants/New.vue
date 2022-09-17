<template>
    <Head title="New Tenant" />
  <AuthenticatedLayout>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="d-flex justify-content-center align-items-center my-3">
                            <div class="progresses">
                                <div class="steps">
                                    <span class="font-weight-bold">1</span>
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
                            <h4 class="card-title">Register a new tenant.</h4>
                            <form class="row g-3" @submit.prevent="form.post(route('tenants.store'), {preserveScroll: false,})">
                                <div class="col-md-12">
                                    <img class="rounded-circle" id="previewImg" height="100" width="100" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973461_960_720.png" alt="Placeholder">
                                    <div class="control-input-image-position my-2">
                                        <input class="control-input-image form-control" type="file" @input="form.tenant_photo = $event.target.files[0]" onchange="previewFile(this);" required>
                                    </div>
                                </div>

                                <!-- NAmes -->
                                <div class="col-md-3">
                                    <label for="inputTitle" class="form-label">Title</label>
                                    <select id="inputTitle" class="form-select" v-model="form.tenant_title" required>
                                    <option selected disabled>Choose...</option>
                                    <option>Mr</option>
                                    <option>Mrs</option>
                                    <option>Miss</option>
                                    <option>Master</option>
                                    <option>Dr.</option>
                                    <option>Engr.</option>
                                    <option>Pastor</option>
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label for="surname" class="form-label">Surname</label>
                                    <input type="text" class="form-control" id="surname" v-model="form.tenant_surname" placeholder="Surname" required>
                                </div>

                                <div class="col-md-3">
                                    <label for="firstname" class="form-label">Firstname</label>
                                    <input type="text" class="form-control" id="firstname" v-model="form.tenant_last" placeholder="First Name" required>
                                </div>

                                <div class="col-md-3">
                                    <label for="middlename" class="form-label">Middle Name</label>
                                    <input type="text" class="form-control" id="middlename" v-model="form.tenant_middle_name" placeholder="Optional">
                                </div>
                                <!-- //End NAmes -->

                                <!-- //##### -->
                                <div class="col-md-2">
                                    <label for="inputTitle" class="form-label">Sex</label>
                                    <select id="sex" class="form-select" v-model="form.tenant_sex" required>
                                    <option selected disabled>Choose...</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    </select>
                                </div>

                                <div class="col-md-2">
                                    <label for="input" class="form-label">Birthday</label>
                                    <input type="date" class="form-control" id="birthday" v-model="form.tenant_birth_date" required>
                                </div>

                                <div class="col-md-3">
                                    <label for="inputTitle" class="form-label">Relationship Status</label>
                                    <select id="relationship" class="form-select" v-model="form.tenant_relationship_status" required>
                                    <option selected disabled>Choose...</option>
                                    <option>Married</option>
                                    <option>Single</option>
                                    <option>Divorced</option>
                                    <option>Widow</option>
                                    <option>Widower</option>
                                    </select>
                                </div>

                                <div class="col-md-2">
                                    <label for="dissability" class="form-label">Dissability</label>
                                    <select id="dissability" class="form-select" v-model="form.tenant_disability" required>
                                    <option selected disabled>Choose...</option>
                                    <option>No</option>
                                    <option>Yes</option>
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label for="kids" class="form-label">How many children do you have?</label>
                                    <input type="number" class="form-control" id="kids" v-model="form.tenant_number_of_kids">
                                </div>
                                <!-- //End#### -->

                                <!-- //Email#Phone#### -->
                                <div class="col-md-3">
                                    <label for="homephone" class="form-label">Home Line</label>
                                    <input type="tel" class="form-control" id="homephone" placeholder="080111111111" v-model="form.tenant_home_number">
                                </div>

                                <div class="col-md-3">
                                    <label for="oficephone" class="form-label">Office Line</label>
                                    <input type="tel" class="form-control" id="oficephone" placeholder="08222222222" v-model="form.tenant_office_number">
                                </div>

                                <div class="col-md-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="you@mail.com" v-model="form.tenant_email">
                                </div>

                                <div class="col-md-3">
                                    <label for="personalphone" class="form-label">Personal Line</label>
                                    <input type="tel" class="form-control" id="personalphone" placeholder="08033333333" v-model="form.tenant_mobile_phone" required>
                                </div>
                                <!-- //EndEmail#Phone#### -->

                                <!-- Location -->
                                <div class="col-md-6">
                                    <label for="state" class="form-label">State</label>
                                    <input type="text" class="form-control" id="state" placeholder="Anambra State" v-model="form.tenant_state_origin" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" class="form-control" id="city" placeholder="Onitsha City" v-model="form.tenant_city" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="lga" class="form-label">LGA</label>
                                    <input type="text" class="form-control" id="lga" placeholder="Orumba North" v-model="form.tenant_lga" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="postalcode" class="form-label">Postal Code</label>
                                    <input type="number" class="form-control" id="postalcode" placeholder="756434" v-model="form.tenant_postcode">
                                </div>

                                <div class="col-md-4">
                                    <label for="address" class="form-label">Residental Address</label>
                                    <input type="text" class="form-control" id="address" placeholder="Along Umuoji Road, Transformation Camp" v-model="form.tenant_resident_address" required>
                                </div>
                                <!-- //End Location -->

                                <div class="col-md-4">
                                    <label for="department" class="form-label">Department Name</label>
                                    <select id="department" class="form-select" v-model="form.department_id" required>
                                    <option selected disabled>Choose...</option>
                                        <option v-for="department in departments" :key="department.id">{{ department.name }}</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label for="building" class="form-label">Building/Quaters</label>
                                    <select id="building" class="form-select" v-model="form.building_id" required>
                                    <option selected disabled>Choose...</option>
                                        <option v-for="building in buildings" :key="building.id">{{ building.name }}</option>
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
import { Head, useForm } from '@inertiajs/inertia-vue3'

export default {
  components: {
    AuthenticatedLayout,
    Head,
  },

  props: {
    departments: Array,
    buildings: Array,
  },

 
  setup() {
    let form = useForm({
        tenant_photo: null,
        building_id: 'Choose...',
        department_id: 'Choose...',
        tenant_title: 'Choose...',
        tenant_surname: '',
        tenant_middle_name: '',
        tenant_last: '',
        tenant_sex: 'Choose...',
        tenant_birth_date: '',
        tenant_relationship_status: 'Choose...',
        tenant_state_origin: '',
        tenant_city: '',
        tenant_lga: '',
        tenant_postcode: '',
        tenant_resident_address: '',
        tenant_number_of_kids: 'Choose...',
        tenant_disability: 'Choose...',
        tenant_home_number: '',
        tenant_office_number: '',
        tenant_email: '',
        tenant_mobile_phone: '',
    })
    return {
      form,
    }
  }
}
</script>
