<?php
function output($array){
    echo "Array: <br>";
    foreach($array as $key=>$value){
        echo $key . ": " . $value . "<br>";
    }
}

function authenticate($email, $password) {
    return  $email == USER_NAME && $password == PASSWORD;
}

function redirect($url) {
    header("Location: $url");
}

function is_user_authenticated() {
    return isset($_SESSION['email']);
}

function ensure_user_is_authenticated() {
    if(is_user_authenticated()) {
        redirect("index.php");
    }
}
?>