<?php

namespace Task02;

class Vector
{
    private $x;
    private $y;
    private $z;

    public function __construct($x, $y, $z)
    {
        if (!is_numeric($x) || !is_numeric($y) || !is_numeric($z)) {
            throw new InvalidArgumentException('Coordinates must be numeric values');
        }

        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function add(Vector $vector): Vector
    {
        return new Vector($this->x + $vector->x, $this->y + $vector->y, $this->z + $vector->z);
    }

    public function sub(Vector $vector): Vector
    {
        return new Vector($this->x - $vector->x, $this->y - $vector->y, $this->z - $vector->z);
    }

    public function product($number): Vector
    {
        return new Vector($this->x * $number, $this->y * $number, $this->z * $number);
    }

    public function scalarProduct(Vector $vector)
    {
        return $this->x * $vector->x + $this->y * $vector->y + $this->z * $vector->z;
    }

    public function vectorProduct(Vector $vector): Vector
    {
        $x = $this->y * $vector->z - $this->z * $vector->y;
        $y = $this->z * $vector->x - $this->x * $vector->z;
        $z = $this->x * $vector->y - $this->y * $vector->x;

        return new Vector($x, $y, $z);
    }

    public function __toString()
    {
        return "({$this->x}; {$this->y}; {$this->z})";
    }
}
