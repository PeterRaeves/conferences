<? defined('KOOWA') or die('Restricted access'); ?>

<?= @helper('behavior.mootools'); ?>
<?= @helper('behavior.koowa'); ?>

<?= @helper('behavior.keepalive'); ?>
<?= @helper('behavior.validator'); ?>

<form action="" method="post" class="-koowa-form" id="edit-form">
    <fieldset>
        <legend><?= @text('Details'); ?></legend>
        <table class="admintable">
            <tr>
                <td class="key"><label><?= @text('Title'); ?></label></td>
                <td>
                    <input class="required" type="text" name="title" size="32" maxlength="255" value="<?= $topic->title ?>" />
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('Description'); ?></label></td>
                <td>
                    <?= @editor(array(
                        'name' => 'description',
                        'id'   => 'description',
                        'width' => '100%',
                        'height' => '341',
                        'cols' => '100',
                        'rows' => '20'
                    )); ?>
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('Status'); ?></label></td>
                <td>
                    <?= @helper('select.booleanlist', array(
                        'name' => 'enabled',
                        'selected' => $topic->enabled,
                        'true' => 'Published',
                        'false' => 'Unpublished'
                    )); ?>
                </td>
            </tr>
        </table>
    </fieldset>
</form>