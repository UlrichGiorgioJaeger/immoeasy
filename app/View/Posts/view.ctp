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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!--TODO Bilder der immobilie in den Featurete Carousel einbinden sodass wenn click auf featurette click die Gallery von Bluimp angezeigt wird-->
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $title_for_layout; ?>
    </title>
    <?php
    echo $this->Html->meta('icon');

    //    echo $this->Html->css('cake.generic');
    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('style');

    echo $this->Html->css('jquery.fileupload');
    echo $this->Html->css('jquery.fileupload-ui');
    ?>
    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>

    <?php
    echo $this->Html->css('navbar-fixed-top');
    echo $this->Html->css('carousel');
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('dashboard');
    echo $this->Html->script('jquery-2.1.1.min');
    echo $this->Html->script('bootstrap.min');

    ?>
</head>
<body>

<?php echo $this->element('headerDashboard'); ?>
<?php echo $this->Session->flash(); ?>
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-gallery >
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" >
        <div class="item active">
            <?php
            echo $this->Html->image('carousel_2.jpg',array(alt=>'Erstes Bild'));


            ?>
            <div class="container">
                <div class="carousel-caption">
                    <h1>Willkommen auf Immoeasy.net</h1>
                    <p>Wir helfen Ihnen Ihre Immobilie in Deutschland zu verkaufen. Immoeasy.net ist das Portal für provisionsfreie Immobilien</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Weitere Infos</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <?php
            echo $this->Html->image('carousel_1.jpg',array(alt=>'Erstes Bild'));


            ?>
            <div class="container">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Veröffentlichen Sie Ihre Immobilienangebote jetzt bei uns!
                        Sie können ganz einfach mit der kostenlosen Paket zur Liste Ihrer Immobilienanzeigen jetzt beginnen.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Mehr erfahren</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <?php echo $this->Html->image('../server/php/files/' . $post['Post']['id'] .'/'. $post['File'][0]['name'], array('style' => 'width:100%')); ?>
            <div class="container">
                <div class="carousel-caption">
                    <h1>One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div><!-- /.carousel -->
<div class="container">


<div class="row">

<div class="col-sm-7 col-md-8">

<h1 class="page-header"><?php echo h($post['Post']['title']); ?></h1>
<div class="row">
    <div class="col-md-3">
        <?php echo $this->Html->nestedList($post) ?>
        <span class="text-muted">Basisinformationen</span>
    </div>
    <div class="col-md-9">
        <div class="col-md-3">
            <?php if (empty($post['Post']['baseRent'] )): ?>
            <?php else: ?>
<!--                <li class="list-group-item">-->
                    <strong>Kaltmiete</strong></br>
                          <span>
                              <?php
                              $valu = ($post['Post']['baseRent']);
                              echo $this->Number->currency($valu, "EUR");  ?>
                            </span>
<!--                </li>-->
            <?php endif; ?>
            <?php if (empty($post['Post']['price'] )): ?>
            <?php else: ?>
<!--                <li class="list-group-item">-->
                    <strong>Preis</strong></br>
                          <span>
                                 <?php
                                 $valu = ($post['Post']['price']);
                                 echo $this->Number->currency($valu, "EUR");  ?>
                            </span>
<!--                </li>-->
            <?php endif; ?>
        </div>
        <div class="col-md-3">

            <?php if (empty($post['Post']['livingSpace'] )): ?>
            <?php else: ?>
                    <strong>Wohnfläche</strong></br>
                            <span>
                                   <?php
                                   echo $this->Number->format($post['Post']['livingSpace'], array(
                                       'places' => 2,
                                       'before' => 'm² ',
                                       'escape' => false,
                                       'decimals' => '.',
                                       'thousands' => ','
                                   ));
                                   ?>
                            </span>
            <?php endif; ?>
        </div>
        <div class="col-md-3">
            <?php if (empty($post['Post']['numberOfRooms'] )): ?>
            <?php else: ?>
                <strong>Zimmer</strong></br>
                <span>
                                                     <?php echo($post['Post']['numberOfRooms']); ?>
                            </span>
            <?php endif; ?>
        </div>
        <div class="col-md-3">
            <strong>Wohnungstyp</strong></br>

            <span>            <?php echo($post['Post']['objekttyp']); ?>
