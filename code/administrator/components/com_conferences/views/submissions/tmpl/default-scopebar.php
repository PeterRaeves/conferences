<?php

/**
 * Created by JetBrains PhpStorm.
 * User: peterraeves
 * Date: 8/08/13
 * Time: 00:22
 * To change this template use File | Settings | File Templates.
 */

defined('KOOWA') or die('Restricted access'); ?>

<div class="scopebar">
    <div class="scopebar-group">
        <a class="<?= is_null($state->enabled) && is_null($state->submission_status) ? 'active' : ''; ?>"
           href="<?= @route('&enabled=&submission_status=') ?>">
            <?= @text('All') ?>
        </a>
    </div>
    <div class="scopebar-group">
        <a class="<?= $state->enabled === 1 ? 'active' : ''; ?>"
           href="<?= @route($state->enabled === 1 ? '&enabled=' : '&enabled=1') ?>">
            <?= @text('Published') ?>
        </a>
        <a class="<?= $state->enabled === 0 ? 'active' : ''; ?>"
           href="<?= @route($state->enabled === 0 ? '&enabled=' : '&enabled=0') ?>">
            <?= @text('Unpublished') ?>
        </a>
    </div>
    <div class="scopebar-group">
        <a class="<?= $state->submission_status === 'approved' ? 'active' : ''; ?>"
           href="<?= @route($state->status === 'approved' ? '&submission_status=' : '&submission_status=approved') ?>">
            <?= @text('Approved') ?>
        </a>
        <a class="<?= $state->submission_status === 'pending' ? 'active' : ''; ?>"
           href="<?= @route($state->submission_status === 'pending' ? '&submission_status=' : '&submission_status=pending') ?>">
            <?= @text('Pending') ?>
        </a>
        <a class="<?= $state->submission_status === 'rejected' ? 'active' : ''; ?>"
           href="<?= @route($state->submission_status === 'rejected' ? '&submission_status=' : '&submission_status=rejected') ?>">
            <?= @text('Rejected') ?>
        </a>
    </div>
    <!--<div class="scopebar-group last">
            <?= @helper('listbox.access'); ?>
        </div>-->
    <div class="scopebar-search">
        <?= @helper('grid.search') ?>
    </div>
</div>