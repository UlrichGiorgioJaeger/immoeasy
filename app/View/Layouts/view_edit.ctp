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

<?php
echo $this->element('sidebarDashboard');

?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <hr class="nav-divider">

    <ul class="nav nav-pills center-block">
        <li ><a href="#">Rubrik & Adresse</a></li>
        <li class="active"><a href="#">BasisDaten</a></li>
        <li><a href="#">Bilder</a></li>
        <li><a href="#">Vorschau</a></li>
        <li><a href="#">Veröffentlichung</a></li>
        <li><a href="#">Buchung abschließen</a></li>

    </ul>
    <hr class="nav-divider">
    <h1 class="page-header">Schritt 2: Immobilie beschreiben: Objektdaten eingeben</h1>
<?php echo $this->Session->flash(); ?>

            <?php echo $this->fetch('content'); ?>
    <?php         echo $this->Html->link("Speichern und weiter", array('controller' => 'posts','action'=> 'five', $id), array( 'class' => 'btn btn-lg btn-primary btn-block'));
    ?>
    </div>
	<?php
//    echo $this->element('sql_dump');
    echo $this->Js->writeBuffer();
    ?>
<script>

$(function() {
$( "#datepicker" ).datepicker();
});
</script>
</body>
</html>
