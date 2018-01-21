import Vue from 'vue'
import Router from 'vue-router'

import UsersMain from '@/components/Users/UsersMain'
import Login from '@/components/Users/Login'
import Register from '@/components/Users/Register'

import Index from '@/components/Index'
import MyProject from '@/components/MyProject'
import Paints from '@/components/Paints'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'UsersMain',
      component: UsersMain,
      children: [
        {
          path: '/Login',
          component: Login
        },
        {
          path: '/Register',
          component: Register
        }
      ]
    },
    {
      path: '/index',
      name: 'Index',
      component: Index
    },
    {
      path: '/projects',
      name: 'MyProject',
      component: MyProject
    },
    {
      path: '/painting',
      name: 'Paints',
      component: Paints
    }
  ]
})
