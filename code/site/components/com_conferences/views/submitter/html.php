<?php
/**
 * Created by JetBrains PhpStorm.
 * User: peterraeves
 * Date: 16/08/13
 * Time: 00:34
 * To change this template use File | Settings | File Templates.
 */

class ComConferencesViewSubmitterHtml extends ComKoowaViewHtml
{
    protected function _initialize(KConfig $config)
    {
        $config->append(array(
            'auto_assign' => false
        ));

        parent::_initialize($config);
    }

    public function display()
    {
        $model 	    = $this->getModel();

        $submissions = $model->getList();
        $submission = $model->getItem();

        $this->assign('submissions', $submissions);
        $this->assign('submission', $submission);
        $this->assign('total', $this->getModel()->getTotal());

        return parent::display();
    }
}