<?php

/**
 * Nette Framework
 *
 * Copyright (c) 2004, 2009 David Grudl (http://davidgrudl.com)
 *
 * This source file is subject to the "Nette license" that is bundled
 * with this package in the file license.txt.
 *
 * For more information please see http://nettephp.com
 *
 * @copyright  Copyright (c) 2004, 2009 David Grudl
 * @license    http://nettephp.com/license  Nette license
 * @link       http://nettephp.com
 * @category   Nette
 * @package    Nette\Application
 */

/*namespace Nette\Application;*/



/**
 * The exception that is thrown when user attempts to terminate the current presenter or application.
 *
 * @author     David Grudl
 * @copyright  Copyright (c) 2004, 2009 David Grudl
 * @package    Nette\Application
 */
class AbortException extends /*\*/Exception
{
	/** @var IPresenterResponse */
	private $response;



	public function __construct(IPresenterResponse $response = NULL)
	{
		parent::__construct();
		$this->response = $response;
	}



	/**
	 * @return IPresenterResponse
	 */
	final public function getResponse()
	{
		return $this->response;
	}

}