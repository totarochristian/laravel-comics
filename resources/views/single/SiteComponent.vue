<template>
  <div class="d-flex flex-column justify-content-start align-items-start">
    <h5 class="fw-semibold text-uppercase">{{ list.title }}</h5>
    <LinksComponent :links="list.links" />
  </div>
</template>

<script>
  import LinksComponent from './LinksComponent.vue';
  export default {
    name: "SiteComponent",
    props:[
      "list"
    ],
    components:{
      LinksComponent
    }
  }
</script>

<style lang="scss" scoped>

</style>