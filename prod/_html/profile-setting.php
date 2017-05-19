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
                    <h1 class="h2">Setting</h1>
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
                                    <a class="profile-nav__link _active" href="#!">Setting</a>
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

                    <div class="profile-setting">
                        <form>
                            <div class="profile-setting__row">
                                <label class="checkbox-label checkbox-label--square">
                                    <span class="checkbox">
                                        <input type="checkbox" checked>
                                        <span class="checkbox__view"></span>
                                    </span>
                                    <span class="checkbox-label__txt">
                                        Subscribe to site notifications
                                    </span>
                                </label>
                            </div>
                            <div class="profile-setting__row">
                                <label class="checkbox-label checkbox-label--square">
                                    <span class="checkbox">
                                        <input type="checkbox" checked>
                                        <span class="checkbox__view"></span>
                                    </span>
                                    <span class="checkbox-label__txt">
                                        Make profile temporarily invisible
                                    </span>
                                </label>
                            </div>
                            <div class="profile-setting__row">
                                <label class="checkbox-label checkbox-label--square">
                                    <span class="checkbox">
                                        <input type="checkbox">
                                        <span class="checkbox__view"></span>
                                    </span>
                                    <span class="checkbox-label__txt">
                                        Prevent me from sending messages
                                    </span>
                                </label>
                            </div>
                            <div class="profile-setting__row">
                                <a href="#!" class="btn btn--gray-l btn--s">cancel</a>
                                <input type="submit" class="btn btn--green btn--s" value="save">
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
