<?
defined('KOOWA') or die; ?>

<?= @helper('behavior.mootools'); ?>
<?= @helper('behavior.koowa'); ?>

<?= @helper('behavior.keepalive'); ?>
<?= @helper('behavior.validator'); ?>
<form action="" method="post" class="-koowa-form" data-toolbar=".toolbar-list">
    <div class="com_docman boxed" style="padding: 20px;">
        <div class="row-fluid">
            <div class="span6">
                <fieldset class="form-horizontal">
                    <legend><?= @text('Details') ?></legend>
                    <div class="control-group">
                        <label class="control-label" for="name"><?= @text('Title') ?></label>
                        <div class="controls">
                            <input class="required" type="text" name="name" size="32" maxlength="255" value="<?= $conference->name ?>" />
                        </div>
                    </div>
                </fieldset>
                <tr>
                    <td width="40%" class="paramlist_key">
                        <label for="publish_up"><?= @text('Publish on') ?></label>
                    </td>
                    <td class="paramlist_value">
                        <?= @helper('behavior.calendar', array('date' => $conference->begindate, 'name' => 'begindate')); ?>
                    </td>
                </tr>
            </div>
        </div>
    </div>
</form>