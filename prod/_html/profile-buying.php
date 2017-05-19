<!DOCTYPE html>
<html lang="ru">
<?php include 'base/head.php';?>
<body>

    <div class="page page-profile">
        <div class="page-inner">
            <?php include 'base/header.php';?>

            <div class="page-body">
                <div class="page-body__inner">

                <div class="wrapper">
                    <h1 class="h2">I'm buying</h1>
                    <div class="profile-menu">
                        <div class="profile-menu__nav">
                            <ul class="profile-nav">
                                <li class="profile-nav__item">
                                    <a class="profile-nav__link" href="#!">My profile</a>
                                </li>
                                <li class="profile-nav__item">
                                    <a class="profile-nav__link" href="#!">Edit profile</a>
                                </li>
                                <li class="profile-nav__item">
                                    <a class="profile-nav__link" href="#!">My items</a>
                                </li>
                                <li class="profile-nav__item">
                                    <a class="profile-nav__link _active" href="#!">I'm buying</a>
                                </li>
                                <li class="profile-nav__item">
                                    <a class="profile-nav__link" href="#!">Favorites</a>
                                </li>
                                <li class="profile-nav__item">
                                    <a class="profile-nav__link" href="#!">Messages</a>
                                </li>
                                <li class="profile-nav__item">
                                    <a class="profile-nav__link" href="#!">Setting</a>
                                </li>
                                <li class="profile-nav__item">
                                    <a class="profile-nav__link" href="#!">Billing</a>
                                </li>
                            </ul>
                        </div>
                        <div class="profile-menu__exit">
                            <a href="#!" class="btn btn-icon btn-icon--logout">
                                <span class="btn-icon__ico iconic iconic--logout"></span>
                                <span class="btn-icon__text">Log out</span>
                            </a>
                        </div>
                    </div>
                </div>

                <section class="main-catalog-wr">
                    <div class="wrapper">
                        <div class="main-catalog">
                            <div class="main-catalog__content">
                                <div class="catalog-wr">
                                    <div class="catalog">
                                        <div class="catalog__item">
                                            <div class="product product--edit">
                                                <div class="product__header">
                                                    <a href="#!" class="product__header-del btn-del iconic iconic--add"></a>
                                                    <div class="product__header-label">
                                                        30 min ago <span class="label label--red">used</span>
                                                    </div>
                                                    <div class="product-status">
                                                        <div class="product-status__text">Item status:</div>
                                                        <div class="product-status__select">
                                                            <select class="select select--status js-select">
                                                                <option value="1">Sold out</option>
                                                                <option value="2">Canceled</option>
                                                                <option value="3">Removed</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="product__header-brand">Puma</div>
                                                    <div class="product__header-title">
                                                        <a href="#!" class="link link--gray-d2">Jackets children 8 years</a>
                                                    </div>
                                                    <div class="product__header-info">Size: 24 Age: 7</div>
                                                </div>
                                                <a href="#!" class="product__body">
                                                    <div class="product__body-img">
                                                        <img src="../images/userfiles/product-img.jpg" alt="">
                                                    </div>
                                                    <div class="product__body-price"><b>22</b> €</div>
                                                </a>
                                                <div class="product__footer product__footer--cols">
                                                    <a href="#!" class="link link--green"><b>Item bought</b></a>
                                                    <a href="#!" class="btn btn--red btn--xs">Add opinion</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                </div>
            </div><!-- /page-body -->

            <?php include 'base/footer.php';?>
        </div><!-- /page-inner -->

        <!-- popups -->
        <?php include 'base/popups.php';?>

    </div><!-- /page -->

    <?php include 'base/scripts.php'; ?>
</body>
</html>
