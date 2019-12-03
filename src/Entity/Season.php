<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SeasonRepository")
 */
class Season
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $number;

    /**
     * @ORM\Column(type="integer")
     */
    private $year;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Program", inversedBy="seasons")
     * @ORM\JoinColumn(nullable=false)
     */
    private $programs;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Episodes", mappedBy="seasons")
     */
    private $episodes;

    public function __construct()
    {
        $this->seasons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProgram(): ?Program
    {
        return $this->program;
    }

    public function setProgram(?Program $program): self
    {
        $this->program = $program;

        return $this;
    }

    /**
     * @return Collection|Episodes[]
     */
    public function getEpisodes(): Collection
    {
        return $this->Episodes;
    }

    public function addEpisode(Episodes $episodes): self
    {
        if (!$this->episodes->contains($episodes)) {
            $this->episodes[] = $episodes;
            $episodes->setEpisodes($this);
        }

        return $this;
    }

    public function removeEpisode(Episodes $episodes): self
    {
        if ($this->episodes->contains($episodes)) {
            $this->episodes->removeElement($episodes);
            // set the owning side to null (unless already changed)
            if ($episodes->getEpisodes() === $this) {
                $episodes->setEpisodes(null);
            }
        }

        return $this;
    }
}
