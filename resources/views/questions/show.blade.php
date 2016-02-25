<!doctype html>
<html>
	<head>
        <title><?php echo $object->title; ?></title>
    </head>
        <p><?php echo $object->description; ?></p>
        <pre>
            <?php echo $object->code; ?>
        </pre>
        <p>Question date: <?php echo $object->created_at; ?> </p>
    <body>
    </body>
</html>