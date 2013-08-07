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
                <td class="key"><label><?= @text('Academic Title'); ?></label></td>
                <td>
                    <input class="" type="text" name="academic_title" size="32" maxlength="255" value="<?= $user->academic_title ?>" />
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('First Name'); ?></label></td>
                <td>
                    <input class="required" type="text" name="firstname" size="32" maxlength="255" value="<?= $user->firstname ?>" />
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('Last Name'); ?></label></td>
                <td>
                    <input class="required" type="text" name="lastname" size="32" maxlength="255" value="<?= $user->lastname ?>" />
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('Middle Initial'); ?></label></td>
                <td>
                    <input class="" type="text" name="middle_initial" size="32" maxlength="255" value="<?= $user->middle_initial ?>" />
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('Organization'); ?></label></td>
                <td>
                    <input class="required" type="text" name="organization" size="32" maxlength="255" value="<?= $user->organization ?>" />
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('Street'); ?></label></td>
                <td>
                    <input class="required" type="text" name="street" size="32" maxlength="255" value="<?= $user->street ?>" />
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('ZIP Code'); ?></label></td>
                <td>
                    <input class="required" type="text" name="zipcode" size="32" maxlength="255" value="<?= $user->zipcode ?>" />
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('City'); ?></label></td>
                <td>
                    <input class="required" type="text" name="city" size="32" maxlength="255" value="<?= $user->city ?>" />
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('State/Province'); ?></label></td>
                <td>
                    <input class="" type="text" name="province" size="32" maxlength="255" value="<?= $user->province ?>" />
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('Country'); ?></label></td>
                <td>
                    <input class="required" type="text" name="country" size="32" maxlength="255" value="<?= $user->country ?>" />
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('Telephone'); ?></label></td>
                <td>
                    <input class="required" type="text" name="phone" size="32" maxlength="255" value="<?= $user->phone ?>" />
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('Fax'); ?></label></td>
                <td>
                    <input class="" type="text" name="fax" size="32" maxlength="255" value="<?= $user->fax ?>" />
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('E-mail'); ?></label></td>
                <td>
                    <input class="required" type="text" name="email" size="32" maxlength="255" value="<?= $user->email ?>" />
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('Role'); ?></label></td>
                <td>
                    <input class="required" type="text" name="role" size="32" maxlength="255" value="<?= $user->role ?>" />
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('Status'); ?></label></td>
                <td>
                    <?= @helper('select.booleanlist', array(
                        'name' => 'enabled',
                        'selected' => $user->enabled,
                        'true' => 'Published',
                        'false' => 'Unpublished'
                    )); ?>
                </td>
            </tr>
        </table>
    </fieldset>
</form>