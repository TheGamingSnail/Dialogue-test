<?php

namespace GamingSnail7410\Dialoguetest;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;

use pocketmine\command\CommandSender;

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