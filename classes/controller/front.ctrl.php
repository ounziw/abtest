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

use Nos\Controller_Front_Application;

use View;

class Controller_Front extends Controller_Front_Application
{

    protected $enhancer_args = array();

    public function action_main($enhancer_args = array())
    {
        $this->main_controller->disableCaching();

        $abte_id = $enhancer_args['abte_id'];
        $item = \ABTEST\Model_Abtest::find($abte_id);

        // when link is clicked
        $page_id = $enhancer_args['confirmation_page_id'];
        if (\Input::post('_go') == 'abtest' && !empty($page_id)) {
            if (ctype_alpha(\Session::get('abtest'.$abte_id))) {
                // add conversion count
                $num = 'abte_conversion'.\Session::get('abtest'.$abte_id);
                $item->$num++;
                $item->save();
            }
            $page = \Nos\Page\Model_Page::find($page_id);
            if (!empty($page)) {
                \Response::redirect($page->url());
            }
            return $num;
        }

        // select a value and save into session
        $ab = array('a','b');
        $rand_key = array_rand($ab);
        $abdata = $ab[$rand_key];
        \Session::set('abtest'.$abte_id, $abdata);

        // add view count
        $abte_view = 'abte_int' . $abdata;
        $item->$abte_view++;
        $item->save();

        // create link img/txt
        $img = 'img' . $abdata;
        $text = 'text' . $abdata;
        $textdata = $item->{$text};
        $thumbnail = $item->medias->{$img}->get_public_path_resized(400, 300);

        // link format
        $format = '<form method="post"><input type="hidden" name="_go" value="abtest"><input type="image" src="%s" alt="%s"></form>';
        $data = sprintf($format,$thumbnail,$textdata);
        return $data ;
    }

}