</span>
        </div>
    </div>
</div>
<hr class="nav-divider">

<div class="row">
    <div class="col-md-12">
<!--        <img src="../server/php/files/' . $post['Post']['id'] .'/'. $post['File'][0]['name']">-->
     <?php echo $this->Html->image('../server/php/files/' . $post['Post']['id'] .'/'. $post['File'][0]['name'], array('style' => 'width:100%')); ?>
    </div>

</div>

<hr class="nav-divider">

<div class="row">
    <div class="col-md-3">
        <span class="text-muted">Preise</span>
    </div>

    <div class="col-md-9">
<!--        <div class="col-md-6">-->



            <?php if (empty($post['Post']['apartmentType'] )): ?>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Wohnungskategorie</strong>
                            <span class="pull-right">
                                               <?php echo($post['Post']['apartmentType']); ?>
                            </span>
                </li>
            <?php endif; ?>



            <?php if (empty($post['Post']['serviceCharge'] )): ?>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Nebenkosten</strong>
                          <span class="pull-right">
 <?php
 $valu = $post['Post']['serviceCharge'];
 echo $this->Number->currency($valu, "EUR");  ?>
                </li>
            <?php endif; ?>

            <?php if (empty($post['Post']['heatingCosts'] )): ?>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Heizkosten</strong>
                          <span class="pull-right">
 <?php
 $valu = $post['Post']['heatingCosts'];
 echo $this->Number->currency($valu, "EUR");  ?>

                            </span>
                </li>
            <?php endif; ?>


            <?php if (empty($post['Post']['totalRent'] )): ?>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Gesamt miete</strong>
                          <span class="pull-right">
 <?php
 $valu = $post['Post']['totalRent'];
 echo $this->Number->currency($valu, "EUR");  ?>
                            </span>
                </li>
            <?php endif; ?>


            <?php if (empty($post['Post']['deposit'] )): ?>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Kaution</strong>
                          <span class="pull-right">
<?php
$valu = $post['Post']['deposit'];
echo $this->Number->currency($valu, "EUR");  ?>
                            </span>
                </li>
            <?php endif; ?>


            <?php if (empty($post['Post']['heatingcostsInServiceCharge'] )): ?>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Heizkosten sind in Nebenkosten enthalten.</strong>
                          <span class="pull-right">
                            <span class="glyphicon glyphicon-ok"></span>
<!--                              --><?php //echo($post['Post']['heatingcostsInServiceCharge']); ?>
                            </span>
                </li>
            <?php endif; ?>


            <?php if (empty($post['Post']['parkingSpacePrice'] )): ?>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Stellplatz Miete</strong>
                          <span class="pull-right">
                            <span class="glyphicon glyphicon-euro"></span>
                              <?php echo($post['Post']['parkingSpacePrice']); ?>
                            </span>
                </li>
            <?php endif; ?>
<!--        </div>-->
<!--        <div class="col-md-6">-->
<!---->
<!--        </div>-->
    </div>
</div>

<hr class="nav-divider">

