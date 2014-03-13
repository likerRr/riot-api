<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 04.03.14
 * Time: 11:52
 */

namespace vendor\Liker\Riot\Types\Game;


class RawStatsDto {

	/**
	 * @var int
	 */
	protected $_assists;

	/**
	 * Number of enemy inhibitors killed.
	 * @var int
	 */
	protected $_barracksKilled;

	/**
	 * @var int
	 */
	protected $_championsKilled;

	/**
	 * @var int
	 */
	protected $_combatPlayerScore;

	/**
	 * @var int
	 */
	protected $_consumablesPurchased;

	/**
	 * @var int
	 */
	protected $_damageDealtPlayer;

	/**
	 * @var int
	 */
	protected $_doubleKills;

	/**
	 * @var int
	 */
	protected $_firstBlood;

	/**
	 * @var int
	 */
	protected $_gold;

	/**
	 * @var int
	 */
	protected $_goldEarned;

	/**
	 * @var int
	 */
	protected $_goldSpent;

	/**
	 * @var int
	 */
	protected $_item0;

	/**
	 * @var int
	 */
	protected $_item1;

	/**
	 * @var int
	 */
	protected $_item2;

	/**
	 * @var int
	 */
	protected $_item3;

	/**
	 * @var int
	 */
	protected $_item4;

	/**
	 * @var int
	 */
	protected $_item5;

	/**
	 * @var int
	 */
	protected $_item6;

	/**
	 * @var int
	 */
	protected $_itemsPurchased;

	/**
	 * @var int
	 */
	protected $_killingSprees;

	/**
	 * @var int
	 */
	protected $_largestCriticalStrike;

	/**
	 * @var int
	 */
	protected $_largestKillingSpree;

	/**
	 * @var int
	 */
	protected $_largestMultiKill;

	/**
	 * Number of tier 3 items built.
	 * @var int
	 */
	protected $_legendaryItemsCreated;

	/**
	 * @var int
	 */
	protected $_level;

	/**
	 * @var int
	 */
	protected $_magicDamageDealtPlayer;

	/**
	 * @var int
	 */
	protected $_magicDamageDealtToChampions;

	/**
	 * @var int
	 */
	protected $_magicDamageTaken;

	/**
	 * @var int
	 */
	protected $_minionsDenied;

	/**
	 * @var int
	 */
	protected $_minionsKilled;

	/**
	 * @var int
	 */
	protected $_neutralMinionsKilled;

	/**
	 * @var int
	 */
	protected $_neutralMinionsKilledEnemyJungle;

	/**
	 * @var int
	 */
	protected $_neutralMinionsKilledYourJungle;

	/**
	 * Flag specifying if the summoner got the killing blow on the nexus.
	 * @var boolean
	 */
	protected $_nexusKilled;

	/**
	 * @var int
	 */
	protected $_nodeCapture;

	/**
	 * @var int
	 */
	protected $_nodeCaptureAssist;

	/**
	 * @var int
	 */
	protected $_nodeNeutralize;

	/**
	 * @var int
	 */
	protected $_nodeNeutralizeAssist;

	/**
	 * @var int
	 */
	protected $_numDeaths;

	/**
	 * @var int
	 */
	protected $_numItemsBought;

	/**
	 * @var int
	 */
	protected $_objectivePlayerScore;

	/**
	 * @var int
	 */
	protected $_pentaKills;

	/**
	 * @var int
	 */
	protected $_physicalDamageDealtPlayer;

	/**
	 * @var int
	 */
	protected $_physicalDamageDealtToChampions;

	/**
	 * @var int
	 */
	protected $_physicalDamageTaken;

	/**
	 * @var int
	 */
	protected $_quadraKills;

	/**
	 * @var int
	 */
	protected $_sightWardsBought;

	/**
	 * Number of times first champion spell was cast.
	 * @var int
	 */
	protected $_spell1Cast;

	/**
	 * Number of times second champion spell was cast.
	 * @var int
	 */
	protected $_spell2Cast;

