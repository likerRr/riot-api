<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 13.02.14
 * Time: 13:39
 */
	use vendor\Liker\Riot\Api;
	use vendor\Liker\Riot\Constants\ChallengerType;
	use vendor\Liker\Riot\Helpers\Champion\Name as ChampionName;
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
//	var_dump(iconv('cp1251', 'cp1251', 'øæå ÆØÅ'));
//	$f = fopen('lol.csv', mb_check_encoding('a'));
//	fwrite($f, 'asd');
//	fclose($f);
//file_put_contents('lol.csv',  iconv('windows-1251', 'utf-8', 'øæå ÆØÅ'));
	$key = 'a5f2653c-3fa2-4211-9c6d-7c4d0ac77c3c';
//	$key = 'a5f2653c-3fa2-4211-9c6d-7c4d0ac77cd3c';
	$api = Api::instance($key);

//	$challengerApi = $api->leagueChallenger(Region::EUNE)->qType(ChallengerType::RANKED_SOLO_5x5)->request();
//	var_dump($challengerApi->get());
//	$challengerApi = $api->leagueSummoner(Region::EUNE, 21797856)->request();
//	var_dump($challengerApi->get()->leagues(0)->entries());
//	$challengerApi = $api->leagueSummonerEntry(Region::EUNE, 21797856)->request();
//	var_dump($challengerApi->get()->entries());
//	$challengerApi = $api->leagueTeam(Region::EUNE, 20505143)->request();
//	var_dump($challengerApi->get());
//	$challengerApi = $api->leagueTeamEntry(Region::EUNE, 21797856)->request();
//	var_dump($challengerApi->get());
	$staticChampion = $api
		->staticChampion(Region::RU)
		->qChampData(array(\vendor\Liker\Riot\Helpers\ChampData::SKINS))
		->qLocale('ru_RU')
		->request();
	var_dump($staticChampion);

//	$championApi = $api
//		->champion(Region::NA)
//		->qFreeToPlay()
//		->request();
//
//	var_dump($championApi->get()->champions(ChampionName::ASHE));die;
//
//	$gameApi = $api
//		->game(Region::EUW, 20966031)
//		->request();
//
//	$game = $gameApi->get();
//	var_dump($game->games());
//
//	var_dump(Mode::get(Mode::ARAM)->loose());
//
//	if ($championApi->isNoError()) {
//		$champions = $championApi->getAll();
//		var_dump($champions);
//	}
//	else {
//		echo $championApi->getErrorMessage() . ' ' . $championApi->getErrorCode();
//	}