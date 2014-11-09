
<div class="container">
    <h1 class="page-header">Haben Sie ein Frage oder Anregung schicken Sie uns eine Email</h1>

    <div class="row">
<!--        <div class="col-md-12">-->
<!--            <small><i></i>Add alerts if form ok... success, else error.</i></small>-->
<!--            <div class="alert alert-success"><strong><span class="glyphicon glyphicon-send"></span> Success! Message sent. (If form ok!)</strong></div>-->
<!--            <div class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span><strong> Error! Please check the inputs. (If form error!)</strong></div>-->
<!--        </div>-->

        <form role="form" action="" method="post" >
            <div class="col-lg-6">
                <?php echo $this->Session->flash('alert'); ?>

                <h3>Wir freuen uns Sie bei Immoeasy.net begrüßen zu dürfen.</h3>
                <div class="well well-sm"><strong><i class="glyphicon glyphicon-ok form-control-feedback"></i> PflichtFeld</strong></div>
                <div class="form-group">
                    <label for="InputName">Ihr Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Namen eingeben" required>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Ihre Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Email-Adresse eingeben" required  >
                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                </div>
                <div class="form-group">
                    <label for="InputMessage">Nachricht</label>
                    <div class="input-group"
                        >
                        <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                </div>
                <div class="form-group">
                    <label for="InputReal">Wieviel ist 4+3? (Spam Checker)</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputReal" id="InputReal" required>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                </div>
                <input type="submit" name="submit" id="submit" value="Senden" class="btn btn-info pull-right">
            </div>
        </form>
        <hr class="featurette-divider hidden-lg">
        <div class="col-lg-5 col-md-push-1">
            <address>
                <h3>Firmen Adresse:</h3>
                <p class="lead"><a href="https://www.google.de/maps/place/Lerchenauer+Str.+146A,+80935+M%C3%BCnchen/@48.19125,11.54942,17z/data=!3m1!4b1!4m2!3m1!1s0x479e7693c09c78b5:0x9d8f6e05aa6d3159">ImmoEasy.net<br>
                        80935 München</a><br>
                    Phone: 0175-5762806<br>
                    Fax: 0175-5762806</p>
            </address>
        </div>
    </div>

</div>



