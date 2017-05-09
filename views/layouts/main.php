<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\PublicAsset;

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE HTML>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!--=============== fonts  ===============-->

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,700' rel='stylesheet' type='text/css'>



    <!--=============== favicons ===============-->

    <link rel="shortcut icon" href="/web/images/favicon.ico">

</head>

<body>
<?php $this->beginBody() ?>

<div id="main">

    <div class="wrapper">

        <!--=============== intro slide ===============-->

        <div id="intro">

            <div id="topSlide">
                <div id="slides">
                    <ul class="slides-container">

                        <!-- Slide 1 -->

                        <li>
                            <div class="raster"></div>
                            <div class="container">
                                <div class="patern clear"></div>
                                <h3>Responsive one page portfolio</h3>
                                <h1 class="white">We are <span>Pompey</span></h1>
                                <div class="patern clear"></div>

                            </div>

                            <div style="background-image: url('/web/images/bg/1.jpg');" class="slides-big-img"></div>
                        </li>

                        <!-- Slide 2 -->

                        <li>
                            <div class="raster"></div>
                            <div class="container">
                                <div class="patern clear"></div>
                                <h3>Personal or Team</h3>
                                <h1 class="white"><span>Two</span> Versions</h1>
                                <div class="patern clear"></div>
                            </div>

                            <div style="background-image: url('/web/images/bg/2.jpg');" class="slides-big-img"></div>
                        </li>

                        <!-- Slide 3 -->

                        <li>
                            <div class="raster"></div>
                            <div class="container ">
                                <div class="patern clear"></div>
                                <h3>Four variants</h3>
                                <h1 class="white">Slider <span>or</span> Video </h1>
                                <div class="patern clear"></div>
                            </div>

                            <div style="background-image: url('/web/images/bg/3.jpg');" class="slides-big-img"></div>
                        </li>
                    </ul>

                    <div class="slides-navigation">
                        <a href="#" class="prev"><i class="fa fa-long-arrow-left fa-2x"></i></a>
                        <a href="#" class="next"><i class="fa fa-long-arrow-right fa-2x"></i></a>
                    </div>

                </div>
                <a href="#portfolio" class="start transition"><i class="fa fa-angle-down"></i></a>

            </div>

        </div><!--===============intro end ===============-->



        <div class="sections">
            <!--=============== navigation ===============-->

            <div class="navigation">


                <div class="nav-button transition">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="inner">
                    <a href="#intro" class="logo"><img src="/web/images/logotip.png"   alt="" title=""></a>

                    <div class="link-holder" id="nav">
                        <ul>
                            <li><a href="#catalog" class="Menu">Каталог компаний</a></li>
                            <li><a href="#catalog" class="Menu">Акции</a></li>
                            <li><a href="#catalog" class="Menu">Афиша</a></li>
                            <li><a href="#catalog" class="Menu">Вакансии</a></li>
                            <li><a href="#catalog" class="Menu">Объявления</a></li>
                            <li><a href="#catalog" class="Menu">Новости</a></li>
                            <li><a href="#contacts" class="scroll-link">Contact</a></li>
<!--                            <li><a href="blog.html">Blog</a></li>-->
                        </ul>
                    </div>

                </div>


            </div><!--=============== navigation end ===============-->

        </div>

        <!--=============== section about ===============-->

<!--        <div id="about" class="sections">-->
<!---->
<!--            <div class="content">-->
<!--                <div class="container">-->
<!--                    <h3 class="title">Welcome to Pompey</h3>-->
<!--                    <div class="small-separator"></div>-->
<!--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dictum elit et ligula porta lobortis. Aliquam imperdiet sapien quis quam tincidunt pellentesque. Aliquam auctor eget velit et pellentesque. Mauris ornare volutpat est ac elementum. Morbi fermentum massa non cursus laoreet.</p>-->
<!---->
<!--                    <a href="#portfolio" class="scroll-to-work transition">View  our work</a>-->
<!---->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div><!--=============== section about end ===============-->

