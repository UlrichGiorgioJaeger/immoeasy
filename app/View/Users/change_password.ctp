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
    <?php
    echo $this->Html->meta('icon');
    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('signin');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');


    ?>
</head>
<body>
<div class="container">
hallo
<?php echo $this->Session->flash('auth'); ?>

<?php echo $this->Form->create('User', array('action' => 'change_password' , 'class'=>'form-signin' , 'role' =>'form'));?>

<h2 class="form-signin-heading">Bitte einloggen</h2>

<?php echo $this->Form->input('password', array('type'=>'password', 'class' => 'form-control', 'placeholder' =>'Emailadresse', 'required' =>true ,'label'=>false, 'autofocus'=>true));
echo $this->Form->input('password_retype', array('type'=>'password', 'class' => 'form-control', 'placeholder' =>'Passwort', 'required' =>true ,'label'=>false));
echo $this->Form->submit('Passwort zusenden', array('class'=>'btn btn-lg btn-primary btn-block') );

echo $this->Form->end(); ?>


</div>
<?php echo $this->element('sql_dump');
echo $this->Js->writeBuffer();
echo $this->Html->script('jquery-2.1.1.min');
echo $this->Html->script('bootstrap.min');

?>


</body>
</html>





