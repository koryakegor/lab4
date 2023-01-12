<?php

    $xml = simplexml_load_file("src/data/users.xml") or die("Error: Cannot create object");
?>

<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel = "stylesheet" href = "src/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">

    <title>Лаба 4</title>

</head>

<body>

    <div>
        <?php

        foreach ($xml->user as $user) 
        {
        ?>
            
            <div class = "island" id = "account">

                <div class= "info">
                    <span class="account_name"> <?= $user->name ?></span>
                    <span class="account_id"> <?= $user->tag ?></span>
                </div>

                <div class = "buttons">
                    <a id = "button" href="user.php?id=<?= $user['id']?>">выбрать</a>
                    <a id = "button" href="update.php?id=<?= $user['id']?>">изменить</a>
                    <a id = "button" href="delete.php?id=<?= $user['id']?>">удалить</a>
                </div>

            </div>

        <?php
        }

        ?>
       
    </div>

    <div id = "create">
        <a id = "button" href="create.php">создать новый аккаунт</a>
    </div>

</body>

</html>