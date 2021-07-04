<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <style>
        :root {
            --input-padding-x: 1.5rem;
            --input-padding-y: .75rem;
        }

        body {
            background: #FEBB0F;

        }

        .card-signin {
            border: 0;
            background: #FFFFFF;
            border-radius: 5px;
            margin: 100px;
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
            height: 640px;
            width: 550px;
            margin-left: 330px;
            padding-top: 10px;

        }

        .card-signin .card-title {
            margin-bottom: 2rem;
            /* font-weight: 300; */
            font-size: 2rem;
            font-family: arial;
            color: #FEBB0F;
            margin-top: -70px;
            font-weight: bold;

        }

        .card-signin .card-subtitle {
            margin-bottom: 10px;
            font-weight: bold;
            font-size: 1.5rem;
            font-family: arial;
            color: #FEBB0F;
            margin-top: 25px;


        }

        .button {
            border: 0;
            background: #FEBB0F;
            border-radius: 5px;
            margin: 100px;
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
            height: 48px;
            width: 485px;
            margin-left: 2px;
            margin-top: 20px;
            color: #FFFFFF;
            transition-duration: 0.4s;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        }

        .button:hover {
            background-color: #616060;
            color: white;
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }


        .text-forgot {
            margin-bottom: 10px;
            font-weight: bold;
            font-size: 1.5rem;
            font-family: arial;
            color: #FEBB0F;
            margin-top: 25px;
            margin-left: 345px;
        }

        .card-signin .card-body {
            padding: 40px;


        }

        .form-signin {
            width: 100%;


        }

        .form-signin .btn {
            font-size: 80%;
            border-radius: 6px;
            letter-spacing: .1rem;
            font-weight: bold;
            padding: 1rem;
            transition: all 0.2s;
            margin-top: 30px;
        }

        .form-label-group {
            position: relative;
            margin-bottom: -10px;
        }

        .form-label-group input {
            height: auto;
            border-radius: 6px;
            width: 470px;
        }

        .form-label-group>input,
        .form-label-group>label {
            padding: var(--input-padding-y) var(--input-padding-x);
        }

        .form-label-group>label {
            position: absolute;
            top: 0;
            left: 0;
            display: block;
            width: 100%;
            margin-bottom: 0;
            /* Override default `<label>` margin */
            line-height: 1.5;
            color: #777;
            border: 1px solid transparent;
            border-radius: 12px;
            transition: all .1s ease-in-out;

        }


        /* .form-label-group input:not(:placeholder-shown) {
            padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
            padding-bottom: calc(var(--input-padding-y) / 3);
        } */

        .form-label-group input:not(:placeholder-shown)~label {
            padding-top: calc(var(--input-padding-y) / 3);
            padding-bottom: calc(var(--input-padding-y) / 3);
            font-size: 12px;
            color: #777;
        }

        /* Fallback for Edge
        -------------------------------------------------- */

        @supports (-ms-ime-align: auto) {
            .form-label-group>label {
                display: none;
            }

            .form-label-group input::-ms-input-placeholder {
                color: #FEBB0F;
            }
        }

        /* Fallback for IE
        -------------------------------------------------- */

        @media all and (-ms-high-contrast: none),
        (-ms-high-contrast: active) {
            .form-label-group>label {
                display: none;
            }

            .form-label-group input:-ms-input-placeholder {
                color: #777;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <img src="<?php echo base_url(); ?>assets/image/logo.png" width="100" />
                    <div class="card-body">
                        <center>
                            <h5 class="card-title ">REGISTER</h5>
                        </center>
                        <h1 class="card-subtitle ">Buat Akun Baru Anda</h1>
                        <?php
                        $errors = $this->session->flashdata('errors');
                        if (!empty($errors)) {
                        ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-danger ">
                                        <?php foreach ($errors as $key => $error) { ?>
                                            <?php echo "$error<br>"; ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <form class="form-signin" action="<?php echo base_url('index.php/auth/proses_login'); ?>" method="post">
                            <h1 class="card-subtitle ">Nama</h1>
                            <div class="form-label-group">
                                <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Jack Daniel" required>
                            </div>
                            <h1 class="card-subtitle ">Alamat</h1>
                            <div class="form-label-group">
                                <input type="text" name="username" id="inputAlamat" class="form-control" placeholder="St. Lousvielle" required>
                            </div>
                            <h1 class="card-subtitle ">Alamat Email</h1>
                            <div class="form-label-group">
                                <input type="email" name="username" id="inputEmail" class="form-control" placeholder="jacky99@daniel.com" required>
                            </div>
                            <h1 class="card-subtitle ">Telephone</h1>
                            <div class="form-label-group">
                                <input type="tel" name="username" id="inputTelephone" class="form-control" placeholder="+1234567890" required>
                            </div>
                            <h1 class="card-subtitle r">Kata Sandi</h1>
                            <div class="form-label-group">
                                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                            </div>

                            <button class="button btn btn-lg btn-primary btn-block text-uppercase" type="submit">REGISTER</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>

</html>