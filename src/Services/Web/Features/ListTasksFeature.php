<?php
namespace App\Services\Web\Features;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Domains\Task\Jobs\ListTasksjob;

class ListTasksFeature extends Feature
{
    public function handle(Request $request)
    {
    	try {

			$tasks = $this->run(ListTasksjob::class);

			$data = [
				'tasks' => $tasks
			];


			return view('task.index', [
				'data' => $data
			]);


    	} catch (ValidationException $e) {


    	}
    }
}
