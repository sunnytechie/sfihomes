<template>
    <Head title="Security details" />
  <AuthenticatedLayout>
    <section>
        <div class="container">
            <div class="row" style="background: #fff">
                <div class="col-md-10 offset-md-1 my-5">
                    <div class="card">
                        <div class="card-body">
                            <img class="img-thumbnail bordered rounded-circle" width="150" height="150" src="" alt="">
                            <h4 class="card-title my-3">Security details on {{ $props.tenantDetails.tenant_title }} {{ $props.tenantDetails.tenant_surname }} {{ $props.tenantDetails.tenant_last }}</h4>
                            <form @submit.prevent="form.post(route('securities.update', $props.security.id), {preserveScroll: true})">
                               
                                <div class="form-group mb-3">
                                    <label for="my-input">Informations</label>
                                    <editor
                                        v-model="form.security_details"
                                        api-key="ifprekyziwmwbff5pm4lgrqgmsm0x5yaew0tctgdk95r94ae"
                                        :init="{
                                          height: 600,
                                          menubar: true,
                                          plugins: [
                                            'advlist autolink lists link image charmap print preview anchor',
                                            'searchreplace visualblocks code fullscreen',
                                            'insertdatetime media table paste code help wordcount'
                                          ],
                                          toolbar:
                                            'undo redo | formatselect | bold italic backcolor | \
                                            alignleft aligncenter alignright alignjustify | \
                                            bullist numlist outdent indent | removeformat | help'
                                        }"
                                      />
                                </div>

                                <div class="form-group">
                                    <label for="my-input">Upload Picture</label>
                                    <input id="my-input" class="form-control" type="file" @input="form.security_file = $event.target.files[0]">
                                </div>

                                <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                                    {{ form.progress.percentage }}%
                                </progress>

                                <div class="form-group d-flex justify-content-end mt-3">
                                    <button type="submit" class="btn btn-md btn-success" style="color: #fff"><i class="bi bi-send-check"></i> Update</button>
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
import Editor from '@tinymce/tinymce-vue'

export default {
  components: {
    AuthenticatedLayout,
    Head,
    Editor,
  },

  props: {
    security: Object,
    tenantDetails: Object,
  },

  setup(props) {
    let form = useForm({
        _method: 'put',
        security_file: null,
        security_details: props.security.security_details,
    })
    return {
      form,
    }
  }
}
</script>