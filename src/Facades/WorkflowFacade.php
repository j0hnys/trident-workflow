<?php

namespace J0hnys\TridentWorkflow\Facades;

use Illuminate\Support\Facades\Facade;

class WorkflowFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'workflow';
    }
}
