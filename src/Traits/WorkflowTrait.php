<?php

namespace J0hnys\TridentWorkflow\Traits;

use Workflow;

trait WorkflowTrait
{
    public function workflow_apply($transition, $workflow = null)
    {
        return Workflow::get($this, $workflow)->apply($this, $transition);
    }

    public function workflow_can($transition, $workflow = null)
    {
        return Workflow::get($this, $workflow)->can($this, $transition);
    }

    public function workflow_transitions()
    {
        return Workflow::get($this)->getEnabledTransitions($this);
    }
}
