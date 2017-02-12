<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.02.2017
 * Time: 18:05
 */

include_once ROOT . '/models/News.php';
include_once ROOT . '/models/Comments.php';

class NewsController
{

    public function actionIndex()
    {
        $news = array();
        $news = News::getAllNews();

        require_once ROOT . '/views/news/index.php';

        return true;
    }

    public function actionView($id)
    {
        if($id){

            $newsItem = News::getNewsItemByID($id);

            $commentsList = Comments::getCommentsList($id);

            if (isset($_POST['submit'])) {
                // Если форма отправлена
                // Получаем данные из формы
                $options['author'] = $_POST['name'];
                $options['author_mail'] = $_POST['email'];
                $options['author_website'] = $_POST['url'];
                $options['comment_text'] = $_POST['comment'];

                // Флаг ошибок в форме
                $errors = false;

                // При необходимости можно валидировать значения нужным образом
                if (!isset($options['author']) || empty($options['author'])) {
                    $errors[] = 'Введите имя';
                }

                if (!isset($options['author_mail']) || empty($options['author_mail'])) {
                    $errors[] = 'Введите email';
                }

                if ($errors == false) {
                    // Если ошибок нет
                    // Добавляем новый товар
                    $id = Comments::createComment($options, $id);


                    // Перенаправляем пользователя на главную страницу
                    header("Location: /");
                }
            }

            require_once ROOT . '/views/news/view.php';

        }

        return true;
    }

    public function actionCreate()
    {

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['title'] = $_POST['title'];
            $options['short_content'] = $_POST['short_content'];
            $options['content'] = $_POST['content'];
            $options['author_name'] = $_POST['author_name'];


            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['title']) || empty($options['title'])) {
                $errors[] = 'Заполните поле Заголовок';
            }

            if (!isset($options['short_content']) || empty($options['short_content'])) {
                $errors[] = 'Заполните краткое описание';
            }

            if (!isset($options['content']) || empty($options['content'])) {
                $errors[] = 'Заполните основной контент';
            }

            if (!isset($options['author_name']) || empty($options['author_name'])) {
                $errors[] = 'Заполните поле имя';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новый товар
                $id = News::createNews($options);

                // Перенаправляем пользователя на главную страницу
                header("Location: / ");
            }
        }

        // Подключаем вид
        require_once(ROOT . '/views/news/create.php');
        return true;
    }

    public function actionDelete($id)
    {

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем товар
            News::deleteNewsById($id);

            // Перенаправляем пользователя на главную страницу
            header("Location: / ");
        }

        // Подключаем вид
        require_once(ROOT . '/views/news/delete.php');
        return true;
    }

}