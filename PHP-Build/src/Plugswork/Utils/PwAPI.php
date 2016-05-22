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

namespace Plugswork\Utils;

class PwAPI{
    
    private $sID, $sKey, $hash = false;
    private $PROTOCOL;
    
    public function __construct($sID, $sKey, $hash){
        $this->sID = $sID;
        $this->sKey = $sKey;
        //Check for https warppers
        if(in_array("https", stream_get_wrappers())){
            $this->PROTOCOL = "https://plugswork.com/api/";
        }else{
            $this->PROTOCOL = "http://plugswork.com/api/";
        }
        $this->hash = $hash;
    }
    
    public function open(){
        $result = file_get_contents($this->PROTOCOL."open?id=".$this->sID."&key=".$this->sKey."hash=".$this->hash);
        if($result == 0){
            return PwLang::cTranslate("api.dataInvalid");
        }elseif($result >= 2){
            return PwLang::cTranslate("api.dataMismatch");
        }
        return unserialize($result);
    }
    
    public function close(){
        file_get_contents($this->PROTOCOL."close?id=".$this->sID."&key=".$this->sKey."hash=".$this->hash);
    }
}