<?php

namespace Sanchescom\Utility;

use Sanchescom\Utility\Contracts\UtilityInterface;

/**
 * Class Utility.
 */
class Utility implements UtilityInterface
{
    /**
     * @var string
     */
    protected $name = 'networksetup';

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
    }
}
