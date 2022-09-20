<template>
    <Head title="Create New Department" />
  <AuthenticatedLayout>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">New Department</h5>
                            <form @submit.prevent="form.post(route('departments.store'), {preserveScroll: false, onSuccess: () => form.reset(),})">
                                <div class="form-group mb-3">
                                    <label for="my-input">Name</label>
                                    <input id="my-input" class="form-control" placeholder="Name of department" type="text" v-model="form.name" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="my-input">Location</label>
                                    <input id="my-input" class="form-control" placeholder="Secretariat location" type="text" v-model="form.location" required>
                                </div>

                                <div class="form-group">
                                    <label for="my-input">Thumbnail</label>
                                    <input id="my-input" class="form-control" type="file" @input="form.thumbnail = $event.target.files[0]">
                                </div>

                                <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                                    {{ form.progress.percentage }}%
                                </progress>

                                <div class="form-group d-flex justify-content-end mt-3">
                                    <button type="submit" class="btn btn-md btn-success" style="color: #fff"><i class="bi bi-send-check"></i> Create Now</button>
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

  setup() {
    let form = useForm({
      name: '',
      location: '',
      thumbnail: null,
    })
    return {
      form,
    }
  }
}
</script>