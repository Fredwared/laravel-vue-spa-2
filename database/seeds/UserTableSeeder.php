<?php

use Illuminate\Database\Seeder;
use Modules\User\Entities\User;

/**
 * Class UserTableSeeder
 * @author Ruver Dornelas <ruver@imatec.com.br>
 * @Date 26/07/2016
 * @version 1.0
 */
class UserTableSeeder extends Seeder
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
        User::truncate();

        /**
         * Cria dados fixos
         */
        factory(User::class)->create([
            'name' => 'Ruver Dornelas',
            'email' => 'ruverd@gmail.com',
            'password' => Hash::make('Walnut80#')
        ]);

        /**
         * Cria dados fakers
         */
        factory(User::class,10)->create();

    }
}