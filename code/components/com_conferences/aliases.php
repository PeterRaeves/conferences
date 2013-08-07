<?php
/**
 * @package    DOCman
 * @copyright   Copyright (C) 2011 - 2013 Timble CVBA (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.joomlatools.com
 */

class ComConferencesAliases extends KObject
{
    protected $_loaded = false;

    public function setLoaded($loaded)
    {
        $this->_loaded = $loaded;

        return $this;
    }

    public function setAliases()
    {
        if (!$this->_loaded) {
            $loader = KService::get('koowa:loader');

            // This is here because if we map the controller, backend view will be used instead of the frontend
            // $loader->loadIdentifier('com://admin/docman.controller.file');

            // $loader->loadIdentifier('com://admin/docman.controller.behaviors.permissions');

            $loader->loadIdentifier('com://admin/koowa.controller.toolbars.default');
            // $loader->loadIdentifier('com://admin/docman.controller.toolbars.default');

            $maps = array(
                'com://site/conferences.controller.submission'              => 'com://admin/conferences.controller.submission',
                'com://site/conferences.controller.ticket'                  => 'com://admin/conferences.controller.ticket',
                'com://site/conferences.model.submissions'              	=> 'com://admin/conferences.model.submissions',
                'com://site/conferences.model.tickets'                  	=> 'com://admin/conferences.model.tickets',
                'com://site/conferences.model.topics'                       => 'com://admin/conferences.model.topics',
                'com://site/conferences.model.users'                  	=> 'com://admin/conferences.model.users',
                'com://site/conferences.template.helper.listbox'      	=> 'com://admin/conferences.template.helper.listbox'
            );

            foreach ($maps as $alias => $identifier) {
                KService::setAlias($alias, $identifier);
            }

            $this->setLoaded(true);
        }

        return $this;
    }
}