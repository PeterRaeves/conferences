<?
/**
 * @package     DOCman
 * @copyright   Copyright (C) 2011 - 2013 Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.joomlatools.com
 */
defined('KOOWA') or die; ?>

<?= @helper('bootstrap.load'); ?>
<?= @helper('behavior.mootools'); ?>
<?= @helper('behavior.jquery'); ?>
<?= @helper('behavior.koowa'); ?>

<!--
<script src="media://com_docman/js/toolbar.js" />
-->

<script>

    <? if (version_compare(JVERSION, '3.0', 'ge')): ?>
    <?= @helper('behavior.jquery'); ?>
    jQuery(function($){
        //Quick j3 sidebar layout fix
        $('#submenu').prependTo('.docman-container').addClass('docman-main-nav').wrap(function(){
            return $('<div/>', {'id': 'documents-sidebar', 'class': 'fltlft', style: 'width: 260px'});
        }).wrap(function(){
                return $('<div/>', {'class': 'sidebar-inner'});
            });
        $('.docman-container > form').wrap(function(){
            return $('<div/>', {class: 'fltlft', style: 'margin-left: 260px;float:none'});
        });
        $('#submenu').height($('.docman-container').height()-26);
    });
    <? endif ?>

    window.addEvent('domready', function() {
        var controller = document.getElement('.-koowa-grid').retrieve('controller'),
            delete_button = document.id('toolbar-delete').getElement('a'),
            countDocuments = function() {
                var boxes = Koowa.Grid.getAllSelected(),
                    count = 0;

                Object.each(boxes, function(selected) {
                    count += parseInt(selected.get('data-document-count'), 10);
                });

                return count;
            };

        controller.form.getElements('input[class^=-koowa-grid-checkbox]').addEvent('change', function(e) {
            if (countDocuments()) {
                delete_button.addClass('disabled');
            }
        });

        delete_button.addEvent('click', function(e) {
            if (countDocuments()) {
                var message = <?= json_encode(@text('You cannot delete a category while it still has documents')); ?>;
                alert(message);
            }
        });
    });
</script>

