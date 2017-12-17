<?php
namespace App\Domains\Task\Validators;

use App\Foundation\AppValidator;

class TaskInputValidator extends AppValidator {

    protected $rules = [
        'title'  =>  'required',
    ];

    protected $messages = [
        'required'  =>  "We'd love to know your :attribute, so please fill it properly.",

    ];
}