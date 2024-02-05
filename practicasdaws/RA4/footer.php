<hr>
<?php
if(isset($_COOKIE[0])){
    echo "<p>" . $_COOKIE[0] . "</p>";
}
else {
    echo "";
}
if(isset($_COOKIE[1])){
    echo "<p>" . $_COOKIE[1] . "</p>";
}
else {
    echo "";
}
if(isset($_COOKIE[2])){
    echo "<p>" . $_COOKIE[2] . "</p>";
}
else {
    echo "";
}
?>