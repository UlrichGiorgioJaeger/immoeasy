
<?php echo $this->Session->flash(); ?>
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-gallery >
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" >
        <div class="item active">
            <?php
            echo $this->Html->image('carousel_2.jpg',array(alt=>'Erstes Bild'));


            ?>
            <div class="container">
                <div class="carousel-caption">
                    <h1>Willkommen auf Immoeasy.net</h1>
                    <p>Wir helfen Ihnen Ihre Immobilie in Deutschland zu verkaufen. Immoeasy.net ist das Portal für provisionsfreie Immobilien</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Weitere Infos</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <?php
            echo $this->Html->image('carousel_1.jpg',array(alt=>'Erstes Bild'));


            ?>
            <div class="container">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Veröffentlichen Sie Ihre Immobilienangebote jetzt bei uns!
                        Sie können ganz einfach mit der kostenlosen Paket zur Liste Ihrer Immobilienanzeigen jetzt beginnen.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Mehr erfahren</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <?php echo $this->Html->image('../server/php/files/' . $post['Post']['id'] .'/'. $post['File'][0]['name'], array('style' => 'width:100%')); ?>
<!--            --><?php
//
//            echo $this->Html->image('carousel_3.jpg',array(alt=>'Erstes Bild'));
//            ?>
            <div class="container">
                <div class="carousel-caption">
                    <h1>One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div><!-- /.carousel -->
<div class="container">

<?php //echo $this->Paginator->pager(); ?>
<!---->


<div class="row">

<div class="col-sm-7 col-md-8">

<h1 class="page-header"><?php echo h($post['Post']['title']); ?></h1>
<div class="row">
    <div class="col-md-3">
        <span class="text-muted">Basisinformationen</span>
    </div>
    <div class="col-md-9">
        <div class="col-md-4">

            <?php if (empty($post['Post']['price'] )): ?>
            <?php else: ?>
<!--                <li class="list-group-item">-->
                    <strong>Preis</strong></br>
                          <span>
                                 <?php
                                 $valu = ($post['Post']['price']);
                                 echo $this->Number->currency($valu, "EUR");  ?>
                            </span>
<!--                </li>-->
            <?php endif; ?>
        </div>
        <div class="col-md-4">
            <?php if (empty($post['Post']['plotArea'] )): ?>
            <?php else: ?>
                <!--                <li class="list-group-item">-->
                <strong>Grundstücksfläche</strong></br>
                <span>
                                 <?php
                                 $valu = ($post['Post']['plotArea']);
                                 echo $this->Number->currency($valu, "EUR");  ?>
                            </span>
                <!--                </li>-->
            <?php endif; ?>
        </div>
<!--        <div class="col-md-3">-->
<!---->
<!--        </div>-->
        <div class="col-md-4">
            <?php if (empty($post['Post']['commercializationType'] )): ?>
            <?php else: ?>
                <!--                <li class="list-group-item">-->
                <strong>Vermarktungsart</strong></br>
                <span>
                                 <?php
                                 $valu = ($post['Post']['commercializationType']);
                                 echo $this->Number->currency($valu, "EUR");  ?>
                            </span>
                <!--                </li>-->
            <?php endif; ?>
        </div>
    </div>
</div>

<?php if (empty($post['File'][0]['name'])): ?>
    <hr class="nav-divider">

<?php else: ?>
    <hr class="nav-divider">

    <div class="row">
        <div class="col-md-12">
            <!--        <img src="../server/php/files/' . $post['Post']['Livingbuysite']['id'] .'/'. $post['File'][0]['name']">-->
            <?php echo $this->Html->image('../server/php/files/' . $post['Post']['id'] .'/'. $post['File'][0]['name'], array('style' => 'width:100%')); ?>
        </div>

    </div>
    <hr class="nav-divider">

<?php endif; ?>



