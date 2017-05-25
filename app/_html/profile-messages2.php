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
                    <h1 class="h2">Messages</h1>
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
                                    <a class="profile-nav__link _active" href="#!">Messages</a>
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
                            <div class="profile-tabs js-tabs">
                                <div class="profile-tabs__btns">
                                    <div class="profile-tabs__btn js-tabs-btn">
                                        <a href="#!"><span>New messages</span></a>
                                    </div>
                                    <div class="profile-tabs__btn js-tabs-btn _active">
                                        <a href="#!"><span>All messages</span></a>
                                    </div>
                                    <div class="profile-tabs__btn js-tabs-btn">
                                        <a href="#!"><span>Send message</span></a>
                                    </div>
                                </div>
                                <div class="profile-tabs__tabs">
                                    <div class="profile-tabs__tab js-tabs-tab">
                                        <div class="messages">
                                            <div class="messages__search">
                                                <div class="search">
                                                    <button type="submit" class="search__btn"></button>
                                                    <input type="text" class="search__text" placeholder="Search">
                                                </div>
                                            </div>
                                            <div class="messages-item">
                                                <div class="messages-item__ava">
                                                    <img src="../images/userfiles/user-img-big.jpg" alt="">
                                                </div>
                                                <div class="messages-item__info">
                                                    <div class="messages-item__header">
                                                        <div class="messages-item__header-username">
                                                            happyness77 <span class="label label--green">online</span>
                                                        </div>
                                                        <div class="messages-item__header-time">
                                                            2 hours ago
                                                        </div>
                                                    </div>
                                                    <div class="messages-item__info-date">
                                                        13 августа 2017
                                                    </div>
                                                    <div class="messages-item__info-text">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
                                                    </div>
                                                    <div class="messages-item__info-btns">
                                                        <a href="#!" class="btn btn--green btn--xss">send message</a>
                                                        <a href="#!" class="btn btn-icon btn-icon--fav btn--green btn--xss">
                                                            <span class="btn-icon__ico iconic iconic--star"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="messages-item">
                                                <div class="messages-item__ava">
                                                    <img src="../images/userfiles/user-img-big.jpg" alt="">
                                                </div>
                                                <div class="messages-item__info">
                                                    <div class="messages-item__header">
                                                        <div class="messages-item__header-username">
                                                            happyness77 <span class="label label--green">online</span>
                                                        </div>
                                                        <div class="messages-item__header-time">
                                                            2 hours ago
                                                        </div>
                                                    </div>
                                                    <div class="messages-item__info-date">
                                                        13 августа 2017
                                                    </div>
                                                    <div class="messages-item__info-text">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
                                                    </div>
                                                    <div class="messages-item__info-btns">
                                                        <a href="#!" class="btn btn--green btn--xss">send message</a>
                                                        <a href="#!" class="btn btn-icon btn-icon--fav btn--green btn--xss">
                                                            <span class="btn-icon__ico iconic iconic--star"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-tabs__tab js-tabs-tab _active">
                                        <div class="messages">
                                            <div class="messages__search">
                                                <div class="search">
                                                    <button type="submit" class="search__btn"></button>
                                                    <input type="text" class="search__text" placeholder="Search">
                                                </div>
                                            </div>
                                            <div class="messages-item">
                                                <div class="messages-item__ava">
                                                    <img src="../images/userfiles/user-img-big.jpg" alt="">
                                                </div>
                                                <div class="messages-item__info">
                                                    <div class="messages-item__header">
                                                        <div class="messages-item__header-username">
                                                            happyness77 <span class="label label--green">online</span>
                                                        </div>
                                                        <div class="messages-item__header-time">
                                                            2 hours ago
                                                        </div>
                                                    </div>
                                                    <div class="messages-item__info-date">
                                                        13 августа 2017
                                                    </div>
                                                    <div class="messages-item__info-text">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
                                                    </div>
                                                    <div class="messages-item__info-btns">
                                                        <a href="#!" class="btn btn--green btn--xss">send message</a>
                                                        <a href="#!" class="btn btn-icon btn-icon--fav btn--green btn--xss">
                                                            <span class="btn-icon__ico iconic iconic--star"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="messages-item">
                                                <div class="messages-item__ava">
                                                    <img src="../images/userfiles/user-img-big.jpg" alt="">
                                                </div>
                                                <div class="messages-item__info">
                                                    <div class="messages-item__header">
                                                        <div class="messages-item__header-username">
                                                            happyness77 <span class="label label--green">online</span>
                                                        </div>
                                                        <div class="messages-item__header-time">
                                                            2 hours ago
                                                        </div>
                                                    </div>
                                                    <div class="messages-item__info-date">
                                                        13 августа 2017
                                                    </div>
                                                    <div class="messages-item__info-text">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
                                                    </div>
                                                    <div class="messages-item__info-btns">
                                                        <a href="#!" class="btn btn--green btn--xss">send message</a>
                                                        <a href="#!" class="btn btn-icon btn-icon--fav btn--green btn--xss">
                                                            <span class="btn-icon__ico iconic iconic--star"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="messages-item">
                                                <div class="messages-item__ava">
                                                    <img src="../images/userfiles/user-img-big.jpg" alt="">
                                                </div>
                                                <div class="messages-item__info">
                                                    <div class="messages-item__header">
                                                        <div class="messages-item__header-username">
                                                            happyness77 <span class="label label--green">online</span>
                                                        </div>
                                                        <div class="messages-item__header-time">
                                                            2 hours ago
                                                        </div>
                                                    </div>
                                                    <div class="messages-item__info-date">
                                                        13 августа 2017
                                                    </div>
                                                    <div class="messages-item__info-text">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
                                                    </div>
                                                    <div class="messages-item__info-btns">
                                                        <a href="#!" class="btn btn--green btn--xss">send message</a>
                                                        <a href="#!" class="btn btn-icon btn-icon--fav btn--green btn--xss">
                                                            <span class="btn-icon__ico iconic iconic--star"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="messages-item">
                                                <div class="messages-item__ava">
                                                    <img src="../images/userfiles/user-img-big.jpg" alt="">
                                                </div>
                                                <div class="messages-item__info">
                                                    <div class="messages-item__header">
                                                        <div class="messages-item__header-username">
                                                            happyness77 <span class="label label--green">online</span>
                                                        </div>
                                                        <div class="messages-item__header-time">
                                                            2 hours ago
                                                        </div>
                                                    </div>
                                                    <div class="messages-item__info-date">
                                                        13 августа 2017
                                                    </div>
                                                    <div class="messages-item__info-text">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
                                                    </div>
                                                    <div class="messages-item__info-btns">
                                                        <a href="#!" class="btn btn--green btn--xss">send message</a>
                                                        <a href="#!" class="btn btn-icon btn-icon--fav btn--green btn--xss">
                                                            <span class="btn-icon__ico iconic iconic--star"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-tabs__tab js-tabs-tab">
                                        <div class="messages">
                                            <div class="messages__search">
                                                <div class="search">
                                                    <button type="submit" class="search__btn"></button>
                                                    <input type="text" class="search__text" placeholder="Search">
                                                </div>
                                            </div>
                                            <div class="messages-item">
                                                <div class="messages-item__ava">
                                                    <img src="../images/userfiles/user-img-big.jpg" alt="">
                                                </div>
                                                <div class="messages-item__info">
                                                    <div class="messages-item__header">
                                                        <div class="messages-item__header-username">
                                                            happyness77 <span class="label label--green">online</span>
                                                        </div>
                                                        <div class="messages-item__header-time">
                                                            2 hours ago
                                                        </div>
                                                    </div>
                                                    <div class="messages-item__info-date">
                                                        13 августа 2017
                                                    </div>
                                                    <div class="messages-item__info-text">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
                                                    </div>
                                                    <div class="messages-item__info-btns">
                                                        <a href="#!" class="btn btn--green btn--xss">send message</a>
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
