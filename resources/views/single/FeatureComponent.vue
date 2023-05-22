<template>
  <div class="featureElement d-flex gap-2 align-items-center">
    <img :src="GetImagePath(imageName)" :alt="title">
    <span class="h-100 fw-semibold text-uppercase">{{ title }}</span>
  </div>
</template>

<script>
  export default {
    name: "FeatureComponent",
    props: [
      "imageName",
      "title"
    ],
    methods: {
      GetImagePath(imageName){
        return new URL("/images/"+imageName,import.meta.url).href;
      }
    }
  }
</script>

<style lang="scss" scoped>
  .featureElement{
    img {
      width: 65px;
      height: 65px;
      object-fit: contain;
    }
  }
</style>