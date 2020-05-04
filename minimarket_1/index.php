<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fresh Food</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="e-commerce site well design with responsive view." />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <link href="assets/fonts/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/fonts.css" rel="stylesheet">
    <link href="assets/css/stylesheet.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="assets/css/owl.transitions.css" type="text/css" rel="stylesheet" media="screen" />

</head>

<body>
    <div class="preloader loader" style="display: block; background:#f2f2f2;"> <img src="image/loader.gif" alt="#" /></div>
    <?php include_once 'include/header.php'; ?>
    <?php include_once 'include/nav.php'; ?>
    <?php include_once 'include/main-banner.php'; ?>
    <div class="container">
        <div class="row">
            <div class="cms_banner ">
                <div class="col-md-4 cms-banner-left">
                    <a href="#"><img alt="#" src="image/subbanner1.jpg"></a>
                </div>
                <div class="col-md-4 cms-banner-middle">
                    <div class="md1">
                        <a href="#"> <img alt="#" src="image/subbanner2.jpg"></a>
                    </div>
                    <div class="md2">
                        <a href="#"> <img alt="#" src="image/subbanner2-1.jpg"></a>
                    </div>
                </div>
                <div class="col-md-4 cms-banner-right">
                    <a href="#"><img alt="#" src="image/subbanner3.jpg"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="content" class="col-sm-12">
                <div class="customtab">
                    <div id="tabs" class="customtab-wrapper">
                        <ul class='customtab-inner'>
                            <li class='tab'><a href="#tab-latest">Latest Product</a></li>
                            <li class='tab'><a href="#tab-special">Special Product</a></li>
                            <li class='tab'><a href="#tab-bestseller">Bestseller Items</a></li>
                        </ul>
                    </div>
                    <div id="tab-latest" class="tab-content">
                        <div class="box">
                            <div id="latest-slidertab" class="row owl-carousel product-slider">
                                <div class="item">
                                    <div class="product-thumb transition">
                                        <div class="image product-imageblock">
                                            <a href="detalle_producto"><img src="image/product1.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                            <div class="button-group">
                                                <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                                <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                        <div class="caption product-detail">
                                            <h4 class="product-name"><a href="#" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                            <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>                                                </div>
                                        </div>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-thumb transition">
                                        <div class="image product-imageblock">
                                            <a href="detalle_producto"><img src="image/product2.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                            <div class="button-group">
                                                <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                                <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                        <div class="caption product-detail">
                                            <h4 class="product-name"><a href="#" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                            <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>                                                </div>
                                        </div>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-thumb transition">
                                        <div class="image product-imageblock">
                                            <a href="detalle_producto"><img src="image/product3.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                            <div class="button-group">
                                                <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                                <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                        <div class="caption product-detail">
                                            <h4 class="product-name"><a href="#" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                            <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>                                                </div>
                                        </div>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-thumb transition">
                                        <div class="image product-imageblock">
                                            <a href="detalle_producto"><img src="image/product4.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                            <div class="button-group">
                                                <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                                <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                        <div class="caption product-detail">
                                            <h4 class="product-name"><a href="#" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                            <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>                                                </div>
                                        </div>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-thumb transition">
                                        <div class="image product-imageblock">
                                            <a href="detalle_producto"><img src="image/product5.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                            <div class="button-group">
                                                <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                                <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                        <div class="caption product-detail">
                                            <h4 class="product-name"><a href="#" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                            <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>                                                </div>
                                        </div>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-thumb transition">
                                        <div class="image product-imageblock">
                                            <a href="detalle_producto"><img src="image/product6.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                            <div class="button-group">
                                                <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                                <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                        <div class="caption product-detail">
                                            <h4 class="product-name"><a href="#" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                            <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>                                                </div>
                                        </div>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tab-latest-->
                    <div id="tab-special" class="tab-content">
                        <div class="box">
                            <div id="special-slidertab" class="row owl-carousel product-slider">
                                <div class="item">
                                    <div class="product-thumb transition">
                                        <div class="image product-imageblock">
                                            <a href="detalle_producto"> <img src="image/product4.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                            <div class="button-group">
                                                <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                                <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                        <div class="caption product-detail">
                                            <h4 class="product-name"><a href="detalle_producto" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                            <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                        </div>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-thumb transition">
                                        <div class="image product-imageblock">
                                            <a href="detalle_producto"> <img src="image/product5.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                            <div class="button-group">
                                                <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                                <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                        <div class="caption product-detail">
                                            <h4 class="product-name"><a href="detalle_producto" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                            <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                        </div>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-thumb transition">
                                        <div class="image product-imageblock">
                                            <a href="detalle_producto"> <img src="image/product5.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                            <div class="button-group">
                                                <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                                <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                        <div class="caption product-detail">
                                            <h4 class="product-name"><a href="detalle_producto" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                            <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                        </div>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-thumb transition">
                                        <div class="image product-imageblock">
                                            <a href="detalle_producto"> <img src="image/product6.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                            <div class="button-group">
                                                <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                                <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                        <div class="caption product-detail">
                                            <h4 class="product-name"><a href="detalle_producto" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                            <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                        </div>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-thumb transition">
                                        <div class="image product-imageblock">
                                            <a href="detalle_producto"> <img src="image/product7.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                            <div class="button-group">
                                                <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                                <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                        <div class="caption product-detail">
                                            <h4 class="product-name"><a href="detalle_producto" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                            <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                        </div>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-thumb transition">
                                        <div class="image product-imageblock">
                                            <a href="#"> <img src="image/product6.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                            <div class="button-group">
                                                <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                                <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                        <div class="caption product-detail">
                                            <h4 class="product-name"><a href="detalle_producto" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                            <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                        </div>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tab-special-->
                    <div id="tab-bestseller" class="tab-content">
                        <div class="box">
                            <div id="bestseller-slidertab" class="row owl-carousel product-slider">
                                <div class="item">
                                    <div class="product-thumb transition">
                                        <div class="image product-imageblock">
                                            <a href="#"> <img src="image/product7.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                            <div class="button-group">
                                                <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                                <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                        <div class="caption product-detail">
                                            <h4 class="product-name"><a href="detalle_producto" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                            <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                        </div>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-thumb transition">
                                        <div class="image product-imageblock">
                                            <a href="detalle_producto"> <img src="image/product8.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                            <div class="button-group">
                                                <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                                <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                        <div class="caption product-detail">
                                            <h4 class="product-name"><a href="detalle_producto" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                            <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                        </div>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-thumb transition">
                                        <div class="image product-imageblock">
                                            <a href="detalle_producto"> <img src="image/product1.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                            <div class="button-group">
                                                <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                                <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                        <div class="caption product-detail">
                                            <h4 class="product-name"><a href="detalle_producto" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                            <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                        </div>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-thumb transition">
                                        <div class="image product-imageblock">
                                            <a href="detalle_producto"> <img src="image/product2.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                            <div class="button-group">
                                                <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                                <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                        <div class="caption product-detail">
                                            <h4 class="product-name"><a href="detalle_producto" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                            <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                        </div>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-thumb transition">
                                        <div class="image product-imageblock">
                                            <a href="detalle_producto"> <img src="image/product3.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                            <div class="button-group">
                                                <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                                <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                        <div class="caption product-detail">
                                            <h4 class="product-name"><a href="detalle_producto" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                            <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                        </div>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="productblock-title">Weekly Top Products</h3>
                    <div class="box">
                        <div id="Weekly-slider" class="row owl-carousel product-slider">
                            <div class="item product-slider-item">
                                <div class="product-thumb transition">
                                    <div class="image product-imageblock">
                                        <a href="detalle_producto"> <img src="image/product4.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                    <div class="caption product-detail">
                                        <h4 class="product-name"><a href="detalle_producto" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                        <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="item product-slider-item">
                                <div class="product-thumb transition">
                                    <div class="image product-imageblock">
                                        <a href="detalle_producto"> <img src="image/product5.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                    <div class="caption product-detail">
                                        <h4 class="product-name"><a href="detalle_producto" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                        <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="item product-slider-item">
                                <div class="product-thumb transition">
                                    <div class="image product-imageblock">
                                        <a href="detalle_producto"> <img src="image/product6.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                    <div class="caption product-detail">
                                        <h4 class="product-name"><a href="detalle_producto" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                        <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="item product-slider-item">
                                <div class="product-thumb transition">
                                    <div class="image product-imageblock">
                                        <a href="#"> <img src="image/product7.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                    <div class="caption product-detail">
                                        <h4 class="product-name"><a href="detalle_producto" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                        <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="item product-slider-item">
                                <div class="product-thumb transition">
                                    <div class="image product-imageblock">
                                        <a href="#"> <img src="image/product8.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                    <div class="caption product-detail">
                                        <h4 class="product-name"><a href="detalle_producto" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                        <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="item product-slider-item">
                                <div class="product-thumb transition">
                                    <div class="image product-imageblock">
                                        <a href="#"> <img src="image/product1.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                    <div class="caption product-detail">
                                        <h4 class="product-name"><a href="detalle_producto" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                        <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- div parallax -->
                <div class="row">
                    <div class="cms_banner">
                        <div class="col-md-4 cms-banner-left">
                            <a href="#"><img alt="#" src="image/subbanner5.jpg"></a>
                        </div>
                        <div class="col-md-4 cms-banner-middle">
                            <a href="#"><img alt="#" src="image/subbanner6.jpg"></a>
                        </div>
                        <div class="col-md-4 cms-banner-right">
                            <a href="#"><img alt="#" src="image/subbanner7.jpg"></a>
                        </div>
                    </div>
                </div>
                <div id="subbanner4" class="banner">
                    <div class="item">
                        <a href="#"><img src="image/subbanner4.jpg" alt="Sub Banner4" class="img-responsive" /></a>
                    </div>
                </div>
                <h3 class="productblock-title">Featured Products</h3>
                <div class="box">
                    <div id="feature-slider" class="row owl-carousel product-slider">
                        <div class="item product-slider-item">
                            <div class="product-thumb transition">
                                <div class="image product-imageblock">
                                    <a href="detalle_producto"> <img src="image/product4.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                                <div class="caption product-detail">
                                    <h4 class="product-name"><a href="detalle_producto" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                </div>
                                <div class="button-group">
                                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                    <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="item product-slider-item">
                            <div class="product-thumb transition">
                                <div class="image product-imageblock">
                                    <a href="detalle_producto"> <img src="image/product5.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                                <div class="caption product-detail">
                                    <h4 class="product-name"><a href="detalle_producto" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                </div>
                                <div class="button-group">
                                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                    <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="item product-slider-item">
                            <div class="product-thumb transition">
                                <div class="image product-imageblock">
                                    <a href="detalle_producto"> <img src="image/product6.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                                <div class="caption product-detail">
                                    <h4 class="product-name"><a href="detalle_producto" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                </div>
                                <div class="button-group">
                                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                    <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="item product-slider-item">
                            <div class="product-thumb transition">
                                <div class="image product-imageblock">
                                    <a href="#"> <img src="image/product7.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                                <div class="caption product-detail">
                                    <h4 class="product-name"><a href="detalle_producto" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                </div>
                                <div class="button-group">
                                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                    <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="item product-slider-item">
                            <div class="product-thumb transition">
                                <div class="image product-imageblock">
                                    <a href="#"> <img src="image/product8.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                                <div class="caption product-detail">
                                    <h4 class="product-name"><a href="detalle_producto" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                </div>
                                <div class="button-group">
                                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                    <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="item product-slider-item">
                            <div class="product-thumb transition">
                                <div class="image product-imageblock">
                                    <a href="#"> <img src="image/product1.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                                <div class="caption product-detail">
                                    <h4 class="product-name"><a href="detalle_producto" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                </div>
                                <div class="button-group">
                                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                    <button type="button" class="addtocart-btn">Añadir al carrito</button>
                                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- div blog -->
                <br><br><br>
                <div id="brand_carouse" class="owl-carousel brand-logo">
                    <div class="item text-center">
                        <a href="#"><img src="image/brand1.png" alt="Disney" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="image/brand2.png" alt="Dell" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="image/brand3.png" alt="Harley" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="image/brand4.png" alt="Canon" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="image/brand5.png" alt="Canon" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="image/brand6.png" alt="Canon" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="image/brand7.png" alt="Canon" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="image/brand8.png" alt="Canon" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="image/brand9.png" alt="Canon" class="img-responsive" /></a>
                    </div>
                    <div class="item text-center">
                        <a href="#"><img src="image/brand5.png" alt="Canon" class="img-responsive" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'include/footer.php'; ?>

    <script src="assets/js/jquery-2.1.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jstree.min.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/js/common.js"></script>
    <script src="assets/js/global.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/parally.js"></script>
    <script>
        $('.parallax').parally({
            offset: -40
        });
    </script>
</body>

</html>