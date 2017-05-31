<!DOCTYPE html>
<html lang="ru">
<?php include 'base/head.php';?>
<body>

    <div class="page">
        <div class="page-inner">
            <?php include 'base/header.php';?>

            <div class="page-body">
                <div class="page-body__inner">
                    <div class="wrapper">

                        <h1 class="h2">All members</h1>

                        <form>
                            <div class="user-search">
                                <div class="user-search__input">
                                    <div class="form-row form-row--cols2">
                                        <div class="form-row__col">
                                            <div class="form-row__input">
                                                <input type="text" placeholder="Enter user name" class="input-text input-text--gray">
                                            </div>
                                        </div>
                                        <div class="form-row__col">
                                            <div class="form-row__input form-row__input--cols">
                                                <span class="form-row__input-label">ГОРОД:</span>
                                                <select class="select select--search js-select" data-placeholder="Enter city" data-multiple="1" multiple>
                                                    <option></option>
                                                    <option value="1">Item 1 select</option>
                                                    <option value="2">Item 2 select</option>
                                                    <option value="3">Item 3 select</option>
                                                    <option value="4">Item 4 select</option>
                                                    <option value="5">Item 5 select</option>
                                                    <option value="6">Item 6 select</option>
                                                    <option value="7">Item 7 select</option>
                                                    <option value="8">Item 8 select</option>
                                                    <option value="9">Item 9 select</option>
                                                    <option value="10">Item 10 select</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="user-search__btn">
                                    <button type="submit" class="btn btn--red-l">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="catalog-wr">
                            <div class="catalog">
                                <div class="catalog__item ">
                                    <div class="user user--big">
                                        <div class="user__ava">
                                            <img src="../images/userfiles/user-img-big.jpg" alt="">
                                        </div>
                                        <div class="user__info">
                                            <div class="user__header">
                                                <div class="user__header-name"><span>Anna Maria</span></div>
                                                <div class="user__header-status">
                                                    <span class="label label--red">offline</span>
                                                </div>
                                            </div>
                                            <div class="user__date">30 min ago</div>
                                            <div class="user__info-btn user__info-btn--cols">
                                                <a href="#!" class="btn btn--green btn--s btn--stretch">send message</a>
                                                <a href="#!" class="btn btn-icon btn-icon--fav btn--green btn--xss">
                                                    <span class="btn-icon__ico iconic iconic--star"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="catalog__item ">
                                    <div class="user user--big">
                                        <div class="user__ava">
                                            <img src="../images/userfiles/user-img-big.jpg" alt="">
                                        </div>
                                        <div class="user__info">
                                            <div class="user__header">
                                                <div class="user__header-name"><span>Anna Maria</span></div>
                                                <div class="user__header-status">
                                                    <span class="label label--red">offline</span>
                                                </div>
                                            </div>
                                            <div class="user__date">30 min ago</div>
                                            <div class="user__info-btn user__info-btn--cols">
                                                <a href="#!" class="btn btn--green btn--s btn--stretch">send message</a>
                                                <a href="#!" class="btn btn-icon btn-icon--fav btn--green btn--xss">
                                                    <span class="btn-icon__ico iconic iconic--star"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="catalog__item ">
                                    <div class="user user--big">
                                        <div class="user__ava">
                                            <img src="../images/userfiles/user-img-big.jpg" alt="">
                                        </div>
                                        <div class="user__info">
                                            <div class="user__header">
                                                <div class="user__header-name"><span>Anna Maria</span></div>
                                                <div class="user__header-status">
                                                    <span class="label label--red">offline</span>
                                                </div>
                                            </div>
                                            <div class="user__date">30 min ago</div>
                                            <div class="user__info-btn user__info-btn--cols">
                                                <a href="#!" class="btn btn--green btn--s btn--stretch">send message</a>
                                                <a href="#!" class="btn btn-icon btn-icon--fav btn--green btn--xss">
                                                    <span class="btn-icon__ico iconic iconic--star"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="catalog__item ">
                                    <div class="user user--big">
                                        <div class="user__ava">
                                            <img src="../images/userfiles/user-img-big.jpg" alt="">
                                        </div>
                                        <div class="user__info">
                                            <div class="user__header">
                                                <div class="user__header-name"><span>Anna Maria</span></div>
                                                <div class="user__header-status">
                                                    <span class="label label--red">offline</span>
                                                </div>
                                            </div>
                                            <div class="user__date">30 min ago</div>
                                            <div class="user__info-btn user__info-btn--cols">
                                                <a href="#!" class="btn btn--green btn--s btn--stretch">send message</a>
                                                <a href="#!" class="btn btn-icon btn-icon--fav btn--green btn--xss">
                                                    <span class="btn-icon__ico iconic iconic--star"></span>
                                                </a>
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
