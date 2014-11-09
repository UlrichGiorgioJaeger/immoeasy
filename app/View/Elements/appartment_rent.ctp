

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
		<legend>E-Mail an Anbieter</legend>
		<?php


        echo $this->Form->input('livingspace', array(
            'label' => 'Fläche',
            'placeholder' => 'Wohnfläche',
            'beforeInput' => '<div class="input-group"><span class="input-group-addon">m²</span>',
            'afterInput' => '</div>')); ?>
    <?php echo $this->Form->input('numberOfRooms', array(
        'placeholder' => 'Anzahl der Zimmer',
        'label' => array(
            'text' => 'Anzahl der Zimmer',
        ),
        'beforeInput' => '<div class="input-group"><span class="input-group-addon">@</span>',
        'afterInput' => '</div>'
    )); ?>
    <?php echo $this->Form->input('price', array(
        'required' => true,
        'placeholder' => 'Preis.',
        'label' => array(
            'text' => 'Preis',
        ),
        'beforeInput' => '<div class="input-group"><span class="input-group-addon">€</span>',
        'afterInput' => '</div>'
    )); ?>
    <?php echo $this->Form->input('constructionYear', array(
        'label' => array(
            'text' => 'Baujahr'
        ),
        'placeholder' => 'Baujahr'
    )); ?>
    <?php echo $this->Form->input('freeFrom', array('label' => 'Date of birth',
        'dateFormat' => 'DMY',
        'minYear' => date('Y') - 70,
        'maxYear' => date('Y') - 18)); ?>
    <?php echo $this->Form->textarea('descriptionNote',
        array('rows' => '10', 'cols' => '155')

    ); ?>

    <?php echo $this->Form->input('firma', array(
        'label' => 'Firma',
        'placeholder' => 'Firma',
        'after' => '<span class="help-block">Firmenname nur eintragen wenn Firma Eigentümer oder Verkäufer der Immobilie ist.</span>'
    )); ?>
    <?php echo $this->Form->input('telefonnummer', array(
        'label' => 'Telefonnummer',
        'placeholder' => 'Telefonnummer',
    ));


    ?>

    </fieldset>

<?php

echo $this->Form->end();

?>