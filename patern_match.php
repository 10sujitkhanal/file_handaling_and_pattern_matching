<html>
<body>

<?php
$str = "Apples and bananas and grapes.";
$pattern = "/and/i";
echo preg_match($pattern, $str);
?>

<?php
$str = "i am in pain and from spain in th rain";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str);
?>

<?php
$str = "sujit!";
$pattern = "/sujit/i";
echo preg_replace($pattern, "messi", $str);
?>

</body>
</html>