<template>
  <div :id="'comic_'+index" class="comic d-flex flex-column">
    <div class="comicImage">
      <img :src="comicData.thumb" :alt="comicData.series" class="w-100 h-100">
      <span class="type text-uppercase fw-bold">{{ comicData.type }}</span>
      <span class="price fs-1 fw-bold">{{ comicData.price }}</span>
    </div>
    <p class="w-100 text-uppercase pt-3">{{ comicData.series }}</p>
  </div>
</template>

<script>
  export default {
    name: "ComicComponent",
    props:{
      index: Number,
      comicData: Object
    }
  }
</script>

<style lang="scss" scoped>
  $squareSize: 210px;
  .comic{
    width: $squareSize;
    .comicImage{
      position: relative;
      width: 100%;
      height: $squareSize;
      img{
        object-fit: cover;
      }
      .type,.price{
        visibility: hidden;
        position: absolute;
      }
      .type{
        top: 10px;
        right: 10px;
      }
      .price{
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
      }
    }
    &:hover{
        cursor: pointer;
        .comicImage{
          img{
            filter: brightness(50%);
          }
          .type,.price{
            visibility: visible;
          }
        }
      }
  }
</style>