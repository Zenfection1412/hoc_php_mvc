<form method="post" action="<?php echo _WEB_ROOT; ?>/home/post_user">
    <div>
        <input type="text" class="" name="fullname" placeholder="Họ tên..." value="<?php echo oldValue('fullname')?>"><br>
        <?php echo form_error('fullname', '<span style="color:red">', '</span>'); ?>
    </div>

    <div>
        <input type="text" class="" name="email" placeholder="Email..." value="<?php echo oldValue('email')?>"><br>
        <?php echo form_error('email', '<span style="color:red">', '</span>'); ?>
    </div>

    <div>
        <input type="text" class="" name="age" placeholder="Tuổi..." value="<?php echo oldValue('age')?>"><br>
        <?php echo form_error('age', '<span style="color:red">', '</span>'); ?>
    </div>

    <div>
        <input type="password" class="" name="password" placeholder="Mật khẩu..."><br>
        <?php echo form_error('password', '<span style="color:red">', '</span>'); ?>
    </div>

    <div>
        <input type="password" class="" name="confirm_password" placeholder="Nhập lại mật khẩu..."><br>
        <?php echo form_error('confirm_password', '<span style="color:red">', '</span>'); ?>
    </div>

    <button type="submit">Submit</button>
</form>