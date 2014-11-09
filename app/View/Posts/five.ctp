<?php
echo $this->element('sidebarDashboard');

?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<hr class="nav-divider">

<ul class="nav nav-pills center-block">
    <li><a href="#">Rubrik</a></li>
    <li><a href="#">BasisDaten</a></li>
    <li><a href="#">Bilder</a></li>
    <li><a href="#">Vorschau</a></li>
    <li class="active"><a href="#">Veröffentlichung</a></li>
    <li><a href="#">Buchung abschließen</a></li>

</ul>
<hr class="nav-divider">
<h1 class="page-header">Paket auswählen</h1>
    <span>Buchungsempfehlung

    Um viele Anfragen zu erhalten, empfehlen wir Ihnen, das Paket 4 zu buchen, mit den Marktführern Immobilienscout24, Immonet, immobilien.de und weiteren 12 Internet­ Immobilienseiten.

    Laufzeitempfehlung

    Bei einer Vermietung: 1 bis 3 Monate

    Bei einem Verkauf: Eine Immobilie wird in der Regel nicht von heute auf morgen verkauft.
    Deshalb beim Verkauf mindestens 3, besser 6 Monate auf allen Portalen buchen, 6 Monate insbesondere bei teureren oder schwerer verkäuflichen Immobilien.

    Sie sparen bei der Buchung von längeren Laufzeiten gegenueber häufiger Verlängerung von kurzen Zeiträumen.

    Paketauswahl für diese Anzeige </span>



<?php echo $this->Form->create('Post', array(
    'inputDefaults' => array(
        'div' => 'form-group',
        'wrapInput' => false,
        'class' => 'form-control'
    ),
    'class' => 'well'
));
echo $this->Form->input(
    'Post.id',
    array(
        'type' => 'hidden',
        'label' => 'Post Id',
        'default' => $postId
    )
);
echo $this->Form->input(
    'Checkout.0.user_id',
    array(
        'type' => 'hidden',
        'label' => 'Post Id',
        'default' => $userId
    )
);
?>


