
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <!--        --><?php //echo $cakeDescription ?><!--:-->
        <!--        --><?php //echo $title_for_layout; ?>
    </title>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
    <!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->

    <?php
    echo $this->Html->meta('icon');
    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('dashboard');
    echo $this->Html->css('styles');

    echo $this->Html->script('jquery-2.1.1.min');
    echo $this->Html->script('bootstrap.min');
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
    <?php
    //    echo $this->element('sidebarDashboard');
    echo $this->Html->script('jquery.geocomplete');

    ?>
</head>
<body>
<?php echo $this->element('headerDashboard'); ?>
<?php
echo $this->element('sidebarDashboard');

?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<p>Die Anzeige können Sie auch nach dem Abspeichern oder der Veröffentlichung jederzeit bearbeiten, ändern, ergänzen, zusätzliche Bilder eingeben oder austauschen.

</p>
<hr class="nav-divider">

<ul class="nav nav-pills center-block">
    <li class="active"><a href="#">Rubrik</a></li>
    <li><a href="#">BasisDaten</a></li>
    <li><a href="#">Bilder</a></li>
    <li><a href="#">Vorschau</a></li>
    <li><a href="#">Veröffentlichung</a></li>
    <li><a href="#">Buchung abschließen</a></li>

</ul>
<hr class="nav-divider">

<!--<h1 class="page-header">Ihre Anzeige</h1>-->
<!---->

<?php echo $this->Session->flash(); ?>

<?php //echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('Post', array(
    'inputDefaults' => array(
        'div' => 'form-group',
        'wrapInput' => false,
        'class' => 'form-control'
    ),
    'class' => 'well'
));?>

<fieldset>
<legend>Rubrik: <?php echo $objekttyp ." ". $rubrik?></legend>

<div class="row">
    <div class="col-sm-4 col-md-4">


        <?php echo $this->Form->input('rubrik', array(
            'type' => 'select',
//            'legend' => false,
            'readonly' => 'readonly' ,

            'options' => array(
                'vermieten' => 'Vermieten', 'verkaufen' => 'Verkaufen'
            ),
//            'separator' => '</br>',

//            'label' => true,
//            'class' => false
        )); ?>



    </div>
    <div class="col-sm-4 col-md-4">
        <?php
        echo $this->Form->input('objektart', array(
//            'class' => false,
//            'legend' => false,
//            'label' => true,
            'readonly' => 'readonly' ,

            'type' => 'select',
            'div' => array(
                'id' => 'schritt2',
                'title' => 'Div Title',
//                'style' => 'display:none',
                'class' => false

            ),
            'separator' => '</br>',
            'options' => array('living' => 'Wohnen', 'business' => 'Gewerbe', 'anlage' => 'Anlage')
        ));

        ?>
    </div>
    <div class="col-sm-4 col-md-4">
        <?php
        echo $this->Form->input('objekttyp', array(
//                'class' => false,
                'type' => 'select' ,
                'readonly' => 'readonly' ,
//                'label' => true,
                'div' => array(
                    'class' => false,
                    'id' => 'schritt3',
                    'title' => 'Div Title',
//                    'style' => 'display:none'
                ),
////                'separator' => '</br>',

                'options' => array(
                    'apartment'=>'Wohnung',
                    'house'=> 'Haus',
                    'livingSite'=>'Wohngrundstück',
                    'garage'=>'Garage/Stellplatz',
                    'shortTermAccomodation'=>'Möbliertes Wohnen/Wohnen auf Zeit',
                    'flatShareRoom'=> 'WG-Zimmer',

                    'apartmentForeign'=>'Wohnung(Ausland)',
                    'houseForeign'=> 'Haus(Ausland)',
                    'livingSiteForeign'=>'Wohngrundstück(Ausland)'
                ))
        );
        ?>

    </div>

