<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ModuleController extends Controller
{
    public function viewModule($moduleId)
    {
        // Example module view mapping. You can replace this with your own logic.
        $moduleViewMapping = [
            '1' => 'adventures/adventure1', // 'modules.module1' corresponds to resources/views/modules/module1.blade.php
            '2' => 'adventures/adventure2', // 'modules.module2' corresponds to resources/views/modules/module2.blade.php
            // Add more mappings as needed for each module ID
            '3' => 'adventures/adventure3',
            '4' => 'adventures/adventure4'
        ];

        // Determine the view based on the module ID. Default to a generic module view if ID not found.
        $moduleView = $moduleViewMapping[$moduleId] ?? 'adventure1';

        // Return the view corresponding to the module. Additional data can be passed to the view if necessary.
        return view($moduleView);
    }
}

