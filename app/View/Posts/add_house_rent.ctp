
<?php
echo $this->element('sidebarDashboard');

?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<hr class="nav-divider">

<ul class="nav nav-pills center-block">
    <li ><a href="#">Rubrik & Adresse</a></li>
    <li class="active"><a href="#">BasisDaten</a></li>
    <li><a href="#">Bilder</a></li>
    <li><a href="#">Vorschau</a></li>
    <li><a href="#">Veröffentlichung</a></li>
    <li><a href="#">Buchung abschließen</a></li>

</ul>
<hr class="nav-divider">
<h1 class="page-header">Schritt 2: Immobilie beschreiben: Objektdaten eingeben</h1>
<h3 class="lead"><?php echo "Rubrik: " .$objekttyp . " " . $rubrik?></h3>


<?php echo $this->Session->flash(); ?>
        <?php echo $this->Form->create('Post', array(
            'inputDefaults' => array(
                'div' => 'form-group',
                'label' => array(
                    'class' => 'col col-md-3 control-label'
                ),
                'wrapInput' => 'col col-md-9',
                'class' => 'form-control'
            ),
            'class' => 'well form-horizontal'
        )); ?>
<?php //echo $this->Form->create('Post', array(
//    'inputDefaults' => array(
//        'div' => 'form-group',
//        'wrapInput' => false,
//        'class' => 'form-control'
//    ),
//    'class' => 'well'
//));
//?>

<fieldset>
<div class="row"  >

<div class="col-md-6" >
<legend>Überschrift Ihrer Anzeige</legend>
<?php
echo $this->Form->input(
    'Houserent.id',
    array(
        'type' => 'text',
        'label' => false,
        'style' => 'display:none',
        'default' => $aid
    )
);
?>

<?php echo $this->Form->input('title', array(
    'label' => 'Überschrift Ihrer Anzeige',
    'placeholder' => 'Überschrift Ihrer Anzeige',
    'errorMessage' => true,
    'div' => array(
        'id' => 'schritt1',
        'class' => 'radio',
        'title' => 'Div Title',
        'class' => 'form-group',
//        'style' => 'display:none'
    ),
    'afterInput' => '<span class="help-block">Bitte geben Sie hier eine aussagekräftige und originelle Überschrift für Ihr Objekt ein. Dabei stehen Ihnen max. 100 Zeichen zur Verfügung.</span>'

));
?>
      <legend>Basisinformationen</legend>

<?php
echo $this->Form->input('baseRent', array(
    'placeholder' => 'Kaltmiete.',
    'label' => array(
        'text' => 'Kaltmiete',
    ),
    'beforeInput' => '<div class="input-group"><span class="input-group-addon">€</span>',
    'afterInput' => '</div>'
));
echo $this->Form->input('livingSpace', array(
    'label' => 'Wohnfläche',
    'placeholder' => 'Wohnfläche',
    'beforeInput' => '<div class="input-group"><span class="input-group-addon">m²</span>',
    'afterInput' => '</div>'));

echo $this->Form->input('plotArea', array(
    'label' => 'Grundstücksfläche',
    'placeholder' => 'Grundstücksfläche',
    'beforeInput' => '<div class="input-group"><span class="input-group-addon">m²</span>',
    'afterInput' => '</div>'));

?>

<?php echo $this->Form->input('numberOfRooms', array(
    'placeholder' => 'Anzahl der Zimmer',
    'label' => array(
        'text' => 'Anzahl der Zimmer',
    ),
    'beforeInput' => '<div class="input-group"><span class="input-group-addon">@</span>',
    'afterInput' => '</div>'
));
echo $this->Form->input('Houserent.buildingType', array(
    'empty' => '(auswählen)',
    'label' => 'Hausstyp',
    'options' => array(
        'Einfamilienhaus' => 'Einfamilienhaus',
        'Reihenmittelhaus' => 'Reihenmittelhaus',
        'Reiheneckhaus' => 'Reiheneckhaus',
        'Mehrfamilienhaus' => 'Mehrfamilienhaus',
        'Bungalow' => 'Bungalow',
        'Bauernhaus' => 'Bauernhaus',
        'Doppelhaushaelfte' => 'Doppelhaushaelfte',
        'Villa' => 'Villa',
        'BurgSchloss' => 'BurgSchloss',
        'OTHER' => 'Sonstige',
        'BesondereImmobilie' => 'BesondereImmobilie')));


