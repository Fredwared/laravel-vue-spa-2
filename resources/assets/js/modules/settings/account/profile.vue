<template>
    <card :title="$t('your_info')">
        <form @submit.prevent="update" @keydown="form.onKeydown($event)">

            <!-- Name -->
            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">{{ $t('name') }}</label>
                <div class="col-md-7">
                    <input v-model="form.name" type="text" name="name" class="form-control"
                           :class="{ 'is-invalid': form.errors.has('name') }" ref="initfocus">
                    <has-error :form="form" field="name"></has-error>
                </div>
            </div>

            <!-- Email -->
            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">{{ $t('email') }}</label>
                <div class="col-md-7">
                    <input v-model="form.email" type="email" name="email" class="form-control"
                           :class="{ 'is-invalid': form.errors.has('email') }">
                    <has-error :form="form" field="email"></has-error>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="form-group row">
                <div class="col-md-9 ml-md-auto">
                    <v-button type="success" :loading="form.busy" v-if="acl.user_update">{{ $t('update') }}</v-button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-user-profile" @click="modal">Abrir Modal</button>
                </div>
            </div>
        </form>

        <!-- Modal -->
        <v-modal :close="true" :title="modalTitle">
            <v-tab slot="modal-tab" :tabs="tabs">
                <div class="tab-content" slot="tab-content">
                    <tab-first></tab-first>
                    <tab-second></tab-second>
                </div>
            </v-tab>
        </v-modal>
    </card>
</template>

<script>
import Form from 'vform'
import { mapGetters } from 'vuex'
import VModal from '../../../components/Modal.vue'
import VTab from '../../../components/Tab.vue'
import TabFirst from './tabs/first/first.vue'
import TabSecond from './tabs/second/second.vue'

export default {
  data: () => ({
    form: new Form({
      name: '',
      email: ''
    })
  }),

  computed: mapGetters({
    user: 'authUser',
    acl: 'aclUser',
    tabs: 'modalTabs',
    modalTitle: 'modalActionTitle',
  }),

  created () {
    // Fill the form with user data.
    this.form.keys().forEach(key => {
      this.form[key] = this.user[key]
    })
  },

  components: {
    TabFirst,
    TabSecond,
  },

  methods: {
    async update () {
      await this.form
                .patch('/api/settings/profile')
                .then(response => {
                  this.$store.dispatch('updateUser', { user: response.data });
                  this.$toast.success({
                    title:'Sucesso',
                    message:'Organização alterada.'
                  });
                })
                .catch(err => {
                  this.$toast.warn({
                    title:'Validação',
                    message:'Verifique o(s) campo(s).'
                  });
                })
    },
    modal() {
        this.$store.dispatch('fetchUser')
    }
  },

  mounted() {
    this.$refs.initfocus.focus();
  }
}
</script>
