<?php

declare(strict_types=1);

namespace AdgoalCommon\CommandBus\Exception;

use Exception;
use Throwable;

/**
 * Class ThrowableException.
 *
 * @category AdgoalCommon\CommandBus\Exception
 */
class ThrowableException extends Exception
{
    /**
     * ThrowableException constructor.
     *
     * @param Throwable $throwable
     */
    public function __construct(Throwable $throwable)
    {
        parent::__construct($throwable->getMessage(), (int) $throwable->getCode(), $throwable);
        $this->file = $throwable->getFile();
        $this->line = $throwable->getLine();
    }
}
