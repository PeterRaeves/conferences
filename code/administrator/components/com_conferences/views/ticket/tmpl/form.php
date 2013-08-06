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
                    <input class="required" type="text" name="title" size="32" maxlength="255" value="<?= $ticket->title ?>" />
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('Regular Fee'); ?></label></td>
                <td>
                    <input class="required" type="text" name="price" size="32" maxlength="255" value="<?= $ticket->price ?>" />
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('Earlybird Fee'); ?></label></td>
                <td>
                    <input class="required" type="text" name="price_earlybird" size="32" maxlength="255" value="<?= $ticket->price_earlybird ?>" />
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('Earlybird until'); ?></label></td>
                <td>
                    <?= @helper('behavior.calendar', array(
                        'name' => 'earlybird_ends_on',
                        'id' => 'earlybird_ends_on',
                        'value' => $ticket->earlybird_ends_on,
                        'format' => '%Y-%m-%d %H:%M:%S',
                        'filter' => 'user_utc'
                    ))?>
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('Registration before'); ?></label></td>
                <td>
                    <?= @helper('behavior.calendar', array(
                        'name' => 'registration_ends_on',
                        'id' => 'registration_ends_on',
                        'value' => $ticket->registration_ends_on,
                        'format' => '%Y-%m-%d %H:%M:%S',
                        'filter' => 'user_utc'
                    ))?>
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('Status'); ?></label></td>
                <td>
                    <?= @helper('select.booleanlist', array(
                        'name' => 'enabled',
                        'selected' => $ticket->enabled,
                        'true' => 'Published',
                        'false' => 'Unpublished'
                    )); ?>
                </td>
            </tr>
        </table>
    </fieldset>
</form>