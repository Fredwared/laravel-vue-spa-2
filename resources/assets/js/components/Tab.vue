<template>
  <div>
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item" role="presentation" v-for="tab in tabs">
        <a class="nav-link" :class="tab.addClass" data-toggle="tab" :href="tab.ref" >{{ tab.title }}</a>
      </li>
    </ul>
    <slot name="tab-content" ></slot>
  </div>
</template>

<script>
export default {
  name: 'v-tab',

  props: {
    tabs: {
      type: Array,
      required: true
    }
  },

  methods: {

  }
}
</script>
