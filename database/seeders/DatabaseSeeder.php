<?php

namespace Database\Seeders;

use App;
use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            $this->call([
                PermissionSeeder::class,
                AnneeSeeder::class,
                SectionSeeder::class,
                OptionSeeder::class,
                ClasseSeeder::class,
            ]);

            User::factory()->create([
                'email' => 'admin@masomosoft.com',
                'name' => 'Admin',
            ])->assignRole(UserRole::admin->value);

            // create promoteur
            User::factory()->create([
                'email' => 'promoteur@masomosoft.com',
                'name' => 'Promoteur',
            ])->assignRole(UserRole::promoteur->value);

            User::factory()->create([
                'email' => 'coordonnateur@masomosoft.com',
                'name' => 'Coordonnateur',
            ])->assignRole(UserRole::coordonnateur->value);

            // create admin
            User::factory()->create([
                'email' => 'financier@masomosoft.com',
                'name' => 'Financier',
            ])->assignRole(UserRole::financier->value);


            if (!App::isProduction()) {

                $this->call([
                   // FraisSeeder::class,
                    DepenseTypeSeeder::class,
                    UnitSeeder::class,
                    TagSeeder::class,
                ]);
                // create admin
                User::factory()->create([
                    'email' => 'eleve@masomosoft.com',
                    'name' => 'Eleve',
                ])->assignRole(UserRole::eleve->value);

                User::factory()->create([
                    'email' => 'parent@masomosoft.com',
                    'name' => 'Parent',
                ])->assignRole(UserRole::parent->value);

                User::factory()->create([
                    'email' => 'enseingant@masomosoft.com',
                    'name' => 'Enseignant',
                ])->assignRole(UserRole::enseignant->value);

               /* $this->call([
                    FactorySeeder::class,
                ]);*/
            }
        });
    }
}
