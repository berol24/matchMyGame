// import { createApp } from 'vue'
// import App from './App.vue'

// createApp(App).mount('#app')




import { createApp } from 'vue'
import App from './App.vue'


import SectionCenter from "./components/sectionCenter/SectionCenter.vue";
import SectionLeft from "./components/sectionLeft/SectionLeft.vue"
import SectionRight from "./components/sectionRight/SectionRight.vue"


const app = createApp(App)

app.component('section-center', SectionCenter)
app.component('section-left', SectionLeft)
app.component('section-right', SectionRight)


app.mount('#app')

