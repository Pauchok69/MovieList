<?php

class Movie_Controller {

    public static function action_view($movieId) {
    
        $movie = MovieMain::getMovieById($movieId);
        
        require_once (ROOT . '/views/movie.php');
        return TRUE;
        
    }

}