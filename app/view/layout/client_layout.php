<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='<? echo _WEB_ROOT; ?>/public/assets/client/css/style.css'>
    <title><? if (!empty($page_title)) {
                echo $page_title;
            } ?></title>
</head>

<body>
    <?
    $this->render('blocks/header', $user_infor);
    $this->render($content, $sub_content);
    $this->render('blocks/footer');

    ?>

</body>

</html>