<?php

interface IFigure{
    public function getArea();
}

class Calc{
    public function getArea(IFigure $figure){
        return $figure->getArea();
    }
}

class Square implements IFigure {
    private $side;

    /**
     * Square constructor.
     * @param int $side
     */
    public function __construct(int $side)
    {
        $this->side = $side;
    }


    public function getArea()
    {
        return $this->side * $this->side;
    }
}

class Rectangle implements IFigure {
    private $height;
    private $width;

    /**
     * Rectangle constructor.
     * @param int $height
     * @param int $width
     */
    public function __construct(int $height,int $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function getArea()
    {
        return $this->height * $this->width;
    }
}

class Circle implements IFigure {
    private $radius;

    /**
     * Circle constructor.
     * @param int $radius
     */
    public function __construct(int $radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return $this->radius * $this->radius * pi();
    }
}
