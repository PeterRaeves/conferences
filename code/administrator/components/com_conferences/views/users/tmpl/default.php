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
                <?= @helper('grid.sort', array('column' => 'firstname', 'titble' => 'First Name')); ?>
            </th>
            <th width="20%">
                <?= @helper('grid.sort', array('column' => 'lastname', 'title' => 'Last Name')); ?>
            </th>
            <th width="20%">
                <?= @helper('grid.sort', array('column' => 'email', 'title' => 'E-mail')); ?>
            </th>
            <th width="20%">
                <?= @helper('grid.sort', array('column' => 'role', 'title' => 'Role')); ?>
            </th>
            <th width="10%">
                <?= @helper('grid.sort', array('column' => 'abstracts', 'title' => 'Abstracts')); ?>
            </th>
            <th width="5%">
                <?= @helper('grid.sort', array('column' => 'enabled', 'title' => 'Status')); ?>
            </th>
            <th width="5%">
                <?= @helper('grid.sort', array('column' => 'conference_user_id', 'title' => 'id')); ?>
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

        <? foreach ($users as $user) : ?>
            <tr>
                <td align="center">
                    <?= @helper('grid.checkbox', array('row' => $user))?>
                </td>

                <td align="left">
                    <a href="<?= @route('view=user&amp;id='.$user->id); ?>">
                        <?= $user->firstname ?>
                    </a>
                </td>
                <td align="left">
                    <a href="<?= @route('view=user&amp;id='.$user->id); ?>">
                        <?= $user->lastname ?>
                    </a>
                </td>
                <td align="left">
                    <?= $user->email ?>
                </td>
                <td align="left">
                    <?= $user->role ?>
                </td>
                <td align="left">
                    <? // here will come the total of abstracts submitted by this user  ?>
                    <?= $user->abstracts ?>
                </td>
                <td align="left">
                    <?= @helper('grid.enable', array('row' => $user)) ?>
                </td>
                <td align="left">
                    <?= $user->id ?>
                </td>
            </tr>

        <? endforeach; ?>

        <? if (!count($users)) : ?>
            <tr>
                <td colspan="8" align="center">
                    <?= @text('No users found'); ?>
                </td>
            </tr>
        <? endif; ?>
        </tbody>
    </table>
</form>