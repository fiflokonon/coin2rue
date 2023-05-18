<?php

namespace Database\Seeders;

use App\Models\Formation;
use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $formations = Formation::all();
        foreach ($formations as $formation)
        {
            $modules = [
                [
                    'titre' => 'Introduction à la gestion de projet',
                    'description' => 'Découvrez les fondamentaux de la gestion de projet pour réussir vos projets.',
                    'image_link' => 'https://example.com/images/intro_gestion_projet.png',
                    'statut' => true,
                    'formation_id' => $formation->id,
                    'created_by' => 1,
                ],
                [
                    'titre' => 'Méthodes agiles pour la gestion de projet',
                    'description' => 'Apprenez les méthodes agiles pour gérer vos projets de manière flexible et efficace.',
                    'image_link' => 'https://example.com/images/agile_gestion_projet.png',
                    'statut' => true,
                    'formation_id' => $formation->id,
                    'created_by' => 2,
                ],
                [
                    'titre' => 'Introduction à JavaScript',
                    'description' => 'Découvrez les fondamentaux de JavaScript pour développer des sites web dynamiques.',
                    'image_link' => 'https://example.com/images/intro_javascript.png',
                    'statut' => true,
                    'formation_id' => 5,
                    'created_by' => 2,
                ],
                [
                    'titre' => 'Les bases de React.js',
                    'description' => 'Apprenez à utiliser le framework JavaScript React pour créer des applications web modernes.',
                    'image_link' => 'https://example.com/images/react_js.png',
                    'statut' => true,
                    'formation_id' => 5,
                    'created_by' => 1,
                ],
                [
                    'titre' => 'Introduction à la gestion des risques',
                    'description' => 'Découvrez les fondamentaux de la gestion des risques pour mieux gérer les incertitudes en entreprise.',
                    'image_link' => 'https://example.com/images/intro_gestion_risques.png',
                    'statut' => true,
                    'formation_id' => 3,
                    'created_by' => 3,
                ],
                [
                    'titre' => 'Les bases du design thinking',
                    'description' => 'Découvrez la méthode de conception centrée sur l\'utilisateur pour résoudre les problèmes de manière innovante.',
                    'image_link' => 'https://example.com/images/design_thinking.png',
                    'statut' => true,
                    'formation_id' => $formation->id,
                    'created_by' => 2,
                ],
                [
                    'titre' => 'Les bases de la cybersécurité',
                    'description' => 'Apprenez les fondamentaux de la cybersécurité pour protéger votre entreprise contre les attaques informatiques.',
                    'image_link' => 'https://example.com/images/intro_cybersecurite.png',
                    'statut' => true,
                    'formation_id' => $formation->id,
                    'created_by' => 1,
                ],
                [
                    'titre' => 'Introduction à la finance d\'entreprise',
                    'description' => 'Découvrez les fondamentaux de la finance d\'entreprise pour mieux comprendre les décisions financières des entreprises.',
                    'image_link' => 'https://example.com/images/intro_finance_entreprise.png',
                    'statut' => true,
                    'formation_id' => $formation->id,
                    'created_by' => 3,
                ],
                [
                    'titre' => 'Les bases de la gestion de projet informatique',
                    'description' => 'Apprenez les bonnes pratiques pour gérer efficacement les projets informatiques.',
                    'image_link' => 'https://example.com/images/gestion_projet_informatique.png',
                    'statut' => true,
                    'formation_id' => $formation->id,
                    'created_by' => 2,
                ],
                [
                    'titre' => 'Introduction à la programmation orientée objet',
                    'description' => 'Découvrez les concepts de base de la programmation orientée objet pour mieux structurer votre code.',
                    'image_link' => 'https://example.com/images/intro_programmation_objet.png',
                    'statut' => true,
                    'formation_id' => $formation->id,
                    'created_by' => 1,
                ],
            ];
            foreach ($modules as $module) {
                Module::create($module);
            }
        }

}
}
