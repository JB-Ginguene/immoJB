<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SerieRepository::class)
 */
class Research
{
    private $priceMin;
    private $priceMax;
    private $saleOrRent;
    private $type;
    private $surfaceMin;
    private $surfaceMax;
    private $roomMin;
    private $roomMax;
    private $address;
    private $specificities;
    private $outsideSurfaceMin;
    private $outsideSurfaceMax;

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getSpecificities()
    {
        return $this->specificities;
    }

    /**
     * @param mixed $specificities
     */
    public function setSpecificities($specificities): void
    {
        $this->specificities = $specificities;
    }

    /**
     * @return mixed
     */
    public function getOutsideSurfaceMin()
    {
        return $this->outsideSurfaceMin;
    }

    /**
     * @param mixed $outsideSurfaceMin
     */
    public function setOutsideSurfaceMin($outsideSurfaceMin): void
    {
        $this->outsideSurfaceMin = $outsideSurfaceMin;
    }

    /**
     * @return mixed
     */
    public function getOutsideSurfaceMax()
    {
        return $this->outsideSurfaceMax;
    }

    /**
     * @param mixed $outsideSurfaceMax
     */
    public function setOutsideSurfaceMax($outsideSurfaceMax): void
    {
        $this->outsideSurfaceMax = $outsideSurfaceMax;
    }

    /**
     * @return mixed
     */
    public function getRoomMax()
    {
        return $this->roomMax;
    }

    /**
     * @param mixed $roomMax
     */
    public function setRoomMax($roomMax): void
    {
        $this->roomMax = $roomMax;
    }

    /**
     * @return mixed
     */
    public function getRoomMin()
    {
        return $this->roomMin;
    }

    /**
     * @param mixed $roomMin
     */
    public function setRoomMin($roomMin): void
    {
        $this->roomMin = $roomMin;
    }

    /**
     * @return mixed
     */
    public function getSurfaceMax()
    {
        return $this->surfaceMax;
    }

    /**
     * @param mixed $surfaceMax
     */
    public function setSurfaceMax($surfaceMax): void
    {
        $this->surfaceMax = $surfaceMax;
    }

    /**
     * @return mixed
     */
    public function getSurfaceMin()
    {
        return $this->surfaceMin;
    }

    /**
     * @param mixed $surfaceMin
     */
    public function setSurfaceMin($surfaceMin): void
    {
        $this->surfaceMin = $surfaceMin;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getPriceMax()
    {
        return $this->priceMax;
    }

    /**
     * @param mixed $priceMax
     */
    public function setPriceMax($priceMax): void
    {
        $this->priceMax = $priceMax;
    }

    /**
     * @return mixed
     */
    public function getSaleOrRent()
    {
        return $this->saleOrRent;
    }

    /**
     * @param mixed $saleOrRent
     */
    public function setSaleOrRent($saleOrRent): void
    {
        $this->saleOrRent = $saleOrRent;
    }

    /**
     * @return mixed
     */
    public function getPriceMin()
    {
        return $this->priceMin;
    }

    /**
     * @param mixed $priceMin
     */
    public function setPriceMin($priceMin): void
    {
        $this->priceMin = $priceMin;
    }

}