	/**
	 * Number of times third champion spell was cast.
	 * @var int
	 */
	protected $_spell3Cast;

	/**
	 * Number of times fourth champion spell was cast.
	 * @var int
	 */
	protected $_spell4Cast;

	/**
	 * @var int
	 */
	protected $_summonSpell1Cast;

	/**
	 * @var int
	 */
	protected $_summonSpell2Cast;

	/**
	 * @var int
	 */
	protected $_superMonsterKilled;

	/**
	 * @var int
	 */
	protected $_team;

	/**
	 * @var int
	 */
	protected $_teamObjective;

	/**
	 * @var int
	 */
	protected $_timePlayed;

	/**
	 * @var int
	 */
	protected $_totalDamageDealt;

	/**
	 * @var int
	 */
	protected $_totalDamageDealtToChampions;

	/**
	 * @var int
	 */
	protected $_totalDamageTaken;

	/**
	 * @var int
	 */
	protected $_totalHeal;

	/**
	 * @var int
	 */
	protected $_totalPlayerScore;

	/**
	 * @var int
	 */
	protected $_totalScoreRank;

	/**
	 * @var int
	 */
	protected $_totalTimeCrowdControlDealt;

	/**
	 * @var int
	 */
	protected $_totalUnitsHealed;

	/**
	 * @var int
	 */
	protected $_tripleKills;

	/**
	 * @var int
	 */
	protected $_trueDamageDealtPlayer;

	/**
	 * @var int
	 */
	protected $_trueDamageDealtToChampions;

	/**
	 * @var int
	 */
	protected $_trueDamageTaken;

	/**
	 * @var int
	 */
	protected $_turretsKilled;

	/**
	 * @var int
	 */
	protected $_unrealKills;

	/**
	 * @var int
	 */
	protected $_victoryPointTotal;

	/**
	 * @var int
	 */
	protected $_visionWardsBought;

	/**
	 * @var int
	 */
	protected $_wardKilled;

	/**
	 * @var int
	 */
	protected $_wardPlaced;

	/**
	 * Flag specifying whether or not this game was won.
	 * @var boolean
	 */
	protected $_win;

