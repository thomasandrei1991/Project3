<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
        echo "Name : " . $firstname . "<br>" . "Lastname : " . $lastname;
    }
?>