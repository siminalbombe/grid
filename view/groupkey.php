<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>GRID-Group Key</title>
    <link rel="stylesheet" href="../bootstrap_min.css">
</head>

<body>
<h2>Grid-Group Key</h2>
<div align="center">
    <form action="persons.php" method="get" >
        Please enter the Group-Key:<br>
        <input type="text" name="gkey"<br>
        <input type="submit" value="Send Group Key" class="button""><br>

        <?php
        include 'C:\Users\Simon.hofmann\PhpstormProjects\untitled\php\checkForGroup.php';
        ?>

    </form>
</div>
</body>
</html>