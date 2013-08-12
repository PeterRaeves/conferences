<? defined('KOOWA') or die('Restricted access'); ?>

<?= @helper('behavior.mootools'); ?>
<?= @helper('behavior.koowa'); ?>

<?= @helper('behavior.keepalive'); ?>
<?= @helper('behavior.validator'); ?>

<?= @template('submission_toolbar'); ?>

<h3><?= @text('Submit an Abstract') ?></h3>

<form action="" method="post" class="-koowa-form" id="edit-form">
    <fieldset>
        <legend><?= @text('Details'); ?></legend>
        <table class="admintable">
            <tr>
                <td class="key"><label><?= @text('Title'); ?></label></td>
                <td>
                    <input class="required" type="text" name="title" size="32" maxlength="255" value="<?= $submission->title ?>" />
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('Topic'); ?></label></td>
                <td>
                    <?=@helper('com://admin/conferences.template.helper.listbox.topics', array('selected' => $submission->conferences_topic_id)); ?>
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('Author'); ?></label></td>
                <td>
                    <?= @template('form_authors') ?>
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('Abstract'); ?></label></td>
                <td>
                    <p>Put some clear directives here...</p>
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
                <td class="key"><label><?= @text('Presentation'); ?></label></td>
                <td>
                    <?=@helper('com://admin/conferences.template.helper.listbox.presentation_type', array('selected' => $submission->presentation_type)); ?>
                </td>
            </tr>
            <tr>
                <td class="key"><label><?= @text('Conflict of Interest'); ?></label></td>
                <td>
                    <input type="checkbox" name="no_conflict" value="1" onChange="sty();" /><span class="hasTip" title="<?= @text('I have no conflict of interest') ?>"></span><br />
                    <div id="conf_div" style="display:block;"><input placeholder="<?= @text('Specify') ?>" type="text" name="conflict_interest" value="<?= $submission->conflict_interest ?>"/></div>
                </td>
            </tr>

        </table>
    </fieldset>
</form>