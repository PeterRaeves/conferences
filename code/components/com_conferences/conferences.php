<?php
/**
 * @package    DOCman
 * @copyright   Copyright (C) 2011 - 2013 Timble CVBA (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.joomlatools.com
 */

defined('_JEXEC') or die;

if (!class_exists('Koowa')) {
    return '';
}

KService::get('com://site/conferences.aliases')->setAliases();

echo KService::get('com://site/conferences.dispatcher')->dispatch();