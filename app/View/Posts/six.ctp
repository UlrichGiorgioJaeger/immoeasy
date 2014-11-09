<?php
//echo $this->element('sidebarDashboard');
//
//?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" xmlns="http://www.w3.org/1999/html">
    <hr class="nav-divider">

    <ul class="nav nav-pills center-block">
        <li><a href="#">Rubrik</a></li>
        <li><a href="#">BasisDaten</a></li>
        <li><a href="#">Bilder</a></li>
        <li><a href="#">Vorschau</a></li>
        <li><a href="#">Veröffentlichung</a></li>
        <li class="active"><a href="#">Buchung abschließen</a></li>

    </ul>
    <hr class="nav-divider">
<h1 class="page-header">Buchung überprüfen</h1>
    <span>Ihre Buchung ist fast abgeschlossen. Bitte überprüfen Sie die unten aufgeführten Details und klicken
        "jetzt kostenpflichtig zu obigem Preis bestellen", wenn alle Informationen korrekt sind. Falls Änderungen notwendig sind, benutzen Sie bitte die "zurück"­Schaltfläche Ihres Browsers. </span>
<h1 class="page-header">Zur Veröffentlichung ausgewählte Anzeigen</h1>
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Rechnungsadresse</h3>
        </div>
        <div class="panel-body">
            <?php echo $post['Checkout'][0]['vorname'];?> <?php echo $post['Checkout'][0]['nachname'];?> </br>
            <?php echo $post['Checkout'][0]['strasse'];?> <?php echo $post['Checkout'][0]['houseNumber'];?></br>
            <?php echo $post['Checkout'][0]['postleitzahl'];?> <?php echo $post['Checkout'][0]['stadt'];?> </br>
            <?php echo $post['Checkout'][0]['land'];?>
        </div>
    </div>
        <br>
        <blockquote>
Hiermit bestätige ich die Abbuchung von <?php echo $this->Number->currency($post['Checkout'][0]['paket'], "EUR");  ?>
von meinem Konto:
           KontoInhaber:  <?php echo $post['Checkout'][0]['kontoinhaber'];?> </br>
           IBAN:  <?php echo $post['Checkout'][0]['iban'];?></br>
            BIC:  <?php echo $post['Checkout'][0]['bic'];?></br>
            bank:  <?php echo $post['Checkout'][0]['bank'];?></br>

        </blockquote>
        <br>

<?php echo $this->Form->create('Post', array(
    'inputDefaults' => array(
        'div' => 'form-group',
        'wrapInput' => false,
        'class' => 'form-control'
    ),
    'class' => 'well'
));
//
//echo $this->Form->input(
//    'Post.id',
//    array(
//        'type' => 'hidden',
//        'label' => 'Post Id',
//        'default' => $postId
//    )
//);
//echo $this->Form->input(
//    'Checkout.0.user_id',
//    array(
//        'type' => 'hidden',
//        'label' => 'Post Id',
//        'default' => $userId
//    )
//);
?>
<fieldset>
    <?php echo $this->Form->submit('Jetzt konstenpflichtig zum obigem Preis bestellen', array(
        'div' => 'form-group',
        'class' => 'btn btn-lg btn-primary btn-block'
    )); ?>

</fieldset>

<?php echo $this->Form->end(); ?>





</div>
</div>







