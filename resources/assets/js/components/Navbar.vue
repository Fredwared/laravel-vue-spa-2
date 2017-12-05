<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <router-link :to="{ name: 'welcome' }" class="navbar-brand">
        {{ appName }}
      </router-link>

      <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarToggler" aria-controls="navbarToggler"
        aria-expanded="false" :aria-label="$t('toggle_navigation')"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li> -->
        </ul>

        <ul class="navbar-nav">
          <!-- Authenticated -->
          <template v-if="authenticated">
            <router-link :to="{ name: 'settings.account.profile' }" tag="li" class="nav-item">
              <a class="nav-link">
                {{ user.name }}
              </a>
            </router-link>
            <li class="nav-item" :class="{'dropdown': hasChild(menu.children)}" v-for="menu in menus">
              <template v-if="hasChild(menu.children)">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ menu.name }}</a>
                <div class="dropdown-menu">
                  <router-link :to="{ name: child.route }" :key="child.id" class="dropdown-item" tag="a" v-for="child in menu.children">{{ child.name }}</router-link>
                </div>
              </template>
              <template v-else>
                <router-link :to="{ name: menu.route }" class="nav-link">
                  {{ menu.name }}
                </router-link>
              </template>
            </li>
            <li class="nav-item">
              <a @click.prevent="logout" href="#" class="nav-link">
                {{ $t('logout') }}
              </a>
            </li>
          </template>
          <!-- Guest -->
          <template v-else>
            <li class="nav-item">
              <router-link :to="{ name: 'login' }" class="nav-link" active-class="active">
                {{ $t('login') }}
              </router-link>
            </li>
            <li class="nav-item">
              <router-link :to="{ name: 'register' }" class="nav-link" active-class="active">
                {{ $t('register') }}
              </router-link>
            </li>
          </template>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
  data: () => ({
    appName: window.config.appName,
  }),

  computed: mapGetters({
    user: 'authUser',
    authenticated: 'authCheck',
    menus: 'menuUser'
  }),

  methods: {
    async logout () {
      // Log out the user.
      await this.$store.dispatch('logout')

      // Redirect to login.
      this.$router.push({ name: 'login' })
    },
    hasChild(child) {
      return (child) ? true : false;
    }
  }
}
</script>

<style scoped>
.navbar {
  border: 1px solid #d3e0e9;
}
</style>
