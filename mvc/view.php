<!--MVC. Guest book view -->
<!--View is responsible for the appearance of the page -->
<html>
    <head>
        <title>Guset book</title>
    </head>
    <body>
        <h1>Add your message:</h1>
        <form action="controller.php" method="POST">
            Your name: <input type="text" name="new[name]"><br/>
            Comment: <br/>
            <textarea name="new[text]" cols="60" rows="5"></textarea><br/>
            <input type="submit" name="doAdd" value="Add!">
        </form>
        <h2>Guest book:</h2>
        <?php foreach($book as $id => $e) { ?>
            Name: <?=$e['name']?><br/>
            Comment:<br/><?=n12br($e['text'])?><hr/>
        <?php } ?>
    </body>
</html>