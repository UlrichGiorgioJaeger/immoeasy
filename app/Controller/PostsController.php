<?php

/**
 * Created by PhpStorm.
 * User: EdibIsic
 * Date: 15.08.14
 * Time: 03:54
 */
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::uses('GeocodeLib', 'Tools.Lib');
App::uses('Xml', 'Utility');

session_name('CAKEPHP');
session_start();
class PostsController extends AppController
{
    public $helpers = array('Html', 'Js' => array('Jquery'),'Tools.GoogleMapV3');
    public $components = array('Session','Paginator');

    public $paginate = array(
        'limit' => 5,
        'order' => array(
            'Post.id' => 'asc'
        )
    );
    public function isAuthorized($user)
    {
        // All registered users can add posts
        if ($this->action ==='add'
            ||$this->action ==='view_edit'
            ||$this->action ==='dashboard'
                    ||$this->action ==='search_adv'
                    ||$this->action ==='search_result'



        ) {
            return true;
        }
        // The owner of a post can edit and delete it
        if (in_array($this->action, array('edit', 'delete'

        ,  'five'
        ,  'six'
        , 'jquery',
             'apartment_rent',
            'apartment_buy'
            ,'livingBuySite'
        ,
            'flatshareroom',
            'edit_buyapps'
        ))) {


            $postId = (int) $this->request->params['pass'][0];
            if ($this->Post->isOwnedBy($postId, $user['id'])) {
                return true;
            }
//            if ($this->Post->Checkout->isOwnedBy($postId, $user['id'])) {
//                return true;
//            }
        }


        return parent::isAuthorized($user);
    }

//
//    public function index_in()
//    {
////        $this->layout = 'BoostCake.bootstrap3';
//
//        $this->layout = 'carousel';
////        if()
//        $uid = $this->Auth->user('id');
//        $this->Paginator->settings = $this->paginate;
//
//        $data = $this->Paginator->paginate(
//            'Post',
//            array('Post.user_id =' => $uid)
//        );
//        // similar to findAll(), but fetches paged results
//        $this->set('posts', $data );
//    }

    public function dashboard()
    {
        $this->set('title_for_layout', 'Ihr Profil');

//        $this->layout = 'BoostCake.bootstrap3';
        $this->layout = 'carousel';
            $uid = $this->Auth->user('id');
        $this->Paginator->settings = $this->paginate;

        $data = $this->Paginator->paginate(
            'Post',
            array('Post.user_id =' => $uid)
        );
        // similar to findAll(), but fetches paged results
        $this->set('posts', $data );

    }

    public function view($id)
    {
        $this->set('title_for_layout', 'Ihr Profil');

        $layout1 = (!empty($this->params['url']['view_edit'])) ? 'view_edit': 'view';

        $this->layout = $layout1;

        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->Post->recursive = -1;
        $post = $this->Post->findById($id);
//        debug($post);

        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        session_name('CAKEPHP');
        $_SESSION['postId'] = $id;

        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }


        $rubrik = $post['Post']['rubrik'];
        $objekttyp =  $post['Post']['objekttyp'];
        $this->set(compact('rubrik','objekttyp'));

