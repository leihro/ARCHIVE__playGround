<?php showPost(); ?>

<?php 
    function showPost(){
        echo "<table>";
            if($_POST){
                foreach ($_POST as $key => $value) {
                    echo "<tr>";   
                    echo "<td>";
                    echo $key;
                    echo "</td>";
                    echo "<td>";
                    echo $value;
                    echo "</td>";  
                    echo "</tr>";
                }
            } 
        echo "</table>";
    }
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>test of HTML5</title>
</head>
<body>
    <form action = "quick_test.php" name = "myForm" method = "POST">  
        <input type = "color" name = "favcolor">
        <br>
        <input type = "date" name = "today">
        <br>
        <input type = "datetime-local" name = "today">
        <br>
        <input type = "email" name = "email">
        <br>
        <input type = "url" name = "url">
        <br>
        <input type = "number" name = "number" min = "1" max = "5">
        <br>
        <input type = "range" name = "range" min = "1" max = "10" range = "2">
        <br>
        <input type = "search" name = "google">
        <br>
        <input type = "time" name = "time">
        <br>
        <input type = "tel" name = "telefon">
        <br>

        <output name = "output"/>

        <input type = "submit" name= "submit" value = "submit">
        <br>
    </form> 
</body>
</html>