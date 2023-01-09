<!DOCTYPE html>

<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Добро пожаловать на тестовый сайт</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body id="body" data-spy="scroll" data-target=".header">

        <!--========== HEADER ==========-->
		<header class="header navbar-fixed-top">
		<?php include 'header.inc.php' ?>
		</header>
        <!--========== END HEADER ==========-->

        <!--========== SLIDER ==========-->
        <div class="promo-block">
            <?php include 'slider.inc.php' ?>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- About -->
        <div id="about">
            <div class="container content-lg">
                <div class="row text-center margin-b-40">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2><?php echo $p ?></h2>
                        <p>Вам повезло что Вы попали именно к нам!</p>
                    </div>
                </div>
                <!--// end row -->

                <div class="row">
                    <div class="data">
						<div class="mylmg">
						<?php
						echo '<img class="img-responsive wow fadeIn" src="img/neo2.jpg" alt="neo">';
						?>
						</div>
						<div class="fullname">
							<p> Моё имя
							<?php
							echo $name, ' ', $surname .'<br>';
							echo 'город', ' ', $city, ', ', $country;?>
							</p>
							
							<p>Мне <?php echo $age; ?> лет</p>
							<p>Научились создовать переменные</p>
							<p>Изучили простые операции</p>
						</div>
						
						<div class="knowledge">
							<?php include 'knowledge.inc.php'; ?>
							<?php
								echo $a, ' ', $b, '', $c;
							?>
							 </br>
							<?php 
								$a = 100;
								$b = 25;
								$c = ($a * $b)/($a + $b);
								echo $c;
							?>
							</br>
							<?php echo $d; ?>
						</div>	
                </div>
                <!--// end row -->
            </div>

            <div class="container-full-width">
                <div class="row row-space-2">
                    <div class="col-sm-6 sm-margin-b-4">
                        <img class="img-responsive" src="img/970x647/01.jpg" alt="Image">
                    </div>
                    <div class="col-sm-6">
                        <img class="img-responsive" src="img/970x647/03.jpg" alt="Image">
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Products -->

        <!-- Service -->
        <div id="service">
            <div class="bg-color-sky-light" data-auto-height="true">
                <div class="content-lg container">
                    <div class="row row-space-2 margin-b-4">
                        <div class="col-sm-4 sm-margin-b-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-chemistry"></i>
                                </div>
                                <div class="service-info">
                                    <h3>5 баллов</h3>
                                    <p class="margin-b-5">
									<ul>
										<li>установлен локальный веб-сервер;</li>
										<li>создана папка с проектом в нужной директории и все необходимые в этой папке файлы file.php;</li>
										<li>в основном файле создан тестовый код для вывода;</li>
										<li>удалось запустить сервер и вывести в браузере тестовый код.</li>
									</ul>
									</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                        <div class="col-sm-4 sm-margin-b-4">
                            <div class="service bg-color-base wow fadeInDown" data-height="height" data-wow-duration=".3" data-wow-delay=".1s">
                                <div class="service-element">
                                    <i class="service-icon color-white icon-screen-tablet"></i>
                                </div>
                                <div class="service-info">
                                    <h3 class="color-white">10 баллов</h3>
                                    <p class="color-white margin-b-5">
									<ul>
										<li>всё, что требуется на 5 баллов;</li>
										<li>создана основная верстка и добавлены стили;</li>
										<li>подключены дополнительные файлы и файлы с элементами кода;</li>
										<li>в файле, где написан только код PHP, создана переменная со значением в виде строки — приветствие от автора страницы. Результат выведен в браузере;</li>
										<li>выведено изображение на странице и в браузере.</li>
									</ul>
									
									</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-badge"></i>
                                </div>
                                <div class="service-info">
                                    <h3>15 баллов</h3>
                                    <p class="margin-b-5">
									<ul>
										<li>всё, что требуется на 10 баллов;</li>
										<li>созданы переменные со значением: имя, фамилия, возраст, город, результат кода выведен в браузере.</li>
									</ul>
									</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <!--// end row -->

                    <div class="row row-space-2">
                        <div class="col-sm-4 sm-margin-b-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-notebook"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Полезная документация</h3>
                                    <p class="margin-b-5">В этом и последующих юнитах у вас будет возможность отправить своё решение на проверку.</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                        <div class="col-sm-4 sm-margin-b-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-speedometer"></i>
                                </div>
                                <div class="service-info">
                                    <h3>20 баллов</h3>
                                    <p class="margin-b-5">
									<ul>
										<li>всё, что требуется на 15 баллов;</li>
										<li>создан блок с классом knowledge и в нем продемонстрированы полученные знания, в виде созданных переменных с присвоенным значением разного типа, которые выведены в коде, а затем отображены в браузере.</li>
										<li>продемонстрированы разные типы операций, способов вывода кода и также результаты выведены в браузере.</li>
									</ul>
									</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-badge"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Бесплатные плагины</h3>
                                    <p class="margin-b-5">К пациенту будут относиться очень хорошо, чтобы пациент не страдал</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
        </div>
        <!-- End Service -->

        <!-- Promo Banner -->
        <div class="promo-banner">
            <div class="container-sm content-lg">
                <h2 class="promo-banner-title">Отображение результата</h2>
                <p class="promo-banner-text">В первую очередь необходимо руководствоваться официальной документацией по PHP, которая состоит из справочника функций, справочника языка и многих других дополнительных сведений. И крайне осторожно относиться к другим ресурсам в сети интернет, поскольку часто встречается устаревшая, недостоверная и непрофессиональная информация. В крайнем случае, если требуется какой-либо пример, то лучше опираться на солидные источники информации, со свежими данными и соотносить с официальной документацией по PHP.</p>
            </div>
        </div>
        <!-- End Promo Banner -->

        <!-- Work -->
        <div id="work">
            <div class="content-md container">
                <!-- Masonry Grid -->
                <div class="masonry-grid row row-space-2">
                    <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8 margin-b-4">
                        <!-- Work -->
                        <div class="work work-popup-trigger">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/800x400/01.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-popup-overlay">
                                <div class="work-popup-content">
                                    <a href="javascript:void(0);" class="work-popup-close">Спрятать</a>
                                    <div class="margin-b-30">
                                        <h3 class="margin-b-5">Искусство кодирования</h3>
                                        <span>Рачет Факториала</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p><?php
														$n = 5;
														for ($i = 1; $i <= $n; $i++) {
															$factorial = $i * $n;
														}
														echo "Факториал 5 равен $factorial";?>
												</p>
                                                
                                                <ul class="list-inline work-popup-tag">
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Дизайн</a></li>
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Кодирование</a></li>
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Портфолио</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class="margin-b-5"><strong>Руководитель проекта:</strong> Я</p>
                                                <p class="margin-b-5"><strong>Дизайнер:</strong> Я</p>
                                                <p class="margin-b-5"><strong>Разработчик:</strong> Я</p>
                                                <p class="margin-b-5"><strong>Покупатель:</strong> Я</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 margin-b-4">
                        <!-- Work -->
                        <div class="work work-popup-trigger">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/01.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-popup-overlay">
                                <div class="work-popup-content">
                                    <a href="javascript:void(0);" class="work-popup-close">Спрятать</a>
                                    <div class="margin-b-30">
                                        <h3 class="margin-b-5">Искусство кодирования</h3>
                                        <span>Расчет квадратного уравнения</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p>Внимание после расчета нажатия на кнопку "Отправить" нужно снова открыть элемент, чтобы увидеть результат.</p>
												<p>
												<?php
													if (isset($_REQUEST['sub'])) {
													  function sqrFunction($a,$b,$c = 0)
													  {
														$x1 = 0;
														$x2 = 0;
														$d = ($b*$b) - (4*$a*$c);
														if($d > 0){
														  $x1 = ((-$b) - sqrt($d))/(2*$a);
														  $x2 = ((-$b) + sqrt($d))/(2*$a);
														  echo 'X<sub>1</sub> = '. $x1 . '<br>';
														  echo 'X<sub>2</sub> = '.$x2 . '<br>';
														}														
														elseif($d == 0) {
														  $x2 = ((-$b) + sqrt($d))/(2*$a);
														  echo 'X<sub>1</sub> = '.$x2 . '<br>';
														}else {
														  echo "D = $d < 0, уравнение не имеет действительных корней";
														}
													  }
													  if(isset($_REQUEST['a']) and isset($_REQUEST['b']) and isset($_REQUEST['c'])) {
														$a = $_REQUEST['a'];
														$b = $_REQUEST['b'];
														$c = $_REQUEST['c'];
													echo sqrFunction($a,$b,$c);
													}
													}else{
													?>
													<form action="<?=$_SERVER['SCRIPT_NAME']?>">
													  <p>Введите a: <input required="" type="number" name="a"></p>
													  <p>Введите b: <input required="" type="number" name="b"></p>
													  <p>Введите c: <input required="" type="number" name="c" value="0"></p>
													  <input type="submit" name="sub">
													  <input type="reset">
													</form>
													<?php
													}
													?>
												</p>
                                                <ul class="list-inline work-popup-tag">
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class="margin-b-5"><strong>Руководитель проекта:</strong> Я</p>
                                                <p class="margin-b-5"><strong>Дизайнер:</strong> Я</p>
                                                <p class="margin-b-5"><strong>Разработчик:</strong> Я</p>
                                                <p class="margin-b-5"><strong>Покупатель:</strong> Я</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-4">
                        <!-- Work -->
                        <div class="work work-popup-trigger">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x300/01.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-popup-overlay">
                                <div class="work-popup-content">
                                    <a href="javascript:void(0);" class="work-popup-close">Спрятать</a>
                                    <div class="margin-b-30">
                                        <h3 class="margin-b-5">Искусство кодирования</h3>
                                        <span>Глобальная и локальная область видимости</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p> $a = 10; </br> 
														function test() {</br> 
															$a = 5; </br> 
														} </br> 
														 
														echo $a;</br> 
													
													<?php
														$a = 10; /* глобальная область видимости */ 
														function test() {
															$a = 5; /* ссылка на переменную в локальной области видимости */ 
														} 
														
														echo 'a = ', $a;
														
													?>
												</p>
                                                <ul class="list-inline work-popup-tag">
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class="margin-b-5"><strong>Руководитель проекта:</strong> Я</p>
                                                <p class="margin-b-5"><strong>Дизайнер:</strong> Я</p>
                                                <p class="margin-b-5"><strong>Разработчик:</strong> Я</p>
                                                <p class="margin-b-5"><strong>Покупатель:</strong> Я</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-4">
                        <!-- Work -->
                        <div class="work work-popup-trigger">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x300/02.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-popup-overlay">
                                <div class="work-popup-content">
                                    <a href="javascript:void(0);" class="work-popup-close">Спрятать</a>
                                    <div class="margin-b-30">
                                        <h3 class="margin-b-5">Искусство кодирования</h3>
                                        <span>Логические операторы</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p> Число равно 17 </br>
													<?php
														$price = 17;

														if(($price >= 15) && ($price <= 20)) {
															echo 'Это число находится между 15 и 20';
														}
													?>
												</p>
                                                <ul class="list-inline work-popup-tag">
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class="margin-b-5"><strong>Руководитель проекта:</strong> Я</p>
                                                <p class="margin-b-5"><strong>Дизайнер:</strong> Я</p>
                                                <p class="margin-b-5"><strong>Разработчик:</strong> Я</p>
                                                <p class="margin-b-5"><strong>Покупатель:</strong> Я</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work work-popup-trigger">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x300/03.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-popup-overlay">
                                <div class="work-popup-content">
                                    <a href="javascript:void(0);" class="work-popup-close">Спрятать</a>
                                    <div class="margin-b-30">
                                        <h3 class="margin-b-5">Искусство кодирования</h3>
                                        <span>Пример операций сложения, вычитания и других</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p> a = 10 </br>
													b = 20 </br>
												<?php
													$a = 10;
													$b = 20;
													echo 'a + b = ', $a + $b . '<br>';    // сложение. Здесь $a и $b операнды, символ + (плюс) это оператор
													echo 'a - b = ', $a - $b . '<br>';    // вычитание (если имеется только правый операнд (в данном случае $b), то операция возвращает значение этого операнда с обратным знаком)
													echo 'a * b = ', $a * $b . '<br>';    // умножение. Здесь оператор - это знак умножения *, $a и $b операнды.
													echo 'a / b = ', $a / $b . '<br>';  // деление
													echo 'a % b = ', $a % $b . '<br>'; // остаток от деления
													echo 'a <sup>b</sup> = ', $a ** $b . '<br>'; // возведение в степень
												?>
												</p>
                                                <ul class="list-inline work-popup-tag">
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class="margin-b-5"><strong>Руководитель проекта:</strong> Я</p>
                                                <p class="margin-b-5"><strong>Дизайнер:</strong> Я</p>
                                                <p class="margin-b-5"><strong>Разработчик:</strong> Я</p>
                                                <p class="margin-b-5"><strong>Покупатель:</strong> Я</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Work -->
                    </div>
                </div>
                <!-- End Masonry Grid -->
            </div>
        </div>
        <!-- End Work -->

        <!-- Pricing -->
        <div id="pricing">
            <div class="bg-color-sky-light">
                <div class="content-lg container">
                    <div class="row row-space-2">
                        <div class="col-sm-4 sm-margin-b-4">
                            <!-- Pricing -->
                            <div class="pricing">
                                <div class="margin-b-30">
                                    <i class="pricing-icon icon-chemistry"></i>
                                    <h3>Стартовый комплект <span> - $</span> 49</h3>
                                    <p>К пациенту будут относиться очень хорошо, чтобы пациент не страдал</p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <li class="pricing-list-item">Basic Features</li>
                                    <li class="pricing-list-item">Up to 5 products</li>
                                    <li class="pricing-list-item">50 Users Panels</li>
                                </ul>
                                <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                            </div>
                            <!-- End Pricing -->
                        </div>
                        <div class="col-sm-4 sm-margin-b-4">
                            <!-- Pricing -->
                            <div class="pricing pricing-active">
                                <div class="margin-b-30">
                                    <i class="pricing-icon icon-badge"></i>
                                    <h3>Профессиональный <span> - $</span> 149</h3>
                                    <p>К пациенту будут относиться очень хорошо, чтобы пациент не страдал</p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <li class="pricing-list-item">Основные характеристики</li>
                                    <li class="pricing-list-item">До 100 товаров</li>
                                    <li class="pricing-list-item">100 пользовательских панелей</li>
                                </ul>
                                <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                            </div>
                            <!-- End Pricing -->
                        </div>
                        <div class="col-sm-4">
                            <!-- Pricing -->
                            <div class="pricing">
                                <div class="margin-b-30">
                                    <i class="pricing-icon icon-shield"></i>
                                    <h3>Передовой <span> - $</span> 249</h3>
                                    <p>К пациенту будут относиться очень хорошо, чтобы пациент не страдал</p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <li class="pricing-list-item">Расширенные функции</li>
                                    <li class="pricing-list-item">Неограниченное количество продуктов</li>
                                    <li class="pricing-list-item">Неограниченное количество пользовательских панелей</li>
                                </ul>
                                <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                            </div>
                            <!-- End Pricing -->
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
        </div>
        <!-- End Pricing -->

        <!-- Testimonials -->
        <div class="content-md container">
            <div class="row">
                <div class="col-sm-9">
                    <h2>Отзывы клиентов</h2>

                    <!-- Swiper Testimonials -->
                    <div class="swiper-slider swiper-testimonials">
                        <!-- Swiper Wrapper -->
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        Клиенту очень больно следовать обучению клиента, но пришло время работать с большой болью. Для того, чтобы упражнение труда не имело большого значения, чтобы результат можно было избежать болью.
                                    </div>
                                    <div class="margin-b-20">
                                        Клиенту очень больно следовать обучению клиента, но пришло время работать с большой болью. Для того, чтобы упражнение труда не имело большого значения, чтобы результат можно было избежать болью.
                                    </div>
                                    <p><span class="fweight-700 color-link">Joh</span>, Metronic</p>
                                </blockquote>
                            </div>
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        Клиенту очень больно следовать обучению клиента, но пришло время работать с большой болью. Для того, чтобы упражнение труда не имело большого значения, чтобы результат можно было избежать болью.
                                    </div>
                                    <div class="margin-b-20">
                                        Ибо, говоря в мельчайших подробностях, никто не должен заниматься какой-либо работой, если он не извлечет из нее какой-либо пользы.
                                    </div>
                                    <p><span class="fweight-700 color-link">Alex</span>, Metronic</p>
                                </blockquote>
                            </div>
                        </div>
                        <!-- End Swiper Wrapper -->

                        <!-- Pagination -->
                        <div class="swiper-testimonials-pagination"></div>
                    </div>
                    <!-- End Swiper Testimonials -->
                </div>
            </div>
            <!--// end row -->
        </div>
        <!-- End Testimonials -->
            
        <!-- Contact -->
        <div id="contact">
            <!-- Google Map -->
            <div class="gmap">
                <div id="map" class="map height-400"></div>
                <address class="gmap-address">
                    <p class="color-heading margin-b-0">Обратная связь</p>
					<div>
					<!-- Создаём форму и указываем её обработчик и метод -->
						<form action="http://localhost/skill/post.php" method="post" name="form">
							<!-- Поле ввода имени -->
							<input name="name" type="text" placeholder="Ваше имя" />
							<br>
							<!-- Поле ввода почты  -->
							<input name="email" type="text" placeholder="Ваша почта" />
							<br>
							<!-- Поле ввода для темы сообщения -->
							<input size="30" name="header" type="text" placeholder="Тема" />
							<br>
							<!-- Текстовое поле для самого сообщения -->
							<textarea cols="32" name="message" rows="5"> Текст сообщения
							</textarea>
							<br>
							<!-- Кнопка с надписью «Отправить», которая запускает обработчик формы -->
							<input type="submit" value="Отправить" />
						</form>
					</div>
                </address>
            </div>
            <!-- End Google Map -->
        </div>
        <!-- End Contact -->
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer">
			<?php include 'footer.inc.php' ?>
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Верхняя</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="vendor/magnific-popup/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U&amp;callback=initMap" async defer></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>
        <script src="js/components/maginific-popup.min.js" type="text/javascript"></script>
        <script src="js/components/masonry.min.js" type="text/javascript"></script>
        <script src="js/components/gmap.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>