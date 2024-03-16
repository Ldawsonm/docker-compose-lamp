<?php

namespace App\Http\Controllers;
use App\Models\Adventure;
use App\Models\UserResponse;
use App\Models\AdventureProgress;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;


class UserResponseController extends Controller
{
    public function showForm(Adventure $adventure, Request $request) {
        $userId = $request->user()->id;
    
        // Load slides, prompts, and options with the adventure
        $adventure->load(['slides.prompts.promptOptions']);

        // Fetch the user's responses for prompts in this adventure
        $responses = UserResponse::where('user_id', $userId)
                                ->whereIn('prompt_id', $adventure->slides->flatMap(function ($slide) {
                                    return $slide->prompts->pluck('id')->toArray();
                                }))
                                ->get()
                                ->groupBy('prompt_id'); // Key the responses by prompt_id for easy access

        $existingProgress = AdventureProgress::where('user_id', $userId)
                                ->where('adventure_id', $adventure->id)
                                ->first();
        // Alternatively, if you want to handle multiple responses per prompt (like for free select),
        // you might want to group them by prompt_id instead
        // $responses = UserResponse::where('user_id', $userId)
        //                          ->whereIn('prompt_id', $adventure->slides->flatMap(function ($slide) {
        //                              return $slide->prompts->pluck('id');
        //                          }))
        //                          ->get()
        //                          ->groupBy('prompt_id');

        return view('adventure_form', compact('adventure', 'responses', 'existingProgress'));
    }

    public function submitForm(Request $request)
    {
        $userId = $request->user()->id;
        $adventureId = $request->input('adventure_id');

        $requestData = json_encode($request->all());
        Log::info('Request data: ' . $requestData);

        foreach ($request->input('responses', []) as $promptId => $response) {
            if (is_array($response)) {
                // Handle free select (multiple entries for a single prompt)
                // First, remove existing responses for this prompt to handle deselected options
                //UserResponse::where('user_id', $userId)
                //            ->where('prompt_id', $promptId)
                //            ->delete();
                $existingResponses = UserResponse::where('user_id', $userId)
                                     ->where('prompt_id', $promptId)
                                     ->get();

                foreach ($existingResponses as $existingResponse) {
                    if (!in_array($existingResponse->prompt_option_id, $response)) {
                        $existingResponse->delete();
                    }
                }

                foreach ($response as $optionId) {
                    if (!$existingResponses->contains('prompt_option_id', $optionId)) {
                        UserResponse::create([
                            'user_id' => $userId,
                            'prompt_id' => $promptId,
                            'prompt_option_id' => $optionId,
                        ]);
                    }
                }
            } else {
                // Handle free response and multiple choice (single entry for a prompt)
                $existingResponse = UserResponse::where('user_id', $userId)
                                                ->where('prompt_id', $promptId)
                                                ->first();

                if ($existingResponse) {
                    // Update existing response
                    $existingResponse->update([
                        'prompt_option_id' => is_numeric($response) ? $response : null,
                        'text' => is_string($response) ? $response : null,
                    ]);
                } else {
                    // Create new response
                    UserResponse::create([
                        'user_id' => $userId,
                        'prompt_id' => $promptId,
                        'prompt_option_id' => is_numeric($response) ? $response : null,
                        'text' => is_string($response) ? $response : null,
                    ]);
                }
            }
        }

        // Update User Progress in form
        $progressPromptId = $request->input('progress_prompt_id');
        Log::debug($progressPromptId);
        $existingProgress = AdventureProgress::where('user_id', $userId)
                                                ->where('adventure_id', $adventureId)
                                                ->first();
        if ($existingProgress) {
            Log::debug('updating record with prompt_id' . $progressPromptId);
            $existingProgress->update(['prompt_id'=> $progressPromptId]);
        } else {
            AdventureProgress::create([
                'user_id' => $userId,
                'prompt_id' => $progressPromptId,
                'adventure_id' => $adventureId,
                'unlock_time' => Carbon::now()
            ]);

        }

        return redirect()->route('adventure.show', ['adventure' => $adventureId])->with('success', 'Responses have been updated.');
    }


}
