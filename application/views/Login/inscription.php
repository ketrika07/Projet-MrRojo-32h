<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Album</title>
    <link rel="icon" type="image/png" sizes="512x512" href="<?= site_url("assets") ?>/img/album-photo.png">
    <link rel="icon" type="image/png" sizes="512x512" href="<?= site_url("assets") ?>/img/album-photo.png">
    <link rel="icon" type="image/png" sizes="512x512" href="<?= site_url("assets") ?>/img/album-photo.png">
    <link rel="icon" type="image/png" sizes="512x512" href="<?= site_url("assets") ?>/img/album-photo.png">
    <link rel="icon" type="image/png" sizes="512x512" href="<?= site_url("assets") ?>/img/album-photo.png">
    <link rel="stylesheet" href="<?= site_url("assets") ?>/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=GFS+Didot&amp;subset=greek&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&amp;display=swap">
    <link rel="stylesheet" href="<?= site_url("assets") ?>/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?= site_url("assets") ?>/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?= site_url("assets") ?>/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="<?= site_url("assets") ?>/css/card-3-column-animation-shadows-images.css">
    <link rel="stylesheet" href="<?= site_url("assets") ?>/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="<?= site_url("assets") ?>/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="<?= site_url("assets") ?>/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="<?= site_url("assets") ?>/css/styles.css">
</head>

<body id="body_inscription">
    <section class="register-photo" style="background: linear-gradient(rgb(31,14,42), rgb(46,18,27));">
        <div data-aos="fade-up" data-aos-duration="850" data-aos-delay="150" class="form-container"
            style="border-radius: -36px;">
            <div id="img_inscription" class="image-holder"
                style="height: 590px;border-radius: -16;border-top-left-radius: 30px;border-bottom-left-radius: 0;width: 436.667px;">
            </div>
            <form method="POST" action="<?= site_url("connexion/signUp") ?>"
                style="border-radius: -10px;border-top-right-radius: 30px;border-bottom-right-radius: 0;">
                <h2 class="text-center">
                    <strong>INSCRIPTION</strong>
                </h2>

                <div class="mb-3">
                    <input class="form-control" type="text" name="Nom" placeholder="Nom" required>
                </div>
                <div class="mb-3">
                    <input class="form-control" type="email" name="email" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <input class="form-control" type="password" name="password" placeholder="Password" required>
                </div>
                <div class="mb-3">
                    <input class="form-control" type="password" name="password_repeat" placeholder="Password (repeat)"
                        required>
                </div>

                <div class="mb-3"></div>
                <div class="mb-3">
                    <button class="btn btn-primary d-block w-100" type="submit" name="inscription">Sign Up</button>
                </div>
                <a class="already" href="<?= site_url("connexion/index") ?>"
                    style="color: rgb(37,81,98);font-weight: bold;">Retour</a>
            </form>

        </div>
    </section>
    <script src="<?= site_url("assets") ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= site_url("assets") ?>/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>