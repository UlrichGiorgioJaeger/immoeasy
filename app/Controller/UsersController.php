<?php
/**
 * Created by PhpStorm.
 * User: EdibIsic
 * Date: 27.07.14
 * Time: 11:41
 */
App::uses('AppController', 'Controller');
App::uses('AuthComponent', 'Controller/Component');

// app/Controller/UsersController.php
class UsersController extends AppController {
    public $helpers = array('Html','Form','Js' => array('Jquery'),);
    public $components = array('Session',"Email");

    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('add',
            'logout',
            'login',
            'forgetpw',
            'reset',
            'activate'
        );
    }

    public function isAuthorized($user)
    {
        // All registered users can add posts
        if ($this->action === 'add'
        || $this->action === 'dashboard'


        ) {

            return true;
        }
        // The owner of a post can edit and delete it
        if (in_array($this->action, array('edit'))) {

            $postId = (int)$this->request->params['pass'][0];

            if ($this->User->isOwnedBy($postId, $user['id'])) {
                return true;
            }
        }



        return parent::isAuthorized($user);
    }

    public function login() {
        $this->set('title_for_layout', 'Anmelden');

//        $this->layout = false;
        if ($this->request->is('post')) {
//            debug($this->Auth->login()); die();
//            pr(AuthComponent::password($this->data[$this->alias]['password']));
            if ($this->Auth->login()) {
                debug($this->Auth->login());
//                $status = $this->Auth->user('is_active');
//                if ($status != 0) {
                    $this->Session->setFlash(
                        __('Willkommen, ' . $this->Auth->user('username')),
                        'alert',
                        array( 'plugin' => 'BoostCake',
                            'class' => 'alert-success')
                    );
                    return $this->redirect(array('controller' => 'posts' , 'action' =>'dashboard'));
//                }

            }

        }
//        if ($this->request->is('post')) {
//            if ($this->Auth->login()) {
//                return $this->redirect($this->Auth->redirectUrl());
//                // Prior to 2.3 use
//                // `return $this->redirect($this->Auth->redirect());`
//            } else {
//                $this->Session->setFlash(
//                    __('Email oder Passwort falsch!'),
//                    'alert',
//                    array( 'plugin' => 'BoostCake',
//                        'class' => 'alert-warning')
//                );
//            }
//        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }
//    function initialize($controller, $settings) {
//        $this->Controller =& $controller;
//    }

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() {
        $this->layout = false;
//        $postId = $this->request->query['id'];
//        $postId =$this->request['url']['id'];
//debug($postId);
//        $postPre['Post']['id'] = $postId;
//

//


//        (int) $this->request->params['pass'][0];

//        $postid = $this->request->url[];

        if ($this->request->is('post')) {
            $this->User->create();

            $key = Security::hash(String::uuid(),'sha512',true);
            $hash=sha1($this->request->data['User']['username'].rand(0,100));
            $url = Router::url( array('controller'=>'users','action'=>'activate'), true ).'/'.$key.'#'.$hash;
            $ms=$url;
            $ms=wordwrap($ms,1000);
            //debug($url);
            $this->request->data['User']['tokenhash']=$key;
            $this->request->data['User']['is_active']='0';
            if ($this->User->save($this->request->data)) {




                    //============Email================//
                    /* Activate Link Options */
                    $Email = new CakeEmail('one');

//                            $this->request->data['Post']['kontaktName'] = $post['Post']['kontaktName'];
//                            $this->request->data['Post']['title']  = $post['Post']['title'];
//                            $data = $this->request->data;

                    $Email->template('activate')
                        ->emailFormat('html')
                        ->to($this->request->data['User']['email'])
                        ->from('info@immoeasy.net')
                        ->viewVars(array('ms' => $ms))
                        ->subject('Ihre Registrierung auf ImmoEasy.net')

                        ->send();

                    $this->Session->setFlash(
                        __('Nachricht wurde gesendet.'),
                        'alert',
                        array( 'plugin' => 'BoostCake',
                            'class' => 'alert-success')
                    );
                    //============EndEmail=============//
//                }
//                else{
//                    $this->Session->setFlash("Error Generating Reset link");
//                }

//Hier das Anlegen eines Objekts zuerst danach zuordnung der User ID nach der Anmeldung noch mal prüfen.
//                $this->loadModel('Post');
//                $this->loadModel('Post', $postId);
//                $post = $this->Post->read();
//
////                $post = ClassRegistry::init('Post');
//
////                $postPre = $post->findById($postId);
//                $post['Post']['user_id'] = $this->User->getLastInsertId();
//                $this->Post->id = $postId;
////                $postPre['Post']['user_id'] = $this->User->getLastInsertId();
//                debug($post);
//                $this->Post->save($post);
                $this->Session->setFlash(__('Sie haben sich erfolgreich registriert. Sie können sich nun anmelden.'), 'alert', array(
                    'plugin' => 'BoostCake',
                    'class' => 'alert-success'
                ));
//                return $this->redirect(array('action' => 'login'));
            }
            $this->Session->setFlash(
                __('Der Nutzer konnte nicht registriert werden. Bitte korriegieren Sie Ihre Angaben'),
                'alert',
                array( 'plugin' => 'BoostCake',
                    'class' => 'alert-warning')
            );
        }
    }

    public function edit($id = null) {
        $this->layout ='carousel';
        $this->User->id = $id;
        $this->request->data['User']['id'] = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
//            debug($this->request->data);
            if ($this->User->save($this->request->data)) {

                $this->Session->setFlash(__('Ihre Daten wurden erfolgreich aktualisiert!'), 'alert', array(
                    'plugin' => 'BoostCake',
                    'class' => 'alert-success'
                ));
//                $this->Session->setFlash(
//                    __('Ihre Daten wurden erfolgreich aktualisiert!'),
//                    'alert',
//                    array( 'plugin' => 'BoostCake',
//                        'class' => 'alert-warning'),
//                    'auth'
//                );

//                return $this->redirect(array('controller' => 'posts','action' => 'index'));
            }
            else{
                $this->Session->setFlash(__('Ihre Daten konnten nicht aktualisiert werden. Bitte versuchen Sie es noch einmal!'), 'alert', array(
                    'plugin' => 'BoostCake',
                    'class' => 'alert-success'
                ));
                $this->Session->setFlash(
                    __('Ihre Daten konnten nicht aktualisiert werden. Bitte versuchen Sie es noch einmal!'),
                    'alert',
                    array( 'plugin' => 'BoostCake',
                        'class' => 'alert-danger'),
                    'auth'
                );
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        $this->request->onlyAllow('post');

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }

    public function change_password(){
        if($this->request->is('post') || $this->request->is('put')){
            if(!empty($this->request->data['User']['password']) && !empty($this->request->data['User']['password_retype'])){
                if($this->request->data['User']['password'] == $this->request->data['User']['password_retype']){
                    $this->User->id=$this->Auth->user('id');
                    if($this->User->save($this->request->data)){
                        $this->Session->setFlash('Your password has been changed');
                    } else {
                        $this->Session->setFlash('Could not change your password due a server problem, try again latter');
                    }
                } else {
                    $this->Session->setFlash('Your password and your retype must match');
                }
            } else {
                $this->Session->setFlash('Password or retype not sent');
            }
        }
    }

    function forgetpw(){
        //$this->layout="signup";
        $this->User->recursive=-1;
        if(!empty($this->data))
        {
            if(empty($this->data['User']['email']))
            {
                $this->Session->setFlash('Please Provide Your Email Adress that You used to Register with Us');
            }
            else
            {
                $email=$this->data['User']['email'];
                $fu=$this->User->find('first',array('conditions'=>array('User.email'=>$email)));
                if($fu)
                {
                    //debug($fu);
                    if($fu['User']['is_active'])
                    {
                        $key = Security::hash(String::uuid(),'sha512',true);
                        $hash=sha1($fu['User']['username'].rand(0,100));
                        $url = Router::url( array('controller'=>'users','action'=>'reset'), true ).'/'.$key.'#'.$hash;
                        $ms=$url;
                        $ms=wordwrap($ms,1000);
                        //debug($url);
                        $fu['User']['tokenhash']=$key;
                        $this->User->id=$fu['User']['id'];
                        if($this->User->saveField('tokenhash',$fu['User']['tokenhash'])){

                            //============Email================//
                            /* SMTP Options */
                            $Email = new CakeEmail('one');

//                            $this->request->data['Post']['kontaktName'] = $post['Post']['kontaktName'];
//                            $this->request->data['Post']['title']  = $post['Post']['title'];
//                            $data = $this->request->data;

                            $Email->template('resetpw')
                                ->emailFormat('html')
                                ->to($fu['User']['email'])
                                ->from('info@immoeasy.net')
                                ->subject('Passwort zurücksetzen auf ImmoEasy.net')

                                ->viewVars(array('ms' => $ms))
                                ->send();

                            $this->Session->setFlash(
                                __('Nachricht wurde gesendet.'),
                                'alert',
                                array( 'plugin' => 'BoostCake',
                                    'class' => 'alert-success')
                            );
//                            $this->Email->template = 'resetpw';
//                            $this->Email->from    = 'Your Email <accounts@example.com>';
//                            $this->Email->to      = $fu['User']['name'].'<'.$fu['User']['email'].'>';
//                            $this->Email->subject = 'Reset Your Example.com Password';
//                            $this->Email->sendAs = 'both';
//
//                            $this->Email->delivery = 'smtp';
//                            $this->set('ms', $ms);
//                            $this->Email->send();
//                            $this->set('smtp_errors', $this->Email->smtpError);
//                            $this->Session->setFlash(__('Check Your Email To Reset your password', true));

                            //============EndEmail=============//
                        }
                        else{
                            $this->Session->setFlash(
                                __('Fehler beim Erstellen des Wiederherstellungslinks.'),
                                'alert',
                                array( 'plugin' => 'BoostCake',
                                    'class' => 'alert-success')
                            );
                        }
                    }
                    else
                    {
                        $this->Session->setFlash(
                            __('Dieses Konto ist noch nicht aktiviert. Prüfen Sie Ihre Emails um diesen zu aktivieren.'),
                            'alert',
                            array( 'plugin' => 'BoostCake',
                                'class' => 'alert-success')
                        );
                    }
                }
                else
                {
                    $this->Session->setFlash(
                        __('Email-Adresse existiert nicht.'),
                        'alert',
                        array( 'plugin' => 'BoostCake',
                            'class' => 'alert-success')
                    );
                }
            }
        }
    }
    function activate($token=null){



        if (empty($token)) {
            $this->Session->setFlash(
                __('Der Token ist nicht gesetzt versuchen Sie es erneut.'),
                'alert',
                array( 'plugin' => 'BoostCake',
                    'class' => 'alert-danger')
            );
            $this->redirect(array('controller' =>'pages','action'=>'index'));
        }
        else{
            $usr = $this->User->findBytokenhash($token);
            $this->User->id = $usr['User']['id'];
            if (!$usr) {
                $this->Session->setFlash(
                    __('Es konnte kein Benutzer von dieser Email gefunden werden.'),
                    'alert',
                    array( 'plugin' => 'BoostCake',
                        'class' => 'alert-danger')
                );
                $this->redirect(array('controller' =>'pages','action'=>'index'));
            }
            if ($this->User->saveField('is_active', 1)) {
                $this->Session->setFlash(
                    __('Der Nutzer wurde aktiviert, Sie können sich nun anmelden.'),
                    'alert',
                    array( 'plugin' => 'BoostCake',
                        'class' => 'alert-success')
                );
                $this->redirect(array('controller' =>'pages','action'=>'index'));

            }
            $this->Session->setFlash(
                __('Nutzer konnte nicht aktiviert werden.'),
                'alert',
                array( 'plugin' => 'BoostCake',
                    'class' => 'alert-danger')
            );
            $this->redirect(array('controller' =>'pages','action'=>'index'));

        }

        //$this->layout="Login";
//        $this->User->recursive=-1;
//        if(!empty($token)){
//            $u=$this->User->findBytokenhash($token);
//            if($u){
//                $this->User->id=$u['User']['id'];
//                if(!empty($this->data)){
//                    $this->User->data=$this->data;
//                    $this->User->data['User']['username']=$u['User']['username'];
//                    $new_hash=sha1($u['User']['username'].rand(0,100));//created token
//                    $this->User->data['User']['tokenhash']=$new_hash;
//                    if($this->User->validates(array('fieldList'=>array('password','passwordConfirm')))){
//                        if($this->User->save($this->User->data))
//                        {
//                            $this->Session->setFlash('Password Has been Updated');
//                            $this->redirect(array('controller'=>'users','action'=>'login'));
//                        }
//
//                    }
//                    else{
//
//        }
//
//        else{
//            $this->redirect('/');
//        }
    }
    function reset($token=null){
        //$this->layout="Login";
        $this->User->recursive=-1;
        if(!empty($token)){
            $u=$this->User->findBytokenhash($token);
            if($u){
                $this->User->id=$u['User']['id'];
                debug($this->request->data);
                if(!empty($this->data)){
                    $this->User->data=$this->data;
                    $this->User->data['User']['username']=$u['User']['username'];
                    $new_hash=sha1($u['User']['username'].rand(0,100));//created token
                    $this->User->data['User']['tokenhash']=$new_hash;
                    if($this->User->validates(array('fieldList'=>array('password','passwordConfirm')))){
                        if($this->User->save($this->User->data))
                        {
                            $this->Session->setFlash('Password Has been Updated');
                            $this->redirect(array('controller'=>'users','action'=>'login'));
                        }

                    }
                    else{

                        $this->set('errors',$this->User->invalidFields());
                    }
                }
            }
            else
            {
                $this->Session->setFlash(
                    __('Token abgelaufen. Der Link zum Passwort wiederherstellen funktioniert nur einmal.'),
                    'alert',
                    array( 'plugin' => 'BoostCake',
                        'class' => 'alert-danger')
                );
            }
        }

        else{
            $this->redirect('/');
        }
    }
}