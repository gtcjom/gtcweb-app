<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Business Plan',
                'slug' => 'business-plan',
                'stripe_plan' => 'price_1LmB1SCXbPPKAWayGsb1DAkq',
                'description' => 'Business Plan',
                'price' => 10
            ],
            [
                'name' => 'Premium',
                'slug' => 'premium',
                'stripe_plan' => 'price_1LnwbTCXbPPKAWay3ByKpcfq',
                'description' => 'Premium',
                'price' => 20
            ]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
