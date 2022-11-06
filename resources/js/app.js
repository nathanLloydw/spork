require('./bootstrap')

import { createApp } from 'vue';
import component from "./components/component.vue";
import '../css/app.css';

const app = createApp({})

app.component('component', component)

app.mount('#app')
