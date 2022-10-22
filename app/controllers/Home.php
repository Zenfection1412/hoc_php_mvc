<?php

class Home extends Controller {
    public $data;

    public function __construct(){
        
    }

    public function index(){
        //$data = $this->tb_product->getProduct();
        $data = $this->db->table('tb_product')->get();
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
    public function get_user(){
        $request = new Request();
        $data = $request->getField();
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        $this->render('users/add');
    }
    public function post_user(){
        $request = new Request();
        if($request->isPost()){
            //set rules
            $request->rules([
                'fullname' => 'required|min:5|max:50',
                'email' => 'required|email|min:6',
                'password' => 'required|min:3',
                'confirm_password' => 'required|min:3|match:password'
            ]);

            //set message
            $request->message([
                'fullname.required' => 'Họ tên không được để trống',
                'fullname.min' => 'Họ tên phải có ít nhất 5 ký tự',
                'fullname.max' => 'Họ tên không được quá 50 ký tự',
                'email.required' => 'Email không được để trống',
                'email.email' => 'Email không đúng định dạng',
                'email.min' => 'Email phải có ít nhất 6 ký tự',
                'password.required' => 'Mật khẩu không được để trống',
                'password.min' => 'Mật khẩu phải có ít nhất 3 ký tự',
                'confirm_password.required' => 'Nhập lại mật khẩu không được để trống',
                'confirm_password.min' => 'Nhập lại mật khẩu phải có ít nhất 3 ký tự',
                'confirm_password.match' => 'Nhập lại mật khẩu không khớp'
            ]);

            $validate = $request->validate();
            if(!$validate){
                $this->data['errors'] = $request->errors();
                $this->data['msg'] = 'Đã có lỗi xảy ra, vui lòng kiểm tra lại';
                $this->data['oldValue'] = $request->getField();
            } 
            $this->render('users/add', $this->data);
            } else{
                $response = new Response();
                $response->redirect('home/get_user');
            }
        }
}
