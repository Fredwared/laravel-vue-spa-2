import axios from 'axios'
import * as types from '../mutation-types'

// state
export const state = {
  menu: null
}

// mutations
export const mutations = {
  [types.SAVE_MENU] (state, { menu }) {
    state.menu = menu
  },

  [types.REMOVE_MENU] (state) {
    state.menu = null
  }
}

// actions
export const actions = {
  saveMenu ({ commit, dispatch }, payload) {
    commit(types.SAVE_MENU, payload)
  },

  async fetchMenu ({ commit }) {
    try {
      const { data } = await axios.get('/api/menu')

      commit(types.SAVE_MENU, { menu: data })
    } catch (e) {
      commit(types.REMOVE_MENU)
    }
  },

  updateMenu ({ commit }, payload) {
    commit(types.SAVE_MENU, payload)
  },

  removeMenu ({ commit }) {
    commit(types.REMOVE_MENU)
  }
}

// getters
export const getters = {
  menuUser: state => state.menu
}
