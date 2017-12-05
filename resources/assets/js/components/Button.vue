<template>
  <button :type="nativeType" :disabled="loading" class="btn" :class="{
    [`btn-${type}`]: true,
    'btn-block': block,
    'btn-lg': large,
    'btn-loading': loading
  }">
    <slot></slot>
  </button>
</template>

<script>
export default {
  name: 'v-button',

  props: {
    type: {
      type: String,
      default: 'primary'
    },

    nativeType: {
      type: String,
      default: 'submit'
    },

    loading: {
      type: Boolean,
      default: false
    },

    block: Boolean,
    large: Boolean
  }
}
</script>

<style>
  button {
    cursor: pointer;
  }
  .btn-round {
    border-radius: 1000px;
  }
</style>