?>
<legend>Preise </legend>

<?php

echo $this->Form->input('Houserent.serviceCharge', array(
    'placeholder' => 'Nebenkosten.',
    'label' => array(
        'text' => 'Nebenkosten',
    ),
    'beforeInput' => '<div class="input-group"><span class="input-group-addon">€</span>',
    'afterInput' => '</div>'
));
echo $this->Form->input('Houserent.totalRent', array(

    'placeholder' => 'Warmmiete.',
    'label' => array(
        'text' => 'Warmmiete',
    ),
    'beforeInput' => '<div class="input-group"><span class="input-group-addon">€</span>',
    'afterInput' => '</div>'
));
echo $this->Form->input('Houserent.deposit', array(
    'placeholder' => 'Kaution',
    'label' => array(
        'text' => 'Kaution',
    ),
    'beforeInput' => '<div class="input-group"><span class="input-group-addon">€</span>',
    'afterInput' => '</div>'
));  echo $this->Form->input('Houserent.heatingCosts', array(
    'placeholder' => 'Heizkosten.',
    'label' => array(
        'text' => 'Heizkosten',
    ),
    'beforeInput' => '<div class="input-group"><span class="input-group-addon">€</span>',
    'afterInput' => '</div>'
));

echo $this->Form->input('Houserent.heatingcostsInServiceCharge', array(
    'type' =>'checkbox',

    'wrapInput' => 'col col-md-9 col-md-offset-3',
    'label' => array('class' => null),
    'class' => false,
    'afterInput' => '<span class="help-block">Heizkosten sind in Nebenkosten enthalten</span>'
));
//        echo $this->Form->input('heatingcostsInServiceCharge', array(
//            'type' =>'checkbox',
//            'before' => '<label class="col col-md-3 control-label">Checkbox</label>',
//            'label' => false,
//            'class' => false,
//            'afterInput' => '<span class="help-block">Heizkosten sind in Nebenkosten enthalten</span>'
//        ));

?>

<legend>Zusatzinformationen zu Ihrer Immobilie</legend>


<?php
//
//echo $this->Form->input('Houserent.rentalIncome', array(
//    'placeholder' => 'Mieteinnahmen pro Monat.',
//    'label' => array(
//        'text' => 'Mieteinnahmen pro Monat',
//    ),
//    'beforeInput' => '<div class="input-group"><span class="input-group-addon">€</span>',
//    'afterInput' => '</div>'
//));



//echo $this->Form->input('Houserent.price', array(
//    'required' => true,
//    'placeholder' => 'Kaufpreis.',
//    'label' => array(
//        'text' => 'Kaufpreis',
//    ),
//    'beforeInput' => '<div class="input-group"><span class="input-group-addon">€</span>',
//    'afterInput' => '</div>'
//));
//    echo $this->Form->input('serviceCharge', array(
//        'required' => true,
//        'placeholder' => 'Wohngeld.',
//        'label' => array(
//            'text' => 'Wohngeld',
//        ),
//        'beforeInput' => '<div class="input-group"><span class="input-group-addon">€</span>',
//        'afterInput' => '</div>'
//    ));
?>

<?php



echo $this->Form->input('Houserent.numberOfFloors', array(
    'label' => 'Etagenzahl',
    'placeholder' => 'Etagenzahl',
    'afterInput' => '<span class="help-block">Bitte geben Sie hier die Gesamtetagenanzahl des Objektes an, in dem sich die Wohnung befindet (nur Zahlen).</span>'

));


