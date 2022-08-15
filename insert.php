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
            <img src="img/add.jpg" height="230px">
            <a href="index.php"><img src="img/icon.png" height="60px" title="Searc for pet"></a>
            <a href="remove.php"><img src="img/remove.jpg" height="55px" title="Remove pet"></a>
            <form acttion="#" method="POST">          
                <label> Specie: <br>
                <input type="text" name="specie"></label><br>
                <label> Brand: <br>
                <input type="text" name="brand"></label><br>
                <label> Age: <br>
                <input type="text" name="age"></label><br>
                <label> Phone: <br>
                <input type="text" name="tel"></label><br><br>
                <input type="submit" name="insert"></label>
                <input type="reset" name="remove"></label><br>    
            </form>
        </div>
        <?php
            if(isset($_POST["insert"])){
                if(isset($_POST["specie"]) && isset($_POST["brand"]) && isset($_POST["age"]) && isset($_POST["tel"])){
                    if(!empty($_POST["specie"] && $_POST["brand"] && $_POST["age"] && $_POST["tel"])){

                        $specie = trim($_POST["specie"]);
                        $brand = trim($_POST["brand"]);
                        $age = trim($_POST["age"]);
                        $tel = trim($_POST["tel"]);

                        require ('inc/connect.php');

                        $specie = mysqli_real_escape_string($conn, $specie);
                        $brand = mysqli_real_escape_string($conn, $brand);
                        $age = mysqli_real_escape_string($conn, $age);
                        $tel = mysqli_real_escape_string($conn, $tel);

                        $query = "INSERT INTO pets(specie, brand, age, tel) VALUES ('{$specie}','{$brand}','{$age}','{$tel}')";
                        if(mysqli_query($conn, $query) === TRUE){
                            ?>
                            <div id="message">
                                <?php
                                    echo 'New record succesfully created';
                                ?>
                            </div>
                            <?php
                        }else{
                            ?>
                            <div id="message">
                                <?php   
                                    echo 'Error!';
                                ?>
                            </div>
                            <?php
                        }
                    }else{
                        ?>
                        <div id="message">
                            <?php 
                                echo "All parameters must be sent";
                            ?>
                        </div>
                        <?php
                    }
                }else{
                    ?>
                    <div id="message">
                        <?php 
                            echo "All parameters must be sent";
                        ?>
                    </div>
                    <?php
                }
            }
        ?>
    </div>  
</body>
</html>