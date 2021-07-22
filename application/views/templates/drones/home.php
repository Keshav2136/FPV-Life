<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$arrCategories = array();
foreach ($all_categories as $categorie) {
    if (isset($_GET['category']) && is_numeric($_GET['category']) && $_GET['category'] == $categorie['sub_for']) {
        $arrCategories[] = $categorie;
    }
    if (!isset($_GET['category']) || $_GET['category'] == '') {
        if ($categorie['sub_for'] == 0) {
            $arrCategories[] = $categorie;
        }
    }
}
?>


<main class="showcase">
	
	<div class="content section section1 video-container">
		<div class="video-container">
			<video src="https://github.com/Keshav2136/Keshav2136.github.io/raw/with-fpv-web/fpv-web/shot.mp4" autoplay muted loop></video>
		</div>
        <div class="text1 vidcontent">
        		<h1 id="fullwidth-convered" class="title homepage-heading"><span class="underline--magical">Experience</span> The Thrill Of Flying</h1>
		</div>
		<img src="https://raw.githubusercontent.com/Keshav2136/Keshav2136.github.io/with-fpv-web/fpv-web/parrot.png" alt="demo drone">
	</div>

</main>









                <div id="top-part" class="hide-on-small">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-3 col-lg-4 left">
                                <a href="<?= base_url() ?>">
                                    <img src="<?= base_url('attachments/site_logo/' . $sitelogo) ?>" class="site-logo" alt="<?= $_SERVER['HTTP_HOST'] ?>">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-5 col-lg-5">
                                <div class="input-group" id="adv-search">
                                    <input type="text" value="<?= isset($_GET['search_in_title']) ? $_GET['search_in_title'] : '' ?>" id="search_in_title" class="form-control" placeholder="<?= lang('search_by_keyword_title') ?>" />
                                    <div class="input-group-btn">
                                        <div class="btn-group" role="group">
                                            <div class="dropdown dropdown-lg">
                                                <button type="button" class="button-more dropdown-toggle mine-color" data-toggle="dropdown" aria-expanded="false"><?= lang('more') ?> <span class="caret"></span></button>
                                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                    <form class="form-horizontal" method="GET" action="<?= isset($vendor_url) ? $vendor_url : LANG_URL ?>" id="bigger-search">
                                                        <input type="hidden" name="category" value="<?= isset($_GET['category']) ? htmlspecialchars($_GET['category']) : '' ?>">
                                                        <input type="hidden" name="in_stock" value="<?= isset($_GET['in_stock']) ? htmlspecialchars($_GET['in_stock']) : '' ?>">
                                                        <input type="hidden" name="search_in_title" value="<?= isset($_GET['search_in_title']) ? htmlspecialchars($_GET['search_in_title']) : '' ?>">
                                                        <input type="hidden" name="order_new" value="<?= isset($_GET['order_new']) ? htmlspecialchars($_GET['order_new']) : '' ?>">
                                                        <input type="hidden" name="order_price" value="<?= isset($_GET['order_price']) ? htmlspecialchars($_GET['order_price']) : '' ?>">
                                                        <input type="hidden" name="order_procurement" value="<?= isset($_GET['order_procurement']) ? htmlspecialchars($_GET['order_procurement']) : '' ?>">
                                                        <input type="hidden" name="brand_id" value="<?= isset($_GET['brand_id']) ? htmlspecialchars($_GET['brand_id']) : '' ?>">
                                                        <div class="form-group">
                                                            <label for="quantity_more"><?= lang('quantity_more_than') ?></label>
                                                            <input type="text" value="<?= isset($_GET['quantity_more']) ? htmlspecialchars($_GET['quantity_more']) : '' ?>" name="quantity_more" id="quantity_more" placeholder="<?= lang('type_a_number') ?>" class="form-control">
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="added_after"><?= lang('added_after') ?></label>
                                                                    <div class="input-group date">
                                                                        <input type="text" value="<?= isset($_GET['added_after']) ? htmlspecialchars($_GET['added_after']) : '' ?>" name="added_after" id="added_after" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="added_before"><?= lang('added_before') ?></label>
                                                                    <div class="input-group date">
                                                                        <input type="text" value="<?= isset($_GET['added_before']) ? htmlspecialchars($_GET['added_before']) : '' ?>" name="added_before" id="added_before" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="search_in_body"><?= lang('search_by_keyword_body') ?></label>
                                                            <input class="form-control" value="<?= isset($_GET['search_in_body']) ? htmlspecialchars($_GET['search_in_body']) : '' ?>" name="search_in_body" id="search_in_body" type="text" />
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="price_from"><?= lang('price_from') ?></label>
                                                                    <input type="text" value="<?= isset($_GET['price_from']) ? htmlspecialchars($_GET['price_from']) : '' ?>" name="price_from" id="price_from" class="form-control" placeholder="<?= lang('type_a_number') ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="price_to"><?= lang('price_to') ?></label>
                                                                    <input type="text" name="price_to" value="<?= isset($_GET['price_to']) ? htmlspecialchars($_GET['price_to']) : '' ?>" id="price_to" class="form-control" placeholder="<?= lang('type_a_number') ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-inner-search">
                                                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                                        </button>
                                                        <a class="btn btn-default" id="clear-form" href="javascript:void(0);"><?= lang('clear_form') ?></a>
                                                    </form>
                                                </div>
                                            </div>
                                            <button type="button" onclick="submitForm()" class="btn-go-search mine-color">
                                                <img src="<?= base_url('template/imgs/search-ico.png') ?>" alt="Search">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="basket-box">
                                    <table>
                                        <tr>
                                            <td>
                                                <img src="<?= base_url('template/imgs/green-basket.png') ?>" class="green-basket" alt="">
                                            </td>
                                            <td>
                                                <div class="center">
                                                    <h4><?= lang('your_basket') ?></h4>
                                                    <a href="<?= LANG_URL . '/checkout' ?>"><?= lang('checkout_top_header') ?></a> |
                                                    <a href="<?= LANG_URL . '/shopping-cart' ?>"><?= lang('shopping_cart_only') ?></a>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="shop-dropdown">
                                                    <li class="dropdown text-center">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> 
                                                            <div><span class="sumOfItems"><?= is_numeric($cartItems) && (int)$cartItems == 0 ? 0 : $sumOfItems ?></span> <?= lang('items') ?></div>
                                                            <img src="<?= base_url('template/imgs/shopping-cart-icon-515.png') ?>" alt="">
                                                            <span class="caret"></span>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-right dropdown-cart" role="menu">
                                                            <?= $load::getCartItems($cartItems) ?>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>        
                        </div>
                    </div>
                </div>
