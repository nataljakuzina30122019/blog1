<?php header("Content-Type: text/html; charset=utf-8"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<html>
    <head>
        <title><?php echo $pageTitle; ?></title>
    </head>
    <bodi>
        <ul>
            <php foreach ($array as $item) { ?>
                 <li><?php echo $item; ?></li>
                <php } ?>
        </ul>
    </bodi>
</html>



