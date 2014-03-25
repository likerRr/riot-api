<?php
/**
 * Created by PhpStorm.
 * User: Alexey Lizurchik
 * Date: 25.03.14
 * Time: 16:32
 */

namespace vendor\Liker\Riot\Types\LolStaticData\ItemList\BasicData;

/**
 * Class BasicDataStatsDto
 * @package vendor\Liker\Riot\Types\LolStaticData\ItemList\BasicData
 */
class BasicDataStatsDto {

	/**
	 * @var double
	 */
	protected $_flatArmorMod;
	/**
	 * @var double
	 */
	protected $_flatAttackSpeedMod;
	/**
	 * @var double
	 */
	protected $_flatBlockMod;
	/**
	 * @var double
	 */
	protected $_flatCritChanceMod;
	/**
	 * @var double
	 */
	protected $_flatCritDamageMod;
	/**
	 * @var double
	 */
	protected $_flatEXPBonus;
	/**
	 * @var double
	 */
	protected $_flatEnergyPoolMod;
	/**
	 * @var double
	 */
	protected $_flatEnergyRegenMod;
	/**
	 * @var double
	 */
	protected $_flatHPPoolMod;
	/**
	 * @var double
	 */
	protected $_flatHPRegenMod;
	/**
	 * @var double
	 */
	protected $_flatMPPoolMod;
	/**
	 * @var double
	 */
	protected $_flatMPRegenMod;
	/**
	 * @var double
	 */
	protected $_flatMagicDamageMod;
	/**
	 * @var double
	 */
	protected $_flatMovementSpeedMod;
	/**
	 * @var double
	 */
	protected $_flatPhysicalDamageMod;
	/**
	 * @var double
	 */
	protected $_flatSpellBlockMod;
	/**
	 * @var double
	 */
	protected $_percentArmorMod;
	/**
	 * @var double
	 */
	protected $_percentAttackSpeedMod;
	/**
	 * @var double
	 */
	protected $_percentBlockMod;
	/**
	 * @var double
	 */
	protected $_percentCritChanceMod;
	/**
	 * @var double
	 */
	protected $_percentCritDamageMod;
	/**
	 * @var double
	 */
	protected $_percentDodgeMod;
	/**
	 * @var double
	 */
	protected $_percentEXPBonus;
	/**
	 * @var double
	 */
	protected $_percentHPPoolMod;
	/**
	 * @var double
	 */
	protected $_percentHPRegenMod;
	/**
	 * @var double
	 */
	protected $_percentLifeStealMod;
	/**
	 * @var double
	 */
	protected $_percentMPPoolMod;
	/**
	 * @var double
	 */
	protected $_percentMPRegenMod;
	/**
	 * @var double
	 */
	protected $_percentMagicDamageMod;
	/**
	 * @var double
	 */
	protected $_percentMovementSpeedMod;
	/**
	 * @var double
	 */
	protected $_percentPhysicalDamageMod;
	/**
	 * @var double
	 */
	protected $_percentSpellBlockMod;
	/**
	 * @var double
	 */
	protected $_percentSpellVampMod;
	/**
	 * @var double
	 */
	protected $_rFlatArmorModPerLevel;
	/**
	 * @var double
	 */
	protected $_rFlatArmorPenetrationMod;
	/**
	 * @var double
	 */
	protected $_rFlatArmorPenetrationModPerLevel;
	/**
	 * @var double
	 */
	protected $_rFlatCritChanceModPerLevel;
	/**
	 * @var double
	 */
	protected $_rFlatCritDamageModPerLevel;
	/**
	 * @var double
	 */
	protected $_rFlatDodgeMod;
	/**
	 * @var double
	 */
	protected $_rFlatDodgeModPerLevel;
	/**
	 * @var double
	 */
	protected $_rFlatEnergyModPerLevel;
	/**
	 * @var double
	 */
	protected $_rFlatEnergyRegenModPerLevel;
	/**
	 * @var double
	 */
	protected $_rFlatGoldPer10Mod;
	/**
	 * @var double
	 */
	protected $_rFlatHPModPerLevel;
	/**
	 * @var double
	 */
	protected $_rFlatHPRegenModPerLevel;
	/**
	 * @var double
	 */
	protected $_rFlatMPModPerLevel;
	/**
	 * @var double
	 */
	protected $_rFlatMPRegenModPerLevel;
	/**
	 * @var double
	 */
	protected $_rFlatMagicDamageModPerLevel;
	/**
	 * @var double
	 */
	protected $_rFlatMagicPenetrationMod;
	/**
	 * @var double
	 */
	protected $_rFlatMagicPenetrationModPerLevel;
	/**
	 * @var double
	 */
	protected $_rFlatMovementSpeedModPerLevel;
	/**
	 * @var double
	 */
	protected $_rFlatPhysicalDamageModPerLevel;
	/**
	 * @var double
	 */
	protected $_rFlatSpellBlockModPerLevel;
	/**
	 * @var double
	 */
	protected $_rFlatTimeDeadMod;
	/**
	 * @var double
	 */
	protected $_rFlatTimeDeadModPerLevel;
	/**
	 * @var double
	 */
	protected $_rPercentArmorPenetrationMod;
	/**
	 * @var double
	 */
	protected $_rPercentArmorPenetrationModPerLevel;
	/**
	 * @var double
	 */
	protected $_rPercentAttackSpeedModPerLevel;
	/**
	 * @var double
	 */
	protected $_rPercentCooldownMod;
	/**
	 * @var double
	 */
	protected $_rPercentCooldownModPerLevel;
	/**
	 * @var double
	 */
	protected $_rPercentMagicPenetrationMod;
	/**
	 * @var double
	 */
	protected $_rPercentMagicPenetrationModPerLevel;
	/**
	 * @var double
	 */
	protected $_rPercentMovementSpeedModPerLevel;
	/**
	 * @var double
	 */
	protected $_rPercentTimeDeadMod;
	/**
	 * @var double
	 */
	protected $_rPercentTimeDeadModPerLevel;

