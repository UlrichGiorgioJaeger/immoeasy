<?php

class Post extends AppModel {

    public $actsAs = array(
        'Rangeable','Containable'
    );

    public $hasMany = array(
        'Checkout' =>array(
            'foreignKey' => 'post_id'

        ),
        'Contact' =>array(
            'foreignKey' => 'post_id'

        ),
        'File' =>array(
            'foreignKey' => 'post_id'

        )
    );
    public $hasOne = array(
        'Flatshareroom' => array(
            'className' => 'Flatshareroom',
            'foreignKey' => 'post_id',
            'dependent' => true

        ),
        'Investment' => array(
            'className' => 'Investment',
            'foreignKey' => 'post_id',
            'dependent' => true

        ),
        'Apartmentbuy' => array(
            'className' => 'Apartmentbuy',
            'foreignKey' => 'post_id',
            'dependent' => true

        )
    ,
        'Apartmentrent' => array(
            'className' => 'Apartmentrent',
            'foreignKey' => 'post_id',
            'dependent' => true

        )
    ,
        'Houserent' => array(
            'className' => 'Houserent',
            'foreignKey' => 'post_id',
            'dependent' => true

        )
    ,
        'Housebuy' => array(
            'className' => 'Housebuy',
            'foreignKey' => 'post_id',
            'dependent' => true

        )
    ,
        'Garagebuy' => array(
            'className' => 'Garagebuy',
            'foreignKey' => 'post_id',
            'dependent' => true

        )
    ,
        'Garagerent' => array(
            'className' => 'Garagerent',
            'foreignKey' => 'post_id',
            'dependent' => true

        ),
        'Livingbuysite' => array(
            'className' => 'Livingbuysite',
            'foreignKey' => 'post_id',
            'dependent' => true

        ),
        'Livingrentsite' => array(
            'className' => 'Livingrentsite',
            'foreignKey' => 'post_id',
            'dependent' => true

        )
    ,
        'Office' => array(
            'className' => 'Office',
            'foreignKey' => 'post_id',
            'dependent' => true

        )
    );


    public $validate = array(


        'kontaktName' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Bitte geben Sie einen Kontaktnamen ein.',
                'allowEmpty' => false,

            )
        ),
        'kontaktEmail' => array(
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
        'kontaktTel' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Bitte geben Sie einen Kontakttelefon ein.',
                'allowEmpty' => false,

            )
        ),
        'kontaktMobil' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Bitte geben Sie einen Kontaktmobilnummer ein.',
                'allowEmpty' => false,

            )
        ),
        'rubrik' => array(
            'rule' => array('multiple', array(
                'min' => 1
            )),
            'message' => 'Bitte wählen Sie mind. eine Option aus'
        ),
        'objektart' => array(
            'rule' => array('multiple', array(
                'min' => 1
            )),
            'message' => 'Bitte wählen Sie mind. eine Option aus'
        ),

        'objekttyp' => array(
            'rule' => array('multiple', array(
                'min' => 1
            )),
            'message' => 'Bitte wählen Sie mind. eine Option aus'
        ),

        'garageType' => array(
            'rule' => array('multiple', array(
                'min' => 1
            )),
            'message' => 'Bitte wählen Sie mind. eine Option aus'
        ),

        'price' => array(
            'rule'    => array('money', 'right')
        ,
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Bitte geben Sie den Preis ein.',
                'allowEmpty' => false
            ),
            'message' => 'Bitte geben Sie einen validen monetären betrag ein.'
        ),
        'baseRent' => array(
            'rule'    => array('money', 'right'),
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Bitte geben Sie die Miete ein.',
                'allowEmpty' => false
            ),
            'message' => 'Bitte geben Sie einen validen monetären betrag ein.'
        ),

        'street' => array(
            'between' => array(
                'rule' => array('between', 2, 55),
                'message' => 'Die Strasse muss zwischen 2 bis 55 Zeichen lang sein'
            ),
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Bitte geben Sie eine Strasse ein.',
                'allowEmpty' => false
            ),
        ),
        'houseNumber' => array(
            'houseNumberRule-1' => array(
                'rule'    => 'numeric',
                'message' => 'Bitte nur Nummern eingeben',
            ),
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Bitte geben Sie eine HAusnummer ein.',
                'allowEmpty' => false
            ),
        ),

        'postcode' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Bitte geben Sie eine Strasse ein.',
                'allowEmpty' => false
            ),
            'postal' => array(
                'rule' => array('postal', null, 'de'),
            'message' => 'Bitte geben Sie eine gültige Postleitzahl, mit genau 5 Zeichen ein'
            )
        ),
        'city' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Bitte geben Sie eine Stadt ein.',
                'allowEmpty' => false,

            ),
               'between' => array(
                'rule' => array('between', 2, 15),
                'message' => 'Die Stadt muss mind. 1 bis 15 Zeichen lang sein'
            ),
    ),
       'country' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Bitte geben Sie eine Stadt ein.',
                'allowEmpty' => false,

            ),
               'between' => array(
                'rule' => array('between', 2, 15),
                'message' => 'Die Stadt muss mind. 1 bis 15 Zeichen lang sein'
            ),
    )
    ,
        'plotArea' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Bitte geben Sie die Grundstücksfläche ein.',
                'allowEmpty' => false,

            ),
            'plotArea-1' => array(
                'rule'    => 'numeric',
                'message' => 'Bitte nur Zahlen eingeben',
            ),
        ),
        'livingSpace' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Bitte geben Sie hier die Wohnfläche Ihres Objektes in m² an (nur Zahlen). Die Wohnfläche umfasst den Raum, der ausschließlich zu Wohnzwecken dient.',
                'allowEmpty' => false,

            ),
            'livingSpaceRule-1' => array(
                'rule'    => 'numeric',
                'message' => 'Bitte nur Zahlen eingeben',
            ),
        ),
        'numberOfRooms' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Bitte geben Sie hier die Zimmeranzahl Ihres Objektes an (nur Zahlen).',
                'allowEmpty' => false,

            ),
            'livingSpaceRule-1' => array(
                'rule'    => 'numeric',
                'message' => 'Bitte nur Zahlen eingeben',
            ),
        ),
        'title' => array(

            'titleRule-2' => array(
                'rule'    => array('minLength', 5),
                'message' => 'Der Titel muss Minimum 5 Zeichen haben'
            ),
            'titleRule-3' => array(
                'rule'    => array('maxLength', 100),
                'message' => 'Der Titel darf Maximum 100 Zeichen haben'
            )

        ),
    );

    public function isOwnedBy($post, $user) {
        return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
    }


}
