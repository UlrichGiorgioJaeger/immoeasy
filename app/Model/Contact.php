<?php

class Contact extends AppModel {


    public $belongsTo = array(
        'Post' => array(
            'foreignKey' => 'post_id',
        )
    );

    public $validate = array(
        'InputName' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Bitte geben Sie einen Kontaktemail ein.',
                'allowEmpty' => false,

            ),
            'required' => array(
                'rule' => array('email', true),
                'message' => 'Bitte geben Sie eine gültige E-Mail-Adresse ein.'
            ),
        ),
        'InputEmail' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Bitte geben Sie einen Kontaktemail ein.',
                'allowEmpty' => false,

            ),
            'required' => array(
                'rule' => array('email', true),
                'message' => 'Bitte geben Sie eine gültige E-Mail-Adresse ein.'
            ),
        ),
        'InputMessage' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Bitte geben Sie einen Kontaktemail ein.',
                'allowEmpty' => false,

            ),
            'required' => array(
                'rule' => array('email', true),
                'message' => 'Bitte geben Sie eine gültige E-Mail-Adresse ein.'
            ),
        ),

    );

//    public function isOwnedBy($post, $user) {
//        return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
//    }


}