        if ($rubrik === 'verkaufen' && $objekttyp === 'apartment') {
            $apartmentbuy = $this->Post->find('first', array('contain' =>  array('Apartmentbuy','File'),
            'conditions' => array('Post.id' => $id)
            ));
//            debug($apartmentbuy);
            $this->set('post', $apartmentbuy);
            $this->set('id', $id);
            $this->render('ViewApartmentBuy');
        }
        if ($rubrik === 'vermieten' && $objekttyp === 'apartment') {
            $apartmentrent = $this->Post->find('first', array('contain' =>  array('Apartmentrent','File'),
                'conditions' => array('Post.id' => $id)
            ));
//            debug($apartmentrent);
            $this->set('post', $apartmentrent);
            $this->set('id', $id);
            $this->render('ViewApartmentRent');
        }
        if ($rubrik === 'verkaufen' && $objekttyp === 'house') {
            $housebuy = $this->Post->find('first', array('contain' =>  array('Housebuy','File'),
                'conditions' => array('Post.id' => $id)
            ));
//            debug($housebuy);
            $this->set('post', $housebuy);
            $this->set('id', $id);
            $this->render('ViewHouseBuy');
        }
        if ($rubrik === 'vermieten' && $objekttyp === 'house') {
            $houserent = $this->Post->find('first', array('contain' =>  array('Houserent','File'),
                'conditions' => array('Post.id' => $id)
            ));
            $this->set('post', $houserent);
            $this->set('id', $id);
            $this->render('ViewHouseRent');
        }
        if ($rubrik === 'vermieten' && $objekttyp === 'livingSite') {
            $livingrentsite = $this->Post->find('first', array('contain' =>  array('Livingrentsite','File'),
                'conditions' => array('Post.id' => $id)
            ));
//            debug($livingrentsite);
            $this->set('post', $livingrentsite);
            $this->set('id', $id);
            $this->render('ViewLivingRentSite');
        }
        if ($rubrik === 'verkaufen' && $objekttyp === 'livingSite') {
            $livingbuysite = $this->Post->find('first', array('contain' =>  array('Livingbuysite','File'),
                'conditions' => array('Post.id' => $id)
            ));
//            debug($livingbuysite);
            $this->set('post', $livingbuysite);
            $this->set('id', $id);
            $this->render('ViewLivingBuySite');
        }
        if ($rubrik === 'vermieten' && $objekttyp === 'garage') {
            $garagerent = $this->Post->find('first', array('contain' =>  array('Garagerent','File'),
                'conditions' => array('Post.id' => $id)
            ));
            $this->set('post', $garagerent);
            $this->set('id', $id);
            $this->render('ViewGarageRent');
        }
        if ($rubrik === 'verkaufen' && $objekttyp === 'garage') {
            $garagebuy = $this->Post->find('first', array('contain' =>  array('Garagebuy','File'),
                'conditions' => array('Post.id' => $id)
            ));
//            debug($garagebuy);
            $this->set('post', $garagebuy);
            $this->set('id', $id);
            $this->render('ViewGarageBuy');
        }
        if ($objekttyp === 'flatShareRoom') {
            $this->render('ViewFlatShareRoom');

        }
        if ($objekttyp === 'office') {
            $office = $this->Post->find('first', array('contain' =>  array('Office','File'),
                'conditions' => array('Post.id' => $id)
            ));
//            debug($office);
            $this->set('post', $office);
            $this->set('id', $id);
            $this->render('ViewOffice');

        }
        if ($objekttyp === 'store') {
            $this->render('ViewStore');

        }
        if ($objekttyp === 'gastronomy') {
            $this->render('ViewGastronomy');

        }
        if ($objekttyp === 'industry') {
            $this->render('ViewIndustry');

        }
        if ($objekttyp === 'tradesite') {
            $this->render('ViewTradesite');

        }  if ($objekttyp === 'specialPurpose') {
        $this->render('ViewSpecialPurpose');

    }
        if ( $objekttyp === 'investment') {
            $this->render('ViewInvestment');

        }
        if ($objekttyp === 'houseType') {
            $this->render('ViewHouseType');

        }
        if ($objekttyp === 'compulsoryAuction') {
            $this->render('ViewCompulsoryAuction');

        }
        if ($objekttyp === 'assistedLiving') {
            $this->render('ViewAssistedLiving');

        }
        if ($objekttyp === 'seniorCare') {
            $this->render('ViewSeniorCare');

        }
        if ($objekttyp === 'shortTermAccomodation') {
            $this->render('ViewShortTermAccomodation');

        }


//id muss gesetzt sein, damit der post geupdatet wird und nicht neuer angelegt.

//        Email an den Anbieter!!!
        if ($this->request->is(array('post', 'put'))) {
            $this->request->data['Post']['id'] = $id;

            if ($this->Post->saveAll($this->request->data)) {


            } else {
                debug($this->Post->validationErrors);
                debug($this->Post->invalidFields());
                $this->Session->setFlash(
                    __('Nachricht konnte nicht gesendet werden!'),
                    'alert',
                    array( 'plugin' => 'BoostCake',
                        'class' => 'alert-error')
                );            }

            $Email = new CakeEmail('one');

            $fromEmail = $this->request->data['Contact'][0]['email'];
//            debug($fromEmail);
            $toEmail = $post['Post']['kontaktEmail'];
            $this->request->data['Post']['kontaktName'] = $post['Post']['kontaktName'];
            $this->request->data['Post']['title']  = $post['Post']['title'];
            $data = $this->request->data;

            $Email->template('default')
                ->emailFormat('html')
                ->to($toEmail)
                ->from($fromEmail)
                ->subject('Neue Anfrage für Ihre Immobilie auf ImmoEasy.net')

                ->viewVars(array('content' => $data))
                ->send();

            $this->Session->setFlash(
                __('Nachricht wurde gesendet.'),
                'alert',
                array( 'plugin' => 'BoostCake',
                    'class' => 'alert-success')
            );

        }

    }
    public function view_edit($id)
    {

        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        session_name('CAKEPHP');
        $_SESSION['postId'] = $id;
        $this->layout = false;

        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
//        $this->set('user', $userName);
        $this->set('post', $post);
        $this->set('id', $id);

//id muss gesetzt sein, damit der post geupdatet wird und nicht neuer angelegt.
        $this->request->data['Post']['id'] = $id;

    }
