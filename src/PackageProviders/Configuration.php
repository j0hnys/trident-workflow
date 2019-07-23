<?php

namespace J0hnys\TridentWorkflow\PackageProviders;


class Configuration
{
    protected $configuration;

    /**
     * @param  array $config
     */
    public function __construct(array $config = null)
    {
        if (!empty($config)) {
            $this->config = $config;
        }
    }

    /**
     * @param  string $workflowName
     * @return Workflow
     */
    public function getWorkflow(string $workflow_name): array
    {
        return $this->configuration[ $workflow_name ];
    }

    /**
     * @param Workflow $workflow
     */
    public function setWorkflow(string $workflow_name, array $workflow_configuration)
    {
        $this->configuration[ $workflow_name ] = $workflow_configuration;
    }

}
