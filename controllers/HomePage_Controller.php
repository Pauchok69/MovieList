<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class HomePage_Controller {

    public function action_index() {
        
        $movieList = MovieMain::getMovieList();
        
        require_once (ROOT . '/views/index.php');
        return TRUE;
        
    }

}

