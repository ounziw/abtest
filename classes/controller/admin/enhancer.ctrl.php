<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

namespace ABTEST;

class Controller_Admin_Enhancer extends \Nos\Controller_Admin_Enhancer
{

    public function action_save(array $args = null)
    {
        if (empty($args)) {
            $args = $_POST;
        }
        $abtestdata = \ABTEST\Model_Abtest::find($args['abte_id']);
        $params['title'] = $abtestdata->abte_title;
        $params['imga'] = $abtestdata->medias->imga->get_public_path_resized(200, 200);
        $params['imgb'] = $abtestdata->medias->imgb->get_public_path_resized(200, 200);
        $params['conversiona'] = $abtestdata->conversiona;
        $params['conversionb'] = $abtestdata->conversionb;
        $params['inta'] = $abtestdata->inta;
        $params['intb'] = $abtestdata->intb;
        if ($abtestdata->inta) {
            $ratio = 100 * $abtestdata->conversiona / $abtestdata->inta;
            $params['ratioa'] = round($ratio,2);
        }
        else
        {
            $params['ratioa'] =0;
        };
        if ($abtestdata->intb) {
            $ratio = 100 * $abtestdata->conversionb / $abtestdata->intb;
            $params['ratiob'] = round($ratio,2);
        }
        else
        {
            $params['ratiob'] =0;
        };

        $body = array(
            'config'  => $args,
            'preview' => \View::forge($this->config['preview']['view'], $params)->render(),
        );
        \Response::json($body);
    }
}
