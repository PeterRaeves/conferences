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
                    <input class="required" type="text" name="title" size="32" maxlength="255" value="<?= $submission->title ?>" />
                </td>
            </tr><tr>
                <td class="key"><label><?= @text('Average Rating'); ?></label></td>
                <td>
                    <?= $submission->average_rating ?>
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('Abstract'); ?></label></td>
                <td>
                    <?= @editor(array(
                        'name' => 'submission_text',
                        'id'   => 'submission_text',
                        'width' => '100%',
                        'height' => '341',
                        'cols' => '100',
                        'rows' => '20'
                    )); ?>
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('Topic'); ?></label></td>
                <td>
                    <?=@helper('com://admin/conferences.template.helper.listbox.topics', array('selected' => $submission->conferences_topic_id)); ?>
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('Presentation'); ?></label></td>
                <td>
                    <?=@helper('com://admin/conferences.template.helper.listbox.presentation_type', array('selected' => $submission->presentation_type)); ?>
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('Conflict of Interest'); ?></label></td>
                <td>
                    <?= $submission->conflict_interest ?>
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('Contact'); ?></label></td>
                <td>
                    <?=@helper('com://admin/conferences.template.helper.listbox.users', array('selected' => $submission->conferences_user_id)); ?>
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('Authors'); ?></label></td>
                <td>
                    <?= "Here comes a list of authors" ?>
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('Status'); ?></label></td>
                <td>
                    <?=@helper('com://admin/conferences.template.helper.listbox.submission_status', array('selected' => $submission->submission_status)); ?>
                </td>
            </tr>


            <tr>
                <td class="key"><label><?= @text('Status'); ?></label></td>
                <td>
                    <?= @helper('select.booleanlist', array(
                        'name' => 'enabled',
                        'selected' => $submission->enabled,
                        'true' => 'Published',
                        'false' => 'Unpublished'
                    )); ?>
                </td>
            </tr>
        </table>
    </fieldset>
</form>