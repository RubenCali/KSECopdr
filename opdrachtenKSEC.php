<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <title>KSEC OPDR | ruben</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Ruben cali">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <form name="inlggen" action="" method="POST">
        <input type="text" name="mail" value="iemand@mail.com">
        <input type="password" name="ww" value="wachtwoord">
        <input type="submit" name="verstuurd" value=" log in ">
    </form>
    <?php
    if (isset($_POST['verstuurd'])) {
        echo "-----------Backend----------";
        $email = htmlspecialchars($_POST['mail']);
        $password = htmlspecialchars($_POST['ww']);
        echo "<br>e-mail: $mail";
        echo "<br>wachtwoord: $ww";
    }
    ?>

</body>
</html>