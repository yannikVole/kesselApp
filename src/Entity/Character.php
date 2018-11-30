<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CharacterRepository")
 */
class Character
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastModified;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\User", mappedBy="IgCharacter", cascade={"persist", "remove"})
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLastModified(): ?string
    {
        return $this->lastModified;
    }

    public function setLastModified(string $lastModified): self
    {
        $this->lastModified = $lastModified;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): self
    {
        $this->user = $user;

        // set the owning side of the relation if necessary
        if ($this !== $user->getIgCharacter()) {
            $user->setIgCharacter($this);
        }

        return $this;
    }
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $realm;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $battlegroup;

    /**
     * @ORM\Column(type="integer")
     */
    private $class;

    /**
     * @ORM\Column(type="integer")
     */
    private $race;

    /**
     * @ORM\Column(type="integer")
     */
    private $gender;

    /**
     * @ORM\Column(type="integer")
     */
    private $level;

    /**
     * @ORM\Column(type="integer")
     */
    private $achievementPoints;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $thumbnail;

    /**
     * @ORM\Column(type="integer")
     */
    private $faction;


    public function getRealm(): ?string
    {
        return $this->realm;
    }

    public function setRealm(string $realm): self
    {
        $this->realm = $realm;

        return $this;
    }

    public function getBattlegroup(): ?string
    {
        return $this->battlegroup;
    }

    public function setBattlegroup(string $battlegroup): self
    {
        $this->battlegroup = $battlegroup;

        return $this;
    }

    public function getClass(): ?int
    {
        return $this->class;
    }

    public function setClass(int $class): self
    {
        $this->class = $class;

        return $this;
    }

    public function getRace(): ?int
    {
        return $this->race;
    }

    public function setRace(int $race): self
    {
        $this->race = $race;

        return $this;
    }

    public function getGender(): ?int
    {
        return $this->gender;
    }

    public function setGender(int $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getAchievementPoints(): ?int
    {
        return $this->achievementPoints;
    }

    public function setAchievementPoints(int $achievementPoints): self
    {
        $this->achievementPoints = $achievementPoints;

        return $this;
    }

    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }

    public function setThumbnail(string $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    public function getFaction(): ?int
    {
        return $this->faction;
    }

    public function setFaction(int $faction): self
    {
        $this->faction = $faction;

        return $this;
    }
}
