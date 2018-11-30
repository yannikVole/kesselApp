<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    private $accountName;
    private $email;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Character", inversedBy="user", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $IgCharacter;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setAccountName($accName){
        $this->accountName = $accName;
    }
    public function getAccountName(){
        return $this->accountName;
    }

    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }

    public function getIgCharacter(): ?Character
    {
        return $this->IgCharacter;
    }

    public function setIgCharacter(Character $IgCharacter): self
    {
        $this->IgCharacter = $IgCharacter;

        return $this;
    }
}
