<?php

function testArea(Rectangle $rect){
    $rect->setHeight(4);
    $rect->setWidth(5);

    return $rect->getArea() == 20;
}

$r = new Rectangle();
echo 'Rect: '.testArea($r);
echo PHP_EOL;

$s = new Square();
echo 'Square: '.testArea($s);

