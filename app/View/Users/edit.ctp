<?php
echo $this->element('sidebarDashboard');

?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<!--            <h1 class="page-header">Profil</h1>-->
            <?php echo $this->Session->flash(); ?>
<!--            --><?php //echo $this->Session->flash('auth'); ?>

<!--            <div class="row placeholders">-->
<!--                <div class="col-xs-6 col-sm-3 placeholder">-->
<!--                    <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">-->
<!--                    <h4>Label</h4>-->
<!--                    <span class="text-muted">Something else</span>-->
<!--                </div>-->
<!--                <div class="col-xs-6 col-sm-3 placeholder">-->
<!--                    <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">-->
<!--                    <h4>Label</h4>-->
<!--                    <span class="text-muted">Something else</span>-->
<!--                </div>-->
<!--                <div class="col-xs-6 col-sm-3 placeholder">-->
<!--                    <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">-->
<!--                    <h4>Label</h4>-->
<!--                    <span class="text-muted">Something else</span>-->
<!--                </div>-->
<!--                <div class="col-xs-6 col-sm-3 placeholder">-->
<!--                    <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">-->
<!--                    <h4>Label</h4>-->
<!--                    <span class="text-muted">Something else</span>-->
<!--                </div>-->
<!--            </div>-->

<!--            <h2 class="sub-header">Meine Daten</h2>-->
            <div class="col-md-6">
<!--                --><?php //echo $this->Form->create('User', array(
//                    'inputDefaults' => array(
//                        'div' => 'form-group',
//                        'label' => array(
//                            'class' => 'col col-md-3 control-label'
//                        ),
//                        'wrapInput' => 'col col-md-9',
//                        'class' => 'form-control'
//                    ),
//                    'class' => 'well form-horizontal'
//                )); ?>
                <?php echo $this->Form->create('User', array(
                    'inputDefaults' => array(
                        'div' => 'form-group',
                        'wrapInput' => false,
                        'class' => 'form-control'
                    ),
                    'class' => 'well'
                ));?>

            <fieldset>
                <legend>Persönliche Informationen</legend>



                <?php echo $this->Form->input('anrede', array(
                    'empty' => '(auswählen)',
                    'options' => array('Herr' => 'Herr', 'Frau' => 'Frau')

                )); ?>
                <?php echo $this->Form->input('vorname', array(
                    'label' => 'Vorname',
                    'placeholder' => 'Vorname',
                )); ?>
                <?php echo $this->Form->input('nachname', array(
                    'label' => 'Nachname',
                    'placeholder' => 'Nachname',
                )); ?>
                <?php echo $this->Form->input('firma', array(
                    'label' => 'Firma',
                    'placeholder' => 'Firma',
                    'afterInput' => '<span class="help-block">Firmenname nur eintragen wenn Firma Eigentümer oder Verkäufer der Immobilie ist.</span>'
                )); ?>
                <legend>Kontakt Informationen</legend>
                <?php echo $this->Form->input('username', array(
                    'label' => 'Benutzername',
                    'placeholder' => 'Benutzername',
                    'afterInput' => '<span class="help-block">Ihr Benutzername.</span>'
                )); ?>
                <?php echo $this->Form->input('email', array(
                    'placeholder' => 'Email',
                    'label' => array(
                        'text' => 'Email',
                    ),
                    'beforeInput' => '<div class="input-group"><span class="input-group-addon">@</span>',
                    'afterInput' => '</div>'
                )); ?>

<!--                --><?php //echo $this->Form->input('password', array(
//                    'label' => array(
//                        'text' => 'Passwort'
//                    ),
//                    'placeholder' => 'Password'
//                )); ?>
                <?php echo $this->Form->input('telefonnummer', array(
                    'label' => 'Telefonnummer',
                    'placeholder' => 'Telefonnummer',
                )); ?>
                <?php echo $this->Form->input('strasse', array(
                    'label' => 'Straße',
                    'placeholder' => 'Straße',
                )); ?>
                <?php echo $this->Form->input('postleitzahl', array(
                    'label' => 'Postleitzahl',
                    'placeholder' => 'Postleitzahl',
                )); ?>
                <?php echo $this->Form->input('stadt', array(
                    'label' => 'Stadt',
                    'placeholder' => 'Stadt',
                )); ?>
                <?php echo $this->Form->input('land', array(
                    'label' => 'Land',
                    'placeholder' => 'Land',
                )); ?>

                <?php echo $this->Form->submit('Daten sichern', array(
                    'div' => 'form-group',
                    'class' => 'btn btn-lg btn-primary btn-block'
                )); ?>
            </fieldset>
            <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</div>


