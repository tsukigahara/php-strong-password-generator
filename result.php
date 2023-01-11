<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/9344ff345c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css
    ">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js" defer></script>
    <!-- PHP -->
    <?php

    // start session
    session_start();

    // read session array value
    $password = $_SESSION['password'];
    ?>
</head>

<body>

    <div class="container col-sm-8 rounded-4 p-3 bg-secondary bg-opacity-10 my-5">
        <h2>Your password is
            <span class="badge bg-light">
                <code>
                    <?php echo $password ?>
                </code>
            </span>
        </h2>
        <!-- go back button -->
        <button class="btn btn-primary" onclick="history.go(-1);">Go back</button>
    </div>

</body>

</html>