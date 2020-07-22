<?php
/**
 * This file is part of the Aqua-Delivery package.
 *
 * (c) Sergey Logachev <svlogachev@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cvek\WorkflowBundle\Entity;

trait WorkflowTrait
{
    /**
     * @var array|null
     *
     * @ORM\Column(type="json", options={"jsonb"=true}, nullable=true)
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
