<?php
namespace App\Domains\Task\Jobs;

use Lucid\Foundation\Job;
use App\Data\Repositories\TaskRepository;

class UpdateTaskJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $data;

    protected $id;

    public function __construct($data, $id)
    {
        $this->data = $data;
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(TaskRepository $repo)
    {
        $repo->model->whereId($this->id)->update($this->data);
    }
}
