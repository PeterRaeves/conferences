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

<form action="<?= @route()?>" method="get" class="-koowa-grid">
    <table class="adminlist"  style="clear: both;">
        <thead>
        <tr>
            <th width="10">

            </th>
            <th>
                <?= @helper('grid.sort', array('column' => 'title')); ?>
            </th>
            <th width="25%">
                <?= @helper('grid.sort', array('column' => 'description')); ?>
            </th>
            <th width="25%">
                <?= @helper('grid.sort', array('column' => 'enabled', 'title' => 'status')); ?>
            </th>
            <th width="15%">
                <?= @helper('grid.sort', array('column' => 'conference_topic_id', 'title' => 'id')); ?>
            </th>
        </tr>
        <tr>
            <td><?= @helper('grid.checkall'); ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <td colspan="6">
                <?= @helper('paginator.pagination', array('total' => $total)) ?>
            </td>
        </tr>
        </tfoot>
        <tbody>

        <? foreach ($topics as $topic) : ?>
            <tr>
                <td align="center">
                    <?= @helper('grid.checkbox', array('row' => $topic))?>
                </td>

                <td align="left">
                    <a href="<?= @route('view=topic&amp;id='.$topic->id); ?>">
                        <?= $topic->title ?>
                    </a>
                </td>
                <td align="left">
                    <?= $topic->description ?>
                </td>
                <td align="left">
                    <?= @helper('grid.enable', array('row' => $topic)) ?>
                </td>
                <td align="left">
                    <?= $topic->id ?>
                </td>
             </tr>

        <? endforeach; ?>

        <? if (!count($topics)) : ?>
            <tr>
                <td colspan="6" align="center">
                    <?= @text('No topics found'); ?>
                </td>
            </tr>
        <? endif; ?>
        </tbody>
    </table>
</form>