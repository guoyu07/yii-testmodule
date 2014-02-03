<?php

class TestmoduleModule extends CWebModule
{

    public function init()
	{
		// import the module-level models and components
		$this->setImport(array(
			'testmodule.models.*',
            'testmodule.components.*',
		));

	}

}