echo $this->Form->input('Houserent.usableFloorSpace', array(
    'label' => 'Nutzfläche',
    'placeholder' => 'Nutzfläche',
    'afterInput' => '<span class="help-block">Nutzflächen sind Flächen die nicht zur Wohnfläche gehören, wie etwa Kellerräume, Balkone oder Dachschrägen.</span>'

));

echo $this->Form->input('Houserent.numberOfBedRooms', array(
    'label' => 'Anzahl Schlafzimmer',
    'placeholder' => 'Anzahl Schlafzimmer',
));

echo $this->Form->input('Houserent.numberOfBathRooms', array(
    'label' => 'Anzahl Badezimmer',
    'placeholder' => 'Anzahl Badezimmer',
));

echo $this->Form->input('Houserent.numberOfParkingSpaces', array(
    'label' => array(
        'text' => 'Anzahl Garagen Stellplaetze'
    ),
    'placeholder' => 'Anzahl Garagen Stellplaetze'
)); ?>

<?php

echo $this->Form->input('Houserent.parkingSpaceType', array(
    'empty' => '(auswählen)',
    'label' => 'Parkplatz',
    'options' => array(
        'NO_INFORMATION ' => 'keine Angabe',
        'GARAGE' => 'Garage',
        'OUTSIDE' => 'Außenstellplatz',
        'CARPORT' => 'Carport',
        'DUPLEX' => 'Duplex',
        'CAR_PARK' => 'Parkhaus',
        'UNDERGROUND_GARAGE' => 'Tiefgarage'

    )));

?>


<?php



echo $this->Form->input('Houserent.parkingSpacePrice', array(
    'placeholder' => 'Stellplatzmiete.',
    'label' => array(
        'text' => 'Stellplatzmiete',
    ),
    'beforeInput' => '<div class="input-group"><span class="input-group-addon">€</span>',
    'afterInput' => '</div>'
));



//        echo $this->Form->input('useAsFlatshareRoom', array(
//            'required' => true,
//            'placeholder' => 'useAsFlatshareRoom.',
//            'label' => array(
//                'text' => 'useAsFlatshareRoom',
//            ),
//            'beforeInput' => '<div class="input-group"><span class="input-group-addon">€</span>',
//            'afterInput' => '</div>'
//        ));
?>
<?php

echo $this->Form->input('Houserent.condition', array(
    'empty' => '(auswählen)',
    'label' => 'Objektzustand',

    'options' => array(
        'NO_INFORMATION' => 'keine Angabe',
        'FIRST_TIME_USE' => 'Erstbezug',
        'FIRST_TIME_USE_AFTER_REFURBISHMENT' => 'Erstbezug nach Sanierung',
        'MINT_CONDITION' => 'Neuwertig',
        'REFURBISHED' => 'Saniert',
        'MODERNIZED' => 'Modernisiert',
        'FULLY_RENOVATED' => 'VollstaendigReonviert',
        'WELL_KEPT' => 'Gepflegt',
        'NEED_OF_RENOVATION' => 'Renovierungsbedürftig',
        'NEGOTIABLE' => 'NachVereinbarung',
        'RIPE_FOR_DEMOLITION' => 'Abbruchreif')));


echo $this->Form->input('Houserent.lastRefurbishment', array(
    'label' => array(
        'text' => 'Jahr Letzte Modernisierung'
    ),
    'placeholder' => 'Jahr Letzte Modernisierung'
));

?>
<?php

echo $this->Form->input('Houserent.interiorQuality', array(
    'empty' => '(auswählen)',
    'label' => 'Ausstattungsqualitaet',
    'options' => array(
        'NO_INFORMATION ' => 'keine Angabe',
        'LUXURY' => 'luxus',
        'SOPHISTICATED' => 'gehoben',
        'NORMAL' => 'normal',
        'SIMPLE' => 'einfach')));


?>
<?php echo $this->Form->input('Houserent.constructionYear', array(
    'label' => array(
        'text' => 'Baujahr'
    ),
    'placeholder' => 'Baujahr'
));


?>


