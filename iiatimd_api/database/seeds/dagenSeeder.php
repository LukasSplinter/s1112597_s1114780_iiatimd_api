<?php

use Illuminate\Database\Seeder;

class dagenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("dagen")->insert([
          "agenda_item"=>"sushi eten",
          "datum"=>"2020/01/31",
        ]);

        DB::table("dagen")->insert([
          "agenda_item"=>"tandarts",
          "datum"=>"2020/07/07",
        ]);

        DB::table("dagen")->insert([
          "agenda_item"=>"iiatimd opleveren",
          "datum"=>"2020/07/10",
        ]);
    }
}
