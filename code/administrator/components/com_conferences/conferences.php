<?php
/**
 * @package    Conferences
 * @copyright   Copyright (C) 2011 - 2013 Timble CVBA (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.joomlatools.com
 */

defined('_JEXEC') or die;

if (!class_exists('Koowa'))
{
    if (!JPluginHelper::isEnabled('system', 'koowa')) {
        $error = sprintf(JText::_('EXTMAN_PLUGIN_ERROR'), JRoute::_('index.php?option=com_plugins&view=plugins&filter_folder=system'));
    }

    return JFactory::getApplication()->redirect(JURI::base(), $error, 'error');
}

echo KService::get('com://admin/conferences.dispatcher')->dispatch();