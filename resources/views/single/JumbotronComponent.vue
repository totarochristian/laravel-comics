<template>
  <div id="jumbotron" class="w-100">
    <img class="w-100 h-100" src="/images/jumbotron.jpg" alt="Jumbotron">
  </div>
</template>

<script>
  export default {
    name: "JumbotronComponent"
  }
</script>

<style lang="scss" scoped>
  #jumbotron{
    height: 40vh;
    img{
      object-fit: cover;
      object-position: top center;
    }
  }
</style>