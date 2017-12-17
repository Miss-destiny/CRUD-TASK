<?php
namespace App\Domains\Task\Jobs;

use Lucid\Foundation\Job;
use App\Data\Repositories\TaskRepository;

class ListTasksJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */

    protected $data;

    public function __construct()
    {
        
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(TaskRepository $repo)
    {
        return $repo->all();
    }
}
