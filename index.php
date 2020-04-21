<?php include('include/header.php'); ?>
<?php include('include/menu.php'); ?>
<!-- Banner -->
<section id="banner">
	<div class="inner">
		<br><?php if ($adCount>0) { echo $bannerAd[$randomAdNumber]; } ?>
		<br><h3><img src="images/logo_transparent.png" alt="" width="150" /></h3>
		<h2>TRUSTAKING.COM </h3>
		<p>The trusted home <br> of cold staking</p>
		<ul class="actions special">
			<li><a href="http://solaris.trustaking.com" class="image-link"><img src="images/coin_logo-solaris.png" alt="Solaris" width="50" height="50"></a></li>
			<li><a href="http://x42.trustaking.com"><img src="images/coin_logo-x42.png" alt="X42" width="100" height="50"></a></li>
			<li><a href="http://city.trustaking.com"><img src="images/coin_logo-city.png" alt="City" width="50" height="50"></a></li>
			<li><a href="http://xds.trustaking.com"><img src="images/coin_logo-xds.png" alt="XDS" width="50" height="50"></a></li>
			<li><a href="http://ams.trustaking.com"><img src="images/coin_logo-amsterdamcoin.png" alt="AMS" width="50" height="50"></a></li>
<!--
			<li><a href="http://impleum.trustaking.com"><img src="images/coin_logo-impleum.png" alt="IMPL" width="50" height="50"></a></li>
-->
		</ul>
	</div>
	<p><br /><a href="https://donations.trustaking.com/">If you appreciate our services, send us a tip.</a><br /></p>
</section>

<!-- Main -->
<article id="main">
<!-- One -->
	<section id="one" class="wrapper style1 special">
		<div class="inner">
			<header class="major">
				<h2>Full Node as a Service</h2>
				<p><b>Effortless cold staking with no technical knowledge required</b></p>
				<p>To see how easy it is to get started, please see our how-to guides by visiting this <b><u><a href="how-to.php#trustaking">page</a></b></u>
				<p>This service is being provided in parts <b>free of charge</b> as we are trialling a donation/tips based business model. We will rely on these tips and donations as long as possible, giving everyone the opportunity to use cold staking. If you appreciate our service, please donate on a regular basis so that we can keep the service running. Please visit <b><u><a href="https://donations.trustaking.com/">donations.trustaking.com</a></b></u> if you want to help.<p> 
			</header>
			<ul class="icons major">
				<li><span class="icon fa-diamond major style1"><span class="label">Lorem</span></span></li>
				<li><span class="icon fa-heart-o major style2"><span class="label">Ipsum</span></span></li>
				<li><span class="icon fa-code major style3"><span class="label">Dolor</span></span></li>
			</ul>
		</div>
	</section>
<!-- Two -->
	<section id="two" class="wrapper alt style2">
		<section class="spotlight">
			<div class="image"><img src="images/pic01.jpg" alt="" /></div><div class="content">
				<h2>Cold Staking</h2>
				<p>Cold Staking lets users securely delegate staking powers to “staking nodes” which contain no coins. The purpose of these “staking nodes” is to provide a dedicated resource connected to a blockchain network and stake on behalf of another wallet without being able to spend its coins. In other words, it allows users to stake offline coins.</p>
			</div>
		</section>
		<section class="spotlight">
			<div class="image"><img src="images/pic02.jpg" alt="" /></div><div class="content">
				<h2>Benefits of staking</h2>
				<p>Staking enables coin holders to earn compounding rewards in return for freezing their staked coins so they cannot be otherwise used while they are being staked. Stack those coins!</p>
			</div>
		</section>
		<section class="spotlight">
			<div class="image"><img src="images/pic03.jpg" alt="" /></div><div class="content">
				<h2>Withdraw at anytime<br />
				No Penalties</h2>
				<p>Staked Coins aren't kept on the full node, so you and only you can withdraw your coins back to your wallet at anytime. No fee's or penalties.</p>
			</div>
		</section>
	</section>
<?php include('include/footer.php'); ?>