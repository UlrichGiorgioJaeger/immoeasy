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

$cakeDescription = __d('cake_dev', 'ImmoEasy.net: private Immobilien Anzeigen günstig erstellen');
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
	<?php
		echo $this->Html->meta('icon');

//    echo $this->Html->css('cake.generic');
    echo $this->Html->css('bootstrap');
    echo $this->Html->css('bootstrap.min');


    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    echo $this->Html->script('jquery-2.1.1.min');
    echo $this->Html->script('bootstrap.min');


    ?>
</head>
<body>
<!--	<div id="container">-->
		<div id="header">
            <?php echo $this->element('headerDashboard'); ?>

            <!--			<h1>--><?php //echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?><!--</h1>-->
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>


		<div id="footer">
<!--			--><?php //echo $this->Html->link(
//					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
//					'http://www.cakephp.org/',
//					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
//				);
//			?>
<!--			<p>-->
<!--				--><?php //echo $cakeVersion; ?>
<!--			</p>-->
		</div>
<!--	</div>-->
<!--	--><?php //echo $this->element('sql_dump');
    echo $this->Js->writeBuffer();
    ?>

<!--    <style>-->
<!--        #imagePreview {-->
<!--            width: 180px;-->
<!--            height: 180px;-->
<!--            background-position: center center;-->
<!--            background-size: cover;-->
<!--            -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);-->
<!--            display: inline-block;-->
<!--        }-->
<!--    </style>-->
</body>
</html>
