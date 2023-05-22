<template>
  <div class="d-flex flex-column">
    <a class="fs-7 text-capitalize" :href="link.link" v-for="link in links">{{ link.text }}</a>
  </div>
</template>

<script>
  export default {
    name: "LinksComponent",
    props: [
      "links"
    ]
  }
</script>

<style lang="scss" scoped>
  a{
    text-decoration: none;
    color: grey;
    &:hover{
      color: white;
      text-decoration: underline;
    }
  }
</style>