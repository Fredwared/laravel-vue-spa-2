<template>
  <div class="modal fade" id="modal-user-profile" aria-hidden="true" role="dialog" tabindex="false">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">{{ title }}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" v-show="close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <slot name="modal-tab"></slot>
          <slot name="modal-body"></slot>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'v-modal',

  props: {
    title: {
      type: String,
      required: true
    },
    close: {
      type: Boolean,
      default: true
    }
  },

  data: () => ({
    id: null
  }),
}
</script>