<div class="row">
    <div class="col-md-3">
        <span class="text-muted">Hauptkriterien</span>
    </div>

    <div class="col-md-9">
        <div class="col-md-12">




        <?php if (empty($post['Livingbuysite']['minDivisible'] )): ?>
        <?php else: ?>
            <li class="list-group-item">
                <strong>Teilbar ab</strong>
                            <span class="pull-right">
  <?php echo($post['Livingbuysite']['minDivisible']); ?>
                            </span>

            </li>
        <?php endif; ?>


            <?php if (empty($post['Livingbuysite']['recommendedUseTypes'] )): ?>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Empfohlene Nutzungsarten</strong>
                            <span class="pull-right">
  <?php echo($post['Livingbuysite']['recommendedUseTypes']); ?>
                            </span>
                </li>
            <?php endif; ?>

            <?php if (empty($post['Livingbuysite']['tenancy'] )): ?>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Heimfall nach ... Jahren (Pachtdauer)</strong>
                            <span class="pull-right">
  <?php echo($post['Livingbuysite']['tenancy']); ?>
                            </span>
                </li>
            <?php endif; ?>



            <?php if (empty($post['Livingbuysite']['siteDevelopmentType'] )): ?>

        <?php else: ?>
            <li class="list-group-item">
                <strong>Erschliessungs- zustand</strong>
                            <span class="pull-right">
  <?php echo($post['Livingbuysite']['siteDevelopmentType']); ?>
                            </span>
            </li>
        <?php endif; ?>



        <?php if (empty($post['Livingbuysite']['siteConstructibleType'] )): ?>
        <?php else: ?>
            <li class="list-group-item">
                <strong>Bebaubar nach</strong>
                            <span class="pull-right">
  <?php echo($post['Livingbuysite']['siteConstructibleType']); ?>
                            </span>
            </li>
        <?php endif; ?>


        <?php if (empty($post['Livingbuysite']['grz'] )): ?>
        <?php else: ?>
            <li class="list-group-item">
                <strong>GRZ</strong>
                            <span class="pull-right">
  <?php echo($post['Livingbuysite']['grz']); ?>
                            </span>
            </li>
        <?php endif; ?>



            <?php if (empty($post['Livingbuysite']['gfz'] )): ?>
        <?php else: ?>
            <li class="list-group-item">
                <strong>GFZ</strong>
                            <span class="pull-right">
  <?php echo($post['Livingbuysite']['gfz']); ?>
                            </span>
            </li>
        <?php endif; ?>





        </div>

    </div>
</div>
<hr class="nav-divider">


<div class="row">
    <div class="col-md-3">
        <!--        <span class="glyphicon glyphicon-euro"> </span>-->
        <span class="text-muted">Ausstattung</span>
    </div>

    <div class="col-md-9">

            <?php if (empty($post['Livingbuysite']['buildingPermission'] )): ?>
                <li class="list-group-item">
                    <strong><del>Baugenehmigung vorhanden</del></strong>
                </li>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Baugenehmigung vorhanden</strong>
                          <span class="pull-right">
                            <span class="glyphicon glyphicon-ok"></span>
                            </span>
                </li>
            <?php endif; ?>
            <?php if (empty($post['Livingbuysite']['demolition'] )): ?>
                <li class="list-group-item">
                    <strong><del>Abriss</del></strong>
                </li>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Abriss</strong>
                          <span class="pull-right">
                            <span class="glyphicon glyphicon-ok"></span>
                            </span>
                </li>
            <?php endif; ?>
            <?php if (empty($post['Livingbuysite']['shortTermConstructible'] )): ?>
                <li class="list-group-item">
                    <strong><del>Kurzfristig bebaubar</del></strong>
                </li>
            <?php else: ?>
                <li class="list-group-item">
                    <strong>Kurzfristig bebaubar</strong>
                          <span class="pull-right">
                            <span class="glyphicon glyphicon-ok"></span>
                            </span>
                </li>
            <?php endif; ?>
        </div></div>


        <?php if (empty($post['Post']['descriptionNote'] )): ?>
        <?php else: ?>
            <hr class="nav-divider">

            <div class="row">
    <div class="col-md-3">
            <span class="text-muted">Objektbeschreibung</span>
    </div>
    <div class="col-md-9">
<!--        <div class="col-md-2">-->
<!--        </div>-->
<!--        <div class="col-md-10">-->
                <span><?php echo nl2br($post['Post']['descriptionNote']);?></span>
<!--        </div>-->
    </div>
</div>
        <?php endif; ?>

<?php if (empty($post['Post']['locationNote'] )): ?>
<?php else: ?>
    <hr class="nav-divider">

    <div class="row">
        <div class="col-md-3">
            <span class="text-muted">Lagebeschreibung</span>
        </div>
        <div class="col-md-9">
<!--            <div class="col-md-2">-->
<!--            </div>-->
<!--            <div class="col-md-10">-->
                <span><?php echo nl2br($post['Post']['locationNote']);?></span>
