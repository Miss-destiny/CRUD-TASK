<?php
namespace App\Domains\Task\Jobs;

use Lucid\Foundation\Job;
use App\Domains\Task\Validators\TaskInputValidator;

class ValidateTaskInputJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */

    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(TaskInputValidator $validator)
    {
        return $validator->validate($this->data);
    }
}