	function __construct($stats)
	{
		$this->_assists                         = $stats->assists;
		$this->_barracksKilled                  = $stats->barracksKilled;
		$this->_championsKilled                 = $stats->championsKilled;
		$this->_combatPlayerScore               = $stats->combatPlayerScore;
		$this->_consumablesPurchased            = $stats->consumablesPurchased;
		$this->_damageDealtPlayer               = $stats->damageDealtPlayer;
		$this->_doubleKills                     = $stats->doubleKills;
		$this->_firstBlood                      = $stats->firstBlood;
		$this->_gold                            = $stats->gold;
		$this->_goldEarned                      = $stats->goldEarned;
		$this->_goldSpent                       = $stats->goldSpent;
		$this->_item0                           = $stats->item0;
		$this->_item1                           = $stats->item1;
		$this->_item2                           = $stats->item2;
		$this->_item3                           = $stats->item3;
		$this->_item4                           = $stats->item4;
		$this->_item5                           = $stats->item5;
		$this->_item6                           = $stats->item6;
		$this->_itemsPurchased                  = $stats->itemsPurchased;
		$this->_killingSprees                   = $stats->killingSprees;
		$this->_largestCriticalStrike           = $stats->largestCriticalStrike;
		$this->_largestKillingSpree             = $stats->largestKillingSpree;
		$this->_largestMultiKill                = $stats->largestMultiKill;
		$this->_legendaryItemsCreated           = $stats->legendaryItemsCreated;
		$this->_level                           = $stats->level;
		$this->_magicDamageDealtPlayer          = $stats->magicDamageDealtPlayer;
		$this->_magicDamageDealtToChampions     = $stats->magicDamageDealtToChampions;
		$this->_magicDamageTaken                = $stats->magicDamageTaken;
		$this->_minionsDenied                   = $stats->minionsDenied;
		$this->_minionsKilled                   = $stats->minionsKilled;
		$this->_neutralMinionsKilled            = $stats->neutralMinionsKilled;
		$this->_neutralMinionsKilledEnemyJungle = $stats->neutralMinionsKilledEnemyJungle;
		$this->_neutralMinionsKilledYourJungle  = $stats->neutralMinionsKilledYourJungle;
		$this->_nexusKilled                     = $stats->nexusKilled;
		$this->_nodeCapture                     = $stats->nodeCapture;
		$this->_nodeCaptureAssist               = $stats->nodeCaptureAssist;
		$this->_nodeNeutralize                  = $stats->nodeNeutralize;
		$this->_nodeNeutralizeAssist            = $stats->nodeNeutralizeAssist;
		$this->_numDeaths                       = $stats->numDeaths;
		$this->_numItemsBought                  = $stats->numItemsBought;
		$this->_objectivePlayerScore            = $stats->objectivePlayerScore;
		$this->_pentaKills                      = $stats->pentaKills;
		$this->_physicalDamageDealtPlayer       = $stats->physicalDamageDealtPlayer;
		$this->_physicalDamageDealtToChampions  = $stats->physicalDamageDealtToChampions;
		$this->_physicalDamageTaken             = $stats->physicalDamageTaken;
		$this->_quadraKills                     = $stats->quadraKills;
		$this->_sightWardsBought                = $stats->sightWardsBought;
		$this->_spell1Cast                      = $stats->spell1Cast;
		$this->_spell2Cast                      = $stats->spell2Cast;
		$this->_spell3Cast                      = $stats->spell3Cast;
		$this->_spell4Cast                      = $stats->spell4Cast;
		$this->_summonSpell1Cast                = $stats->summonSpell1Cast;
		$this->_summonSpell2Cast                = $stats->summonSpell2Cast;
		$this->_superMonsterKilled              = $stats->superMonsterKilled;
		$this->_team                            = $stats->team;
		$this->_teamObjective                   = $stats->teamObjective;
		$this->_timePlayed                      = $stats->timePlayed;
		$this->_totalDamageDealt                = $stats->totalDamageDealt;
		$this->_totalDamageDealtToChampions     = $stats->totalDamageDealtToChampions;
		$this->_totalDamageTaken                = $stats->totalDamageTaken;
		$this->_totalHeal                       = $stats->totalHeal;
		$this->_totalPlayerScore                = $stats->totalPlayerScore;
		$this->_totalScoreRank                  = $stats->totalScoreRank;
		$this->_totalTimeCrowdControlDealt      = $stats->totalTimeCrowdControlDealt;
		$this->_totalUnitsHealed                = $stats->totalUnitsHealed;
		$this->_tripleKills                     = $stats->tripleKills;
		$this->_trueDamageDealtPlayer           = $stats->trueDamageDealtPlayer;
		$this->_trueDamageDealtToChampions      = $stats->trueDamageDealtToChampions;
		$this->_trueDamageTaken                 = $stats->trueDamageTaken;
		$this->_turretsKilled                   = $stats->turretsKilled;
		$this->_unrealKills                     = $stats->unrealKills;
		$this->_victoryPointTotal               = $stats->victoryPointTotal;
		$this->_visionWardsBought               = $stats->visionWardsBought;
		$this->_wardKilled                      = $stats->wardKilled;
		$this->_wardPlaced                      = $stats->wardPlaced;
		$this->_win                             = $stats->win;
	}

	/**
	 * @return int
	 */
	public function assists() {
		return $this->_assists;
	}

	/**
	 * @return int
	 */
	public function barracksKilled() {
		return $this->_barracksKilled;
	}

	/**
	 * @return int
	 */
	public function championsKilled() {
		return $this->_championsKilled;
	}

	/**
	 * @return int
	 */
	public function combatPlayerScore() {
		return $this->_combatPlayerScore;
	}

	/**
	 * @return int
	 */
	public function consumablesPurchased() {
		return $this->_consumablesPurchased;
	}

	/**
	 * @return int
	 */
	public function damageDealtPlayer() {
		return $this->_damageDealtPlayer;
	}

