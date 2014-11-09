<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class CheckoutsController extends AppController {

    public $components = array('Session','Paginator');

    public $paginate = array(
        'limit' => 5,
        'order' => array(
            'Checkout.id' => 'asc'
        )
    );
    public function isAuthorized($user)
    {
        // All registered users can add posts
        if ($this->action === 'rechnungen') {
            return true;
        }
        // The owner of a post can edit and delete it
        if (in_array($this->action, array('rechnungen_view'))) {


            $checkoutId = (int) $this->request->params['pass'][0];
            if ($this->Checkout->isOwnedBy($checkoutId, $user['id'])) {
                return true;
            }
//            if ($this->Post->Checkout->isOwnedBy($postId, $user['id'])) {
//                return true;
//            }
        }


        return parent::isAuthorized($user);
    }

    public function rechnungen()
    {
        $this->layout = 'carousel';
        $uid = $this->Auth->user('id');

        $this->Paginator->settings = $this->paginate;
        $data = $this->Paginator->paginate(
            'Checkout',
            array('Checkout.user_id =' => $uid ,
                'Checkout.is_active =' => '1' ,
            )
        );
        // similar to findAll(), but fetches paged results
        $this->set('posts', $data );
    }
    public function rechnungen_view($id = null)
    {
        $this->layout = 'carousel';
        $post = $this->Checkout->find('first', array('conditions' => array('Checkout.id' =>$id) ));
        $this->set('post', $post );
    }
}