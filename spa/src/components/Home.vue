<template lang="html">
  <div class="">
    <podcast-simple></podcast-simple>
    <podcast-simple></podcast-simple>
    <podcast-simple></podcast-simple>
    <podcast-simple></podcast-simple>
  </div>
</template>

<script>
import PodcastSimple from './podcasts/Simple'

export default {
  name: 'home',
  components: {
    PodcastSimple
  }
}
</script>

<style lang="css">
</style>
