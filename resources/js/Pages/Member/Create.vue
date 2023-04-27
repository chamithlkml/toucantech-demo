<template>
<div class="container">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mt-2">
        <h2 class="text-center">Add new member</h2>
      </div>
    </div>
  </div>
  <form @submit.prevent="form.post('/members/store')" class="needs-validation" novalidate>
    <div class="row justify-content-center">
      <div class="col-md-6 mb-3 has-validation">
        <label for="name" class="form-label">Name</label>
        <input v-model="form.name" type="string" class="form-control" id="name" required>
        <small v-if="form.errors.name" class="form-text text-muted">{{ form.errors.name }}</small>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6 mb-3">
        <label for="email" class="form-label">Email address</label>
        <input v-model="form.email" type="email" class="form-control" id="email" required>
        <small v-if="form.errors.email" class="form-text text-muted">{{ form.errors.email }}</small>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6 mb-3">
        <label for="school_id" class="form-label">School</label>
        <select v-model="form.school_id" name="school_id" class="form-select" required>
          <option>Select</option>
          <option v-for="school in schools" :key="school.id" :value="school.id">{{ school.name }}</option>
        </select>
        <small v-if="form.errors.school_id" class="form-text text-muted">{{ form.errors.school_id }}</small>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6 mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'

defineProps({
  schools: Array
})

const form = useForm({
  name: null,
  email: null,
  school_id: null
})

</script>