<!--            </div>-->
        </div>
    </div>
<?php endif; ?>

<?php if (empty($post['Post']['furnishingNote'] )): ?>
<?php else: ?>
    <hr class="nav-divider">

    <div class="row">
        <div class="col-md-3">
            <span class="text-muted">Möblierung</span>
        </div>
        <div class="col-md-9">
<!--            <div class="col-md-2">-->
<!--            </div>-->
<!--            <div class="col-md-10">-->
                <span><?php echo nl2br($post['Post']['furnishingNote'])?></span>
<!--            </div>-->
        </div>
    </div>
<?php endif; ?>
<?php if (empty($post['Post']['otherNote'] )): ?>
<?php else: ?>
    <hr class="nav-divider">

    <div class="row">
        <div class="col-md-3">
            <span class="text-muted">Sonstiges</span>
        </div>
        <div class="col-md-9">
            <!--            <div class="col-md-2">-->
            <!--            </div>-->
            <!--            <div class="col-md-10">-->
            <span><?php echo nl2br($post['Post']['otherNote'])?></span>
            <!--            </div>-->
        </div>
    </div>
<?php endif; ?>
<hr class="nav-divider">




<!-- The file upload form used as target for the file upload widget -->
<form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
    <!-- Redirect browsers with JavaScript disabled to the origin page -->
    <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
    <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
    <!--                    <div class="row fileupload-buttonbar">-->
    <!--                        <div class="col-lg-7">-->
    <!--                            <!-- The fileinput-button span is used to style the file input field as button -->
    <!--                <span class="btn btn-success fileinput-button">-->
    <!--                    <i class="glyphicon glyphicon-plus"></i>-->
    <!--                    <span>Add files...</span>-->
    <!--                    <input type="file" name="files[]" multiple>-->
    <!--                </span>-->
    <!--                            <button type="submit" class="btn btn-primary start">-->
    <!--                                <i class="glyphicon glyphicon-upload"></i>-->
    <!--                                <span>Start upload</span>-->
    <!--                            </button>-->
    <!--                            <button type="reset" class="btn btn-warning cancel">-->
    <!--                                <i class="glyphicon glyphicon-ban-circle"></i>-->
    <!--                                <span>Cancel upload</span>-->
    <!--                            </button>-->
    <!--                            <button type="button" class="btn btn-danger delete">-->
    <!--                                <i class="glyphicon glyphicon-trash"></i>-->
    <!--                                <span>Delete</span>-->
    <!--                            </button>-->
    <!--                            <input type="checkbox" class="toggle">-->
    <!--                            <!-- The global file processing state -->
    <!--                            <span class="fileupload-process"></span>-->
    <!--                        </div>-->
    <!--                        <!-- The global progress state -->
    <!--                        <div class="col-lg-5 fileupload-progress fade">-->
    <!--                            <!-- The global progress bar -->
    <!--                            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">-->
    <!--                                <div class="progress-bar progress-bar-success" style="width:0%;"></div>-->
    <!--                            </div>-->
    <!--                            <!-- The extended global progress state -->
    <!--                            <div class="progress-extended">&nbsp;</div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!-- The table listing the files available for upload/download -->
    <table role="presentation" class="table table-striped">
        <tbody class="files"></tbody>
    </table>
</form>
<br>
<!--                <div class="panel panel-default">-->
<!--                    <div class="panel-heading">-->
<!--                        <h3 class="panel-title">Demo Notes</h3>-->
<!--                    </div>-->
<!--                    <div class="panel-body">-->
<!--                        <ul>-->
<!--                            <li>The maximum file size for uploads in this demo is <strong>5 MB</strong> (default file size is unlimited).</li>-->
<!--                            <li>Only image files (<strong>JPG, GIF, PNG</strong>) are allowed in this demo (by default there is no file type restriction).</li>-->
<!--                            <li>Uploaded files will be deleted automatically after <strong>5 minutes</strong> (demo setting).</li>-->
<!--                            <li>You can <strong>drag &amp; drop</strong> files from your desktop on this webpage (see <a href="https://github.com/blueimp/jQuery-File-Upload/wiki/Browser-support">Browser support</a>).</li>-->
<!--                            <li>Please refer to the <a href="https://github.com/blueimp/jQuery-File-Upload">project website</a> and <a href="https://github.com/blueimp/jQuery-File-Upload/wiki">documentation</a> for more information.</li>-->
<!--                            <li>Built with the <a href="http://getbootstrap.com/">Bootstrap</a> CSS framework and Icons from <a href="http://glyphicons.com/">Glyphicons</a>.</li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->


