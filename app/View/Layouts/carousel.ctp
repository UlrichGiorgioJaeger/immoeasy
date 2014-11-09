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

    <?php
		echo $this->Html->meta('icon');
    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('dashboard');

    echo $this->Html->script('jquery-2.1.1.min');
    echo $this->Html->script('bootstrap.min');
    echo $this->Html->script('jquery.geocomplete');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<!--    <link rel="stylesheet" href="/resources/demos/style.css">-->

</head>
<body>
<?php echo $this->element('headerDashboard'); ?>

<?php echo $this->Session->flash(); ?>

            <?php echo $this->fetch('content'); ?>
	<?php
//    echo $this->element('sql_dump');
    echo $this->Js->writeBuffer();
    ?>
<!--<script>-->
<!---->
<!--$(function() {-->
<!--$( "#datepicker" ).datepicker();-->
<!--});-->
<!--</script>-->
</body>
</html>
