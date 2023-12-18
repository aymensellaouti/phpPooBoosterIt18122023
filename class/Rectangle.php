<?php

// declare(strict_types=1);
class Rectangle
{
    /**
     * Ca permet de construire un Rectangle
     * 
     * @param int $width
     * @param int $height
     */
    public function __construct(
        private int $width = 0,
        private int $height = 0
    ) {}

    /**
     * Get the value of width
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Set the value of width
     *
     * @param int $width
     * @return  Rectangle
     */
    public function setWidth(int $width): Rectangle
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get the value of height
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Set the value of height
     *
     * @param int $height
     * @return  Rectangle
     */
    public function setHeight(int $height): Rectangle
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Calcule le perimetre du Rectangle
     * 
     * @return int Le perimeter du rectangle
     */
    function perimeter(): int {
        return 2 * ($this->width + $this->height);
    }
    /**
     * Calcule la surface du Rectangle
     * 
     * @return int La surface du rectangle
     */
    function surface(): int {
        return $this->width * $this->height;
    }

    /**
     * Vérifie si le rectangle 1 est plus grand que le rectangle 2 
     * 
     * @param Rectangle $autreRectangle
     * @return bool True 
     */
    function isBiggerOrEqualTo(Rectangle $autreRectangle): bool {
        return $this->surface() >= $autreRectangle->surface();
    }

    /**
     * Vérifie si le rectangle peut contenir l'autre rectangle 
     * 
     * @param Rectangle $autreRectangle
     * @return bool True
     */
    function canContain(Rectangle  $autreRectangle): bool {
        return (($this->width > $autreRectangle->width) 
        && ($this->height > $autreRectangle->height)) 
        || (($this->width >= $autreRectangle->height) 
        && ($this->height >= $autreRectangle->width));
    }
}