</div>
<!--<script>-->
<!--    $(function(){-->
<!---->
<!---->
<!--        $('#PostRubrikVerkaufen').change(function(){-->
<!--            $('#schritt2').show();-->
<!--            $('#PostObjekttyp').hide();-->
<!--            $('label[for="PostObjekttyp"]').hide();-->
<!---->
<!--            $('#PostObjektartAnlage').show();-->
<!--            $('label[for="PostObjektartAnlage"]').show();-->
<!--            $('#PostObjektartLiving, #PostObjektartBusiness, #PostObjektartAnlage').prop('checked', false);-->
<!---->
<!--        });-->
<!--        $('#PostRubrikVermieten').change(function(){-->
<!--            $('#schritt2').show();-->
<!--            $('#PostObjekttyp').hide();-->
<!--            $('label[for="PostObjekttyp"]').hide();-->
<!---->
<!--            $('#PostObjektartAnlage').hide();-->
<!--            $('label[for="PostObjektartAnlage"]').hide();-->
<!--            $('#PostObjektartLiving, #PostObjektartBusiness, #PostObjektartAnlage').prop('checked', false);-->
<!---->
<!--        });-->
<!---->
<!--        $('#PostObjektartLiving').click(function(){-->
<!--            $('#PostObjekttyp').show();-->
<!--            $('label[for="PostObjekttyp"]').show();-->
<!---->
<!--            if($('#PostRubrikVerkaufen').is(':checked')) {-->
<!--                $("#PostObjekttyp").empty();-->
<!--                $('<option>').val("apartment").text("Wohnung").appendTo('#PostObjekttyp');-->
<!--                $('<option>').val("house").text("Haus").appendTo('#PostObjekttyp');-->
<!--                $('<option>').val("livingSite").text("Wohngrundstück").appendTo('#PostObjekttyp');-->
<!--                $('<option>').val("garage").text("Garage/Stellplatz").appendTo('#PostObjekttyp');-->
<!--                $('<option>').val("houseForeign").text("Wohnung(Ausland)").appendTo('#PostObjekttyp');-->
<!--                $('<option>').val("apartmentForeign").text("Haus(Ausland)").appendTo('#PostObjekttyp');-->
<!--                $('<option>').val("livingSiteForeign").text("Wohngrundstück(Ausland)").appendTo('#PostObjekttyp');-->
<!---->
<!--            }-->
<!--            else{-->
<!--                $("#PostObjekttyp").empty();-->
<!--                $('<option>').val("apartment").text("Wohnung").appendTo('#PostObjekttyp');-->
<!--                $('<option>').val("house").text("Haus").appendTo('#PostObjekttyp');-->
<!--                $('<option>').val("livingSite").text("Wohngrundstück").appendTo('#PostObjekttyp');-->
<!--                $('<option>').val("garage").text("Garage/Stellplatz").appendTo('#PostObjekttyp');-->
<!--                $('<option>').val("shortTermAccomodation").text("Möbliertes Wohnen/Wohnen auf Zeit").appendTo('#PostObjekttyp');-->
<!--                $('<option>').val("flatShareRoom").text("WG-Zimmer").appendTo('#PostObjekttyp');-->
<!---->
<!--            }-->
<!--        });-->
<!---->
<!--        $('#PostObjektartBusiness').click(function(){-->
<!--            $('#PostObjekttyp').show();-->
<!--            $('label[for="PostObjekttyp"]').show();-->
<!---->
<!--//            if($('#PostRubrikVerkaufen').is(':checked')) {-->
<!--            $("#PostObjekttyp").empty();-->
<!--            $('<option>').val("office").text("Büro/Praxis").appendTo('#PostObjekttyp');-->
<!--            $('<option>').val("store").text("Gastronomie/Hotel").appendTo('#PostObjekttyp');-->
<!--            $('<option>').val("industry").text("Halle/Produktion").appendTo('#PostObjekttyp');-->
<!--            $('<option>').val("store").text("Einzelhandel").appendTo('#PostObjekttyp');-->
<!--            $('<option>').val("specialPurpose").text("Spezialgewerbe").appendTo('#PostObjekttyp');-->
<!--            $('<option>').val("tradeSite").text("Gewerbegrundstück").appendTo('#PostObjekttyp');-->
<!--            $('<option>').val("tradeSiteForeign").text("Gewerbegrundstück(Ausland)").appendTo('#PostObjekttyp');-->
<!---->
<!--//            }-->
<!--//            else{-->
<!--//                $("#PostObjekttyp").empty();-->
<!--//                $('<option>').val("apartment").text("Wohnung").appendTo('#PostObjekttyp');-->
<!--//                $('<option>').val("house").text("Haus").appendTo('#PostObjekttyp');-->
<!--//                $('<option>').val("livingSite").text("Wohngrundstück").appendTo('#PostObjekttyp');-->
<!--//                $('<option>').val("garage").text("Garage/Stellplatz").appendTo('#PostObjekttyp');-->
<!--//                $('<option>').val("shortTermAccomodation").text("Möbliertes Wohnen/Wohnen auf Zeit").appendTo('#PostObjekttyp');-->
<!--//                $('<option>').val("flatShareRoom").text("WG-Zimmer").appendTo('#PostObjekttyp');-->
<!---->
<!--//            }-->
<!--        });-->
<!--        $('#PostObjektartAnlage').click(function(){-->
<!--            $('#PostObjekttyp').show();-->
<!--            $("#PostObjekttyp").empty();-->
<!--            $('label[for="PostObjekttyp"]').show();-->
<!---->
<!--            $('<option>').val("investment").text("Anlageimmobilie").appendTo('#PostObjekttyp');-->
<!---->
<!---->
<!---->
<!--        });-->
<!---->
<!---->
<!--    })-->
<!---->
<!---->
<!--</script>-->

