<!DOCTYPE HTML>
<html lang="en">
<head>
    <!-- Force latest IE rendering engine or ChromeFrame if installed -->
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <meta charset="utf-8">
    <title>jQuery File Upload Demo</title>
    <meta name="description" content="File Upload widget with multiple file selection, drag&amp;drop support, progress bars, validation and preview images, audio and video for jQuery. Supports cross-domain, chunked and resumable file uploads and client-side image resizing. Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">

    <?php
    echo $this->Html->meta('icon');

    //    echo $this->Html->css('cake.generic');
    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('style');
    echo $this->Html->css('dashboard');
    echo $this->Html->css('jquery.fileupload');
    echo $this->Html->css('jquery.fileupload-ui');
?>
    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">

    <?php

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->Html->script('jquery-2.1.1.min');
    echo $this->Html->script('bootstrap.min');
    ?>
    <!-- CSS adjustments for browsers with JavaScript disabled -->
    <noscript><link rel="stylesheet" href="css/jquery.fileupload-noscript.css"></noscript>
    <noscript><link rel="stylesheet" href="css/jquery.fileupload-ui-noscript.css"></noscript>
</head>
<body>
<?php echo $this->element('headerDashboard'); ?>
<?php
echo $this->element('sidebarDashboard');

?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

<div class="container">
    <hr class="nav-divider">

    <ul class="nav nav-pills center-block">
        <li><a href="#">Rubrik</a></li>
        <li><a href="#">BasisDaten</a></li>
        <li class="active"><a href="#">Bilder</a></li>
        <li><a href="#">Vorschau</a></li>
        <li><a href="#">Veröffentlichung</a></li>
        <li><a href="#">Buchung abschließen</a></li>

    </ul>
    <hr class="nav-divider">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Bilder hochladen</h3>
        </div>
        <div class="panel-body">
            <ul>
                <li>Bilder dürfen max <strong>5 MB</strong> groß sein(default file size is unlimited).</li>
                <li>Sie können<strong> Bilder, Videos, PDF's, Grundrisse, Energieausweise</strong> hochladen<strong></strong> </li>
                <li>Kleinere Bilder wie oben angegeben werden im Internet-Exposé entsprechend kleiner dargestellt</li>
                <li>Größere Bilder können ebenfalls verwendet werden, diese werden von uns automatisch angepasst. Das Hochladen dauert dann jedoch etwas länger.</li>
                <li>Wenn Sie Bilder nicht im JPG-Format, sondern als GIF oder PNG hochladen, so sollten diese eine Dateigröße von mindestens 1000 KB bzw. 1 MB haben.</li>
                <li>Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.</li>
                <li>Für eine optimale Darstellung der Bilder im Exposé empfehlen wir, die Bilder im JPG-Format mit einer Auflösung von mindestens 1024x768 bzw. einer Dateigröße von ca. 200 KB hochzuladen.</li>



            </ul>
        </div>
    </div>
<!--    <br>-->
<!--    <blockquote>-->
<!--    </blockquote>-->
<!--    <br>-->
    <!-- The file upload form used as target for the file upload widget -->
    <form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="postId" value="hallo">
        <!-- Redirect browsers with JavaScript disabled to the origin page -->
        <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="row fileupload-buttonbar">
            <div class="col-lg-7">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Dateien hinzufügen...</span>
                    <input type="file" name="files[]" multiple>
                </span>
                <button type="submit" class="btn btn-primary start">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Starte den Upload</span>
                </button>
                <button type="reset" class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Upload abbrechen</span>
                </button>
                <button type="button" class="btn btn-danger delete">
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Löschen</span>
                </button>
                <input type="checkbox" class="toggle">
                <!-- The global file processing state -->
                <span class="fileupload-process"></span>
            </div>
            <!-- The global progress state -->
            <div class="col-lg-5 fileupload-progress fade">
                <!-- The global progress bar -->
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                </div>
                <!-- The extended global progress state -->
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>
        <!-- The table listing the files available for upload/download -->
        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>

        <?php
        echo $this->Html->link("Demo", array('controller' => 'posts','action'=> 'view', $id, '?'=>array('view_edit' => 'view_edit')), array( 'class' => 'btn btn-lg btn-primary btn-block'));
//        , '?' => array('id' => $id)
        echo $this->Form->submit('Speichern und weiter', array(
            'div' => 'form-group',
            'class' => 'btn btn-lg btn-primary btn-block'
        )); ?>
    </form>

    <br>

</div>
<!-- The blueimp Gallery widget -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
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
                <span>Titel:</span><br>
                <input name="title[]" class="form-control">
            </label>
            <label class="description">
                <span>Beschreibung:</span><br>
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
                    <span>Abbruch</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            <p class="title"><strong>{%=file.title||''%}</strong></p>
            <p class="description">{%=file.description||''%}</p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle">
            {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Abbruch</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<?php echo $this->Html->script('jquery.ui.widget');?>
<script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- blueimp Gallery script -->
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<?php
echo $this->Html->script('jquery.iframe-transport');
echo $this->Html->script('jquery.fileupload');
echo $this->Html->script('jquery.fileupload-process');
echo $this->Html->script('jquery.fileupload-image');
echo $this->Html->script('jquery.fileupload-audio');
echo $this->Html->script('jquery.fileupload-video');
echo $this->Html->script('jquery.fileupload-validate');
echo $this->Html->script('jquery.fileupload-ui');
echo $this->Html->script('main');
echo $this->Html->script('cors/jquery.xdr-transport');
echo $this->fetch('script');

?>


</body>
</html>
