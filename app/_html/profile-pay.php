<!DOCTYPE html>
<html lang="ru">
<?php include 'base/head.php';?>
<body>

    <div class="page page-profile">
        <div class="page-inner">
            <section class="top-alert-wr top-alert-wr--green js-top-alert">
                <div class="wrapper">
                    <div class="top-alert">
                        <div class="top-alert__text">
                            <p><b>Вы исчерпали бесплатный лимит по размещению объявлений.</b></p>
                            <p>Перейдите в раздел «оформление подписки», чтобы активировать большее количество объявлений.</p>
                        </div>
                        <div class="top-alert__close">
                            <a href="#!" class="iconic iconic--cancel js-top-alert-close"></a>
                        </div>
                    </div>
                </div>
            </section>
            <?php include 'base/header.php';?>

            <div class="page-body">
                <div class="page-body__inner">

                <div class="wrapper">
                    <h1 class="h2">My profile</h1>
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
                                    <a class="profile-nav__link" href="#!">Favorites</a>
                                </li>
                                <li class="profile-nav__item">
                                    <a class="profile-nav__link" href="#!">Messages</a>
                                </li>
                                <li class="profile-nav__item">
                                    <a class="profile-nav__link" href="#!">Setting</a>
                                </li>
                                <li class="profile-nav__item">
                                    <a class="profile-nav__link _active" href="#!">Billing</a>
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
                        <div class="main-catalog main-catalog--leftbar">
                            <div class="main-catalog__sidebar">
                                <div class="main-catalog__sidebar-item main-catalog__sidebar-item--padd">
                                    <div class="profile-card">
                                        <div class="profile-card__title">Anna Maria</div>
                                        <div class="profile-card__info">
                                            <div class="profile-card__info-ava">
                                                <img src="../images/no-avatar-img.png" alt="">
                                            </div>
                                            <div class="profile-card__info-text">
                                                <p><span class="label-verified"><span class="iconic iconic--verified"></span><span class="label-verified__text">Verified user</span></span></p>
                                                <p>Belgium, Brussels</p>
                                                <p>Age: 34</p>
                                                <p>Children (age): <span class="iconic iconic--boy"></span>12 <span class="iconic iconic--girl"></span>11</p>
                                            </div>
                                        </div>
                                        <div class="profile-card__rating">
                                            <div class="rating">
                                                <select class="js-rating" data-readonly="true" data-current-rating="3">
                                                  <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option>
                                                  <option value="4">4</option>
                                                  <option value="5">5</option>
                                                </select>
                                            </div>
                                            <div class="profile-card__rating-numbers">3445</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-catalog__sidebar-item main-catalog__sidebar-item--padd">
                                    <h3 class="h3">Reviews about me</h3>
                                    <div class="review">
                                        <div class="review__header">
                                            <div class="review__ava">
                                                <img src="../images/userfiles/user-img.jpg" alt="">
                                            </div>
                                            <div class="review__content">
                                                <div class="review__info">
                                                    <div class="review__info-time">30 min ago</div>
                                                    <div class="review__info-rating">
                                                        <div class="rating">
                                                            <select class="js-rating" data-readonly="true" data-current-rating="3">
                                                              <option value="1">1</option>
                                                              <option value="2">2</option>
                                                              <option value="3">3</option>
                                                              <option value="4">4</option>
                                                              <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review__content-name">Andrey Ivanov</div>
                                            </div>
                                        </div>
                                        <div class="review__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </div>
                                    </div>
                                    <div class="review">
                                        <div class="review__header">
                                            <div class="review__ava">
                                                <img src="../images/userfiles/user-img.jpg" alt="">
                                            </div>
                                            <div class="review__content">
                                                <div class="review__info">
                                                    <div class="review__info-time">30 min ago</div>
                                                    <div class="review__info-rating">
                                                        <div class="rating">
                                                            <select class="js-rating" data-readonly="true" data-current-rating="3">
                                                              <option value="1">1</option>
                                                              <option value="2">2</option>
                                                              <option value="3">3</option>
                                                              <option value="4">4</option>
                                                              <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review__content-name">Andrey Ivanov</div>
                                            </div>
                                        </div>
                                        <div class="review__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </div>
                                    </div>
                                    <div class="review">
                                        <div class="review__header">
                                            <div class="review__ava">
                                                <img src="../images/userfiles/user-img.jpg" alt="">
                                            </div>
                                            <div class="review__content">
                                                <div class="review__info">
                                                    <div class="review__info-time">30 min ago</div>
                                                    <div class="review__info-rating">
                                                        <div class="rating">
                                                            <select class="js-rating" data-readonly="true" data-current-rating="3">
                                                              <option value="1">1</option>
                                                              <option value="2">2</option>
                                                              <option value="3">3</option>
                                                              <option value="4">4</option>
                                                              <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review__content-name">Andrey Ivanov</div>
                                            </div>
                                        </div>
                                        <div class="review__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-catalog__content">
                                <div class="catalog-wr">
                                    <div class="catalog">
                                        <div class="catalog__item">
                                            <div class="product product--edit">
                                                <div class="product__header">
                                                    <a href="#!" class="product__header-del btn-del iconic iconic--add"></a>
                                                    <div class="product__header-label">
                                                        30 min ago <span class="label label--red">new</span>
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
                                                    <a href="#!" class="btn btn--gray-l btn--xs">Edit</a>
                                                    <a href="#!" class="btn btn--red btn--xs">Choose buyer (3)</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="catalog__item">
                                            <div class="product product--edit">
                                                <div class="product__header">
                                                    <a href="#!" class="product__header-del btn-del iconic iconic--add"></a>
                                                    <div class="product__header-label">
                                                        30 min ago <span class="label label--red">new</span>
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
                                                        <a href="#!" class="link link--gray-d2">Jackets children 8 years Jackets children 8 years</a>
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
                                                    <a href="#!" class="btn btn--gray-l btn--xs">Edit</a>
                                                    <a href="#!" class="btn btn--red btn--xs">Choose buyer (3)</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="catalog__item">
                                            <div class="product product--edit">
                                                <div class="product__header">
                                                    <a href="#!" class="product__header-del btn-del iconic iconic--add"></a>
                                                    <div class="product__header-label">
                                                        30 min ago <span class="label label--red">new</span>
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
                                                    <a href="#!" class="btn btn--gray-l btn--xs">Edit</a>
                                                    <a href="#!" class="btn btn--red btn--xs">Choose buyer (3)</a>
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
