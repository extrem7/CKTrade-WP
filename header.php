<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' ) ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo( 'name' ) ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ) ?>">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	-->
    <link href="<?php path() ?>css/main.css" rel="stylesheet">
	<?php wp_head() ?>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<?php
$bodyName = '';
if ( is_front_page() ) {
	$bodyName = 'home-page';
}
?>
<body class="<? echo $bodyName ?>">
<header class="header">
    <div class="container">
        <div class="row flex-md-wrap">
            <div class="col-lg-3 col-md-4 text-md-left text-center">
                <a href="<?php if ( ! is_front_page() )
					echo bloginfo( 'url' ) ?>" class="logo d-block disables">
                    <img <?php the_image( 'logo', 'option' ) ?>>
                </a>
            </div>
            <div class="clocks d-flex justify-content-around col-lg-4 col-md-2">
                <div class="time d-md-block d-none">
                    <iframe frameborder="no" scrolling="no" width="150" height="150"
                            src="https://yandex.ua/time/widget/?geoid=163&lang=ru&layout=vert&type=analog&face=serif"></iframe>
                </div>
                <div class="time d-lg-block  d-none">
                    <iframe frameborder="no" scrolling="no" width="150" height="150"
                            src="https://yandex.ua/time/widget/?geoid=10590&lang=ru&layout=vert&type=analog&face=serif"></iframe>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 d-md-flex d-none"><?php the_field( 'currencies', 'option' ) ?></div>
            <div class="d-flex flex-column align-items-md-end col-lg-3 col-md-4 align-items-center">
                <a href="tel:<? echo preg_replace( '/[^0-9]/', '', get_field( 'phone', 'option' ) ); ?>"
                   class="phone"><?php the_field( 'phone', 'option' ) ?></b></a>
                <a href="mailto:<?php the_field( 'email-1', 'option' ) ?>"
                   class="mail"><?php the_field( 'email-1', 'option' ) ?></a>
                <a href="mailto:<?php the_field( 'email-1', 'option' ) ?>"
                   class="mail"><?php the_field( 'email-2', 'option' ) ?></a>
                <button class="button orange" data-toggle="modal"
                        data-target="#order-1"><?php the_field( 'btn', 'option' ) ?></button>
            </div>
        </div>
    </div>
    <button type="button" class="toggle-btn d-md-none d-block">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</header>
<nav>
    <ul class="menu container d-flex flex-md-row flex-column">
		<?php dropdown( 2 ) ?>
    </ul>
</nav>