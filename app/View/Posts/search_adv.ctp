
<div class="container">
    <div class="row">


<div class="col-sm-9 col-md-10  ">
<h1 class="page-header">Immobilien suchen</h1>


<?php echo $this->Session->flash(); ?>

    <div class="map_canvas"></div>
<!--    <input class="btn btn-lg btn-primary btn-block" id="find" type="button" value="Objekt lokalisieren"/>-->

<?php echo $this->Form->create('Post', array(
    'inputDefaults' => array(
        'div' => 'form-group',
        'wrapInput' => false,
        'class' => 'form-control'
    ),
    'class' => 'well'
));
?>
    <input class="form-control" id="geocomplete" type="text" placeholder="Bundesland / Land /PLZ / Ort oder Adresse eingeben" required="required"/></br>

<fieldset>
    <?php
    echo $this->Form->input('lat', array(
        'type' => 'hidden'    ,
        'data-geo' => 'lat'
    ));

    echo $this->Form->input('lng', array(
        'type' => 'hidden',
        'data-geo' => 'lng'
    ));
    ?>

    <div class="row">
        <div class="col-sm-4 col-md-4">
            <legend>Rubrik</legend>

            <!--            --><?php
//            echo $this->Form->input('rubik_', array(
//                    'type' => 'select' ,
//                    'options' => array(
//                        'vermieten' => 'Vermieten', 'verkaufen' => 'Verkaufen'
//                    ))
//            );
//            ?>
            <?php echo $this->Form->input('rubrik', array(
                'type' => 'radio',
                'legend' => false,
                'options' => array(
                    'vermieten' => 'Vermieten', 'verkaufen' => 'Verkaufen'
                ),
                'separator' => '</br>',

                'label' => true,
                'class' => false
            )); ?>

        </div>
        <div class="col-sm-4 col-md-4">
            <legend>Objektart</legend>

            <?php
            echo $this->Form->input('objektart', array(
                'class' => false,
                'legend' => false,
                'label' => true,
                'type' => 'radio',
                'div' => array(
                    'id' => 'schritt2',
                    'title' => 'Div Title',
//                    'style' => 'display:none',
                    'class' => false

                ),
                'separator' => '</br>',
                'options' => array('living' => 'Wohnen', 'business' => 'Gewerbe', 'anlage' => 'Anlage')
            ));

            ?>
        </div>
        <div class="col-sm-4 col-md-4">
            <legend>Objekttyp</legend>

            <?php
            echo $this->Form->input('objekttyp', array(
//                'class' => false,
                    'type' => 'select' ,
                'label' => false,
//                'div' => array(
//                    'class' => false,
//                    'id' => 'schritt3',
//                    'title' => 'Div Title',
//                    'style' => 'display:none'
//                ),
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
    <div class="row">
        <div class="col-sm-4 col-md-4">

            <legend>Preis</legend>
            <div class="col-sm-4 col-md-6">   <?php echo $this->Form->input('preis_von', array(
                    'label' => 'von',
                )); ?></div>
            <div class="col-sm-4 col-md-6"> <?php echo $this->Form->input('preis_bis', array(
                    'label' => 'bis',
                )); ?></div>
        </div>
        <div class="col-sm-4 col-md-4">
            <legend>Zimmer</legend>

            <div class="col-sm-4 col-md-6">   <?php echo $this->Form->input('zimmer_von', array(
                    'label' => 'von',
                )); ?></div>
            <div class="col-sm-4 col-md-6"> <?php echo $this->Form->input('zimmer_bis', array(
                    'label' => 'bis',
                )); ?></div>



        </div>
        <div class="col-sm-4 col-md-4">
            <legend>Fläche in m²</legend>

            <div class="col-sm-4 col-md-6">   <?php echo $this->Form->input('flaeche_von', array(
                    'label' => 'von',
                )); ?></div>
            <div class="col-sm-4 col-md-6"> <?php echo $this->Form->input('flaeche_bis', array(
                    'label' => 'bis',
                )); ?></div>


        </div>

    </div>
</fieldset>

<?php echo $this->Form->submit('Suchen', array(
        'div' => 'form-group',
        'class' => 'btn btn-primary'
    )); ?>

<script>
    $(function(){
        $('#PostRubrikVerkaufen').change(function(){
            $('#schritt2').show();
            $('#PostObjekttyp').hide();
            $('label[for="PostObjekttyp"]').hide();

            $('#PostObjektartAnlage').show();
            $('label[for="PostObjektartAnlage"]').show();
            $('#PostObjektartLiving, #PostObjektartBusiness, #PostObjektartAnlage').prop('checked', false);

        });
        $('#PostRubrikVermieten').change(function(){
            $('#schritt2').show();
            $('#PostObjekttyp').hide();
            $('label[for="PostObjekttyp"]').hide();

            $('#PostObjektartAnlage').hide();
            $('label[for="PostObjektartAnlage"]').hide();
            $('#PostObjektartLiving, #PostObjektartBusiness, #PostObjektartAnlage').prop('checked', false);

        });

        $('#PostObjektartLiving').click(function(){
            $('#PostObjekttyp').show();
            $('label[for="PostObjekttyp"]').show();

            if($('#PostRubrikVerkaufen').is(':checked')) {
                $("#PostObjekttyp").empty();
                $('<option>').val("apartment").text("Wohnung").appendTo('#PostObjekttyp');
                $('<option>').val("house").text("Haus").appendTo('#PostObjekttyp');
                $('<option>').val("livingSite").text("Wohngrundstück").appendTo('#PostObjekttyp');
                $('<option>').val("garage").text("Garage/Stellplatz").appendTo('#PostObjekttyp');
                $('<option>').val("houseForeign").text("Wohnung(Ausland)").appendTo('#PostObjekttyp');
                $('<option>').val("apartmentForeign").text("Haus(Ausland)").appendTo('#PostObjekttyp');
                $('<option>').val("livingSiteForeign").text("Wohngrundstück(Ausland)").appendTo('#PostObjekttyp');

            }
            else{
                $("#PostObjekttyp").empty();
                $('<option>').val("apartment").text("Wohnung").appendTo('#PostObjekttyp');
                $('<option>').val("house").text("Haus").appendTo('#PostObjekttyp');
                $('<option>').val("livingSite").text("Wohngrundstück").appendTo('#PostObjekttyp');
                $('<option>').val("garage").text("Garage/Stellplatz").appendTo('#PostObjekttyp');
                $('<option>').val("shortTermAccomodation").text("Möbliertes Wohnen/Wohnen auf Zeit").appendTo('#PostObjekttyp');
                $('<option>').val("flatShareRoom").text("WG-Zimmer").appendTo('#PostObjekttyp');

            }
        });

        $('#PostObjektartBusiness').click(function(){
            $('#PostObjekttyp').show();
            $('label[for="PostObjekttyp"]').show();

//            if($('#PostRubrikVerkaufen').is(':checked')) {
            $("#PostObjekttyp").empty();
            $('<option>').val("office").text("Büro/Praxis").appendTo('#PostObjekttyp');
            $('<option>').val("store").text("Gastronomie/Hotel").appendTo('#PostObjekttyp');
            $('<option>').val("industry").text("Halle/Produktion").appendTo('#PostObjekttyp');
            $('<option>').val("store").text("Einzelhandel").appendTo('#PostObjekttyp');
            $('<option>').val("specialPurpose").text("Spezialgewerbe").appendTo('#PostObjekttyp');
            $('<option>').val("tradeSite").text("Gewerbegrundstück").appendTo('#PostObjekttyp');
            $('<option>').val("tradeSiteForeign").text("Gewerbegrundstück(Ausland)").appendTo('#PostObjekttyp');

//            }
//            else{
//                $("#PostObjekttyp").empty();
//                $('<option>').val("apartment").text("Wohnung").appendTo('#PostObjekttyp');
//                $('<option>').val("house").text("Haus").appendTo('#PostObjekttyp');
//                $('<option>').val("livingSite").text("Wohngrundstück").appendTo('#PostObjekttyp');
//                $('<option>').val("garage").text("Garage/Stellplatz").appendTo('#PostObjekttyp');
//                $('<option>').val("shortTermAccomodation").text("Möbliertes Wohnen/Wohnen auf Zeit").appendTo('#PostObjekttyp');
//                $('<option>').val("flatShareRoom").text("WG-Zimmer").appendTo('#PostObjekttyp');

//            }
        });
        $('#PostObjektartAnlage').click(function(){
            $('#PostObjekttyp').show();
            $("#PostObjekttyp").empty();
            $('label[for="PostObjekttyp"]').show();

            $('<option>').val("investment").text("Anlageimmobilie").appendTo('#PostObjekttyp');



        });


    })


</script>
<?php

echo $this->Form->end();

?>

</div>


</div>
</div>
<?php //echo $this->element('sql_dump');
echo $this->Js->writeBuffer();


?>
<script>
    $(function(){
        $("#geocomplete").geocomplete({
            map: ".map_canvas",
            details: "form",
            country: 'de',
            detailsAttribute: "data-geo"
        });

        $("#geocomplete").change(function(){
            $("#geocomplete").trigger("geocode");
        });
    });
</script>
