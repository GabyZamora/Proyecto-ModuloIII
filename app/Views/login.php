<!doctype html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inicia sesión</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container">

        <div class="row justify-content-md-center">

            <div class="col-5">

                <h2>Login in</h2>        

                <?php if(session()->getFlashdata('msg')):?>

                    <div class="alert alert-warning">

                       <?= session()->getFlashdata('msg') ?>

                    </div>

                <?php endif;?>

                <form action="<?php echo base_url(); ?>/LoginController/loginAuth" method="post">

                    <div class="form-group mb-3">

                        <input type="Usuario" name="Usuario" placeholder="Usuario"  class="form-control" >

                    </div>

                    <div class="form-group mb-3">

                        <input type="PASSWORD" name="PASSWORD" placeholder="PASSWORD" class="form-control" >

                    </div>

                    <div class="d-grid">

                         <button type="submit" class="btn btn-success">Signin</button>

                    </div>     

                </form>

            </div>

        </div>

    </div>

</body>

</html>