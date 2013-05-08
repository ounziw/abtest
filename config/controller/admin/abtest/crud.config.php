<?php
return array(
    'controller_url'  => 'admin/ab_test/abtest/crud',
    'model' => 'ABTEST\Model_Abtest',
    'layout' => array(
        'large' => true,
        'save' => 'save',
        'title' => 'abte_title',
        'medias' => array(),
        'content' => array(
            'a' => array(
                'view' => 'nos::form/expander',
                'params' => array(
                    'title'   => __('A'),
                    'nomargin' => true,
                    'options' => array(
                        'allowExpand' => false,
                    ),
                    'content' => array(
                        'view' => 'nos::form/fields',
                        'params' => array(
                            'fields' => array(
                                'abte_texta',
                                'medias->imga->medil_media_id'
                            ),
                        ),
                    ),
                ),
            ),
            'b' => array(
                'view' => 'nos::form/expander',
                'params' => array(
                    'title'   => __('B'),
                    'nomargin' => true,
                    'options' => array(
                        'allowExpand' => false,
                    ),
                    'content' => array(
                        'view' => 'nos::form/fields',
                        'params' => array(
                            'fields' => array(
                                'abte_textb',
                                'medias->imgb->medil_media_id'
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'fields' => array(
        'abte__id' => array (
            'label' => 'ID: ',
            'form' => array(
                'type' => 'hidden',
            ),
            'dont_save' => true,
        ),
        'abte_title' => array(
            'label' => __('title'),
            'form' => array(
                'type' => 'text',
            ),
        ),
        'medias->imga->medil_media_id' => array(
            'label' => '',
            'renderer' => 'Nos\Media\Renderer_Media',
            'form' => array(
                'title' => __('画像A'),
            ),
        ),
        /*
        'medias->imga->medil_media_id' => array(
            'label' => '',
            'renderer' => 'Nos\Media\Renderer_Media',
            'form' => array(
                'title' => __('画像A'),
            ),
        ),
        */
        'abte_texta' => array(
            'label' => __('テキストA'),
            'form' => array(
                'type' => 'text',
            ),
        ),
        'medias->imgb->medil_media_id' => array(
            'label' => '',
            'renderer' => 'Nos\Media\Renderer_Media',
            'form' => array(
                'title' => __('画像B'),
            ),
        ),
        'abte_textb' => array(
            'label' => __('テキストB'),
            'form' => array(
                'type' => 'text',
            ),
        ),
        'save' => array(
            'label' => '',
            'form' => array(
                'type' => 'submit',
                'tag' => 'button',
                // Note to translator: This is a submit button
                'value' => __('Save'),
                'class' => 'primary',
                'data-icon' => 'check',
            ),
        ),
    )
    /* UI texts sample
    'messages' => array(
        'successfully added' => __('Item successfully added.'),
        'successfully saved' => __('Item successfully saved.'),
        'successfully deleted' => __('Item has successfully been deleted!'),
        'you are about to delete, confim' => __('You are about to delete item <span style="font-weight: bold;">":title"</span>. Are you sure you want to continue?'),
        'you are about to delete' => __('You are about to delete item <span style="font-weight: bold;">":title"</span>.'),
        'exists in multiple context' => __('This item exists in <strong>{count} contexts</strong>.'),
        'delete in the following contexts' => __('Delete this item in the following contexts:'),
        'item deleted' => __('This item has been deleted.'),
        'not found' => __('Item not found'),
        'error added in context' => __('This item cannot be added {context}.'),
        'item inexistent in context yet' => __('This item has not been added in {context} yet.'),
        'add an item in context' => __('Add a new item in {context}'),
        'delete an item' => __('Delete a item'),
    ),
    */
    /*
    Tab configuration sample
    'tab' => array(
        'iconUrl' => 'static/apps/{{application_name}}/img/16/icon.png',
        'labels' => array(
            'insert' => __('Add a item'),
            'blankSlate' => __('Translate a item'),
        ),
    ),
    */
);