	/**
	 * @param $basicDataStats
	 */
	function __construct($basicDataStats) {
		$this->_flatArmorMod                        = $basicDataStats->FlatArmorMod;
		$this->_flatAttackSpeedMod                  = $basicDataStats->FlatAttackSpeedMod;
		$this->_flatBlockMod                        = $basicDataStats->FlatBlockMod;
		$this->_flatCritChanceMod                   = $basicDataStats->FlatCritChanceMod;
		$this->_flatCritDamageMod                   = $basicDataStats->FlatCritDamageMod;
		$this->_flatEXPBonus                        = $basicDataStats->FlatEXPBonus;
		$this->_flatEnergyPoolMod                   = $basicDataStats->FlatEnergyPoolMod;
		$this->_flatEnergyRegenMod                  = $basicDataStats->FlatEnergyRegenMod;
		$this->_flatHPPoolMod                       = $basicDataStats->FlatHPPoolMod;
		$this->_flatHPRegenMod                      = $basicDataStats->FlatHPRegenMod;
		$this->_flatMPPoolMod                       = $basicDataStats->FlatMPPoolMod;
		$this->_flatMPRegenMod                      = $basicDataStats->FlatMPRegenMod;
		$this->_flatMagicDamageMod                  = $basicDataStats->FlatMagicDamageMod;
		$this->_flatMovementSpeedMod                = $basicDataStats->FlatMovementSpeedMod;
		$this->_flatPhysicalDamageMod               = $basicDataStats->FlatPhysicalDamageMod;
		$this->_flatSpellBlockMod                   = $basicDataStats->FlatSpellBlockMod;
		$this->_percentArmorMod                     = $basicDataStats->PercentArmorMod;
		$this->_percentAttackSpeedMod               = $basicDataStats->PercentAttackSpeedMod;
		$this->_percentBlockMod                     = $basicDataStats->PercentBlockMod;
		$this->_percentCritChanceMod                = $basicDataStats->PercentCritChanceMod;
		$this->_percentCritDamageMod                = $basicDataStats->PercentCritDamageMod;
		$this->_percentDodgeMod                     = $basicDataStats->PercentDodgeMod;
		$this->_percentEXPBonus                     = $basicDataStats->PercentEXPBonus;
		$this->_percentHPPoolMod                    = $basicDataStats->PercentHPPoolMod;
		$this->_percentHPRegenMod                   = $basicDataStats->PercentHPRegenMod;
		$this->_percentLifeStealMod                 = $basicDataStats->PercentLifeStealMod;
		$this->_percentMPPoolMod                    = $basicDataStats->PercentMPPoolMod;
		$this->_percentMPRegenMod                   = $basicDataStats->PercentMPRegenMod;
		$this->_percentMagicDamageMod               = $basicDataStats->PercentMagicDamageMod;
		$this->_percentMovementSpeedMod             = $basicDataStats->PercentMovementSpeedMod;
		$this->_percentPhysicalDamageMod            = $basicDataStats->PercentPhysicalDamageMod;
		$this->_percentSpellBlockMod                = $basicDataStats->PercentSpellBlockMod;
		$this->_percentSpellVampMod                 = $basicDataStats->PercentSpellVampMod;
		$this->_rFlatArmorModPerLevel               = $basicDataStats->RFlatArmorModPerLevel;
		$this->_rFlatArmorPenetrationMod            = $basicDataStats->RFlatArmorPenetrationMod;
		$this->_rFlatArmorPenetrationModPerLevel    = $basicDataStats->RFlatArmorPenetrationModPerLevel;
		$this->_rFlatCritChanceModPerLevel          = $basicDataStats->RFlatCritChanceModPerLevel;
		$this->_rFlatCritDamageModPerLevel          = $basicDataStats->RFlatCritDamageModPerLevel;
		$this->_rFlatDodgeMod                       = $basicDataStats->RFlatDodgeMod;
		$this->_rFlatDodgeModPerLevel               = $basicDataStats->RFlatDodgeModPerLevel;
		$this->_rFlatEnergyModPerLevel              = $basicDataStats->RFlatEnergyModPerLevel;
		$this->_rFlatEnergyRegenModPerLevel         = $basicDataStats->RFlatEnergyRegenModPerLevel;
		$this->_rFlatGoldPer10Mod                   = $basicDataStats->RFlatGoldPer10Mod;
		$this->_rFlatHPModPerLevel                  = $basicDataStats->RFlatHPModPerLevel;
		$this->_rFlatHPRegenModPerLevel             = $basicDataStats->RFlatHPRegenModPerLevel;
		$this->_rFlatMPModPerLevel                  = $basicDataStats->RFlatMPModPerLevel;
		$this->_rFlatMPRegenModPerLevel             = $basicDataStats->RFlatMPRegenModPerLevel;
		$this->_rFlatMagicDamageModPerLevel         = $basicDataStats->RFlatMagicDamageModPerLevel;
		$this->_rFlatMagicPenetrationMod            = $basicDataStats->RFlatMagicPenetrationMod;
		$this->_rFlatMagicPenetrationModPerLevel    = $basicDataStats->RFlatMagicPenetrationModPerLevel;
		$this->_rFlatMovementSpeedModPerLevel       = $basicDataStats->RFlatMovementSpeedModPerLevel;
		$this->_rFlatPhysicalDamageModPerLevel      = $basicDataStats->RFlatPhysicalDamageModPerLevel;
		$this->_rFlatSpellBlockModPerLevel          = $basicDataStats->RFlatSpellBlockModPerLevel;
		$this->_rFlatTimeDeadMod                    = $basicDataStats->RFlatTimeDeadMod;
		$this->_rFlatTimeDeadModPerLevel            = $basicDataStats->RFlatTimeDeadModPerLevel;
		$this->_rPercentArmorPenetrationMod         = $basicDataStats->RPercentArmorPenetrationMod;
		$this->_rPercentArmorPenetrationModPerLevel = $basicDataStats->RPercentArmorPenetrationModPerLevel;
		$this->_rPercentAttackSpeedModPerLevel      = $basicDataStats->RPercentAttackSpeedModPerLevel;
		$this->_rPercentCooldownMod                 = $basicDataStats->RPercentCooldownMod;
		$this->_rPercentCooldownModPerLevel         = $basicDataStats->RPercentCooldownModPerLevel;
		$this->_rPercentMagicPenetrationMod         = $basicDataStats->RPercentMagicPenetrationMod;
		$this->_rPercentMagicPenetrationModPerLevel = $basicDataStats->RPercentMagicPenetrationModPerLevel;
		$this->_rPercentMovementSpeedModPerLevel    = $basicDataStats->RPercentMovementSpeedModPerLevel;
		$this->_rPercentTimeDeadMod                 = $basicDataStats->RPercentTimeDeadMod;
		$this->_rPercentTimeDeadModPerLevel         = $basicDataStats->RPercentTimeDeadModPerLevel;
	}

