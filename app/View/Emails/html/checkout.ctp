<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Emails.html
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

//$Email = new CakeEmail();
//$Email->from(array('me@example.com' => 'My Site'))
//    ->to('you@example.com')
//    ->subject('About')
//    ->send('My message');
echo $this->Html->css('bootstrap.min');


?>

<p>Hallo <?php

    echo $content['anrede']?>
    <?php

    echo $content['nachname']?></p>
<p>Herzlichen Glückwunsch Sie haben über das Immobilien-Portal ImmoEasy.net folgende Immobilie inseriert,</p>
<p>Objekt-Nr.: <?php echo $content['Post']['Post']['id'] ?> </p>
<p>Exposétitel: <?php echo $content['Post']['Post']['title'] ?></p>

<p>Immobilien-Adresse:</p>
<p><?php echo $content['Post']['Post']['street'] ?> <?php echo $content['Post']['Post']['houseNumber'] ?></p>
<p><?php echo $content['Post']['Post']['postcode'] ?> <?php echo $content['Post']['Post']['city'] ?></p>
<p><?php echo $content['Post']['Post']['country'] ?></p>

<p>Basisdaten Ihrer Immobilie:</p>
<p><?php echo $content['Post']['Post']['numberOfRooms'] ?></p>
<p><?php echo $content['Post']['Post']['livingSpace'] ?></p>
<p><?php echo $content['Post']['Post']['price'] ?></p>

<p>Ihre Rechnungsdaten: </p>
<p><?php echo $content['Post']['Checkout'][0]['vorname']; ?> <?php echo $content['Post']['Checkout'][0]['nachname']; ?> </p>
<p><?php echo $content['Post']['Checkout'][0]['strasse']; ?> <?php echo $content['Post']['Checkout'][0]['houseNumber']; ?></p>
<p><?php echo $content['Post']['Checkout'][0]['postleitzahl']; ?> <?php echo $content['Post']['Checkout'][0]['stadt']; ?> </p>
<p><?php echo $content['Post']['Checkout'][0]['land']; ?>

<p>Sie haben Paket für </p>
<p><?php echo $this->Number->currency($content['Post']['Checkout'][0]['paket'], "EUR");?></p>
<p>verbindlich gebucht.</p>
<p>Bitte überweisen Sie den Betrag von <?php echo $this->Number->currency($content['Post']['Checkout'][0]['paket'], "EUR");?> </p>
<p>an:</p>
<p>KontoInhaber: Edib Isic <?php echo $content['Post']['Checkout'][0]['kontoinhaber']; ?> </p>
<p>IBAN:  <?php echo $content['Post']['Checkout'][0]['iban']; ?></p>
<p>BIC:  <?php echo $content['Post']['Checkout'][0]['bic']; ?></p>
<p>Bank: Postbank <?php echo $content['Post']['Checkout'][0]['bank']; ?></p>

<p>Sobald Sie den Betraga überwiesen haben, erhalten den Link zu den von Ihnen ausgewählten Anzeigen</p>
<p>immobilienscout24, immonet.de, kalaydo und immobilien.de</p>
<p>Vielen Dank besuchen Sie uns doch wieder auf <a href="http://immoeasy.net">ImmoEasy.net</a></p>
