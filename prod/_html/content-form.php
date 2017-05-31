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
                        <div class="content content--leftbar">
                            <div class="content__sidebar">
                                <div class="main-catalog__sidebar-item">
                                    <ul class="sidebar-nav">
                                        <li class="sidebar-nav__item">
                                            <a class="sidebar-nav__link sidebar-nav__link--dropdown js-sidebar-dropdown" href="#!"><span>Обувь</span></a>
                                            <ul class="sidebar-nav-sub">
                                                <li class="sidebar-nav-sub__item">
                                                    <a class="sidebar-nav-sub__link active" href="#!">Подпункт меню</a>
                                                </li>
                                                <li class="sidebar-nav-sub__item">
                                                    <a class="sidebar-nav-sub__link" href="#!">Подпункт меню</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sidebar-nav__item">
                                            <a class="sidebar-nav__link sidebar-nav__link--dropdown js-sidebar-dropdown" href="#!"><span>Футболки</span></a>
                                            <ul class="sidebar-nav-sub">
                                                <li class="sidebar-nav-sub__item">
                                                    <a class="sidebar-nav-sub__link" href="#!">Подпункт меню</a>
                                                </li>
                                                <li class="sidebar-nav-sub__item">
                                                    <a class="sidebar-nav-sub__link" href="#!">Подпункт меню</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sidebar-nav__item">
                                            <a class="sidebar-nav__link sidebar-nav__link--dropdown js-sidebar-dropdown" href="#!"><span>Брюки</span></a>
                                            <ul class="sidebar-nav-sub">
                                                <li class="sidebar-nav-sub__item">
                                                    <a class="sidebar-nav-sub__link" href="#!">Подпункт меню</a>
                                                </li>
                                                <li class="sidebar-nav-sub__item">
                                                    <a class="sidebar-nav-sub__link" href="#!">Подпункт меню</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sidebar-nav__item">
                                            <a class="sidebar-nav__link active" href="#!"><span>Джинсы</span></a>
                                        </li>
                                        <li class="sidebar-nav__item">
                                            <a class="sidebar-nav__link" href="#!"><span>Верхняя одежда</span></a>
                                        </li>
                                        <li class="sidebar-nav__item">
                                            <a class="sidebar-nav__link" href="#!"><span>Платья</span></a>
                                        </li>
                                        <li class="sidebar-nav__item">
                                            <a class="sidebar-nav__link" href="#!"><span>Игрушки</span></a>
                                        </li>
                                        <li class="sidebar-nav__item">
                                            <a class="sidebar-nav__link" href="#!"><span>Головные уборы</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="community-tabs js-tabs">
                                    <div class="community-tabs__btns">
                                        <div class="community-tabs__btn js-tabs-btn">
                                            <a href="#!">Latest</a>
                                        </div>
                                        <div class="community-tabs__btn js-tabs-btn _active">
                                            <a href="#!">Most popular</a>
                                        </div>
                                    </div>
                                    <div class="community-tabs__tabs">
                                        <div class="community-tabs__tab js-tabs-tab">
                                            <h3 class="h3">Community1</h3>
                                            <div class="community-post">
                                                <div class="community-post__date">14.03.2017</div>
                                                <div class="community-post__text">
                                                    <a href="#!" class="link link--black">Lorem ipsum dolor sit amet</a>
                                                </div>
                                                <div class="community-post__links">
                                                    <a class="link-ico" href="#!"><span class="iconic iconic--like"></span>3</a>
                                                    <a class="link-ico" href="#!"><span class="iconic iconic--comment"></span>14</a>
                                                </div>
                                            </div>
                                            <div class="community-post">
                                                <div class="community-post__date">14.03.2017</div>
                                                <div class="community-post__text">
                                                    <a href="#!" class="link link--black">Lorem ipsum dolor sit amet</a>
                                                </div>
                                                <div class="community-post__links">
                                                    <a class="link-ico" href="#!"><span class="iconic iconic--like"></span>3</a>
                                                    <a class="link-ico" href="#!"><span class="iconic iconic--comment"></span>14</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="community-tabs__tab js-tabs-tab _active">
                                            <h3 class="h3">Community</h3>
                                            <div class="community-post">
                                                <div class="community-post__date">11.03.2017</div>
                                                <div class="community-post__text">
                                                    <a href="#!" class="link link--black">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                                                </div>
                                                <div class="community-post__links">
                                                    <a class="link-ico" href="#!"><span class="iconic iconic--like"></span>3</a>
                                                    <a class="link-ico" href="#!"><span class="iconic iconic--comment"></span>14</a>
                                                </div>
                                            </div>
                                            <div class="community-post">
                                                <div class="community-post__date">11.03.2017</div>
                                                <div class="community-post__text">
                                                    <a href="#!" class="link link--black">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                                                </div>
                                                <div class="community-post__links">
                                                    <a class="link-ico" href="#!"><span class="iconic iconic--like"></span>3</a>
                                                    <a class="link-ico" href="#!"><span class="iconic iconic--comment"></span>14</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content__body">
                                <h1 class="h2">Content form</h1>
                                <div class="white-block">
                                    <form>
                                        <div class="form">
                                            <div class="form-row form-row--cols2">
                                                <div class="form-row__col">
                                                    <div class="form-row__name">Name<sup class="red-star">*</sup></div>
                                                    <div class="form-row__input form-row__input--cols">
                                                        <input type="text" placeholder="Enter name" class="input-text input-text--gray">
                                                    </div>
                                                </div>
                                                <div class="form-row__col">
                                                    <div class="form-row__name">Quantity</div>
                                                    <div class="form-row__input">
                                                        <select class="select select--search js-select">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="1">3</option>
                                                            <option value="2">4</option>
                                                            <option value="1">5</option>
                                                            <option value="2">6</option>
                                                            <option value="1">7</option>
                                                            <option value="2">8</option>
                                                            <option value="1">9</option>
                                                            <option value="2">10</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row form-row--cols2">
                                                <div class="form-row__col">
                                                    <div class="form-row__name">Name</div>
                                                    <div class="form-row__input form-row__input--cols">
                                                        <input type="text" placeholder="Enter name" class="input-text input-text--gray">
                                                    </div>
                                                </div>
                                                <div class="form-row__col">
                                                    <div class="form-row__name">Quantity<sup class="red-star">*</sup></div>
                                                    <div class="form-row__input">
                                                        <select class="select select--search js-select">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="1">3</option>
                                                            <option value="2">4</option>
                                                            <option value="1">5</option>
                                                            <option value="2">6</option>
                                                            <option value="1">7</option>
                                                            <option value="2">8</option>
                                                            <option value="1">9</option>
                                                            <option value="2">10</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row form-row--cols2">
                                                <div class="form-row__col">
                                                    <div class="form-row__name">Name</div>
                                                    <div class="form-row__input form-row__input--cols">
                                                        <input type="text" placeholder="Enter name" class="input-text input-text--gray">
                                                    </div>
                                                </div>
                                                <div class="form-row__col">
                                                    <div class="form-row__name">Quantity</div>
                                                    <div class="form-row__input">
                                                        <select class="select select--search js-select">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="1">3</option>
                                                            <option value="2">4</option>
                                                            <option value="1">5</option>
                                                            <option value="2">6</option>
                                                            <option value="1">7</option>
                                                            <option value="2">8</option>
                                                            <option value="1">9</option>
                                                            <option value="2">10</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row form-row--nomrg">
                                                <button type="submit" class="btn btn--green btn--s btn--mrgr">Отправить</button>
                                            </div>
                                        </div>
                                    </form>
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
