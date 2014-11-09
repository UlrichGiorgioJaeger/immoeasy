<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'ImmoEasy.net: Das günstige Immobilien-Anzeigen-Portal');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>

    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
    <!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->

    <?php
    echo $this->Html->meta('icon');
    echo $this->Html->css('bootstrap.min');
//    echo $this->Html->css('dashboard');
//    echo $this->Html->css('styles');
    echo $this->Html->css('carousel');
    echo $this->Html->script('jquery-2.1.1.min');
    echo $this->Html->script('bootstrap.min');
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
    <?php
    //    echo $this->element('sidebarDashboard');
    echo $this->Html->script('jquery.geocomplete');
    ?>



</head>
<body>

<div class="navbar-wrapper">
    <div class="container">

        <!-- Static navbar -->
        <div class="navbar navbar-inverse" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php
                    $options = array(  'alt' => 'immoeasy', 'style' =>'width:134px;height:50px;',   'url' => array('controller' => 'pages', 'action' => 'index' ));
                    echo $this->Html->image('immoeasy_logo1.png', $options);
 ?>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li>   <?php
                            echo $this->Html->link(
                                'Preise',
                                array(
                                    'controller' => 'Pages',
                                    'action' => 'preise',
                                    'full_base' => true,
                                )
                            );?></li>
                        <li>   <?php
                            echo $this->Html->link(
                                'Suchen',
                                array(
                                    'controller' => 'posts',
                                    'action' => 'search_adv',
                                    'full_base' => true,
                                )
                            );?></li>
                        <li> <?php
                            echo $this->Html->link(
                                'Anleitung',
                                array(
                                    'controller' => 'Pages',
                                    'action' => 'Anleitung',
                                    'full_base' => true,
                                )
                            );?></li>


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list"></span>
                                </span><span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><?php
                                    echo $this->Html->link(
                                        'Tips',
                                        array(
                                            'controller' => 'Pages',
                                            'action' => 'tips',
                                            'full_base' => true,
                                        )
                                    );?></li>
                                <li><?php
                                    echo $this->Html->link(
                                        'Kontakt',
                                        array(
                                            'controller' => 'Pages',
                                            'action' => 'contact',
                                            'full_base' => true,
                                        )
                                    );?></li>
                                <li><?php
                                    echo $this->Html->link(
                                        'Häufige Fragen',
                                        array(
                                            'controller' => 'Pages',
                                            'action' => 'faq',
                                            'full_base' => true,
                                        )
                                    );?></li>

                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php if (AuthComponent::user('id')): ?>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= AuthComponent::user('username') ?> <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <?php
                                        echo $this->Html->link(
                                            'Mein Konto',
                                            array(
                                                'controller' => 'posts',
                                                'action' => 'dashboard',
                                                'full_base' => true,
                                            )
                                        );?>

                                    </li>
                                    <li>
                                        <?php
                                        echo $this->Html->link(
                                            'Meine Rechnungen',
                                            array(
                                                'controller' => 'checkouts',
                                                'action' => 'rechnungen',
                                                'full_base' => true,
                                            )
                                        );?>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Deine Buchungen</li>
                                    <li><a href="posts/add/">Anzeige erstellen</a></li>
                                    <li><a href="#">Passwort ändern</a></li>
                                    <li>
                                        <?php
                                        echo $this->Html->link(
                                            'Abmelden',
                                            array(
                                                'controller' => 'users',
                                                'action' => 'logout',
                                                'full_base' => true,
                                            )
                                        );?>
                                    </li>
                                </ul>
                            </li>
                            <?php else: ?>
                             <li class="active">
                                 <?php
                                 echo $this->Html->link(
                                     'Registrieren',
                                     array(
                                         'controller' => 'users',
                                         'action' => 'add',
                                         'full_base' => true,
                                     )
                                 );?>
                             </li>
                            <li>

                                <?php
                                echo $this->Html->link(
                                    'Anmelden',
                                    array(
                                        'controller' => 'users',
                                        'action' => 'login',
                                        'full_base' => true,
                                    )
                                );?>
                            </li>

                            <?php endif; ?>


                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </div>
            </div>
        </div>

    </div>
</div>

