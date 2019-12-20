<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="http://mymvc/mail/send">
    <input type="text" name="name" placeholder="введите имя">
    <br><br>
    <input type="text" name="mail" placeholder="введите email">
    <br><br>
    <input type="text" name="subject" placeholder="введите заголовок письма">
    <br><br>
    <textarea type="text" name="message" placeholder="введите текст письма" rows="5"></textarea>
    <br><br>
    <input type="submit" value="Enter!"><br><br>
    <?php echo $data;?>
</form>
</body>
</html>