<!--            <h2 class="form-signin-heading">Registrieren</h2>-->
<fieldset>
    <!--                <legend>Es ist kostenlos</legend>-->
    <div class="row">
        <div class="col-xs-12 col-sm-offset-4 col-sm-8">
            <div class="row">
                <div class="col-xs-4 my_planHeader ">
                    <!--                                        <div class="my_planTitle">Paket 2</div>-->

                    <!--                    <div class="my_planPrice">Free</div>
                    <div class="my_planDuration"> </div>-->
                    <div class="panel panel-info">
                        <div class="panel-heading"><h3 class="text-center">Paket 2</h3></div>
                        <div class="panel-body text-center">
                            <p class="lead" style="color:#000088">Veröffentlichung auf den Portalen:</p>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item"><i class="icon-ok text-danger"></i> <?php
                                echo $this->Html->image('immoeasy_logo.png',array('style'=>'width:140px;height:40px;'));

                                ?></li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i> <?php
                                echo $this->Html->image('logo_immonet.jpg',array('style'=>'width:140px;height:40px;'));

                                ?></li>
                            <!--                            <li class="list-group-item"><i class="icon-ok text-danger"></i> --><?php
                            //                                echo $this->Html->image('logo_immonet.jpg',array('style'=>'width:140px;height:40px;'));
                            //
                            //                                ?><!--</li>-->
                        </ul>

                    </div>

                </div>
                <div class="col-xs-4 my_planHeader ">
                    <!--                    <div class="my_planDuration"> </div>-->
                    <div class="panel panel-success">
                        <div class="panel-heading"><h3 class="text-center">Paket 3</h3></div>
                        <div class="panel-body text-center">
                            <p class="lead" style="color:#000088">Veröffentlichung auf den Portalen:</p>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item"><i class="icon-ok text-danger"></i> <?php
                                echo $this->Html->image('immoeasy_logo.png',array('style'=>'width:140px;height:40px;'));

                                ?></li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i> <?php
                                echo $this->Html->image('immobilienscout24-hacker-1m.jpg',array('style'=>'width:140px;height:40px;'));

                                ?></li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i> <?php
                                echo $this->Html->image('immobilien_de_logo_300x92.jpg',array('style'=>'width:140px;height:40px;'));

                                ?></li>
                        </ul>

                    </div>
                    <!--                    <div class="my_planTitle">Paket 3</div>-->
                    <!--                    --><?php
                    //                    echo $this->Html->image('logo_immonet.jpg',array('style'=>'width:140px;height:40px;'));
                    //                    echo $this->Html->image('immobilienscout24-hacker-1m.jpg',array('style'=>'width:140px;height:40px;'));
                    //
                    //                    ?>
                    <!--                    <!--                    <div class="my_planPrice">2€</div>-->
                    <!--<!--                    <div class="my_planDuration">per month</div>-->
                    <!--<!--                    <a type="button" class="btn btn-default">Sign Up</a>-->
                </div>
                <div class="col-xs-4 my_planHeader ">
                    <div class="panel panel-danger">
                        <div class="panel-heading"><h3 class="text-center">Paket 4*</h3></div>
                        <div class="panel-body text-center">
                            <p class="lead" style="color:#000088">Veröffentlichung auf den Portalen:</p>
                            <!--                            <p class="lead" style="font-size:40px"><strong>85,00 €</strong></p>-->
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item"><i class="icon-ok text-danger"></i> <?php
                                echo $this->Html->image('immoeasy_logo.png',array('style'=>'width:140px;height:40px;'));

                                ?></li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i> <?php
                                echo $this->Html->image('logo_immonet.jpg',array('style'=>'width:140px;height:40px;'));

                                ?></li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i> <?php
                                echo $this->Html->image('immobilienscout24-hacker-1m.jpg',array('style'=>'width:140px;height:40px;'));

                                ?></li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i> <?php
                                echo $this->Html->image('immobilien_de_logo_300x92.jpg',array('style'=>'width:140px;height:40px;'));

                                ?></li>
                            </li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i> <?php
                                echo $this->Html->image('kalaydo_logo.gif',array('style'=>'width:140px;height:40px;'));

                                ?></li>
                        </ul>

                    </div>
                    <!--                    --><?php
                    //                    echo $this->Html->image('logo_immonet.jpg',array('style'=>'width:140px;height:40px;'));
                    //                    echo $this->Html->image('immobilienscout24-hacker-1m.jpg',array('style'=>'width:140px;height:40px;'));
                    //                    echo $this->Html->image('logo_immowelt.jpg',array('style'=>'width:140px;height:40px;'));
                    //
                    //                    ?>
                    <!--                    <div class="my_planPrice">3.75€</div>-->
                    <!--                    <div class="my_planDuration">per month</div>-->
                    <!--                    <a type="button" class="btn btn-default">Sign Up</a>-->
                </div>
            </div>
        </div>
    </div>
    <p>Laufzeit der Anzeige</p>

    <div class="row my_featureRow">
        <div class="col-xs-12 col-sm-4 my_feature">
            <p class="text-center">1 Monat</p>     </div>
        <div class="col-xs-12 col-sm-8">
            <div class="row">
                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">

                    <i class="fa">
                        <div class="radio">
                            <?php
                            echo $this->Form->input('Checkout.0.paket', array('type' => 'radio', 'class' => 'radio', 'label'=>true, 'options' => array('39'=>'€39,00')));
                            ?>
                            <!--                            <label><input type="radio" name="optionsRadios" value="rent">€39,00</label>-->
                        </div>
                    </i>
                </div>
                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                    <i class="fa">
                        <div class="radio">
                            <?php
                            echo $this->Form->input('Checkout.0.paket', array('type' => 'radio', 'class' => 'radio', 'label'=>true, 'options' => array('76'=>'€76,00')));
                            ?>
                            <!--                            <label><input type="radio" name="optionsRadios" value="rent">€76,00</label>-->
                        </div>
                    </i>
                </div>
                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                    <i class="fa">
                        <div class="radio">
                            <?php
                            echo $this->Form->input('Checkout.0.paket', array('type' => 'radio', 'class' => 'radio', 'label'=>true, 'options' => array('85'=>'€85,00')));
                            ?>
                            <!--                            <label><input type="radio" name="optionsRadios" value="rent">€85,00</label>-->
                        </div>
                    </i>
                </div>
            </div>
        </div>
    </div>
    <div class="row my_featureRow">
        <div class="col-xs-12 col-sm-4 my_feature">
            <!--            --><?php
            //            echo $this->Html->image('logo_immowelt.jpg');
            //            echo $this->Html->image('immobilienscout24-hacker-1m.jpg');
            //
            //            ?>
            <p class="text-center">3 Monate</p>

        </div>
        <div class="col-xs-12 col-sm-8">
            <div class="row">
                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                    <i class="fa">
                        <div class="radio">
                            <?php
                            echo $this->Form->input('Checkout.0.paket', array('type' => 'radio', 'class' => 'radio', 'label'=>true, 'options' => array('89'=>'€89,00')));
                            ?>
                            <!--                            <label><input type="radio" name="optionsRadios" value="rent">€89,00</label>-->
                        </div>
                    </i>
                </div>
                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                    <i class="fa">
                        <div class="radio">
                            <?php
                            echo $this->Form->input('Checkout.0.paket', array('type' => 'radio', 'class' => 'radio', 'label'=>true, 'options' => array('145'=>'€145,00')));
                            ?>
                            <!--                            <label><input type="radio" name="optionsRadios" value="rent">€145,00</label>-->
                        </div>
                    </i>
                </div>
                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                    <i class="fa">
                        <div class="radio">
                            <?php
                            echo $this->Form->input('Checkout.0.paket', array('type' => 'radio', 'class' => 'radio', 'label'=>true, 'options' => array('159'=>'€159,00')));
                            ?>
                            <!--                            <label><input type="radio" name="optionsRadios" value="rent">€225,00</label>-->
                        </div>
                    </i>
                </div>
            </div>
        </div>
    </div>
    <div class="row my_featureRow">
        <div class="col-xs-12 col-sm-4 my_feature">
            <!--            --><?php
            //            echo $this->Html->image('logo_immonet.jpg');
            //            echo $this->Html->image('immobilienscout24-hacker-1m.jpg');
            //            echo $this->Html->image('logo_immowelt.jpg');
            //            ?><!--         -->

            <p class="text-center">6 Monate</p>

        </div>
        <div class="col-xs-12 col-sm-8">
            <div class="row">
                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                    <i class="fa">
                        <div class="radio">
                            <?php
                            echo $this->Form->input('Checkout.0.paket', array('type' => 'radio', 'class' => 'radio', 'label'=>true, 'options' => array('129'=>'€129,00')));
                            ?>
                            <!--                            <label><input type="radio" name="optionsRadios"  value="buy">€129,00</label>-->
                        </div>
                    </i>
                </div>
                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                    <i class="fa">
                        <div class="radio">
                            <?php
                            echo $this->Form->input('Checkout.0.paket', array('type' => 'radio', 'class' => 'radio', 'label'=>true, 'options' => array('225'=>'€225,00')));
                            ?>
                            <!--                            <label><input type="radio" name="optionsRadios" value="rent">€225,00</label>-->
                        </div>

                    </i>
                </div>
                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                    <i class="fa">
                        <div class="radio">
                            <?php
                            echo $this->Form->input('Checkout.0.paket', array('type' => 'radio', 'class' => 'radio', 'label'=>true, 'options' => array('249'=>'€249,00')));
                            ?>
                            <!--                            <label><input type="radio" name="optionsRadios" value="rent">€249,00</label>-->
                        </div>
                    </i>
                </div>
            </div>
        </div>
    </div>
    <p><strong>Paket 4 **</strong> enthält auch die Internet-Immobilienseiten von Bild.de, B.Z., Berliner Morgenpost, Berliner Zeitung, Die Welt, Hamburger Abendblatt, T-Online, Echo online, freenet.de, meinestadt.de, Hamburger Morgenpost, Berliner Kurier, immobilo.de, ebay-Kleinanzeigen.
    </p>
    <p>
        <strong>Die Kosten für die Veröffentlichung Ihrer Anzeige auf den anderen gebuchten Portalen ist in den angegebenen Preisen enthalten.</strong>
    </p>
    <p>
        <strong>Nach Ablauf des gebuchten Zeitraums</strong> endet die Veröffentlichung auf allen Portalen. Es erfolgt keine automatische Verlängerung. Ihr Angebot bleibt aber kostenlos gespeichert, so dass Sie es auch nach Ablauf wieder aufrufen und veröffentlichen können.
    </p>
    <p>
        <strong>Laufzeitempfehlung</strong>: Bei Vermietung 1 bis 3 Monate, bei Verkauf mindestens 3, besser 6 Monate auf mehreren Portalen, 6 Monate insbesondere bei teureren oder schwerer verkäuflichen Immobilien. Werfen Sie auch einen Blick in unsere <a href="/tipps-zum-privaten-immobilienverkauf/">Tipps zum privaten Immobilienverkauf</a>
    </p>


    <div class="row">

        <div class="col-sm-6 col-md-6">
            <h2 class="form-signin-heading">Rechnungsadresse</h2>
            <div class="row">
                <div class="col-md-8">
                    <?php echo $this->Form->input('Checkout.0.vorname', array(
                        'label' => 'vorname',
                        'placeholder' => 'vorname',
                    )); ?>
                </div>
                <div class="col-md-4">
                    <?php echo $this->Form->input('Checkout.0.nachname', array(
                        'label' => 'nachname',
                        'placeholder' => 'nachname',
                    )); ?>

                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <?php echo $this->Form->input('Checkout.0.strasse', array(
                        'label' => 'Straße',
                        'placeholder' => 'Straße',
                    )); ?>
                </div>
                <div class="col-md-4">
                    <?php echo $this->Form->input('Checkout.0.houseNumber', array(
                        'label' => 'Hausnummer',
                        'placeholder' => 'Hausnummer',
                    )); ?>

                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <?php echo $this->Form->input('Checkout.0.postleitzahl', array(
                        'label' => 'Postleitzahl',
                        'placeholder' => 'Postleitzahl',
                    )); ?>
                </div>
                <div class="col-md-8">
                    <?php echo $this->Form->input('Checkout.0.stadt', array(
                        'label' => 'Stadt',
                        'placeholder' => 'Stadt',
                    )); ?>

                </div>
            </div>


            <?php echo $this->Form->input('Checkout.0.land', array(
                'empty' => '(auswählen)',
                'options' => array(

                    'Bayern' => 'Bayern',

                    'Frau' => 'Frau'


                )
            ));

            ?>

        </div>
        <div class="col-sm-6 col-md-6">
            <?php

            echo $this->Form->input('Checkout.0.agb', array('type' => 'checkbox', 'class' => 'checkbox', 'label' => 'Ich akzeptiere die AGB der Immoeasy GmbH'));
            ?>
            <div class="col-sm-1">
                <!--            --><?php
                echo $this->Form->input('Checkout.0.zahlungsart', array(
                    'type' => 'radio',
                    'class' => 'radio',
                    'div' => array(
                        'id' => 'schritt1',
                        'class' => 'radio',
                        'title' => 'Div Title',
//        'style' => 'display:none'
                    ),

                    'options' => array('ueberweisung'=>'Überweisung', 'Sepa-Lastschrift'=>'Sepa-Lastschrift')
                ));
                ?>
            </div>

        </div>

    </div>





    <?php echo $this->Form->submit('Buchung überprüfen und veröffentlichen', array(
        'div' => 'form-group',
        'class' => 'btn btn-lg btn-primary btn-block'
    )); ?>

</fieldset>

<?php echo $this->Form->end(); ?>





</div>







