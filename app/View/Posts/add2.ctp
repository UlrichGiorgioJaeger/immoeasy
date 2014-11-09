<!--Erste seite add wo der User gibt hier Adresse und rubrik ein-->
<h1>Immobilie inserieren</h1>

<?php

echo $this->Form->create('Post', array('type' => 'file'));

//echo $this->fetch('my_block');


//echo $this->Form->input('rubrik', array(
//    'label' => false,
//    'type' => 'radio',
//    'legend' => false,
//    'hidden' => true,
//    'text' => '',
//    'opts' => array('buyapps' => 'Verkauf ', 'rentapps' => 'Vermietung')
//));


echo $this->Form->input('schritt1', array(
    'before' => '--before--',
    'after' => '--after--',
    'type' => 'radio',
    'div' => array(
        'id' => 'schritt1',
        'title' => 'Div Title',
//        'style' => 'display:none'
    ),
    'between' => '--between---',
    'separator' => '--separator--',
    'options' => array('vermieten'=>'Vermieten', 'verkaufen'=>'Verkaufen')
));
echo $this->Form->input('schritt2_vermieten', array(
    'before' => '--before--',
    'after' => '--after--',
    'type' => 'radio',
    'div' => array(
        'id' => 'schritt2_vermieten',
        'title' => 'Div Title',
        'style' => 'display:none'
    ),
    'between' => '--between---',
    'separator' => '--separator--',
    'options' => array('living'=>'Wohnen', 'business'=>'Gewerbe')
));
echo $this->Form->input('schritt2_verkaufen', array(
    'before' => '--before--',
    'after' => '--after--',
    'type' => 'radio',
    'div' => array(
        'id' => 'schritt2_verkaufen',
        'title' => 'Div Title',
        'style' => 'display:none'
    ),
    'between' => '--between---',
    'separator' => '--separator--',
    'options' => array('living'=>'Wohnen', 'business'=>'Gewerbe','anlage'=>'Anlage')
));

echo $this->Form->input('rubrik', array(
    'before' => '--before--',
    'after' => '--after--',
    'type' => 'radio',
    'div' => array(
        'id' => 'schritt3_buy_wohnen',
        'title' => 'Div Title',
        'style' => 'display:none'
    ),
    'between' => '--between---',
    'separator' => '--separator--',
    'options' => array('buyapps'=>'Wohnung', 'Haus', 'Wohngrundstück', 'Garage(Stellplatz', 'Wohnung(Ausland)', 'Haus(Ausland', 'Wohngrundstück(Ausland')
));
echo $this->Form->input('rubrik', array(
    'before' => '--before--',
    'after' => '--after--',
    'type' => 'radio',
    'div' => array(
        'id' => 'schritt3_rent_wohnen',
        'title' => 'Div Title',
        'style' => 'display:none'
    ),
    'between' => '--between---',
    'separator' => '--separator--',
    'options' => array('rentapps'=>'Wohnung','renthouse'=> 'Haus', 'rentWohnG'=>'Wohngrundstück', 'rentgarage'=>'Garage/Stellplatz', 'rentTime'=>'Möbliertes Wohnen/Wohnen auf Zeit','rentWgRoom'=> 'WG-Zimmer')
));

$this->Js->get('#schritt3_buy_wohnen' );
$result_buy_wohnen_In = $this->Js->effect('fadeIn');
$result_buy_wohnen_Out = $this->Js->effect('fadeOut');

$this->Js->get('#schritt3_rent_wohnen');
$result_rent_wohnen_In = $this->Js->effect('fadeIn');
$result_rent_wohnen_Out = $this->Js->effect('fadeOut');

$this->Js->get('#PostSchritt2VermietenLiving');
$this->Js->event('change', $result_buy_wohnen_Out);
$this->Js->event('change', $result_rent_wohnen_In);

$this->Js->get('#PostSchritt2VerkaufenLiving');
$this->Js->event('change', $result_rent_wohnen_Out);
$this->Js->event('change', $result_buy_wohnen_In);

$this->Js->get('#schritt2_vermieten' );
$result_1_In = $this->Js->effect('fadeIn');
$result_1_Out = $this->Js->effect('fadeOut');

$this->Js->get('#schritt2_verkaufen' );
$result_2_In = $this->Js->effect('fadeIn');
$result_2_Out= $this->Js->effect('fadeOut');

$this->Js->get('#PostSchritt1Verkaufen');
$this->Js->event('change', $result_buy_wohnen_Out);
$this->Js->event('change', $result_1_Out );
$this->Js->event('change', $result_2_In );

$this->Js->get('#PostSchritt1Vermieten');
$this->Js->event('change', $result_rent_wohnen_Out);
$this->Js->event('change', $result_2_Out);
$this->Js->event('change', $result_1_In);



echo $this->Form->input('title');
echo $this->Form->input('street');
echo $this->Form->input('houseNumber');
echo $this->Form->input('postcode');
echo $this->Form->input('city');
echo $this->Form->input('showAddress', array('type'=>'checkbox', 'label' => 'Straße und Hausnummer nicht veröffentlichen?'));


echo $this->Form->end(__('Add'));

?>
<?php //echo $this->Form->input('title', array(
//    'label' => 'Exposetitel',
//    'placeholder' => 'Exposetitel',
//    'required' => true,
//    'errorMessage' => true,
//    'div' => array(
//        'id' => 'schritt1',
//        'class' => 'radio',
//        'title' => 'Div Title',
//        'class' => 'form-group',
////        'style' => 'display:none'
//    ),
//
//    'after' => '<span class="help-block">Geben Sie einen aussagekräftigen Titel ein.</span>'
//));
//?>
<script>
//    $('#PostRubrikRentapps').hide();
//    $(document).on('change', '#buy , #rent', function () {
//        $('#rubrik2').show();
//
//
//$(document).on('click', '#PostShowAddress', function () {
//
//});
//
//$(document).on('change', '#wohnen , #gewerbe', function () {
//
//    $('.no').prepend('<div id="rubrik">'
//       +' <label>'
//    +'<input type="radio" name="mygroup" id="buyapps" />'
//        +'  Verkauf'
//        +'</label>'
//
//        +'<label>'
//    +'<input type="radio" name="mygroup" id="rentapps" />'
//        +'  Vermietung'
//        +'</label>'
//    +'</div>');
//});
//
//});

</script>
