<?php

class Rectangle{
    public $width;

    public $height;
 
    public function getWidth()
    {
        return $this->width;
    }
 
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }
 
    public function getHeight()
    {
        return $this->height;
    }
 
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    public function getArea(){
        return $this->width * $this->height;
    }
}

class Square extends Rectangle{

    public function setWidth($width)
    {
        $this->width = $width;
        $this->height = $width;

        return $this;
    }
    
    public function setHeight($height)
    {
        $this->width = $height;
        $this->height = $height;

        return $this;
    }
}