	/**
	 * Get all available stats
	 * @return array
	 */
	public function all() {
		$vars = get_object_vars($this);
		$data = array();
		foreach ($vars as $key => $val) {
			if (!empty($val)) {
				$key = ucfirst(preg_replace('!^_!', '', $key));
				$data[$key] = $val;
			}
		}

		return $data;
	}

	/**
	 * @return float
	 */
	public function flatArmorMod() {
		return $this->_flatArmorMod;
	}

	/**
	 * @return float
	 */
	public function flatAttackSpeedMod() {
		return $this->_flatAttackSpeedMod;
	}

	/**
	 * @return float
	 */
	public function flatBlockMod() {
		return $this->_flatBlockMod;
	}

	/**
	 * @return float
	 */
	public function flatCritChanceMod() {
		return $this->_flatCritChanceMod;
	}

	/**
	 * @return float
	 */
	public function flatCritDamageMod() {
		return $this->_flatCritDamageMod;
	}

	/**
	 * @return float
	 */
	public function flatEXPBonus() {
		return $this->_flatEXPBonus;
	}

	/**
	 * @return float
	 */
	public function flatEnergyPoolMod() {
		return $this->_flatEnergyPoolMod;
	}

	/**
	 * @return float
	 */
	public function flatEnergyRegenMod() {
		return $this->_flatEnergyRegenMod;
	}

