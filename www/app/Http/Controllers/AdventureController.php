<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request; // Ensure this line is here
use App\Models\Adventure;
use App\Models\Prompt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AdventureController extends Controller
{
    public function index()
    {
        $adventures = Adventure::all();
        return view('adventure.index', compact('adventures'));
    }

    public function create()
    {
        return view('adventure.create');
    }

    public function store(Request $request)
    {
        // Validate the adventure input
        $validatedData = Validator::make($request->all(), [
            'adventure_name' => 'required|string|max:255',
            'order' => 'required|integer',
            'prompts' => 'required|array|min:1',
            'prompts.*.text' => 'required|string|max:255',
            'prompts.*.type' => ['required', Rule::in(['FREE_RESPONSE', 'FREE_SELECT', 'MULTIPLE_CHOICE'])],
        ])->after(function ($validator) use ($request) {
            foreach ($request->input('prompts', []) as $index => $prompt) {
                if (in_array($prompt['type'], ['FREE_SELECT', 'MULTIPLE_CHOICE']) && empty($prompt['options'])) {
                    $validator->errors()->add("prompts.$index.options", 'The options field is required for this type of prompt.');
                }
            }
        })->validate();

        $adventure = new Adventure;
        $adventure->adventure_name = $validatedData['adventure_name'];
        $adventure->order = $validatedData['order'];
        $adventure->save();

        foreach ($validatedData['prompts'] as $promptData) {
            $prompt = new Prompt;
            $prompt->adventure_id = $adventure->id;
            $prompt->prompt_text = $promptData['text'];
            $prompt->prompt_type = $promptData['type'];

            // Prepare options for JSON encoding
            $options = [];
            if (isset($promptData['options']) && ($promptData['type'] == 'FREE_SELECT' || $promptData['type'] == 'MULTIPLE_CHOICE')) {
                foreach ($promptData['options'] as $option) {
                    // Storing just the values, adjust if needed
                    $options[] = $option;
                }
            }

            $prompt->options = json_encode($options);
            $prompt->save();
        }

        return redirect()->route('adventure.create')->with('success', 'Adventure created successfully!');
    }

    public function destroy($id)
    {
        //echo "deleting adventure" . $id;
        $adventure = Adventure::findOrFail($id);
        $adventure->delete();

        return redirect()->route('adventure.index')->with('success', 'Adventure deleted successfully');
    }

}

