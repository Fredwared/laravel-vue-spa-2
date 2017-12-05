# Imatec System (Sistema Imatec) 

> CRM responsible for production control, customer image view, requests (OS), billing and internal and external processes of the company. 

(CRM responsavel pelo controle da produção, visualização de imagens dos clientes, solicitações (OS), faturamento e demais processos internos e externos da empresa.)

## Packages (Pacotes Externos)

- [Skeleton](https://github.com/cretueusebiu/laravel-vue-spa.git)
- [Laravel 5.5](https://laravel.com/docs/5.4)
- [Vue 2](https://vuejs.org/v2/guide/)
- [Vuex](https://vuex.vuejs.org/en/)
\

]=]
=]
8i9io0li;o
- [browserSync](https://www.browsersync.io)
- Form Integration with [vform](https://github.com/cretueusebiu/vform)
- Alerts [cxlt-vue2-toastr](https://github.com/chengxulvtu/cxlt-vue2-toastr)
- Authentication with [JWT](https://github.com/tymondesigns/jwt-auth)
- Webpack with [laravel-mix](https://github.com/JeffreyWay/laravel-mix)
- SVG icons with [svg-sprite-loader](https://github.com/kisenka/svg-sprite-loader)
- Laravel Modules with [nwidart/laravel-modules](https://github.com/nWidart/laravel-modules)
- Permissions with [JosephSilber/bouncer](https://github.com/JosephSilber/bouncer)
- Auditing with [owen-it/laravel-auditing](https://github.com/owen-it/laravel-auditing)
- Repository with [l5-repository](https://github.com/andersao/l5-repository)

## Installation (Instalação)

- `git clone https://github.com/cretueusebiu/laravel-vue-spa.git`
- `cd imatec-app`
- `cp .env.example .env`
- `composer install`
- `php artisan key:generate`
- `php artisan jwt:secret`
- Edit `.env` and set your database connection details
- `php artisan migrate`
- `npm install` / `yarn`

## Usage (Como usar)

### Development (Desenvolvimento)

> Build and watch (constroi fontes e escuta mudanças na aplicação atualizando apenas o que foi alterado no navegador sem atualizar toda página)
```bash
npm run watch
```
> Serve with hot reloading (constroi fontes e escuta mudanças na aplicação atualizando apenas o que foi alterado no navegador sem atualizar toda página)
```bash
npm run hot
```

> browserSync
```bash
localhost:3000
```

### Production (Produção)
> Build and watch (constroi fontes de forma compactada visando performace)
```bash
npm run production
```