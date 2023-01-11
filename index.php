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
    <?php
    // require helper.php
    require_once __DIR__ . "/libs/helper.php";

    // start session
    session_start();

    // redirect when submit 
    if ($length != false) {

        // add generated password to session array
        $_SESSION['password'] = passwordGen($length, $isAlpha, $isNum, $isSymb);

        // redirect to result.php
        header('Location: ./result.php');
    }
    ?>
</head>

<body>
    <div class="container col-sm-8 rounded-4 p-3 bg-secondary bg-opacity-10 my-5">
        <h1>Strong Password Generator</h1>
        <form>
            <div class="mb-3">
                <label for="" class="form-label">Length of password</label>
                <small id="helpId" class="form-text text-muted">(default is 8)</small>
                <input type="number" class="form-control" aria-describedby="helpId" placeholder="example: 8" name="length" value="8">
                <small id="helpId" class="form-text text-muted">Only digits</small>
            </div>
            <fieldset>
                <div class="mb-1 form-check">
                    <input type="checkbox" class="form-check-input" name="alphabet" checked>
                    <label class="form-check-label" for="exampleCheck1">include alphabet</label>
                </div>
                <div class="mb-1 form-check">
                    <input type="checkbox" class="form-check-input" name="number">
                    <label class="form-check-label" for="exampleCheck1">include numbers</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="symbol">
                    <label class="form-check-label" for="exampleCheck1">include symbols</label>
                </div>
            </fieldset>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>
</body>

</html>