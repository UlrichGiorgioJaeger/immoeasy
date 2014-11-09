<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php
            $options = array(  'alt' => 'immoeasy', 'style' =>'width:134px;height:50px;',   'url' => array('controller' => 'pages', 'action' => 'index' ));
            echo $this->Html->image('immoeasy_logo1.png', $options);
            ?>
<!--            --><?php
//            echo $this->Html->link(
//                'ImmoEasy.net',
//                array(
//                    'controller' => 'pages',
//                    'action' => 'index',
//                    'full_base' => true,
//                ),
//                array(
//                    'rel'=>'tooltip',
//                    'class' => 'navbar-brand',
//                )
//            );?>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <!--                        TODO hier die Links noch erweitern mit den statischen Seiten-->
                <li>   <?php
                    echo $this->Html->link(
                        'Preise',
                        array(
                            'controller' => 'Pages',
                            'action' => 'preise',
                            'full_base' => true,
                        )
                    );?></li>
                <li>   <?php
                    echo $this->Html->link(
                        'Suchen',
                        array(
                            'controller' => 'posts',
                            'action' => 'search_adv',
                            'full_base' => true,
                        )
                    );?></li>
                <li> <?php
                    echo $this->Html->link(
                        'Anleitung',
                        array(
                            'controller' => 'Pages',
                            'action' => 'Anleitung',
                            'full_base' => true,
                        )
                    );?></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-list"></span>
                        </span><span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">

<!--                        <li>-->
<!--                            --><?php
//                            echo $this->Html->link(
//                                'Anzeige erstellen',
//                                array(
//                                    'controller' => 'Posts',
//                                    'action' => 'add_first',
//                                    'full_base' => true,
//                                )
//                            );?>
<!--                        </li>-->
                        <li><?php
                            echo $this->Html->link(
                                'Tips',
                                array(
                                    'controller' => 'Pages',
                                    'action' => 'tips',
                                    'full_base' => true,
                                )
                            );?></li>
                        <li><?php
                            echo $this->Html->link(
                                'Kontakt',
                                array(
                                    'controller' => 'Pages',
                                    'action' => 'contact',
                                    'full_base' => true,
                                )
                            );?></li>
                        <li><?php
                            echo $this->Html->link(
                                'Häufige Fragen',
                                array(
                                    'controller' => 'Pages',
                                    'action' => 'faq',
                                    'full_base' => true,
                                )
                            );?></li>

                        <!--                                <li class="divider"></li>-->
                        <!--                                <li class="dropdown-header">Nav header</li>-->
                        <!--                                <li><a href="#">Separated link</a></li>-->
                        <!--                                <li><a href="#">One more separated link</a></li>-->
                    </ul>
                </li>
            </ul>
                <!--                        <li class="dropdown">-->
                <!--                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>-->
                <!--                            <ul class="dropdown-menu" role="menu">-->
                <!--                                -->
                <!--                                <li><a href="#">Another action</a></li>-->
                <!--                                <li><a href="#">Something else here</a></li>-->
                <!--                                <li class="divider"></li>-->
                <!--                                <li class="dropdown-header">Nav header</li>-->
                <!--                                <li><a href="#">Separated link</a></li>-->
                <!--                                <li><a href="#">One more separated link</a></li>-->
                <!--                            </ul>-->
                <!--                        </li>-->
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if (AuthComponent::user('id')): ?>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= AuthComponent::user('username') ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">

                            <li>
                                <?php
                                echo $this->Html->link(
                                    'Mein Konto',
                                    array(
                                        'controller' => 'posts',
                                        'action' => 'dashboard',
                                        'full_base' => true,
                                    )
                                );?>
                            </li>
                            <li class="divider"></li>
                            <li><?php
                                echo $this->Html->link(
                                    'Mein Profil',
                                    array(
                                        'controller' => 'users',
                                        'action' => 'edit', AuthComponent::user('id'),
                                        'full_base' => true,
                                    )
                                );?></li>
                            <li>
                                <?php
                                echo $this->Html->link(
                                    'Neue Anzeige erstellen',
                                    array(
                                        'controller' => 'posts',
                                        'action' => 'add',
                                        'full_base' => true,
                                    )
                                );?></li>
                            <li><a href="#">Passwort ändern</a></li>
                            <li>
                                <?php
                                echo $this->Html->link(
                                    'Abmelden',
                                    array(
                                        'controller' => 'users',
                                        'action' => 'logout',
                                        'full_base' => true,
                                    )
                                );?>
                            </li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="active">
                        <?php
                        echo $this->Html->link(
                            'Registrieren',
                            array(
                                'controller' => 'users',
                                'action' => 'add',
                                'full_base' => true,
                            )
                        );?>
                    </li>
                    <li>

                        <?php
                        echo $this->Html->link(
                            'Anmelden',
                            array(
                                'controller' => 'users',
                                'action' => 'login',
                                'full_base' => true,
                            )
                        );?>
                    </li>

                <?php endif; ?>


            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
<!--<script>-->
<!--    var url = window.location;-->
<!---->
<!--    $('ul.nav a').filter(function() {-->
<!--        return this.href == url;-->
<!--    }).parent().addClass('active');-->
<!---->
<!---->
<!---->
<!--</script>-->
<?php //echo $this->element('sql_dump');
echo $this->Js->writeBuffer();


?>