<!DOCTYPE html>
<html>
	<head>
		<title>EtherWars</title>
		<script src="C:\Users\Ilia\node_modules\web3\dist\web3.min.js"></script>
	</head>
	<body><!---->
		<div>
			<input id="input"  type="text" >
			<button id="button">Set</button>
		</div>
		<div>
			<pre id="output"/>
		</div>
			
		

		<script type="text/javascript">
			
			var web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8545"));
			web3.eth.defaultAccount = web3.eth.accounts[0];
			//abi - application binary interface (похоже на JSON)
			var EtherWars = web3.eth.contract([
	{
		"constant": true,
		"inputs": [],
		"name": "getBalance",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [],
		"name": "receiveEther",
		"outputs": [],
		"payable": true,
		"stateMutability": "payable",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [],
		"name": "transferEther",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [],
		"payable": true,
		"stateMutability": "payable",
		"type": "constructor"
	}
]).at('0x948529181578a0bCF3a44C40863bD5b39F360Fe6'); // публикует контракт от имени адреса
			

			var input = document.getElementById("input");
			var button = document.getElementById('button');
			var output = document.getElementById('output');
			
			button.addEventListener('click', function(){
				EtherWars.transferEther(input.value, function(err, res) {
					console.log('TransferEtherOutput');
					console.log(err);
					console.log(res);
					output.innerHTML = res;
				});
			});
			
			
			buttonGet.addEventListener('click', function(){
				Tasks.taskQuantity.call(function(err, res) {
					
					Tasks.taskInformation.call(res-1, function(err, res) {
						output.innerHTML = res
					});
				});
				/*foo.getStroka.call().then(function(stroka){
				    console.log("s=%d", stroka);
				});*/
			});
		
		</script>

	
	</body>


</html>