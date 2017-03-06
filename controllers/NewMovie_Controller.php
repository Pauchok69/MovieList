<?php 

/**
* 
*/
class NewMovie_Controller {
	
	/**
     * Action для страницы "Добавить товар"
     */
    public function action_index()
    {
        
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['title'] = $_POST['title'];
            $options['release_year'] = $_POST['release_year'];
            $options['format'] = $_POST['format'];
            $options['stars'] = $_POST['stars'];

            // Флаг ошибок в форме
            $errors = false;
            // При необходимости можно валидировать значения нужным образом
//            if (!isset($options['name']) || empty($options['name'])) {
//                $errors[] = 'Заполните поля';
//            }
            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новый товар
                $id = MovieMain::newMovie($options);
                
                // Перенаправляем пользователя на страницу управлениями товарами
                header("Location: /new-movie");
            }
        }
        // Подключаем вид
        require_once(ROOT . '/views/NewMovie.php');
        return true;
    }
}

 ?>