<?php

class ComConferencesDispatcher extends ComKoowaDispatcher
{
    protected function _initialize(KConfig $config)
    {
        $config->append(array(
            'controller' => 'topic',
        ));

        parent::_initialize($config);
    }
}