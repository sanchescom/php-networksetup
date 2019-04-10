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
    private const COMMAND_PREFIX = '-';

    /** @var string */
    private $method;

    /** @var array */
    private $options;

    /**
     * Command constructor.
     *
     * @param string $method
     * @param array $options
     */
    protected function __construct(string $method, array $options = [])
    {
        $this->method = $method;
        $this->options = $options;
    }

    /**
     * @param string $method
     * @param array $options
     *
     * @return Command
     */
    public static function make(string $method, array $options = [])
    {
        return new self($method, $options);
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
    public function getCommand()
    {
        return $this->implodeCommand();
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
    protected function implodeCommand()
    {
        return self::COMMAND_PREFIX.strtolower($this->method);
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
                $this->getCommand(),
            ], $this->implodeOptions()))
        );
    }
}
