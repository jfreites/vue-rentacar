import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    vehicles: []
  },
  getters: {
    allVehicles: state => state.vehicles
  },
  mutations: {
    SET_VEHICLES: (state, vehicles) => {
      state.vehicles = vehicles
    }
  },
  actions: {
    getVehicles({ commit }) {
      axios.get('http://api.vue-rentacar.test/vehicles')
      .then(response => {
        commit('SET_VEHICLES', response.data)
      })
    }
  }
})
