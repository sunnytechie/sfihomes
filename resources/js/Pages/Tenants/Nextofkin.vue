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
                            <h4 class="card-title">Register a new tenant.</h4>
                            <form class="row g-3" @submit.prevent="form.put(route('update.NextOfKin', $props.tenantID))">
                                <div class="col-md-12">
                                    <img class="rounded-circle" id="previewImg" height="100" width="100" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973461_960_720.png" alt="Placeholder">
                                    <div class="control-input-image-position my-2">
                                        <input class="control-input-image form-control" type="file" @input="form.tenant_photo = $event.target.files[0]" onchange="previewFile(this);" required>
                                    </div>
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
import { Link } from '@inertiajs/inertia-vue3'

export default {
  components: {
    AuthenticatedLayout,
    Head,
    Link,
  },

  props: {
    tenantID: Object,
  },

  setup() {
    let form = useForm({
        tenant_photo: null,
    })
    return {
      form,
    }
  }
}
</script>
