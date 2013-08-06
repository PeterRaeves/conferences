<?php
/**
 * @version     $Id$
 * @category	Nooku
 * @package     Nooku_Components
 * @subpackage  Debug
 * @copyright   Copyright (C) 2011 - 2012 Timble CVBA and Contributors. (http://www.timble.net).
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.nooku.org
 */
defined('KOOWA') or die( 'Restricted access' ); ?>

<?= @helper('behavior.mootools'); ?>
<?= @helper('behavior.koowa'); ?>

<form action="" method="get" class="-koowa-grid">
    <table class="adminlist"  style="clear: both;">
        <thead>
        <tr>
            <th width="10">

            </th>
            <th>
                <?= @helper('grid.sort', array('column' => 'title')); ?>
            </th>
            <th width="10%">
                <?= @helper('grid.sort', array('column' => 'price', 'title' => 'regular fee')); ?>
            </th>
            <th width="10%">
                <?= @helper('grid.sort', array('column' => 'price_earlybird', 'title' => 'earlybird fee')); ?>
            </th>
            <th width="10%">
                <?= @helper('grid.sort', array('column' => 'earlybird_ends_on', 'title' => 'earlybird until')); ?>
            </th>
            <th width="10%">
                <?= @helper('grid.sort', array('column' => 'registration_ends_on', 'title' => 'register before')); ?>
            </th>
            <th width="5%">
                <?= @helper('grid.sort', array('column' => 'enabled', 'title' => 'status')); ?>
            </th>
            <th width="5%">
                <?= @helper('grid.sort', array('column' => 'conference_ticket_id', 'title' => 'id')); ?>
            </th>
        </tr>
        <tr>
            <td><?= @helper('grid.checkall'); ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <td colspan="8">
                <?= @helper('paginator.pagination', array('total' => $total)) ?>
            </td>
        </tr>
        </tfoot>
        <tbody>

        <? foreach ($tickets as $ticket) : ?>
            <tr>
                <td align="center">
                    <?= @helper('grid.checkbox', array('row' => $ticket))?>
                </td>

                <td align="left">
                    <a href="<?= @route('view=ticket&amp;id='.$ticket->id); ?>">
                        <?= $ticket->title ?>
                    </a>
                </td>
                <td align="left">
                    <?= $ticket->price ?>
                </td>
                <td align="left">
                    <?= $ticket->price_earlybird ?>
                </td>
                <td align="left">
                    <?= $ticket->earlybird_ends_on ?>
                </td>
                <td align="left">
                    <?= $ticket->registration_ends_on ?>
                </td>
                <td align="left">
                    <?= @helper('grid.enable', array('row' => $ticket)) ?>
                </td>
                <td align="left">
                    <?= $ticket->id ?>
                </td>
            </tr>

        <? endforeach; ?>

        <? if (!count($tickets)) : ?>
            <tr>
                <td colspan="8" align="center">
                    <?= @text('No tickets found'); ?>
                </td>
            </tr>
        <? endif; ?>
        </tbody>
    </table>
</form>