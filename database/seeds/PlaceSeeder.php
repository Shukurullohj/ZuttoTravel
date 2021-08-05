<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        $place = [];

        $raw = json_decode(
            file_get_contents(resource_path('places.json')),
            true
        );

        foreach ($raw as $contact) {
            $place[] = [
                'name' => $contact['name'],
                'body' => $contact['body'],
                'price' => $contact['price'],
                
            ];
        }

        DB::table('places')->insert($place);
    }
}
