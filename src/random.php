<html>
    <head>
        <title>Demo Website - Login</title>
    </head>
    <body>
            <?php
            $random = rand(0, 4);
            if ($random == 0) {
                echo "Have a good day!<br>" . time();;
            }
            elseif ($random == 1)
            {
                echo "Have a good week!<br>" . time();
            }
            elseif ($random == 2)
            {
                echo "Have a good afternoon!<br>" . time();
            }
            elseif ($random == 3)
            {
                echo "Have a good night!<br>" . time();
            }
            elseif ($random == 4)
            {
                echo "Have a good morning!<br>" . time();
            }
            ?>
    </body>
</html>