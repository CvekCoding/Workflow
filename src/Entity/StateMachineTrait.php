<?php
/**
 * This file is part of the Cvek package.
 *
 * (c) Sergey Logachev <svlogachev@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

 namespace Cvek\WorkflowBundle\Entity;

 use Doctrine\ORM\Mapping\Column;
 
 trait StateMachineTrait
 {
     #[Column(type: 'string')]
     private ?string $state = null;
 
     public function getState(): ?string
     {
         return $this->state;
     }
 
     public function setState(string $state): self
     {
         $this->state = $state;
 
         return $this;
     }
 }
 