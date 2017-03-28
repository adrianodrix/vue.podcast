<template lang="html">
  <div class="player">
    <div class="player__header">
      <span>Now playing</span>: {{ podcast.title }}
    </div>
    <audio controls autoplay ref="player" class="player__audio">
      <source :src="podcast.files.mp3" type="audio/mp3" v-if="podcast.files.mp3">
      <source :src="podcast.files.ogg" type="audio/ogg" v-if="podcast.files.ogg">
      Your browser does not support the audio element.
    </audio>
  </div>
</template>

<script>
import { mapActions } from 'vuex'

export default {
  props: [
    'podcast'
  ],
  watch: {
    podcast () {
      setTimeout(() => {
        this.$refs.player.load()
      }, 100)
    }
  },
  methods: {
    ...mapActions({
      setPlaying: 'player/setPlaying'
    })
  },
  mounted () {
    this.$refs.player.addEventListener('ended', () => {
      this.setPlaying(null)
    })
  }
}
</script>

<style lang="scss">
  @import '~styles/_variables.scss';

  .player {
    width: 100%;
    padding: $header-padding;

    &__header {
      font-weight: 500px;
      margin-bottom: 20px;

      span {
        font-weight: 800;
      }
    }

    &__audio {
      width: 100%;
    }
  }
</style>
