<?php

class Garagerent extends AppModel {


    public $belongsTo = array(
        'Post' => array(
            'foreignKey' => 'post_id',
        )
    );

//    public $validate = array(
//        'rubrik' => array(
//            'rule' => array('multiple', array(
//                'min' => 1
//            )),
//            'message' => 'Bitte wählen Sie mind. eine Option aus'
//        ),
//        'title' => array(
//
//            'titleRule-2' => array(
//                'rule'    => array('minLength', 5),
//                'message' => 'Minimum 5 Zeichen'
//            ),
//            'titleRule-3' => array(
//                'rule'    => array('maxLength', 100),
//                'message' => 'Maximum 100 Zeichen'
//            )
//
//        ),
//
//        'price' => array(
//            'rule'    => array('money', 'right'),
//            'message' => 'Bitte geben Sie einen validen monetären betrag ein.'
//        ),
//        'baseRent' => array(
//            'rule'    => array('money', 'right'),
//            'message' => 'Bitte geben Sie einen validen monetären betrag ein.'
//        ),
//
//        'street' => array(
//            'streetRule-2' => array(
//                'rule'    => array('minLength', 2),
//                'message' => 'Minimum 2 Zeichen'
//            ),
//            'streetRule-3' => array(
//                'rule'    => array('maxLength', 100),
//                'message' => 'Maximum 100 Zeichen'
//            )
//        ),
//        'houseNumber' => array(
//            'houseNumberRule-1' => array(
//                'rule'    => 'numeric',
//                'message' => 'Bitte nur Nummern eingeben',
//            ),
//            'houseNumberRule-2' => array(
//                'rule'    => array('minLength', 1),
//                'message' => 'Minimum 5 Zeichen'
//            ),
//               'houseNumberRule-3' => array(
//                'rule'    => array('maxLength', 10),
//                'message' => 'Maximum 10 Zeichen'
//            )
//        ),
//
//        'postcode' => array(
//            'rule' => array('postal', null, 'de'),
//            'message' => 'Bitte geben Sie eine gültige Postleitzahl, mit genau 5 Zeichen ein'
//        ),
//
//
//        'city' => array(
//            'cityRule-2' => array(
//                'rule'    => array('minLength', 2),
//                'message' => 'Minimum 2 Zeichen'
//            ),
//            'cityRule-3' => array(
//                'rule'    => array('maxLength', 50),
//                'message' => 'Maximum 50 Zeichen'
//            )
//        )
//    );

//    public function isOwnedBy($post, $user) {
//        return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
//    }


}
