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
        <a class="<?= is_null($state->enabled) && is_null($state->status) ? 'active' : ''; ?>"
           href="<?= @route('&enabled=&status=') ?>">
            <?= @text('All') ?>
        </a>
    </div>
    <div class="scopebar-group">
        <a class="<?= $state->enabled === 1 ? 'active' : ''; ?>"
           href="<?= @route($state->enabled === 1 ? '&enabled=&status=' : '&enabled=1&status=') ?>">
            <?= @text('Published') ?>
        </a>
        <a class="<?= $state->enabled === 0 ? 'active' : ''; ?>"
           href="<?= @route($state->enabled === 0 ? '&enabled=&status=' : '&enabled=0&status=') ?>">
            <?= @text('Unpublished') ?>
        </a>
    </div>
    <div class="scopebar-group">
        <a class="<?= $state->status === 'approved' ? 'active' : ''; ?>"
           href="<?= @route($state->status === 'approved' ? '&status=' : '&status=approved') ?>">
            <?= @text('Approved') ?>
        </a>
        <a class="<?= $state->status === 'pending' ? 'active' : ''; ?>"
           href="<?= @route($state->status === 'pending' ? '&status=' : '&status=pending') ?>">
            <?= @text('Pending') ?>
        </a>
        <a class="<?= $state->status === 'rejected' ? 'active' : ''; ?>"
           href="<?= @route($state->status === 'rejected' ? '&status=' : '&status=rejected') ?>">
            <?= @text('Rejected') ?>
        </a>
    </div>
    <div class="scopebar-group last">
        <?= @helper('listbox.status') ?>
    </div>

    <div class="scopebar-search">
        <?= @helper('grid.search') ?>
    </div>
</div>