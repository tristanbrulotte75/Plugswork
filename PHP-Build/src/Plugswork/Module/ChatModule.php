<?php
#  ____  _                                    _    
# |  _ \| |_   _  __ _ _____      _____  _ __| | __
# | |_) | | | | |/ _` / __\ \ /\ / / _ \| '__| |/ /
# |  __/| | |_| | (_| \__ \\ V  V / (_) | |  |   < 
# |_|   |_|\__,_|\__, |___/ \_/\_/ \___/|_|  |_|\_\
#                |___/
# @copyright (c) 2016 All rights reserved, Plugswork
# @author    Plugswork Codx
# @website   https://plugswork.com/

namespace Plugswork\Module;

use pocketmine\Player;

class ChatModule{
    
    private $plugin;
    private $unicAllow, $adGurad, $spamGuard, $capsGuard = true;
    
    public function __construct(Plugswork $plugin, $settings = []){
        $this->plugin = $plugin;
        //Settings handler
    }
    
}