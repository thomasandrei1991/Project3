<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>