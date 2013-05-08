<?php
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
            'title' => __('テキストA'),
        ),
        'abte_textb' => array(
            'title' => __('テキストB'),
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