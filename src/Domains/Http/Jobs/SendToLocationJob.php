<?php
namespace App\Domains\Http\Jobs;

use Lucid\Foundation\Job;

class SendToLocationJob extends Job
{
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
    public function handle()
    {
        return redirect($this->data['location'])->with('message', $this->data['message']);
    }
}
