import { createApp } from 'vue';
import Home from './Pages/Auth/Home.vue';

const app = createApp({});
app.component('home', Home);
app.mount('#app');
