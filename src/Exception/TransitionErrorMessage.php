<?php
/*
 * This file is part of the Aqua Delivery package.
 *
 * (c) Sergey Logachev <svlogachev@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Cvek\WorkflowBundle\Exception;

final class TransitionErrorMessage
{
    private string $error;
    private string $transition;

    public function __construct(string $error, string $transition)
    {
        $this->error = $error;
        $this->transition = $transition;
    }

    public function getError(): string
    {
        return $this->error;
    }

    /**
     * @return string
     */
    public function getTransition(): string
    {
        return $this->transition;
    }
}
