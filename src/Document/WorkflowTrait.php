<?php
/**
 * This file is part of the Aqua-Delivery package.
 *
 * (c) Sergey Logachev <svlogachev@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cvek\WorkflowBundle\Document;

trait WorkflowTrait
{
    /**
     * @var array|null
     *
     * @ODM\Field(type="collection", nullable=true)
     */
    private ?array $states = null;

    public function getStates(): ?iterable
    {
        return $this->states;
    }

    /**
     * @param array $states
     */
    public function setStates(iterable $states): self
    {
        $this->states = $states;

        return $this;
    }
}
