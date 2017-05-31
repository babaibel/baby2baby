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

                        <h1 class="h2">Post your ad</h1>

                        <form>
                            <div class="additem js-form-tabs">
                                <div class="additem__header">
                                    <div class="additem__col">
                                        <span class="iconic iconic--one"></span>
                                        <div class="additem__header-radio">
                                            <label class="radio-label">
                                                <span class="radio">
                                                    <input type="radio" name="additem" checked class="js-form-tabs-btn" data-id="1">
                                                    <span class="radio__view"></span>
                                                </span>
                                                <span class="radio-label__txt">
                                                    Sell one item
                                                </span>
                                            </label>
                                        </div>
                                        <div class="additem__header-radio">
                                            <label class="radio-label">
                                                <span class="radio">
                                                    <input type="radio" name="additem" class="js-form-tabs-btn" data-id="2">
                                                    <span class="radio__view"></span>
                                                </span>
                                                <span class="radio-label__txt">
                                                    Give free one item
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="additem__col">
                                        <span class="iconic iconic--box"></span>
                                        <div class="additem__header-radio">
                                            <label class="radio-label">
                                                <span class="radio">
                                                    <input type="radio" name="additem" class="js-form-tabs-btn" data-id="3">
                                                    <span class="radio__view"></span>
                                                </span>
                                                <span class="radio-label__txt">
                                                    Sell box with items
                                                </span>
                                            </label>
                                        </div>
                                        <div class="additem__header-radio">
                                            <label class="radio-label">
                                                <span class="radio">
                                                    <input type="radio" name="additem" class="js-form-tabs-btn" data-id="4">
                                                    <span class="radio__view"></span>
                                                </span>
                                                <span class="radio-label__txt">
                                                    Give free box with item
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="additem__body">
                                    <div class="additem-form js-form-tabs-tab _active1">
                                        <div class="additem__col">
                                            <div class="form">
                                                <div class="form-row">
                                                    <div class="form-row__name">Name <sup class="red-star">*</sup></div>
                                                    <div class="form-row__input">
                                                        <input type="text" placeholder="Enter name" class="input-text input-text--gray">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-row__name">Description (max 1500 symbol)</div>
                                                    <div class="form-row__input">
                                                        <textarea placeholder="Enter name" class="textarea textarea--gray"></textarea> 
                                                    </div>
                                                </div>
                                                <div class="form-row form-row--cols2 _form1 _form2">
                                                    <div class="form-row__col _form1">
                                                        <div class="form-row__name">Sale price</div>
                                                        <div class="form-row__input form-row__input--cols">
                                                            <input type="text" placeholder="0" class="input-text input-text--gray">
                                                            <span class="form-row__input-label">€</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-row__col _form1 _form2">
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
                                            </div>
                                        </div>
                                        <div class="additem__col">
                                            <div class="form _form1 _form2">
                                                <div class="form-row">
                                                    <div class="form-row__name">Parameters</div>
                                                    <div class="form-row__input">
                                                        <select class="select select--search js-select" data-placeholder="Enter item category" data-multiple="1" multiple>
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
                                                <div class="form-row">
                                                    <div class="form-row__name">&nbsp;<sup class="red-star">*</sup></div>
                                                    <div class="form-row__input">
                                                        <select class="select select--search js-select" data-placeholder="Enter item subcategory" multiple>
                                                            <option></option>
                                                            <option value="1">Item 1 select</option>
                                                            <option value="2">Item 2 select</option>
                                                            <option value="3">Item 3 select</option>
                                                            <option value="4">Item 4 select</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-row__name">&nbsp;</div>
                                                    <div class="form-row__input">
                                                        <select class="select select--search js-select" data-placeholder="Enter brand name" multiple>
                                                            <option></option>
                                                            <option value="1">Item 1 select</option>
                                                            <option value="2">Item 2 select</option>
                                                            <option value="3">Item 3 select</option>
                                                            <option value="4">Item 4 select</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-row form-row--cols2">
                                                    <div class="form-row__col">
                                                        <div class="form-row__name">&nbsp;</div>
                                                        <div class="form-row__input">
                                                            <select class="select select--search js-select" data-placeholder="Choose color">
                                                                <option></option>
                                                                <option value="1">Item</option>
                                                                <option value="2">Service</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-row__col">
                                                        <div class="form-row__name">&nbsp;</div>
                                                        <div class="form-row__input">
                                                            <select class="select select--search js-select" data-placeholder="Item condition">
                                                                <option></option>
                                                                <option value="1">Item</option>
                                                                <option value="2">Service</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row form-row--cols2">
                                                    <div class="form-row__col">
                                                        <div class="form-row__name">&nbsp;</div>
                                                        <div class="form-row__input">
                                                            <select class="select select--search js-select" data-placeholder="Age">
                                                                <option></option>
                                                                <option value="1">Item</option>
                                                                <option value="2">Service</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-row__col">
                                                        <div class="form-row__name">&nbsp;</div>
                                                        <div class="form-row__input">
                                                            <select class="select select--search js-select" data-placeholder="Gender">
                                                                <option></option>
                                                                <option value="1">Item</option>
                                                                <option value="2">Service</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form _form3 _form4">
                                                <div class="form-row form-row--cols3">
                                                    <div class="form-row__col">
                                                        <div class="form-row__name">Group ad</div>
                                                        <div class="form-row__input">
                                                            <select class="select select--search js-select" data-placeholder="Age">
                                                                <option></option>
                                                                <option value="1">Item</option>
                                                                <option value="2">Service</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-row__col">
                                                        <div class="form-row__name">&nbsp;</div>
                                                        <div class="form-row__input">
                                                            <select class="select select--search js-select" data-placeholder="Size">
                                                                <option></option>
                                                                <option value="1">Item</option>
                                                                <option value="2">Service</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-row__col">
                                                        <div class="form-row__name">&nbsp;</div>
                                                        <div class="form-row__input">
                                                            <select class="select select--search js-select" data-placeholder="Gender">
                                                                <option></option>
                                                                <option value="1">Item</option>
                                                                <option value="2">Service</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row form-row--cols2">
                                                    <div class="form-row__col _form3">
                                                        <div class="form-row__name">Sale price</div>
                                                        <div class="form-row__input form-row__input--cols">
                                                            <input type="text" placeholder="0" class="input-text input-text--gray">
                                                            <span class="form-row__input-label">€</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-row__col _form3 _form4">
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
                                                <div class="form-row form-row--cols2 _form3 _form4">
                                                    <div class="form-row__col">
                                                        <div class="form-row__name">Shipping size</div>
                                                        <div class="form-row__input">
                                                            <input type="text" placeholder="Width / height / depth" class="input-text input-text--gray">
                                                        </div>
                                                    </div>
                                                    <div class="form-row__col">
                                                        <div class="form-row__name">Weight</div>
                                                        <div class="form-row__input form-row__input--cols">
                                                            <input type="text" placeholder="0" class="input-text input-text--gray">
                                                            <span class="form-row__input-label">kg.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="additem__row _form3 _form4">
                                            <div class="form form--newitem">
                                                <div class="form-row form-row--cols2">
                                                    <div class="form-row__col">
                                                        <div class="form-row__name">Item 1</div>
                                                        <div class="form-row__input">
                                                            <input type="text" placeholder="Item name" class="input-text input-text--gray">
                                                        </div>
                                                    </div>
                                                    <div class="form-row__col">
                                                        <div class="form-row__name">&nbsp;</div>
                                                        <div class="form-row__input">
                                                            <select class="select select--search js-select" data-placeholder="Enter item category" data-multiple="1" multiple>
                                                                <option></option>
                                                                <option value="1">Item 1 select</option>
                                                                <option value="2">Item 2 select</option>
                                                                <option value="3">Item 3 select</option>
                                                                <option value="4">Item 4 select</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row form-row--cols2">
                                                    <div class="form-row__col">
                                                        <div class="form-row__name">&nbsp;</div>
                                                        <div class="form-row__input">
                                                            <select class="select select--search js-select" data-placeholder="Enter brand name" multiple>
                                                                <option></option>
                                                                <option value="1">Item 1 select</option>
                                                                <option value="2">Item 2 select</option>
                                                                <option value="3">Item 3 select</option>
                                                                <option value="4">Item 4 select</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-row__col">
                                                        <div class="form-row form-row--cols2">
                                                            <div class="form-row__col">
                                                                <div class="form-row__name">&nbsp;</div>
                                                                <div class="form-row__input">
                                                                    <select class="select select--search js-select" data-placeholder="Choose color">
                                                                        <option></option>
                                                                        <option value="1">Item</option>
                                                                        <option value="2">Service</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-row__col">
                                                                <div class="form-row__name">&nbsp;</div>
                                                                <div class="form-row__input">
                                                                    <select class="select select--search js-select" data-placeholder="Item condition">
                                                                        <option></option>
                                                                        <option value="1">Item</option>
                                                                        <option value="2">Service</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#!" class="form-close-btn iconic iconic--cross"></a>
                                            </div>
                                            <div class="form">
                                                <div class="form-row text-center">
                                                    <a href="#!" class="btn btn-icon btn--red btn--s">
                                                        <span class="btn-icon__ico iconic iconic--add"></span>
                                                        <span class="btn-icon__text">Add one more item</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="additem__row">
                                            <div class="form">
                                                <div class="form-row form-row--nomrg">
                                                    <div class="form-row__name">Item photo (max 5 photo)</div>
                                                    <div class="form-photo">
                                                        <div class="form-photo__item form-photo__item--btn js-file">
                                                            <span class="iconic iconic--photo"></span>
                                                            <span class="btn btn--red btn-icon btn-icon--add">
                                                                <span class="btn-icon__ico iconic iconic--add"></span>
                                                                <span class="btn-icon__text">Add photo</span>
                                                            </span>
                                                        </div>
                                                        <input type="file" multiple hidden>
                                                        <div class="form-photo__item" style="background-image: url(../images/userfiles/upload-img.jpg);">
                                                            <a href="#!" class="form-photo__item-del"><span class="iconic iconic--add"></span></a>
                                                        </div>
                                                        <div class="form-photo__item" style="background-image: url(../images/userfiles/upload-img.jpg);">
                                                            <a href="#!" class="form-photo__item-del"><span class="iconic iconic--add"></span></a>
                                                        </div>
                                                        <div class="form-photo__item" style="background-image: url(../images/userfiles/upload-img.jpg);">
                                                            <a href="#!" class="form-photo__item-del"><span class="iconic iconic--add"></span></a>
                                                        </div>
                                                        <div class="form-photo__item" style="background-image: url(../images/userfiles/upload-img.jpg);">
                                                            <a href="#!" class="form-photo__item-del"><span class="iconic iconic--add"></span></a>
                                                        </div>
                                                        <div class="form-photo__item" style="background-image: url(../images/userfiles/upload-img.jpg);">
                                                            <a href="#!" class="form-photo__item-del"><span class="iconic iconic--add"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row text-center">
                                                    <button type="clear" class="btn btn--gray-l btn--s">cancel</button>
                                                    <button type="submit" class="btn btn--green btn--s">publish an ad</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

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
