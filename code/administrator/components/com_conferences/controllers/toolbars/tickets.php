<?php
/**
 * Created by JetBrains PhpStorm.
 * User: peterraeves
 * Date: 7/08/13
 * Time: 23:40
 * To change this template use File | Settings | File Templates.
 */

class ComConferencesControllerToolbarTickets extends ComKoowaControllerToolbarDefault
{
    public function getCommands()
    {
        $this->addSeparator()
            ->addEnable()
            ->addDisable()
            ->addSeparator()
            ->addExport();

        return parent::getCommands();
    }

}