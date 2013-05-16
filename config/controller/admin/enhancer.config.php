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
        'view' => 'ab_test::enhancer/preview',
    ),
    /*
    'preview' => array(
        'params' => array(
            'title' => function($enhancer_args) {
                $output = '';
                if (!empty($enhancer_args['abte_id'])) {
                    $abtestdata = \ABTEST\Model_Abtest::find($enhancer_args['abte_id']);
                }
                if (!empty($abtestdata->abte_title)) {
                    $output .= $abtestdata->abte_title;
                    $output .= '<br>';
                }
                if (!empty($abtestdata->medias->imga)) {
                    $output .= '<img src="' . $abtestdata->medias->imga->get_public_path_resized(100, 100) . '">';
                    $output .= $abtestdata->conversiona . '/' . $abtestdata->inta;
                    $output .= '<br>';
                }
                if (!empty($abtestdata->medias->imgb)) {
                    $output .= '<img src="' . $abtestdata->medias->imgb->get_public_path_resized(100, 100) . '">';
                    $output .= $abtestdata->conversionb . '/' . $abtestdata->intb;
                    $output .= '<br>';
                }
                return $output;
            },
        ),
    ),
    */
);
