<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style1.css">
        <title>Document</title>
    </head>
    <body>
        <form action="index1.php" method="post">
            <label for="firstname">Firstname : </label>
            <input type="text" id="firstname" name="firstname"><br>
            <label for="lastname">Lastname : </label>
            <input type="text" id="lastname" name="lastname"><br>
            <input type="submit" value="Submit">    
        </form>
    </body>
</html>
<h2>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstname = htmlspecialchars($_POST['firstname']);
            $lastname = htmlspecialchars($_POST['lastname']);
            echo "Name : " . $firstname . "<br>" . "Lastname : " . $lastname;
        }
    ?>
</h2>
<h2>
   <?php
        if ($firstname == "George" && $lastname == "Alarcon") {
            echo "<br> Pogi";
        }
        else if($firstname == "Maria" && $lastname == "Clara"){
            echo "<br> Maganda";
        }
        else {
            echo "<br> Walang Pogi or Maganda";
        }
    ?>     
</h2>
