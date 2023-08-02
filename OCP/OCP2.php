<?php

class Movie
{
    public function renderMovieInformations(){
        //...   
    }
}

class TvShow
{
    public function renderShowInformations(){
        //...
    }
}
class Song
{
    public function renderSongInformations(){
        //...
    }
}

function renderInformations($medias){
    // starts to be messy to see and to handle
    // whatevere you do in the three render methods shold be compatible with the rest
    // every different media we add we shold add a condition to the if or switch
    // making this function not closed to changes
    // moreover in a real world applicatio this kind of mechanism could be spread all over the application, 
    // making it necessary to check wherever we try to render some media information and then add the
    // new media to that case
    // Rigid: because it leads to many changes every time we a dd things
    // Fragile: it's easy to break since we keep adding new things ll linked
    // Immobile: we can't tae this funciotn anywhere else without taking TvShow, Movie and song classes with us
    foreach($medias as $media){
        if(get_class($media) == 'TvShow' ){
            $media->renderShowInformations();
        }elseif(get_class($media) == 'Movie'){
            $media->renderMovieInformations();
        }elseif(get_class($media) == 'Somg'){
            $media->renderSongInformations();
        }else{
            // ...
        }
    }
}