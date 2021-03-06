<?php
/*
 * This file is part of the Aqua-delivery package.
 *
 * (c) Sergey Logachev <svlogachev@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cvek\WorkflowBundle\Entity;

interface StateMachineInterface
{
    public function getState(): ?string;

    public function setState(string $state);
}
