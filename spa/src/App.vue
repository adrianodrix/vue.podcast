<template>
  <div id="app">
    <top-header></top-header>
    <div class="container">
      <home></home>
    </div>
  </div>
</template>

<script>
import TopHeader from './components/TopHeader.vue'
import Home from './components/Home.vue'

export default {
  name: 'app',
  components: {
    TopHeader,
    Home
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
}
</style>
