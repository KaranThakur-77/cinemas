<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">EDIT movies.</h1>
    <form action="edit.php" method="get">
    Id: <input type="number" name="id" hidden value="<?php echo($_GET['id']);?>"><br>
    Title:<input type="text" name="title" required value="<?php echo($_GET['title']);?>"><br><br>
    Rating:<input type="number" name="rating" required min="1" max="5" value="<?php echo($_GET['rating']);?>"><br><br>
    Description: <textarea name="description" required>
    <?php echo($_GET['desc']);?>
    </textarea><br><br>
    <button  type="submit">EDIT</button>
    </form>
</body>
</html>