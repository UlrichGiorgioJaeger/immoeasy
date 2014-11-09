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
//    echo $this->Html->css('navbar-fixed-top');
    echo $this->Html->css('jumbotron');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    echo $this->Html->script('jquery-2.1.1.min');
    echo $this->Html->script('bootstrap.min');

    ?>
</head>
<body>
<?php
echo $this->element('headerDashboard');

?>

    <div class="container">
    <div class="col-md-6">
    <?php echo $this->Session->flash(); ?>

    <?php echo $this->Form->create('User', array('action' => 'reset' ,


        'inputDefaults' => array(
            'div' => 'form-group',
            'wrapInput' => false,
            'class' => 'form-control'
        ),
        'class' => 'well'
    ));?>

        <h2 class="form-signin-heading">Herzlichen Glückwunsch Sie haben sich erfolgreich auf ImmoEasy.net registriert </h2>

        <p>
            Haben Sie Ihr Passwort vergessen, einfach Ihre Email-Adresse eingeben und ein neues Passwort erstellen.
            <?php
            echo $this->Html->link(
                'Jetzt einloggen',
                array(
                    'controller' => 'users',
                    'action' => 'login',
                    'full_base' => true,
                )
            );?>
        </p>
    <fieldset>



<!---->
<!--            <form method="post">-->
<!---->
<!--                <input type="submit" class="button" style="float:left;margin-left:3px;" value="Save" />-->
<!---->
<!--                --><?php ////echo $this->Form->end();?>
<!--            </form>-->
        <legend><?php __('Passwort vergessen?'); ?></legend>

            <?php
            if(isset($errors)){
                echo '<div class="error">';
                echo "<ul>";
                foreach($errors as $error){
                    echo"<li><div class='error-message'>$error</div></li>";
                }
                echo"</ul>";
                echo'</div>';
            }
            ?>

            <?php

                echo $this->Form->input('password',array("type"=>"password"));
                echo $this->Form->input('password_confirm',array("type"=>"password"));

            echo $this->Form->submit('Widerherstellen', array(
                'div' => 'form-group',
                'class' => 'btn btn-lg btn-primary btn-block'
            )); ?>
            <?php echo $this->Form->end();?>


    </div>
        <div class="col-md-5 col-md-offset-1" >
            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                AGB modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        <p>
        <h3>Die wesentlichen Vorteile</h3>
        <ul>
            <li>Arbeitsersparnis am PC - nur 1 x Objektdaten, Bilder und Texte eingeben</li>
            <li>Bis zu 60% Kostenersparnis bei den Anzeigenkosten</li>
            <li>Erhebliche größere Reichweite durch Veröffentlichung auf den besten Portalen</li>
            <li>Größere Reichweite = Mehr Anfragen = schneller vermieten/verkaufen</li>
            <li>Die Kosten für die anderen Portale trägt ohne-makler.net</li>
            <li>Fazit: sehr, sehr gut, weil einfacher, effektiver, günstiger</li>
        </ul>
        </p>

        <p>
        <h3>Kostenlose Registrierung</h3>
        <ul>
            <li>Die Registrierung bei Ohne-Makler ist kostenlos und unverbindlich</li>
            <li>Nach Ihrer Registrierung können Sie Ihre <strong>Immobilie einfach und schnell vermarkten</strong></li>
            <li>Sämtliche Daten werden sicher gespeichert</li>
        </ul>
        </p>

        <p>
        <h3>Sicherheit</h3>
        <ul>
            <li>Sämtliche Daten werden verschlüsselt übertragen</li>
        </ul>

        </div>
<!--        col-md 8 container-->
</div>
<?php
echo $this->Js->writeBuffer();


?>


</body>
</html>



