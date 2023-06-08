<?php
    session_start();

    require_once("./config.php");
    require_once("./functions.php");

    if (is_user_authenticated()) {
        redirect('admin.php');
        die();
    }

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = $_POST['password']; //TODO: validate password

        // compare with data store
        if (authenticate($email, $password)) {
            $_SESSION['email'] = $email;
            redirect('admin.php');
            die();
        } else {
            $status = "Invalid email";
        }


        if (!$email) {
            $status = "Please enter a valid email address";
        }
    }
?>
<?php echo file_get_contents("./html/header.html"); ?>
<?php echo file_get_contents("./html/test-body.html"); ?>
<?php echo file_get_contents("./html/footer.html"); ?>