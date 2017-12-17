<?php

namespace App\Data\Repositories;

use Framework\Task;


/**
 * Base Repository.
 */
class TaskRepository extends Repository
{
    /**
     * The model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    public $model;

    public function __construct()
    {
        $this->model = new Task;

        parent::__construct($this->model);

    }

   
}
