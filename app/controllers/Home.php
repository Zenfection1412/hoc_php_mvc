<?php

class Home extends Controller {
    public $data;

    public function __construct(){
        
    }

    public function index(){
        //$data = $this->tb_product->getProduct();
        //Session::data('username');
    }
    public function get_user(){
        $this->data['msg'] = Session::flash('msg');
        $this->render('users/add', $this->data);
    }

    public function post_user(){
        $request = new Request();
        if($request->isPost()){
            //set rules
            $request->rules([
                'fullname' => 'required|min:5|max:50',
                'email' => 'required|email|min:6|unique:tb_user:email',
                'password' => 'required|min:3',
                'confirm_password' => 'required|min:3|match:password',
                'age' => 'require|callback_check_age'
            ]);

            //set message
            $request->message([
                'fullname.required' => 'Họ tên không được để trống',
                'fullname.min' => 'Họ tên phải có ít nhất 5 ký tự',
                'fullname.max' => 'Họ tên không được quá 50 ký tự',
                'email.required' => 'Email không được để trống',
                'email.email' => 'Email không đúng định dạng',
                'email.min' => 'Email phải có ít nhất 6 ký tự',
                'email.unique' => 'Email đã tồn tại trong hệ thống',
                'password.required' => 'Mật khẩu không được để trống',
                'password.min' => 'Mật khẩu phải có ít nhất 3 ký tự',
                'confirm_password.required' => 'Nhập lại mật khẩu không được để trống',
                'confirm_password.min' => 'Nhập lại mật khẩu phải có ít nhất 3 ký tự',
                'confirm_password.match' => 'Nhập lại mật khẩu không khớp',
                'age.required' => 'Tuổi không được để trống',
                'age.callback_check_age' => 'Tuổi phải từ 18 đến 100'
            ]);

            $validate = $request->validate();
            if(!$validate){
                Session::flash('msg', 'Đã có lỗi xảy ra, vui lòng kiểm tra lại');
            } 
            
        } 
        $response = new Response();
        $response->redirect('home/get_user');
    }
    
    public function check_age($age){
        if($age < 18 || $age > 100) return false;
        return true;
    }
}
