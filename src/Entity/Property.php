<?php

namespace App\Entity;

use App\Repository\PropertyRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=PropertyRepository::class)
 */
class Property
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\Range(
     *     min="10",
     *     max="1000",
     *     minMessage="It's illegal to sell or rent a place with less than 10m².",
     *     maxMessage="You must be really rich, please contact us directly, we'll find an agreement.")
     *
     * @ORM\Column(type="integer")
     */
    private $surface;

    /**
     *     @Assert\Range(
     *     min="1",
     *     max="100",
     *     minMessage="You need at least a room.",
     *     maxMessage="You must be really rich, please contact us directly, we'll find an agreement.")
     *
     * @ORM\Column(type="integer")
     */
    private $room;

    /**
     * @Assert\Choice(choices={"house", "apartment", "other"})
     *
     * @ORM\Column(type="string", length=30)
     */
    private $type;

    /**
     *     @Assert\Length(
     *     min=10,
     *     max=3000,
     *     minMessage="Minimum 10 charaters please !",
     *     maxMessage="Maximum 255 charaters please !"
     * )
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @Assert\Type("bool")
     *
     * @ORM\Column(type="boolean")
     */
    private $pool;

    /**
     * @Assert\Type("bool")
     *
     * @ORM\Column(type="boolean")
     */
    private $outsides;

    /**
     *     @Assert\Range(
     *     min="1",
     *     max="10000",
     *     minMessage="You need at least 1m².",
     *     maxMessage="You must be really rich, please contact us directly, we'll find an agreement.")

     * @ORM\Column(type="integer", nullable=true)
     */
    private $outsideSurface;

    /**
     * @Assert\Type("bool")
     *
     * @ORM\Column(type="boolean")
     */
    private $garage;

    /**
     * @Assert\Choice(choices={"sale", "rent"})
     *
     * @ORM\Column(type="string", length=255)
     */
    private $saleOrRent;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="datetime")
     */
    private $publishedDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSurface(): ?int
    {
        return $this->surface;
    }

    public function setSurface(int $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    public function getRoom(): ?int
    {
        return $this->room;
    }

    public function setRoom(int $room): self
    {
        $this->room = $room;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getPool(): ?bool
    {
        return $this->pool;
    }

    public function setPool(bool $pool): self
    {
        $this->pool = $pool;

        return $this;
    }

    public function getOutsides(): ?bool
    {
        return $this->outsides;
    }

    public function setOutsides(bool $outsides): self
    {
        $this->outsides = $outsides;

        return $this;
    }

    public function getOutsideSurface(): ?int
    {
        return $this->outsideSurface;
    }

    public function setOutsideSurface(?int $outsideSurface): self
    {
        $this->outsideSurface = $outsideSurface;

        return $this;
    }

    public function getGarage(): ?bool
    {
        return $this->garage;
    }

    public function setGarage(bool $garage): self
    {
        $this->garage = $garage;

        return $this;
    }

    public function getSaleOrRent(): ?string
    {
        return $this->saleOrRent;
    }

    public function setSaleOrRent(string $saleOrRent): self
    {
        $this->saleOrRent = $saleOrRent;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getPublishedDate(): ?\DateTimeInterface
    {
        return $this->publishedDate;
    }

    public function setPublishedDate(\DateTimeInterface $publishedDate): self
    {
        $this->publishedDate = $publishedDate;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }
}
