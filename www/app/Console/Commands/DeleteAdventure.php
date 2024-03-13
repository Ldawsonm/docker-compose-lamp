<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Adventure;
use DB;

class DeleteAdventure extends Command
{
    protected $signature = 'adventure:delete {id}';
    protected $description = 'Deletes an adventure and its related slides, prompts, and options.';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $adventureId = $this->argument('id');

        $adventure = Adventure::find($adventureId);

        if (!$adventure) {
            $this->error('Adventure not found!');
            return 1;
        }

        DB::transaction(function () use ($adventure) {
            // Assuming you have defined proper cascading delete relations in your models,
            // deleting the adventure should automatically delete its slides, prompts, and options.
            $adventure->delete();
        });

        DB::statement('ALTER TABLE adventures AUTO_INCREMENT = 1;');
        DB::statement('ALTER TABLE slides AUTO_INCREMENT = 1;');
        DB::statement('ALTER TABLE prompts AUTO_INCREMENT = 1;');
        DB::statement('ALTER TABLE prompt_options AUTO_INCREMENT = 1;');

        $this->info('Adventure deleted successfully.');
        return 0;
    }
}
