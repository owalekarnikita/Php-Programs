<?php
    if($_POST)
    {
        $fact=1;
        $num=$_POST['number'];
        for($i=0;$i<=$num;$i++)
        {
            $fact=$fact*$i;
        }
        echo "Factoril of ".$num." is : ".$fact;
    }
?>
<html>
    <head>
        <title>Factorial Program</title>
    </head>
    <body>
        <form method="post">
            <p>Enter the number : </p>
            <p><input type="number" name="number"></p>
            <p><input type="submit" value="submit"></p>
        </form>
    </body>
</html>