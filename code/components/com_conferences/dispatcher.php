<?php
/**
 * @package    DOCman
 * @copyright   Copyright (C) 2011 - 2013 Timble CVBA (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.joomlatools.com
 */

class ComConferencesDispatcher extends ComKoowaDispatcher
{

    public function getRequest()
    {
        $request = parent::getRequest();
/*
        if ($request->alias && !$request->slug) {
            $parts = explode('-', $request->alias, 2);
            $request->slug = array_pop($parts);
        }
*/
        $menu = JFactory::getApplication()->getMenu()->getActive();
        if ($menu) {
            $request->Itemid = $menu->id;
        }

        if (JFactory::getUser()->authorise('core.manage', 'com_conferences') !== true)
        {
            // Can't use executable behavior here as it calls getController which in turn calls this method
            $request->enabled = 1;
            $request->status = 'published';
        }

        $request->access = JFactory::getUser()->getAuthorisedViewLevels();
        $request->page = $request->Itemid;

        // These are read-only for outsiders
        unset($request->page_conditions);

        $request->current_user = JFactory::getUser()->id;

        return $request;
    }

        /**
     * Check if we have a valid menu item
     *
     * @return bool
     */
    protected function _checkMenu()
    {
        $menu = JFactory::getApplication()->getMenu()->getActive();

        if (!$menu) {
            return $this->getRequest()->view === 'topics';
        }

        return $menu->query['option'] === 'com_conferences';
    }
}