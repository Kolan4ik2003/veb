import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import AvtorizaView from '../views/avtorizaView.vue'
import ContentView from '../views/ContentView.vue'
import CorzinaView from '../views/CorzinaView.vue'
import PolitikaconfiView from '../views/PolitikaconfiView.vue'
import PolzosoglView from '../views/PolzosoglView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/home',
      name: 'home',
      component: HomeView
    },

    {
      path: '/avtoriza',
      name: 'avtoriza',
      component: AvtorizaView
    },
    {
      path: '/content',
      name: 'content',
      component: ContentView
    },
    {
      path: '/corzina',
      name: 'corzina',
      component: CorzinaView
    },
    {
      path: '/politikaconfi',
      name: 'politikaconfi',
      component: PolitikaconfiView
    },
    {
      path: '/polzosogl',
      name: 'polzosogl',
      component: PolzosoglView
    },
  ]
})

export default router
