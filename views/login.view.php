<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= assets("/css/style.css")?>">
    <link rel="stylesheet" href="<?= assets("/css/bootstrap.min.css")?>">
</head>
<body>
    <main>
    <section id="login">
        <div class="container">
            <div class="row align-items-center h-100">
                <div class="col-auto m-auto p-2 pl-5 pr-5 bg-light rounded shadow">
                    <form action="<?= url('/login') ?>" method="post">
                    <div class="form-group">
                        <h3>Login:</h3>
                    </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input required type="email" name="email" value="email@gmail.com" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input required type="password" name="password" value="1234" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </main>
    <script src="<?= assets("js/bootstrap.min.js")?>"></script>
    <script src="<?= assets("js/main.js")?>"></script>
</body>
</html>