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
defined('KOOWA') or die( 'Restricted access' );?>

<?= @helper('behavior.mootools'); ?>
<?= @helper('behavior.koowa'); ?>

<style src="media://com_conferences/css/conferences.css" />


<?= @template('submission_toolbar'); ?>

<h3><?= @text('View or edit your submitted abstract(s)') ?></h3>

<table style="clear:both;">
    <thead>
    <tr>
        <th>
            <?= @helper('grid.sort', array('column' => 'title', 'title' => 'Title')); ?>
        </th>
        <th width="15%">
            <?= @helper('grid.sort', array('column' => 'conferences_topic_id', 'title' => 'Topic')); ?>
        </th>
        <th width="10%">
            <?= @helper('grid.sort', array('column' => 'presentation_type', 'title' => 'Presentation')); ?>
        </th>
        <th width="10%">
            <?= @helper('grid.sort', array('column' => 'status', 'title' => 'Status')); ?>
        </th>
        <th width="20%">
            <?= @text('Email the Abstract'); ?>
        </th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <td colspan="5">
            <?= @helper('paginator.pagination', array('total' => $total)) ?>
        </td>
    </tr>
    </tfoot>
    <tbody>

    <? foreach ($submissions as $submission) : ?>
        <tr>
            <td align="left">
                <a href="<?= @route('view=submitter&layout=form&id=' . $submission->id); ?>">
                    <?= $submission->title ?>
                </a>
            </td>
            <td align="left">
                <?= $submission->topic_title ?>
            </td>
            <td align="left">
                <?= $submission->presentation_type ?>
            </td>
            <td align="left">
                <?= $submission->status ?>
            </td>
            <td align="left">
                <a href="#">
                    <?= @text('Email this Abstract') ?>
            </td>
        </tr>

    <? endforeach; ?>

    <? if (!count($submissions)) : ?>
        <tr>
            <td colspan="5" align="center">
                <?= @text("You have yet to submit an abstract"); ?>
            </td>
        </tr>
    <? endif; ?>
    </tbody>
</table>
