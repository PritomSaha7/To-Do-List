<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Faker\Factory as Faker;
use App\Models\Task;

class InsertRandomData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:signature88';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++) {
            Task::create([
                "title" => $faker->sentence,
                "task" => $faker->paragraph,
            ]);
        }
        $this->info("Handle method has been called successfully");
    }
}
