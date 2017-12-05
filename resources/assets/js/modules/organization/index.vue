<template>
  <card :title="$t('organization')">
    <form @submit.prevent="search" @keydown="form.onKeydown($event)">

      <!-- Name -->
      <div class="form-group row">
        <label class="col-md-3 col-form-label text-md-right">{{ $t('organization') }}</label>
        <div class="col-md-7">
          <input v-model="form.name" type="text" name="name" class="form-control"
                 :class="{ 'is-invalid': form.errors.has('name') }" :placeholder="$t('placeholder_organization')" ref="initfocus">
          <has-error :form="form" field="name"></has-error>
        </div>
      </div>

      <!-- Submit Button -->
      <div class="form-group row">
        <div class="col-md-9 ml-md-auto">
          <v-button type="primary" nativeType="button" :loading="form.busy"  @click.native="search">{{ $t('btn_search') }}</v-button>
          <v-button type="warning" nativeType="button" :loading="form.busy" @click.native="clear" >{{ $t('btn_clear') }}</v-button>
          <v-button type="primary" nativeType="button" :loading="form.busy" @click.native="add" v-show="acl.organization_show">{{ $t('btn_add') }}</v-button>
          <v-button type="primary" nativeType="button" :loading="form.busy" @click.native="manual">{{ $t('btn_manual') }}</v-button>
        </div>
      </div>
    </form>
    <data-tables-server :data="data" :total="total" :loading="loading" :show-action-bar="false" :custom-filters="customFilters" @query-change="queryChange" v-if="showTable">
      <el-row slot="custom-tool-bar" style="margin-bottom: 10px">
        <el-col :span="10">
          <el-button type="primary" @click="importClick"><i class="el-icon-caret-bottom el-icon--right"></i> Importar</el-button>
        </el-col>
        <el-col :span="5" :offset="9">
          <el-input v-model="customFilters[0].vals" placeholder="Digite e pressione (Enter)" ></el-input>
        </el-col>
      </el-row>

      <el-table-column label="Actions" >
        <template scope="scope">
          <el-button v-for="button in customButtonsForRow(scope.row)" :key="button.name" type="text" @click="button.handler" >
            {{ button.name }}
          </el-button>
        </template>
      </el-table-column>
      <template v-for="title in titles">
        <el-table-column :prop="title.prop" :label="title.label" ></el-table-column>
      </template>
    </data-tables-server>
  </card>
</template>

<script>
import Form from 'vform'
import { mapGetters } from 'vuex'

export default {
  data: () => ({
    form: new Form({
      name: ''
    }),
    data: [],
    total: 0,
    showTable: false,
    titles: [
      {
        prop: "id",
        label: "ID"
      },
      {
        prop: "name",
        label: "Nome"
      }
    ],
    loading: true,
    customFilters: [{
        vals: '',
        props: 'flow_type',
      }, {
        vals: []
      }],
       actionColDef: {
          label: 'Actions',
          def: [{
            handler: row => {
              row.flow_no = "hello word"
            },
            name: 'Edit'
          }, {
            icon: 'message',
            type: 'text',
            handler: row => {
              console.log('RUA in row clicked', row)
            },
            name: 'RUA'
          }]
        }
  }),

  computed: mapGetters({
    acl: 'aclUser'
  }),

  metaInfo () {
    return { title: this.$t('organization') }
  },

  methods: {
    loadData(queryInfo) {
      let self = this;
      self.loading = true;
      this.form.post('api/organization/getData')
      .then(response => {
        self.data = response.data
        self.loading = false;
      })
      .catch(error => {
          this.$toast.error({
              title:'Erro',
              message:'Erro na listagem'
          });
          console.log(error.response);
          self.loading = false;
      })
    },
    queryChange(info) {
      this.loadData(info)
    },
    setShowTable(option) {
      this.showTable = option;
    },
    search() {
      let self = this;
      self.loading = true;
      setTimeout(self.setShowTable(true), 20000);

      self.showTable = true;
      this.form.post('api/organization/getData')
      .then(response => {
        self.data = response.data
        self.loading = false;
      })
      .catch(error => {
          this.$toast.error({
              title:'Erro',
              message:'Erro na listagem'
          });
          console.log(error.response);
          self.loading = false;
      })
    },
    importClick() {
      console.log('import');
    },
    clear() {
      console.log('clear');
      this.form.reset();
    },
    add() {
      console.log('filter');
    },
    manual() {
      console.log('filter');
    },
     handleClick(command) {
      this.$message(`click drapdown button ${command}`)
    },
    customButtonsForRow(row) {
       if (row.flow_type_code === 'repair') {
         return [{
            name: 'repairing',
            handler: _ => {
               this.$message(`repairing ${row.flow_no}`)
            }
         }, {
            name: 'repaired',
            handler: _ => {
                this.$message(`repaired ${row.flow_no}`)
            }
         }]
       } else {
         return [{
            name: 'Editar',
            icon: 'message',
            type: 'edit',
            handler: _ => {
              console.log(row.id);
            }
         }]
       }
    }
  },

  mounted() {
    this.queryChange({
      page: 1,
      pageSize: 20
    });
    this.$refs.initfocus.focus();
  }
}
</script>