//Finish zum Einstellen der Wohnungskategorie und Formatierungsangelegenheiten damit ich die App nun veröffentlichen kann.
    public function add()
    {
        $this->layout = false;

        if ($this->request->is('post')) {
            //Added this line
            $this->request->data['Post']['user_id'] = $this->Auth->user('id');
            $this->Post->create();
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(
                    __('Anzeige wurde gespeichert.'),
                    'alert',
                    array( 'plugin' => 'BoostCake',
                        'class' => 'alert-success')
                );

                return $this->redirect(array('action' => 'apartment_rent', $this->Post->getLastInsertId()));

//
//                if ($this->request->data['Post']['rubrik'] === 'verkaufen' && $this->request->data['Post']['objekttyp'] === 'apartment') {
//                    return $this->redirect(array('action' => 'apartmentBuy', $this->Post->getLastInsertId()));
//                }
//                if ($this->request->data['Post']['rubrik'] === 'vermieten' && $this->request->data['Post']['objekttyp'] === 'apartment') {
//                    return $this->redirect(array('action' => 'apartment_rent', $this->Post->getLastInsertId()));
//                }
//                if ($this->request->data['Post']['rubrik'] === 'vermieten' && $this->request->data['Post']['objekttyp'] === 'house') {
//                    return $this->redirect(array('action' => 'bilder', $this->Post->getLastInsertId()));
//                }
//                if ($this->request->data['Post']['rubrik'] === 'vermieten' && $this->request->data['Post']['objekttyp'] === 'house') {
//                    return $this->redirect(array('action' => 'bilder', $this->Post->getLastInsertId()));
//
//                }
            }
//            debug($this->Post->validationErrors);
//            debug($this->Post->invalidFields());
            $this->Session->setFlash(__('Unable to add your post.'));
            $this->Session->setFlash(
                __('Anzeige konnte nicht aktualisiert werden.'),
                'alert',
                array( 'plugin' => 'BoostCake',
                    'class' => 'alert-error')
            );
        }
    }

 public function add_first()
    {
        $this->layout = false;

        if ($this->request->is('post')) {
            //Added this line
            if($this->Auth->user('id')){
                $this->request->data['Post']['user_id'] = $this->Auth->user('id');
            }

            $this->Post->create();
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(
                    __('Schritt 1 erfolgreich!'),
                    'alert',
                    array( 'plugin' => 'BoostCake',
                        'class' => 'alert-success')
                );

                return $this->redirect(array('action' => 'apartment_rent', $this->Post->getLastInsertId()));


            }
//            debug($this->Post->validationErrors);
//            debug($this->Post->invalidFields());
            $this->Session->setFlash(
                __('Schritt 1 nicht erfolgreich! Bitte wiederholen Sie ersten Schritt'),
                'alert',
                array( 'plugin' => 'BoostCake',
                    'class' => 'alert-error')
            );
        }
    }
    public function edit($id = null) {
        $this->layout = 'carousel';

        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Post->id = $id;
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(
                    __('Objekt wurde aktualisiert.'),
                    'alert',
                    array( 'plugin' => 'BoostCake',
                        'class' => 'alert-success')
                );
                return $this->redirect(array('action' => 'apartment_rent', $id));

            }
            $this->Session->setFlash(
                __('Objekt konnte nicht aktualisiert werden.'),
                'alert',
                array( 'plugin' => 'BoostCake',
                    'class' => 'alert-error')
            );
        }
        $this->set('rubrik',$post['Post']['rubrik']);
        $this->set('objekttyp',$post['Post']['objekttyp']);
        $this->set('id',$id);

        if (!$this->request->data) {
            $this->request->data = $post;
        }
    }



    public function apartment_buy($id = null)
    {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
        $post = $this->Post->findById($id);

        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Post->id = $id;
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(
                    __('Objekt wurde aktualisiert.'),
                    'alert',
                    array( 'plugin' => 'BoostCake',
                        'class' => 'alert-success')
                );
                return $this->redirect(array('action' => 'jquery', $this->Post->id));
            }
            $this->Session->setFlash(
                __('Objekt konnte nicht aktualisiert werden.'),
                'alert',
                array( 'plugin' => 'BoostCake',
                    'class' => 'alert-error')
            );        }

        if (!$this->request->data) {
            $this->request->data = $post;
        }
    }
    public function apartment_rent($id = null)
    {
        ;
        $this->layout = 'carousel';



        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
//        $this->Post->recursive = -1;
        $post = $this->Post->findById($id);
//debug($post);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        if (!$this->request->data) {
            $this->request->data = $post;
        }
        $rubrik = $post['Post']['rubrik'];

        $objekttyp =  $post['Post']['objekttyp'];
        $this->set(compact('rubrik','objekttyp', 'id'));

        if ($rubrik === 'verkaufen' && $objekttyp === 'apartment') {
//            $apartmentbuy = $this->Post->find('first', array('contain' =>  array('Apartmentbuy','File'),
//                'conditions' => array('Post.id' => $id)
//            ));
////            debug($apartmentbuy);
//            if (!$this->request->data) {
//                $this->request->data = $apartmentbuy;
//            }
////          $this->set('post', $apartmentbuy);
            $this->set('aid', $post['Apartmentbuy']['id']);
            $this->render('AddApartmentBuy');
        }
        if ($rubrik === 'vermieten' && $objekttyp === 'apartment') {
            $this->set('aid', $post['Apartmentrent']['id']);
            $this->render('AddApartmentRent');
        }
        if ($rubrik === 'verkaufen' && $objekttyp === 'house') {
            $this->set('aid', $post['Housebuy']['id']);

            $this->render('AddHouseBuy');
        }
        if ($rubrik === 'vermieten' && $objekttyp === 'house') {
            $this->set('aid', $post['Houserent']['id']);

            $this->render('AddHouseRent');
        }
        if ($rubrik === 'vermieten' && $objekttyp === 'livingSite') {
            $this->set('aid', $post['Livingbuysite']['id']);

            $this->render('AddLivingRentSite');
        }
        if ($rubrik === 'verkaufen' && $objekttyp === 'livingSite') {
            $this->set('aid', $post['Livingrentsite']['id']);

            $this->render('AddLivingBuySite');
        }
        if ($rubrik === 'vermieten' && $objekttyp === 'garage') {
            $this->set('aid', $post['Garagerent']['id']);
            $this->render('AddGarageRent');
        }
        if ($rubrik === 'verkaufen' && $objekttyp === 'garage') {
            $this->set('aid', $post['Garagebuy']['id']);
            $this->render('AddGarageBuy');
        }
        if ($objekttyp === 'flatShareRoom') {
            $this->set('aid', $post['Flatshareroom']['id']);
            $this->render('AddFlatShareRoom');
        }
        if ($objekttyp === 'office') {
            $this->set('aid', $post['Office']['id']);
            $this->render('AddOffice');
        }
        if ($objekttyp === 'store') {
            $this->set('aid', $post['Store']['id']);
            $this->render('AddStore');
        }
        if ($objekttyp === 'gastronomy') {
            $this->set('aid', $post['Gastronomy']['id']);
            $this->render('AddGastronomy');
        }
        if ($objekttyp === 'industry') {
            $this->set('aid', $post['Industry']['id']);
            $this->render('AddIndustry');
        }
        if ($objekttyp === 'tradesite') {
            $this->set('aid', $post['Tradesite']['id']);
            $this->render('AddTradesite');

        }  if ($objekttyp === 'specialPurpose') {
        $this->set('aid', $post['Specialpurpose']['id']);
        $this->render('AddSpecialPurpose');
    }
        if ( $objekttyp === 'investment') {
            $this->set('aid', $post['Garagebuy']['id']);
            $this->render('AddInvestment');

        }
        if ($objekttyp === 'houseType') {
            $this->set('aid', $post['houseType']['id']);
            $this->render('AddHouseType');

        }
        if ($objekttyp === 'compulsoryAuction') {
            $this->set('aid', $post['Garagebuy']['id']);
            $this->render('AddCompulsoryAuction');

        }
        if ($objekttyp === 'assistedLiving') {
            $this->set('aid', $post['assistedLiving']['id']);
            $this->render('AddAssistedLiving');

        }
        if ($objekttyp === 'seniorCare') {
            $this->set('aid', $post['Seniorcare']['id']);
            $this->render('AddSeniorCare');

        }
        if ($objekttyp === 'shortTermAccomodation') {
            $this->set('aid', $post['Shorttermaccomodation']['id']);
            $this->render('AddShortTermAccomodation');

        }


        if ($this->request->is(array('post', 'put'))) {
            $this->Post->id = $id;
//            $this->Post->
            $this->request->data['Post']['id'] = $id;
//            debug($this->request->data);

            if ($this->Post->saveAll($this->request->data)) {
                $this->Session->setFlash(
                    __('Objektdaten wurden erfolgreich gespeichert.'),
                    'alert',
                    array( 'plugin' => 'BoostCake',
                        'class' => 'alert-success')
                );
                return $this->redirect(array('action' => 'jquery', $this->Post->id));
            }
            $this->Session->setFlash(
                __('Objekt konnte nicht gespeichert werden.'),
                'alert',
                array( 'plugin' => 'BoostCake',
                    'class' => 'alert-error')
            );        }

    }

    public function jquery($postId)
    {
        session_name('CAKEPHP');
        $_SESSION['postId'] = $postId;
        $this->set('id',$postId);
//        $this->layout = 'BoostCake.bootstrap3';
        $this->layout = false;

        if ($this->request->is(array('post', 'put', 'get'))) {
//            $this->redirect(array('action' => 'view',  $postId));
            $this->Session->setFlash(
                __('Objekt konnte nicht gespeichert werden.'),
                'alert',
                array( 'plugin' => 'BoostCake',
                    'class' => 'alert-error')
            );        }
    }
    public function delete($id)
    {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Post->delete($id)) {
            $this->Session->setFlash(
                __('The post with id: %s has been deleted.', h($id))
            );
            return $this->redirect(array('action' => 'index'));
        }
    }
    public function five($postId)
    {
        $this->layout = 'carousel';

        $this->set('postId', $postId);
        $this->set('userId', $this->Auth->user('id'));
        $post = $this->Post->findById($postId);
        if ($this->request->is(array('post','put'))) {
//            $this->Post->id = $postId;
//            debug($this->request->data);
            if (!empty($this->request->data)) {
                if ($this->Post->saveAll($this->request->data)) {
                    $this->Session->setFlash(
                        __('Ihre Daten wurden erfolgreich gespeichert.'),
                        'alert',
                        array( 'plugin' => 'BoostCake',
                            'class' => 'alert-success')
                    );                    $this->redirect(array('action' => 'six', $postId));

                } else {
                    $this->Session->setFlash(
                        __('Ihre Daten konnten nicht gespeichert werden.'),
                        'alert',
                        array( 'plugin' => 'BoostCake',
                            'class' => 'alert-error')
                    );                }
            }
        }
        if(!$this->request->data){
            $this->request->data = $post;

        }

    }

    public function six($postId)
    {
        $this->layout = 'carousel';

        $post = $this->Post->findById($postId);
//        debug($post);
        $this->set('post', $post);
        $checkout = $this->Post->Checkout->findByPostId($postId);
//        debug($checkout);
        if ($this->request->is('post')) {
            $this->Post->Checkout->id = $checkout['Checkout']['id'];
            if ($this->Post->Checkout->saveField('is_active','1')) {




//                TODO hier XML Objekt erstellen und verschicken auf der immoScout

                $xmlArray = array('root' => $post);
                $xmlObject = Xml::fromArray($xmlArray); // You can use Xml::build() too
                $xmlString = $xmlObject->asXML();
                debug($xmlString);
//                $data = array(
//                    'post' => array(
//                        'id' => 1,
//                        'title' => 'Best post',
//                        'body' => ' ... '
//                    )
//                );
//                $xml = Xml::build($data,array('return' => 'domdocument'));

                $xmlString = 'What is XML?';
                $xmlArray = $post;//array('root' => array('child' => 'value'));
//                $xmlObject = Xml::fromArray($xmlArray, array('format' => 'tags')); // You can use Xml::build() too
//                $xmlString = $xmlObject->asXML();

//                $xml = Xml::build($xmlArray);

//                try {
//    $xmlObject = Xml::build($xmlString); // Here will throw a Exception
//} catch (XmlException $e) {
//    throw new InternalErrorException();
//}

//                $Email = new CakeEmail('one');
//                $toEmail = $this->Auth->user('email');
//                $data['anrede']=  $this->Auth->user('anrede');
//                $data['nachname']= $this->Auth->user('nachname');;
//                $data['Post'] = $post;
//
//                $Email->template('checkout')
//                    ->emailFormat('html')
//                    ->to($toEmail)
//                    ->subject('Ihre Immobilien-Anzeige von ImmoEasy.net: Rechnung')
//
//                    ->from('info@immoeasy.net')
//                    ->viewVars(array('content' => $data))
//                    ->send();
//
//                $this->Session->setFlash(
//                    __('Sie haben die Bestellung erfolgreich abgeschickt.'),
//                    'alert',
//                    array( 'plugin' => 'BoostCake',
//                        'class' => 'alert-success')
//                );
//                $this->redirect(array('controller' =>'posts','action' => 'index'));


            } else {
                $this->Session->setFlash(__('Unable to add your post.'));
            }

        }
    }


    // simple example
    function near_lat_lon($lat='38.113972', $lon='-85.837158') {
        $jobs = $this->Job->find('range', array(
            'conditions' => array(
                'Job.is_active' => 1, // whatever other conditions you like
            ),
            'limit' => 10,
            // following parameters are optional and can be set in the settings on the behavior
            'lat' => $lat,
            'lon' => $lon,
            'range' => 10, // look for all jobs within 10 miles, default = 20
            'range_out_till_count_is' => false,
        ));
        $this->set(compact('jobs', 'zip'));
    }

    // simple example of translating a zip to a lat/lon automatically
    function near_zip($zip='40206') {
        $jobs = $this->Post->find('range', array(
            'conditions' => array(
                'Post.zip' => $zip,
                //  'Job.is_active' => 1, whatever other conditions you like
            ),
            'limit' => 10,
        ));
        $this->set(compact('jobs', 'zip'));
    }

    // an example of automatically increasing the range until we hit a minimum number of results
    function near_zip_at_least($zip='40206', $at_least=20) {
        $jobs = $this->Job->find('range', array(
            'conditions' => array(
                'Job.zip' => $zip,
                'Job.is_active' => 1, // whatever other conditions you like
            ),
            'limit' => 10,
            // following parameters are optional and can be set in the settings on the behavior
            'range' => 20, // starting range = 20 miles
            'range_out_till_count_is' => $at_least,
            'range_out_increment' => 20, // increasing range by this increment
            'range_out_limit' => 20, // maximum tries - max range = range + (range_out_increment * range_out_limit)
            'order_by_distance' => false,
        ));
        $this->set(compact('jobs', 'zip'));
        /*
        This should return at least $at_least results, assuming they can be found.
        Basically, while count of results < $at_least
            $range = $range + $range_out_increment
        That way, you can start narrow on results and expand untill you return at lest X results
        */
    }

    // an example which sorts the results by distance
    function near_zip_sorted($zip='40206', $at_least=20) {
        $jobs = $this->Job->find('range', array(
            'conditions' => array(
                'Job.zip' => $zip,
                'Job.is_active' => 1, // whatever other conditions you like
            ),
            'limit' => 10,
            // following parameters are optional and can be set in the settings on the behavior
            'range' => 20, // starting range = 20 miles
            'range_out_till_count_is' => $at_least,
            'range_out_increment' => 20, // increasing range by this increment
            'range_out_limit' => 20, // maximum tries - max range = range + (range_out_increment * range_out_limit)
            'order_by_distance' => true, // resorts the results by distance
            'limitless' => true, // initial find doesn't have a limit, so resulst can be sorted correctly
            // ^ note: because we are incrementing our search from a small range, this shouldn't be too slow, but
            // ^ if it is, just set to an integer as the new limit, or false to disable
        ));
        $this->set(compact('jobs', 'zip'));
    }

    // and a paginate() example
    function near_zip_paginated($zip='80935') {
        $this->Paginator->settings = $this->paginate;
        $posts = $this->Paginator->paginate(array(
            'type' => 'range',
            'conditions' => array(
                'Job.zip' => $zip,
                'Job.is_active' => 1, // whatever other conditions you like
            ),
            'limit' => 10,
            // following parameters are optional and can be set in the settings on the behavior
            'range' => 20, // starting range = 20 miles
            'range_out_till_count_is' => 20, // expand search range until we have at least 20 results (note, the limit is less, so we really will only get 10)
            'range_out_increment' => 20, // increasing range by this increment
            'range_out_limit' => 20, // maximum tries - max range = range + (range_out_increment * range_out_limit)
            'order_by_distance' => true, // resorts the results by distance
            'limitless' => true, // initial find doesn't have a limit, so resulst can be sorted correctly
            // ^ note: because we are incrementing our search from a small range, this shouldn't be too slow, but
            // ^ if it is, just set to an integer as the new limit, or false to disable
        ));
        $this->paginate = array(
            'type' => 'range',
            'conditions' => array(
                'Job.zip' => $zip,
                'Job.is_active' => 1, // whatever other conditions you like
            ),
            'limit' => 10,
            // following parameters are optional and can be set in the settings on the behavior
            'range' => 20, // starting range = 20 miles
            'range_out_till_count_is' => 20, // expand search range until we have at least 20 results (note, the limit is less, so we really will only get 10)
            'range_out_increment' => 20, // increasing range by this increment
            'range_out_limit' => 20, // maximum tries - max range = range + (range_out_increment * range_out_limit)
            'order_by_distance' => true, // resorts the results by distance
            'limitless' => true, // initial find doesn't have a limit, so resulst can be sorted correctly
            // ^ note: because we are incrementing our search from a small range, this shouldn't be too slow, but
            // ^ if it is, just set to an integer as the new limit, or false to disable
        );
        $jobs = $this->paginate('Job');
        $this->set(compact('posts', 'zip'));
    }

    public function search_adv()
    {
        $this->set('title_for_layout', 'Immobilien suchen');

        $this->layout = 'carousel';


        if ($this->request->is('post')) {
            debug($this->request->data);

            if (!empty($this->request->data)) {
                $this->redirect(array('action' => 'search_result', '?' =>$this->request->data));
            }
        }
    }

    public function search_result()
    {
        $this->layout = 'carousel';

//        $this->set('title_for_layout', 'Immobilien Suchergebnisse');

//        $this->layout = 'carousel';
        $lat = $this->params['url']['Post']['lat'];
        $lng = $this->params['url']['Post']['lng'];
        $rubrik = $this->params['url']['Post']['rubrik'];
        $objektart= $this->params['url']['Post']['objektart'];
        $objekttyp= $this->params['url']['Post']['objekttyp'];
        $preis_von= $this->params['url']['Post']['preis_von'];
        $preis_bis= $this->params['url']['Post']['preis_bis'];
        $zimmer_von = $this->params['url']['Post']['zimmer_von'];
        $zimmer_bis = $this->params['url']['Post']['zimmer_bis'];
        $flaeche_von = $this->params['url']['Post']['flaeche_von'];
        $flaeche_bis = $this->params['url']['Post']['flaeche_bis'];

        if(empty($preis_von) && empty($preis_bis)){


        }
        $conditions = array(
            'Post.isActive'=> '1',
            'Post.rubrik' => $rubrik,
            'Post.objektart' => $objektart,
            'Post.objekttyp' => $objekttyp,


        );
//        array(
//            'Post.baseRent BETWEEN ? AND ?' => array($preis_von,$preis_bis),
//            'OR' => array(
//                'Post.baseRent' => 0,
//                'Post.baseRent IS NULL'
//            ),
//            'Post.numberOfRooms BETWEEN ? AND ?' => array($zimmer_von,$zimmer_bis),
//            'Post.livingSpace BETWEEN ? AND ?' => array($flaeche_von,$flaeche_bis),
//
////                'Post.numberOfBedRooms BETWEEN ? AND ?' => array(1,10),
//
////
//            'Post.rubrik' => $rubrik,
//            'Post.objektart' => $objektart,
//            'Post.objekttyp' => $objekttyp,
//
//
//        )
//        $this->paginate = array(
//            'type' => 'range',
//            'conditions' => array(
////                'Job.zip' => $zip,
////                'Job.is_active' => 1, // whatever other conditions you like
//            ),
//            'limit' => 10,
//            'lat' => $lat,
//            'lon' => $lng,
//            // following parameters are optional and can be set in the settings on the behavior
//            'range' => 20, // starting range = 20 miles
//            'range_out_till_count_is' => false, // expand search range until we have at least 20 results (note, the limit is less, so we really will only get 10)
//            'range_out_increment' => 20, // increasing range by this increment
//            'range_out_limit' => 20, // maximum tries - max range = range + (range_out_increment * range_out_limit)
//            'order_by_distance' => true, // resorts the results by distance
//            'limitless' => true, // initial find doesn't have a limit, so resulst can be sorted correctly
//            // ^ note: because we are incrementing our search from a small range, this shouldn't be too slow, but
//            // ^ if it is, just set to an integer as the new limit, or false to disable
//        );
//        $posts = $this->paginate('Post');

//        $this->Paginator->settings = $this->paginate;

          $this->Paginator->settings=array(
              'contain' => array('File'),
            'type' => 'range',
            'conditions' => $conditions,
            'limit' => 10,
            // following parameters are optional and can be set in the settings on the behavior
            'lat' => $lat,
            'lon' => $lng,
            'range' => 100, // look for all jobs within 10 miles, default = 20
            'range_out_till_count_is' => false,
            'range_out_increment' => 20, // increasing range by this increment
            'range_out_limit' => 20, // maximum tries - max range = range + (range_out_increment * range_out_limit)
            'order_by_distance' => true, // resorts the results by distance
            'limitless' => true, // initial find doesn't have a limit, so resulst can be sorted correctly
        );
//        $this->Post->recursive = -1;
//        , array('contain' =>  array('Apartmentbuy','File')
        $posts = $this->Paginator->paginate('Post');

//        $this->paginate['Post'] = array(
//            'contain' => array('File'),
//            'conditions' => 'Post.is_Active= "1"'
//        );
//        $posts = $this->paginate('Post');

//        $posts= $this->Paginator->paginate('Post', array('contain' => array('Post', 'File'),
//        'conditions' => array('Post.isActive' => 1)
//
//        ));

        $this->set('posts', $posts);
//        debug($posts);
//        $conditions = array("Post.rubrik" =>  $rubrik , "Post.city" => $city);
//// Example usage with a model:
//        $results=$this->Post->find('all', array('conditions' => $conditions));
//
        if ($this->request->is('post','put','get')) {

            if (!empty($this->request->data)) {


//                    $this->Session->setFlash(__('Your post has been saved.'));

            }
        }
    }
}