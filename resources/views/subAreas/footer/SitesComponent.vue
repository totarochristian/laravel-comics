<template>
  <div id="sites" class="w-100 text-white d-flex justify-content-center align-items-center overflow-hidden">
    <div class="w-75 d-flex justify-content-between align-items-center gap-4">
      <div class="col-4 p-4 d-flex justify-content-between flex-wrap gap-1">
        <SiteComponent :list="list" v-for="list in sitesElements" />
      </div>
      <img src="/images/dc-logo-bg.png" alt="Logo DC">
    </div>
  </div>
</template>

<script>
  import { sitesData } from '../../../data/data';
  import SiteComponent from '../../single/SiteComponent.vue';
  export default {
    name: "SitesComponent",
    components:{
      SiteComponent
    },
    data(){
      return{
        sitesElements: sitesData
      }
    }
  }
</script>

<style lang="scss" scoped>
  #sites{
    height: 40vh;
    background-image: url("/images/footer-bg.jpg");
    background-size: cover;
  }
  @media screen and (max-width: 1474px){
    #sites{
      div{
        width: 80%;
        div{
          div{
            width: auto!important;
          }
        }
      }
    }
  }
  @media screen and (max-width: 767.98px){
    #sites{
      img{
        display: none;
      }
      div{
        width: 100%;
      }
    }
  }
</style>