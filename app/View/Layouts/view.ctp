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

            <?php echo $this->fetch('content'); ?>


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


</body>
</html>
