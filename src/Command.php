<?php

namespace Sanchescom\Utility;

use Sanchescom\Utility\Contracts\UtilityInterface;

/**
 * Class Command.
 */
class Command
{
    /** @var UtilityInterface */
    private $utility;

    /**  @var string */
    private $commandPrefix;

    /** @var string */
    private $command;

    /** @var array */
    private $options;

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
     *
     * @return Command
     */
    public static function make(UtilityInterface $utility, string $commandPrefix, string $command, array $options = [])
    {
        return new self($utility, $commandPrefix, $command, $options);
    }

    /**
     * @return UtilityInterface
     */
    public function getUtility()
    {
        return $this->utility;
    }

    /**
     * @return string
     */
    public function getCommand()
    {
        return $this->implodeCommand();
    }

    /**
     * @return string
     */
    protected function implodeCommand()
    {
        return $this->commandPrefix.strtolower($this->command);
    }

    /**
     * @return string
     */
    protected function implodeOptions()
    {
        $options = '';

        foreach ($this->options as $option) {
            if (is_array($option)) {
                $options .= implode(' ', $option).' ';
            } else {
                $options .= $option.' ';
            }
        }

        return trim($options);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return trim(
            implode(' ', array_merge([
                $this->getUtility(),
                $this->getCommand(),
            ], $this->implodeOptions()))
        );
    }
}
