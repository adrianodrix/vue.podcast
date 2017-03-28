import Vue from 'vue'
import Vuex from 'vuex'

import player from './modules/player'
import podcasts from './modules/podcasts'

Vue.use(Vuex)

export default new Vuex.Store({
  modules: {
    player,
    podcasts
  }
})
