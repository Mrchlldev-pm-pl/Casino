<?php

declare(strict_types=1);

namespace DeadBush\Casino;

use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use onebone\economyapi\EconomyAPI;
use DeadBush\Casino\FormAPI\Form;
use DeadBush\Casino\FormAPI\FormsUI;
use DeadBush\Casino\FormAPI\CustomForm;
use DeadBush\Casino\FormAPI\SimpleForm;

class main extends PluginBase implements Listener {
    public function onEnable(): void{
        $this->saveDefaultConfig();
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onCommand(CommandSender $player, Command $cmd, String $label, Array $args): bool{
        switch($cmd->getName()){
            case "casino":
                if($player instanceof Player){
                    $this->casinoui($player);
                }
        }
        return true;
    }

    public function casinoui($player){
        $form = new SimpleForm(function (Player $player, int $data = null){
            if($data === null){
                return true;
            }

            switch($data){
                case 0:
                    $this->moneybet($player);
                break;

                case 1:
                    $this->numbergame($player);
                break;

                case 2:
                    $this->coinflip($player);
                break;
            }
        });
        $form->setTitle($this->getConfig()->get("main_ui"));
        $form->addButton($this->getConfig()->get("money_bet"));
        $form->addButton($this->getConfig()->get("number_game"));
        $form->addButton($this->getConfig()->get("coin_flip"));
        $player->sendForm($form);
        return $form;
    }

    public function moneybet($player){
        $form = new CustomForm(function (Player $player, array $data = null){
            if($data === null){
                return true;
            }

            $money = EconomyAPI::getInstance()->myMoney($player);
            if($data[0] >= $this->getConfig()->get("minimum_amount") and $data[0] <= $this->getConfig()->get("maximum_amount")){
                if($money >= $data[0]){
                    switch(mt_rand(1, 10)){
                        case 1:
                            switch(mt_rand(1,2)){
                                case 1:
                                    $value = $data[0] * 2;
                                    EconomyAPI::getInstance()->addMoney($player, $value);
                                    $player->sendMessage("§l§6CS §r§e>> §2Congratulations you won!");
                                break;

                                case 2:
                                    EconomyAPI::getInstance()->reduceMoney($player, $data[0]);
                                    $player->sendMessage("§l§6CS §r§e>> §cYou Lost :<!");
                                break;
                            }
                        break;

                        case 2:
                            switch(mt_rand(1,2)){
                                case 1:
                                    $value = $data[0] * 2;
                                    EconomyAPI::getInstance()->addMoney($player, $value);
                                    $player->sendMessage("§l§6CS §r§e>> §2Congratulations you won!");
                                break;

                                case 2:
                                    EconomyAPI::getInstance()->reduceMoney($player, $data[0]);
                                    $player->sendMessage("§l§6CS §r§e>> §cYou Lost :<!");
                                break;
                            }
                        break;

                        case 3:
                            switch(mt_rand(1,2)){
                                case 1:
                                    $value = $data[0] * 2;
                                    EconomyAPI::getInstance()->addMoney($player, $value);
                                    $player->sendMessage("§l§6CS §r§e>> §2Congratulations you won!");
                                break;

                                case 2:
                                    EconomyAPI::getInstance()->reduceMoney($player, $data[0]);
                                    $player->sendMessage("§l§6CS §r§e>> §cYou Lost :<!");
                                break;
                            }
                        break;

                        case 4:
                            switch(mt_rand(1,2)){
                                case 1:
                                    $value = $data[0] * 2;
                                    EconomyAPI::getInstance()->addMoney($player, $value);
                                    $player->sendMessage("§l§6CS §r§e>> §2Congratulations you won!");
                                break;

                                case 2:
                                    EconomyAPI::getInstance()->reduceMoney($player, $data[0]);
                                    $player->sendMessage("§l§6CS §r§e>> §cYou Lost :<!");
                                break;
                            }
                        break;

                        case 5:
                            switch(mt_rand(1,2)){
                                case 1:
                                    $value = $data[0] * 2;
                                    EconomyAPI::getInstance()->addMoney($player, $value);
                                    $player->sendMessage("§l§6CS §r§e>> §2Congratulations you won!");
                                break;

                                case 2:
                                    EconomyAPI::getInstance()->reduceMoney($player, $data[0]);
                                    $player->sendMessage("§l§6CS §r§e>> §cYou Lost :<!");
                                break;
                            }
                        break;

                        case 6:
                            switch(mt_rand(1,2)){
                                case 1:
                                    $value = $data[0] * 2;
                                    EconomyAPI::getInstance()->addMoney($player, $value);
                                    $player->sendMessage("§l§6CS §r§e>> §2Congratulations you won!");
                                break;

                                case 2:
                                    EconomyAPI::getInstance()->reduceMoney($player, $data[0]);
                                    $player->sendMessage("§l§6CS §r§e>> §cYou Lost :<!");
                                break;
                            }
                        break;

                        case 7:
                            switch(mt_rand(1,2)){
                                case 1:
                                    $value = $data[0] * 2;
                                    EconomyAPI::getInstance()->addMoney($player, $value);
                                    $player->sendMessage("§l§6CS §r§e>> §2Congratulations you won!");
                                break;

                                case 2:
                                    EconomyAPI::getInstance()->reduceMoney($player, $data[0]);
                                    $player->sendMessage("§l§6CS §r§e>> §cYou Lost :<!");
                                break;
                            }
                        break;

                        case 8:
                            switch(mt_rand(1,2)){
                                case 1:
                                    $value = $data[0] * 2;
                                    EconomyAPI::getInstance()->addMoney($player, $value);
                                    $player->sendMessage("§l§6CS §r§e>> §2Congratulations you won!");
                                break;

                                case 2:
                                    EconomyAPI::getInstance()->reduceMoney($player, $data[0]);
                                    $player->sendMessage("§l§6CS §r§e>> §cYou Lost :<!");
                                break;
                            }
                        break;

                        case 9:
                            switch(mt_rand(1,2)){
                                case 1:
                                    $value = $data[0] * 2;
                                    EconomyAPI::getInstance()->addMoney($player, $value);
                                    $player->sendMessage("§l§6CS §r§e>> §2Congratulations you won!");
                                break;

                                case 2:
                                    EconomyAPI::getInstance()->reduceMoney($player, $data[0]);
                                    $player->sendMessage("§l§6CS §r§e>> §cYou Lost :<!");
                                break;
                            }
                        break;

                    }
                }else{
                    $player->sendMessage("§l§6CS §r§e>> §fYou don't have enough money");
                }
            }else{
                $player->sendMessage("§l§6CS §r§e>> §fAmount you can enter is min $" . $this->getConfig()->get("minimum_amount") . " and max $" . $this->getConfig()->get("maximum_amount"));
            }

        });
        $form->setTitle($this->getConfig()->get("money_betUI"));
        $form->addInput("§eEnter the amount");
        $player->sendForm($form);
        return $form;
    }

    public function numbergame($player){
        $form = new CustomForm(function (Player $player, array $data = null){
            if($data === null){
                return true;
            }
            $money = EconomyAPI::getInstance()->myMoney($player);
            if($data[0] <= 10){
                if($data[1] >= $this->getConfig()->get("minimum_amount") and $data[0] <= $this->getConfig()->get("maximum_amount")){
                    if($money >= $data[1]){
                        $number = random_int(1,10);
                        if($data[0] == $number){
                            $value = $data[1] * 2;
                            EconomyAPI::getInstance()->addMoney($player, $value);
                            $player->sendMessage("§l§6CS §r§e>> §2Congratulations you won!");
                        }else{
                            EconomyAPI::getInstance()->reduceMoney($player, $data[1]);
                            $player->sendMessage("§l§6CS §r§e>> §cYou Lost :<!");
                        }
                    }else{
                        $player->sendMessage("§l§6CS §r§e>> §fYou don't have enough money");
                    }
                }else{
                    $player->sendMessage("§l§6CS §r§e>> §fAmount you can enter is min $" . $this->getConfig()->get("minimum_amount") . " and max $" . $this->getConfig()->get("maximum_amount"));
                }
            }else{
                $player->sendMessage("§l§6CS §r§e>> §fPlease enter the number between 1-10");
            }
        });
        $form->setTitle($this->getConfig()->get("number_gameUI"));
        $form->addInput("§eEnter the number from 1-10");
        $form->addInput("§eEnter the amount");
        $player->sendForm($form);
        return $form;
    }

    public function coinflip($player){
        $form = new CustomForm(function (Player $player, array $data = null){
            if($data === null){
                return true;
            }
            $money = EconomyAPI::getInstance()->myMoney($player);
            if(strtolower($data[0]) == "heads"){
                if($data[1] >= $this->getConfig()->get("minimum_amount") and $data[1] <= $this->getConfig()->get("maximum_amount")){
                    switch(mt_rand(1,2)){
                        case 1:
                            $value = $data[1] * 2;
                            EconomyAPI::getInstance()->addMoney($player, $value);
                            $player->sendMessage("§l§6CS §r§e>> §2Congratulations you won!");
                        break;

                        case 2:
                            EconomyAPI::getInstance()->reduceMoney($player, $data[1]);
                            $player->sendMessage("§l§6CS §r§e>> §cThe coin landed on tails :<");
                        break;
                    }
                }else{
                    $player->sendMessage("§l§6CS §r§e>> §fAmount you can enter is min $" . $this->getConfig()->get("minimum_amount") . " and max $" . $this->getConfig()->get("maximum_amount"));
                }
            }elseif(strtolower($data[0]) == "tails"){
                if($data[1] >= $this->getConfig()->get("minimum_amount") and $data[1] <= $this->getConfig()->get("maximum_amount")){
                    switch(mt_rand(1,2)){
                        case 1:
                            $value = $data[1] * 2;
                            EconomyAPI::getInstance()->addMoney($player, $value);
                            $player->sendMessage("§l§6CS §r§e>> §2Congratulations you won!");
                        break;

                        case 2:
                            EconomyAPI::getInstance()->reduceMoney($player, $data[1]);
                            $player->sendMessage("§l§6CS §r§e>> §cThe coin landed on heads :<");
                        break;
                    }
                }else{
                    $player->sendMessage("§l§6CS §r§e>> §fAmount you can enter is min $" . $this->getConfig()->get("minimum_amount") . " and max $" . $this->getConfig()->get("maximum_amount"));
                }
            }else{
                $player->sendMessage("§l§6CS §r§e>> §fPlease enter heads or tails");
            }
        });
        $form->setTitle($this->getConfig()->get("coin_flipUI"));
        $form->addInput("§eEnter heads or tails");
        $form->addInput("§eEnter the amount");
        $player->sendForm($form);
        return $form;
    }
}