	/**
	 * @return float
	 */
	public function flatHPPoolMod() {
		return $this->_flatHPPoolMod;
	}

	/**
	 * @return float
	 */
	public function flatHPRegenMod() {
		return $this->_flatHPRegenMod;
	}

	/**
	 * @return float
	 */
	public function flatMPPoolMod() {
		return $this->_flatMPPoolMod;
	}

	/**
	 * @return float
	 */
	public function flatMPRegenMod() {
		return $this->_flatMPRegenMod;
	}

	/**
	 * @return float
	 */
	public function flatMagicDamageMod() {
		return $this->_flatMagicDamageMod;
	}

	/**
	 * @return float
	 */
	public function flatMovementSpeedMod() {
		return $this->_flatMovementSpeedMod;
	}

	/**
	 * @return float
	 */
	public function flatPhysicalDamageMod() {
		return $this->_flatPhysicalDamageMod;
	}

	/**
	 * @return float
	 */
	public function flatSpellBlockMod() {
		return $this->_flatSpellBlockMod;
	}

	/**
	 * @return float
	 */
	public function percentArmorMod() {
		return $this->_percentArmorMod;
	}

	/**
	 * @return float
	 */
	public function percentAttackSpeedMod() {
		return $this->_percentAttackSpeedMod;
	}

	/**
	 * @return float
	 */
	public function percentBlockMod() {
		return $this->_percentBlockMod;
	}

	/**
	 * @return float
	 */
	public function percentCritChanceMod() {
		return $this->_percentCritChanceMod;
	}

	/**
	 * @return float
	 */
	public function percentCritDamageMod() {
		return $this->_percentCritDamageMod;
	}

	/**
	 * @return float
	 */
	public function percentDodgeMod() {
		return $this->_percentDodgeMod;
	}

	/**
	 * @return float
	 */
	public function percentEXPBonus() {
		return $this->_percentEXPBonus;
	}

	/**
	 * @return float
	 */
	public function percentHPPoolMod() {
		return $this->_percentHPPoolMod;
	}

	/**
	 * @return float
	 */
	public function percentHPRegenMod() {
		return $this->_percentHPRegenMod;
	}

	/**
	 * @return float
	 */
	public function percentLifeStealMod() {
		return $this->_percentLifeStealMod;
	}

	/**
	 * @return float
	 */
	public function percentMPPoolMod() {
		return $this->_percentMPPoolMod;
	}

	/**
	 * @return float
	 */
	public function percentMPRegenMod() {
		return $this->_percentMPRegenMod;
	}

	/**
	 * @return float
	 */
	public function percentMagicDamageMod() {
		return $this->_percentMagicDamageMod;
	}

	/**
	 * @return float
	 */
	public function percentMovementSpeedMod() {
		return $this->_percentMovementSpeedMod;
	}

	/**
	 * @return float
	 */
	public function percentPhysicalDamageMod() {
		return $this->_percentPhysicalDamageMod;
	}

	/**
	 * @return float
	 */
	public function percentSpellBlockMod() {
		return $this->_percentSpellBlockMod;
	}

	/**
	 * @return float
	 */
	public function percentSpellVampMod() {
		return $this->_percentSpellVampMod;
	}

	/**
	 * @return float
	 */
	public function rFlatArmorModPerLevel() {
		return $this->_rFlatArmorModPerLevel;
	}

	/**
	 * @return float
	 */
	public function rFlatArmorPenetrationMod() {
		return $this->_rFlatArmorPenetrationMod;
	}

	/**
	 * @return float
	 */
	public function rFlatArmorPenetrationModPerLevel() {
		return $this->_rFlatArmorPenetrationModPerLevel;
	}

