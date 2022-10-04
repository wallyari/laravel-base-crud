<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $elencoComics = config('comics');

        foreach($elencoComics as $comic){
            
            $newComic = new comic();
            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->price = $comic['price'];
            $newComic->series = $comic['series'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->type = $comic['type'];
            $newComic->thumb = $comic['thumb'];
            $newComic->save();
        }
    }
}
