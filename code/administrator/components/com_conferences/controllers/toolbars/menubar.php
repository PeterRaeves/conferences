<?php
/**
 * @package     DOCman
 * @copyright   Copyright (C) 2011 - 2013 Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.joomlatools.com
 */

/**
 * If we take out this file Koowa picks ComDocmanControllerToolbarDefault instead of the parent class here
 */
class ComConferencesControllerToolbarMenubar extends ComKoowaControllerToolbarMenubar
{
    public function getCommands()
    {
        return parent::getCommands();
    }
}