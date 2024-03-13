<?php
// In app/Console/Commands/ImportAdventureJson.php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use JsonSchema\Validator;
use App\Models\Adventure;
use App\Models\Slide;
use App\Models\Prompt;
use App\Models\Option;

class ImportAdventureJson extends Command
{
    protected $signature = 'import:adventure {file}';
    protected $description = 'Import a JSON-formatted adventure into the database';

    public function handle()
    {
        $filePath = $this->argument('file');

        if (!file_exists($filePath)) {
            $this->error("File not found: $filePath");
            return;
        }

        $jsonData = json_decode(file_get_contents($filePath));
        $schema = json_decode(file_get_contents(database_path('schemas/adventureSchema.json')));

        \Log::info('Loaded JSON Schema:', (array)$schema);

        $validator = new Validator();
        $validator->validate($jsonData, $schema);

        if (!$validator->isValid()) {
            $this->error("JSON does not validate. Violations:");
            foreach ($validator->getErrors() as $error) {
                $this->error(sprintf("[%s] %s", $error['property'], $error['message']));
            }
            return;
        }

        $this->importAdventure($jsonData);
        $this->info('Adventure imported successfully!');
    }

    private function importAdventure($adventureData)
    {
        $adventure = Adventure::create([
            'name' => $adventureData->name,
            'description' => $adventureData->description,
        ]);

        $slideIndex = 0;
        foreach ($adventureData->slides as $slideData) {
            $slide = $adventure->slides()->create([
                'title' => $slideData->title,
                'content' => $slideData->content,
                'order' => $slideIndex++,
            ]);

            $promptIndex = 0;
            // Add in an order field to prompt and option tables
            foreach ($slideData->prompts as $promptData) {
                $prompt = $slide->prompts()->create([
                    'text' => $promptData->text,
                    'type' => $promptData->type,
                ]);

                if (isset($promptData->options) && !empty($promptData->options)) {
                    foreach ($promptData->options as $optionData) {
                        $prompt->promptOptions()->create([
                            'text' => $optionData->text,
                            'is_correct' => $optionData->is_correct,
                            'correct_answer_text' => $optionData->correct_answer_text ?? null,
                        ]);
                    }
                }
            }
        }
    }
}
