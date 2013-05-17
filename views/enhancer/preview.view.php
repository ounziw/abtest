<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

Nos\I18n::current_dictionary('ab_test::common');

?>

<div style="overflow: hidden">
    <?= $title;?>
    <table style="text-align: center">
        <tr><td></td><td><img src="<?= $imga; ?>"></td><td><img src="<?= $imgb; ?>"></td></tr>
        <tr><td><?= __('Clicks / Views');?></td><td><?= $conversiona;?> / <?= $inta;?></td><td><?= $conversionb;?> / <?= $intb;?></td></tr>
        <tr><td><?= __('conversion');?></td><td><?= $ratioa;?>%</td><td><?= $ratiob;?>%</td></tr>
        <tr><td></td><td></td></tr>
    </table>
</div>