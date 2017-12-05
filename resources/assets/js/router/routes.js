export default ({ authGuard, guestGuard }) => [
  { path: '/', name: 'welcome', component: require('~/modules/welcome.vue') },

  // Authenticated routes.
  ...authGuard([
      { path: '/dashboard', name: 'dashboard', component: require('~/modules/dashboard/index.vue') },
      { path: '/organization', name: 'organization', component: require('~/modules/organization/index.vue')},
      // { path: '/organization/create', name: 'organization.create', component: require('~/modules/organization/_form.vue')},
      { path: '/user', name: 'user', component: require('~/modules/user/index.vue')},
      { path: '/settings/account', component: require('~/modules/settings/account/index.vue'),
          children: [
              { path: '', redirect: { name: 'settings.account.profile' }},
              { path: 'profile', name: 'settings.account.profile', component: require('~/modules/settings/account/profile.vue') },
              { path: 'password', name: 'settings.account.password', component: require('~/modules/settings/account/password.vue') }
          ]
      }
  ]),
  // Guest routes.
  ...guestGuard([
    { path: '/login', name: 'login', component: require('~/modules/auth/login.vue') },
    { path: '/register', name: 'register', component: require('~/modules/auth/register.vue') },
    { path: '/password/reset', name: 'password.request', component: require('~/modules/auth/password/email.vue') },
    { path: '/password/reset/:token', name: 'password.reset', component: require('~/modules/auth/password/reset.vue') }
  ]),

  { path: '*', component: require('~/modules/errors/404.vue') }
]
