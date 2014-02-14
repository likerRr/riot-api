<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 13.02.14
 * Time: 13:39
 */
	use vendor\Liker\Riot\Api;
	use vendor\Liker\Riot\Constants\Champion\Name;
	use vendor\Liker\Riot\Constants\Game\Mode;
	use vendor\Liker\Riot\Constants\Region;

	/**
	 * PSR-0 Standard
	 * @see http://www.php-fig.org/psr/psr-0/
	 * @param $className
	 */
	function __autoload($className)
	{
		$className = ltrim($className, '\\');
		$fileName  = '';
		if ($lastNsPos = strrpos($className, '\\')) {
			$namespace = substr($className, 0, $lastNsPos);
			$className = substr($className, $lastNsPos + 1);
			$fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
		}
		$fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

		require $fileName;
	}

	$key = 'a5f2653c-3fa2-4211-9c6d-7c4d0ac77c3c';
//	$key = 'a5f2653c-3fa2-4211-9c6d-7c4d0ac77cd3c';
	$api = Api::instance($key);

	$championApi = $api
		->champion(Region::NA)
		->qFreeToPlay()
		->request();

	var_dump(Mode::get(Mode::ARAM)->loose());

	if ($championApi->isNoError()) {
		$champions = $championApi->getAll();
	}
	else {
		echo $championApi->getErrorMessage() . ' ' . $championApi->getErrorCode();
	}