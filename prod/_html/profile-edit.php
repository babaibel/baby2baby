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
                    <h1 class="h2">Edit profile</h1>
                    <div class="profile-menu">
                        <div class="profile-menu__nav">
                            <ul class="profile-nav">
                                <li class="profile-nav__item">
                                    <a class="profile-nav__link" href="#!">My profile</a>
                                </li>
                                <li class="profile-nav__item">
                                    <a class="profile-nav__link _active" href="#!">Edit profile</a>
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

                    <div class="profile-edit">
                        <form>
                            <div class="form-row form-row--cols2 profile-edit__ava">
                                <div class="form-row__col">
                                    <div class="profile-edit__row profile-edit__row--cols">
                                        <div class="profile-edit__row-btn">
                                            <div class="profile-edit__ava-img">
                                                <img src="../images/no-avatar-img.png" alt="">
                                            </div>
                                        </div>
                                        <div class="profile-edit__row-input">
                                            <div class="form-row">
                                                <div class="form-row__name">Avatar/Photo</div>
                                                <div class="form-row__input">
                                                    <div class="form-row profile-edit__row--cols">
                                                        <div class="profile-edit__row-btn">
                                                            <a href="#!" class="btn btn--gray-l btn--s">Choose and upload</a>
                                                        </div>
                                                        <div class="profile-edit__row-input">
                                                            рекомендуемый размер изображения: 40*40px
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row__col">
                                    <div class="profile-edit__row">
                                        <div class="form-row">
                                            <div class="form-row__name">Password</div>
                                            <div class="form-row__input">
                                                <div class="form-row profile-edit__row--cols">
                                                    <div class="profile-edit__row-btn">
                                                        <a href="#!" class="btn btn-icon btn--gray-l btn--s">
                                                            <span class="btn-icon__ico iconic iconic--lock"></span>
                                                            <span class="btn-icon__text">Add new password</span>
                                                        </a>
                                                    </div>
                                                    <div class="profile-edit__row-input">
                                                        пароль должен начинаться с буквы и содержать не менее 8 символов
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-edit__row">
                                <div class="form-row form-row--cols2">
                                    <div class="form-row__col">
                                        <div class="form-row__name">Username</div>
                                        <div class="form-row__input">
                                            <input type="text" placeholder="Enter username" class="input-text input-text--white">
                                        </div>
                                    </div>
                                    <div class="form-row__col">
                                        <div class="form-row__name">Name</div>
                                        <div class="form-row__input">
                                            <input type="text" placeholder="Enter name" class="input-text input-text--white">
                                        </div>
                                    </div>
                                    <div class="form-row__col">
                                        <div class="form-row__name">Birthday</div>
                                        <div class="form-row__input">
                                            <input type="text" placeholder="01.01.1990" class="input-text input-text--white">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-edit__row profile-edit__row--cols">
                                <div class="profile-edit__row-input">
                                    <select class="select select--search select--white js-select" data-placeholder="Choose city" data-multiple="1" multiple>
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
                                <div class="profile-edit__row-btn">
                                    <a href="#!" class="btn btn--gray-l btn--s">Choose at map</a>
                                </div>
                            </div>
                            <div class="profile-edit__row">
                                <h3 class="h3">Have you children?</h3>
                                <div class="profile-edit__row--cols">
                                    <div class="profile-edit__row-input">
                                        <div class="form-row form-row--cols2">
                                            <div class="form-row__col">
                                                <div class="form-row__name">Gender</div>
                                                <div class="form-row__input">
                                                    <select class="select select--white select--search js-select">
                                                        <option value="1">Boy</option>
                                                        <option value="2">Girl</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row__col">
                                                <div class="form-row__name">Year of birth</div>
                                                <div class="form-row__input">
                                                    <select class="select select--white select--search js-select">
                                                        <option value="1">2012</option>
                                                        <option value="2">2011</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="children">
                                                <span class="children__text">
                                                    Boy - 2017 year
                                                </span>
                                                <span class="children__del iconic iconic--add"></span>
                                            </div>
                                            <div class="children">
                                                <span class="children__text">
                                                    Boy - 2017 year
                                                </span>
                                                <span class="children__del iconic iconic--add"></span>
                                            </div>
                                            <div class="children">
                                                <span class="children__text">
                                                    Boy - 2017 year
                                                </span>
                                                <span class="children__del iconic iconic--add"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-edit__row-btn">
                                        <a href="#!" class="btn btn--gray-l btn--s btn--mrgt">Add children</a>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-edit__row profile-edit__row--inf">
                                <div class="profile-edit__row--cols">
                                    <div class="profile-edit__row-input">
                                        <div class="form-row">
                                            <div class="form-row__name">Information about me</div>
                                            <div class="form-row__input">
                                                <textarea placeholder="Enter text" class="textarea textarea--white"></textarea> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-edit__row-btn">
                                        <div class="form-row">
                                            <div class="form-row__name">Facebook url</div>
                                            <div class="form-row__input">
                                                <input type="text" placeholder="fb.com/" class="input-text input-text--white">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-row__name">Google+ url</div>
                                            <div class="form-row__input">
                                                <input type="text" placeholder="googleplus.com/" class="input-text input-text--white">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-row__name">E-mail</div>
                                            <div class="form-row__input">
                                                <input type="text" placeholder="E-mail address" class="input-text input-text--white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row text-center">
                                <button type="clear" class="btn btn--gray-l btn--s">cancel</button>
                                <button type="submit" class="btn btn--green btn--s">save</button>
                            </div>
                        </form>
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
