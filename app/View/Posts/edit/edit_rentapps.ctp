
<?php
echo $this->element('sidebarDashboard');

?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h1 class="page-header">Immobilie beschreiben: Objektdaten eingeben</h1>

<div class="row"  >
<div class="col-md-6" >
<?php echo $this->Session->flash(); ?>

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
<?php echo $this->Form->input('title', array(
//    'label' => 'Überschrift Ihrer Anzeige',
    'placeholder' => 'Überschrift Ihrer Anzeige',
    'required' => true,
    'errorMessage' => true,
    'div' => array(
        'id' => 'schritt1',
        'class' => 'radio',
        'title' => 'Div Title',
        'class' => 'form-group',
//        'style' => 'display:none'
    ),

    'after' => '<span class="help-block">Überschrift Ihrer Anzeige
Bitte geben Sie hier eine aussagekräftige und originelle Überschrift für Ihr Objekt ein. Dabei stehen Ihnen max. 100 Zeichen zur Verfügung.</span>'
));
?>
<h1 class="page-header">Basisinformationen zu Ihrer Immobilie</h1>

<?php

echo $this->Form->input('apartmentType', array(
    'empty' => '(auswählen)',
    'label' => 'Wohnungskategorie',
    'options' => array(
        'ROOF_STOREY' => 'Dachgeschoss',
        'LOFT' => 'Loft',
        'MAISONETTE' => 'Maisonette',
        'PENTHOUSE' => 'Penthouse',
        'TERRACED_FLAT' => 'Terrassenwohnung',
        'GROUND_FLOOR' => 'Erdgeschosswohnung',
        'APARTMENT' => 'Etagenwohnung',
        'RAISED_GROUND_FLOOR' => 'Hochparterre',
        'HALF_BASEMENT' => 'Souterrain',
        'OTHER' => 'Sonstige',
        'NO_INFORMATION' => 'Keine Angabe')));

echo $this->Form->input('floor', array(
    'label' => 'Etage',
    'placeholder' => 'Etage'
));



echo $this->Form->input('numberOfParkingSpaces', array(
    'label' => array(
        'text' => 'Anzahl Garagen Stellplaetze'
    ),
    'placeholder' => 'Anzahl Garagen Stellplaetze'
)); ?>
<?php

echo $this->Form->input('condition', array(
    'empty' => '(auswählen)',
    'label' => 'Objektzustand',

    'options' => array(
        'NO_INFORMATION ' => 'keine Angabe',
        'FIRST_TIME_USE ' => 'Erstbezug',
        'FIRST_TIME_USE_AFTER_REFURBISHMENT ' => 'Erstbezug nach Sanierung',
        'MINT_CONDITION ' => 'Neuwertig',
        'REFURBISHED ' => 'Saniert',
        'MODERNIZED ' => 'Modernisiert',
        'FULLY_RENOVATED' => 'VollstaendigReonviert',
        'WELL_KEPT ' => 'Gepflegt',
        'NEED_OF_RENOVATION ' => 'Renovierungsbedürftig',
        'NEGOTIABLE ' => 'NachVereinbarung',
        'RIPE_FOR_DEMOLITION ' => 'Abbruchreif')));


echo $this->Form->input('lastRefurbishment', array(
    'label' => array(
        'text' => 'Jahr Letzte Modernisierung'
    ),
    'placeholder' => 'Jahr Letzte Modernisierung'
));

?>
<?php

echo $this->Form->input('interiorQuality', array(
    'empty' => '(auswählen)',
    'label' => 'Ausstattungsqualitaet',
    'options' => array(
        'NO_INFORMATION ' => 'keine Angabe',
        'LUXURY' => 'luxus',
        'SOPHISTICATED' => 'gehoben',
        'NORMAL' => 'normal',
        'SIMPLE' => 'einfach')));


?>
<?php echo $this->Form->input('constructionYear', array(
    'label' => array(
        'text' => 'Baujahr'
    ),
    'placeholder' => 'Baujahr'
));


