<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    public function run(): void
    {
        School::updateOrCreate(
            ['id' => 1],
            [
                'name' => 'Complexe Scolaire Saint FX',
                'code' => 'CS-SFX',
                'settings' => [
                    'branding' => [
                        'primary_color' => '#1E40AF',
                        'secondary_color' => '#FFFFFF',
                    ],
                    'receipt' => [
                        'show_logo' => true,
                    ],
                ],
            ]
        );
    }
}
