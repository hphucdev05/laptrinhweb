<?php
class Controller {
    // Load model
    public function model($model) {
        require_once 'models/' . $model . '.php';
        return new $model();
    }
    
    // Load view
    public function view($view, $data = []) {
        $viewFile = 'views/' . $view . '.php';
        if(!file_exists($viewFile)) {
            $viewFile = 'views/' . $view . '.html';
        }
        
        if(file_exists($viewFile)) {
            extract($data);
            include $viewFile;
        } else {
            die("View không tồn tại");
        }
    }
}
?> 