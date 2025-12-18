<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $faker = Factory::create('fr_FR');

        $laurine = User::where('email', 'laurine@gmail.com')->first();

        $titre1 = "Au clair de la lune";
        $texte1 = "Ah, Au clair de la lune, ..."; // ton texte complet
        $resume1 = "Un homme cherche désespérément une bougie...";

        Article::create([
            'titre' => $titre1,
            'resume' => $resume1,
            'texte' => $texte1,
            'image' => 'images/au-clair-de-la-lune.jpg',
            'media' => 'https://comptines.tv/musiques/au_clair_de_la_lune.mp3',
            "en_ligne" => 1,
            "nb_vues" => 50,
            "user_id" => 1,
            "rythme_id" => 1,
            "accessibilite_id" => 3,
            "conclusion_id" => 1,
        ]);

        // --- Génération des 50 articles Faker ---
        for($i = 1; $i <= 50; $i++) {
            Article::create([
                'titre' => $faker->text(20),
                'resume' => $faker->realTextBetween(30, 100,  2),
                'texte' => $faker->realTextBetween(160, 500,  2),
                'image' => "images/article$i.png",
                'media' => 'https://comptines.tv/musiques/au_clair_de_la_lune.mp3',
                "user_id" => $faker->numberBetween(1, 50),
                "rythme_id" => $faker->numberBetween(1, 5),
                "accessibilite_id" => $faker->numberBetween(1, 5),
                "conclusion_id" => $faker->numberBetween(1, 5),
                "en_ligne" => $faker->numberBetween(0,1),
                "nb_vues" => $faker->numberBetween(0, 20),
            ]);
        }

        $titre2 = "La Bossa Nova comme art de la douceur.";
        $texte2 = "Il y a des chansons qui n’élèvent pas la voix..."; // ton texte complet
        $resume2 = "La révolution en sourdine : quand la bossa nova murmure plus qu’elle ne crie.";

        Article::create([
            'titre' => $titre2,
            'resume' => $resume2,
            'texte' => $texte2,
            'image' => 'images/a-felicidate.jpg',
            'media' => 'https://soundcloud.com/hiraethdnb/sergio-mendes-brasil-66-mas-que-nada-hiraeth-bootleg-free-download?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing',
            "en_ligne" => 1,
            "nb_vues" => 50,
            "user_id" => $laurine->id,
            "rythme_id" => 1,
            "accessibilite_id" => 3,
            "conclusion_id" => 1,
        ]);

        $titre3 = "Intime vs populaire";
        $texte3 = "La bossa nova est dans la plupart du temps célébrée..."; // ton texte complet
        $resume3 = "Trop discrète pour marquer ? La bossa nova face aux musiques de l’excès.";

        Article::create([
            'titre' => $titre3,
            'resume' => $resume3,
            'texte' => $texte3,
            'image' => 'images/intime-vs-populaire.jpg',
            'media' => 'https://music.apple.com/za/song/mas-que-nada/201857445',
            "en_ligne" => 1,
            "nb_vues" => 50,
            "user_id" => $laurine->id,
            "rythme_id" => 1,
            "accessibilite_id" => 3,
            "conclusion_id" => 1,
        ]);
    }
}
