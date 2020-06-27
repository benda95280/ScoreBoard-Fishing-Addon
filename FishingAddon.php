<?php

/**
 * @name FishingAddon
 * @version 1.0.0
 * @main JackMD\ScoreHud\Addons\FishingAddon
 * @depend Fishing
 * @api 3.0.0
 */

namespace JackMD\ScoreHud\Addons {

  use JackMD\ScoreHud\addon\AddonBase;
  use Fishing\utils\FishingLevel;
  use pocketmine\Player;

  class FishingAddon extends AddonBase {

    // private $redSkyBlockAPI;

    public function onEnable(): void {

      // $this->redSkyBlockAPI = $this->getServer()->getPluginManager()->getPlugin("RedSkyBlock");
    }
	
    public function getProcessedTags(Player $player): array {
      return [
        "{myfish_level}" => FishingLevel::getFishingLevel($player),
        "{myfish_exp}" => FishingLevel::getFishingExp($player)
      ];
    }
  }
}