<?php echo $this->Form->input('Houserent.freeFrom', array('label' => 'Frei Ab',
    'dateFormat' => 'DMY',
    'minYear' => date('Y') - 0,
    'maxYear' => date('Y') - 0)); ?>
<!--        --><?php //echo $this->Form->input('select', array(
//
//            'label' => array(
//                'text' => ''
//            ),
//            'class' => 'checkbox-inline',
//            'multiple' => 'checkbox',
//            'options' => array(
//                'guestToilet' => 'Gäste WC',
//                'petsAllowed' => 'Haustiere',
//                'lift' => 'Aufzug',
//                'assistedLiving' => 'assistedLiving',
//                'cellar' => 'Keller',
//                'cellar1' => 'Keller',
//                'cellar2' => 'Keller',
//                'cellar3' => 'Keller',
//                'cellar4' => 'Keller'
//
//            )
//        )); ?>
<?php

echo $this->Form->input('Houserent.petsAllowed', array(
    'type' => 'checkbox',
    'before' => '<label class="col col-md-3 control-label">Haustiere</label>',
    'label' => false,
    'class' => false,
//            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
));
//echo $this->Form->input('Houserent.summerResidencePractical', array(
//    'type' => 'checkbox',
//    'before' => '<label class="col col-md-3 control-label">Als Ferienwohnung geeignet</label>',
//    'label' => false,
//    'class' => false,
////            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
//));

echo $this->Form->input('Houserent.builtInKitchen', array(
    'type' => 'checkbox',
    'before' => '<label class="col col-md-3 control-label">Einbauküche</label>',
    'label' => false,
    'class' => false,
//            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
));
//echo $this->Form->input('Houserent.lift', array(
//    'type' => 'checkbox',
//    'before' => '<label class="col col-md-3 control-label">Aufzug</label>',
//    'label' => false,
//    'class' => false,
////            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
//));
//echo $this->Form->input('Houserent.assistedLiving', array(
//    'type' => 'checkbox',
//    'before' => '<label class="col col-md-3 control-label">assistedLiving</label>',
//    'label' => false,
//    'class' => false,
////            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
//));
echo $this->Form->input('Houserent.cellar', array(
    'type' => 'checkbox',
    'before' => '<label class="col col-md-3 control-label">Keller</label>',
    'label' => false,
    'class' => false,
//            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
));


?>
<?php

echo $this->Form->input('Houserent.guestToilet', array(
    'type' => 'checkbox',
    'before' => '<label class="col col-md-3 control-label">Gäste WC</label>',
    'label' => false,
    'class' => false,
//            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
));

echo $this->Form->input('Houserent.handicappedAccessible', array(
    'type' => 'checkbox',
    'before' => '<label class="col col-md-3 control-label">Rollstuhlgerecht</label>',
    'label' => false,
    'class' => false,
//            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
));

//echo $this->Form->input('Houserent.builtInKitchen', array(
//    'type' => 'checkbox',
//    'before' => '<label class="col col-md-3 control-label">Einbauküche</label>',
//    'label' => false,
//    'class' => false,
////            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
//));
//echo $this->Form->input('Houserent.balcony', array(
//    'type' => 'checkbox',
//    'before' => '<label class="col col-md-3 control-label">Balkon/Terrasse</label>',
//    'label' => false,
//    'class' => false,
////            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
//));
//echo $this->Form->input('Houserent.certificateOfEligibilityNeeded', array(
//    'type' => 'checkbox',
//    'before' => '<label class="col col-md-3 control-label">WBS-Schein erforderlich</label>',
//    'label' => false,
//    'class' => false,
////            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
//));
//echo $this->Form->input('Houserent.garden', array(
//    'type' => 'checkbox',
//    'before' => '<label class="col col-md-3 control-label">Gartenbenutzung</label>',
//    'label' => false,
//    'class' => false,
////            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
//));
?>

