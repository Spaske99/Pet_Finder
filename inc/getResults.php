<?php

require("connect.php");

if (isset($_GET['enter'])){
    if (!empty($_GET['enter'])){
        $enter = trim($_GET['enter']);
        $enter = mysqli_real_escape_string($conn, $enter);
        $query = "SELECT * FROM pets WHERE specie LIKE '%{$enter}%' OR brand LIKE '%{$enter}%'";     
        $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <div id="result">
                            <img src="img/slicica.png" height="85px">
                            <p>Specie: <?php echo $row['specie']; ?></p> 
                            <p>Brand: <?php echo $row['brand']; ?></p>
                            <p>Age: <?php echo $row['age']; ?></p>
                            <p>Phone: <?php echo $row['tel']; ?></p>
                        </div>
                    <?php
                }
                ?>
                <div id="message">
                    <?php
                        echo "Number of results: " . mysqli_num_rows($result);
                    ?>
                </div>
                <?php
            }else{
                ?>
                <div id="message">
                    <?php
                        echo "No results";
                    ?>
                </div>
                <?php
            }
    }else{
        ?>
        <div id="message">
            <?php
                echo "The field is empty";
            ?>
        </div>
        <?php
    }
}

?>