<div class="row">
    <div class="col-md-3">
        <span class="text-muted">Hauptkriterien</span>
    </div>

    <div class="col-md-9">
        <div class="col-md-6">




        <?php if (empty($post['Post']['floor'] )): ?>
        <?php else: ?>
            <li class="list-group-item">
                <strong>Etage</strong>
                            <span class="pull-right">
  <?php echo($post['Post']['floor']); ?>
                            </span>

            </li>
        <?php endif; ?>




        <?php if (empty($post['Post']['numberOfParkingSpaces'] )): ?>
        <?php else: ?>
            <li class="list-group-item">
                <strong>Parkflächenanzahl</strong>
                            <span class="pull-right">
  <?php echo($post['Post']['numberOfParkingSpaces']); ?>
                            </span>
            </li>
        <?php endif; ?>




        <?php if (empty($post['Post']['condition'] )): ?>

        <?php else: ?>
            <li class="list-group-item">
                <strong>Objektzustand</strong>
                            <span class="pull-right">
  <?php echo($post['Post']['condition']); ?>
                            </span>
            </li>
        <?php endif; ?>



        <?php if (empty($post['Post']['lastRefurbishment'] )): ?>
        <?php else: ?>
            <li class="list-group-item">
                <strong>Letzte Modernisierung</strong>
                            <span class="pull-right">
  <?php echo($post['Post']['lastRefurbishment']); ?>
                            </span>
            </li>
        <?php endif; ?>


        <?php if (empty($post['Post']['interiorQuality'] )): ?>
        <?php else: ?>
            <li class="list-group-item">
                <strong>Qualität der Ausstattung</strong>
                            <span class="pull-right">
  <?php echo($post['Post']['interiorQuality']); ?>
                            </span>
            </li>
        <?php endif; ?>


        <?php if (empty($post['Post']['constructionYear'] )): ?>
        <?php else: ?>
            <li class="list-group-item">
                <strong>Baujahr</strong>
                            <span class="pull-right">
  <?php echo($post['Post']['constructionYear']); ?>
                            </span>
            </li>
        <?php endif; ?>



        <?php if (empty($post['Post']['freeFrom'] )): ?>
        <?php else: ?>
            <li class="list-group-item">
                <strong>Frei ab</strong>
                            <span class="pull-right">
  <?php echo($post['Post']['freeFrom']); ?>
                            </span>
            </li>
        <?php endif; ?>

        <?php if (empty($post['Post']['heatingType'] )): ?>
        <?php else: ?>
            <li class="list-group-item">
                <strong>Heizungsart</strong>
                            <span class="pull-right">
  <?php echo($post['Post']['heatingType']); ?>
                            </span>
            </li>
        <?php endif; ?>


        <?php if (empty($post['Post']['firingType'] )): ?>
        <?php else: ?>
            <li class="list-group-item">
                <strong>Befeuerungsarten</strong>
                            <span class="pull-right">
  <?php echo($post['Post']['firingType']); ?>
                            </span>
            </li>
        <?php endif; ?>

        <?php if (empty($post['Post']['BuildingEnergyRatingType'] )): ?>
        <?php else: ?>
            <li class="list-group-item">
                <strong>Energieausweistyp</strong>
                            <span class="pull-right">
  <?php echo($post['Post']['BuildingEnergyRatingType']); ?>
                            </span>
            </li>
        <?php endif; ?>

        <?php if (empty($post['Post']['thermalCharacteristic'] )): ?>
        <?php else: ?>
            <li class="list-group-item">
                <strong>Energieverbrauchskennwert</strong>
                            <span class="pull-right">
  <?php echo($post['Post']['thermalCharacteristic']); ?>
                            </span>
            </li>
        <?php endif; ?>

        <?php if (empty($post['Post']['energyConsumptionContainsWarmWater'] )): ?>
        <?php else: ?>
            <li class="list-group-item">
                <strong>Energieverbrauch enthält Warmwasser</strong>
                            <span class="pull-right">
  <?php echo($post['Post']['energyConsumptionContainsWarmWater']); ?>
                            </span>
            </li>
        <?php endif; ?>

        <?php if (empty($post['Post']['numberOfFloors'] )): ?>
        <?php else: ?>
            <li class="list-group-item">
                <strong>Etagenzahl</strong>
                            <span class="pull-right">
  <?php echo($post['Post']['numberOfFloors']); ?>
                            </span>
            </li>
        <?php endif; ?>

        </div>
        <div class="col-md-6">


            <?php if (empty($post['Post']['usableFloorSpace'] )): ?>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Nutzfläche</strong>
                            <span class="pull-right">
  <?php echo($post['Post']['usableFloorSpace']); ?>
                            </span>
                </li>
            <?php endif; ?>

            <?php if (empty($post['Post']['numberOfBedRooms'] )): ?>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Anzahl Schlafzimmer</strong>
                            <span class="pull-right">
  <?php echo($post['Post']['numberOfBedRooms']); ?>
                            </span>
                </li>
            <?php endif; ?>


            <?php if (empty($post['Post']['numberOfBathRooms'] )): ?>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Anzahl Badezimmer</strong>
                            <span class="pull-right">
  <?php echo($post['Post']['numberOfBathRooms']); ?>
                            </span>
                </li>
            <?php endif; ?>
            <?php if (empty($post['Post']['parkingSpaceType'] )): ?>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Parkplatz</strong>
                            <span class="pull-right">
  <?php echo($post['Post']['parkingSpaceType']); ?>
                            </span>
                </li>
            <?php endif; ?>
            <?php if (empty($post['Post']['usableFloorSpace'] )): ?>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Nutzfläche</strong>
                            <span class="pull-right">
  <?php echo($post['Post']['usableFloorSpace']); ?>
                            </span>
                </li>
            <?php endif; ?>
            <?php if (empty($post['Post']['usableFloorSpace'] )): ?>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Nutzfläche</strong>
                            <span class="pull-right">
  <?php echo($post['Post']['usableFloorSpace']); ?>
                            </span>
                </li>
            <?php endif; ?>
            <?php if (empty($post['Post']['usableFloorSpace'] )): ?>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Nutzfläche</strong>
                            <span class="pull-right">
  <?php echo($post['Post']['usableFloorSpace']); ?>
                            </span>
                </li>
            <?php endif; ?>
            <?php if (empty($post['Post']['usableFloorSpace'] )): ?>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Nutzfläche</strong>
                            <span class="pull-right">
  <?php echo($post['Post']['usableFloorSpace']); ?>
                            </span>
                </li>
            <?php endif; ?>
            <?php if (empty($post['Post']['usableFloorSpace'] )): ?>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Nutzfläche</strong>
                            <span class="pull-right">
  <?php echo($post['Post']['usableFloorSpace']); ?>
                            </span>
                </li>
            <?php endif; ?>
            <?php if (empty($post['Post']['usableFloorSpace'] )): ?>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Nutzfläche</strong>
                            <span class="pull-right">
  <?php echo($post['Post']['usableFloorSpace']); ?>
                            </span>
                </li>
            <?php endif; ?>
        </div>
    </div>
