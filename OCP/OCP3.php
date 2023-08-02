<?php

// how to solve the previous issue? 

interface Media
{
    public function renderMediaInformations();
}

class Movie implements Media
{
    public function renderMediaInformations(){
        //...   
    }
}

class TvShow implements Media
{
    public function renderMediaInformations(){
        //...
    }
}
class Song implements Media
{
    public function renderMediaInformations(){
        //...
    }
}

function renderInformations($medias){
    foreach($medias as $media){
        $media->renderMediaInformations();
    }
}