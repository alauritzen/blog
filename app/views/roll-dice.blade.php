<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <a href="{{{ action('HomeController@showRollDice',1) }}}">Guess 1</a>
    <a href="{{{ action('HomeController@showRollDice',2) }}}">Guess 2</a>
    <a href="{{{ action('HomeController@showRollDice',3) }}}">Guess 3</a>
    <a href="{{{ action('HomeController@showRollDice',4) }}}">Guess 4</a>
    <a href="{{{ action('HomeController@showRollDice',5) }}}">Guess 5</a>
    <a href="{{{ action('HomeController@showRollDice',6) }}}">Guess 6</a>

    <p>Your guess is <?= $guess ?>!</p>
    <p>The number is <?= $number ?>!</p>
    <p><?= $msg ?></p>

</body>
</html>