<?php

use Illuminate\Database\Seeder;

use App\Comic;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');
        foreach($comics as $comic) {
            $newComic = new Comic();

            
            // $newComic->title = $comic['title'];
            // $newComic->description = $comic['description'];
            // $newComic->thumb = $comic['thumb'];
            // $newComic->price = $comic['price'];
            // $newComic->series = $comic['series'];
            // $newComic->sale_date = $comic['sale_date'];
            // $newComic->type = $comic['type'];
            
            // se metto protected $fillable in class Comic posso per convenzione,
            // siccome i dati della tabellla e quelli del nostro array hanno 
            // la stessa chiave, utilizzare la versione abbreviata
            
            $newComic->fill($comic);

            $newComic->save();
        }
    }
}
