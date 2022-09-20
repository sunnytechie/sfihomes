<template>
    <section>
        <!-- Modal -->
<div class="modal fade" id="itemModal" tabindex="-1" aria-labelledby="itemModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="itemModalLabel">New Item</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form @submit.prevent="form.post(route('members.store'), {preserveScroll: false, onSuccess: () => form.reset(),})">
        <div class="modal-body">
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
        </div>
        

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-md btn-success" style="color: #fff"><i class="bi bi-send-check"></i> Create Now</button>
          </div>
                                
       </form>

    </div>
  </div>
</div>
    </section>
</template>


<script>
    import AuthenticatedLayout from '@/Layouts/Authenticated.vue'
    import { useForm, Head, Link } from '@inertiajs/inertia-vue3'
    
    export default {
      components: {
        AuthenticatedLayout,
        Head,
        Link
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