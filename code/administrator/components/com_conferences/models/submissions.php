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
    }
}
