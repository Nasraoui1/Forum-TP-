<?php

namespace App\Entity;

use App\Repository\ReplyRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReplyRepository::class)]
class Reply
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $content = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $updatedAt = null;

    #[ORM\Column]
    private ?bool $isApproved = null;

    #[ORM\ManyToOne(inversedBy: 'replies')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $userRelation = null;

    #[ORM\ManyToOne(inversedBy: 'replies')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Topic $topic = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTime $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function isApproved(): ?bool
    {
        return $this->isApproved;
    }

    public function setIsApproved(bool $isApproved): static
    {
        $this->isApproved = $isApproved;

        return $this;
    }

    public function getUserRelation(): ?User
    {
        return $this->userRelation;
    }

    public function setUserRelation(?User $userRelation): static
    {
        $this->userRelation = $userRelation;

        return $this;
    }

    public function getTopic(): ?Topic
    {
        return $this->topic;
    }

    public function setTopic(?Topic $topic): static
    {
        $this->topic = $topic;

        return $this;
    }
}
