<template lang="html">
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

<style lang="scss">
  @import '~styles/_variables.scss';

  * {
    box-sizing: border-box;
  }

  body {
    font-family: 'Avenir', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color: #2c3e50;
    background-color: #edeff0;
    margin-top: calc(#{$header-height} + 10px); //calc(#{$header-height} * (#{$header-padding} * 2));
  }

  p {
    line-height: 1.5;
  }

  a {
    color: $blue-color;
    opacity: 0.8;
    transition: color 100ms ease-in;
    text-decoration: none;

    &:hover {
      color: #387bc9;
      opacity: 1;
    }
  }

  .container {
    max-width: 780px;
    margin: 0 auto;
    flex: 1;
  }

  .fade-enter-active, .fade-enter-leave {
    transition: opacity 500ms ease-in-out;
  }

  .fade-enter, .fade-leave-to {
    opacity: 0;
  }
</style>
