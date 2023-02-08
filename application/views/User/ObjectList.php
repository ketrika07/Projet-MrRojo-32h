<?php
$objetId = 0;
$link = "";

?>
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Featured
            Products</span></h2>
    <div class="row px-xl-5">

        <?php
        if (!empty($data)) {
            foreach ($data as $objet) {
                if (isset($_GET['idCible'])) {
                    $objetId = $objet['idObjet'];
                    $link = "?objetPropose=" . $objetId . "&objetCible=" . $_GET['idCible'];
                } ?>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="<?= site_url() . $objet['lien_photo'] ?>"
                                alt="<?= $objet['nomObjet'] ?>">
                            <div class="product-action">

                                <a class="btn btn-outline-dark btn-square"
                                    href="<?= site_url("user/other_objet_page_with_min_max") ?>?prix=<?= $objet['prix'] ?>&diff=10">+-10</i>
                                </a>

                                <a class="btn btn-outline-dark btn-square"
                                    href="<?= site_url("user/other_objet_page_with_min_max") . $link ?>">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>

                                <a class="btn btn-outline-dark btn-square"
                                    href="<?= site_url("user/other_objet_page_with_min_max") ?>?prix=<?= $objet['prix'] ?>&diff=20">+-20
                                    <i class="fa fa-sync-alt"></i>
                                </a>

                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="">
                                <?= $objet['nomObjet'] ?>
                            </a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>
                                    <?= $objet['prix'] ?>Ar
                                </h5>
                                <h6 class="text-muted ml-2"><del>
                                        <?= $objet['prix'] ?> Ar
                                    </del></h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>

            <?php }
        } ?>

    </div>
</div>