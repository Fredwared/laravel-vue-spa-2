import Vue from 'vue'
import Icon from './Icon'
import Card from './Card'
import Child from './Child'
import Button from './Button'
import Checkbox from './Checkbox'
import Modal from './Modal'
import Tab from './Tab'
import Datatable from './Datatable'
import { HasError, AlertError, AlertSuccess } from 'vform'

Vue.component(Icon.name, Icon)
Vue.component(Card.name, Card)
Vue.component(Child.name, Child)
Vue.component(Button.name, Button)
Vue.component(Checkbox.name, Checkbox)
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
Vue.component(AlertSuccess.name, AlertSuccess)
Vue.component(Modal.name, Modal)
Vue.component(Tab.name, Tab)
Vue.component(Datatable.name, Datatable)