<div class="docman-container">

    <div id="documents-sidebar" class="fltlft" style="width: 260px">
        <div class="sidebar-inner">
            <h3><?= @text('Favorites'); ?></h3>
            <ul class="sidebar-nav favorites">
                <li class="<?= $state->created_by == $user->id ? 'active' : ''; ?>">
                    <a href="<?= @route($state->created_by == 0 ? '&created_by='.$user->id : '&created_by=') ?>">
                        <?= @text('My Categories') ?>
                    </a>
                </li>
            </ul>

            <div class="documents-filters">
                <form action="" method="get" class="-koowa-grid" data-toolbar=".toolbar-list">
                    <h3><?= @text('Find documents by date') ?></h3>
                    <div class="controls find-by-date">
                        <label for="day_range"><?= @text('Access') ?></label>
                        <div style="display: inline-block; margin-top: 10px;">
                            <?= @helper('listbox.access', array(
                                'attribs' => array(
                                    'onchange' => 'this.form.submit()',
                                    'style' => 'max-width: 180px;'
                                )
                            )); ?>
                        </div>
                    </div>
                    <div class="controls find-by-date">
                        <label for="day_range"><?= @text('Owner') ?></label>
                        <div style="display: inline-block; margin-top: 10px; ">
                            <?= @helper('listbox.users', array(
                                'name'    => 'created_by',
                                'attribs' => array(
                                    'onchange' => 'this.form.submit()',
                                    'style' => 'max-width: 180px;',
                                    'class' => 'select2-listbox'
                                ),
                                'behaviors' => array('select2' => array('element' => '.select2-listbox'))
                            )); ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="fltlft" style="margin-left: 260px;float:none">
        <form action="<?= @route() ?>" method="get" class="-koowa-grid" data-toolbar=".toolbar-list">
            <div class="scopebar">
                <div class="scopebar-group hidden-tablet hidden-phone">
                    <a class="<?= is_null($state->enabled) && is_null($state->access) ? 'active' : ''; ?>" href="<?= @route('&enabled=&access=' ) ?>">
                        <?= @text('All') ?>
                    </a>
                </div>
                <div class="scopebar-group last hidden-tablet hidden-phone">
                    <a class="<?= $state->enabled === 0 ? 'active' : ''; ?>" href="<?= @route($state->enabled === 0 ? '&enabled=' : '&enabled=0' ) ?>">
                        <?= @text('Unpublished') ?>
                    </a>
                    <a class="<?= $state->status === 'published' ? 'active' : ''; ?>" href="<?= @route($state->enabled === 1 ? '&enabled=' : '&enabled=1' ) ?>">
                        <?= @text('Published') ?>
                    </a>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th style="text-align: center;" width="1">
                        <?= @helper('grid.checkall')?>
                    </th>
                    <th>
                        <?= @helper('grid.sort', array('column' => 'title', 'title' => 'Title', 'direction' => 'asc')) ?>
                    </th>
                    <th width="5%">
                        <?= @text('Status') ?>
                    </th>
                    <th width="5%" class="hidden-tablet hidden-phone">
                        <?= @text('Access')?>
                    </th>
                    <th width="5%">
                        <?= @text('Owner')?>
                    </th>
                    <th width="5%">
                        <?= @text('Date'); ?>
                    </th>
                    <th width="5%" class="hidden-phone">
                        <?= @text('Document count')?>
                    </th>
                    <th style="text-align: right;" width="7%">
                        <?= @helper('grid.sort', array('column' => 'custom', 'title' => 'Ordering', 'direction' => 'asc')) ?>
                    </th>
                </tr>
                </thead>
                <tbody>
                <? foreach($categories as $category):
                    $category->isAclable();
                    ?>
                    <tr>
                        <td style="text-align: center;">
                            <?= @helper('grid.checkbox', array('row'=> $category, 'attribs' => array(
                                'data-document-count' => $category->document_count
                            ))); ?>
                        </td>
                        <td>
				<span style="padding-left: <?= ($category->level) * 15 ?>px" class="editlinktip hasTip"
                      title="<?= @text('Edit')?> <?= @escape($category->title); ?>">
					<a href="<?= @route('view=category&id='.$category->id)?>">
                        <?= @escape($category->title) ?>
                    </a>
				</span>
                        </td>
                        <td>
                            <?= @helper('grid.state', array('row' => $category, 'clickable' => $category->canPerform('edit'))) ?>
                        </td>
                        <td class="hidden-tablet hidden-phone">
                            <? $access_level = $category->access_title ?>
                            <? if ($category->access_raw == -1): ?>
                                <? $access_level .= ' (' . ($category->level > 1 ? @text('Inherited') : @text('Default')) . ')' ?>
                            <? endif ?>
                            <span title="<?= @escape($access_level) ?>" style="
                    display: inline-block;
                    text-overflow: ellipsis;
                    overflow: hidden;
                    max-width: 200px;
                "><?= $access_level ?></span>
                        </td>
                        <td>
                            <?= $category->created_by_name; ?>
                        </td>
                        <td>
                            <?= @date(array('date' => $category->created_on, 'format' => @text('DATE_FORMAT_LC3'))); ?>
                        </td>
                        <td class="hidden-phone" style="text-align: center">
                            <?= $category->document_count; ?>
                        </td>
                        <td style="text-align: right;">
                            <?= @helper('grid.order', array('row' => $category, 'total' => $total)) ?>
                        </td>
                    </tr>
                <? endforeach ?>
                <? if(!count($categories)) : ?>
                    <tr>
                        <td colspan="20" style="text-align: center;">
                            <?= @text('No categories found.') ?>
                        </td>
                    </tr>
                <? endif ?>
                </tbody>

                <? if (count($categories)): ?>
                    <tfoot>
                    <tr>
                        <td colspan="20">
                            <?= @helper('paginator.pagination', array('total' => $total)) ?>
                        </td>
                    </tr>
                    </tfoot>
                <? endif; ?>
            </table>
        </form>
    </div>
</div>