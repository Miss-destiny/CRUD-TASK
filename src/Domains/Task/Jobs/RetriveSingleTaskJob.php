<?php
namespace App\Domains\Task\Jobs;

use Lucid\Foundation\Job;
use App\Data\Repositories\TaskRepository;


class RetriveSingleTaskJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(TaskRepository $repo)
    {
        return $repo->find($this->id);
    }
}
