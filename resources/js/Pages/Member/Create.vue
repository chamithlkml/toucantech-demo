<template>
<div class="container">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-center">Add new member</h2>
      </div>
    </div>
  </div>
  <form>
    <div class="row justify-content-center">
      <div class="col-md-6 mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="string" class="form-control" id="name">
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6 mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email">
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6 mb-3">
        <label for="school" class="form-label">School</label>
        <select class="form-select">
          <option>Select</option>
          <option v-for="school in schools" :key="school.id" :value="school.id">{{ school.name }}</option>
        </select>
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
import { ref } from 'vue'
defineProps(['schools'])
const selecteSchoolId = ref(0)
function setSchool(id){
  console.log(id)
}
</script>