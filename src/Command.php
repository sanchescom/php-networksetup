<?php

namespace Sanchescom\Utility;

use Sanchescom\Utility\Contracts\UtilityInterface;

/**
 * Class Command.
 */
class Command
{
    /**
     * @var UtilityInterface
     */
    protected $utility;

    /**
     * @var string
     */
    protected $commandPrefix;

    /**
     * @var string
     */
    protected $command;

    /**
     * @var array
     */
    protected $options;

    /**
     * Command constructor.
     *
     * @param UtilityInterface $utility
     * @param string $commandPrefix
     * @param string $command
     * @param array $options
     */
    public function __construct(UtilityInterface $utility, string $commandPrefix, string $command, array $options = [])
    {
        $this->utility = $utility;
        $this->commandPrefix = $commandPrefix;
        $this->command = $command;
        $this->options = $options;
    }

    /**
     * @param UtilityInterface $utility
     * @param string $commandPrefix
     * @param string $command
     * @param array $options
     * @return Command
     */
    public static function make(UtilityInterface $utility, string $commandPrefix, string $command, array $options = [])
    {
        return new self($utility, $commandPrefix, $command, $options);
    }

    /**
     * @return string
     */
    protected function extractCommand()
    {
        return $this->commandPrefix.strtolower($this->command);
    }

    /**
     * @return array
     */
    protected function implodeOptions()
    {
        return array_map(
            function ($value, $option) {
                if ($value) {
                    return sprintf("%s='%s'", $option, $value);
                }
            },
            $this->options,
            array_keys($this->options)
        );
    }

    /**
     * @return string
     */
    protected function implodeCommand()
    {
        return trim(
            implode(' ', array_merge([
                $this->utility,
                $this->extractCommand(),
            ], $this->implodeOptions()))
        );
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->implodeCommand();
    }
}
