<?php
/**
 * Created by JetBrains PhpStorm.
 * User: peterraeves
 * Date: 12/08/13
 * Time: 17:13
 * To change this template use File | Settings | File Templates.
 */

defined('KOOWA') or die; ?>

<?= @helper('behavior.jquery'); ?>
<?= @helper('bootstrap.load'); ?>
<?= @helper('behavior.modal', array('selector' => 'a.thumbnail', 'handler' => 'image')); ?>

<? if ($params->track_downloads): ?>
    <?= @helper('behavior.download_tracker'); ?>
<? endif; ?>

<? // Page Heading ?>
<? if ($params->get('show_page_heading')): ?>
    <h1 class="docman_page_heading">
        <?= $params->get('page_heading'); ?>
    </h1>
<? endif; ?>

<? // Document ?>
<?= @template('com://site/docman.view.document.document', array(
    'document' => $document,
    'params' => $params,
    'heading' => '1',
    'link' => 0
)) ?>