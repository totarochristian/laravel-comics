<template>
  <div id="brands" class="w-100 h-100 bg-primary text-white d-flex justify-content-center align-items-center">
    <div class="w-75 h-100 d-flex justify-content-around align-items-center gap-4">
      <FeatureComponent :imageName="elem.imageName" :title="elem.text" v-for="elem in brandsElements" />
    </div>
  </div>
</template>

<script>
  import { brandsData } from '../../../data/data';
  import FeatureComponent from '../../single/FeatureComponent.vue';
  export default {
    name: "BuyComicsComponent",
    components:{
      FeatureComponent
    },
    data(){
      return{
        brandsElements: brandsData
      }
    }
  }
</script>

<style lang="scss" scoped>
  #brands{
    min-height: 20vh;
  }
  @media screen and (max-width: 900px){
    #brands{
      div{
        flex-wrap: wrap;
        padding: 1rem 0.5rem;
      }
    }
  }
</style>