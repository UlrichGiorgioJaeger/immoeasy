
<?php
echo $this->element('sidebarDashboard');

?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<!--            <h1 class="page-header">Willkommen Herr --><?php //echo AuthComponent::user('nachname')?><!--</h1>-->
<!---->
<!--            <div class="row placeholders">-->
<!--                <div class="col-xs-6 col-sm-3 placeholder">-->
<!--                    <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">-->
<!--                    <h4>Label</h4>-->
<!--                    <p class="text-muted">Something else</p>-->
<!--                </div>-->
<!--                <div class="col-xs-6 col-sm-3 placeholder">-->
<!--                    <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">-->
<!--                    <h4>Label</h4>-->
<!--                    <p class="text-muted">Something else</p>-->
<!--                </div>-->
<!--                <div class="col-xs-6 col-sm-3 placeholder">-->
<!--                    <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">-->
<!--                    <h4>Label</h4>-->
<!--                    <p class="text-muted">Something else</p>-->
<!--                </div>-->
<!--                <div class="col-xs-6 col-sm-3 placeholder">-->
<!--                    <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">-->
<!--                    <h4>Label</h4>-->
<!--                    <p class="text-muted">Something else</p>-->
<!--                </div>-->
<!--            </div>-->
            <div class="table-responsive">

            <?php if (!empty($posts)): ?>
            <h2 class="sub-header">Ihre Rechnungen</h2>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Bild</th>
                    <th>Exposetitel</th>
                    <th>Preis</th>
                    <th>Erstellt am</th>

                    <th>Aktionen</th>

                </tr>

                </thead>
                <tbody>


                <?php foreach ($posts as $post): ?>
                    <?php
                    $address =  $post['Post']['title'] . " " .$post['Post']['postcode'] . " " . $post['Post']['city'];

                    ?>
                    <tr>
                        <td>
                            <?php
                            //debug($post);
                            if (empty($post['File'])) {
                                echo $this->Html->image('kein_bild.jpg', array('width' => '80px'));

                            } else {
                                echo $this->Html->image('../server/php/files/' . $post['Post']['id'] . '/thumbnail/' . $post['File'][0]['name']) . '</br>';
                                echo $post['Post']['postcode'] . '</br>';
                                echo $post['Post']['city'];

                            }
                            ?>
                        </td>
                        <td>

                            <?php
                            echo $this->Html->link(
                                $post['Post']['title'],
                                array('action' => 'rechnungen_view', $post['Checkout']['id'])
                            ) . '</br>';
                            echo "Objekt Nr.:" . $post['Post']['id'] . '</br>';
                            echo "Adresse: " . $post['Post']['street'] . ", " . $post['Post']['houseNumber'] . ", " . $post['Post']['postcode'] . ", " . $post['Post']['city'] . '</br>';
                            echo "Zimmer: " . $post['Post']['numberOfRooms'] . '</br>';
                            echo "Wohnfläche: " . $post['Post']['livingSpace'] . 'm²</br>';
                            echo "Rubrik: " . $post['Post']['rubrik'] . ' ' .$post['Post']['objekttyp'];
                            ?>
                        </td>
                        <td>


                            <?php if (empty($post['Checkout']['paket'])): ?>

                            <?php else: ?>
                                <p>
                                 <?php
                                 $valu = ($post['Checkout']['paket']);
                                 echo $this->Number->currency($valu, "EUR");  ?>
                            </p>
                            <?php endif; ?>


                        </td>
                        <td>


                            <?php if (empty($post['Checkout']['created'])): ?>

                            <?php else: ?>
                                <p>
                                 <?php
                                 $valu = ($post['Checkout']['created']);
                                 echo $this->Time->niceShort($valu);
?>
                            </p>
                            <?php endif; ?>


                        </td>
                        <td>
<!--                            --><?php
//                            echo $this->Form->postLink(
//                                'Löschen',
//                                array('action' => 'delete', $post['Post']['id']),
//                                array('confirm' => 'Sind sie Sicher dass Sie dieses Objekt löschen möchten?')
//                            );
//                            ?>
<!--                            </br>-->
<!--                            --><?php
//
//                            echo $this->Html->link(
//                                'Bearbeiten', array('action' => "edit",$post['Post']['id'])
//                            );
//                            ?>
<!--                            </br>-->
                            <?php

                            echo $this->Html->link(
                                'Vorschau', array('action' => "rechnungen_view",$post['Checkout']['id'])
                            );
                            ?>

                        </td>
                    </tr>

                <?php endforeach; ?>
                <?php else: ?>
                    <h2 class="sub-header">Sie haben bisher noch keine Rechnungen</h2>
                    <?php
                    echo $this->Html->link('Jettzt Immobilie inserieren',
                        array(
                            'controller' => 'posts',
                            'action' => 'add',
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


<!--                <table class="table table-striped">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>Id</th>-->
<!--                        <th>Vorschau</th>-->
<!--                        <th>Titel</th>-->
<!--                        <th>Aktionen</th>-->
<!--                        <th>Erstellt</th>-->
<!--                    </tr>-->
<!---->
<!--                    </thead>-->
<!--                    <tbody>-->
<!---->
<!---->
<!--                            --><?php //foreach ($posts as $post): ?>
<!--                                <tr>-->
<!--                                    <td>   <div class="panel-body">-->
<!---->
<!--                                        </div></td>-->
<!--<!--                                    <td>-->-->
<!--<!--                                        -->--><?php
////
////                                        if($post['Image'] == null){
////                                            echo "Kein Bild";
////                                        }
////                                        else{
////                                            echo $this->Html->image('../files/image/attachment/'.$post['Image']['0']['dir'].'/thumb_'.$post['Image']['0']['attachment']);
////
////
////                                        }
////                                        ?>
<!--<!--                                    </td>-->-->
<!--                                    <td>-->
<!--                                        --><?php
//                                        echo $this->Html->link(
//                                            $post['Post']['title'],
//                                            array('action' => 'rechnungen_view', $post['Checkout']['id'])
//                                        );
//                                        ?>
<!--                                    </td>-->
<!--                                    <td>-->
<!--                                        --><?php
//                                        echo $this->Form->postLink(
//                                            'Delete',
//                                            array('action' => 'delete', $post['Post']['id']),
//                                            array('confirm' => 'Are you sure?')
//                                        );
//                                        ?>
<!--                                        --><?php
//
//                                        $rubrik=$post['Post']['rubrik'];
//                                        //                echo "edit_".$rubrik;
//                                        echo $this->Html->link(
//                                            'Bearbeiten', array('action' => "edit",$post['Post']['id'])
//                                        );
//                                        ?>
<!--                                    </td>-->
<!--                                    <td>-->
<!--                                        --><?php //echo $post['Post']['created']; ?>
<!--                                    </td>-->
<!--                                </tr>-->
<!---->
<!--                            --><?php //endforeach; ?>
<!--                    --><?php //else: ?>
<!--                        <h2 class="sub-header">Sie haben noch keine Anzeigen</h2>-->
<!--                        --><?php
//                        echo $this->Html->link('Eine neue Anzeige erstellen',
//                            array(
//                                'controller' => 'posts',
//                                'action' => 'add',
//                                'full_base' => true
//                            ),
//                            array('class' => 'btn btn-lg btn-primary btn-block')
//
//                        );
//
//
//
//
//                        ?>
<!--                    --><?php //endif; ?>
<!---->
<!---->
<!--                    </tbody>-->
<!--                </table>-->
            </div>
        </div>
    </div>
</div>






