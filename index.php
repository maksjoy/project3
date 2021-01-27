<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>Domain registration</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <p class="h1" style="margin-top: 100px">Форма регистрации сайта</p>
                    <form method="post" action="backend_homework.php">
                        <div class="form-group">
                            <label for="emailInput">Имейл: </label>
                            <input type="email" class="form-control" id="emailInput" name="email">
                        </div>
                        <div class="form-group">
                            <label for="domainInput">Домен</label>
                            <input type="text" class="form-control" id="domainInput" name="domain">
                        </div>
                        <div class="form-group">
                            <label for="fioInput">ФИО: </label>
                            <input type="text" class="form-control" id="fioInput" name="fio">
                        </div>
                        <input type="submit" class="btn btn-primary" value="зарегистрировать" name="send">
                    </form>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </body>
</html>