</div>
<hr class="nav-divider">

<div class="row">
    <div class="col-md-3">
<!--        <span class="glyphicon glyphicon-euro"> </span>-->
        <span class="text-muted">Ausstattung</span>
    </div>

    <div class="col-md-9">
        <div class="col-md-6">

            <?php if (empty($post['Post']['lift'] )): ?>
                <li class="list-group-item">
                    <strong><del>Aufzug</del></strong>
                </li>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Aufzug</strong>
                          <span class="pull-right">
                            <span class="glyphicon glyphicon-ok"></span>
                            </span>
                </li>
            <?php endif; ?>

            <?php if (empty($post['Post']['cellar'] )): ?>
                <li class="list-group-item">
                    <strong><del>Keller</del></strong>
                </li>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Keller</strong>
                            <span class="pull-right">
                            <span class="glyphicon glyphicon-ok"></span>
                            </span>
                </li>
            <?php endif; ?>

            <?php if (empty($post['Post']['handicappedAccessible'] )): ?>
                <li class="list-group-item">
                    <strong><del>Behidertengerecht</del></strong>
                </li>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Behidertengerecht</strong>
                            <span class="pull-right">
                            <span class="glyphicon glyphicon-ok"></span>
                            </span>
                </li>
            <?php endif; ?>

            <?php if (empty($post['Post']['guestToilet'] )): ?>
                <li class="list-group-item">
                    <strong><del>Gäste-WC</del></strong>
                </li>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Gäste-WC</strong>
                            <span class="pull-right">
                            <span class="glyphicon glyphicon-ok"></span>
                            </span>
                </li>
            <?php endif; ?>
            <?php if (empty($post['Post']['petsAllowed'] )): ?>
                <li class="list-group-item">
                    <strong><del>Haustiere</del></strong>
                </li>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Haustiere</strong>
                            <span class="pull-right">
                            <span class="glyphicon glyphicon-ok"></span>
                            </span>
                </li>
            <?php endif; ?>

            <?php if (empty($post['Post']['builtInKitchen'] )): ?>
                <li class="list-group-item">
                    <strong><del>Einbauküche</del></strong>
                </li>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Einbauküche</strong>
                            <span class="pull-right">
                            <span class="glyphicon glyphicon-ok"></span>
                            </span>
                </li>
            <?php endif; ?>

            <?php if (empty($post['Post']['balcony'] )): ?>
                <li class="list-group-item">
                    <strong><del>Balkon/Terrasse</del></strong>
                </li>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Balkon/Terrasse</strong>
                            <span class="pull-right">
                            <span class="glyphicon glyphicon-ok"></span>
                            </span>
                </li>
            <?php endif; ?>

            <?php if (empty($post['Post']['certificateOfEligibilityNeeded'] )): ?>
                <li class="list-group-item">
                    <strong><del>WBS-Schein erforderlich</del></strong>
                </li>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>WBS-Schein erforderlich</strong>
                            <span class="pull-right">
                            <span class="glyphicon glyphicon-ok"></span>
                            </span>
                </li>
            <?php endif; ?>

            <?php if (empty($post['Post']['garden'])): ?>
                <li class="list-group-item">
                    <strong><del>Gartenbenutzung</del></strong>
