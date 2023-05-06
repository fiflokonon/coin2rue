<?php

namespace Database\Seeders;

use App\Models\Formation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $formations = [
            [
                'titre' => 'Développement web avec Laravel',
                'description' => 'Cette formation vous apprendra à créer des applications web avec le framework Laravel.',
                'prix' => 350,
                'duree' => 30,
                'image' => 'https://example.com/images/laravel.png',
                'user_id' => 1,
                'statut_admin' => true,
                'statut' => true,
            ],
            [
                'titre' => 'Marketing digital pour les entreprises',
                'description' => 'Apprenez les meilleures pratiques pour promouvoir votre entreprise en ligne.',
                'prix' => 250,
                'duree' => 20,
                'image' => 'https://example.com/images/marketing.png',
                'user_id' => 2,
                'statut_admin' => true,
                'statut' => true,
            ],
            [
                'titre' => 'Formation en langues étrangères',
                'description' => 'Améliorez votre niveau en anglais, espagnol ou allemand grâce à notre programme de formation.',
                'prix' => 500,
                'duree' => 40,
                'image' => 'https://example.com/images/langues.png',
                'user_id' => 3,
                'statut_admin' => true,
                'statut' => true,
            ],
            [
                'titre' => 'Formation en design graphique',
                'description' => 'Découvrez les fondamentaux du design graphique et apprenez à créer des visuels attractifs.',
                'prix' => 450,
                'duree' => 35,
                'image' => 'https://example.com/images/design.png',
                'user_id' => 1,
                'statut_admin' => true,
                'statut' => true,
            ],
            [
                'titre' => 'Gestion de projet pour les débutants',
                'description' => 'Ce cours vous enseignera les bases de la gestion de projet, de la planification à la livraison.',
                'prix' => 300,
                'duree' => 25,
                'image' => 'https://example.com/images/projet.png',
                'user_id' => 2,
                'statut_admin' => true,
                'statut' => true,
            ],
            [
                'titre' => 'Formation en développement mobile',
                'description' => 'Créez des applications mobiles avec les langages de programmation les plus populaires (Swift, Java, Kotlin).',
                'prix' => 550,
                'duree' => 45,
                'image' => 'https://example.com/images/mobile.png',
                'user_id' => 3,
                'statut_admin' => true,
                'statut' => true,
            ],
            [
                'titre' => 'Formation en comptabilité',
                'description' => 'Apprenez les bases de la comptabilité pour gérer efficacement vos finances personnelles ou professionnelles.',
                'prix' => 200,
                'duree' => 20,
                'image' => 'https://example.com/images/compta.png',
                'user_id' => 1,
                'statut_admin' => false,
                'statut' => true,
            ],
            [
                'titre' => 'Formation en gestion de crise',
                'description' => 'Soyez prêt à gérer les situations de crise en entreprise grâce à cette formation.',
                'prix' => 400,
                'duree' => 30,
                'image' => 'https://example.com/images/crise.png',
                'user_id' => 2,
                'statut_admin' => false,
                'statut' => true,
            ],
            [
                'titre' => 'Formation en développement personnel',
                'description' => 'Développez votre confiance en vous, votre créativité et votre motivation grâce à cette formation.',
                'prix' => 150,
                'duree' => 15,
                'image' => 'https://example.com/images/personnel.png',
                'user_id' => 3,
                'statut_admin' => false,
                'statut' => true,
            ],
            [
                'titre' => 'Formation en gestion de projet agile',
                'description' => 'Découvrez les méthodes agiles pour gérer vos projets de manière flexible et efficace.',
                'prix' => 350,
                'duree' => 30,
                'image' => 'https://example.com/images/agile.png',
                'user_id' => 1,
                'statut_admin' => true,
                'statut' => true,
            ],
            [
                'titre' => 'Formation en développement web avancé',
                'description' => 'Approfondissez vos connaissances en développement web avec des sujets avancés tels que les frameworks JavaScript.',
                'prix' => 600,
                'duree' => 50,
                'image' => 'https://example.com/images/avance.png',
                'user_id' => 2,
                'statut_admin' => true,
                'statut' => true,
            ],
        ];

        foreach ($formations as $formation) {
            Formation::create($formation);
        }
    }
}
