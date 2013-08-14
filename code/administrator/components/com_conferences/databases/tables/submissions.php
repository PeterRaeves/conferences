<?php
/**
 * Created by JetBrains PhpStorm.
 * User: peterraeves
 * Date: 12/08/13
 * Time: 11:05
 * To change this template use File | Settings | File Templates.
 */

class ComConferencesDatabaseTableSubmissions extends KDatabaseTableDefault
{
    protected function  _initialize(KConfig $config)
    {
        $config->append(array(
            'behaviors' => array(
                'lockable',
                'creatable',
                'modifiable'
            ),
            'filters' => array(
                'content' => array('html'),
                'authors' => array('json')
            )
        ));

        parent::_initialize($config);
    }
}