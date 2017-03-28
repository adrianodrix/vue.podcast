<template lang="html">
  <header class="top-header">
      <div class="container">
        <player v-if="playing" :podcast="playing"></player>
        <p v-else class="welcome">Oh, hi. <strong>Choose something to play.</strong></p>
      </div>
  </header>
</template>

<script>
import { mapGetters } from 'vuex'
import Player from './player/Player'

export default {
  name: 'top-header',
  components: {
    Player
  },
  computed: {
    ...mapGetters({
      playing: 'player/getPlaying'
    })
  }
}
</script>

<style lang="css">
  @import '~styles/_variables.scss';

  .welcome {
    font-size: 1.1em;
    text-align: center;
  }

  .top-header {
    display: flex;
    align-items: center;
    width: 100%;
    height: $header-height;
    background-color: #fff;
    position: fixed;
    top: 0; left: 0;
    padding: $header-padding;
    z-index: 2;
  }
</style>
