
<?php
echo $this->element('sidebarDashboard');

?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Willkommen Herr <?php echo AuthComponent::user('nachname')?></h1>

            <div class="row placeholders">
                <div class="col-xs-6 col-sm-3 placeholder">
                    <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder">
                    <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder">
                    <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder">
                    <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>
                </div>
            </div>

            <h2 class="sub-header">Ihre Rechnungen</h2>

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Rechnungsadresse</h3>
                </div>
                <div class="panel-body">
                    <?php echo $post['Checkout']['vorname'];?> <?php echo $post['Checkout']['nachname'];?> </br>
                    <?php echo $post['Checkout']['strasse'];?> <?php echo $post['Checkout']['houseNumber'];?></br>
                    <?php echo $post['Checkout']['postleitzahl'];?> <?php echo $post['Checkout']['stadt'];?> </br>
                    <?php echo $post['Checkout']['land'];?>
                </div>
            </div>
            <br>
            <blockquote>
                Hiermit bestätige ich die Abbuchung von <?php echo $this->Number->currency($post['Checkout']['paket'], "EUR");  ?>
                von meinem Konto:
                KontoInhaber:  <?php echo $post['Checkout']['kontoinhaber'];?> </br>
                IBAN:  <?php echo $post['Checkout']['iban'];?></br>
                BIC:  <?php echo $post['Checkout']['bic'];?></br>
                bank:  <?php echo $post['Checkout']['bank'];?></br>

            </blockquote>
            <br>

        </div>
    </div>
</div>






