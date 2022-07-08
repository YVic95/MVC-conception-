<!--Component conception-->
<html>
    <head>
        <title>
            Guest Book
        </title>
    </head>
    <body>
        <!--New message block-->
        <?php //require_once "componentGbookAdd.php" ?>
        <h1>Add your message:</h1>
        <form action="<?=$_SERVER['SCRIPT_NAME']?>" method="POST">
            Your name: <input type="text" name="new[name]"><br/>
            Your message:<br/>
            <textarea name="new[message]" cols="60" rows="5"></textarea>
            <input type="submit" name="doAdd" value="Add!">
        </form>

        <!--Guest book block-->
        <?php //require_once "componentGbookShow.php" ?>
        <h1>Guest book messages:</h1>
        <?php foreach($data as $id => $e) { ?>
            Name: <?=$e['name']?><br/>
            Comment:<br/><?=nl2br($e['text'])?><hr/>
        <?php } ?>

        <!--News block-->
        <h1>Last news:</h1>
        <?php require_once "componentNewsShow.php" ?>
        <ul>
            <?php foreach($data as $key => $value) { ?>
                <li><?= $key + 1 ?>news: <?= $value ?></li>
            <?php } ?>
        </ul>
    </body>
</html>