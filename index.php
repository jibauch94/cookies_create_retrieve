<?php
/**
 * Created by PhpStorm.
 * User: jibba_000
 * Date: 04-10-2017
 * Time: 11:00
 */
?>
<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "Igor Vetokele";
//setCookie function must appear before the <html> tag
//Note: The value of the cookie is automatically URLencoded when sending the cookie,
//and automatically decoded when received (to prevent URLencoding, use setrawcookie() instead).
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>

</body>
</html>

<?php
// set the expiration date to one hour ago
setcookie("user", "Igor Vetokele", time() - 3600);
?>
<html>
<body>

<?php
echo "Cookie 'user' is deleted.";
?>

</body>
</html>

