<?php
/**
 * This file is part of the Diningedge package.
 *
 * (c) Sergey Logachev <svlogachev@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cvek\WorkflowBundle\Document;

trait StateMachineTrait
{
    /**
     * @var string|null
     *
     * @ODM\Field(type="string")
     */
    private ?string $state = null;

    /**
     * @return string
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param string $state
     *
     * @return StateMachineTrait
     */
    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }
}
