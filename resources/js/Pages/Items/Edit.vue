<template>
    <Head title="Security details" />
  <AuthenticatedLayout>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-end">
                              <img class="img-thumbnail bordered rounded-circle" width="150" height="150" src="/assets/img/bruce-mars.jpg" alt="">
                          </div>
                          
                            <h4 class="card-title my-3">Items of {{ $props.tenantDetails.tenant_title }} {{ $props.tenantDetails.tenant_surname }} {{ $props.tenantDetails.tenant_last }}</h4>
                            <form @submit.prevent="form.post(route('items.update', $props.item.id), {preserveScroll: true})">
                               
                                <div class="form-group mb-3">
                                    <label for="my-input">Informations</label>
                                    <editor
                                        v-model="form.details"
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
                                    <input id="my-input" class="form-control" type="file" @input="form.file = $event.target.files[0]">
                                </div>

                                <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                                    {{ form.progress.percentage }}%
                                </progress>

                                <div class="form-group d-flex justify-content-between mt-3">
                                  <Link :href="route('tenants.show', $props.item.tenant_id)" class="btn btn-md btn-success" style="color: #fff"><i class="bi bi-send-check"></i> Go Back</Link>
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
import { Head, useForm, Link } from '@inertiajs/inertia-vue3'
import Editor from '@tinymce/tinymce-vue'

export default {
  components: {
    AuthenticatedLayout,
    Head,
    Editor,
    Link,
  },

  props: {
    item: Object,
    tenantDetails: Object,
  },

  setup(props) {
    let form = useForm({
        _method: 'put',
        file: null,
        details: props.item.details,
    })
    return {
      form,
    }
  }
}
</script>