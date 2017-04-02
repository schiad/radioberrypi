<HTML>
	<HEAD>
		<TITLE>
		RADIO
		</TITLE>
	</HEAD>

	<BODY>
		<H3 align="center"> Radio controller. </H3>
		<?php
			$USER = "salim";
			if (isset($_GET["action"])) {
				switch ($_GET['action']) {
					case 'INTER':
						include 'shutdown.php';
						exec("sudo -u $USER screen -fn -dmS radio mplayer http://direct.franceinter.fr/live/franceinter-midfi.mp3");
						echo "<P>Lancement de la radio France Inter.</P>";
						break;
					case 'CULTURE':
						include 'shutdown.php';
						exec("sudo -u $USER screen -fn -dmS radio mplayer http://direct.franceculture.fr/live/franceculture-midfi.mp3");
						echo "<P>Lancement de la radio France Culture.</P>";
						break;
					case 'RTL':
						include 'shutdown.php';
						exec("sudo -u $USER screen -fn -dmS radio mplayer  http://streaming.radio.rtl.fr/rtl-1-48-192");
						echo "<P>Lancement de la radio RTL.</P>";
						break;
					case 'INFO':
						include 'shutdown.php';
						exec("sudo -u $USER screen -fn -dmS radio mplayer http://direct.franceinfo.fr/live/franceinfo-midfi.mp3");
						echo "<P>Lancement de la radio France Info.</P>";
						break;
					case 'SHUTDOWN':
						include 'shutdown.php';
						echo "<P>Radio eteinte.</P>";
						break;
				}
			}
		?>
		<H4 align="center">Pour chager de radio ou eteindre clicker ci-dessous:</H4>
		<DIV class="global">
			<DIV class="line">
				<FORM action="" method="get">
				<INPUT type="submit" name=action value="CULTURE">
				</FORM>
			</DIV>
			<DIV class="line">
				<FORM action="" method="get">
				<INPUT type="submit" name=action value="INFO">
				</FORM>
			</DIV>
			<DIV class="line">
				<FORM action="" method="get">
				<INPUT type="submit" name=action value="RTL">
				</FORM>
			</DIV>
			<DIV class="line">
				<FORM action="" method="get">
				<INPUT type="submit" name=action value="INTER">
				</FORM>
			</DIV>
			<DIV class="line">
				<FORM action="" method="get">
				<INPUT type="submit" name=action value="SHUTDOWN">
				</FORM>
			</DIV>
		</DIV>
	</BODY>
</HTML>