	/**
	 * @return int
	 */
	public function doubleKills() {
		return $this->_doubleKills;
	}

	/**
	 * @return int
	 */
	public function firstBlood() {
		return $this->_firstBlood;
	}

	/**
	 * @return int
	 */
	public function gold() {
		return $this->_gold;
	}

	/**
	 * @return int
	 */
	public function goldEarned() {
		return $this->_goldEarned;
	}

	/**
	 * @return int
	 */
	public function goldSpent() {
		return $this->_goldSpent;
	}

	/**
	 * @return int
	 */
	public function item0() {
		return $this->_item0;
	}

	/**
	 * @return int
	 */
	public function item1() {
		return $this->_item1;
	}

	/**
	 * @return int
	 */
	public function item2() {
		return $this->_item2;
	}

	/**
	 * @return int
	 */
	public function item3() {
		return $this->_item3;
	}

	/**
	 * @return int
	 */
	public function item4() {
		return $this->_item4;
	}

	/**
	 * @return int
	 */
	public function item5() {
		return $this->_item5;
	}

	/**
	 * @return int
	 */
	public function item6() {
		return $this->_item6;
	}

	/**
	 * @return int
	 */
	public function itemsPurchased() {
		return $this->_itemsPurchased;
	}

	/**
	 * @return int
	 */
	public function killingSprees() {
		return $this->_killingSprees;
	}

	/**
	 * @return int
	 */
	public function largestCriticalStrike() {
		return $this->_largestCriticalStrike;
	}

	/**
	 * @return int
	 */
	public function largestKillingSpree() {
		return $this->_largestKillingSpree;
	}

	/**
	 * @return int
	 */
	public function largestMultiKill() {
		return $this->_largestMultiKill;
	}

	/**
	 * @return int
	 */
	public function legendaryItemsCreated() {
		return $this->_legendaryItemsCreated;
	}

	/**
	 * @return int
	 */
	public function level() {
		return $this->_level;
	}

	/**
	 * @return int
	 */
	public function magicDamageDealtPlayer() {
		return $this->_magicDamageDealtPlayer;
	}

	/**
	 * @return int
	 */
	public function magicDamageDealtToChampions() {
		return $this->_magicDamageDealtToChampions;
	}

	/**
	 * @return int
	 */
	public function magicDamageTaken() {
		return $this->_magicDamageTaken;
	}

	/**
	 * @return int
	 */
	public function minionsDenied() {
		return $this->_minionsDenied;
	}

	/**
	 * @return int
	 */
	public function minionsKilled() {
		return $this->_minionsKilled;
	}

	/**
	 * @return int
	 */
	public function neutralMinionsKilled() {
		return $this->_neutralMinionsKilled;
	}

	/**
	 * @return int
	 */
	public function neutralMinionsKilledEnemyJungle() {
		return $this->_neutralMinionsKilledEnemyJungle;
	}

	/**
	 * @return int
	 */
	public function neutralMinionsKilledYourJungle() {
		return $this->_neutralMinionsKilledYourJungle;
	}

	/**
	 * @return boolean
	 */
	public function nexusKilled() {
		return $this->_nexusKilled;
	}

	/**
	 * @return int
	 */
	public function nodeCapture() {
		return $this->_nodeCapture;
	}

	/**
	 * @return int
	 */
	public function nodeCaptureAssist() {
		return $this->_nodeCaptureAssist;
	}

	/**
	 * @return int
	 */
	public function nodeNeutralize() {
		return $this->_nodeNeutralize;
	}

	/**
	 * @return int
	 */
	public function nodeNeutralizeAssist() {
		return $this->_nodeNeutralizeAssist;
	}

	/**
	 * @return int
	 */
	public function numDeaths() {
		return $this->_numDeaths;
	}

	/**
	 * @return int
	 */
	public function numItemsBought() {
		return $this->_numItemsBought;
	}

	/**
	 * @return int
	 */
	public function objectivePlayerScore() {
		return $this->_objectivePlayerScore;
	}

	/**
	 * @return int
	 */
	public function pentaKills() {
		return $this->_pentaKills;
	}

