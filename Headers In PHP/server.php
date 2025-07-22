<?php
function e($value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$ip = $_SERVER['REMOTE_ADDR'];

var_dump($ip);
var_dump($_SERVER);

?>

<form method="POST" action="<?php echo e($_SERVER['PHP_SELF']);?>">
    <label>
        <input type="text" name="input">
    </label>
    <input type="submit" name="submit" value="submit">
</form>
