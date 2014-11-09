
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

<?php
echo $this->Form->input(
    'Garagerent.id',
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
<legend>Überschrift Ihrer Anzeige</legend>
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

<!--    <p>Date: <input type="text" id="datepicker"></p>-->

<?php
echo $this->Form->input('price', array(
    'placeholder' => 'Kaltmiete.',
    'label' => array(
        'text' => 'Kaltmiete',
    ),
    'beforeInput' => '<div class="input-group"><span class="input-group-addon">€</span>',
    'afterInput' => '</div>'
));



echo $this->Form->input('Garagerent.garageType', array(
    'empty' => '(auswählen)',
    'label' => 'Garagentyp',
    'options' => array(
        'Garage' => 'Garage',
        'Aussenstellplatz' => 'Aussenstellplatz',
        'Carport' => 'Carport',
        'Duplex' => 'Duplex',
        'Parkhaus' => 'Parkhaus',
        'Tiefgarage' => 'Tiefgarage',
        )));



?>


<legend>Zusatzinformationen zu Ihrer Immobilie</legend>


<?php

echo $this->Form->input('Garagerent.usableFloorSpace', array(
    'label' => 'Nutzfläche',
    'placeholder' => 'Nutzfläche',
    'afterInput' => '<span class="help-block">Nutzflächen sind Flächen die nicht zur Wohnfläche gehören, wie etwa Kellerräume, Balkone oder Dachschrägen.</span>'

));


echo $this->Form->input('Garagerent.constructionYear', array(
    'label' => array(
        'text' => 'Baujahr'
    ),
    'placeholder' => 'Baujahr'
));
?>

    <?php echo $this->Form->input('Garagerent.freeFrom', array('label' => 'Frei Ab',
        'class' => 'form-control',

        'dateFormat' => 'DMY',
        'minYear' => date('Y') - 0,
        'maxYear' => date('Y') - 30)); ?>

    <?php echo $this->Form->input('Garagerent.freeUntil', array('label' => 'Frei Bis',
        'dateFormat' => 'DMY',
        'minYear' => date('Y') - 0,
        'maxYear' => date('Y') - 30)); ?>

    <?php

    echo $this->Form->input('Garagerent.lengthGarage', array(
        'label' => 'Länge',
        'placeholder' => 'Länge'
    ));


    echo $this->Form->input('Garagerent.widthGarage', array(
        'label' => array(
            'text' => 'Weite'
        )
    ));

    echo $this->Form->input('Garagerent.heightGarage', array(
        'label' => array(
            'text' => 'Höhe'
        )
    ));
    echo $this->Form->input('Garagerent.condition', array(
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

    echo $this->Form->input('Garagerent.lastRefurbishment', array(
        'label' => array(
            'text' => 'Jahr Letzte Modernisierung'
        ),
        'placeholder' => 'Jahr Letzte Modernisierung'
    ));
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

