

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
            'afterInput' => '</div>'));






        ?>
    <?php

    echo $this->Form->input('numberOfRooms', array(
        'placeholder' => 'Anzahl der Zimmer',
        'label' => array(
            'text' => 'Anzahl der Zimmer',
        ),
        'beforeInput' => '<div class="input-group"><span class="input-group-addon">@</span>',
        'afterInput' => '</div>'
    ));
    echo $this->Form->input('numberOfFloors', array(
        'placeholder' => 'Anzahl der Etagen',
        'label' => array(
            'text' => 'Anzahl der Etagen',
        ),
        'beforeInput' => '<div class="input-group"><span class="input-group-addon">@</span>',
        'afterInput' => '</div>'
    ));
    ?>
    <?php echo $this->Form->input('price', array(
        'required' => true,
        'placeholder' => 'Preis.',
        'label' => array(
            'text' => 'Preis',
        ),
        'beforeInput' => '<div class="input-group"><span class="input-group-addon">€</span>',
        'afterInput' => '</div>'
    )); ?>
    <?php
     echo $this->Form->input('apartmentType', array(
        'empty' => '(auswählen)',
        'options' => array('apartment' => 'Wohnung',
            'Loft' => 'Loft',
            'Maisonette' => 'Maisonette',
            'Garage/Stellplatz' => 'Garage/Stellplatz',
            'Möbliertes Wohnen auf Zeit' => 'Möbliertes Wohnen auf Zeit',
            'WG-Zimmer' => 'WG-Zimmer',
            'Wohngrundstück(Ausland)' => 'Wohngrundstück(Ausland)',
            'Büro/Praxis' => 'Büro/Praxis',
            'Gastronomie/Hotel' => 'Gastronomie/Hotel',
            'Halle/Produktion' => 'Halle/Produktion',
            'Einzelhandel' => 'Einzelhandel',
            'Spezialgewerbe' => 'Spezialgewerbe',
            'Gewerbegrundstück' => 'Gewerbegrundstück',
            'Gewerbegrundstück ' => 'Gewerbegrundstück ',
        )

    ));

    echo $this->Form->input('condition', array(
        'empty' => '(auswählen)',
        'options' => array('apartment' => 'Wohnung',
            'Loft' => 'Loft',
            'Maisonette' => 'Maisonette',
            'Garage/Stellplatz' => 'Garage/Stellplatz',
            'Möbliertes Wohnen auf Zeit' => 'Möbliertes Wohnen auf Zeit',
            'WG-Zimmer' => 'WG-Zimmer',
            'Wohngrundstück(Ausland)' => 'Wohngrundstück(Ausland)',
            'Büro/Praxis' => 'Büro/Praxis',
            'Gastronomie/Hotel' => 'Gastronomie/Hotel',
            'Halle/Produktion' => 'Halle/Produktion',
            'Einzelhandel' => 'Einzelhandel',
            'Spezialgewerbe' => 'Spezialgewerbe',
            'Gewerbegrundstück' => 'Gewerbegrundstück',
            'Gewerbegrundstück ' => 'Gewerbegrundstück ',
        )

    ));

    echo $this->Form->input('interiorQuality', array(
        'empty' => '(auswählen)',
        'options' => array('apartment' => 'Wohnung',
            'Loft' => 'Loft',
            'Maisonette' => 'Maisonette',
            'Garage/Stellplatz' => 'Garage/Stellplatz',
            'Möbliertes Wohnen auf Zeit' => 'Möbliertes Wohnen auf Zeit',
            'WG-Zimmer' => 'WG-Zimmer',
            'Wohngrundstück(Ausland)' => 'Wohngrundstück(Ausland)',
            'Büro/Praxis' => 'Büro/Praxis',
            'Gastronomie/Hotel' => 'Gastronomie/Hotel',
            'Halle/Produktion' => 'Halle/Produktion',
            'Einzelhandel' => 'Einzelhandel',
            'Spezialgewerbe' => 'Spezialgewerbe',
            'Gewerbegrundstück' => 'Gewerbegrundstück',
            'Gewerbegrundstück ' => 'Gewerbegrundstück ',
        )

    ));
    echo $this->Form->input('floor', array(
        'label' => array(
            'text' => 'Etage'
        ),
        'placeholder' => 'Etage'
    ));
    echo $this->Form->input('numberOfParkingSpaces', array(
        'label' => array(
            'text' => 'numberOfParkingSpaces'
        ),
        'placeholder' => 'numberOfParkingSpaces'
    ));

    echo $this->Form->input('lastRefurbishment', array(
        'label' => array(
            'text' => 'lastRefurbishment'
        ),
        'placeholder' => 'lastRefurbishment'
    ));

    echo $this->Form->input('numberOfParkingSpaces', array(
        'label' => array(
            'text' => 'numberOfParkingSpaces'
        ),
        'placeholder' => 'numberOfParkingSpaces'
    ));
    echo $this->Form->input('constructionYear', array(
        'label' => array(
            'text' => 'Baujahr'
        ),
        'placeholder' => 'Baujahr'
    ));





    ?>
    <?php echo $this->Form->input('freeFrom', array('label' => 'Date of birth',
        'dateFormat' => 'DMY',
        'minYear' => date('Y') - 70,
        'maxYear' => date('Y') - 18)); ?>
    <?php echo $this->Form->textarea('descriptionNote',
        array('rows' => '10', 'cols' => '155')
    );

    echo $this->Form->input('lift', array('type' => 'checkbox', 'class' => 'checkbox', 'label' => 'Lift'));

    echo $this->Form->input('assistedLiving', array('type' => 'checkbox', 'class' => 'checkbox', 'label' => 'assistedLiving'));
    echo $this->Form->input('cellar', array('type' => 'checkbox', 'class' => 'checkbox', 'label' => 'cellar'));
    echo $this->Form->input('handicappedAccessible', array('type' => 'checkbox', 'class' => 'checkbox', 'label' => 'handicappedAccessible'));
    echo $this->Form->input('energyPerformanceCertificate', array('type' => 'checkbox', 'class' => 'checkbox', 'label' => 'energyPerformanceCertificate'));
    echo $this->Form->input('builtInKitchen', array('type' => 'checkbox', 'class' => 'checkbox', 'label' => 'builtInKitchen'));
    echo $this->Form->input('balcony', array('type' => 'checkbox', 'class' => 'checkbox', 'label' => 'balcony'));
    echo $this->Form->input('certificateOfEligibilityNeeded', array('type' => 'checkbox', 'class' => 'checkbox', 'label' => 'certificateOfEligibilityNeeded'));
    echo $this->Form->input('garden', array('type' => 'checkbox', 'class' => 'checkbox', 'label' => 'garden'));


    ?>

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