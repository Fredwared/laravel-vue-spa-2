<template>

    <!-- Page -->
    <div class="page-error text-center">
        <div class="vertical-align text-xs-center">
            <div class="page-content vertical-align-middle">
                <header>
                    <h1>404</h1>
                    <p >{{ $t('page_not_found') }} !</p>
                </header>

                <p class="error-advise">{{ $t('page_not_found_advise') }}</p>
                <router-link :to="{ name: 'dashboard' }" class="btn btn-primary btn-lg btn-round">
                    {{ $t('go_home') }}
                </router-link>

                <footer class="page-copyright page-copyright-inverse">
                    <p>IMATEC GERENCIAMENTO SEGURO DA INFORMAÇÃO</p>
                    <p>© {{ getYear }}. TODOS OS DIREITOS RESERVADOS.</p>
                    <span>{{  }}</span>
                    <div class="social">
                        <a href="javascript:void(0)">
                            <i class="icon bd-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="javascript:void(0)">
                            <i class="icon bd-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="javascript:void(0)">
                            <i class="icon bd-dribbble" aria-hidden="true"></i>
                        </a>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'not-found',
    layout: 'default',

    computed: {
        // a computed getter
        getYear: function () {
          // `this` points to the vm instance
          return this.$moment().format('YYYY');
        }
    }
}

</script>

<style scoped>
    .btn {
        cursor: pointer;
    }

    .btn-round {
        border-radius: 1000px;
    }

    .page-copyright {
        margin-top: 60px;
        font-size: .858rem;
        color: #424242;
        letter-spacing: 1px;
    }

    .page-error .error-mark {
      margin-bottom: 33px;
    }

    .page-error header h1 {
      font-size: 10em;
      font-weight: 400;
    }

    .page-error header p {
      margin-bottom: 30px;
      font-size: 30px;
      text-transform: uppercase;
    }

    .page-error h2 {
      margin-bottom: 30px;
    }

    .page-error .error-advise {
      margin-bottom: 25px;
      color: #a9afb5;
    }
</style>

