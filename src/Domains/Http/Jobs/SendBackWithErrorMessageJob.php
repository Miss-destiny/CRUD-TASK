<?php
namespace App\Domains\Http\Jobs;

use Lucid\Foundation\Job;

use Redirect;
use Illuminate\Http\Request;

class SendBackWithErrorMessageJob extends Job
{
    protected $data;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Request $request)
    {
        $request->session()->flash('messages', $this->data['messages']);

        if ($this->data['input'])
        {
            return Redirect::back()->withInput();

        } else {
            return Redirect::back();            
            
        }
    }
}