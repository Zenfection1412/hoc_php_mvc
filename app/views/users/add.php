<form method="post" action="<?php echo _WEB_ROOT; ?>/home/post_user">
    <div>
        <input type="text" class="" name="fullname" placeholder="Họ tên..." value="<?php if(!empty($oldValue)){
            echo $oldValue['fullname'];
        } ?>"><br>
        <?php
            if(!empty($errors) && array_key_exists('fullname', $errors)){
                echo '<span style="color:red">' . $errors['fullname'] . '</span>';
            } 
        ?>
    </div>

    <div>
        <input type="text" class="" name="email" placeholder="Email..." value="<?php if(!empty($oldValue['email'])){
                echo $oldValue['email'];
            }
        ?>"><br>
        <?php
            if(!empty($errors) && array_key_exists('email', $errors)){
                echo '<span style="color:red">' . $errors['email'] . '</span>';
            } 
        ?>
    </div>

    <div>
        <input type="text" class="" name="age" placeholder="Tuổi..." value="<?php if(!empty($oldValue['age'])){
                echo $oldValue['age'];
            }
        ?>"><br>
        <?php
            if(!empty($errors) && array_key_exists('age', $errors)){
                echo '<span style="color:red">' . $errors['age'] . '</span>';
            } 
        ?>
    </div>

    <div>
        <input type="password" class="" name="password" placeholder="Mật khẩu..."><br>
        <?php
            if(!empty($errors) && array_key_exists('password', $errors)){
                echo '<span style="color:red">' . $errors['password'] . '</span>';
            } 
        ?>
    </div>

    <div>
        <input type="password" class="" name="confirm_password" placeholder="Nhập lại mật khẩu..."><br>
        <?php
            if(!empty($errors) && array_key_exists('confirm_password', $errors)){
                echo '<span style="color:red">' . $errors['confirm_password'] . '</span>';
            } 
        ?>
    </div>

    <button type="submit">Submit</button>
</form>