<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
           <td>
            <label class="title">
                <span>Title:</span><br>
                <input name="title[]" class="form-control">

            </label>
            <label class="description">
                <span>Description:</span><br>
                <input name="description[]" class="form-control">
            </label>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}

</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
    <div class="row" style="display:none">

{% for (var i=0, file; file=o.files[i]; i++) { %}

   <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.url%}" style="width:242px;height:200px" class="img-responsive"></a>
                        {% } %}


                        <div class="caption">
                             <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>

            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
                        </div>
                    </div>
                </div>







{% } %}
        </div><!-- /.row -->
</script>

</div>
<div class="col-sm-5  col-md-4 ">
    <h1 class="page-header">Anbieter</h1>
    <ul class="list-group">
        <?php if (empty($post['Post']['kontaktName'] )): ?>
        <?php else: ?>
            <li class="list-group-item">
                <strong>Name</strong>
                          <span class="pull-right">
                            <span class="glyphicon glyphicon-user"></span>
                              <?php echo($post['Post']['kontaktName']); ?>
                            </span>
            </li>

        <?php endif; ?>
        <?php if (empty($post['Post']['kontaktTel'] )): ?>
        <?php else: ?>
            <li class="list-group-item">
                <strong>Tel</strong>
                          <span class="pull-right">
                            <span class="glyphicon glyphicon-earphone"></span>
                              <?php echo($post['Post']['kontaktTel']); ?>
                            </span>
            </li>
        <?php endif; ?>
        <?php if (empty($post['Post']['kontaktMobil'] )): ?>
        <?php else: ?>
            <li class="list-group-item">
                <strong>Mobil</strong>
                          <span class="pull-right">
                            <span class="glyphicon glyphicon-phone"></span>
                              <?php echo($post['Post']['kontaktMobil']); ?>
                            </span>
            </li>

        <?php endif; ?>
        <?php if (empty($post['Post']['kontaktEmail'] )): ?>
        <?php else: ?>
            <li class="list-group-item">
                <strong>Email</strong>
                          <span class="pull-right">
                            <span class="glyphicon glyphicon-envelope"></span>
                              <?php echo($post['Post']['kontaktEmail']); ?>
                            </span>
            </li>

        <?php endif; ?>
    </ul>


    <?= $this->element('sidebar'); ?>
        <?php if (empty($post['Post']['showAddress'] ) || $post['Post']['showAddress'] == '0' ): ?>
            <address>
                <legend>Objektadresse</legend>
                <strong><?php echo $post['Post']['street']; ?> <?php echo $post['Post']['houseNumber']; ?></strong><br>
                <?php echo $post['Post']['postcode']; ?> <?php echo $post['Post']['city']; ?><br>
            </address>

        <?php else: ?>
            <address>
                <legend>Objektadresse</legend>
                <!--                <strong>--><?php //echo $post['Post']['Livingbuysite']['street']; ?><!-- --><?php //echo $post['Post']['Livingbuysite']['houseNumber']; ?><!--</strong><br>-->
                <?php echo $post['Post']['postcode']; ?> <?php echo $post['Post']['city']; ?><br>
            </address>


    <?php endif; ?>


</div>
</div>
</div>
<?php

$addresse = $post['Post']['street'] . " ". $post['Post']['houseNumber'] ."</br> ".
    $post['Post']['postcode'] . " ". $post['Post']['city'];
// Override any of the following default options to customize your map
$map_options = array(
    'id' => 'map_canvas',
    'width' => '100%',
    'height' => '400px',
    'style' => '',
    'zoom' => 14,
    'type' => 'HYBRID',
    'custom' => null,
    'localize' => false,
    'latitude' => $post['Post']['latitude'],
    'longitude' => $post['Post']['longitude'],
//        'address' => '1 Infinite Loop, Cupertino',
    'marker' => true,
    'markerTitle' => 'Test',
    'markerIcon' => 'http://google-maps-icons.googlecode.com/files/home.png',
    'markerShadow' => 'http://google-maps-icons.googlecode.com/files/shadow.png',
    'infoWindow' => true,
    'windowText' => 'Adresse: ' . $addresse
);
?>
<?= $this->GoogleMap->map($map_options); ?>
