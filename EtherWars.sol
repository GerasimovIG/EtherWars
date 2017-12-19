pragma solidity^ 0.4.0;

contract EtherWars{
/*********************ПЕРЕМЕННЫЕ********************************/
    address sender;
    mapping (address => uint) playerBalances;
    mapping (address => bool) warCondition;
    
    
    
/********************ФУНКЦИИ****************************/    
    function EtherWars() payable public{
        /*Такой конструктор с PayAble необходимо иметь, чтобы контракт мог высылать эфиры*/
    }
    
    function transferEther () public payable{
        playerBalances[msg.sender] += msg.value;
        
    }
    
    function getBalance() view public returns (uint){
        return this.balance;
    }
    
    function receiveEther (uint _spendTreasury) public {
        require  (playerBalances[msg.sender]>= _spendTreasury);
        msg.sender.transfer(_spendTreasury);
    }
    
    function attackEnemy(address _enemy) public view {
        require( warCondition[_enemy] == false);
        warCondition[_enemy] == true;
        warCondition[msg.sender] == true;
    }
    
  
}