<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <?php
//            ,array(alt=>'Erstes Bild')
            echo $this->Html->image('carousel_2.jpg');


            ?>
            <div class="container">
                <div class="carousel-caption">
                    <h1>Willkommen auf Immoeasy</h1>
                    <p>Sie möchten Ihre Immobilie einfach und schnell an über 12 Millionen Besucher verkaufen?
                        Wir empfehlen die Marktführer Immobilienscout24, Immonet, kalaydo und immobilien.de?
                        Bei Buchung aller vier Portale erscheint Ihr Angebot auf weiteren 12 seriösen Internetportalen</p>


                    <p><?php
                        echo $this->Html->link(
                            'näheres erfahren',

                            array(
                                'controller' => 'Pages',
                                'action' => 'anleitung',

                            ),
                           array( 'class' => 'btn btn-lg btn-primary')
                        );

                        ?></p>
                </div>
            </div>
        </div>
        <div class="item">
            <?php
            echo $this->Html->image('carousel_1.jpg',array(alt=>'Erstes Bild'));


            ?>
            <div class="container">
                <div class="carousel-caption">
                    <h1>Erhebliche Kostenersparnis - 50% - 60% </h1>
                    <p>
                        Die Buchung der vielen großen Portale über immoeasy.net kostet für einen Monat nur 85,00 €für
                        3 Monate 159,00 € und für 6 Monate nur 249,00 €. Ein direktes Buchen einer Verkaufsanzeige auf allen vier angebotenen Portalen, würde für einen Monat 176,40 €, für drei Monate 352,90 € und für 6 Monate 631,85 € kosten.</p>
                    <p><?php
                        echo $this->Html->link(
                            'unsere Preise',

                            array(
                                'controller' => 'Pages',
                                'action' => 'preise',

                            ),
                            array( 'class' => 'btn btn-lg btn-primary')
                        );

                        ?></p>
                </div>
            </div>
        </div>
        <div class="item">
            <?php
            echo $this->Html->image('carousel_3.jpg',array(alt=>'Erstes Bild'));
            ?>
            <div class="container">
                <div class="carousel-caption">
                    <h1>www.immoeasy.net</h1>
                    <p>Suchen Sie nach Immobilienanzeigen für Wohnhäuser, Gewerbegrundstücke, Wohnungen und Urlaubsobjekte , finden Sie Häuser zum Verkauf und Wohnungen zu vermieten.
                        Erstellen Sie Immobilien-Anzeigen zum Verkauf oder Miete. Tausende Käufer und Mieter werden mit Verkäufern und Vermietern täglich zusammengebracht.
                        Bei www.immoeasy.net bieten wir Ihnen die Möglichkeit, Ihr provisionsfreies Immobilienangebot zur Vermietung oder zum Verkauf, einfach per Klick
                        auch auf immobilienscout24,
                        immonet, kalaydo, immobilien.de und vielen anderen Portalen mit zu veröffentlichen.
                    </p>
                    <p><?php
                        echo $this->Html->link(
                            'Immobilie anbieten',

                            array(
                                'controller' => 'posts',
                                'action' => 'add',

                            ),
                            array( 'class' => 'btn btn-lg btn-primary')
                        );

                        ?>

<!--                        <a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>-->
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div><!-- /.carousel -->



<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <?php
//                    $options = array(  'alt' => 'CakePHP', 'style' =>'width:300px;height:300px;',   'url' => array('controller' => 'pages', 'action' => 'view', 6))
        ?>

        <?php foreach ($posts as $post): ?>

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <?php
                        $options = array(  'alt' => 'CakePHP', 'style' =>'width:370px;height:300px;',   'url' => array('controller' => 'posts', 'action' => 'view',$post['Post']['id'] ));
                        echo $this->Html->image('../server/php/files/'.$post['Post']['id'].'/'.$post['File'][0]['name'], $options);

//                        echo $this->Html->image('../server/image/attachment/'.$post['Image']['0']['dir'].'/thumb_'.$post['Image']['0']['attachment'], $options); ?>
                        <div class="caption">
                            <h3><?php echo $post['Post']['title']; ?></h3>
<!--                            <p>Adresse: --><?php //echo $post['Post']['street']; ?><!--</p>-->
                            <p>PLZ: <?php echo $post['Post']['postcode']; ?> <?php echo $post['Post']['city']; ?></p>
