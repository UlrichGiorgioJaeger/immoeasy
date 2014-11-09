

    <!--<p>--><?php //$anbieter['']?><!-- </p>-->



<?php echo $this->Form->create('Post', array(
    'inputDefaults' => array(
        'div' => 'form-group',
        'wrapInput' => false,
        'class' => 'form-control'
    ),
    'class' => 'well'
));
?>

<fieldset>
		<legend>Nachricht senden</legend>
		<?php

echo $this->Form->input('Contact.0.name', array(
    'label' => 'Vorname und Nachname'
    ));
        echo $this->Form->input('Contact.0.email', array(
            'label' => 'E-Mail-Adresse'
        ));
        echo $this->Form->input('Contact.0.tel', array(
            'label' => 'Ihre Telefonnummer',
        ));

        echo $this->Form->input('Contact.0.message', array(
            'type' => 'textarea',
            'label' => 'Nachricht',
            'default'=>'Besichtigungstermin ist erwünscht.'
        ));
?>
    <?php echo $this->Form->submit('Absenden', array(
        'div' => 'form-group',
        'class' => 'btn btn-primary'
    )); ?>
    </fieldset>

<?php

echo $this->Form->end();

?>