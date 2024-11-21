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
 
 trait WorkflowTrait
 {
     /** @var array<string> */
     #[Column(type: 'json', options: ['jsonb' => true], nullable: true)]
     private ?array $states = null;
 
     public function getStates(): ?iterable
     {
         return $this->states;
     }
 
     /** @param array<string> $states */
     public function setStates(iterable $states): self
     {
         $this->states = $states;
 
         return $this;
     }
 }
 