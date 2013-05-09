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
        $abte_id = $enhancer_args['abte_id'];
        $item = \ABTEST\Model_Abtest::find($abte_id);
        $img = 'imga';
        $text = 'texta';
        $textdata = $item->{$text};
        $thumbnail = $item->medias->{$img}->get_public_path_resized(400, 300);
        $data = $textdata ."\n". $thumbnail."\n";
        return $data . "ddd";
    }

}
