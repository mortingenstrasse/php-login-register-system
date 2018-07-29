<?php
	require 'config.php';
	if(empty($_SESSION['name']))
		header('Location: login.php');
?>

<!DOCTYPE html>
<head><title>Soundtrackistanbul Downloads
</title></head>
	<style>
	html, body {
		margin: 1px;
		border: 0;
	}
	body{
		color: #666666;
		background-color: #f9f8f6;
		font-family: Georgia, times, serif;
		line-height: 1.4em;
		margin: 0px;
	}
	.wrapper{
		width: 940px;
		margin: 20px auto 20px auto;
		border: 2px solid #000000;
		background-color: #ffffff;
	}
	section.downloads{
		float: left;
		width: 740px;
		border-right: 1px solid #eeeeee;
	}
	article{
		clear: both;
		overflow: auto;
		width: 100%;
	}
	hgroup{
		margin-top: 40px;
	}
	figure{
		float: left;
		width: auto;
		height: 320px;
		padding: 5px;
		padding-top: 40px;
		margin: 20px;
		border: 1px solid #eeeeee;
	}
	figcaption{
		font-size: 90%;
		text-align: left;
	}



	.buttonA {
    background-color: #e88a20; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    margin: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
 

}
.buttonA:hover{
background-color: #c46c09;

}
	.buttonB {
    background-color: #d62020; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    margin: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
.buttonB:hover{
background-color: #931414;

}
	.buttonC {
    background-color: #2ebaf2; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    margin: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
.buttonC:hover{
background-color: #208ab5;

}
	.buttonD {
    background-color: #4f2de5; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    margin: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
.buttonD:hover{
background-color: #38219e;

}
	.buttonE {
    background-color: #c6c42f; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    margin: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
.buttonE:hover{
background-color: #adab16;
}

	</style>
<body>
	<div align="center">
		<div style=" border: solid 1px #313131; " align="left">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				}
			?>
			<div style="background-color:#313131; color:#FFFFFF; padding:10px;"><b><?php echo $_SESSION['name']; ?></b></div>
			<div style="margin: 15px">
				Welcome <?php echo $_SESSION['name']; ?> <br>
				Your email adress: <?php echo $_SESSION['email']; ?> <br>
				<a href="update.php">Update</a> <br>
				<a href="logout.php">Logout</a>
			</div>
		</div>
	</div>
			<div class="wrapper">
				<h1>Downloads</h1>
				<section class="downloads">
					<article>
						<figure>
							<img src="/soundtrackistanbul/images/kilis.png" alt="kilis symphony orchestra vst-au"style="height: 200px;"/>
							<figcaption>Kilis Symphony Orchestra</figcaption>
						</figure>
							<hgroup>
								<h2>Kilis Symphony Orchestra</h2>
								<h3>Choose your system</h3>
							</hgroup>
							<a href="http://bit.ly/2iCwL8b" class="buttonA">Apple Mac AU</a>
							<a href="http://bit.ly/2hwP7po" class="buttonB">Apple Mac VST</a>
							<a href="http://bit.ly/2hwRtof" class="buttonC">Windows 64Bit VST</a>
							<a href="http://bit.ly/2hzLali" class="buttonD">Windows 32Bit VST</a>

					</article>
					<article>
						<figure>
							<img src="/soundtrackistanbul/images/studio-a.jpg" alt="Studio-a SynthSampler"style="height: 200px;"/>
							<figcaption>Studio-a</figcaption>
						</figure>
							<hgroup>
								<h2>Studio-a</h2>
								<h3>Choose your system</h3>
							</hgroup>
							<a href="http://bit.ly/2enWKyl" class="buttonA">Apple Mac AU</a>
							<a href="http://bit.ly/2fHJWky" class="buttonC">Windows 64Bit VST</a>
					</article>
					<article>
						<figure>
							<img src="/soundtrackistanbul/images/astro.png" alt="Astrophysics Vst - Au"style="height: 200px;"/>
							<figcaption>Astrophysics</figcaption>
						</figure>
							<hgroup>
								<h2>Astrophysics Effects and Drums</h2>
								<h3>Choose your system</h3>
							</hgroup>
							<a href="https://www.dropbox.com/s/yvwqey01zvxtwf6/astrophysics-mac.zip?dl=0" class="buttonA">Apple Mac AU</a>
							<a href="https://www.dropbox.com/s/t1bhswwrmhr44m0/Astrophysics-win64.zip?dl=0" class="buttonC">Windows 64Bit VST</a>
							<a href="https://www.dropbox.com/s/tl1cyxjpgavvm7s/Astrophysics-win32bit.zip?dl=0" class="buttonD">Windows 32Bit VST</a>
					</article>
					<article>
						<figure>
							<img src="/soundtrackistanbul/images/ka-synth.png" alt="Ka-22 Synthesizer - Au"style="height: 200px;"/>
							<figcaption>KA-22 Synthesizer(BETA)</figcaption>
						</figure>
							<hgroup>
								<h2>KA-22 Synthesizer(BETA)</h2>
								<h3>Choose your system</h3>
							</hgroup>
							<a href="http://bit.ly/2ciCU6Q" class="buttonB">Apple Mac VST</a>
							<a href="http://bit.ly/2dbAQxy" class="buttonC">Windows 64Bit VST</a>
					</article>
					<article>
						<figure>
							<img src="/soundtrackistanbul/images/saffron.jpg" alt="Saffron Instrument Pack Vst - Au"style="height: 200px;"/>
							<figcaption>Saffron Instrument Pack</figcaption>
						</figure>
							<hgroup>
								<h2>Saffron Instrument Pack</h2>
								<h3>Choose your system</h3>
							</hgroup>
							<a href="https://www.dropbox.com/s/78g4m9x9j3r7vgr/Saffron%20Instrument%20Pack%20for%20Macos.zip?dl=0" class="buttonA">Apple Mac AU</a>
							<a href="https://www.dropbox.com/s/eolftdnk9qonexp/Saffron%20Instrument%20Pack%20for%20Windows.zip?dl=0" class="buttonC">Windows 64Bit VST</a>
							<a href="https://www.dropbox.com/s/t5k7zjf8k8635xs/Saffron%2032%20Bit.zip?dl=0" class="buttonD">Windows 32Bit VST</a>
					</article>
					<article>
						<figure>
							<img src="/soundtrackistanbul/images/bosphy2.png" alt="Bosphy Bass Vst - Au"style="height: 200px;"/>
							<figcaption>Bosphy Bass Instruments</figcaption>
						</figure>
							<hgroup>
								<h2>Bosphy Bass Instruments</h2>
								<h3>Choose your system</h3>
							</hgroup>
							<a href="https://www.dropbox.com/s/xhdu5axjgisw6lv/Bosphy%20Bass64%20bit%20mac-%20au.zip?dl=0" class="buttonA">Apple Mac AU</a>
							<a href="https://www.dropbox.com/s/ak8yden9aftjuq3/Bosphy%20Bass64bit-windows.zip?dl=0" class="buttonC">Windows 64Bit VST</a>
							<a href="https://www.dropbox.com/s/7dpdu16qn7gioef/Bosphy%20Bass32%20bit%20windows.zip?dl=0" class="buttonD">Windows 32Bit VST</a>
					</article>
					<article>
						<figure>
							<img src="/soundtrackistanbul/images/bosphy1.png" alt="Bosphy Bass Old Version"style="height: 200px;"/>
							<figcaption>Bosphy Bass Old Version</figcaption>
						</figure>
							<hgroup>
								<h2>Bosphy Bass Old Version</h2>
								<h3>Choose your system</h3>
							</hgroup>
							<a href="http://bit.ly/2ciCU6Q" class="buttonE">Download AU/VST</a>
					</article>
				</section>


			</div>
</body>
</html>