<!--                            <span class="pull-right">-->
<!--                            <span class="glyphicon glyphicon-ok"></span>-->
<!--                            </span>-->
                </li>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Gartenbenutzung</strong>
                            <span class="pull-right">
                            <span class="glyphicon glyphicon-ok"></span>
                            </span>
                </li>
            <?php endif; ?>

        </div>
        <div class="col-md-6">


        </div>
        <!-- /.col-sm-4 -->
        <div class="col-sm-6">



        </div>
    </div>
</div>
<hr class="nav-divider">
        <?php if (empty($post['Post']['descriptionNote'] )): ?>
        <?php else: ?>
<div class="row">
    <div class="col-md-3">
            <span class="text-muted">Objektbeschreibung</span>
    </div>
    <div class="col-md-9">
<!--        <div class="col-md-2">-->
<!--        </div>-->
<!--        <div class="col-md-10">-->
                <span><?php echo nl2br($post['Post']['descriptionNote']);?></span>
<!--        </div>-->
    </div>
</div>
        <?php endif; ?>

<hr class="nav-divider">
<?php if (empty($post['Post']['locationNote'] )): ?>
<?php else: ?>
    <div class="row">
        <div class="col-md-3">
            <span class="text-muted">Lagebeschreibung</span>
        </div>
        <div class="col-md-9">
<!--            <div class="col-md-2">-->
<!--            </div>-->
<!--            <div class="col-md-10">-->
                <span><?php echo nl2br($post['Post']['locationNote']);?></span>
<!--            </div>-->
        </div>
    </div>
<?php endif; ?>

<hr class="nav-divider">
<?php if (empty($post['Post']['furnishingNote'] )): ?>
<?php else: ?>
    <div class="row">
        <div class="col-md-3">
            <span class="text-muted">Möblierung</span>
        </div>
        <div class="col-md-9">
<!--            <div class="col-md-2">-->
<!--            </div>-->
<!--            <div class="col-md-10">-->
                <span><?php echo nl2br($post['Post']['furnishingNote'])?></span>
<!--            </div>-->
        </div>
    </div>
<?php endif; ?>
<hr class="nav-divider">




