<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        $this->call([
            PositionSeeder::class,
            FactorySeeder::class,
            ContainerSeeder::class,
            ContainerSupplierSeeder::class,
            FormatSeeder::class,
            CapSeeder::class,
            ProductSeeder::class,
            TankSeeder::class,
            FormattableSeeder::class,
            LineSeeder::class,
            SyrupSeeder::class,
            InvertedSyrupSeeder::class,
            RemovalTorqueAnalysisSeeder::class,
            SectionWeightAnalysisSeeder::class,
            WaterAnalysisSeeder::class,
            SecureSealTestSeeder::class,
            BurstTestSeeder::class,
            ShiftModeSeeder::class,
            ShiftSeeder::class,
            CarbonatedAnalysisSeeder::class,
            NonCarbonatedAnalysisSeeder::class
        ]);
    }
}
