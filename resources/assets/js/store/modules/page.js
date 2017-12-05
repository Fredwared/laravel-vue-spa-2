import axios from 'axios'
import * as types from '../mutation-types'

// state
export const state = {
  title: null,
  modal: {
    id: null, // ID que define se tela vai ser montada como edição ou cadastro
    ref: 'module-crud',
    currentTab: 'first',
    title: 'Profile',
    tabs: [
      {
        title: 'Dados',
        ref: '#first',
        addClass: 'active'
      },
      {
          title: 'Aba 2',
          ref: '#second'
      }
    ]
  }
}

// mutations
export const mutations = {
  [types.SET_MODAL_ID] (state, { id }) {
    state.modal.id = id
  },
}

// actions
export const actions = {
  setModalId ({ commit }, payload) {
    commit(types.SET_MODAL_ID, payload)
  },
}

// getters
export const getters = {
  pageTitle: state => state.title,
  pageModal: state => state.modal,
  modalId: state => state.modal.id,
  modalTabs: state => state.modal.tabs,
  modalActionTitle: state => state.modal.id ? state.modal.title + ' ' + '(Editar)' : state.modal.title + ' ' + '(Cadastrar)'
}
