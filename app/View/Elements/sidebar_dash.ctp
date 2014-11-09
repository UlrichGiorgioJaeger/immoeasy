

<h1>Anbieter</h1>
    <!--<p>--><?php //$anbieter['']?><!-- </p>-->

<h1>Email an den Anbieter</h1>
<?php echo $user['User']['username']?>


<?php echo $this->Form->create('Kontakt', array(
    'inputDefaults' => array(
        'div' => 'form-group',
        'wrapInput' => false,
        'class' => 'form-control'
    ),
    'class' => 'well edib'
));
?>

<fieldset>
		<legend>Anbieter kontaktieren</legend>
		<?php

echo $this->Form->input('Name', array(
    'label' => 'Ihr Name',
    'placeholder' => 'Name',
    'after' => '<span class="help-block">Bitte Ihren Namen eingeben.</span>'
));
        echo $this->Form->input('Email', array(
            'label' => 'Ihr Email',
            'placeholder' => 'Email',
            'after' => '<span class="help-block">Bitte Ihre Email eingeben.</span>'
        ));
        echo $this->Form->input('Tel', array(
            'label' => 'Ihre Telefonnummer',
            'placeholder' => 'Telefonnummer',
            'after' => '<span class="help-block">Bitte Ihren Telefonnummer eingeben.</span>'
        ));
        echo $this->Form->input('Nachricht', array(
            'label' => 'Ihre Nachricht',
            'placeholder' => 'Nachricht',
            'after' => '<span class="help-block">Bitte Ihren Nachricht eingeben.</span>'
        ));
?>
    <?php echo $this->Form->submit('Submit', array(
        'div' => 'form-group',
        'class' => 'btn btn-primary'
    )); ?>
    </fieldset>

<?php

echo $this->Form->end();

?>