<?php
	include("header.php");
?>

<section class="left" id="blogg">
	<h2>Blogg</h2>
<article>
		<h3>Strider och bakgrund - 2017-01-26</h3>
		<h4>Nytt stridssystem</h4>
		<p>Sedan vi senast hördes har stridssystemet genomgått ordentliga revideringar. Jag har skrotat den inledande idén om handlingspoäng och i stället valt att köra på ett enklare system där varje deltagare i striden har en huvudhandling och en sidohandling. Dessutom delas stridsrundan upp i fyra faser - avståndsstrid, närstrid, sejd, och övrigt. Varje deltagare i striden kan agera i en runda, beroende på vad för typ av handling de tänker göra. Avståndsstrid görs före närstrid, som görs före sejd, och så vidare. I varje fas agerar deltagarna i initiativordning.</p>
		
		<h4>Bakgrundstabeller</h4>
		<p>Utöver strider har jag också arbetat på ett system för att ta fram rollpersonernas bakgundshistorier. Det finns sammanlagt sex tabeller, uppledat över tre faser i livet - barn, ungdom, och ung vuxen. Varje livfas har en tabell för omvälvande händelser, samt en tabell mer unik för just den fasen. De flesta resultat i tabellen är tämligen mörka och deprimerande, och de rollpersoner jag testat att skapa hittills har haft minst sagt en tuff uppväxt. Jag planerar att revidera tabellerna något och blanda upp med lite mindre hemska resultat. Dock är världen som Skrômt utspelar sig i rätt mörk, och rollpersonerna kommer till stor del vara trasiga människor på vägen mot vansinne. Men det behöver ju inte dras till sin spets.</p>
		<hr>
	</article>

	<article>
		<h3>Hello world - 2017-01-16</h3>
		<p>Så det här är Skrômts alldeles egna lilla blogg. Här kommer jag skriva om saker som har med spelet eller hemsidan att göra.</p>
		
		<h4>Hemsidan</h4>
			<p>När det kommer till hemsidan finns några punkter jag vill prioritera i första hand. Först har vi mobilanpassningen. I nuläget fungerar sidan dugligt på mobila plattformar. Det är inte jättevackert, men det är inte en fullständig katastrof. Den närmaste veckan tänkte jag försöka se till att det till och med ser bra ut också på små skärmar. Eftersom skromt.nu också är ett sätt för mig att fräscha upp mina html- och css-kunskaper (och passa på att lära mig lite Javascript, php och annat kul) kan det dröja lite innan vissa tilltänkta funktioner faktiskt dyker upp.</p>
			<p>Min andra prioritering är att lägga in ett fält där ni helt enkelt kan skriva in er mailadress, så läggs ni automatiskt till på en mailinglista. Det vore ju rätt smidigt, tänker jag.</p>

		<h4>Spelet</h4>
			<p>Högsta prioritet för själva spelet är i nuläget att bestämma ett ordentligt system för strider. De regler som används i nuläget är kraftigt inspirerade av <a href="http://frialigan.se/spel/coriolis/">Coriolis</a> (kolla in det. Det är grymt), men jag får se om det får stanna eller inte. Jag har lite andra tankar på system som nog skulle fungera lika bra eller bättre. Men mer om det i framtiden.</p>
			<p>En annan prioritering är ju att börja skriva ordentliga världsbeskrivningar. Jag har en hel del tankar kring det i huvudet, men jag har fortfarande inte riktigt skrivit ned något av det. Jag funderar på att ha en stadig regelgrund att stå på innan jag ger mig in för mycket på att beskriva världen.</p>
	</article>
</section>

<?php
	include("footer.php");
?>