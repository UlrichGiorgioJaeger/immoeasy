
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
<!--        --><?php //echo $this->Form->create('Post', array(
//            'inputDefaults' => array(
//                'div' => 'form-group',
//                'wrapInput' => false,
//                'class' => 'form-control'
//            ),
//            'class' => 'well'
//        ));
//        ?>

        <fieldset>
        <div class="row"  >
        <div class="col-md-6" >
        <legend>Preise </legend>

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
        ?>        <legend>Basisinformationen zu Ihrer Immobilie </legend>

        <?php
        echo $this->Form->input('price', array(
            'placeholder' => 'Preis.',
            'label' => array(
                'text' => 'Preis',
            ),
            'beforeInput' => '<div class="input-group"><span class="input-group-addon">€</span>',
            'afterInput' => '</div>'
        ));

        echo $this->Form->input('totalFloorSpace', array(
            'label' => 'Gesamtfläche',
            'placeholder' => 'Gesamtfläche',
            'beforeInput' => '<div class="input-group"><span class="input-group-addon">m²</span>',
            'afterInput' => '</div>'));

        echo $this->Form->input('commercializationType', array(
            'empty' => '(auswählen)',
            'label' => 'Vermarktungsart',
            'options' => array(
                'RENT' => 'Miete',
                'LEASE' => 'Leasing',
            )));

        echo $this->Form->input('marketingType', array(
            'empty' => '(auswählen)',
            'label' => 'Preis gilt für Fläche/ Zeitraum',
            'options' => array(
                'RENT_PER_SQM' => 'Miete',
                'RENT_PER_MONTH' => 'Leasing',
                'PURCHASE' => 'Kauf',

            )));
        ?>

        <?php
        echo $this->Form->input('gastronomyType', array(
            'empty' => '(auswählen)',
            'label' => 'Ladentyp',
            'options' => array(
                'Barbetrieb' => 'Barbetrieb',
                'Caffee' => 'Caffee',
                'Diskothek' => 'Diskothek',
                'Gaestehaus' => 'Gaestehaus',
                'Tavern' => 'Tavern',
                'Hotel' => 'Hotel',
                'Hotelanwesen' => 'Hotelanwesen',
                'HotelGarni' => 'HotelGarni',
                'Pension' => 'Pension',
                'Restaurant' => 'Restaurant',
                'Ferienbungalow' => 'Ferienbungalow',


            )));
        echo $this->Form->input('locationClassificationType', array(
            'empty' => '(auswählen)',
            'label' => 'Lageart',
            'options' => array(
                'ALage' => 'ALage',
                'BLage' => 'BLage',
                'Einkaufszentrum' => 'Einkaufszentrum',


            )));
        ?>

        <legend>Zusatzinformationen zu Ihrer Immobilie</legend>

        <?php
        echo $this->Form->input('numberSeats', array(
            'label' => 'Anzahl der Sitzplätze',
            'placeholder' => 'Anzahl der Sitzplätze'

        ));
        echo $this->Form->input('numberBeds', array(
            'label' => 'Anzahl der Betten',
            'placeholder' => 'Anzahl der Betten'

        ));
        echo $this->Form->input('netFloorSpace', array(
            'label' => 'Gastraumfläche',
            'placeholder' => 'Gastraumfläche'

        ));
        echo $this->Form->input('supplyType', array(
            'empty' => '(auswählen)',
            'label' => 'Zulieferungsart',
            'options' => array(
                'DirekterZugang' => 'DirekterZugang',
                'KeineDirekteAnfahrt' => 'KeineDirekteAnfahrt',
                'PKW-Zufahrt' => 'PKW-Zufahrt',
                'VonVorn' => 'VonVorn',
                'VonHinten' => 'VonHinten',
                'Ganztaegig' => 'Ganztaegig',
                'Vormittags' => 'Vormittags',


            )));
        echo $this->Form->input('flooringType', array(
            'empty' => '(auswählen)',
            'label' => 'Wohnungstyp',
            'options' => array(
                'Beton' => 'Beton',
                'Epoxidharz' => 'Epoxidharz',
                'Fliesen' => 'Fliesen',
                'Dielen' => 'Dielen',
                'Laminat' => 'Laminat',
                'Parkett' => 'Parkett',
                'PVC' => 'PVC',
                'Teppichboden' => 'Teppichboden',
                'TeppichbodenAntistatisch' => 'TeppichbodenAntistatisch',
                'TeppichfliesenStuhlrollenfest' => 'TeppichfliesenStuhlrollenfest',
                'Stein' => 'Stein',
                'nachWunsch' => 'nachWunsch',
                'OhneBodenbelag' => 'OhneBodenbelag',


            )));

        echo $this->Form->input('totalFloorSpace', array(
            'placeholder' => 'Gesamtfläche',
            'label' => array(
                'text' => 'Gesamtfläche',
            )
        ));
        echo $this->Form->input('minDivisible', array(
            'label' => 'Teilbar Ab',
            'placeholder' => 'Teilbar Ab'

        ));
        echo $this->Form->input('deposit', array(
            'placeholder' => 'Kaution',
            'label' => array(
                'text' => 'Kaution',
            ),
            'beforeInput' => '<div class="input-group"><span class="input-group-addon">€</span>',
            'afterInput' => '</div>'
        ));

        echo $this->Form->input('distanceToMRS', array(
            'label' => 'Fahrzeit zum nächsten Bahnhof',
            'placeholder' => 'Fahrzeit zum nächsten Bahnhof'

        ));
        echo $this->Form->input('distanceToFM', array(
            'label' => 'Fahrzeit zur nächsten Autobahn',
            'placeholder' => 'Fahrzeit zur nächsten Autobahn'

        ));
        echo $this->Form->input('distanceToPT', array(
            'label' => 'Fahrzeit zur Öffentl. Personennahverkehr',
            'placeholder' => 'Fahrzeit zur Öffentl. Personennahverkehr'

        ));
        echo $this->Form->input('distanceToAirport', array(
            'label' => 'Fahrzeit zur nächsten Flughafen',
            'placeholder' => 'Fahrzeit zur nächsten Flughafen'

        ));

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


        echo $this->Form->input('numberOfParkingSpaces', array(
            'label' => array(
                'text' => 'Anzahl Garagen Stellplaetze'
            ),
            'placeholder' => 'Anzahl Garagen Stellplaetze'
        ));

        echo $this->Form->input('parkingSpacePrice', array(
            'placeholder' => 'Preis pro Parkfläche.',
            'label' => array(
                'text' => 'Preis pro Parkfläche',
            ),
            'beforeInput' => '<div class="input-group"><span class="input-group-addon">€</span>',
            'afterInput' => '</div>'
        ));


        echo $this->Form->input('lastRefurbishment', array(
            'label' => array(
                'text' => 'Jahr Letzte Modernisierung'
            ),
            'placeholder' => 'Jahr Letzte Modernisierung'
        ));

        echo $this->Form->input('interiorQuality', array(
            'empty' => '(auswählen)',
            'label' => 'Ausstattungsqualitaet',
            'options' => array(
                'NO_INFORMATION ' => 'keine Angabe',
                'LUXURY' => 'luxus',
                'SOPHISTICATED' => 'gehoben',
                'NORMAL' => 'normal',
                'SIMPLE' => 'einfach')));



        echo $this->Form->input('constructionYear', array(
            'label' => array(
                'text' => 'Baujahr'
            ),
            'placeholder' => 'Baujahr'
        ));

        echo $this->Form->input('freeFrom', array('label' => 'Frei Ab',
            'dateFormat' => 'DMY',
            'minYear' => date('Y') - 70,
            'maxYear' => date('Y') - 18));

        echo $this->Form->input('numberOfFloors', array(
            'label' => 'Etagenzahl',
            'placeholder' => 'Etagenzahl',
            'afterInput' => '<span class="help-block">Bitte geben Sie hier die Gesamtetagenanzahl des Objektes an, in dem sich die Wohnung befindet (nur Zahlen).</span>'

        ));

        echo $this->Form->input('additionalArea', array(
            'label' => 'Nebenfläche',
            'placeholder' => 'Nebenfläche'

        ));

        echo $this->Form->input('additionalCosts', array(
            'label' => 'Nebenkosten',
            'placeholder' => 'Nebenkosten'

        ));



        ?>

        <?php

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


        <?php  ?>
        <?php
        echo $this->Form->input('goodsLift ', array(
            'type' => 'checkbox',
            'before' => '<label class="col col-md-3 control-label">Lastenaufzug</label>',
            'label' => false,
            'class' => false,
//            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
        ));
        echo $this->Form->input('ramp', array(
            'type' => 'checkbox',
            'before' => '<label class="col col-md-3 control-label">Rampe</label>',
            'label' => false,
            'class' => false,
//            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
        ));

        echo $this->Form->input('listed', array(
            'type' => 'checkbox',
            'before' => '<label class="col col-md-3 control-label">Denkmalschutzobjekt</label>',
            'label' => false,
            'class' => false,
//            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
        ));




        echo $this->Form->input('lift', array(
            'type' => 'checkbox',
            'before' => '<label class="col col-md-3 control-label">Aufzug</label>',
            'label' => false,
            'class' => false,
//            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
        ));

        echo $this->Form->input('cellar', array(
            'type' => 'checkbox',
            'before' => '<label class="col col-md-3 control-label">Keller</label>',
            'label' => false,
            'class' => false,
//            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
        ));


        ?>
        <?php

        echo $this->Form->input('handicappedAccessible', array(
            'type' => 'checkbox',
            'before' => '<label class="col col-md-3 control-label">Rollstuhlgerecht</label>',
            'label' => false,
            'class' => false,
//            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
        ));

        ?>






        </div>


        <div class="col-lg-6" >
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
                'afterInput' => '<span class="help-block">Firmenname nur eintragen wenn Firma Eigentümer oder Verkäufer der Immobilie ist.</span>'
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



            echo $this->Form->input('thermalCharacteristic', array(
                'label' => 'Energieverbrauchskennwert',
                'placeholder' => 'Energieverbrauchskennwert',
            ));

            echo $this->Form->input('energyConsumptionContainsWarmWater', array(
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


