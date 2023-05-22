<template>
  <button type="button" class="btn text-white text-uppercase fw-bold rounded-0" :class="{ 'btn-primary': filled, 'btn-outline-primary': !filled, 'btn-lg':size==3, 'btn-sm': size==1 }">{{ title }}</button>
</template>

<script>
  export default {
    name: "ButtonComponent",
    props:{
      title: String,
      filled: Boolean,
      size: Number
    }
  }
</script>

<style lang="scss" scoped>
  button{
    min-width: 180px;
  }
</style>