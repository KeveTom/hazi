<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Adj meg egy számot. Ha pozitív és egész, kiírom, ha nem az, akkor....</h3>
        <form method="post" action="">
            <input type="text" id="szam" name="szam" value="" />
            <input type="submit" id="elkuld" name="elkuld" value="Küldés"/>
        </form>
    </body>
</html>
<?php
if (isset($_POST['elkuld']) && (!empty($_POST['szam']))) {

    if (($_POST['szam'] > 0) && (round($_POST['szam']) == $_POST['szam'])) {

        echo "<h4>Gratulálok! Az általad beírt szám <b><mark>".$_POST['szam']."</mark></b> pozitív és egész! <br />
         A matematikai Nobel díjat a sarokban tudod átvenni.</h4><br />
         <a href=\"index.php\">Főoldal</a>";
    } else {
        ?>
        <script type="text/javascript">
            var uzenet = confirm("Mi a fasz folyik itt patakokban??\nTe nem ismered a pozitív, egész számokat!\n Mész vissza a főoldalra szarfasz!");
            if (uzenet === true) {
                setTimeout(function () {
                    document.location.href = "index.php";
                }, 0);
            } else {
                setTimeout(function () {
                    document.location.href = "index.php";
                }, 0);
            }
        </script>
        <?php
    }
}


