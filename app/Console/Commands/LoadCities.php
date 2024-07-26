<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\City;

class LoadCities extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'load:cities';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Load cities from hh.ru API';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $response = Http::withOptions([
            'verify' => 'cacert.pem',
        ])->get('https://api.hh.ru/areas');

        $areas = $response->json();

        foreach ($areas as $area) {
            if ($area['id'] == '113') { // Only Russia
                foreach ($area['areas'] as $city) {
                    City::updateOrCreate(
                        ['slug' => strtolower($city['name'])],
                        ['name' => $city['name'], 'slug' => strtolower($city['name'])]
                    );
                }
            }
        }

        $this->info('Cities loaded successfully.');
    }
}
