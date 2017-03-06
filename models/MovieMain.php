<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class MovieMain {

    public static function getMovieList() {

        $db = Db::getConnection();

        $sql = 'SELECT id, title FROM film ORDER BY title ASC';

        $result = $db->prepare($sql);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $result->execute(); 

        $i = 0;
        $movieList = array();
        while ($row = $result->fetch()){

            $movieList[$i]['id'] = $row['id'];
            $movieList[$i]['title'] = $row['title'];
            $i++;
            
        }    
        return $movieList;
    }
    
    public static function getMovieById($id) {
        
        $db = Db::getConnection();
        
        $sql = 'SELECT * FROM film WHERE id = :id';
        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $result->execute();
        
        return $result->fetch();
        
    }
    
    public static function newMovie($options)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'INSERT INTO film '
                . '(title, release_year, format, stars)'
                . 'VALUES '
                . '(:title, :release_year, :format, :stars)';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':release_year', $options['release_year'], PDO::PARAM_INT);
        $result->bindParam(':format', $options['format'], PDO::PARAM_STR);
        $result->bindParam(':stars', $options['stars'], PDO::PARAM_STR);
       
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }
        
    

}