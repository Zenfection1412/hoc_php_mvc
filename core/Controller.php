<?php

class Controller {
    public $db;

    public function models($model){
        if(file_exists(_DIR_ROOT . '/app/models/' . $model . '.php')){
            require_once _DIR_ROOT . '/app/models/' . $model . '.php';
            if(class_exists($model)){
                return new $model();
            } else {
                die('Class ' . $model . ' không tồn tại');
            }
            return false;
        }
    }

    public function render($view, $data = []){
        if(!empty(View::$dataShare)){
            $data = array_merge($data, View::$dataShare);
        }

        extract($data);

        // ob_start();
        // if(file_exists(_DIR_ROOT . '/app/views/' . $view . '.php')){
        //     require_once _DIR_ROOT . '/app/views/' . $view . '.php';
        // } else {
        //     die('View ' . $view . ' không tồn tại');
        // }
        // $contentView = ob_get_contents();
        // ob_end_clean();

        $contentView = null;
        if(preg_match('~^layout~', $view) && file_exists(_DIR_ROOT . '/app/views/' . $view . '.php')){
            require_once _DIR_ROOT . '/app/views/' . $view . '.php';
        } else {
            $contentView = file_get_contents(_DIR_ROOT . '/app/views/' . $view . '.php');
            $template = new Template();
            $template->run($contentView, $data);
        }
    }
}
?>