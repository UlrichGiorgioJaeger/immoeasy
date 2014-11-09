<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li><?php echo $this->Html->link(
                        'Dashboard',
                        array(
                            'controller' => 'posts',
                            'action' => 'dashboard',
                            'full_base' => true
                        )
                    );?></li>
                <li><?php echo $this->Html->link(
                        'Meine Daten',
                        array(
                            'controller' => 'users',
                            'action' => 'edit', AuthComponent::user('id'),
                            'full_base' => true
                        )
                    );?></li>
<!--                <li>--><?php //echo $this->Html->link(
//                        'Meine Anzeigen',
//                        array(
//                            'controller' => 'posts',
//                            'action' => 'dashboard',
//                            'full_base' => true
//                        )
//                    );?><!--</li>-->
                <li><?php echo $this->Html->link(
                        'Anzeige erstellen',
                        array(
                            'controller' => 'posts',
                            'action' => 'add',
                            'full_base' => true
                        )
                    );?></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><?php echo $this->Html->link(
                        'Meine Rechnungen',
                        array(
                            'controller' => 'checkouts',
                            'action' => 'rechnungen',
                            'full_base' => true
                        )
                    );?>

                </li>
<!--                <li><a href="">Nav item again</a></li>-->
<!--                <li><a href="">One more nav</a></li>-->
<!--                <li><a href="">Another nav item</a></li>-->
<!--                <li><a href="">More navigation</a></li>-->
            </ul>
        </div>
        <script>
            var url = window.location;
            $('ul.nav a').filter(function() {
                return this.href == url;
            }).parent().addClass('active');



        </script>