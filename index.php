<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Find Your Pet</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div id="wrap">
        <div id="search">
            <img src="img/icon.png" alt="" height="260px">
            <a href="insert.php"><img src="img/add.jpg" height="50px" title="Add new pet"></a>
            <a href="remove.php"><img src="img/remove.jpg" height="50px" title="Remove pet "></a>
            <form acttion="#" method="GET">
                <input type="text" placeholder="Enter a Spece or Brand" name="enter">
                <input type="submit" name="search"><br>
            </form>
        </div>
        <?php
            include("inc/getResults.php");
        ?>
    </div> 
</body>
</html>