<!--                            <p>Stadt: </p>-->
                            <p>Miete: <?php echo $this->Number->currency($post['Post']['baseRent' ], "EUR");  ?>
                               </p>
                            <p>Zimmer: <?php echo  $post['Post']['numberOfRooms'];  ?>
                            </p>
                            <p>Wohnfläche: <?php echo $post['Post']['livingSpace']. " m²" ;  ?>
                            </p>
                            <p><?php
                                echo $this->Html->link(
                                    'Ansehen',
                                    array(
                                        'controller' => 'posts',
                                        'action' => 'view',$post['Post']['id'],
                                        'full_base' => true,
                                    ),
                                    array('class'=> 'btn btn-primary')
                                );?>


                                </p>
                        </div>
                    </div>
                </div>



        <?php endforeach; ?>

    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">1 x das Objekt auf dem Portal www.immoeasy.net einstellen und automatisch auf die <span class="text-muted">führenden Portale Immobilienscout24, </span></h2>
            <p class="lead">
                Immonet, immobilien.de und diverse weitere Internet-Immobilienseiten übertragen lassen.
                Sie stellen Ihre Immobilienangebot nur 1 x auf www.immoeasy.net ein und kreuzen vor dem Freischalten an, wo Ihr Angebot erscheinen soll.
                Das ist herrlich einfach. Bei diesen Kombianzeigen haben Sie die besten Verkaufschancen bei wenig Arbeit am PC und sparen dank des
                Paketpreises Geld. Zeit, Kosten, Nerven sparen mit Immoeasy. So einfach.</p>
               </div>
        <div class="col-md-5">
            <?php
            echo $this->Html->image('startbild.jpg');


            ?>

        </div>
    </div>


    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-5">
            <?php echo $this->element('search')?>
        </div>
        <div class="col-md-7">
            <h2 class="featurette-heading">Immobilien provisionsfrei suchen. <span class="text-muted">Deutschlandweit und sogar im Ausland.</span></h2>
            <p class="lead">
                Sind Sie auf der Suche nach einer neuen Mietwohnung? Dann können Sie bei immoeasy.net in wenigen Schritten in der Kategorie
                Mietwohnungen eine große Auswahl verschiedenster Angebote einsehen. In der Rubrik Haus mieten finden Sie Ein- oder Mehrfamilienhäuser
                in Ihrer gewünschten Region.

                Planen Sie eine Eigentumswohnung zu erwerben, finden Sie Ihr Objekt unter Eigentumswohnung kaufen.
                Soll es sogar das eigene Traumhaus werden, finden Sie ein großes Angebot unter Haus kaufen.

                Hier finden Sie aus 2044 Angeboten Ihre provisionsfreie Immobilie.</p>


        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Erhebliche Kostenersparnis
                 <span class="text-muted">50% - 60%</span></h2>
            <p class="lead">
                Die Buchung der vielen großen Portale über immoeasy.net kostet für einen Monat nur 85,00 €für 3 Monate 159,00 € und für
                6 Monate nur 249,00 €. Ein direktes Buchen einer Verkaufsanzeige auf allen vier angebotenen Portalen, würde für einen Monat 176,40 €,
                für drei Monate 352,90 € und für 6 Monate 631,85 € kosten.</p>
        </div>
        <div class="col-md-5">
            <?php
            $options1 = array(  'alt' => 'immoeasy', 'style' =>'width:100%;height:100%;',   'url' => array('controller' => 'pages', 'action' => 'preise' ));
            echo $this->Html->image('onlineImage.jpg', $options1);

            ?>
<!--            <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">-->
        </div>
    </div>

    <hr class="featurette-divider">
    <?php
//    echo $this->Html->script('jquery-2.1.1.min');
//    echo $this->Html->script('bootstrap.min');
//    echo $this->Html->script('jquery.geocomplete');
//
//    echo $this->fetch('meta');
//    echo $this->fetch('css');
//    echo $this->fetch('script');
    echo $this->Js->writeBuffer();
    ?>

<!--    <script>-->
<!--        $(function(){-->
<!--            $("#geocomplete").geocomplete({-->
<!--                map: ".map_canvas",-->
<!--                details: "form",-->
<!--                detailsAttribute: "data-geo"-->
<!--            });-->
<!---->
<!--            $("#geocomplete").change(function(){-->
<!--                $("#geocomplete").trigger("geocode");-->
<!--            });-->
<!--        });-->
<!--    </script>-->


</body>
</html>
