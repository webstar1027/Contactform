<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Daniel',
                'email' => 'dcherevashko@gmail.com',
                'email_verified_at' => '2018-10-22 09:36:08',
                'password' => '$2y$10$sUM/l1IMldt/SR9Bva7lbuO153DG7Y0s4pYnAbHqjMBhc7qtwdaSy',
                'remember_token' => 'EIpiw8Tb9Een0J7rHfBagMO9NiGWSg0ofJn0aC3GHnnVcuVOqugvjK7hkO99',
                'created_at' => '2018-10-22 01:35:23',
                'updated_at' => '2018-10-22 01:35:23',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Jimmy',
                'email' => 'webstar1027@gmail.com',
                'email_verified_at' => '2018-10-22 09:36:09',
                'password' => '$2y$10$0BusJiT5caN13pHIYW076uyOs.NoewJNiHdeP9UY/S94kcUhWdt1a',
                'remember_token' => NULL,
                'created_at' => '2018-10-22 01:35:50',
                'updated_at' => '2018-10-22 01:35:50',
            ),
        ));
        
        
    }
}