<!--        <!--=============== section services ===============-->
<!---->
<!--        <div id="services" class="sections">-->
<!---->
<!--            <div class="content">-->
<!--                <div class="container">-->
<!---->
<!--                    <h3 class="title">Services</h3>-->
<!--                    <div class="small-separator"></div>-->
<!---->
<!--                    <div class="services-slider">-->
<!---->
<!--                        <ul class="slides">-->
<!---->
<!--                            <!-- fist-slide -->
<!---->
<!--                            <li>-->
<!---->
<!--                                <p class="blur transition2 animaper"> " Nulla tincidunt interdum leo. Cras molestie eros velit, vitae malesuada mauris tincidunt ut. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis mollis nec leo at viverra. Ut quis malesuada urna. Nunc cursus aliquet est. " </p>-->
<!---->
<!--                            </li>-->
<!---->
<!--                            <!-- second-slide -->
<!---->
<!--                            <li>-->
<!---->
<!--                                <p class="transition">" Aenean at lacus nec odio condimentum egestas. Pellentesque et pellentesque orci. Donec in commodo sapien. Donec id ante odio. Sed ut mollis nisl. Duis eu dapibus leo. Etiam nec nisl non mi aliquam laoreet sed nec nulla. Integer ultrices laoreet urna, et congue magna tempus nec. "</p>-->
<!---->
<!--                            </li>-->
<!---->
<!--                            <!-- third-slide -->
<!---->
<!--                            <li>-->
<!---->
<!--                                <p class="transition">" Vestibulum accumsan viverra facilisis. Sed at euismod elit, eu convallis felis. Pellentesque pretium tellus non nisl placerat posuere. Integer velit dolor, porta ut pretium vitae, adipiscing vitae elit. Maecenas condimentum justo mattis condimentum iaculis."</p>-->
<!---->
<!--                            </li>-->
<!---->
<!---->
<!--                        </ul>-->
<!---->
<!--                    </div>-->
<!---->
<!--                    <div class="clear"></div>-->
<!---->
<!--                    <div class="row-services">-->
<!---->
<!--                        <a name="0" class="animbox  transition">-->
<!--                            <i class="fa fa-camera"></i>-->
<!--                            <span class="services-name">Photo</span>-->
<!--                            <span class="services-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare sem sit.</span>-->
<!--                        </a>-->
<!--                        <a name="1" class="animbox act-ser transition">-->
<!--                            <i class="fa fa-rocket"></i>-->
<!--                            <span class="services-name">Seo</span>-->
<!--                            <span class="services-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare sem sit. </span>-->
<!--                        </a>-->
<!--                        <a name="2"  class="animbox transition">-->
<!--                            <i class="fa fa-desktop"></i>-->
<!--                            <span class="services-name">Design</span>-->
<!--                            <span class="services-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare sem sit. </span>-->
<!--                        </a>-->
<!---->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div><!--=============== section services end ===============-->

        <!--=============== Категории ===============-->


        <div id="portfolio" class="sections">

            <div class="content">

                <div class="container">

                    <h3 class="title" style="color:#fff">Выберите категорию</h3>
                    <div class="small-separator"></div>

                    <!-- portfolio filters -->

                    <div id="options" class="clear">

                        <ul id="filters" class="option-set" data-option-key="filter">

                            <li class="filter" data-filter="category_1">Авто, мото </li>
                            <li class="filter" data-filter="category_1">Бизнес и финансы </li>
                            <li class="filter" data-filter="category_1">Бытовой сервис, ремонт </li>
                            <li class="filter" data-filter="category_1">Гостиницы, туризм </li>
                            <li class="filter" data-filter="category_1">Государство, общество </li>
                            <li class="filter" data-filter="category_1">Промышленность </li>
                            <li class="filter" data-filter="category_1">Здоровье и красота </li>
                            <li class="filter" data-filter="category_1">Кафе, бары, рестораны </li>
                            <li class="filter" data-filter="category_1">Культура и искусство </li>
                            <li class="filter" data-filter="category_1">Магазины </li>
                            <li class="filter" data-filter="category_1">Образование, курсы </li>
                            <li class="filter" data-filter="category_1">Недвижимость </li>
                            <li class="filter" data-filter="category_1">Полезные телефоны </li>
                            <li class="filter" data-filter="category_1">Развлечения и досуг </li>
                            <li class="filter" data-filter="category_1">Строительство и ремонт </li>
                            <li class="filter" data-filter="category_1">Такси и перевозки </li>
                            <li class="filter" data-filter="category_1">Услуги </li>
                            <li class="filter" data-filter="category_1">Реклама и интернет </li>

                        </ul>

                    </div>