	/**
	 * @return int
	 */
	public function physicalDamageDealtPlayer() {
		return $this->_physicalDamageDealtPlayer;
	}

	/**
	 * @return int
	 */
	public function physicalDamageDealtToChampions() {
		return $this->_physicalDamageDealtToChampions;
	}

	/**
	 * @return int
	 */
	public function physicalDamageTaken() {
		return $this->_physicalDamageTaken;
	}

	/**
	 * @return int
	 */
	public function quadraKills() {
		return $this->_quadraKills;
	}

	/**
	 * @return int
	 */
	public function sightWardsBought() {
		return $this->_sightWardsBought;
	}

	/**
	 * @return int
	 */
	public function spell1Cast() {
		return $this->_spell1Cast;
	}

	/**
	 * @return int
	 */
	public function spell2Cast() {
		return $this->_spell2Cast;
	}

	/**
	 * @return int
	 */
	public function spell3Cast() {
		return $this->_spell3Cast;
	}

	/**
	 * @return int
	 */
	public function spell4Cast() {
		return $this->_spell4Cast;
	}

	/**
	 * @return int
	 */
	public function summonSpell1Cast() {
		return $this->_summonSpell1Cast;
	}

	/**
	 * @return int
	 */
	public function summonSpell2Cast() {
		return $this->_summonSpell2Cast;
	}

	/**
	 * @return int
	 */
	public function superMonsterKilled() {
		return $this->_superMonsterKilled;
	}

	/**
	 * @return int
	 */
	public function team() {
		return $this->_team;
	}

	/**
	 * @return int
	 */
	public function teamObjective() {
		return $this->_teamObjective;
	}

	/**
	 * @return int
	 */
	public function timePlayed() {
		return $this->_timePlayed;
	}

	/**
	 * @return int
	 */
	public function totalDamageDealt() {
		return $this->_totalDamageDealt;
	}

	/**
	 * @return int
	 */
	public function totalDamageDealtToChampions() {
		return $this->_totalDamageDealtToChampions;
	}

	/**
	 * @return int
	 */
	public function totalDamageTaken() {
		return $this->_totalDamageTaken;
	}

	/**
	 * @return int
	 */
	public function totalHeal() {
		return $this->_totalHeal;
	}

	/**
	 * @return int
	 */
	public function totalPlayerScore() {
		return $this->_totalPlayerScore;
	}

	/**
	 * @return int
	 */
	public function totalScoreRank() {
		return $this->_totalScoreRank;
	}

	/**
	 * @return int
	 */
	public function totalTimeCrowdControlDealt() {
		return $this->_totalTimeCrowdControlDealt;
	}

	/**
	 * @return int
	 */
	public function totalUnitsHealed() {
		return $this->_totalUnitsHealed;
	}

	/**
	 * @return int
	 */
	public function tripleKills() {
		return $this->_tripleKills;
	}

	/**
	 * @return int
	 */
	public function trueDamageDealtPlayer() {
		return $this->_trueDamageDealtPlayer;
	}

	/**
	 * @return int
	 */
	public function trueDamageDealtToChampions() {
		return $this->_trueDamageDealtToChampions;
	}

	/**
	 * @return int
	 */
	public function trueDamageTaken() {
		return $this->_trueDamageTaken;
	}

	/**
	 * @return int
	 */
	public function turretsKilled() {
		return $this->_turretsKilled;
	}

	/**
	 * @return int
	 */
	public function unrealKills() {
		return $this->_unrealKills;
	}

	/**
	 * @return int
	 */
	public function victoryPointTotal() {
		return $this->_victoryPointTotal;
	}

	/**
	 * @return int
	 */
	public function visionWardsBought() {
		return $this->_visionWardsBought;
	}

	/**
	 * @return int
	 */
	public function wardKilled() {
		return $this->_wardKilled;
	}

	/**
	 * @return int
	 */
	public function wardPlaced() {
		return $this->_wardPlaced;
	}

	/**
	 * @return boolean
	 */
	public function win() {
		return $this->_win;
	}

} 