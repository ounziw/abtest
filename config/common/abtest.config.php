<?php

Nos\I18n::current_dictionary('ab_test::common');


return array(
    'controller' => 'abtest/crud',
    'data_mapping' => array(
        'abte_title' => array(
            'title' => __('title'),
        ),
        'thumbnail' => array(
            'value' => function ($item) {
                foreach ($item->medias as $media) {
                    return $media->get_public_path_resized(64, 64);
                }
                return false;
            },
        ),
        'thumbnailAlternate' => array(
            'value' => function ($item) {
                return 'static/apps/ab_test/img/64/icon.png';
            }
        ),
        'abte_texta' => array(
            'title' => __('Text') . __('A'),
        ),
        'abte_numa' => array(
            'title' => __('A') . __('Clicks / Views'),
            'value' => function ($item) {
                return $item->conversiona . '/' . $item->inta;
            }
        ),
        'abte_percenta' => array(
            'title' => __('A') . __('conversion'),
            'value' => function ($item) {
                if ($item->inta >= 1) {
                    $ratio = 100 * $item->conversiona / $item->inta;
                    return round($ratio,2) ;
                } else {
                    return 0;
                }
            }
        ),
        'abte_textb' => array(
            'title' => __('Text') . __('B'),
        ),
        'abte_numb' => array(
            'title' => __('B') . __('Clicks / Views'),
            'value' => function ($item) {
                return $item->conversionb . '/' . $item->intb;
            }
        ),
        'abte_percentb' => array(
            'title' => __('B') . __('conversion'),
            'value' => function ($item) {
                if ($item->intb >= 1) {
                    $ratio = 100 * $item->conversionb / $item->intb;
                    return round($ratio,2) ;
                } else {
                    return 0;
                }
            }
        ),
    ),
    /*
    'i18n' => array(
        // Crud
        'notification item added' => __('Done! The item has been added.'),
        'notification item saved' => __('OK, all changes are saved.'),
        'notification item deleted' => __('The item has been deleted.'),

        // General errors
        'notification item does not exist anymore' => __('This item doesn’t exist any more. It has been deleted.'),
        'notification item not found' => __('We cannot find this item.'),
        'deleted popup title' => __('Bye bye'),
        'deleted popup close' => __('Close tab'),

        // see novius-os/framework/config/i18n_common.config.php
    ),
    */
    /*
    'actions' => array(
        'delete' => array(
            'action' => array( // ce qu'on envoi à nosAction
                'action' => 'confirmationDialog',
                    'dialog' => array(
                    'contentUrl' => '{{controller_base_url}}delete/{{_id}}',
                    'title' => 'Delete',
                ),
            ),
            'label' => __('Delete'),
            'primary' => true,
            'icon' => 'trash',
            'red' => true,
            'targets' => array(
                'grid' => true,
                'toolbar-edit' => true,
            ),
            'disabled' => function($item) {
                return false;
            },
            'visible' => function($params) {
                return !isset($params['item']) || !$params['item']->is_new();
            },
        ),
    )
    */
    /*
    'actions' => array(
        'list' => array(
            'delete' => array(
                'action' => array( // ce qu'on envoi à nosAction
                    'action' => 'confirmationDialog',
                    'dialog' => array(
                        'contentUrl' => '{{controller_base_url}}delete/{{_id}}',
                        'title' => 'Delete',
                    ),
                ),
                'label' => __('Delete'),
                'primary' => true,
                'icon' => 'trash',
                'red' => true,
                'targets' => array(
                'grid' => true,
                    'toolbar-edit' => true,
                ),
                'disabled' => function($item) {
                        return false;
                },
                'visible' => function($params) {
                        return !isset($params['item']) || !$params['item']->is_new();
                },
            ),
        ),
        'order' => array(
            'delete',
            // others
        ),
    )
    */
);