<?php

use Illuminate\Database\Seeder;
use Modules\Organization\Entities\Organization;

/**
 * Class OrganizationTableSeeder
 *
 * @author Ruver Dornelas <ruver@imatec.com.br>
 * @Date 26/07/2016
 * @version 1.0
 */
class OrganizationTableSeeder extends Seeder
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
        Organization::truncate();

        /**
         * Cria dados fixos
         */
        factory(Organization::class)->create([
            'id'   => 1,
            'name' => 'Imatec'
        ]);

        /**
         * Cria dados fakers
         */
        factory(Organization::class,10000)->create();
    }
}