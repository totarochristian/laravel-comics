<template>
  <div id="comicsLinks" class="px-3 py-4 d-flex justify-content-center flex-wrap gap-4">
    <ComicComponent :index="index" :comicData="comic" v-for="(comic,index) in currentSeriesComics" />
  </div>
</template>

<script>
  import { comicsData } from '../../data/data';
  import ComicComponent from './ComicComponent.vue';
  export default {
    name: "ComicsLinksComponent",
    components:{
      ComicComponent
    },
    data(){
      return{
        currentSeriesComics: comicsData
      }
    }
  }
</script>

<style lang="scss" scoped>
  
</style>