<?php

namespace Brunty\Behat\SpeedtrapExtension\ServiceContainer;

use Brunty\Behat\SpeedtrapExtension\Printer\OutputPrinter;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class Config
{
    const CONFIG_KEY_ENABLED_ALWAYS = 'enabled_always';
    const CONFIG_KEY_FORMAT = 'output';

    /**
     * @var ContainerBuilder
     */
    private $container;

    /**
     * @var int
     */
    private $scenarioThreshold;

    /**
     * @var int
     */
    private $stepThreshold;

    /**
     * @var int
     */
    private $reportLength;

    /**
     * @param ContainerBuilder $container
     * @param array            $config
     */
    public function __construct(ContainerBuilder $container, $config)
    {
        $this->container = $container;
        $this->scenarioThreshold = (int) $config['scenario_threshold'];
        $this->stepThreshold = (int) $config['step_threshold'];
        $this->reportLength = (int) $config['report_length'];
    }

    /**
     * @return int
     */
    public function getScenarioThreshold(): int
    {
        return $this->scenarioThreshold;
    }

    /**
     * @return int
     */
    public function getStepThreshold(): int
    {
        return $this->stepThreshold;
    }

    /**
     * @return int
     */
    public function getReportLength(): int
    {
        return $this->reportLength;
    }

    /**
     * @return OutputPrinter[]
     * @throws \Exception
     */
    public function getOutputPrinters(): array
    {
        return [
            $this->container->get('brunty.speedtrap_extension.output_printer.scenario_console'),
        ];
    }

    /**
     * @return OutputPrinter[]
     * @throws \Exception
     */
    public function getStepOutputPrinters(): array
    {
        return [
            $this->container->get('brunty.speedtrap_extension.output_printer.step_console'),
        ];
    }
}
