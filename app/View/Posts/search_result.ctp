
<div class="container-fluid">
    <div class="row">
        <!--        -->
        <div class="col-sm-6 col-md-5 sidebar">

            <?php
            // include the google js code
            $this->Html->script($this->GoogleMapV3->apiUrl(), array('inline' => false));
            $googleMapOptions =  array(
                'autoScript' => true,
                'inline' => true,
                'width' => '100%',
                'height' => '100%',
                'type' => 'ROADMAP',
                'localize' => false,
                'zoom' => 15,
            );
            // echo the div container to display the map in
            echo $this->GoogleMapV3->map(array('div' => array('height' => '100%', 'width' => '100%'), 'zoom' => 15));



            ?>
        </div>
        <div class="col-sm-6 col-sm-offset-6 col-md-7 col-md-offset-5 main">
            <h1 class="page-header">Ihre Suchergebnisse</h1>
            <?php echo $this->Paginator->pagination(array(
                'ul' => 'pagination'
            )); ?>

            <?php echo $this->Session->flash(); ?>


            <?php if (!empty($posts)): ?>
<!--TODO tabelle schön formatieren oder ein neuartiges System keine Tabelle sondern eine andere wiedergabe, wie zum Beispiele diese Thumb Panels nutzen-->
            <div class="table-responsive">

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Suchergebnisse</th>
                        <th>Exposetitel</th>
                        <th>Preis</th>
                    </tr>

                    </thead>
                    <tbody>


                    <?php foreach ($posts as $post): ?>
                        <?php
                        $address =  $post['Post']['title'] . " " .$post['Post']['postcode'] . " " . $post['Post']['city'];
                        $options = array(


                            'lat' => $post['Post']['latitude'],
                            'lng' => $post['Post']['longitude'],
                            'title' => 'Address', // optional
                            'content' => $address//'<b>HTML</b> Content for the Bubble/InfoWindow' // optional
                        );
                        $this->GoogleMapV3->addMarker($options);

                        // finalize js


                        ?>
                        <tr>
                            <td>
                                <?php
                                //debug($post);
                                if (empty($post['File'])) {
                                    echo $this->Html->image('kein_bild.jpg', array('width' => '80px'));

                                } else {
                                    echo $this->Html->image('../server/php/files/' . $post['Post']['id'] . '/thumbnail/' . $post['File'][0]['name'], array('width' => '80px')) . '</br>';
                                    echo $post['Post']['postcode'] . '</br>';
                                    echo $post['Post']['city'];

                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $this->Html->link(
                                        $post['Post']['title'],
                                        array('action' => 'view', $post['Post']['id'])
                                    ) . '</br>';
                                echo "Objekt Nr.:" . $post['Post']['id'] . '</br>';
                                echo "Adresse: " . $post['Post']['street'] . ", " . $post['Post']['houseNumber'] . ", " . $post['Post']['postcode'] . ", " . $post['Post']['city'] . '</br>';
                                echo "Zimmer: " . $post['Post']['numberOfRooms'] . '</br>';
                                echo "Wohnfläche: " . $post['Post']['livingSpace'] . 'm²</br>';

                                ?>
                            </td>
                            <td>


                                <?php if (empty($post['Post']['price'])): ?>
                                    <span>
 <strong>Miete</strong>                            </span> </br>

                                    <span>
                <?php
                $valu = ($post['Post']['baseRent']);
                echo $this->Number->currency($valu, "EUR");  ?>                            </span>

                                <?php else: ?>
                                    <strong>Preis</strong>
                                    <span>
                                 <?php
                                 $valu = ($post['Post']['price']);
                                 echo $this->Number->currency($valu, "EUR");  ?>
                            </span>
                                <?php endif; ?>


                            </td>
                        </tr>

                    <?php endforeach; ?>
                    <?php else: ?>
                        <h2 class="sub-header">Keine Such-Ergebnisse </h2>
                        <?php
                        echo $this->Html->link('Neue Suche',
                            array(
                                'controller' => 'posts',
                                'action' => 'search_adv',
                                'full_base' => true
                            ),
                            array('class' => 'btn btn-lg btn-primary btn-block')
                        );
                        ?>
                    <?php
                    endif; ?>
                    </tbody>
                </table>
                <?php echo $this->Paginator->pagination(array(
                    'ul' => 'pagination'
                )); ?>
            </div>

            <?php                 $this->GoogleMapV3->finalize();
            ?>
        </div>
    </div>
</div>
<?php //echo $this->element('sql_dump');
echo $this->Js->writeBuffer();
?>