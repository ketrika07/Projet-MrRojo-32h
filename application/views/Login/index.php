<!DOCTYPE html>
<html class="text-center" lang="en" style="height: 797px;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Album</title>
    <link rel="icon" type="image/png" sizes="512x512" href="assets/img/album-photo.png">
    <link rel="icon" type="image/png" sizes="512x512" href="assets/img/album-photo.png">
    <link rel="icon" type="image/png" sizes="512x512" href="assets/img/album-photo.png">
    <link rel="icon" type="image/png" sizes="512x512" href="assets/img/album-photo.png">
    <link rel="icon" type="image/png" sizes="512x512" href="assets/img/album-photo.png">
    <link rel="stylesheet" href="<?= site_url("assets") ?>">
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

<body id="body-login" style="background: linear-gradient(rgb(6,23,31), rgb(28,74,92));">
    <section class="register-photo" style="background: linear-gradient(rgb(6,24,32), rgb(23,62,77));">
        <div data-aos="fade-up" data-aos-duration="850" data-aos-delay="150" class="form-container"
            style="border-radius: -36px;">
            <div id="img_login" class="image-holder"
                style="height: 590px;border-radius: -16;border-top-left-radius: 30px;border-bottom-left-radius: 0;width: 436.667px;">
            </div>

            <form method="POST" action="<?= site_url("connexion/logIn") ?>"
                style="border-radius: -10px;border-top-right-radius: 30px;border-bottom-right-radius: 0;">
                <h2 class="text-center">
                    <strong>LOGIN</strong>
                </h2>
                <div class="mb-3">
                    <input class="form-control" type="email" name="email" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <input class="form-control" type="password" name="password" placeholder="Password" required>
                </div>

                <div class="mb-3"></div>
                <div class="mb-3">
                    <button class="btn btn-primary d-block w-100" type="submit" name="log"
                        style="background: rgb(77,110,151);">Enter</button>
                </div>
                <a class="already" href="<?= site_url("connexion/index2/") ?>"
                    style="font-weight: bold;color: rgb(26,71,94);margin-bottom: 11px;">Inscription</a>
                <a class="already" href="mdpForget.php" style="font-weight: bold;color: rgb(26,71,94);">Mot de passe
                    oublier</a>
            </form>

        </div>
    </section>
    <script src="<?= site_url("assets") ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= site_url("assets") ?>/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>