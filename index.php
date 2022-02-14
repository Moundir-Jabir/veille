<?php
    session_start();
    $status = "";
?>

<?php
    require('config.php');
    require('library.php');

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $email = htmlspecialchars($_POST['email']) ?? "";
        $password = htmlspecialchars($_POST['password']) ?? "";
        if(authenticate($email,$password)){
            $_SESSION['email'] = $email;
            header("Location: admin.php"); // redirection
            die();
        }else{
            $status = "vérifier vos infos !!";
        }
    }

    redirection_admin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <?php if($status != ""){ ?>
                    <div class="alert alert-danger">
                        <?php echo $status ?>
                    </div>
                <?php } ?>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="email">email</label>
                        <input required name="email" id="email" type="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input required name="password" id="password" type="password" class="form-control">
                    </div>
                    <input type="submit" value="Login" class="btn btn-danger btn-block">
                </form>
            </div>
        </div>
    </div>
</body>
</html>