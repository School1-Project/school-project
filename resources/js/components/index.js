import Vue from 'vue'
import axios from 'axios'
import VueAxios from 'vue-axios'

 
Vue.use(VueAxios, axios)

import ExampleComponent from './ExampleComponent.vue'

Vue.config.productionTip = false;
new Vue({
	render: h =>h(ExampleComponent),
}).$mount("#example-component")
