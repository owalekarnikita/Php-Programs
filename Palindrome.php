<html>
    <head>
        <title>Palindrome Program</title>
    </head>
    <body>
        <div>
            <form method="post">
                <p>Enter a number : </p>
                <p><input type="number" name="number"></p>
                <p><input type="submit" value="submit"></p>
            </form>
        </div>
    </body>
</html>
<?php
    if($_POST)
    {
        $num=$_POST['number'];
        $rev=strrev($num);
        if($num==$rev)
        {
            echo $num." is Palindrome number.";
        }
        else
        {
            echo $num." is not Palindrome number.";
        }
    }
?>