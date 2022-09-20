<template>
  <Head title="Log in" />

    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
      <div class="card card-plain">

        <div class="card-header">
          <h4 class="font-weight-bolder">Sign in</h4>
          <p class="mb-0">Enter your email and password to login</p>
          <breeze-validation-errors class="mb-3" />
            <div v-if="status" class="alert alert-success mb-3 rounded-0" role="alert">
              {{ status }}
            </div>
        </div>

        <div class="card-body">
          <form role="form" @submit.prevent="submit">
          
            <div class="form-group mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" id="email" v-model="form.email" required>
            </div>

            <div class="form-group mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" id="password" v-model="form.password" required>
            </div>

            <div class="form-check form-check-info text-start ps-0">
              <div class="form-check">
                <breeze-checkbox id="remember_me" name="remember" v-model:checked="form.remember" />

                <label class="form-check-label" for="remember_me">
                  Remember Me
                </label>
              </div>
            </div>


            <div class="text-center">
              <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
                <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
                  <span class="visually-hidden">Loading...</span>
                </div>
                Login
                </button>
            </div>
          </form>
        </div>
        <div class="card-footer text-center pt-0 px-lg-2 px-1">
          <p class="mb-2 text-sm mx-auto">
            <Link v-if="canResetPassword" :href="route('password.request')" class="text-primary text-gradient font-weight-bold">
            Forgot your password?
          </Link>
          </p>
        </div>
      </div>
    </div>

</template>

<script>
import BreezeButton from '@/Components/Button.vue'
import BreezeGuestLayout from "@/Layouts/Guest.vue"
import BreezeInput from '@/Components/Input.vue'
import BreezeCheckbox from '@/Components/Checkbox.vue'
import BreezeLabel from '@/Components/Label.vue'
import BreezeValidationErrors from '@/Components/ValidationErrors.vue'
import { Head, Link } from '@inertiajs/inertia-vue3'

export default {
  layout: BreezeGuestLayout,

  components: {
    Head,
    BreezeButton,
    BreezeInput,
    BreezeCheckbox,
    BreezeLabel,
    BreezeValidationErrors,
    Link,
  },

  props: {
    canResetPassword: Boolean,
    status: String
  },

  data() {
    return {
      form: this.$inertia.form({
        email: '',
        password: '',
        remember: false
      })
    }
  },

  methods: {
    submit() {
      this.form
          .transform(data => ({
            ... data,
            remember: this.form.remember ? 'on' : ''
          }))
          .post(this.route('login'), {
            onFinish: () => this.form.reset('password'),
          })
    }
  }
}
</script>

<style>
  .card-header {
    background: #F0F2F5 !important;
    border: none !important;
  }

  .form-check {
    padding-left: 0 !important;
  }
  
</style>