<!-- The file upload form used as target for the file upload widget -->
<form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
    <!-- Redirect browsers with JavaScript disabled to the origin page -->
    <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
    <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
    <!--                    <div class="row fileupload-buttonbar">-->
    <!--                        <div class="col-lg-7">-->
    <!--                            <!-- The fileinput-button span is used to style the file input field as button -->
    <!--                <span class="btn btn-success fileinput-button">-->
    <!--                    <i class="glyphicon glyphicon-plus"></i>-->
    <!--                    <span>Add files...</span>-->
    <!--                    <input type="file" name="files[]" multiple>-->
    <!--                </span>-->
    <!--                            <button type="submit" class="btn btn-primary start">-->
    <!--                                <i class="glyphicon glyphicon-upload"></i>-->
    <!--                                <span>Start upload</span>-->
    <!--                            </button>-->
    <!--                            <button type="reset" class="btn btn-warning cancel">-->
    <!--                                <i class="glyphicon glyphicon-ban-circle"></i>-->
    <!--                                <span>Cancel upload</span>-->
    <!--                            </button>-->
    <!--                            <button type="button" class="btn btn-danger delete">-->
    <!--                                <i class="glyphicon glyphicon-trash"></i>-->
    <!--                                <span>Delete</span>-->
    <!--                            </button>-->
    <!--                            <input type="checkbox" class="toggle">-->
    <!--                            <!-- The global file processing state -->
    <!--                            <span class="fileupload-process"></span>-->
    <!--                        </div>-->
    <!--                        <!-- The global progress state -->
    <!--                        <div class="col-lg-5 fileupload-progress fade">-->
    <!--                            <!-- The global progress bar -->
    <!--                            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">-->
    <!--                                <div class="progress-bar progress-bar-success" style="width:0%;"></div>-->
    <!--                            </div>-->
    <!--                            <!-- The extended global progress state -->
    <!--                            <div class="progress-extended">&nbsp;</div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!-- The table listing the files available for upload/download -->
    <table role="presentation" class="table table-striped">
        <tbody class="files"></tbody>
    </table>
</form>
<br>
<!--                <div class="panel panel-default">-->
<!--                    <div class="panel-heading">-->
<!--                        <h3 class="panel-title">Demo Notes</h3>-->
<!--                    </div>-->
<!--                    <div class="panel-body">-->
<!--                        <ul>-->
<!--                            <li>The maximum file size for uploads in this demo is <strong>5 MB</strong> (default file size is unlimited).</li>-->
<!--                            <li>Only image files (<strong>JPG, GIF, PNG</strong>) are allowed in this demo (by default there is no file type restriction).</li>-->
<!--                            <li>Uploaded files will be deleted automatically after <strong>5 minutes</strong> (demo setting).</li>-->
<!--                            <li>You can <strong>drag &amp; drop</strong> files from your desktop on this webpage (see <a href="https://github.com/blueimp/jQuery-File-Upload/wiki/Browser-support">Browser support</a>).</li>-->
<!--                            <li>Please refer to the <a href="https://github.com/blueimp/jQuery-File-Upload">project website</a> and <a href="https://github.com/blueimp/jQuery-File-Upload/wiki">documentation</a> for more information.</li>-->
<!--                            <li>Built with the <a href="http://getbootstrap.com/">Bootstrap</a> CSS framework and Icons from <a href="http://glyphicons.com/">Glyphicons</a>.</li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->


<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
           <td>
            <label class="title">
                <span>Title:</span><br>
                <input name="title[]" class="form-control">

            </label>
            <label class="description">
                <span>Description:</span><br>
                <input name="description[]" class="form-control">
            </label>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}

</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
    <div class="row" style="display:none">

{% for (var i=0, file; file=o.files[i]; i++) { %}

   <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.url%}" style="width:242px;height:200px" class="img-responsive"></a>
                        {% } %}


                        <div class="caption">
                             <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>

            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
                        </div>
                    </div>
                </div>







{% } %}
        </div><!-- /.row -->
</script>




    <!-- /.col-sm-4 -->


<?php         echo $this->Html->link("Demo", array('controller' => 'posts','action'=> 'five', $id), array( 'class' => 'btn btn-lg btn-primary btn-block'));
?>

