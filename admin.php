<?php
    session_start();
    require ('library.php');

    redirection_login();
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Admin Panel - <?php echo $_SESSION['email'] ?></h1>
            <a href="logout.php">Logout</a>
        </div>
    </div>
</div>