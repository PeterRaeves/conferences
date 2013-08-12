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

<style src="media://com_conferences/css/conferences.css" />

<form action="" method="get" class="-koowa-grid">
    <?= @template('default_scopebar'); ?>
    <table class="adminlist"  style="clear: both;">
        <thead>
        <tr>
            <th width="10">

            </th>
            <th>
                <?= @helper('grid.sort', array('column' => 'title', 'title' => 'Title')); ?>
            </th>
            <th width="10%">
                <?= @helper('grid.sort', array('column' => 'created_by', 'title' => 'Submitted by')); ?>
            </th>
            <th width="10%">
                <?= @helper('grid.sort', array('column' => 'conferences_topic_id', 'title' => 'Topic')); ?>
            </th>
            <th width="10%">
                <?= @helper('grid.sort', array('column' => 'presentation_type', 'title' => 'Presentation')); ?>
            </th>
            <th width="10%">
                <?= @helper('grid.sort', array('column' => 'average_rating', 'title' => 'Average Rating')); ?>
            </th>
            <th width="10%">
                <?= @helper('grid.sort', array('column' => 'status', 'title' => 'Status')); ?>
            </th>
            <th width="10%">
                <?= @helper('grid.sort', array('column' => 'created_on', 'title' => 'Created on')); ?>
            </th>
            <th width="10%">
                <?= @helper('grid.sort', array('column' => 'modified_on', 'title' => 'Modified on')); ?>
            </th>
            <th width="5%">
                <?= @helper('grid.sort', array('column' => 'enabled', 'title' => 'Published')); ?>
            </th>
            <th width="5%">
                <?= @helper('grid.sort', array('column' => 'conference_ticket_id', 'title' => 'id')); ?>
            </th>
        </tr>
        <tr>
            <td><?= @helper('grid.checkall'); ?></td>
            <td colspan="10"></td>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <td colspan="11">
                <?= @helper('paginator.pagination', array('total' => $total)) ?>
            </td>
        </tr>
        </tfoot>
        <tbody>

        <? foreach ($submissions as $submission) : ?>
            <tr>
                <td align="center">
                    <?= @helper('grid.checkbox', array('row' => $submission))?>
                </td>

                <td align="left">
                    <a href="<?= @route('view=submission&amp;id='.$submission->id); ?>">
                        <?= $submission->title ?>
                    </a>
                </td>
                <td align="left">
                    <?= $submission->created_by ?>
                </td>
                <td align="left">
                    <?= $submission->topic_title ?>
                </td>
                <td align="left">
                    <?= $submission->presentation_type ?>
                </td>
                <td align="left">
                    <?= $submission->average_rating ?>
                </td>
                <td align="left">
                    <?= $submission->status ?>
                </td>
                <td align="left">
                    <?= $submission->created_on ?>
                </td>
                <td align="left">
                    <?= $submission->modified_on ?>
                </td>
                <td align="left">
                    <?= @helper('grid.enable', array('row' => $submission)) ?>
                </td>
                <td align="left">
                    <?= $submission->id ?>
                </td>
            </tr>

        <? endforeach; ?>

        <? if (!count($submissions)) : ?>
            <tr>
                <td colspan="11" align="center">
                    <?= @text('No submissions found'); ?>
                </td>
            </tr>
        <? endif; ?>
        </tbody>
    </table>
</form>