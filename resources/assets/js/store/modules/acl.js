import axios from 'axios'
import * as types from '../mutation-types'

// state
export const state = {
  acl: null
}

// mutations
export const mutations = {
  [types.SAVE_ACL] (state, { acl }) {
    state.acl = acl
  },

  [types.REMOVE_ACL] (state) {
    state.acl = null
  }
}

// actions
export const actions = {
  saveACL ({ commit, dispatch }, payload) {
    commit(types.SAVE_ACL, payload)
  },

  async fetchACL ({ commit }) {
    try {
      const { data } = await axios.get('/api/acl')

      commit(types.SAVE_ACL, { acl: data })
    } catch (e) {
      commit(types.REMOVE_ACL)
    }
  },

  updateACL ({ commit }, payload) {
    commit(types.SAVE_ACL, payload)
  },

  removeACL ({ commit }) {
    commit(types.REMOVE_ACL)
  }
}

// getters
export const getters = {
  aclUser: state => state.acl
}
