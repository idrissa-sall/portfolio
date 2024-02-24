<?php

namespace App\Entity;

use App\Repository\GeneralRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GeneralRepository::class)]
class General
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $presentationMessage = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $phone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $githubLink = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $gitlabLink = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $linkedinLink = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $profilPicture = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $coverPicture = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cvFilename = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $lastUpdate = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPresentationMessage(): ?string
    {
        return $this->presentationMessage;
    }

    public function setPresentationMessage(?string $presentationMessage): static
    {
        $this->presentationMessage = $presentationMessage;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    public function getGithubLink(): ?string
    {
        return $this->githubLink;
    }

    public function setGithubLink(?string $githubLink): static
    {
        $this->githubLink = $githubLink;

        return $this;
    }

    public function getGitlabLink(): ?string
    {
        return $this->gitlabLink;
    }

    public function setGitlabLink(?string $gitlabLink): static
    {
        $this->gitlabLink = $gitlabLink;

        return $this;
    }

    public function getLinkedinLink(): ?string
    {
        return $this->linkedinLink;
    }

    public function setLinkedinLink(?string $linkedinLink): static
    {
        $this->linkedinLink = $linkedinLink;

        return $this;
    }

    public function getProfilPicture(): ?string
    {
        return $this->profilPicture;
    }

    public function setProfilPicture(?string $profilPicture): static
    {
        $this->profilPicture = $profilPicture;

        return $this;
    }

    public function getCoverPicture(): ?string
    {
        return $this->coverPicture;
    }

    public function setCoverPicture(?string $coverPicture): static
    {
        $this->coverPicture = $coverPicture;

        return $this;
    }

    public function getCvFilename(): ?string
    {
        return $this->cvFilename;
    }

    public function setCvFilename(?string $cvFilename): static
    {
        $this->cvFilename = $cvFilename;

        return $this;
    }

    public function getLastUpdate(): ?\DateTimeInterface
    {
        return $this->lastUpdate;
    }

    public function setLastUpdate(?\DateTimeInterface $lastUpdate): static
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }
}
