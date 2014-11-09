
<?php
echo $this->element('sidebarDashboard');

?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<hr class="nav-divider">

<ul class="nav nav-pills center-block">
    <li ><?php
                            echo $this->Html->link(
                                'Rubrik & Adresse',
                                array(
                                    'controller' => 'posts',
                                    'action' => 'edit',$id,
                                    'full_base' => true,
                                ),
                                array(
                                    'rel'=>'tooltip',
                                    'class' => 'navbar-brand',
                                )
                            );?></li>
    <li class="active"><a>BasisDaten</a></li>
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
<?php
echo $this->Form->input(
    'Office.id',
    array(
        'label' => false,
        'type' => 'text',
        'style' => 'display:none',
        'default' => $aid
    )
);
?>

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
        echo $this->Form->input('netFloorSpace', array(
            'label' => 'Verkaufsfläche',
            'placeholder' => 'Verkaufsfläche',
            'beforeInput' => '<div class="input-group"><span class="input-group-addon">m²</span>',
            'afterInput' => '</div>'));

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
                'BUY' => 'Verkauf',
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
        echo $this->Form->input('officeType', array(
            'empty' => '(auswählen)',
            'label' => 'Bürotyp',
            'options' => array(
                'Atelier' => 'Atelier',
                'Loft' => 'Loft',
                'Buero' => 'Buero',
                'BueroEtage' => 'BueroEtage',
                'Buerohaus' => 'Buerohaus',
                'Buerozentrum' => 'Buerozentrum',
                'BueroUndLagerGebaeude' => 'BueroUndLagerGebaeude',
                'Praxis' => 'Praxis',
                'PraxisEtage' => 'PraxisEtage',
                'PraxisHaus' => 'PraxisHaus',
                'GewerbeZentrum' => 'GewerbeZentrum',
                'WohnUndGeschaeftsgebaeude' => 'WohnUndGeschaeftsgebaeude',
                'BueroUndGeschaeftsgebaeude' => 'BueroUndGeschaeftsgebaeude',


            )));
        ?>

        <legend>Zusatzinformationen zu Ihrer Immobilie</legend>

        <?php

        echo $this->Form->input('Office.flooringType', array(
            'empty' => '(auswählen)',
            'label' => 'Bodenbelag',
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

        echo $this->Form->input('Office.deposit', array(
            'placeholder' => 'Kaution',
            'label' => array(
                'text' => 'Kaution',
            ),
            'beforeInput' => '<div class="input-group"><span class="input-group-addon">€</span>',
            'afterInput' => '</div>'
        ));

        echo $this->Form->input('Office.distanceToMRS', array(
            'label' => 'Fahrzeit zum nächsten Bahnhof',
            'placeholder' => 'Fahrzeit zum nächsten Bahnhof'

        ));
        echo $this->Form->input('Office.distanceToFM', array(
            'label' => 'Fahrzeit zur nächsten Autobahn',
            'placeholder' => 'Fahrzeit zur nächsten Autobahn'

        ));
        echo $this->Form->input('Office.distanceToPT', array(
            'label' => 'Fahrzeit zur Öffentl. Personennahverkehr',
            'placeholder' => 'Fahrzeit zur Öffentl. Personennahverkehr'

        ));
        echo $this->Form->input('Office.distanceToAirport', array(
            'label' => 'Fahrzeit zur nächsten Flughafen',
            'placeholder' => 'Fahrzeit zur nächsten Flughafen'

        ));

        echo $this->Form->input('Office.condition', array(
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


        echo $this->Form->input('Office.numberOfParkingSpaces', array(
            'label' => array(
                'text' => 'Anzahl Garagen Stellplaetze'
            ),
            'placeholder' => 'Anzahl Garagen Stellplaetze'
        ));

        echo $this->Form->input('Office.parkingSpacePrice', array(
            'placeholder' => 'Stellplatzmiete.',
            'label' => array(
                'text' => 'Stellplatzmiete',
            ),
            'beforeInput' => '<div class="input-group"><span class="input-group-addon">€</span>',
            'afterInput' => '</div>'
        ));


        echo $this->Form->input('Office.lastRefurbishment', array(
            'label' => array(
                'text' => 'Jahr Letzte Modernisierung'
            ),
            'placeholder' => 'Jahr Letzte Modernisierung'
        ));

        echo $this->Form->input('Office.interiorQuality', array(
            'empty' => '(auswählen)',
            'label' => 'Ausstattungsqualitaet',
            'options' => array(
                'NO_INFORMATION ' => 'keine Angabe',
                'LUXURY' => 'luxus',
                'SOPHISTICATED' => 'gehoben',
                'NORMAL' => 'normal',
                'SIMPLE' => 'einfach')));



        echo $this->Form->input('Office.constructionYear', array(
            'label' => array(
                'text' => 'Baujahr'
            ),
            'placeholder' => 'Baujahr'
        ));

        echo $this->Form->input('Office.freeFrom', array('label' => 'Frei Ab',
            'dateFormat' => 'DMY',
            'minYear' => date('Y') - 70,
            'maxYear' => date('Y') - 18));

        echo $this->Form->input('Office.numberOfFloors', array(
            'label' => 'Etagenzahl',
            'placeholder' => 'Etagenzahl',
            'afterInput' => '<span class="help-block">Bitte geben Sie hier die Gesamtetagenanzahl des Objektes an, in dem sich die Wohnung befindet (nur Zahlen).</span>'

        ));

        echo $this->Form->input('Office.additionalCosts', array(
            'label' => 'Nebenkosten',
            'placeholder' => 'Nebenkosten'

        ));
        echo $this->Form->input('Office.minDivisible', array(
            'label' => 'Teilbar Ab',
            'placeholder' => 'Teilbar Ab'

        ));


        ?>
        <?php
        echo $this->Form->input('Office.hasCanteen', array(
            'type' => 'checkbox',
            'before' => '<label class="col col-md-3 control-label">Kantine</label>',
            'label' => false,
            'class' => false,
//            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
        ));
        echo $this->Form->input('Office.lanCables', array(
            'type' => 'checkbox',
            'before' => '<label class="col col-md-3 control-label">Datenverkabelung</label>',
            'label' => false,
            'class' => false,
//            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
        ));
        echo $this->Form->input('Office.highVoltage', array(
            'type' => 'checkbox',
            'before' => '<label class="col col-md-3 control-label">Starkstrom</label>',
            'label' => false,
            'class' => false,
//            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
        ));
        echo $this->Form->input('Office.kitchenComplete', array(
            'type' => 'checkbox',
            'before' => '<label class="col col-md-3 control-label">Küche</label>',
            'label' => false,
            'class' => false,
//            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
        ));
        echo $this->Form->input('Office.listed', array(
            'type' => 'checkbox',
            'before' => '<label class="col col-md-3 control-label">Denkmalschutzobjekt</label>',
            'label' => false,
            'class' => false,
//            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
        ));
        echo $this->Form->input('Office.airConditioning', array(
            'type' => 'checkbox',
            'before' => '<label class="col col-md-3 control-label">Klimaanlage</label>',
            'label' => false,
            'class' => false,
//            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
        ));





        echo $this->Form->input('Office.lift', array(
            'type' => 'checkbox',
            'before' => '<label class="col col-md-3 control-label">Aufzug</label>',
            'label' => false,
            'class' => false,
//            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
        ));

        echo $this->Form->input('Office.cellar', array(
            'type' => 'checkbox',
            'before' => '<label class="col col-md-3 control-label">Keller</label>',
            'label' => false,
            'class' => false,
//            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
        ));


        ?>
        <?php

        echo $this->Form->input('Office.handicappedAccessible', array(
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
            echo $this->Form->input('Office.heatingType', array(
                'empty' => '(auswählen)',
                'label' => 'Heizungsart',
                'options' => array(
                    'NO_INFORMATION' => 'keine Angabe',
                    'SELF_CONTAINED_CENTRAL_HEATING' => 'Etagenheizung',
                    'STOVE_HEATING' => 'Ofenheizung',
                    'CENTRAL_HEATING' => 'Zentralheizung')));

            echo $this->Form->input('Office.firingTypes', array(
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
            echo $this->Form->input('Office.buildingEnergyRatingType', array(
                'empty' => '(auswählen)',
                'label' => 'Energieausweistyp',
                'options' => array(
                    'NO_INFORMATION ' => 'keine Angabe',
                    'ENERGY_REQUIRED' => 'Endenergiebedarf',
                    'ENERGY_CONSUMPTION' => 'Energieverbrauchskennwert'
                )));



            echo $this->Form->input('Office.thermalCharacteristic', array(
                'label' => 'Energieverbrauchskennwert',
                'placeholder' => 'Energieverbrauchskennwert',
            ));

            echo $this->Form->input('Office.energyConsumptionContainsWarmWater', array(
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

        </fieldset>

<div class="row">
            <div class="col-md-6">

                <?php
                echo $this->Form->button('Zurück', array(
                    'div' => 'form-group',
                    'class' => 'btn btn-lg btn-primary btn-block'
                ));

                ?>


            </div>
            <div class="col-md-6">
                <?php echo $this->Form->submit('Speichern und weiter', array(
                    'div' => 'form-group',
                    'class' => 'btn btn-lg btn-primary btn-block'
                ));?>
            </div>

        </div>



    <?php
    echo $this->Form->end();
    ?>
</div>


