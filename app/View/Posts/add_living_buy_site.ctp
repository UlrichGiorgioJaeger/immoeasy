
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
    'Livingbuysite.id',
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
    <?php
    echo $this->Form->input('price', array(
        'placeholder' => 'Preis/ Miete Pacht.',
        'label' => array(
            'text' => 'Preis/Miete',
        ),
        'beforeInput' => '<div class="input-group"><span class="input-group-addon">€</span>',
        'afterInput' => '</div>'
    ));
    ?>
    <?php

    echo $this->Form->input('plotArea', array(
        'label' => 'Grundstücksfläche',
        'placeholder' => 'Grundstücksfläche',
        'beforeInput' => '<div class="input-group"><span class="input-group-addon">m²</span>',
        'afterInput' => '</div>'));


    echo $this->Form->input('commercializationType', array(
        'empty' => '(auswählen)',
        'label' => 'Vermarktungsart',
        'options' => array(
            'RENT' => 'Miete',
            'LEASE' => 'Leasing',
            )));

    ?>



<legend>Zusatzinformationen zu Ihrer Immobilie</legend>

    <?php echo $this->Form->input('Livingbuysite.minDivisible', array(
        'placeholder' => 'Teilbar ab',
        'label' => array(
            'text' => 'Teilbar ab',
        ),
        'beforeInput' => '<div class="input-group"><span class="input-group-addon">@</span>',
        'afterInput' => '</div>'
    ));
    ?>
<?php
echo $this->Form->input('Livingbuysite.recommendedUseTypes', array(
    'empty' => '(auswählen)',
    'label' => 'Empfohlene Nutzungsarten',
    'options' => array(
        'Bauerwartungsland' => 'Bauerwartungsland',
        'Doppelhaus' => 'Doppelhaus',
        'Einfamilienhaus' => 'Einfamilienhaus',
        'Garagen' => 'Garagen',
        'Garten' => 'Garten',
        'KeineBebauung' => 'KeineBebauung',
        'Mehrfamilienhaus' => 'Mehrfamilienhaus',
        'Obstpflanzung' => 'Obstpflanzung',
        'Reihenhaus' => 'Reihenhaus',

        'Stellplaetze' => 'Stellplaetze',
        'Villa' => 'Villa',

        'Wald' => 'Wald')));


echo $this->Form->input('Livingbuysite.tenancy', array(
    'label' => 'Heimfall nach ... Jahren (Pachtdauer)',
    'placeholder' => 'Heimfall nach ... Jahren (Pachtdauer)',
//    'afterInput' => '<span class="help-block">Bitte geben Sie hier die Gesamtetagenanzahl des Objektes an, in dem sich die Wohnung befindet (nur Zahlen).</span>'
));

echo $this->Form->input('Livingbuysite.siteDevelopmentType', array(
    'empty' => '(auswählen)',
    'label' => 'Erschliessungs- zustand',

    'options' => array(
        'NO_INFORMATION ' => 'keine Angabe',
        'Erschlossen' => 'Erschlossen',
        'Teilerschlossen' => 'Teilerschlossen',
        'Unerschlossen' => 'Unerschlossen',
       )));
echo $this->Form->input('Livingbuysite.siteConstructibleType', array(
    'empty' => '(auswählen)',
    'label' => 'Bebaubar nach',

    'options' => array(
        'NO_INFORMATION ' => 'keine Angabe',
        'Bebauung nach Bebauungsplan' => 'Bebauung nach Bebauungsplan',
        'Nachbarbebauung' => 'Nachbarbebauung',
        'Aussengebiet' => 'Aussengebiet',
    )));


echo $this->Form->input('Livingbuysite.grz', array(
    'label' => array(
        'text' => 'Grz'
    ),
    'placeholder' => 'GRZ'
));
echo $this->Form->input('Livingbuysite.gfz', array(
    'label' => array(
        'text' => 'Gfz'
    ),
    'placeholder' => 'GFZ'
));
?>

<?php

echo $this->Form->input('Livingbuysite.buildingPermission', array(
    'type' => 'checkbox',
    'before' => '<label class="col col-md-3 control-label">Baugenehmigung Vorhanden</label>',
    'label' => false,
    'class' => false,
//            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
));
echo $this->Form->input('Livingbuysite.demolition', array(
    'type' => 'checkbox',
    'before' => '<label class="col col-md-3 control-label">Abriss erforderlich</label>',
    'label' => false,
    'class' => false,
//            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
));
echo $this->Form->input('Livingbuysite.shortTermConstructible', array(
    'type' => 'checkbox',
    'before' => '<label class="col col-md-3 control-label">Kurzfristig bebaubar</label>',
    'label' => false,
    'class' => false,
//            'afterInput' => '<span class="help-block">Checkbox CakePHP Style</span>'
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