<!--<legend>Geben Sie die Objekt-Adresse ein.</legend>-->

<input class="form-control" id="geocomplete" type="text" placeholder="Geben Sie eine Adresse ein"/></br>
<!--<input class="btn btn-lg btn-primary btn-block" id="find" type="button" value="Objekt lokalisieren"/>-->

<div class="row"  >
    <div class="col-md-6" >
        <div class="map_canvas"></div>

    </div>
    <div class="col-lg-6" id="trueadress">
    <h2 class="form-signin-heading">Adresse Ihres Objekts </h2>

    <div class="row">
        <div class="col-md-8">
            <?php echo $this->Form->input('street', array(
                'label' => 'Straße',
                'data-geo' => 'route'
            )); ?>
        </div>
        <div class="col-md-4">
            <?php echo $this->Form->input('houseNumber', array(
                'label' => 'Hausnummer',
                'data-geo' => 'street_number'
            )); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <?php echo $this->Form->input('postcode', array(
                'label' => 'Postleitzahl',
                'placeholder' => 'Postleitzahl',
                'data-geo' => 'postal_code'
            )); ?>
        </div>
        <div class="col-md-8">
            <?php echo $this->Form->input('city', array(
                'label' => 'Stadt',
                'placeholder' => 'Stadt',
                'data-geo' => 'locality'
            )); ?>

        </div>
    </div>

    <?php
    echo $this->Form->input('administrative_area_level_1', array(
        'label' => 'Stadtteil',
        'data-geo' => 'administrative_area_level_1'
    ));
    echo $this->Form->input('bundesland', array(
        'label' => 'Bundesland',
        'data-geo' => 'sublocality',
//        'type' => 'hidden'

    ));

    echo $this->Form->input('country', array(
        'label' => 'Land',
        'data-geo' => 'country'
    ));
    echo $this->Form->input('latitude', array(
        'label' => 'latitude',
        'data-geo' => 'lat',
        'type' => 'hidden'

    ));
    echo $this->Form->input('longitude', array(
        'label' => 'longitude',
        'data-geo' => 'lng',
        'type' => 'hidden'
    ));
    echo $this->Form->input('showAddress', array('type' => 'checkbox', 'class' => 'checkbox', 'label' => 'Straße und Hausnummer nicht veröffentlichen?'));
    ?>

    <!--                    --><?php
    //                    // include the google js code
    //                    $this->Html->script($this->GoogleMapV3->apiUrl(), array('inline' => false));
    //
    //                    // echo the div container to display the map in
    //                    echo $this->GoogleMapV3->map(array('div'=>array('height'=>'400', 'width'=>'100%')));
    //
    //                    $options = array(
    //                        'lat' => 48.95145,
    //                        'lng' => 11.6981,
    //                        'title' => 'Some title', // optional
    //                        'content' => '<b>HTML</b> Content for the Bubble/InfoWindow' // optional
    //                    );
    //                    $this->GoogleMapV3->addMarker($options);
    //
    //                    // finalize js
    //                    $this->GoogleMapV3->finalize();
    //
    ?>


        <?php echo $this->Form->submit('Speichern und weiter', array(
            'div' => 'form-group',
            'class' => 'btn btn-lg btn-primary btn-block',
            'hidden' => true,
            'id' => 'truebutton'
        )); ?>

    </div>


</div>
</fieldset>


<?php echo $this->Form->end(); ?>

</div>

</div>

<!--</div>-->

</div>

<?php echo $this->element('sql_dump');
echo $this->Js->writeBuffer();


?>
<script>
    $(function () {
        $("#geocomplete").geocomplete({
            map: ".map_canvas",
            details: "form",
            detailsAttribute: "data-geo",
            markerOptions: {
                draggable: true
            }
        });
        $("#geocomplete").bind("geocode:dragged", function (event, latLng) {
            $("input[data-geo=lat]").val(latLng.lat());
            $("input[data-geo=lng]").val(latLng.lng());
            $("#reset").show();
        });

        $("#geocomplete").change(function () {
            $("#geocomplete").trigger("geocode");
//            $('#trueadress').show();
//            $('#truebutton').show();

        });
    });
</script>

</body>
</html>


