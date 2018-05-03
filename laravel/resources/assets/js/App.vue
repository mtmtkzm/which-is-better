<template>
  <div>
    <Navbar></Navbar>
    <h1>App.vue</h1>
    <router-view></router-view>
  </div>
</template>
<script>
  import Navbar from "./components/common/Navbar";

  export default {
    components: {
      Navbar
    }
  };
</script>
