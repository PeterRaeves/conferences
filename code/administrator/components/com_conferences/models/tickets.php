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
class ComConferencesModelTickets extends ComKoowaModelDefault
{
    protected function _buildQueryWhere(KDatabaseQueryInterface $query)
    {
        parent::_buildQueryWhere($query);

        if ($this->_state->search) {
            $query->where('tbl.title LIKE :search')->bind(array('search' =>  '%'.$this->_state->search.'%'));
        }
    }
}
