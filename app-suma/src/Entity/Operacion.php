<?php

namespace App\Entity;

use App\Repository\OperacionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OperacionRepository::class)
 */
class Operacion
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $number1;

    /**
     * @ORM\Column(type="integer")
     */
    private $number2;

    /**
     * @ORM\Column(type="integer")
     */
    private $result;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumber1(): ?int
    {
        return $this->number1;
    }

    public function setNumber1(int $number1): self
    {
        $this->number1 = $number1;

        return $this;
    }

    public function getNumber2(): ?int
    {
        return $this->number2;
    }

    public function setNumber2(int $number2): self
    {
        $this->number2 = $number2;

        return $this;
    }

    public function getResult(): ?int
    {
        return $this->result;
    }

    public function setResult(int $result): self
    {
        $this->result = $result;

        return $this;
    }
}
