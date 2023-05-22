<template>
  <div id="currentSeries" class="w-100 h-100 d-flex flex-column justify-content-start align-items-center pb-4">
    <div class="w-75 ">
      <ButtonComponent title="current series" :filled="true" :size="3"/>
    </div>
    <div class="w-75 h-100 d-flex flex-column justify-content-start align-items-start pb-4">
      <ComicsLinksComponent />
      <ButtonComponent title="load more" :filled="true" :size="2" class="align-self-center"/>
    </div>
  </div>
</template>

<script>
  import ButtonComponent from './ButtonComponent.vue';
  import ComicsLinksComponent from './ComicsLinksComponent.vue';
  export default {
    name: "CurrentSeriesComponent",
    components: {
      ButtonComponent,
      ComicsLinksComponent
    }
  }
</script>

<style lang="scss" scoped>
  #currentSeries{
    min-height: 60vh;
    margin-top: -1.7rem;
  }
  @media screen and (max-width: 900px){
    #currentSeries{
      div:last-child{
        width: 100%!important;
      }
    }
  }
</style>