<!--
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <?php if ($navitext != null) { ?>
                                <a class="navbar-brand" href="<?= base_url() ?>"><?= $navitext ?></a>
                            <?php } ?>
                        </div>
                        <div id="navbar" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav" style="<?= $navitext == null ? 'margin-left:-15px;' : '' ?>">
                                <li<?= uri_string() == '' || uri_string() == MY_LANGUAGE_ABBR ? ' class="active"' : '' ?>><a href="<?= LANG_URL ?>"><?= lang('home') ?></a></li>
                                <?php
                                if (!empty($nonDynPages)) {
                                    foreach ($nonDynPages as $addonPage) {
                                        ?>
                                        <li<?= uri_string() == $addonPage || uri_string() == MY_LANGUAGE_ABBR . '/' . $addonPage ? ' class="active"' : '' ?>><a href="<?= LANG_URL . '/' . $addonPage ?>"><?= mb_ucfirst(lang($addonPage)) ?></a></li>
                                        <?php
                                    }
                                }
                                if (!empty($dynPages)) {
                                    foreach ($dynPages as $addonPage) {
                                        ?>
                                        <li<?= urldecode(uri_string()) == 'page/' . $addonPage['pname'] || uri_string() == MY_LANGUAGE_ABBR . '/' . 'page/' . $addonPage['pname'] ? ' class="active"' : ''
                                        ?>><a href="<?= LANG_URL . '/page/' . $addonPage['pname'] ?>"><?= mb_ucfirst($addonPage['lname']) ?></a></li>
                                            <?php
                                        }
                                    }
                                    ?>
                                <li<?= uri_string() == 'checkout' || uri_string() == MY_LANGUAGE_ABBR . '/checkout' ? ' class="active"' : '' ?>><a href="<?= LANG_URL . '/checkout' ?>"><?= lang('checkout') ?></a></li>
                                <li<?= uri_string() == 'shopping-cart' || uri_string() == MY_LANGUAGE_ABBR . '/shopping-cart' ? ' class="active"' : '' ?>><a href="<?= LANG_URL . '/shopping-cart' ?>"><?= lang('shopping_cart') ?></a></li>
                                <li<?= uri_string() == 'contacts' || uri_string() == MY_LANGUAGE_ABBR . '/contacts' ? ' class="active"' : '' ?>><a href="<?= LANG_URL . '/contacts' ?>"><?= lang('contacts') ?></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
