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

                        <h1 class="h2">Оплата подписки</h1>

                        <div class="opinion">
                            <div class="opinion__header">
                                <div class="opinion__header-ava">
                                     <img src="../images/userfiles/user-img-big.jpg" alt="">
                                </div>
                                <div class="opinion__header-content">
                                    <div class="opinion__username">happyness77 <span class="label label--green">online</span></div>
                                    <div class="opinion-product">
                                        <div class="opinion-product__img">
                                            <a href="#!">
                                                <img src="../images/userfiles/product-img.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="opinion-product__info">
                                            <div class="opinion-product__info-text">Купленный товар:</div>
                                            <div class="opinion-product__info-link"><a href="#!" class="link link--gray-d2">Jackets children 8 years</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="opinion__add">
                                <div class="form-row">
                                    <div class="form-row__name">Сhoose:
                                        <div class="rating">
                                            <select class="js-rating" data-current-rating="3">
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row__input">
                                        <textarea placeholder="Enter text" class="textarea textarea--gray"></textarea> 
                                    </div>
                                    <div class="form-row__btn">
                                        <input type="submit" value="add opinion" class="btn btn--green btn--xss">
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