	/**
	 * @return float
	 */
	public function rFlatCritChanceModPerLevel() {
		return $this->_rFlatCritChanceModPerLevel;
	}

	/**
	 * @return float
	 */
	public function rFlatCritDamageModPerLevel() {
		return $this->_rFlatCritDamageModPerLevel;
	}

	/**
	 * @return float
	 */
	public function rFlatDodgeMod() {
		return $this->_rFlatDodgeMod;
	}

	/**
	 * @return float
	 */
	public function rFlatDodgeModPerLevel() {
		return $this->_rFlatDodgeModPerLevel;
	}

	/**
	 * @return float
	 */
	public function rFlatEnergyModPerLevel() {
		return $this->_rFlatEnergyModPerLevel;
	}

	/**
	 * @return float
	 */
	public function rFlatEnergyRegenModPerLevel() {
		return $this->_rFlatEnergyRegenModPerLevel;
	}

	/**
	 * @return float
	 */
	public function rFlatGoldPer10Mod() {
		return $this->_rFlatGoldPer10Mod;
	}

	/**
	 * @return float
	 */
	public function rFlatHPModPerLevel() {
		return $this->_rFlatHPModPerLevel;
	}

	/**
	 * @return float
	 */
	public function rFlatHPRegenModPerLevel() {
		return $this->_rFlatHPRegenModPerLevel;
	}

	/**
	 * @return float
	 */
	public function rFlatMPModPerLevel() {
		return $this->_rFlatMPModPerLevel;
	}

	/**
	 * @return float
	 */
	public function rFlatMPRegenModPerLevel() {
		return $this->_rFlatMPRegenModPerLevel;
	}

	/**
	 * @return float
	 */
	public function rFlatMagicDamageModPerLevel() {
		return $this->_rFlatMagicDamageModPerLevel;
	}

	/**
	 * @return float
	 */
	public function rFlatMagicPenetrationMod() {
		return $this->_rFlatMagicPenetrationMod;
	}

	/**
	 * @return float
	 */
	public function rFlatMagicPenetrationModPerLevel() {
		return $this->_rFlatMagicPenetrationModPerLevel;
	}

	/**
	 * @return float
	 */
	public function rFlatMovementSpeedModPerLevel() {
		return $this->_rFlatMovementSpeedModPerLevel;
	}

	/**
	 * @return float
	 */
	public function rFlatPhysicalDamageModPerLevel() {
		return $this->_rFlatPhysicalDamageModPerLevel;
	}

	/**
	 * @return float
	 */
	public function rFlatSpellBlockModPerLevel() {
		return $this->_rFlatSpellBlockModPerLevel;
	}

	/**
	 * @return float
	 */
	public function rFlatTimeDeadMod() {
		return $this->_rFlatTimeDeadMod;
	}

	/**
	 * @return float
	 */
	public function rFlatTimeDeadModPerLevel() {
		return $this->_rFlatTimeDeadModPerLevel;
	}

	/**
	 * @return float
	 */
	public function rPercentArmorPenetrationMod() {
		return $this->_rPercentArmorPenetrationMod;
	}

	/**
	 * @return float
	 */
	public function rPercentArmorPenetrationModPerLevel() {
		return $this->_rPercentArmorPenetrationModPerLevel;
	}

	/**
	 * @return float
	 */
	public function rPercentAttackSpeedModPerLevel() {
		return $this->_rPercentAttackSpeedModPerLevel;
	}

	/**
	 * @return float
	 */
	public function rPercentCooldownMod() {
		return $this->_rPercentCooldownMod;
	}

	/**
	 * @return float
	 */
	public function rPercentCooldownModPerLevel() {
		return $this->_rPercentCooldownModPerLevel;
	}

	/**
	 * @return float
	 */
	public function rPercentMagicPenetrationMod() {
		return $this->_rPercentMagicPenetrationMod;
	}

	/**
	 * @return float
	 */
	public function rPercentMagicPenetrationModPerLevel() {
		return $this->_rPercentMagicPenetrationModPerLevel;
	}

	/**
	 * @return float
	 */
	public function rPercentMovementSpeedModPerLevel() {
		return $this->_rPercentMovementSpeedModPerLevel;
	}

	/**
	 * @return float
	 */
	public function rPercentTimeDeadMod() {
		return $this->_rPercentTimeDeadMod;
	}

	/**
	 * @return float
	 */
	public function rPercentTimeDeadModPerLevel() {
		return $this->_rPercentTimeDeadModPerLevel;
	}

} 