-->












                            <div class="col-sm-6 col-md-5 col-lg-5">
                                <div class="input-group" id="adv-search">
                                    <input type="text" value="<?= isset($_GET['search_in_title']) ? $_GET['search_in_title'] : '' ?>" id="search_in_title" class="form-control" placeholder="<?= lang('search_by_keyword_title') ?>" />
                                    <div class="input-group-btn">
                                        <div class="btn-group" role="group">
                                            <div class="dropdown dropdown-lg">
                                                <button type="button" class="button-more dropdown-toggle mine-color" data-toggle="dropdown" aria-expanded="false"><?= lang('more') ?> <span class="caret"></span></button>
                                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                    <form class="form-horizontal" method="GET" action="<?= isset($vendor_url) ? $vendor_url : LANG_URL ?>" id="bigger-search">
                                                        <input type="hidden" name="category" value="<?= isset($_GET['category']) ? htmlspecialchars($_GET['category']) : '' ?>">
                                                        <input type="hidden" name="in_stock" value="<?= isset($_GET['in_stock']) ? htmlspecialchars($_GET['in_stock']) : '' ?>">
                                                        <input type="hidden" name="search_in_title" value="<?= isset($_GET['search_in_title']) ? htmlspecialchars($_GET['search_in_title']) : '' ?>">
                                                        <input type="hidden" name="order_new" value="<?= isset($_GET['order_new']) ? htmlspecialchars($_GET['order_new']) : '' ?>">
                                                        <input type="hidden" name="order_price" value="<?= isset($_GET['order_price']) ? htmlspecialchars($_GET['order_price']) : '' ?>">
                                                        <input type="hidden" name="order_procurement" value="<?= isset($_GET['order_procurement']) ? htmlspecialchars($_GET['order_procurement']) : '' ?>">
                                                        <input type="hidden" name="brand_id" value="<?= isset($_GET['brand_id']) ? htmlspecialchars($_GET['brand_id']) : '' ?>">
                                                        <div class="form-group">
                                                            <label for="quantity_more"><?= lang('quantity_more_than') ?></label>
                                                            <input type="text" value="<?= isset($_GET['quantity_more']) ? htmlspecialchars($_GET['quantity_more']) : '' ?>" name="quantity_more" id="quantity_more" placeholder="<?= lang('type_a_number') ?>" class="form-control">
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="added_after"><?= lang('added_after') ?></label>
                                                                    <div class="input-group date">
                                                                        <input type="text" value="<?= isset($_GET['added_after']) ? htmlspecialchars($_GET['added_after']) : '' ?>" name="added_after" id="added_after" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="added_before"><?= lang('added_before') ?></label>
                                                                    <div class="input-group date">
                                                                        <input type="text" value="<?= isset($_GET['added_before']) ? htmlspecialchars($_GET['added_before']) : '' ?>" name="added_before" id="added_before" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="search_in_body"><?= lang('search_by_keyword_body') ?></label>
                                                            <input class="form-control" value="<?= isset($_GET['search_in_body']) ? htmlspecialchars($_GET['search_in_body']) : '' ?>" name="search_in_body" id="search_in_body" type="text" />
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="price_from"><?= lang('price_from') ?></label>
                                                                    <input type="text" value="<?= isset($_GET['price_from']) ? htmlspecialchars($_GET['price_from']) : '' ?>" name="price_from" id="price_from" class="form-control" placeholder="<?= lang('type_a_number') ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="price_to"><?= lang('price_to') ?></label>
                                                                    <input type="text" name="price_to" value="<?= isset($_GET['price_to']) ? htmlspecialchars($_GET['price_to']) : '' ?>" id="price_to" class="form-control" placeholder="<?= lang('type_a_number') ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-inner-search">
                                                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                                        </button>
                                                        <a class="btn btn-default" id="clear-form" href="javascript:void(0);"><?= lang('clear_form') ?></a>
                                                    </form>
                                                </div>
                                            </div>
                                            <button type="button" onclick="submitForm()" class="btn-go-search mine-color">
                                                <img src="<?= base_url('template/imgs/search-ico.png') ?>" alt="Search">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>








        <div id="wrapper">
            <div id="content">
                <?php if ($multiVendor == 1) { ?>
                    <div id="top-user-panel">
                        <div class="container">
                            <a href="<?= LANG_URL . '/vendor/register' ?>" class="btn btn-default"><?= lang('register_me') ?></a>
                            <form class="form-inline" method="POST" action="<?= LANG_URL . '/vendor/login' ?>">
                                <div class="form-group">
                                    <input type="email" name="u_email" class="form-control" placeholder="<?= lang('email') ?>">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="u_password" class="form-control" placeholder="<?= lang('password') ?>">
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember_me"><?= lang('remember_me') ?></label>
                                </div>
                                <button type="submit" name="login" class="btn btn-default"><?= lang('u_login') ?></button>
                            </form> 
                        </div>
                    </div>
                <?php } ?>
