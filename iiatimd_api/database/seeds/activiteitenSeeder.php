<?php

use Illuminate\Database\Seeder;

class activiteitenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('activiteiten')->insert([
          "activiteit_omschrijving" => "Bel wat familie op en vraag hoe het met ze gaat.",
      ]);

      DB::table('activiteiten')->insert([
          "activiteit_omschrijving" => "Doe 5 pushups.",
      ]);

      DB::table('activiteiten')->insert([
          "activiteit_omschrijving" => "Neem 30 minuten voor jezelf en neem bijvoorbeeld een lekker bad.",
      ]);

      DB::table('activiteiten')->insert([
          "activiteit_omschrijving" => "Ga wandelen in een park dichtbij je.",
      ]);

      DB::table('activiteiten')->insert([
          "activiteit_omschrijving" => "Maak een to-do lijstje voor vandaag.",
      ]);

      DB::table('activiteiten')->insert([
          "activiteit_omschrijving" => "Schrijf 5 dingen op waar je dankbaar voor bent.",
      ]);

      DB::table('activiteiten')->insert([
          "activiteit_omschrijving" => "Neem een dag pauze van sociale media.",
      ]);

      DB::table('activiteiten')->insert([
          "activiteit_omschrijving" => "Kijk online een film samen met een vriend(in).",
      ]);

      DB::table('activiteiten')->insert([
          "activiteit_omschrijving" => "Neem 30 minuten om te beginnen met het ding wat je aan het uitstellen bent om te leren.",
      ]);

      DB::table('activiteiten')->insert([
          "activiteit_omschrijving" => "Doe je gordijnen dicht, zet je favoriete nummer op en dans zonder schaamte.",
      ]);

      DB::table('activiteiten')->insert([
          "activiteit_omschrijving" => "Schrijf een brief aan jezelf over aan jaar.",
      ]);
    }
}
