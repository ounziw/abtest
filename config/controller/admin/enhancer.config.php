<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

//Nos\I18n::current_dictionary('noviusos_form::common');

return array(
    'popup' => array(
        'layout' => array(
            'view' => 'ab_test::enhancer/popup',
        ),
    ),
    'preview' => array(
        'params' => array(
            'title' => function($enhancer_args) {
                if (!empty($enhancer_args['abte_id'])) {
                    $abtestdata = \ABTEST\Model_Abtest::find($enhancer_args['abte_id']);
                }
                if (!empty($abtestdata->abte_title)) {
                    return $abtestdata->abte_title;
                } else {
                    return __('abtest');
                }
            },
        ),
    ),
);
