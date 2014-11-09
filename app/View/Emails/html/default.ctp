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


?>

    <p>Hallo <?php echo $content['Post']['kontaktName']?></p>
    <p>Sie haben auf dem Immobilien-Portal ImmoEasy.net eine neue Anfrage für Ihr Objekt erhalten,</p>
    <p>Objekt-Nr.: <?php echo $content['Post']['id']?> </p>
    <p>Exposétitel: <?php echo $content['Post']['title']?></p>
    <p>Link zur Anzeige: </p>
    <p>Nachricht des Interessenten:</p>
    <p><?php echo $content['Contact'][0]['message']?></p>

    <p>Antworten Sie dem Interessenten um Ihre Immobilie schnellst möglichst zu verkaufen</p>
    <p>So erreichen Sie den Interessenten :</p>
    <p>Name: <?php echo $content['Contact'][0]['name']?></p>
    <p>E-Mailadresse des Interessenten: <?php echo $content['Contact'][0]['email']?></p>
    <p>Tel. Nr: <?php echo $content['Contact'][0]['tel']?></p>
    <p>Vielen Dank besuchen Sie uns doch wieder auf <a href="http://immoeasy.net">ImmoEasy.net</a></p>
