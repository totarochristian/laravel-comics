<template>
  <div id="socials" class="d-flex gap-3">
    <a :href="social.link" v-for="social in socialElements">
      <img :src="GetImagePath(social.imageName)" :alt="social.name">
    </a>
  </div>
</template>

<script>
  import { socialsData } from '../../data/data';
  export default {
    name: "SocialComponent",
    data(){
      return{
        socialElements: socialsData
      }
    },
    methods: {
      GetImagePath(imageName){
        return new URL("/images/"+imageName,import.meta.url).href;
      }
    }
  }
</script>

<style lang="scss" scoped>
  a{
      &:hover img{
        filter: brightness(0) invert(1);
      }
    }
</style>