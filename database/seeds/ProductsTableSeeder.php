<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i<=20; $i++) { 
            
            $faker = Faker\Factory::create();

            //array das classifications ID
            $classificationsID = DB::table('classifications')
                ->select('id')
                ->get();

            //array das providers ID
            $providersID = DB::table('providers')
                ->select('id')
                ->get();
            
            DB::table ('products')->insert([
                'descricao' => $faker->text(30),
                'qtd' => $faker->randomNumber(),
                'prc_venda' => $faker->randomFloat(2, 100, 200),
                'prc_compra' => $faker->randomFloat(2, 100, 200),
                
                'providers_id' => $faker->randomElement($providersID)->id, // randomização dos ids
                'classifications_id' => $faker->randomElement($classificationsID)->id, // randomização dos ids

                'created_at' => \Carbon\Carbon::now()
            ]);  
        }
    }
}
