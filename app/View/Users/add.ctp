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
        <?php echo $cakeDescription ?>
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

    <?php echo $this->Form->create('User', array('action' => 'add' ,


        'inputDefaults' => array(
            'div' => 'form-group',
            'wrapInput' => false,
            'class' => 'form-control'
        ),
        'class' => 'well'
    ));?>

        <h2 class="form-signin-heading">Kostenlos registrieren</h2>

        <p>
            Um Ihre Immobilie einfach und schnell an über 12 Millionen Besucher zu inserieren,
            müssen Sie sich zunächst registrieren.
            Ihre persönlichen Daten werden absolut vertraulich behandelt und keinesfalls ohne
            Ihre Zustimmung an Dritte weitergegeben.
            Die Registrierung ist kostenlos und unverbindlich.
            <?php
            echo $this->Html->link(
                'Sie sind bereits registriert?',
                array(
                    'controller' => 'users',
                    'action' => 'login',
                    'full_base' => true,
                )
            );?>
        </p>
    <fieldset>
        <legend>Login Daten</legend>

        <?php echo $this->Form->input('username', array(
            'label' => 'Benutzername',
            'placeholder' => 'Benutzername'
        )); ?>
        <?php echo $this->Form->input('email', array(
            'placeholder' => 'E-Mail-Adresse',
            'label' => array(
                'text' => 'E-Mail-Adresse',
            ),
            'beforeInput' => '<div class="input-group"><span class="input-group-addon">@</span>',
            'afterInput' => '</div>'
        )); ?>

        <?php echo $this->Form->input('password', array(
            'label' => array(
                'text' => 'Passwort'
            ),
            'placeholder' => 'Passwort'
        )); ?>
        <?php echo $this->Form->input('passwordConfirm', array(
            'type' => 'password',
            'label' => array(
                'text' => 'Passwort wiederholen'
            ),
            'placeholder' => 'Password wiederholen'
        )); ?>

        <legend>Persönliche Daten</legend>

        <?php echo $this->Form->input('anrede', array(
            'empty' => '(auswählen)',
            'options' => array('Herr' => 'Herr', 'Frau' => 'Frau')

        )); ?>
        <div class="row">
               <div class="col-md-6">
                   <?php echo $this->Form->input('vorname', array(
                       'label' => 'Vorname',
                       'placeholder' => 'Vorname',
                   )); ?>
               </div>
            <div class="col-md-6">
                <?php echo $this->Form->input('nachname', array(
                    'label' => 'Nachname',
                    'placeholder' => 'Nachname',
                )); ?>

            </div>
        </div>


<!--        --><?php //echo $this->Form->input('firma', array(
//            'label' => 'Firma',
//            'placeholder' => 'Firma',
//            'after' => '<span class="help-block">Firmenname nur eintragen wenn Firma Eigentümer oder Verkäufer der Immobilie ist.</span>'
//        )); ?>

        <?php echo $this->Form->input('telefonnummer', array(
            'label' => 'Telefonnummer',
            'placeholder' => 'Handynummer oder Telefonnummer',
        )); ?>
        <div class="row">
            <div class="col-md-8">
                <?php echo $this->Form->input('strasse', array(
                    'label' => 'Straße',
                    'placeholder' => 'Straße',
                )); ?>
            </div>
            <div class="col-md-4">
                <?php echo $this->Form->input('hausnummer', array(
                    'label' => 'Hausnummer',
                    'placeholder' => 'Hausnummer',
                )); ?>

            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <?php echo $this->Form->input('postleitzahl', array(
                    'label' => 'Postleitzahl',
                    'placeholder' => 'Postleitzahl',
                )); ?>
            </div>
            <div class="col-md-8">
                <?php echo $this->Form->input('stadt', array(
                    'label' => 'Stadt',
                    'placeholder' => 'Stadt',
                )); ?>

            </div>
        </div>

        <?php echo $this->Form->input('land', array(
            'label' => 'Land',
            'placeholder' => 'Land',
        )); ?>


<!--        --><?php //echo $this->Form->input('agb', array(
//            'wrapInput' => 'col col-md-9 col-md-offset-3',
//
//            'type' => 'checkbox',
//            'before' => '<label class="col col-md-3 control-label">Ich akzeptiere die AGB von Immoeasy.net</label>',
//            'label' => false,
//            'class' => false,
//            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
//        )); ?>


        <?php echo $this->Form->input('agb', array(
            'wrapInput' => 'col col-md-9',
            'label' => 'Ich akzeptiere die <a data-toggle="modal" data-target="#myModal">AGB</a> der ImmoEasy GmbH',

            'type' => 'checkbox',

            'class' => false
        )); ?>

    </fieldset>
        <?php echo $this->Form->submit('Registrieren', array(
            'div' => 'form-group',
            'class' => 'btn btn-lg btn-primary btn-block'
        )); ?>

    <?php echo $this->Form->end(); ?>




    </div>
        <div class="col-md-5 col-md-offset-1" >


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