</div></div>

<br>





<!--TEST Vendor Sign UP Form Modal-->
        <div class="cd-user-modal" style="z-index: 100">
            <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
      <ul class="cd-switcher">
        <li><a href="#0">Vendor SignIn</a></li>
        <li><a href="#0">Vendor Register</a></li>
      </ul>
            <div id="content">
                <?php if ($multiVendor == 1) { ?>
                    <div id="top-user-panel">
                        <div class="container">
                            <h1>Signup to become a FPVLife Seller!</h1><br>
                            <form class="form-inline" method="POST" action="<?= LANG_URL . '/vendor/login' ?>"><br>
                                <div class="form-group">
                                    <input type="email" name="u_email" class="form-control cd-email" placeholder="<?= lang('email') ?>">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="u_password" class="form-control" placeholder="<?= lang('password') ?>">
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember_me"><?= lang('remember_me') ?></label>
                                </div>
                                <button type="submit" name="login" class="btn btn-default"><?= lang('u_login') ?></button>
                            </form> 
                        </div>
                    </div>
                    <div class="cd-signup"><a href="<?= LANG_URL . '/vendor/register' ?>" class="btn btn-default"><?= lang('register_me') ?></a></div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>







<div class="hide-on-small">
<?php
if (count($sliderProducts) > 0) {
    ?>
    <div id="home-slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            $i = 0;
            while ($i < count($sliderProducts)) {
                ?>
                <li data-target="#home-slider" data-slide-to="0" class="<?= $i == 0 ? 'active' : '' ?>"></li>
                <?php
                $i++;
            }
            ?>
        </ol>
        <div class="container">
            <div class="carousel-inner" role="listbox">
                <?php
                $i = 0;
                foreach ($sliderProducts as $article) {
                    ?>
                    <div class="item <?= $i == 0 ? 'active' : '' ?>">
                        <div class="row">
                            <div class="col-sm-6 left-side">
                                <a href="<?= LANG_URL . '/' . $article['url'] ?>">
                                    <img src="<?= base_url('attachments/shop_images/' . $article['image']) ?>" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="col-sm-6 right-side">
                                <h3 class="text-right">
                                    <a href="<?= LANG_URL . '/' . $article['url'] ?>">
                                        <?= character_limiter($article['title'], 100) ?>
                                    </a>
                                </h3>
                                <div class="description text-right">
                                    <?= character_limiter(strip_tags($article['basic_description']), 150) ?>
                                </div>
                                <div class="price text-right"><?= $article['price'] . CURRENCY ?></div>
                                <div class="xs-center">
                                    <?php if ($hideBuyButtonsOfOutOfStock == 0 || (int)$article['quantity'] > 0) { ?>
                                    <a class="option add-to-cart" data-goto="<?= base_url('checkout') ?>" href="javascript:void(0);" data-id="<?= $article['id'] ?>">
                                        <img src="<?= base_url('template/imgs/shopping-cart-icon-515.png') ?>" alt="">
                                        <?= lang('buy_now') ?>
                                    </a>
                                    <?php } ?>
                                    <a class="option right-5" href="<?= LANG_URL . '/' . $article['url'] ?>">
                                        <img src="<?= base_url('template/imgs/info.png') ?>" alt="">
                                        <?= lang('details') ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $i++;
                }
                ?>
            </div>
        </div>
        <a class="left carousel-control" href="#home-slider" role="button" data-slide="prev"></a>
        <a class="right carousel-control" href="#home-slider" role="button" data-slide="next"></a>
    </div>
<?php } ?>
<div class="" id="home-page">
    <div class="row">
        <div class="col-md-3">
            <div class="filter-sidebar">
                <div class="title">
                    <span><?= lang('categories') ?></span>
                    <?php if (isset($_GET['category']) && $_GET['category'] != '') { ?>
                        <a href="javascript:void(0);" class="clear-filter" data-type-clear="category" data-toggle="tooltip" data-placement="right" title="<?= lang('clear_the_filter') ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
                    <?php } ?>
                </div>
                <a href="javascript:void(0)" id="show-xs-nav" class="visible-xs visible-sm">
                    <span class="show-sp"><?= lang('showXsNav') ?><i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></span>
                    <span class="hidde-sp"><?= lang('hideXsNav') ?><i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i></span>
                </a>
            </div>
            <?php if ($showBrands == 1) { ?>
                <div class="filter-sidebar">
                    <div class="title">
                        <span><?= lang('brands') ?></span>
                        <?php if (isset($_GET['brand_id']) && $_GET['brand_id'] != '') { ?>
                            <a href="javascript:void(0);" class="clear-filter" data-type-clear="brand_id" data-toggle="tooltip" data-placement="right" title="<?= lang('clear_the_filter') ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
                        <?php } ?>
                    </div>
                    <ul>
                        <?php foreach ($brands as $brand) { ?>
                            <li>
                                <i class="fa fa-chevron-right" aria-hidden="true"></i> <a href="javascript:void(0);" data-brand-id="<?= $brand['id'] ?>" class="brand <?= isset($_GET['brand_id']) && $_GET['brand_id'] == $brand['id'] ? 'selected' : '' ?>"><?= $brand['name'] ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } if ($showOutOfStock == 1) { ?>
                <div class="filter-sidebar">
                    <div class="title">
                        <span><?= lang('store') ?></span>
                        <?php if (isset($_GET['in_stock']) && $_GET['in_stock'] != '') { ?>
                            <a href="javascript:void(0);" class="clear-filter" data-type-clear="in_stock" data-toggle="tooltip" data-placement="right" title="<?= lang('clear_the_filter') ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
                        <?php } ?>
                    </div>
                    <ul>
                        <li>
                            <a href="javascript:void(0);" data-in-stock="1" class="in-stock <?= isset($_GET['in_stock']) && $_GET['in_stock'] == '1' ? 'selected' : '' ?>"><?= lang('in_stock') ?> (<?= $countQuantities['in_stock'] ?>)</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-in-stock="0" class="in-stock <?= isset($_GET['in_stock']) && $_GET['in_stock'] == '0' ? 'selected' : '' ?>"><?= lang('out_of_stock') ?> (<?= $countQuantities['out_of_stock'] ?>)</a>
                        </li>
                    </ul>
                </div>
            <?php } if ($shippingOrder != 0 && $shippingOrder != null) { ?>
                <div class="filter-sidebar">
                    <div class="title">
                        <span><?= lang('freeShippingHeader') ?></span>
                    </div>
                    <div class="oaerror info">
                        <strong><?= lang('promo') ?></strong> - <?= str_replace(array('%price%', '%currency%'), array($shippingOrder, CURRENCY), lang('freeShipping')) ?>!
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="col-md-9 eqHeight" id="products-side">
            <div class="alone title">
                <span><?= lang('products') ?></span>
            </div>
            <div class="product-sort">
                <div class="row">
                    <div class="ord col-sm-4">
                        <div class="form-group">
                            <select class="selectpicker order form-control" data-order-to="order_new">
                                <option <?= isset($_GET['order_new']) && $_GET['order_new'] == "desc" ? 'selected' : '' ?> <?= !isset($_GET['order_new']) || $_GET['order_new'] == "" ? 'selected' : '' ?> value="desc"><?= lang('new') ?> </option>
                                <option <?= isset($_GET['order_new']) && $_GET['order_new'] == "asc" ? 'selected' : '' ?> value="asc"><?= lang('old') ?> </option>
                            </select>
                        </div>
                    </div>
                    <div class="ord col-sm-4">
                        <div class="form-group">
                            <select class="selectpicker order form-control" data-order-to="order_price" title="<?= lang('price_title') ?>..">
                                <option label="<?= lang('not_selected') ?>"></option>
                                <option <?= isset($_GET['order_price']) && $_GET['order_price'] == "asc" ? 'selected' : '' ?> value="asc"><?= lang('price_low') ?> </option>
                                <option <?= isset($_GET['order_price']) && $_GET['order_price'] == "desc" ? 'selected' : '' ?> value="desc"><?= lang('price_high') ?> </option>
                            </select>
                        </div>
                    </div>
                    <div class="ord col-sm-4">
                        <div class="form-group">
                            <select class="selectpicker order form-control" data-order-to="order_procurement" title="<?= lang('procurement_title') ?>..">
                                <option label="<?= lang('not_selected') ?>"></option>
                                <option <?= isset($_GET['order_procurement']) && $_GET['order_procurement'] == "desc" ? 'selected' : '' ?> value="desc"><?= lang('procurement_desc') ?> </option>
                                <option <?= isset($_GET['order_procurement']) && $_GET['order_procurement'] == "asc" ? 'selected' : '' ?> value="asc"><?= lang('procurement_asc') ?> </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
            <?php
            if (!empty($products)) {
                $load::getProducts($products, 'card col-sm-4 col-md-3', false);
            } else {
                ?>
                <script>
                    $(document).ready(function () {
                        ShowNotificator('alert-info', '<?= lang('no_results') ?>');
                    });
                </script>
                <?php
            }
            ?>
            </div>
        </div>
    </div>
</div>

<!--Hidden on small-->
</div>
<!--//END Desktop Product Grid with sidebar-->






<!--TESTING Product Display Cards-->
<div class="container-fp">
        <?php
            if (!empty($products)) {
                $load::getProducts($products, 'card', false);
            } else {
                ?>
                <script>
                    $(document).ready(function () {
                        ShowNotificator('alert-info', '<?= lang('no_results') ?>');
                    });
                </script>
                <?php
            }
        ?>
</div>




<!--Codepen Product Swipe Slider-->
<section class="slider hide-on-desktop">
            <?php
            if (!empty($products)) {
                $load::getProducts($products, 'col-sm-4 col-md-3', false);
            } else {
                ?>
                <script type="text/javascript">
                    $(document).ready(function () {
                        ShowNotificator('alert-info', '<?= lang('no_results') ?>');
                    });
                </script>
                <?php
            }
            ?>
</section>
<!--//END Codepen Product Swiper//-->
<br>


<!--Codepen Product Slider-->
<script type="text/javascript">
function createSlick(){  

    $(".slider").not('.slick-initialized').slick({
        centerMode: true,
        autoplay: true,
        dots: true,
    
        slidesToShow: 3,
        responsive: [{ 
            breakpoint: 768,
            settings: {
                dots: false,
                arrows: false,
                infinite: false,
                slidesToShow: 1,
                slidesToScroll: 1
                } 
            }]
        });
    }
createSlick();
//Will not throw error, even if called multiple times.
$(window).on( 'resize', createSlick );
</script>