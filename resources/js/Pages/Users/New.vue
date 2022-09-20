<template>
    <Head title="Create New Department" />
  <AuthenticatedLayout>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">New Admin</h5>
                            <form @submit.prevent="form.post(route('users.store'), {preserveScroll: false, onSuccess: () => form.reset(),})">
                                <div class="form-group mb-3">
                                    <label for="name">Name</label>
                                    <input id="name" class="form-control" placeholder="Username" type="text" v-model="form.name" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="email">Email</label>
                                    <input id="email" class="form-control" placeholder="Email Address" type="email" v-model="form.email" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="inputTitle" class="form-label">Role</label>
                                    <select id="inputTitle" class="form-control" v-model="form.role" required>
                                    <option selected disabled>Choose...</option>
                                    <option>Admin</option>
                                    <option>HR</option>
                                    <option>Security</option>
                                    <option>User</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password">Password</label>
                                    <input id="password" class="form-control" placeholder="Passcode" type="password" v-model="form.password" required>
                                </div>

                                <div class="form-group d-flex justify-content-end mt-3">
                                    <button type="submit" class="btn btn-md btn-success" style="color: #fff"><i class="bi bi-send-check"></i> Authorize</button>
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
        role: 'Choose...',
        password: '',
        email: '',
    })
    return {
      form,
    }
  }
}
</script>