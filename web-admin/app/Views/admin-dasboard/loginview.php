<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <title> Login </title>
        <style>
            h3 {
                font-family: 'Gotham Rounded';
                text-align: center; 
            }
            #InputForUsername {
                border-color: #4d4d4d;
                border-radius: 10px;
                box-shadow: 2px 3px 3px grey;
            }
            #Password1 {
                border-color: #4d4d4d;
                border-radius: 10px;
                box-shadow: 2px 3px 3px grey;
            }
            #tombol {
                font-family: Gotham Rounded;
                background-color: #132985;
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <?php if(session()->getFlashdata('msg')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('msg')?></div>
            <?php endif; ?>
            <form action="/login/auth" method="POST">
                    <div class="form">
                        <div class="form-group col-lg-6 mx-auto pt-5">
                            <img src="img/brand.png" alt="logo brand">
                        </div>
                        <div class="form-group col-lg-4 mx-auto">
                            <label for="exampleInputEmail1" style="font-family: Gotham Rounded;"> Username</label>
                            <input type="username" name="username" class="form-control" id="InputForUsername" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group col-lg-4 mx-auto">
                            <label for="exampleInputPassword1" style="font-family: Gotham Rounded;">Kata Sandi</label>
                            <input type="password" name="password" class="form-control" id="Password1">
                        </div>
                        <div class="form group col-lg-14 pt-4 pb-2">
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary" id="tombol">Masuk</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>