?>
<?php echo $this->Form->input('freeFrom', array('label' => 'Frei Ab',
    'dateFormat' => 'DMY',
    'minYear' => date('Y') - 70,
    'maxYear' => date('Y') - 18)); ?>

<?php


echo $this->Form->input('heatingType', array(
    'empty' => '(auswählen)',
    'label' => 'Heizungsart',
    'options' => array(
        'NO_INFORMATION ' => 'keine Angabe',
        'SELF_CONTAINED_CENTRAL_HEATING ' => 'Etagenheizung',
        'STOVE_HEATING ' => 'Ofenheizung',
        'CENTRAL_HEATING ' => 'Zentralheizung')));

echo $this->Form->input('firingType', array(
    'empty' => '(auswählen)',
    'label' => 'BefeuerungsArt',
    'options' => array(
        'NO_INFORMATION ' => 'keine Angabe',
        'GEOTHERMAL  ' => 'Erdwärme',
        'SOLAR_HEATING  ' => 'Solarheizung',
        'PELLET_HEATING  ' => 'Pelletheizung',
        'GAS' => 'Gas',
        'OIL' => 'Öl',
        'DISTRICT_HEATING' => 'Fernwärme',
        'ELECTRICITY' => 'Strom',
        'COAL' => 'Kohle')));


?>
<?php echo $this->Form->input('heatingTypeEnev2014', array(
    'label' => 'heatingTypeEnev2014',
    'placeholder' => 'heatingTypeEnev2014',
    'after' => '<span class="help-block">Firmenname nur eintragen wenn Firma Eigentümer oder Verkäufer der Immobilie ist.</span>'
)); ?>
<?php
echo $this->Form->input('BuildingEnergyRatingType', array(
    'empty' => '(auswählen)',
    'label' => 'Energieausweistyp',
    'options' => array(
        'NO_INFORMATION ' => 'keine Angabe',
        'ENERGY_REQUIRED' => 'Endenergiebedarf',
        'ENERGY_CONSUMPTION' => 'Energieverbrauchskennwert'
    )));



?>
<?php echo $this->Form->input('thermalCharacteristic', array(
    'label' => 'Energieverbrauchskennwert',
    'placeholder' => 'Energieverbrauchskennwert',
));
echo $this->Form->input('energyConsumptionContainsWarmWater', array('type' => 'checkbox', 'class' => 'checkbox', 'label' => 'Energieverbrauch enthält Warmwasser'));


echo $this->Form->input('numberOfFloors', array(
    'label' => 'Etagenzahl',
    'placeholder' => 'Etagenzahl',
));


echo $this->Form->input('usableFloorSpace', array(
    'label' => 'Nutzfläche',
    'placeholder' => 'Nutzfläche',
));

echo $this->Form->input('numberOfBedRooms', array(
    'label' => 'AnzahlSchlafzimmer',
    'placeholder' => 'AnzahlSchlafzimmer',
));

echo $this->Form->input('numberOfBathRooms', array(
    'label' => 'AnzahlBadezimmer',
    'placeholder' => 'AnzahlBadezimmer',
));
echo $this->Form->input('guestToilet', array('type' => 'checkbox', 'class' => 'checkbox', 'label' => 'GaesteWC'));