</div>
<div class="col-md-6" >
    <legend>Kontaktdaten </legend>
    <p>Wie sollen Interessenten Kontakt zu Ihnen aufnehmen?</p>
    <?php echo $this->Form->input('kontaktName', array(
        'label' => 'KontaktName',
        'placeholder' => 'KontaktName',
    )); ?>
    <?php echo $this->Form->input('kontaktEmail', array(
        'label' => 'Kontakt-E-Mail',
    )); ?>

    <?php echo $this->Form->input('kontaktTel', array(
        'label' => 'Kontakt-Telefon',
    )); ?>

    <?php echo $this->Form->input('kontaktMobil', array(
        'label' => 'Kontakt-Handynummer',
        'placeholder' => 'Kontakt-Handynummer',
    )); ?>


    <div class="row">
        <div class="col-md-8">

        </div>
        <div class="col-md-4">

        </div>
    </div>
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-8">


        </div>
    </div>
    <legend>Angaben zum Energieausweis </legend>
    <?php

    echo $this->Form->input('Houserent.energyPerformanceCertificate', array(
        'type' => 'checkbox',
        'before' => '<label class="col col-md-3 control-label">Energieausweis</label>',
        'label' => false,
        'class' => false,
//            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
    ));

    echo $this->Form->input('Houserent.heatingType', array(
        'empty' => '(auswählen)',
        'label' => 'Heizungsart',
        'options' => array(
            'NO_INFORMATION' => 'keine Angabe',
            'SELF_CONTAINED_CENTRAL_HEATING' => 'Etagenheizung',
            'STOVE_HEATING' => 'Ofenheizung',
            'CENTRAL_HEATING' => 'Zentralheizung')));

    echo $this->Form->input('Houserent.firingTypes', array(
        'empty' => '(auswählen)',
        'label' => 'BefeuerungsArt',
        'options' => array(
            'NO_INFORMATION' => 'keine Angabe',
            'GEOTHERMAL' => 'Erdwärme',
            'SOLAR_HEATING' => 'Solarheizung',
            'PELLET_HEATING' => 'Pelletheizung',
            'GAS' => 'Gas',
            'OIL' => 'Öl',
            'DISTRICT_HEATING' => 'Fernwärme',
            'ELECTRICITY' => 'Strom',
            'COAL' => 'Kohle')));
    ?>

    <?php
    echo $this->Form->input('Houserent.buildingEnergyRatingType', array(
        'empty' => '(auswählen)',
        'label' => 'Energieausweistyp',
        'options' => array(
            'NO_INFORMATION' => 'keine Angabe',
            'ENERGY_REQUIRED' => 'Endenergiebedarf',
            'ENERGY_CONSUMPTION' => 'Energieverbrauchskennwert'
        )));



    echo $this->Form->input('Houserent.thermalCharacteristic', array(
        'label' => 'Energieverbrauchskennwert',
        'placeholder' => 'Energieverbrauchskennwert',
    ));

    echo $this->Form->input('Houserent.energyConsumptionContainsWarmWater', array(
        'type' => 'checkbox',
        'before' => '<label class="col col-md-3 control-label">Energieverbrauch enthält Warmwasser</label>',
        'label' => false,
        'class' => false,
//            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
    ));
    ?>
    <legend class="page-header">Ausführliche Beschreibung Ihrer Immobilie</legend>

    <?php echo $this->Form->input('descriptionNote',
        array('type'=>'textarea','rows' => '10', 'cols' => '155', 'label'=>'Objektbeschreibung'));
    echo $this->Form->input('furnishingNote',
        array('type'=>'textarea','rows' => '10', 'cols' => '155', 'label'=>'Ausstattung'));
    echo $this->Form->input('locationNote',
        array('type'=>'textarea','rows' => '10', 'cols' => '155', 'label'=>'Lage'));
    echo $this->Form->input('otherNote',
        array('type'=>'textarea','rows' => '10', 'cols' => '155', 'label'=>'Sonstiges'));
    ?>


</div>
</div>
<?php echo $this->Form->submit('Speichern', array(
    'div' => 'form-group',
    'class' => 'btn btn-lg btn-primary btn-block'
)); ?>
</fieldset>

<?php
echo $this->Form->end();
?>
</div>

