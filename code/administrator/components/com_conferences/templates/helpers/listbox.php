<?php


class ComConferencesTemplateHelperListbox extends ComKoowaTemplateHelperListbox
{
    public function topics( $config = array())
    {
        $config = new KConfig($config);
        $config->append(array(
            'model'		=> 'topics',
            'name' 		=> 'conferences_topic_id',
            'value'		=> 'id',
            'text'		=> 'title',
            'prompt'	=> '- Select Topic -',
            'attribs'    => array('id' => $config->name)
        ));

        return parent::_listbox($config);
    }

    public function users( $config = array())
    {
        $config = new KConfig($config);
        $config->append(array(
            'model'		=> 'users',
            'name' 		=> 'conferences_user_id',
            'value'		=> 'id',
            'text'		=> 'fullname',
            'prompt'	=> '- Select User -',
            'attribs'    => array('id' => $config->name)
        ));

        return parent::_listbox($config);
    }

    public function role($config = array())
    {
        $config = new KConfig($config);
        $config->append(array(
            'name'		=> 'role',
            'attribs'	=> array()
        ));

        $options[] 	= $this->option(array('text' => 'Submitter', 'value' => 'submitter'));
        $options[] 	= $this->option(array('text' => 'Reviewer', 'value' => 'reviewer'));

        $list = $this->optionlist(array(
            'options'   => $options,
            'name'      => $config->name,
            'selected'  => $config->selected,
            'attribs'   => $config->attribs
        ));

        return $list;
    }

    public function presentation_type($config = array())
    {
        $config = new KConfig($config);
        $config->append(array(
            'name'		=> 'presentation_type',
            'attribs'	=> array()
        ));

        $options[] 	= $this->option(array('text' => 'Oral', 'value' => 'oral'));
        $options[] 	= $this->option(array('text' => 'Poster', 'value' => 'poster'));

        $list = $this->optionlist(array(
            'options'   => $options,
            'name'      => $config->name,
            'selected'  => $config->selected,
            'attribs'   => $config->attribs
        ));

        return $list;
    }

    public function gender($config = array())
    {
        $config = new KConfig($config);
        $config->append(array(
            'name'		=> 'gender',
            'attribs'	=> array()
        ));

        $options[] 	= $this->option(array('text' => 'Male', 'value' => 'male'));
        $options[] 	= $this->option(array('text' => 'Female', 'value' => 'female'));

        $list = $this->optionlist(array(
            'options'   => $options,
            'name'      => $config->name,
            'selected'  => $config->selected,
            'attribs'   => $config->attribs
        ));

        return $list;
    }

    public function status($config = array())
    {
        $config = new KConfig($config);
        $config->append(array(
            'name'		=> 'status',
            'attribs'	=> array()
        ));

        $options[] 	= $this->option(array('text' => '- Select Status -', 'value' => ''));
        $options[] 	= $this->option(array('text' => 'Pending', 'value' => 'pending'));
        $options[] 	= $this->option(array('text' => 'Approved', 'value' => 'approved'));
        $options[] 	= $this->option(array('text' => 'Rejected', 'value' => 'rejected'));

        $list = $this->optionlist(array(
            'options'   => $options,
            'name'      => $config->name,
            'selected'  => $config->selected,
            'attribs'   => $config->attribs
        ));

        return $list;
    }



}