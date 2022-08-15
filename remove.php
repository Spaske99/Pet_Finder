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
            <img src="img/remove.jpg" height="230px">
            <a href="index.php"><img src="img/icon.png" height="60px" title="Searc for pet"></a>
            <a href="insert.php"><img src="img/add.jpg" height="55px" title="Add new pet"></a>
        </div> 
        <?php
            require('inc/connect.php');
            $query = "SELECT * FROM pets";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <div id="result">
                        <a href="inc/removeContact.php?id=<?php echo $row['id'] ?>" >
                            <div class="removeImg">
                                <img src="img/removePet.png" height="65px" title="Pres to Delete">
                            </div> 
                        </a>
                        <p>Specie: <?php echo $row['specie']; ?></p> 
                        <p>Brand: <?php echo $row['brand']; ?></p>
                        <p>Age: <?php echo $row['age']; ?></p>
                        <p>Phone: <?php echo $row['tel']; ?></p>
                    </div>
                    <?php
                }
            }else{
                echo "No cotacts!";
            }
        ?>
    </div>   
</body>
</html>