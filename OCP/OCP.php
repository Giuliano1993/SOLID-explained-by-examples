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

function renderInformation($medias){
    foreach ($medias as $media) {
        if(get_class($media) == 'TvShow' ){
            $media->renderShowInformations();
        }elseif(get_class($media) == 'Movie'){
            $media->renderMovieInformations();
        }else{
            // ...
        }
    }
}
