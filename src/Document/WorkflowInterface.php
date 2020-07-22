<?php
/*
 * This file is part of the Aqua-delivery package.
 *
 * (c) Sergey Logachev <svlogachev@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cvek\WorkflowBundle\Document;

interface WorkflowInterface
{
    public function getStates(): ?iterable;

    public function setStates(iterable $states);
}
