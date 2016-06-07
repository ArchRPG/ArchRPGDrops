<?php


namespace ArchRPGDrops;
  
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\item\Item;
  
  class Main extends PluginBase implements Listener{
      
      public function onEnable(){
          $this->getServer()->getPluginManager()->registerEvents($this,$this);
      }
      
    public function onDeath(PlayerDeathEvent $e){
        $p = $e->getPlayer();
         $lvl = $p->getLevel();
         $item = Item::get(322,1,1);
         $item = Item::get(384,0,1);
         $lvl->dropItem($p, $item);
      }
 }