<!--                    <!-- ajax-section -->
<!---->
<!--                    <div class="clear"></div>-->
<!--                    <div id="ajax-section">-->
<!--                        <div id="loader"></div>-->
<!--                        <div id="ajax-content-outer">-->
<!--                            <div id="ajax-content-inner"></div>-->
<!--                        </div>-->
<!--                        <div id="project-navigation">-->
<!--                            <ul>-->
<!--                                <li id="prevProject"><a href="#"><i class="fa fa-angle-left"></i> </a></li>-->
<!--                                <li id="nextProject"><a href="#"><i class="fa fa-angle-right"></i> </a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <div id="closeProject">-->
<!--                            <a href="#/"><i class="fa fa-times"></i></a>-->
<!--                        </div>-->
<!--                    </div><!-- ajax-section end -->
<!---->
<!--                    <!-- Projects links -->
<!---->
<!--                    <div class="aih">-->
<!--                        <div id="scroll-el"></div>-->
<!---->
<!--                        <ul id="folio_container">-->
<!---->
<!--                            <!-- 1 project - ajax -->
<!---->
<!--                            <li class="box grid-2  mix category_1 mix_all">-->
<!--                                <a href="#!projects/project-1.html" class="transition ajax-project">-->
<!--                                    <img src="/web/images/folio/thumbs/1.jpg" class="respimg" alt="" title="">-->
<!--                                    <span class="folio-overlay"></span>-->
<!--                                    <div class="folio-name grid1 clear">-->
<!--                                        <div class="folio-icon"><i class="fa fa-briefcase"></i></div>-->
<!---->
<!--                                        <h4>Vestibulum</h4>-->
<!--                                        <h6>ajax page</h6>-->
<!---->
<!--                                    </div>-->
<!--                                </a>-->
<!---->
<!--                            </li>-->
<!---->
<!--                            <!-- 2 project - ajax -->
<!---->
<!--                            <li class="box grid-2 mix category_4 mix_all">-->
<!--                                <a href="#!projects/project-2.html" class="transition ajax-project">-->
<!--                                    <img src="/web/images/folio/thumbs/1.jpg" class="respimg" alt="" title="">-->
<!--                                    <span class="folio-overlay"></span>-->
<!--                                    <div class="folio-name  clear">-->
<!--                                        <div class="folio-icon"><i class="fa fa-film"></i></div>-->
<!---->
<!--                                        <h4>Phasellus</h4>-->
<!--                                        <h6>ajax page</h6>-->
<!---->
<!--                                    </div>-->
<!--                                </a>-->
<!--                            </li>-->
<!---->
<!--                            <!-- 3 project - single page -->
<!---->
<!--                            <li class="box grid-2  mix category_3 mix_all">-->
<!--                                <a href="single-portfolio.html" class="transition">-->
<!--                                    <img src="/web/images/folio/thumbs/1.jpg" class="respimg" alt="" title="">-->
<!--                                    <span class="folio-overlay"></span>-->
<!--                                    <div class="folio-name  clear">-->
<!--                                        <div class="folio-icon"><i class="fa fa-desktop"></i></div>-->
<!--                                        <h4>Mauris</h4>-->
<!--                                        <h6>single page</h6>-->
<!--                                    </div>-->
<!--                                </a>-->
<!--                            </li>-->
<!---->
<!--                            <!-- 4 project - youtube  video -->
<!---->
<!--                            <li class="box grid-2  mix category_4 category_3 mix_all">-->
<!--                                <a href="http://www.youtube.com/watch?v=pBJEislqmkU" class="transition popup-youtube">-->
<!--                                    <img src="/web/images/folio/thumbs/1.jpg" class="respimg" alt="" title="">-->
<!--                                    <span class="folio-overlay"></span>-->
<!--                                    <div class="folio-name clear">-->
<!--                                        <div class="folio-icon"><i class="fa fa-film"></i></div>-->
<!---->
<!--                                        <h4>Vivamus gravida</h4>-->
<!--                                        <h6>youtube  video</h6>-->
<!---->
<!--                                    </div>-->
<!--                                </a>-->
<!--                            </li>-->
<!---->
<!--                            <!-- 5 project - single image -->
<!---->
<!--                            <li class="box grid-2 mix category_2 mix_all">-->
<!--                                <a href="/web/images/folio/thumbs/1.jpg" class="transition image-popup">-->
<!--                                    <img src="/web/images/folio/thumbs/1.jpg" class="respimg" alt="" title="">-->
<!--                                    <span class="folio-overlay"></span>-->
<!--                                    <div class="folio-name clear">-->
<!--                                        <div class="folio-icon"><i class="fa fa-camera"></i></div>-->
<!---->
<!--                                        <h4>Aliquam</h4>-->
<!--                                        <h6>single image</h6>-->
<!---->
<!--                                    </div>-->
<!--                                </a>-->
<!--                            </li>-->
<!---->
<!--                            <!-- 6 project - vimeo  video -->
<!---->
<!--                            <li class="box grid-2 mix category_2 category_1 mix_all">-->
<!--                                <a href="http://vimeo.com/64128885" class="transition popup-vimeo">-->
<!--                                    <img src="/web/images/folio/thumbs/1.jpg" class="respimg" alt="" title="">-->
<!--                                    <span class="folio-overlay"></span>-->
<!--                                    <div class="folio-name clear">-->
<!--                                        <div class="folio-icon"><i class="fa fa-briefcase"></i></div>-->
<!---->
<!--                                        <h4>Fusce</h4>-->
<!--                                        <h6>vimeo  video</h6>-->
<!---->
<!--                                    </div>-->
<!--                                </a>-->
<!--                            </li>-->
<!---->
<!--                        </ul>-->
<!---->
<!--                    </div>-->


                    <div class="subcribe"><!-- subcribe -->

                        <h3>Subcribe</h3>

                        <fieldset>
                            <form class="subscriptionForm" method="post">
                                <input id="subscriptionForm" class="inputForm" type="text" value="Enter Your Email Address" onFocus="if (this.value=='Enter Your Email Address') this.value=''" onBlur="if (this.value==''){this.value='Enter Your Email Address'}" />
                                <input type="submit" id="submitButton" class="transition" value="Send">
                            </form>

                            <div id="success">Thanks for your subscription</div>
                            <div id="error">Please enter a valid email address</div>

                        </fieldset>

                    </div><!-- subcribe end-->

                </div>
            </div>
        </div><!--=============== section portfolio end ===============-->

        <!--=============== section order ===============-->

        <div id="order" class="sections">
            <div class="content">
                <div class="container">
                    <div class="order-block">
                        <h3>Ready to <span>order</span> your project?</h3>
                        <a href="#contacts" class="transition">Get in touch</a>


                    </div>

                </div>
            </div>

        </div><!--=============== section order end ===============-->

        <!--=============== section testimonials ===============-->

        <div id="testimonials" class="sections bg">

            <div class="overlay"></div>

            <div class="content">

                <div class="container">

                    <h3 class="title" style="color:#fff;">testimonials</h3>
                    <div class="small-separator"></div>

                    <div class="testimonials-slider">

                        <ul class="slides">

                            <!-- fist-slide -->

                            <li>

                                <p class="blur transition2 animaper"> " Nulla tincidunt interdum leo. Cras molestie eros velit, vitae malesuada mauris tincidunt ut. Interdum et malesuada fames ac ante " </p>

                            </li>

                            <!-- second-slide -->

                            <li>

                                <p class="transition">" Aenean at lacus nec odio condimentum egestas. Pellentesque et pellentesque orci. Donec in commodo sapien. Donec id ante odio.  "</p>

                            </li>

                            <!-- third-slide -->

                            <li>

                                <p class="transition">" Vestibulum accumsan viverra facilisis. Sed at euismod elit, eu convallis felis. Pellentesque pretium tellus non nisl placerat posuere. "</p>

                            </li>

                            <!-- four-slide -->

                            <li>

                                <p class="transition">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare sem sit amet mauris bibendum. Maecenas condimentum justo mattis condimentum iaculis."</p>

                            </li>

                        </ul>

                    </div>

                    <div class="clear"></div>

                    <div class="row">

                        <a name="0" class="animbox act-test transition"><img src="/web/images/clients/1.png" alt="" class="respimg"></a>
                        <a name="1" class="animbox transition"><img src="/web/images/clients/3.png" alt="" class="respimg"></a>
                        <a name="2"  class="animbox transition"><img src="/web/images/clients/4.png" alt="" class="respimg"></a>
                        <a name="3"  class="animbox transition"><img src="/web/images/clients/5.png" alt="" class="respimg"></a>

                    </div>


                </div>

            </div>

        </div><!--=============== section testimonials end ===============-->

        <!--=============== section team ===============-->

        <div id="team" class="sections">
            <div class="content">
                <div class="container">
                    <h3 class="title">Team</h3>
                    <div class="small-separator"></div>

                    <div id="team-carusel" class="owl-carousel">

                        <!-- 1-mem -->

                        <div class="item">
                            <div class="team-member">

                                <a href="/web/images/photos/1.jpg" class="team-img image-popup">
                                    <img src="/web/images/photos/1.jpg"  class="respimg transition" alt="">
                                </a>

                                <h3>Antony Fozborn<span></span></h3>
                                <h4>Creative Director / Art</h4>
                                <p>Sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore. </p>
                                <div class="team-social">
                                    <a href="#" class="transition"><i class="fa fa-envelope"></i></a>
                                    <a href="#" class="transition"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="transition"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="transition"><i class="fa fa-google-plus"></i></a>
                                </div>

                            </div>
                        </div>

                        <!-- 2-mem -->

                        <div class="item">
                            <div class="team-member">

                                <a href="/web/images/photos/1.jpg" class="team-img image-popup">
                                    <img src="/web/images/photos/1.jpg"  class="respimg transition" alt="">
                                </a>

                                <h3>David Sails<span></span></h3>
                                <h4>Photographer / Designer</h4>
                                <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas faucibus mollis interdum.</p>
                                <div class="team-social">
                                    <a href="#" class="transition"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="transition"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="transition"><i class="fa fa-linkedin"></i></a>
                                </div>

                            </div>
                        </div>

                        <!-- 3-mem -->

                        <div class="item">
                            <div class="team-member">

                                <a href="/web/images/photos/1.jpg" class="team-img image-popup">
                                    <img src="/web/images/photos/1.jpg"  class="respimg transition" alt="">
                                </a>

                                <h3>Lisa Lee<span></span></h3>
                                <h4>Content Manager</h4>
                                <p>Ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                <div class="team-social">
                                    <a href="#" class="transition"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="transition"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="transition"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="transition"><i class="fa fa-linkedin"></i></a>
                                </div>

                            </div>
                        </div>

                        <!-- 4-mem -->

                        <div class="item">
                            <div class="team-member">

                                <a href="/web/images/photos/1.jpg" class="team-img image-popup">
                                    <img src="/web/images/photos/1.jpg"  class="respimg transition" alt="">
                                </a>

                                <h3>Marta Smith<span></span></h3>
                                <h4>Web Developer</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare sem sit amet mauris bibendum.</p>
                                <div class="team-social">
                                    <a href="#" class="transition"><i class="fa fa-envelope"></i></a>
                                    <a href="#" class="transition"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="transition"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="transition"><i class="fa fa-linkedin"></i></a>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>	<!--=============== section team end ===============-->

        <!--=============== section contacts ===============-->
        <div id="contacts" class="sections">

            <div class="overlay"></div>

            <div class="content">

                <div class="container">

                    <h3 class="title">Contact</h3>
                    <div class="small-separator"></div>

                    <p class="white">Vestibulum accumsan viverra facilisis. Sed at euismod elit, eu convallis felis. Pellentesque pretium tellus non nisl placerat posuere. Integer velit dolor, porta ut pretium vitae, adipiscing vitae elit.  </p>

                    <div class="grid-2">
                        <div class="contact-details">

                            <h3 class="color-gold">Contact Info</h3>
                            <ul>
                                <li><i class="fa fa-mobile"></i><span>+7(111)123456789</span></li>
                                <li><i class="fa fa-envelope-o"></i><span>yourmail@domain.com</span></li>
                                <li><i class="fa fa-home"></i><span>Third Main Street, 27th Brooklyn</span></li>
                            </ul>

                        </div>

                    </div>

                    <div class="grid-4">

                        <div class="contact-form clear">

                            <fieldset id="contact_form">
                                <label for="name">
                                    <input type="text" name="name" id="name" placeholder="Name" />
                                </label>
                                <label for="email">
                                    <input type="text" name="email" class="right" id="email" placeholder="Email" />
                                </label>
                                <div class="clear"></div>
                                <label for="message">
                                    <textarea name="message"  id="message" placeholder="Message"></textarea>
                                </label>
                                <div class="clear"></div>

                                <label>
                                    <button class="submit_btn transition" id="submit_btn"><i class="fa fa-envelope-o fa-2x"></i></button>
                                </label>

                                <div id="result"></div>

                            </fieldset>

                        </div>

                    </div>

                </div>
            </div>

        </div><!--=============== section contacts end ===============-->

        <!--=============== section footer ===============-->

        <div id="footer" class="sections ws">
            <div class="content">
                <div class="container">

                    <a class="to-top" href="#intro"><i class="fa fa-angle-up transition"></i></a>

                    <div class="clear"></div>

                    <div class="social-list">

                        <ul>
                            <li><a href="#"  target="_blank" class="transition"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"  target="_blank" class="transition"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"  target="_blank" class="transition"><i class="fa fa-linkedin"></i></a></li>
                        </ul>

                    </div>

                    <p>Pompey ©2014  All rights reserved.</p>

                </div>

            </div>

        </div><!--=============== section footer end ===============-->

    </div><!--=============== wrapper end ===============-->

</div><!--=============== main end ===============-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>