</div>
<div class="col-sm-5  col-md-4 ">
    <h1 class="page-header">Anbieter</h1>
    <ul class="list-group">
        <?php if (empty($post['Post']['kontaktName'] )): ?>
        <?php else: ?>
            <li class="list-group-item">
                <strong>Name</strong>
                          <span class="pull-right">
                            <span class="glyphicon glyphicon-user"></span>
                              <?php echo($post['Post']['kontaktName']); ?>
                            </span>
            </li>

        <?php endif; ?>
        <?php if (empty($post['Post']['kontaktTel'] )): ?>
        <?php else: ?>
            <li class="list-group-item">
                <strong>Tel</strong>
                          <span class="pull-right">
                              glyphicon glyphicon-list
                            <span class="glyphicon glyphicon-earphone"></span>
                              <?php echo($post['Post']['kontaktTel']); ?>
                            </span>
            </li>
        <?php endif; ?>
        <?php if (empty($post['Post']['kontaktMobil'] )): ?>
        <?php else: ?>
            <li class="list-group-item">
                <strong>Mobil</strong>
                          <span class="pull-right">
                            <span class="glyphicon glyphicon-phone"></span>
                              <?php echo($post['Post']['kontaktMobil']); ?>
                            </span>
            </li>

        <?php endif; ?>
        <?php if (empty($post['Post']['kontaktEmail'] )): ?>
        <?php else: ?>
            <li class="list-group-item">
                <strong>Email</strong>
                          <span class="pull-right">
                            <span class="glyphicon glyphicon-envelope"></span>
                              <?php echo($post['Post']['kontaktEmail']); ?>
                            </span>
            </li>

        <?php endif; ?>
    </ul>


    <?= $this->element('sidebar'); ?>
        <?php if (empty($post['Post']['showAddress'] ) || $post['Post']['showAddress'] == '0' ): ?>
            <address>
                <legend>Objektadresse</legend>
                <strong><?php echo $post['Post']['street']; ?> <?php echo $post['Post']['houseNumber']; ?></strong><br>
                <?php echo $post['Post']['postcode']; ?> <?php echo $post['Post']['city']; ?><br>
            </address>

        <?php else: ?>
            <address>
                <legend>Objektadresse</legend>
                <!--                <strong>--><?php //echo $post['Post']['street']; ?><!-- --><?php //echo $post['Post']['houseNumber']; ?><!--</strong><br>-->
                <?php echo $post['Post']['postcode']; ?> <?php echo $post['Post']['city']; ?><br>
            </address>


    <?php endif; ?>


</div>
</div>
</div>
<?php

$addresse = $post['Post']['street'] . " ". $post['Post']['houseNumber'] ."</br> ". $post['Post']['postcode'] . " ". $post['Post']['city'];
// Override any of the following default options to customize your map
$map_options = array(
    'id' => 'map_canvas',
    'width' => '100%',
    'height' => '400px',
    'style' => '',
    'zoom' => 14,
    'type' => 'HYBRID',
    'custom' => null,
    'localize' => false,
    'latitude' => $post['Post']['latitude'],
    'longitude' => $post['Post']['longitude'],
//        'address' => '1 Infinite Loop, Cupertino',
    'marker' => true,
    'markerTitle' => 'Test',
    'markerIcon' => 'http://google-maps-icons.googlecode.com/files/home.png',
    'markerShadow' => 'http://google-maps-icons.googlecode.com/files/shadow.png',
    'infoWindow' => true,
    'windowText' => 'Adresse: ' . $addresse
);
?>
<?= $this->GoogleMap->map($map_options); ?>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<?php echo $this->Html->script('jquery.ui.widget'); ?>
<script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- blueimp Gallery script -->
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<?php
echo $this->Html->script('jquery.iframe-transport');
echo $this->Html->script('jquery.fileupload');
echo $this->Html->script('jquery.fileupload-process');
echo $this->Html->script('jquery.fileupload-image');
echo $this->Html->script('jquery.fileupload-audio');
echo $this->Html->script('jquery.fileupload-video');
echo $this->Html->script('jquery.fileupload-validate');
echo $this->Html->script('jquery.fileupload-ui');
echo $this->Html->script('main');
echo $this->Html->script('cors/jquery.xdr-transport');
echo $this->fetch('script');

?>


<?php //echo $this->element('sql_dump');
echo $this->Js->writeBuffer();

?>


</body>
</html>
