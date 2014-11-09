
<?php echo $this->Form->create('Post', array(
    'inputDefaults' => array(
        'div' => 'form-group',
        'wrapInput' => false,
        'class' => 'form-control'
    ),
    'class' => 'well'
));
?>
<input class="form-control" id="geocomplete" type="text" placeholder="Bundesland / Land /PLZ / Ort oder Adresse eingeben"/></br>

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



    $sizes = array('5' => '5 km', '10' => '10 km', '15' => '15 km', '20' => '20 km', '25' => '25 km', '30' => '30 km');

    echo $this->Form->input(
        'Umkreis',
        array(
            'empty' => '(auswählen)',
            'options' => $sizes));
    ?>

    <!--    --><?php
    //
    //    $sizes = array('Baden-Württemberg',
    //        'Bayern',
    //        'Berlin ',
    //        'Brandenburg',
    //        'Bremen' ,
    //        'Hamburg' ,
    //        'Hessen',
    //        'Mecklenburg-Vorpommern',
    //        'Niedersachsen',
    //        'Nordrhein-Westfalen',
    //        'Rheinland-Pfalz',
    //        'Saarland',
    //        'Sachsen',
    //        'Sachsen-Anhalt',
    //        'Schleswig-Holstein',
    //        'Thüringen');
    //    echo $this->Form->input(
    //        'bundesland',
    //        array('options' => $sizes, 'default' => 'Bayern')
    //    );
    //    ?>

    <div class="row">

            <div class="col-sm-4 col-md-4">
                <?php
                echo $this->Form->input('rubrik', array(
//                'class' => false,
                        'type' => 'select' ,
//                'label' => true,
//                'div' => array(
//                    'class' => false,
//                    'id' => 'schritt3',
//                    'title' => 'Div Title',
//                    'style' => 'display:none'
//                ),
////                'separator' => '</br>',

                        'options' => array('vermieten' => 'Vermieten', 'verkaufen' => 'Verkaufen'))
                );
                ?>
<!--            --><?php //echo $this->Form->input('rubrik', array(
//                'type' => 'radio',
//                'legend' => false,
//                'options' => array(
//                    'vermieten' => 'Vermieten', 'verkaufen' => 'Verkaufen'
//                ),
//                'separator' => '</br>',
//
//                'label' => true,
//                'class' => false
//            )); ?>
<!---->
<!---->

        </div>
        <div class="col-sm-4 col-md-4">
            <?php
            echo $this->Form->input('objektart', array(
//                'class' => false,
                    'type' => 'select' ,
//                'label' => true,
//                'div' => array(
//                    'class' => false,
//                    'id' => 'schritt3',
//                    'title' => 'Div Title',
//                    'style' => 'display:none'
//                ),
////                'separator' => '</br>',

                'options' => array('living' => 'Wohnen', 'business' => 'Gewerbe', 'anlage' => 'Anlage'))
            );
            ?>
<!--            --><?php
//            echo $this->Form->input('objektart', array(
//                'class' => false,
//                'legend' => false,
//                'label' => true,
//                'type' => 'radio',
//                'div' => array(
//                    'id' => 'schritt2',
//                    'title' => 'Div Title',
//                    'style' => 'display:none',
//                    'class' => false
//
//                ),
//                'options' => array('living' => 'Wohnen', 'business' => 'Gewerbe', 'anlage' => 'Anlage')
//            ));
//
//            ?>
        </div>
        <div class="col-sm-4 col-md-4">


        </div>

    </div>
    <?php
    echo $this->Form->input('objekttyp', array(
//                'class' => false,
            'type' => 'select' ,
//                'label' => true,
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

</fieldset>

    <?php echo $this->Form->submit('Suchen', array(
        'div' => 'form-group',
        'class' => 'btn btn-primary'
    )); ?>

<!--<script>-->
<!--    $(function(){-->
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
<?php

echo $this->Form->end();

?>


