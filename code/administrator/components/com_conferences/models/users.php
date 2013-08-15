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
class ComConferencesModelUsers extends ComKoowaModelDefault
{
    protected function _buildQueryColumns(KDatabaseQueryInterface $query)
    {
        $query->columns(array('user_name' => 'user.name'))
            ->columns(array('user_email' => 'user.email'))
            ->columns(array('fullname' => "CONCAT(tbl.lastname, ', ', tbl.firstname)"));

        parent::_buildQueryColumns($query);
    }

    protected function _buildQueryJoins(KDatabaseQueryInterface $query)
    {
        $query->join(array('user' => 'users'), 'tbl.users_user_id = user.id');

        parent::_buildQueryJoins($query);
    }

    protected function _buildQueryWhere(KDatabaseQueryInterface $query)
    {
        parent::_buildQueryWhere($query);

        if ($this->_state->search) {
            $query->where('tbl.lastname', 'LIKE', '%' . $this->_state->search . '%')
                ->where('tbl.firstname', 'LIKE', '%'.  $this->_state->search . '%', 'OR');
        }
    }


}
