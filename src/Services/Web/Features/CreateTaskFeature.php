<?php
namespace App\Services\Web\Features;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CreateTaskFeature extends Feature
{
    public function handle(Request $request)
    {
    	try{
    		
    		return view('task.create');

    	} catch (ValidationException $e) {

    	}

    }
}
