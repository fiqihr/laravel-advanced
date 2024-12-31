<?php

namespace App\Jobs;

use App\Models\DataPerson;
use Faker\Factory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class dataPersonJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            $faker = Factory::create();
            $jumlahData = 10000;
            for ($i = 1; $i <= $jumlahData; $i++) {
                $data = [
                    'name' => $faker->name,
                    'email' => $faker->unique()->safeEmail,
                ];
                DataPerson::create($data);
            }
        } catch (\Exception $e) {
            \Log::error('Error in dataPersonJob: ' . $e->getMessage());
        }
    }
}