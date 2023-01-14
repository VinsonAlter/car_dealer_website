<?php
    require_once __DIR__ . '/../config.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Chery CMS Login Page</title>
        <meta name="viewport"
            content="width=device-width, initial-scale=1, 
                        minimum-scale=1, maximum-scale=1"/>
                        <link 
            rel="stylesheet"
            type="text/css"
            href="../assets/css/style.css"
        />
        <!-- Bootstrap 5 CSS Plugins -->
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
            crossorigin="anonymous"
        />
        <!-- Favicon Icon -->
        <link rel="shortcut icon" href="<?=BASE_URL;?>favicon.ico">
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="<?= BASE_URL; ?>favicon-32x32.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="<?= BASE_URL; ?>favicon-16x16.png"
        />
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
        
        <!-- Font Awesome Version 6 Plugins -->
        <link rel="stylesheet" 
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

        <style>
            .bg-section {
                background-blend-mode: darken;
                background-color: rgba(32,32,32, 0.5);
            }
        </style>
    
    </head>
    <body>

    <div class="bg-section h-full col d-flex justify-content-center">
        <div class="container d-flex centered">
            <div class="card border-none" style="width:25rem">
                <img class="card-img-top" src="<?=BASE_URL?>assets/img/Tiggo8Pro.webp">
                <div class="card-body">
                    <div class="relative d-flex centered">
                        <h3 class="models-font">Silahkan Login</h3>
                    </div>
                    <div class="relative">
                        <form method="post">
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" 
                                    placeholder="Please enter your username">
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" class="form-control"
                                    placeholder="Please enter your password">
                            </div>
                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-block btn-success">
                                    Submit
                                </button>
                            </div>
                            <div class="d-flex form-group right">
                                <a class="text-black models-font fs12" href="<?=BASE_URL?>">Back to Home</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>
</html>