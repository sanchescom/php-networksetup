<?php

namespace Sanchescom\Utility;

/**
 * Class Command.
 */
class Command
{
    /** @var string */
    private const UTILITY = 'networksetup';

    /** @var string */
    private const ARGUMENT_PREFIX = '-';

    /** @var string */
    private $argument;

    /** @var array */
    private $options;

    /**
     * Command constructor.
     *
     * @param string $argument
     * @param array $options
     */
    protected function __construct(string $argument, array $options = [])
    {
        $this->argument = $argument;
        $this->options = $options;
    }

    /**
     * @param string $argument
     * @param array $options
     *
     * @return Command
     */
    public static function make(string $argument, array $options = [])
    {
        return new self($argument, $options);
    }

    /**
     * @return string
     */
    public function getUtility()
    {
        return self::UTILITY;
    }

    /**
     * @return string
     */
    public function getArgument()
    {
        return $this->implodeArgument();
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->implodeOptions();
    }

    /**
     * @return string
     */
    protected function implodeArgument()
    {
        return self::ARGUMENT_PREFIX.strtolower($this->argument);
    }

    /**
     * @return array
     */
    protected function implodeOptions()
    {
        $options = [];

        foreach ($this->options as $option) {
            if (is_array($option)) {
                $options[] = implode(' ', $option);
            } else {
                $options[] = $option;
            }
        }

        return $options;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return trim(
            implode(' ', array_merge([
                $this->getUtility(),
                $this->getArgument(),
            ], $this->implodeOptions()))
        );
    }
}
