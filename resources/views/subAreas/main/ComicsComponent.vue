<template>
  <div id="comics" class="w-100 h-100 d-flex flex-column justify-content-center align-items-center">
    <JumbotronComponent />
    <CurrentSeriesComponent />
  </div>
</template>

<script>
  import JumbotronComponent from '../../single/JumbotronComponent.vue';
  import CurrentSeriesComponent from '../../single/CurrentSeriesComponent.vue';
  export default {
    name: "ComicsComponent",
    components:{
      JumbotronComponent,
      CurrentSeriesComponent
    }
  }
</script>

<style lang="scss" scoped>

</style>