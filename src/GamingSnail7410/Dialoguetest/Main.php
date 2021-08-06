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
   	$this->getLogger()->info("Dialogue test is on");

   }
   
   public function onDisabled(){
   	$this->getLogger()->info("Dialogue test turned off");
   }
   public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{
   	switch($cmd->getName()){
   		case "npc1":
   		  $sender->sendMessage("This is dialogue test 1");
   		break;

         case "npc2":
           $sender->sendMessage("This is dialogue test 2");
         break;
            
     		case "npc3":
   		  $sender->sendMessage("This is dialogue test 3");
   		break;

         case "npc4":
           $sender->sendMessage("This is dialogue test 4");
         break;
      }
    return true;
   }
}
