<? foreach(json_decode($submission->authors) as $author) : ?>
    <input class="" type="text" name="authors[0][academic_title]" id="fld1" size="32" maxlength="255" placeholder="<?= @text('Academic Title') ?>" value="<?= $author->academic_title ?>" /><br />
    <input class="" type="text" name="authors[0][firstname]" id="fld1" size="32" maxlength="255" placeholder="<?= @text('First Name') ?>" value="<?= $author->firstname ?>" /><br />
    <input class="" type="text" name="authors[0][lastname]" id="fld1" size="32" maxlength="255" placeholder="<?= @text('Last Name') ?>" value="<?= $author->lastname ?>" /><br />
    <input class="" type="text" name="authors[0][organisation][0]" id="fld1" size="32" maxlength="255" placeholder="<?= @text('Organisation') ?>" value="<?= $author->organisation ?>" />

    <input class="" type="text" name="authors[0][street]" id="fld1" size="32" maxlength="255" placeholder="<?= @text('Street') ?>" value="<?= $author->street ?>" /><br />
    <input class="" type="text" name="authors[0][city]" id="fld1" size="32" maxlength="255" placeholder="<?= @text('City') ?>" value="<?= $author->city ?>" /><br />
    <input class="" type="text" name="authors[0][zipcode]" id="fld1" size="32" maxlength="255" placeholder="<?= @text('Zip Code') ?>" value="<?= $author->zipcode ?>" /><br />
    <input class="" type="text" name="authors[0][province]" id="fld1" size="32" maxlength="255" placeholder="<?= @text('Province') ?>" value="<?= $author->province ?>" /><br />
    <input class="" type="text" name="authors[0][country]" id="fld1" size="32" maxlength="255" placeholder="<?= @text('Country') ?>" value="<?= $author->country ?>" /><br />
    <input class="" type="text" name="authors[0][email]" id="fld1" size="32" maxlength="255" placeholder="<?= @text('Email') ?>" value="<?= $author->email ?>" /><br />
    <?= @helper('select.booleanlist', array(
        'name' => 'presenting',
        'selected' => $author->presenting,
        'true' => 'Yes',
        'false' => 'No'
    )); ?><br />
<? endforeach ?>

<input class="" type="text" name="authors[0][academic_title]" id="fld1" size="32" maxlength="255" placeholder="<?= @text('Academic Title') ?>" value="" /><br />
<input class="" type="text" name="authors[0][firstname]" id="fld1" size="32" maxlength="255" placeholder="<?= @text('First Name') ?>" value="" /><br />
<input class="" type="text" name="authors[0][lastname]" id="fld1" size="32" maxlength="255" placeholder="<?= @text('Last Name') ?>" value="" /><br />
<input class="" type="text" name="authors[0][organisation][0]" id="fld1" size="32" maxlength="255" placeholder="<?= @text('Organisation') ?>" value="" />

<input class="" type="text" name="authors[0][street]" id="fld1" size="32" maxlength="255" placeholder="<?= @text('Street') ?>" value="" /><br />
<input class="" type="text" name="authors[0][city]" id="fld1" size="32" maxlength="255" placeholder="<?= @text('City') ?>" value="" /><br />
<input class="" type="text" name="authors[0][zipcode]" id="fld1" size="32" maxlength="255" placeholder="<?= @text('Zip Code') ?>" value="" /><br />
<input class="" type="text" name="authors[0][province]" id="fld1" size="32" maxlength="255" placeholder="<?= @text('Province') ?>" value="" /><br />
<input class="" type="text" name="authors[0][country]" id="fld1" size="32" maxlength="255" placeholder="<?= @text('Country') ?>" value="" /><br />
<input class="" type="text" name="authors[0][email]" id="fld1" size="32" maxlength="255" placeholder="<?= @text('Email') ?>" value="" /><br />
