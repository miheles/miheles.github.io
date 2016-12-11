<!doctype html>
<html>
<head>
    <title>Example Domain</title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php
        $colorrand = rand(1,3);
        if ($colorrand == 1) {$color = "#4CAF50"; $utmcolor = "&utmcolor=green";}
        if ($colorrand == 2) {$color = "#008CBA"; $utmcolor = "&utmcolor=blue";}
        if ($colorrand == 3) {$color = "#f44336"; $utmcolor = "&utmcolor=red";}

        $textrand = rand(1,3);
        if ($textrand == 1) {$text = "Смотреть онлайн"; $utmtext = "&utmtext=online";}
        if ($textrand == 2) {$text = "Смотреть без регистрации"; $utmtext = "&utmtext=reg";}
        if ($textrand == 3) {$text = "Смотреть без смс"; $utmtext = "&utmtext=sms";}

        $imgrand = rand(1,3);
        if ($imgrand == 1) {$img = "1.jpg"; $utmimg = "&utmimg=leo";}
        if ($imgrand == 2) {$img = "2.jpg"; $utmimg = "&utmimg=ivmp";}
        if ($imgrand == 3) {$img = "3.jpg"; $utmimg = "&utmimg=shawshank";}

        $uri = $_SERVER['REQUEST_URI'];
        $query = substr($uri, strrpos($uri, '?'));
        $link = "http://example.com/".$query.$utmcolor.$utmtext.$utmimg;

    ?>
    <style type="text/css">
    body {
        background-color: #f0f0f2;
        margin: 0;
        padding: 0;
        font-family: sans-serif;        
    }
    h1 {
        text-align: center;
    }
    .button {
        background-color: <?=$color?>;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }
    p {
        text-align: center;
    }
    div {
        width: 600px;
        margin: 5em auto;
        padding: 50px;
        background-color: #fff;
        border-radius: 1em;
    }  
    @media (max-width: 600px) {
        body {
            background-color: #fff;
        }
        div {
            width: auto;
            margin: 0 auto;
            border-radius: 0;
            padding: 1em;
        }
    }
    </style>    
</head>
<body>
<div>
    <h1><?=$text?></h1>
    <p><img src="img/<?=$img?>" width="100%"></p>
    <p><a href="<?=$link?>" class="button">Перейти ></a></p>
</div>
</body>
</html>