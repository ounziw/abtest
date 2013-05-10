<?php

namespace ABTEST;

class Model_Abtest extends \Nos\Orm\Model
{

    protected static $_primary_key = array('abte_id');
    protected static $_table_name = 'abtests';

    protected static $_properties = array(
        'abte_id',
        'abte_title',
        'abte_texta',
        'abte_textb',
        'abte_inta',
        'abte_intb',
        'abte_conversiona',
        'abte_conversionb',
        'abte_created_at',
        'abte_updated_at',
    );

    protected static $_title_property = 'abte_title';

    protected static $_observers = array(
        'Orm\Observer_CreatedAt' => array(
            'events' => array('before_insert'),
            'mysql_timestamp' => true,
            'property'=>'abte_created_at'
        ),
        'Orm\Observer_UpdatedAt' => array(
            'events' => array('before_save'),
            'mysql_timestamp' => true,
            'property'=>'abte_updated_at'
        )
    );

    protected static $_behaviours = array(
        /*
        'Nos\Orm_Behaviour_Publishable' => array(
            'publication_state_property' => 'abte__publication_status',
            'publication_start_property' => 'abte__publication_start',
            'publication_endproperty' => 'abte__publication_end',
        ),
        */
        /*
        'Nos\Orm_Behaviour_Urlenhancer' => array(
            'enhancers' => array('ab_test_abtest'),
        ),
        */
        /*
        'Nos\Orm_Behaviour_Virtualname' => array(
            'events' => array('before_save', 'after_save'),
            'virtual_name_property' => 'abte_virtual_name',
        ),
        */
        /*
        'Nos\Orm_Behaviour_Twinnable' => array(
            'events' => array('before_insert', 'after_insert', 'before_save', 'after_delete', 'change_parent'),
            'context_property'      => 'abte__context',
            'common_id_property' => 'abte__context_common_id',
            'is_main_property' => 'abte__context_is_main',
            'invariant_fields'   => array(),
        ),
        */
    );

    protected static $_belongs_to  = array(
        /*
        'key' => array( // key must be defined, relation will be loaded via $abtest->key
            'key_from' => 'abte_...', // Column on this model
            'model_to' => 'ABTEST\Model_...', // Model to be defined
            'key_to' => '...', // column on the other model
            'cascade_save' => false,
            'cascade_delete' => false,
            //'conditions' => array('where' => ...)
        ),
        */
    );
    protected static $_has_many  = array(
        /*
        'key' => array( // key must be defined, relation will be loaded via $abtest->key
            'key_from' => 'abte_...', // Column on this model
            'model_to' => 'ABTEST\Model_...', // Model to be defined
            'key_to' => '...', // column on the other model
            'cascade_save' => false,
            'cascade_delete' => false,
            //'conditions' => array('where' => ...)
        ),
        */
    );
    protected static $_many_many = array(
        /*
            'key' => array( // key must be defined, relation will be loaded via $abtest->key
                'table_through' => '...', // intermediary table must be defined
                'key_from' => 'abte_...', // Column on this model
                'key_through_from' => '...', // Column "from" on the intermediary table
                'key_through_to' => '...', // Column "to" on the intermediary table
                'key_to' => '...', // Column on the other model
                'cascade_save' => false,
                'cascade_delete' => false,
                'model_to'       => 'ABTEST\Model_...', // Model to be defined
            ),
        */
    );
}