echo $this->Form->input('parkingSpaceType', array(
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
echo $this->Form->input('baseRent', array(
    'required' => true,
    'placeholder' => 'Kaltmiete.',
    'label' => array(
        'text' => 'Kaltmiete',
    ),
    'beforeInput' => '<div class="input-group"><span class="input-group-addon">€</span>',
    'afterInput' => '</div>'
));
echo $this->Form->input('totalRent', array(

    'placeholder' => 'Warmmiete.',
    'label' => array(
        'text' => 'Warmmiete',
    ),
    'beforeInput' => '<div class="input-group"><span class="input-group-addon">€</span>',
    'afterInput' => '</div>'
));
echo $this->Form->input('serviceCharge', array(
    'placeholder' => 'Nebenkosten.',
    'label' => array(
        'text' => 'Nebenkosten',
    ),
    'beforeInput' => '<div class="input-group"><span class="input-group-addon">€</span>',
    'afterInput' => '</div>'
));


echo $this->Form->input('deposit', array(
    'placeholder' => 'Kaution',
    'label' => array(
        'text' => 'Kaution',
    ),
    'beforeInput' => '<div class="input-group"><span class="input-group-addon">€</span>',
    'afterInput' => '</div>'
));  echo $this->Form->input('heatingCosts', array(
    'placeholder' => 'Heizkosten.',
    'label' => array(
        'text' => 'Heizkosten',
    ),
    'beforeInput' => '<div class="input-group"><span class="input-group-addon">€</span>',
    'afterInput' => '</div>'
));

echo $this->Form->input('heatingcostsInServiceCharge', array('type' => 'checkbox', 'class' => 'checkbox', 'label' => 'Heizkosten sind in Nebenkosten enthalten.'));



echo $this->Form->input('petsAllowed', array('type' => 'checkbox', 'class' => 'checkbox', 'label' => 'Haustiere'));


echo $this->Form->input('parkingSpacePrice', array(
    'required' => true,
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
echo $this->Form->input('livingSpace', array(
    'required' => true,
    'label' => 'Wohnfläche',
    'placeholder' => 'Wohnfläche',
    'beforeInput' => '<div class="input-group"><span class="input-group-addon">m²</span>',
    'afterInput' => '</div>')); ?>

<?php echo $this->Form->input('numberOfRooms', array(
    'required' => true,
    'placeholder' => 'Anzahl der Zimmer',
    'label' => array(
        'text' => 'Anzahl der Zimmer',
    ),
    'beforeInput' => '<div class="input-group"><span class="input-group-addon">@</span>',
    'afterInput' => '</div>'
)); ?>
<?php
echo $this->Form->input('lift', array('type' => 'checkbox', 'class' => 'checkbox', 'label' => 'Aufzug'));
echo $this->Form->input('assistedLiving', array('type' => 'checkbox', 'class' => 'checkbox', 'label' => 'assistedLiving'));
echo $this->Form->input('cellar', array('type' => 'checkbox', 'class' => 'checkbox', 'label' => 'Keller'));

echo $this->Form->input('handicappedAccessible', array('type' => 'checkbox', 'class' => 'checkbox', 'label' => 'Rollstuhlgerecht'));
echo $this->Form->input('energyPerformanceCertificate', array('type' => 'checkbox', 'class' => 'checkbox', 'label' => 'energyPerformanceCertificate'));
echo $this->Form->input('builtInKitchen', array('type' => 'checkbox', 'class' => 'checkbox', 'label' => 'Einbauküche'));
echo $this->Form->input('balcony', array('type' => 'checkbox', 'class' => 'checkbox', 'label' => 'Balkon/Terrasse'));
echo $this->Form->input('certificateOfEligibilityNeeded', array('type' => 'checkbox', 'class' => 'checkbox', 'label' => 'WBS-Schein erforderlich'));
echo $this->Form->input('garden', array('type' => 'checkbox', 'class' => 'checkbox', 'label' => 'Gartenbenutzung'));
?>
<h1 class="page-header">Ausführliche Beschreibung Ihrer Immobilie</h1>

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
<div class="col-lg-6" >
    <h2 class="form-signin-heading">Kontaktdaten </h2>

    <div class="row">
        <div class="col-md-8">
            <?php echo $this->Form->input('email', array(
                'label' => 'E-Mail',
            )); ?>
        </div>
        <div class="col-md-4">
            <?php echo $this->Form->input('telefon', array(
                'label' => 'Telefon',
            )); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <?php echo $this->Form->input('mobil', array(
                'label' => 'mobil',
                'placeholder' => 'mobil',
            )); ?>
        </div>
        <div class="col-md-8">
            <?php echo $this->Form->input('fax', array(
                'label' => 'fax',
                'placeholder' => 'fax',
            )); ?>

        </div>
    </div>

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


