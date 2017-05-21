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
                    <h1 class="h2">Favorites</h1>
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
                                    <a class="profile-nav__link" href="#!">I'm buying</a>
                                </li>
                                <li class="profile-nav__item">
                                    <a class="profile-nav__link _active" href="#!">Favorites</a>
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

                    <div class="main-catalog">
                        <div class="main-catalog__content">
                            <div class="favorite-tabs js-tabs">
                                <div class="favorite-tabs__btns">
                                    <div class="favorite-tabs__btn js-tabs-btn">
                                        <a href="#!"><span>Favorite items</span></a>
                                    </div>
                                    <div class="favorite-tabs__btn js-tabs-btn _active">
                                        <a href="#!"><span>Favorite users</span></a>
                                    </div>
                                </div>
                                <div class="favorite-tabs__tabs">
                                    <div class="favorite-tabs__tab js-tabs-tab">
                                        <div class="catalog-wr">
                                            <div class="catalog">
                                                <div class="catalog__item ">
                                                    <div class="user">
                                                        <div class="user__ava">
                                                            <img src="../images/userfiles/user-img-big.jpg" alt="">
                                                        </div>
                                                        <div class="user__info">
                                                            <div class="user__header">
                                                                <div class="user__header-name"><span>Anna Maria</span></div>
                                                                <div class="user__header-status">
                                                                    <span class="label label--red">offline</span>
                                                                    <a href="#!" class="btn-del iconic iconic--add"></a>
                                                                </div>
                                                            </div>
                                                            <div class="user__info-btn">
                                                                <a href="#!" class="btn btn--green btn--s btn--stretch">send message</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="catalog__item ">
                                                    <div class="user">
                                                        <div class="user__ava">
                                                            <img src="../images/userfiles/user-img-big.jpg" alt="">
                                                        </div>
                                                        <div class="user__info">
                                                            <div class="user__header">
                                                                <div class="user__header-name"><span>Anna Maria</span></div>
                                                                <div class="user__header-status">
                                                                    <span class="label label--red">offline</span>
                                                                    <a href="#!" class="btn-del iconic iconic--add"></a>
                                                                </div>
                                                            </div>
                                                            <div class="user__info-btn">
                                                                <a href="#!" class="btn btn--green btn--s btn--stretch">send message</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="catalog__item ">
                                                    <div class="user">
                                                        <div class="user__ava">
                                                            <img src="../images/userfiles/user-img-big.jpg" alt="">
                                                        </div>
                                                        <div class="user__info">
                                                            <div class="user__header">
                                                                <div class="user__header-name"><span>Anna Maria</span></div>
                                                                <div class="user__header-status">
                                                                    <span class="label label--green">online</span>
                                                                    <a href="#!" class="btn-del iconic iconic--add"></a>
                                                                </div>
                                                            </div>
                                                            <div class="user__info-btn">
                                                                <a href="#!" class="btn btn--green btn--s btn--stretch">send message</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="catalog__item ">
                                                    <div class="user">
                                                        <div class="user__ava">
                                                            <img src="../images/userfiles/user-img-big.jpg" alt="">
                                                        </div>
                                                        <div class="user__info">
                                                            <div class="user__header">
                                                                <div class="user__header-name"><span>Anna Maria</span></div>
                                                                <div class="user__header-status">
                                                                    <span class="label label--red">offline</span>
                                                                    <a href="#!" class="btn-del iconic iconic--add"></a>
                                                                </div>
                                                            </div>
                                                            <div class="user__info-btn">
                                                                <a href="#!" class="btn btn--green btn--s btn--stretch">send message</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="favorite-tabs__tab js-tabs-tab _active">
                                        <div class="catalog-wr">
                                            <div class="catalog">
                                                <div class="catalog__item ">
                                                    <div class="product product--edit">
                                                        <div class="product__header">
                                                            <a href="#!" class="product__header-del btn-del iconic iconic--add"></a>
                                                            <div class="product__header-label">
                                                                30 min ago <span class="label label--red">new</span>
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
                                                        <div class="product__footer">
                                                            <div class="product__footer-links">
                                                                <a class="link-ico" href="#!"><span class="iconic iconic--like"></span>3</a>
                                                                <a class="link-ico" href="#!"><span class="iconic iconic--comment"></span>14</a>
                                                            </div>
                                                            <div class="product__footer-user">
                                                                <a href="#!">
                                                                    <img src="../images/userfiles/user-img.jpg" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="catalog__item ">
                                                    <div class="product product--edit">
                                                        <div class="product__header">
                                                            <a href="#!" class="product__header-del btn-del iconic iconic--add"></a>
                                                            <div class="product__header-label">
                                                                30 min ago <span class="label label--red">new</span>
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
                                                        <div class="product__footer">
                                                            <div class="product__footer-links">
                                                                <a class="link-ico" href="#!"><span class="iconic iconic--like"></span>3</a>
                                                                <a class="link-ico" href="#!"><span class="iconic iconic--comment"></span>14</a>
                                                            </div>
                                                            <div class="product__footer-user">
                                                                <a href="#!">
                                                                    <img src="../images/userfiles/user-img.jpg" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="catalog__item ">
                                                    <div class="product product--edit">
                                                        <div class="product__header">
                                                            <a href="#!" class="product__header-del btn-del iconic iconic--add"></a>
                                                            <div class="product__header-label">
                                                                30 min ago <span class="label label--red">new</span>
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
                                                        <div class="product__footer">
                                                            <div class="product__footer-links">
                                                                <a class="link-ico" href="#!"><span class="iconic iconic--like"></span>3</a>
                                                                <a class="link-ico" href="#!"><span class="iconic iconic--comment"></span>14</a>
                                                            </div>
                                                            <div class="product__footer-user">
                                                                <a href="#!">
                                                                    <img src="../images/userfiles/user-img.jpg" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="catalog__item ">
                                                    <div class="product product--edit">
                                                        <div class="product__header">
                                                            <a href="#!" class="product__header-del btn-del iconic iconic--add"></a>
                                                            <div class="product__header-label">
                                                                30 min ago <span class="label label--red">new</span>
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
                                                        <div class="product__footer">
                                                            <div class="product__footer-links">
                                                                <a class="link-ico" href="#!"><span class="iconic iconic--like"></span>3</a>
                                                                <a class="link-ico" href="#!"><span class="iconic iconic--comment"></span>14</a>
                                                            </div>
                                                            <div class="product__footer-user">
                                                                <a href="#!">
                                                                    <img src="../images/userfiles/user-img.jpg" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
