<?php

namespace Database\Seeders;

use App\Models\Horaire;
use App\Models\Menu;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeCuisine;
use App\Models\Jour;
use App\Models\Plat;
use App\Models\Photo;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $types = ['Marocaine', 'Italienne', 'Chinoise', 'Française', 'Mexicaine'];
        foreach ($types as $typeNom) {
            TypeCuisine::create(['nom' => $typeNom]);
        }        

        $users->each(function($user){
            $restaurants = Restaurant::factory(2)->for($user)->create();

            $restaurants->each(function($restaurant){
                $horaire = Horaire::factory()->for($restaurant)->create();

                $jours = ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche'];
                foreach ($jours as $jourNom) {
                    Jour::create([
                        'nom' => $jourNom,
                        'heure_debut' => '09:00',
                        'heure_fin' => '23:00',
                        'est_ouvert' => true,
                        'horaire_id' => $horaire->id,
                    ]);
                }
                $menus = Menu::factory(2)->for($restaurant)->create();
                $menus->each(function($menu) {
                    Plat::factory(5)->for($menu)->create();
                });

                Photo::factory(3)->for($restaurant)->create();
            });
        });
        
        $restaurants = Restaurant::all();
        $typesCuisine = TypeCuisine::all();
        foreach ($restaurants as $restaurant) {
            $restaurant->typesCuisines()->attach($typesCuisine->random(rand(1,3))->pluck('id')->toArray());
        }
    }
}
