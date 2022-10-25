<?php

class News extends Controller{

    public $data = [];

    public function index(){
        $this->data['sub_content']['new_title'] = 'Tin tức 1';
        $this->data['sub_content']['new_content'] = 'Nội dung 1';
        $this->data['sub_content']['new_author'] = 'Zenfection';
        $this->data['sub_content']['page_title'] = 'Tiêu đề Newss';
        $this->data['content'] = 'news/list';

        $this->render('layouts/client_layout', $this->data);
    }
}
?>