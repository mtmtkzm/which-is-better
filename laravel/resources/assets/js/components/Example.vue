<template>
  <div class="container">
    <form action="">
      <div>
        <span>I like</span>
        <input type="text" title>
        <span>than</span>
        <input type="text" title>
        <span>.</span>
      </div>

      <div>
        <span>I like</span>
        <input type="text" title>
        <span>than</span>
        <input type="text" title>
        <span>.</span>
      </div>

      <button>DONE → </button>
    </form>
  </div>
</template>

<script>
  export default {
    mounted() {
      console.log('Component mounted.')
    }
  }
</script>

<style lang="scss" scoped></style>