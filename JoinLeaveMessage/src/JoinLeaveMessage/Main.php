<?php

namespace JoinLeaveMessage;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\player\Player;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

class Main extends PluginBase implements Listener {

    public function onEnable(): void {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onJoin(PlayerJoinEvent $event) {
        $player = $event->getPlayer();
        $name = $player->getName();
        $this->getServer()->broadcastMessage("§7[§a+§7] §a{$name}");
        $event->setJoinMessage("");
    }

    public function onQuit(PlayerQuitEvent $event) {
        $player = $event->getPlayer();
        $name = $player->getName();
        $this->getServer()->broadcastMessage("§7[§c-§7] §c{$name}");
        $event->setQuitMessage("");
    }
}