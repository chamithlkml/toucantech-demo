<template>
<div class="container">
  <div class="row">
    <div class="col-md-12 mt-2">
      <h2 class="text-center">View Members</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mt-2">
      <label for="school_id" class="form-label">Select the school</label>
      <select @change="onSelected($event)" name="school_id" class="form-select" required>
        <option>Select</option>
        <option v-for="school in schools" :key="school.id" :value="school.id">{{ school.name }}</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mt-2">
      <span>Members</span>
    </div>
  </div>
  <hr />
  <MemberList :members="members" />
</div>
</template>

<script setup>
import { ref } from 'vue'
import axios from 'axios'
import MemberList from '@/components/MemberList.vue'

defineProps({
  schools: Array
})

const members = ref([])

function onSelected(event){
  axios.get('/schools/'+event.target.value+'/members')
  .then(function(response){
    members.value = response.data
  })
}
</script>