<!--<h1>Add Post</h1>-->

<?php

echo $this->Form->create('Post', array('type' => 'file'));
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->input('Schritt1', array(
    'checkbox' => array('buy' => 'Verkauf', 'sell' => 'Vermietung')
));

$sizes = array('s' => 'Small', 'm' => 'Medium', 'l' => 'Large');
echo $this->Form->checkbox(
    'size',
    array('options' => $sizes, 'default' => 'm')
);

echo $this->Form->input('field', array(
    'options' => array(1, 2, 3, 4, 5),
    'empty' => '(choose one)'
));

$options = array('M' => 'Male', 'F' => 'Female');
$attributes = array('legend' => false);
echo $this->Form->radio('gender',$options, $attributes);


$this->Js->get('#PostGenderF');

$result= $this->Js->event('click', 'alert("whoa!");');
$this->Js->alert('alert("whoa!");', true);


$this->Js->get('#PostGenderF');
$this->Js->event('click', $this->Js->alert('hey you!'));

echo $this->Form->input('Image.0.attachment', array('type' => 'file', 'label' => 'Image'));
echo $this->Form->input('Image.0.model', array('type' => 'hidden', 'value' => 'Post'));
echo $this->Form->end(__('Add'));

?>
<script>

    $(document).on('change', '#PostGenderF , #PostGenderM', function () {
        alert("Document Change");
//        var $objektartR = $('' +
////        '<div data-role="fieldcontain">' +
//            '    <label for="objektartR" >Objektart</label>' +
//            '<select class="donEdi" name="objekt[type]" id="objektartR" required title="Bitte wählen Sie eine Option">' +
//            '   <option value="">--bitte wählen--</option>' +
////    '   <option value="1">Büro und Praxisräume</option>'+
////    '   <option value="2">Einzelhandel</option>'+
////    '   <option value="3">Gastronomie / Beherbergung</option>'+
////    '   <option value="4">Gewerbliche Freizeitimmobilie</option>'+
////    '   <option value="5">Grundstück</option>'+
////    '   <option value="7">Land / Forstwirtschaftliches Objekt</option>'+
////    '   <option value="8">Produktions- / Lager- / Gewerbehalle</option>'+
////    '   <option value="10">Zimmer</option>'+
////    '   <option value="11">Zinshaus oder Renditeobjekt</option>'+
////    '   <option value="13">Sonstiges Objekt</option>'+
//            '<option value="houseRent">Haus</option>' +
//            '<option value="apartmentRent">Wohnung</option>' +
//            '<option value="shortTermAccommodationRent">Möbliertes Wohnen / Wohnen auf Zeit</option>' +
//            '</select>'
//        );
//
//        var $objektartB = $('' +
////        '<div data-role="fieldcontain">' +
//            '    <label for="objektartB" >Objektart</label>' +
//            '<select class="donEdi" name="objekt[type]" id="objektartB" required title="Bitte wählen Sie eine Option">' +
//            '   <option value="">--bitte wählen--</option>' +
////    '   <option value="1">Büro und Praxisräume</option>'+
////    '   <option value="2">Einzelhandel</option>'+
////    '   <option value="3">Gastronomie / Beherbergung</option>'+
////    '   <option value="4">Gewerbliche Freizeitimmobilie</option>'+
////    '   <option value="5">Grundstück</option>'+
////    '   <option value="7">Land / Forstwirtschaftliches Objekt</option>'+
////    '   <option value="8">Produktions- / Lager- / Gewerbehalle</option>'+
////    '   <option value="10">Zimmer</option>'+
////    '   <option value="11">Zinshaus oder Renditeobjekt</option>'+
////    '   <option value="13">Sonstiges Objekt</option>'+
//            '<option value="houseBuy">Haus</option>' +
//            '<option value="apartmentBuy">Wohnung</option>' +
//            '</select>'
//        );
//
//        var $objektTyp = $('<div data-role="fieldcontain">' +
//            '    <label for="objekttypR" >Objekt Kategorie</label>' +
//            '   <select  name="objekt[apartmentType]" id="objekttypR" required title="Bitte wählen Sie eine Option">' +
//            '      <option value="">--bitte wählen--</option>' +
//            ' </select>' +
//            '</div>');
//
//        if ($(this).val() === 'buy') {
//            $("#row2").empty();
//            $("#row2").append($objektartB).trigger("create");
//            $("#row2").append($objektTyp).trigger("create");
//
//
//
//        }
//        if ($(this).val() === 'rent') {
//            $("#row2").empty();
//            $("#row2").append($objektartR).trigger("create");
//            $("#row2").append($objektTyp).trigger("create");
//
//        }
//

    });

    $(document).on('change', '#objektartR, #objektartB', function () {

        switch ($(this).val()){
            case '1':
                $("#objekttypR").empty();
                $('<option>').val("").text("--bitte wählen--").appendTo('#objekttypR');
                $('<option>').val("Bürofläche").text("Bürofläche").appendTo('#objekttypR');
                $('<option>').val("Bürohaus").text("Bürohaus").appendTo('#objekttypR');
                $('<option>').val("Praxis").text("Praxis").appendTo('#objekttypR');
                $('<option>').val("Ausstellungsfläche").text("Ausstellungsfläche").appendTo('#objekttypR');
                break;
            case '2':
                $("#objekttypR").empty();
                $('<option>').val("").text("--bitte wählen--").appendTo('#objekttypR');
                $('<option>').val("Einkaufszentrum").text("Einkaufszentrum").appendTo('#objekttypR');
                $('<option>').val("Einzelhandelsladen").text("Einzelhandelsladen").appendTo('#objekttypR');
                $('<option>').val("Ladenlokal").text("Ladenlokal").appendTo('#objekttypR');
                $('<option>').val("Verbrauchermarkt").text("Verbrauchermarkt").appendTo('#objekttypR');
                break;
            case '3':
                $("#objekttypR").empty();
                $('<option>').val("").text("--bitte wählen--").appendTo('#objekttypR');
                $('<option>').val("Tavern").text("Tavern").appendTo('#objekttypR');
                $('<option>').val("Gastronomie und Wohnung").text("Gastronomie und Wohnung").appendTo('#objekttypR');
                $('<option>').val("Hotel").text("Hotel").appendTo('#objekttypR');
                $('<option>').val("Pension").text("Pension").appendTo('#objekttypR');
                $('<option>').val("Bar").text("Bar").appendTo('#objekttypR');
                $('<option>').val("Cafe").text("Cafe").appendTo('#objekttypR');
                $('<option>').val("Restaurant").text("Restaurant").appendTo('#objekttypR');
                break;

            case '4':

                $("#objekttypR").empty();
                $('<option>').val("").text("--bitte wählen--").appendTo('#objekttypR');
                $('<option>').val("Sportanlage").text("Sportanlage").appendTo('#objekttypR');
                $('<option>').val("Vergnügungspark oder Center").text("Vergnügungspark oder Center").appendTo('#objekttypR');

                break;
            case '5':
                $("#objekttypR").empty();
                $('<option>').val("").text("--bitte wählen--").appendTo('#objekttypR');
                $('<option>').val("Wohnen").text("Wohnen").appendTo('#objekttypR');
                $('<option>').val("Gewerbe").text("Gewerbe").appendTo('#objekttypR');
                $('<option>').val("Industrie").text("Industrie").appendTo('#objekttypR');
                $('<option>').val("Land-Forstwirtschaft").text("Land-Forstwirtschaft").appendTo('#objekttypR');
                $('<option>').val("Freizeit").text("Freizeit").appendTo('#objekttypR');
                $('<option>').val("Gemischt").text("Gemischt").appendTo('#objekttypR');
                $('<option>').val("Sondernutzung").text("Sondernutzung").appendTo('#objekttypR');

                break;
            case 'houseRent':
                $("#objekttypR").empty();
                $('<option>').val("").text("--bitte wählen--").appendTo('#objekttypR');
                $('<option>').val("Bauernhaus").text("Bauernhaus").appendTo('#objekttypR');
                $('<option>').val("Doppelhaushälfte").text("Doppelhaushälfte").appendTo('#objekttypR');
                $('<option>').val("Einfamilienhaus").text("Einfamilienhaus").appendTo('#objekttypR');
                $('<option>').val("Ferienhaus").text("Ferienhaus").appendTo('#objekttypR');
                $('<option>').val("Landhaus").text("Landhaus").appendTo('#objekttypR');
                $('<option>').val("Mehrfamilienhaus").text("Mehrfamilienhaus").appendTo('#objekttypR');
                $('<option>').val("Reihenhaus").text("Reihenhaus").appendTo('#objekttypR');
                $('<option>').val("Reihenendhaus").text("Reihenendhaus").appendTo('#objekttypR');
                $('<option>').val("Resthof").text("Resthof").appendTo('#objekttypR');
                $('<option>').val("Schloss").text("Schloss").appendTo('#objekttypR');
                $('<option>').val("Stadthaus").text("Stadthaus").appendTo('#objekttypR');
                $('<option>').val("Villa").text("Villa").appendTo('#objekttypR');
                $('<option>').val("Zweifamilienhaus").text("Zweifamilienhaus").appendTo('#objekttypR');
                $('<option>').val("Berghütte").text("Berghütte").appendTo('#objekttypR');
                $('<option>').val("Chalet").text("Chalet").appendTo('#objekttypR');
                $('<option>').val("Strandhaus").text("Strandhaus").appendTo('#objekttypR');
                $('<option>').val("Laube, Datsche, Gartenhaus").text("Laube, Datsche, Gartenhaus").appendTo('#objekttypR');
                $('<option>').val("Stadthaus").text("Stadthaus").appendTo('#objekttypR');
                $('<option>').val("Bungalow").text("Bungalow").appendTo('#objekttypR');

                break;
            case 'houseBuy':
                break;
            case '7':
                $("#objekttypR").empty();
                $('<option>').val("").text("--bitte wählen--").appendTo('#objekttypR');
                $('<option>').val("Aussiedlerhof").text("Aussiedlerhof").appendTo('#objekttypR');
                $('<option>').val("Bauernhof").text("Bauernhof").appendTo('#objekttypR');
                $('<option>').val("Gartenbau").text("Gartenbau").appendTo('#objekttypR');
                $('<option>').val("Jagd- und Forstwirtschaft").text("Jagd- und Forstwirtschaft").appendTo('#objekttypR');
                $('<option>').val("Landwirtschaftlicher Betrieb").text("Landwirtschaftlicher Betrieb").appendTo('#objekttypR');
                $('<option>').val("Reiterhof").text("Reiterhof").appendTo('#objekttypR');
                $('<option>').val("Scheune").text("Scheune").appendTo('#objekttypR');
                $('<option>').val("Teich-Fischwirtschaft").text("Teich-Fischwirtschaft").appendTo('#objekttypR');
                $('<option>').val("Viehwirtschaft").text("Viehwirtschaft").appendTo('#objekttypR');
                $('<option>').val("Weinanbau").text("Weinanbau").appendTo('#objekttypR');


                break;
            case '8':
                $("#objekttypR").empty();
                $('<option>').val("").text("--bitte wählen--").appendTo('#objekttypR');
                $('<option>').val("Freifläche").text("Freifläche").appendTo('#objekttypR');
                $('<option>').val("Halle").text("Halle").appendTo('#objekttypR');
                $('<option>').val("Hochregallager").text("Hochregallager").appendTo('#objekttypR');
                $('<option>').val("Lager").text("Lager").appendTo('#objekttypR');
                $('<option>').val("Produktion").text("Produktion").appendTo('#objekttypR');
                $('<option>').val("Service").text("Service").appendTo('#objekttypR');
                $('<option>').val("Werkstatt").text("Werkstatt").appendTo('#objekttypR');
                break;
            case 'apartmentRent':
                $("#objekttypR").empty();
                $('<option>').val("").text("--bitte wählen--").appendTo('#objekttypR');
                $('<option>').val("ROOF_STOREY").text("Dachgeschosswohnung").appendTo('#objekttypR');
                $('<option>').val("GROUND_FLOOR").text("Erdgeschosswohnung").appendTo('#objekttypR');
                $('<option>').val("APARTMENT").text("Etagenwohnung").appendTo('#objekttypR');
                $('<option>').val("LOFT").text("Loft, Studio, Atelier").appendTo('#objekttypR');
                $('<option>').val("MAISONETTE").text("Maisonette").appendTo('#objekttypR');
                $('<option>').val("PENTHOUSE").text("Penthouse").appendTo('#objekttypR');
                $('<option>').val("HALF_BASEMENT").text("Souterrainwohnung").appendTo('#objekttypR');
                $('<option>').val("TERRACED_FLAT").text("Wooow").appendTo('#objekttypR');
                $('#user_creditsJqm2').append(objektForm.form2).trigger('create');


                break;
            case 'apartmentBuy':
                $("#objekttypR").empty();
                $('<option>').val("").text("--bitte wählen--").appendTo('#objekttypR');
                $('<option>').val("ROOF_STOREY").text("Dachgeschosswohnung").appendTo('#objekttypR');
                $('<option>').val("GROUND_FLOOR").text("Erdgeschosswohnung").appendTo('#objekttypR');
                $('<option>').val("APARTMENT").text("Etagenwohnung").appendTo('#objekttypR');
                $('<option>').val("LOFT").text("Loft, Studio, Atelier").appendTo('#objekttypR');
                $('<option>').val("MAISONETTE").text("Maisonette").appendTo('#objekttypR');
                $('<option>').val("PENTHOUSE").text("Penthouse").appendTo('#objekttypR');
                $('<option>').val("HALF_BASEMENT").text("Souterrainwohnung").appendTo('#objekttypR');
                $('<option>').val("TERRACED_FLAT").text("Terrassenwohnung").appendTo('#objekttypR');
                $('#user_creditsJqm2').append(objektForm.buildingEnergyRatingType).trigger('create');

                break;
            case '10':
                $("#objekttypR").empty();
                $('<option>').val("").text("--bitte wählen--").appendTo('#objekttypR');
                $('<option>').val("Zimmer").text("Zimmer").appendTo('#objekttypR');

                break;
            case '11':
                $("#objekttypR").empty();
                $('<option>').val("").text("--bitte wählen--").appendTo('#objekttypR');
                $('<option>').val("Bürogebäude").text("Bürogebäude").appendTo('#objekttypR');
                $('<option>').val("Einkaufszentrum").text("Einkaufszentrum").appendTo('#objekttypR');
                $('<option>').val("Wohn- und Geschäftshaus").text("Wohn- und Geschäftshaus").appendTo('#objekttypR');
                $('<option>').val("Geschäftshaus").text("Geschäftshaus").appendTo('#objekttypR');
                $('<option>').val("Industrieanlage").text("Industrieanlage").appendTo('#objekttypR');
                $('<option>').val("Mehrfamilienhaus").text("Mehrfamilienhaus").appendTo('#objekttypR');
                $('<option>').val("SB-Markt").text("SB-Markt").appendTo('#objekttypR');
                $('<option>').val("Verbrauchermarkt").text("Verbrauchermarkt").appendTo('#objekttypR');
                $('<option>').val("Wohnanlage").text("Wohnanlage").appendTo('#objekttypR');
                break;
            case 'shortTermAccommodation':
                $("#objekttypR").empty();
                $('<option>').val("").text("--bitte wählen--").appendTo('#objekttypR');
                $('<option>').val("Wohnung").text("Wohnung").appendTo('#objekttypR');
                $('<option>').val("Haus").text("Haus").appendTo('#objekttypR');
                $('<option>').val("Zimmer").text("Zimmer").appendTo('#objekttypR');
                $('<option>').val("Appartement").text("Appartement").appendTo('#objekttypR');
                break;
            case '13':
                $("#objekttypR").empty();
                $('<option>').val("").text("--bitte wählen--").appendTo('#objekttypR');
                $('<option>').val("Garage").text("Garage").appendTo('#objekttypR');
                $('<option>').val("Parkhaus").text("Parkhaus").appendTo('#objekttypR');
                $('<option>').val("Parkfläche").text("Parkfläche").appendTo('#objekttypR');
                break;
            case '11':
                break;

        }

    });
    });

</script>
