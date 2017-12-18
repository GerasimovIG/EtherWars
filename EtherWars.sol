pragma solidity^ 0.4.0;

contract EtherWars{
    address sender;
    
    function EtherWars() payable public{
        
    }
    
    function receiveEther () public payable{
    }
    
    function getBalance() view public returns (uint){
        return this.balance;
    }
    
    function transferEther () public {
        msg.sender.transfer(50000000);
    }
    
    
}

