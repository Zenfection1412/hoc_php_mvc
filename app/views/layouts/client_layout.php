<html>
    <head>
        <title><?php echo (!empty($page_title) ? $page_title : 'Trang Chủ')?></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/assets/clients/css/style.css">
    </head>
    <body>
        <?php
            $this->render('blocks/header', $sub_content);
            $this->render($content, $sub_content);
            $this->render('blocks/footer', $sub_content);
        ?>
        
        <script src="<?php echo _WEB_ROOT; ?>/public/assets/clients/js/script.js"></script>
    </body>
</html>