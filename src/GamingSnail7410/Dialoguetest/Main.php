<?php

namespace GamingSnail7410\Dialoguetest;

use pocketmine\plugin\PluginBase;

use pocketmine\Player;

use pocketmine\Server;

use pocketmine\event\Listener;

use pocketmine\command\Command;

use pocketmine\command\CommandSender;

class Main extends PluginBase implements Listener{
   public function onEnabled(){
   	$this->getServer()->getPluginManager()->registerEvents($this,$this);
   	$this->getLogger()->info("Plugin is Enabled");

   }
   
   public function onDisabled(){
   	$this->getLogger()->info("Plugin is Disabled");
   }
   public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{switch($cmd->getName()){
    case "test1":
      $sender->sendMessage("Test Dialogue 1");
    break;
   }

   return true:

}

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{switch($cmd->getName()){
    case "test2":
      $sender->sendMessage("Test Dialogue 2");
    break;
          
   }

   return true:

}
