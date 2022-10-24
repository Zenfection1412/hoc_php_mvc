<?php
    echo (!empty($msg) ? $msg : false);
    HtmlHelper::formOpen('post', _WEB_ROOT . '/home/post_user');
    HtmlHelper::input(
        '<div>', 
        'text', 
        'fullname', 
        'form-control', 
        'fullname', 
        'Họ tên...',
        oldValue('fullname'),
        '<br>' . form_error('fullname', '<span style="color:red">', '</span>') . '</div>', 
    );
    HtmlHelper::input(
        '<div>', 
        'text', 
        'email', 
        'form-control', 
        'email', 
        'Email...',
        oldValue('email'),
        '<br>' . form_error('email', '<span style="color:red">', '</span>') . '</div>', 
    ); 
    HtmlHelper::input(
        '<div>', 
        'text', 
        'age', 
        'form-control', 
        'age', 
        'Tuổi...',
        oldValue('age'),
        '<br>' . form_error('age', '<span style="color:red">', '</span>') . '</div>', 
    );
    HtmlHelper::input(
        '<div>', 
        'password', 
        'password', 
        'form-control', 
        'password', 
        'Mật khẩu...',
        '',
        '<br>' . form_error('password', '<span style="color:red">', '</span>') . '</div>', 
    );
    HtmlHelper::input(
        '<div>', 
        'password', 
        'confirm_password', 
        'form-control', 
        'confirm_password', 
        'Nhập lại mật khẩu...',
        '',
        '<br>' . form_error('confirm_password', '<span style="color:red">', '</span>') . '</div>', 
    );
    HtmlHelper::submit('Submit', '');
?>