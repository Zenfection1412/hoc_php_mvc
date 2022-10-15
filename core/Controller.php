<?php

class Controller {
    public function models($model){
        if(file_exists(DIR_ROOT . '/app/models/' . $model . '.php')){
            require_once DIR_ROOT . '/app/models/' . $model . '.php';
            if(class_exists($model)){
                return new $model();
            } else {
                die('Class ' . $model . ' không tồn tại');
            }
            return false;
        }
    }

    public function render($view, $data = []){
        extract($data);
        if(file_exists(DIR_ROOT . '/app/views/' . $view . '.php')){
            require_once DIR_ROOT . '/app/views/' . $view . '.php';
        } else {
            die('View ' . $view . ' không tồn tại');
        }
    }
}
?>