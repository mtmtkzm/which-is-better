<template>
  <div>
    <Navbar></Navbar>
    <div class="container">
      <router-view></router-view>
    </div>
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
