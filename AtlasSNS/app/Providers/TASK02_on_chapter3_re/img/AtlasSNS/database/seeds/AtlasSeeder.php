<?php

use Illuminate\Database\Seeder;

class AtlasSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Atlas::create([
            'id'=>'1',
'username'=>'山口　笑美子',
'mail'=>'waooncat@gmail.com',
'password'=>'cat',
'bio'=>'',
'images'=>'',
'created_at'=>'',
'updated_at'=>'',
   ]);


    }
}
