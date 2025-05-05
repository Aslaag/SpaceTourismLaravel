<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Destination;

class DestinationSeeder extends Seeder
{
    public function run(): void
    {
        Destination::create([
            'name' => 'Moon',
            'description' => 'See our planet as you’ve never seen it before. A perfect relaxing trip away to help regain perspective and come back refreshed. While you’re there, take in some history by visiting the Luna 2 and Apollo 11 landing sites.',
            'image' => 'media/images/destination/image-moon.png',
            'distance' => '384,400 km',
            'travel_time' => '3 days'
        ]);

        Destination::create([
            'name' => 'Mars',
            'description' => 'Don’t forget to pack your hiking boots. You’ll need them to tackle Olympus Mons, the tallest planetary mountain in our solar system. It’s two and a half times the size of Everest!',
            'image' => 'media/images/destination/image-mars.png',
            'distance' => '225 mil. km',
            'travel_time' => '9 months'
        ]);

        Destination::create([
            'name' => 'Europa',
            'description' => 'The smallest of the four Galilean moons orbiting Jupiter, Europa is a winter lover’s dream. With an icy surface, it’s perfect for a bit of ice skating, curling, hockey, or simple relaxation in your snug wintery cabin.',
            'image' => 'media/images/destination/image-europa.png',
            'distance' => '628 MIL. km',
            'travel_time' => '3 years'
        ]);

        Destination::create([
            'name' => 'Titan',
            'description' => 'The only moon known to have a dense atmosphere other than Earth, Titan is a home away from home (just a few hundred degrees colder!). As a bonus, you get striking views of the Rings of Saturn.',
            'image' => 'media/images/destination/image-titan.png',
            'distance' => '1.6 BIL. km',
            'travel_time' => '7 years'
        ]);

    }
}

