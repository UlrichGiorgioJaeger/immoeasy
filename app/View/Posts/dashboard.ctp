<?php
echo $this->element('sidebarDashboard');

?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <?php echo $this->Session->flash(); ?>

        <h1 class="page-header">Willkommen <?php echo AuthComponent::user('anrede') ." ". AuthComponent::user('nachname')?> Was möchten Sie tun?</h1>

            <div class="row placeholders">
                <div class="col-xs-6 col-sm-3 placeholder">
<!--                    <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">-->
                    <?php
                    echo $this->Html->link('Eine neue Anzeige erstellen',
                        array(
                            'controller' => 'posts',
                            'action' => 'add',
                            'full_base' => true
                        ),
                        array('class' => 'btn btn-lg btn-primary btn-block')

                    );




                    ?><span class="text-muted">Anzeige erstellen</span>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder">
<!--                    <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">-->
                    <?php
                    echo $this->Html->link('Ihre persönlichen Daten ändern',
                        array(
                            'controller' => 'posts',
                            'action' => 'add',
                            'full_base' => true
                        ),
                        array('class' => 'btn btn-lg btn-primary btn-block')

                    );




                    ?>                    <span class="text-muted">Daten Ändern</span>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder">
<!--                    <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">-->
                    <?php
                    echo $this->Html->link('Ihre bisherigen Transaktionen',
                        array(
                            'controller' => 'posts',
                            'action' => 'add',
                            'full_base' => true
                        ),
                        array('class' => 'btn btn-lg btn-primary btn-block')

                    );




                    ?>                    <span class="text-muted">Ihre Transaktionen</span>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder">
<!--                    <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">-->
                    <?php
                    echo $this->Html->link('Übersicht Ihrer Anzeigen',
                        array(
                            'controller' => 'posts',
                            'action' => 'index',
                            'full_base' => true
                        ),
                        array('class' => 'btn btn-lg btn-primary btn-block')

                    );




                    ?>                    <span class="text-muted">Ihre Anzeigen</span>
                </div>
            </div>
            <?php if (!empty($posts)): ?>
            <h2 class="sub-header">Meine Anzeigen</h2>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Bild</th>
                        <th>Exposetitel</th>
                        <th>Preis</th>
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
                                        array('action' => 'view', $post['Post']['id'])
                                    ) . '</br>';
                                echo "Objekt Nr.:" . $post['Post']['id'] . '</br>';
                                echo "Adresse: " . $post['Post']['street'] . ", " . $post['Post']['houseNumber'] . ", " . $post['Post']['postcode'] . ", " . $post['Post']['city'] . '</br>';
                                echo "Zimmer: " . $post['Post']['numberOfRooms'] . '</br>';
                                echo "Wohnfläche: " . $post['Post']['livingSpace'] . 'm²</br>';
                                echo "Rubrik: " . $post['Post']['rubrik'] . ' ' .$post['Post']['objekttyp'];
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

                            <td>
                                <?php
                                echo $this->Form->postLink(
                                    'Löschen',
                                    array('action' => 'delete', $post['Post']['id']),
                                    array('confirm' => 'Sind sie Sicher dass Sie dieses Objekt löschen möchten?')
                                );
                                ?>
                                </br>
                                <?php

                                echo $this->Html->link(
                                    'Bearbeiten', array('action' => "edit",$post['Post']['id'])
                                );
                                ?>
                                </br>
                                <?php

                                echo $this->Html->link(
                                    'Vorschau', array('action' => "view",$post['Post']['id'])
                                );
                                ?>

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
        </div>






