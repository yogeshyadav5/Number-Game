<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<style>
    body {
        background-image: url('https://static01.nyt.com/images/2020/04/15/business/15Techfix-illo/15Techfix-illo-articleLarge.gif?quality=75&auto=webp&disable=upscale');
        background-position: fixed;
        background-size: cover;
        background-repeat: no-repeat;
    }

    h1 {
        color: white;
        font-family: 'Press Start 2P', 'cursive';
        font-size: 78px;
        text-align: center;
        animation: effect 2s linear infinite
    }



    h2 {
        color: white;
        font-family: 'Press Start 2P', 'cursive';
        font-size: 35px;
        text-align: center;
    }

    .form {
        margin: auto;
        width: 250px;
        /* height: 50px; */
        font-size: 18pt;
    }

    .submit {
        border: thick solid transparent;
        display: inline-block;
        position: relative;
        font-size: 0.7rem;
        cursor: pointer;
    }

    .submit:hover {
        background-color: #39FF14;
    }

    .reset {
        border: thick solid transparent;
        display: inline-block;
        position: relative;
        font-size: 0.7rem;
        cursor: pointer;
    }

    .reset:hover {
        background-color: #FF3131;
    }

    .input {
        border: thick solid transparent;
        border-radius: 5px;
        width: 200px;
        height: 30px;
    }

    a {
        width: 20%;
        height: 100px;

        padding-left: 580px;

    }
</style>

<body>
    <h1>NUMBER GAME</h1>
    <h2>GUESS THE NUMBER BETWEEN 1 to 100.</h2>
    <div class="form">
        <form action="" method="POST">

            <input  name="number" class="input"><br>
            <button type="submit" value="number" class="submit" name="submit">submit</button>
            <button type="reset" value="" class="reset" name="reset">reset</button>
        </form>
    </div>

    <?php

    $gussing_number   = rand(1, 100);
    // $number = 'number';
    

    if (isset($_POST['submit'])) {
        $number = $_POST['number'];
        if ($number < $gussing_number) {
            echo '<script language="javascript">';
            echo 'alert("Your number is too Low!")';
            echo '</script>';
           
        } elseif ($number > $gussing_number) {
            echo '<script language="javascript">';
            echo 'alert("Your number is too High!")';
            echo '</script>';
            
        } elseif ($number == $gussing_number) {
            echo '<script language="javascript">';
            echo 'alert("Congratulation !! You gusse the hidden number !!! ")';
            echo '</script>';
           
        } else {
            echo " You never set a number! <br />";
        }
    }
    ?>

   
</body>

</html>