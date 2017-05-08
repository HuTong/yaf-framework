<?php
class IndexController extends BaseController
{
	public function init()
	{
		parent::init();
	}
	
	public function indexAction($name = "Stranger")
	{
		//1. fetch query
		$get = $this->getRequest()->getQuery("get", "default value");

		$this->getView()->assign("name", $name);

		//4. render by Yaf, 如果这里返回FALSE, Yaf将不会调用自动视图引擎Render模板
        return true;
	}
}
