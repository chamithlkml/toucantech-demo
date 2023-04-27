<template>
<div class="container">
  <div v-for="member in members" :key="member.id" class="row border-bottom">
    <div class="col-md-12">{{ member.name }}</div>
  </div>
</div>
</template>

<script setup>
defineProps({
  members: Array
})
</script>