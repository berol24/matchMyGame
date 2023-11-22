<!-- <template>
  <img alt="Vue logo" src="./assets/logo.png">
  <HelloWorld msg="Welcome to Your Vue.js App"/>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'

export default {
  name: 'App',
  components: {
    HelloWorld
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style> -->


<script>

</script>

<template>
  <div class="accueil">
    <section-left class="left" />
    <section-center class="center" />
    <section-right class="right" />
  </div>
</template>

<style scoped>
.accueil {
  display: flex;
  justify-content: center;
  align-items: center;
}

.left,
.center,
.right {
  margin: 8px;
}

.left {
  width: 469px;
}
</style>
