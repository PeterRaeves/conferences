<?php
/**
 * @package     Nooku_Components
 * @subpackage  Conferences
 * @copyright   Copyright (C) 2011 - 2012 Timble CVBA and Contributors. (http://www.timble.net).
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.nooku.org
 */

/**
 * Containers Model Class
 *
 * @author      Ercan Ozkaya <http://nooku.assembla.com/profile/ercanozkaya>
 * @package     Nooku_Components
 * @subpackage  Files
 */
class ComConferencesModelSubmissions extends ComKoowaModelDefault
{

    public function __construct(KConfig $config)
    {
        parent::__construct($config);

        $this->_state
            ->insert('enabled', 'int')
            ->insert('submission_status', 'cmd')
        ;
    }

    protected function _buildQueryColumns(KDatabaseQueryInterface $query)
    {
        parent::_buildQueryColumns($query);

        $query->columns(array('topic_title' => 'topic.title'));
    }

    protected function _buildQueryJoins(KDatabaseQueryInterface $query)
    {
        $query->join(array('topic' => 'conferences_topics'), 'tbl.conferences_topic_id = topic.conferences_topic_id');

        parent::_buildQueryJoins($query);
    }

    protected function _buildQueryWhere(KDatabaseQueryInterface $query)
    {
        parent::_buildQueryWhere($query);

        if ($this->_state->search) {
            $query->where('tbl.title LIKE :search')->bind(array('search' =>  '%'.$this->_state->search.'%'));
        }

        if ($this->_state->submission_status) {
            $query->where('tbl.submission_status = :submission_status')->bind(array('submission_status' =>  $this->_state->submission_status));
        }

        if ($this->_state->enabled) {
            $query->where('tbl.enabled = :enabled')->bind(array('enabled' =>  $this->_state->enabled));
        }

    }
}
