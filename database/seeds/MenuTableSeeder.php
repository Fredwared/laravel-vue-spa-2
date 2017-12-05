<?php

use Illuminate\Database\Seeder;
use Modules\Menu\Entities\Menu;

/**
 * Class MenuTableSeeder
 * @author Ruver Dornelas <ruver@imatec.com.br>
 * @Date 26/07/2016
 * @version 1.0
 */
class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Apaga registros
         */
        Menu::truncate();

        /**
         * Cria dados fixos
         */
        factory(Menu::class)->create([
            'id' => 1,
            'parent_id' => 0,
            'name' => 'Início',
            'route' => 'dashboard',
            'icon' => 'md-home',
            'order' => 1
        ]);

        factory(Menu::class)->create([
            'id' => 2,
            'parent_id' => 0,
            'name' => 'Administração',
            'route' => 'dashboard',
            'icon' => 'md-city-alt',
            'order' => 2
        ]);

        factory(Menu::class)->create([
            'id' => 3,
            'parent_id' => 2,
            'name' => 'Usuário',
            'title' => 'Usuário',
            'route' => 'user',
            'icon' => null,
            'order' => 1
        ]);

        factory(Menu::class)->create([
            'id' => 4,
            'parent_id' => 2,
            'name' => 'Organização',
            'title' => 'Organização',
            'route' => 'organization',
            'icon' => null,
            'order' => 2
        ]);

//        factory(Menu::class)->create([
//            'id' => 3,
//            'parent_id' => 0,
//            'name' => 'Arquivo',
//            'route' => 'dashboard',
//            'icon' => 'md-archive',
//            'order' => 3
//        ]);
//
//        factory(Menu::class)->create([
//            'id' => 4,
//            'parent_id' => 0,
//            'name' => 'Faturamento',
//            'route' => 'dashboard',
//            'icon' => 'md-money',
//            'order' => 4
//        ]);
//
//        factory(Menu::class)->create([
//            'id' => 5,
//            'parent_id' => 0,
//            'name' => 'Imagem',
//            'route' => 'dashboard',
//            'icon' => 'md-collection-image',
//            'order' => 5
//        ]);
//
//        factory(Menu::class)->create([
//            'id' => 6,
//            'parent_id' => 0,
//            'name' => 'Indexação',
//            'route' => 'dashboard',
//            'icon' => 'md-view-dashboard',
//            'order' => 6
//        ]);
//
//        factory(Menu::class)->create([
//            'id' => 7,
//            'parent_id' => 0,
//            'name' => 'Produção',
//            'route' => 'dashboard',
//            'icon' => 'md-widgets',
//            'order' => 7
//        ]);
//
//        factory(Menu::class)->create([
//            'id' => 8,
//            'parent_id' => 0,
//            'name' => 'Ordem de Serviço',
//            'route' => 'dashboard',
//            'icon' => 'md-comment-alt-text',
//            'order' => 8
//        ]);
//
//        factory(Menu::class)->create([
//            'id' => 9,
//            'parent_id' => 0,
//            'name' => 'Relatório',
//            'route' => 'dashboard',
//            'icon' => 'md-chart',
//            'order' => 9
//        ]);
//
//        factory(Menu::class)->create([
//            'id' => 10,
//            'parent_id' => 0,
//            'name' => 'Viagem',
//            'route' => 'dashboard',
//            'icon' => 'md-truck',
//            'order' => 10
//        ]);
//
//        factory(Menu::class)->create([
//            'id' => 11,
//            'parent_id' => 0,
//            'name' => 'Estoque',
//            'route' => 'dashboard',
//            'icon' => 'md-assignment',
//            'order' => 11
//        ]);

//        factory(Menu::class)->create([
//            'id' => 12,
//            'parent_id' => 0,
//            'name' => 'RH',
//            'route' => 'dashboard',
//            'icon' => 'md-accounts',
//            'order' => 12
//        ]);
//
//        factory(Menu::class)->create([
//            'id' => 13,
//            'parent_id' => 11,
//            'name' => 'Produto',
//            'title' => null,
//            'route' => null,
//            'icon' => null,
//            'order' => 1
//        ]);
//
//        factory(Menu::class)->create([
//            'id' => 14,
//            'parent_id' => 13,
//            'name' => 'Categorias',
//            'title' => 'Categoria',
//            'route' => 'stock/categories',
//            'icon' => null,
//            'order' => 1
//        ]);
//
//        factory(Menu::class)->create([
//            'id' => 15,
//            'parent_id' => 13,
//            'name' => 'Produtos',
//            'title' => 'Produto',
//            'route' => 'stock/products',
//            'icon' => null,
//            'order' => 2
//        ]);
//
//        factory(Menu::class)->create([
//            'id' => 16,
//            'parent_id' => 13,
//            'name' => 'Movimentações',
//            'title' => 'Movimentação de Produto',
//            'route' => 'stock/product_moves',
//            'icon' => null,
//            'order' => 3
//        ]);
//
//        factory(Menu::class)->create([
//            'id' => 17,
//            'parent_id' => 11,
//            'name' => 'Patrimônio',
//            'title' => null,
//            'route' => null,
//            'icon' => null,
//            'order' => 2
//        ]);
//
//        factory(Menu::class)->create([
//            'id' => 18,
//            'parent_id' => 17,
//            'name' => 'Patrimônios',
//            'title' => 'Patrimônio',
//            'route' => 'stock/assets',
//            'icon' => null,
//            'order' => 1
//        ]);
//
//        factory(Menu::class)->create([
//            'id' => 19,
//            'parent_id' => 17,
//            'name' => 'Movimentações',
//            'title' => 'Movimentação de Patrimônio',
//            'route' => 'stock/asset_moves',
//            'icon' => null,
//            'order' => 2
//        ]);
//
//        factory(Menu::class)->create([
//            'id' => 20,
//            'parent_id' => 17,
//            'name' => 'Manutenções',
//            'title' => 'Manutenção',
//            'route' => 'stock/asset_maintenances',
//            'icon' => null,
//            'order' => 3
//        ]);
//
//        factory(Menu::class)->create([
//            'id' => 21,
//            'parent_id' => 11,
//            'name' => 'Softwares',
//            'title' => 'Software',
//            'route' => 'stock/softwares',
//            'icon' => null,
//            'order' => 3
//        ]);
//
//        factory(Menu::class)->create([
//            'id' => 22,
//            'parent_id' => 11,
//            'name' => 'Fornecedores',
//            'title' => 'Fornecedor',
//            'route' => 'stock/suppliers',
//            'icon' => null,
//            'order' => 4
//        ]);
//
//        factory(Menu::class)->create([
//            'id' => 23,
//            'parent_id' => 11,
//            'name' => 'Locais',
//            'title' => 'Locais',
//            'route' => 'stock/spots',
//            'icon' => null,
//            'order' => 5
//        ]);
    }
}