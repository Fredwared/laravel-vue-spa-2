import Vue from 'vue'
import CxltToastr from 'cxlt-vue2-toastr'

let toastrConfigs = {
    position: 'top right',
    showDuration: 2000,
    hideDuration: 2000,
    timeOut: 8000,
    progressBar: true
}
Vue.use(CxltToastr, toastrConfigs)