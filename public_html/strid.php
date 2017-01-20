<?php
	include("header.php");
?>

<style type="">
	#strid_btn{
		text-decoration: underline;
	}
</style>

<!--<section class="left" id="rundor_och_handlingar">
	<h2>Rundor och handlingar</h2>
	<article>
		<p>Strider är uppbyggda kring rundor. En runda är en kort men odefinerad tidsperiod under vilken alla deltagare i striden agerar i tur och ordning (se Vem börjar? nedan). När det är en deltagares tur har hon möjlighet att genomföra en eller flera handlingar. Det finns fyra typer av handlingar att välja bland under ens tur: Långa handlingar, Normala handlingar, Korta handlingar, och Fria handlingar. De olika typerna av handlingar kostar olika många Handlingspoäng att utföra (se avsnittet Handlingspoäng nedan). Utöver de ovanstående fyra handlingarna finns dessutom en femte typ, Reaktiva handlingar, som kan göras under någon annans tur.</p>
	</article>
	
	<article>
	<h3>Vem börjar?</h3>
		<p>För att avgöra vem som agerar först inleds striden med att alla slår ett initiativ. Slå initiativvärdet + 1T10. Den som slår högst agerar först, följt av den som slog näst högst, och så vidare. Om två deltagare får samma initiativ börjar den med högst initiativvärde. Om också det är samma agerar rollpersoner före spelledarpersoner. Om det rör sig om två rollpersoner bestämmer spelarna vem av dem som agerar först.</p>
	</article>

	<article>
		<h3>Handlingspoäng</h3>
		<p>Under en runda har varje deltagare i striden tre handlingspoäng (HP) var. Olika handlingar kostar olika mycket HP. En handling som kostar mer HP än du har tillgängligt är inte möjlig att genomföra. Du behöver inte använda alla HP under din tur, utan kan välja att spara dem rundan ut. Sparade HP kan endast användas till reaktiva handlingar. När rundan är slut förlorar alla deltagare sina kvarvarande HP, och får tre nya när nästa runda börjar. Det går alltså inte att spara HP mellan rundor, om rollpersonen inte har en styrka som tillåter det.</p>
	</article>
	
	<article>
		<h4>Varelser och handlingspoäng</h4>
		<p>Vissa varelser är oerhört snabba och kan agera fler gånger än en vanlig människa. Sådana varelser kan ha fler än 3 HP.</p>
	</article>

	<article>
		<h3>Lista på handlingar</h3>
		<ul><b>Långsamma handlingar kostar 3 HP</b>
			<li>Sikta och skjuta (+20% på slaget)</li>
			<li>Skjuta automateld</li>
		</ul>

		<ul><b>Normala handlingar kostar 2 HP</b>
			<li>Skjuta</li>
			<li>Slagsmål</li>
		</ul>

		<ul><b>Snabba handlingar kostar 1 HP</b>
			<li>Slarvigt skott (-20% på slaget)</li>
			<li>Ta skydd</li>
			<li>Plocka upp något</li>
			<li>Ta fram/byta vapen</li>
			<li>Röra sig 10 meter</li>
		</ul>

		<ul><b>Fria handlingar kostar 0 HP</b>
			<li>Ropa något kort</li>
		</ul>

		<ul><b>Reaktiva handlingar kostar olika antal HP</b>
			<li>Försvar i närstrid 1HP</li>
			<li>Kasta sig i skydd 2HP</li>
			<li>Motattack 1 HP</li>
		</ul>
	</article>
</section>-->

<section class="left" id="rundor_och_handlingar">
	<h2>Rundor och handlingar</h2>
	<article>
		<p>För att göra strider mer lätthanterliga och enkla att överskåda delas de in i rundor. Varje runda är en odefinierad men kort tidsperiod under vilken alla deltagare i striden agerar i tur och ordning (se Vem börjar? nedan). Den person som har initiativet får agera och göra en handling, sedan går turen vidare till nästa person i initiativordningen. När alla deltagare i striden har agerat en gång börjar en ny runda och personen med högst initiativ börjar agera igen.</p>

		<p>Det finns två huvudsakliga typer av strid - närstrid och avståndsstrid. Är personerna på såpass nära avstånd att de kan nå varandra räknas striden som närstrid, även om deltagarna använder skjutvapen (se regler för hur skjutvapen fungerar i närstrid nedan).</p>
	</article>
	<article>
		<h3>Vem börjar?</h3>
		<p>För att avgöra vem som agerar först inleds striden med att alla slår ett initiativslag. Slå initiativvärdet + 1T10. Den som slår högst agerar först, följt av den som slog näst högst, och så vidare. Om två deltagare får samma initiativ börjar den med högst initiativvärde. Om också det är samma agerar rollpersoner före spelledarpersoner. Om det rör sig om två rollpersoner bestämmer spelarna vem av dem som agerar först.</p>
	</article>
	<article>
		<h3>Närstrid</h3>
		<p>Rollfigurerna agerar i iniatitivordning. Personen som har initiativet väljer hur hon agerar. Om hon väljer att attackera en annan rollfigur får denne välja mellan att försöka undvika eller slå tillbaka.</p>
		<ul><b>Om försvararen slår tillbaka:</b>
			<li>Lyckas båda men anfallaren slår högst gör <em>anfallaren skada.</em></li>
			<li>Lyckas båda men försvararen slår högst gör <em>båda skada.</em></li>
			<li>Lyckas bara den ena gör <em>den som lyckdes skada.</em></li>
			<li>Misslyckas båda gör <em>ingen skada.</em></li>
		</ul>

		<ul><b>Om försvararen undviker eller parerar:</b>
			<li>Lyckas båda men anfallaren slår högst gör <em>anfallaren skada.</em></li>
			<li>Lyckas båda men försvararen slår högst <em>undviker försvararen attacken.</em></li>
			<li>Lyckas bara anfallaren gör <em>anfallaren skada.</em></li>
			<li>Lyckas bara försvararen <em>undviker försvararen attacken.</em></li>
			<li>Misslyckas båda <em>träffar inte attacken.</em></li>
		</ul>
	</article>

	<article>
		<h4>Manövrar</h4>
		<p>Rollfiguren som agerar kan också välja att göra en så kallad manöver. En manöver innebär att göra någonting annat än att försöka göra fysisk skada på sin motståndare med en attack. Det kan röra sig om att greppa eller avväpna någon, ta sig loss från ett grepp, knuffa en person så hon faller till marken eller exempelvis ut i vägen eller ned från en klippa. Personen som utsätts för manövern får som vanligt välja att slå tillbaka eller försvara sig. I de fall anfallaren gör skada enligt punktlistan ovan lyckas manövern. I de fall försvararen gör skada lyckas hon göra skada också under manövern. En manöver kan alltså lyckas samtidigt som den som utför manövern tar skada. Om försvararen parerar misslyckas manövern om försvararen vanligtvis skulle undvika attacken.</p>

		<p>I de fall det är logiskt för den som utsätts för en manöver att ta skada kan spelledaren välja att dela ut skada.</p>
	</article>

	<article>
		<h4>Skjutvapen i närstrid</h4>
		<p>Det är möjligt att försöka använda ett skjutvapen också i närstrid. Om ens motståndare är fri att röra sig är det dock svårt att träffa. Den som använder skjutvapen i närstrid får -10% på sitt attackslag. Försvararen är fri att slå tillbaka eller undvika som vanligt.</p>
	</article>

	<article>
		<h3>Avståndsstrid</h3>
		<p>När en rollfigur avfyrar ett skjutvapen från avstånd slås inget motsatt slag. Slår den som skjuter ett lyckat slag träffar attacken och gör skada.</p>
	</article>

	<article>
		<h4>Modifikationer</h4>
		<ul><em>Det finns ett antal situationer som modifierar en avståndsattack chans att lyckas:</em>
		<li><b>Målet är i skydd.</b> Om den skytten försöker träffa befinner sig i skydd får attackslaget en minusmodifikation. Är målet delvis i skydd får slaget -20%. Är målet helt i skydd så att skytten inte ser det får slaget -50%.</li>
		<li><b>Sikta.</b> Skytten kan välja att sikta. Detta ger +20% på nästa rundas skott, givet att skytten inte tar skada eller gör någon annan handling (exempelvis genom att undvika en attack eller förflytta sig).</li>
		<li><b>Point-blank.</b> Om skytten befinner sig på väldigt nära avstånd från ett stilla mål får attackslaget +50%. Om målet är fri att röra sig får skytten ingen bonus och striden räknas som närstrid. Försvararen kan då välja att slå tillbaka eller undvika som vanligt.</li>
		<li><b>Målet rör sig snabbt.</b> Attackslaget får -20%.</li>
		<li><b>Skjuta in i närstrid.</b> Attackslaget får -20%. Misslyckas slaget exceptionellt träffas någon annan än det tilltänkta målet.</ul>
	</article>

	<article>
		<h3>Automatvapen</h3>
		<p>Används ett helautomatiskt vapen kan skytten välja att meja. När man mejar väljer man att sänka sannolikheten att träffa sitt mål mot att göra högre skada om man skulle träffa. För varje -10% skytten väljer att modifiera sitt färdighetsvärde med ökar skadan med 1.</p>

		<blockquote><p>Exempel: Ulric har ett helautomatiskt gevär och väljer att meja. Han väljer att sänka sitt färdighetsvärde med 30%, och hans vapen som vanligtvis gör 1T10 i skada gör den här attacken alltså 1T10+3.</p></blockquote>
	</article>

</section>

<section class="left" id="sar_och_lakning">
	<h2>Sår och läkning</h2>
	<article>
		<h3>Att bli skadad</h3>
		<p>När någon attackerar rollpersonen finns en risk att hon blir skadad. För varje skada rollpersonen tar kryssas en box under Skada på rollformuläret. Boxarna kryssas från vänster en rad i taget. När första raden är full börjar du kryssa nästa rad, också den från vänster. När alla boxar är kryssade är rollpersonen utslagen, och slås antingen medvetslös eller dör.</p>
	</article>

	<article>
		<h3>Skadenivåer</h3>
		<p>Det finns sex nivåer av skada i spelet: <em>Blåslagen, Mörbultad, Skadad, Svårt skadad, Sargad, och Död/Medvetslös</em>. Alla nivåer utom Död/Medvetslös har tre boxar. När de boxarna har fyllts börjar man fylla nästa nivå. När man börjat fylla den tredje nivån (Skadad) börjar rollpersonen få avdrag på sina färdighetsslag på grund av sina skador. Skadad ger -10%, Svårt skadad ger -20%, och Sargad ger -30%. Dessa modifikationer är inte kumulativa med varandra.</p>
		<blockquote><p>Exempel: Mark har inga skador. Han hamnar i bråk på krogen och får en knytnäve i ansiktet. Anfallaren slår 4 i skada och Marc kryssar fyra boxar. Han har nu fyllt alla boxar på Blåslagen (och ska slå för kritisk skada, se nedan). Nästa skada han får tar honom till nivån Mörbultad.</p></blockquote>
	</article>

	<article>
		<h3>Kritiska skador</h3>
		<p>När en ny skadenivå börjar kryssas finns risk att rollpersonen får en kritisk skada. Varje skadenivå har en modifikation för risken att få en kritisk skada. Slå Tålighet med den aktuella skadenivåns modifikation som enda modifikation på slaget. Om slaget misslyckas får rollpersonen en kritisk skada. Ett exceptionell misslyckande innebär att skadan blir permanent och kroppsdelen som tar skadan är förstörd. När en skada blir permanent sänks någon av färdigheterna Styrka, Rörlighet, Fingerfärdighet, eller Slagsmål med 20%. Dessutom kan den färdigheten inte höjas till mer än 90% i framtiden.</p>

		<p>Kritiska skador är skador i stil med brutna ben, krossade fingrar och tår, trasiga inre organ (som inte är direkt livshotande), och liknande skador som gör oerhört ont, men som inte utgör ett direkt hot mot rollpersonens liv. Ju mer skadad en rollperson är desto större är risken att hon får en kritisk skada när hon tar ytterligare skada. Kritiska skador ger ett avdrag på -20% på fysiska handlingar så länge skadan finns kvar. Skadan är läkt efter 1T6+5 dygn. En rollperson kan ha flera kritiska skador samtidigt. Vad den kritiska skadan är för något är upp till spelgruppen att bestämma. Det bör vara något passande för situationen när skadan orsakats.</p>
		<blockquote><p>Exempel: Marc är fortfarande i slagsmål på krogen. Hans motståndare svingar en stol i hans riktning och han lyfter armarna i försvar. Attacken gör 5 i skada, och Marc landar på sammanlagt 9 skada, på nivån Skadad. Han når en ny skadenivå och slår Tålighet för kritisk skada. Han misslyckas och spelaren beskriver hur Marc stukar två fingrar av attacken. Han slår 1T6+5 för att se hur länge skadan håller i sig och får 7. Marc kommer alltså ha -20% på fysiska färdighetsslag i 7 dygn.</p></blockquote>
	</article>

	<article>
		<h3>Dödliga sår</h3>
		<p>När en rollperson tar en skada som överstiger rollpersonens sårtröskel tar hon ett dödligt sår. När en rollperson får ett dödligt sår slår man för Viljestyrka. Med ett lyckat slag kan rollpersonen fortsätta agera som vanligt i striden. Om slaget misslyckas hamnar rollpersonen i chock och kan inte agera mer i striden förrän hon lyckas med ett slag för Viljestyrka eller någon ger henne första hjälpen. Ett exceptionellt misslyckade leder till omedelbar död för rollpersonen.</p>

		<p>En rollperson med ett dödligt sår som når skadenivån Död/Medvetslös behöver slå ett slag för Tålighet varje runda för att inte dö av sina skador. Ett lyckat slag mot Medicin (för att ge första hjälpen) läker 1 skada hos rollpersonen. Därefter behöver hon slå för Tålighet en gång varje timme. Misslyckas slaget tar hon 1 skada och befinner sig än en gång på nivån Död/Medvetslös i behov av första hjälpen.</p>
		<blockquote><p>Exempel: Ulric har sårtröskel 8. En kula i bröstet ger 10 i skada och överstiger hans sårtröskel. Ulric kryssar Dödligt sår på rollformuläret och slår Viljestyrka för att inte gå in i chock. Han misslyckas. Han kan nu inte göra något annat i strid än att försöka slå Viljestyrka eller få första hjälpen.</p></blockquote>
	</article>

	<article>
		<h3>Läka skada</h3>
		<p>Normala skador läker 1T4 per dygn rollpersonen vilar och tar hand om sina skador. Har rollpersonen varit aktiv under dygnet halveras mängden läkta skador efter slaget. Med hjälp av medicinsk utrustning kan skador läkas snabbare.</p>
		
		<h3>Läka kritiska skador</h3>
		<p>Kritiska skador läks efter 1T6+5 dagar efter att de åsamkats.</p>
		
		<h3>Läka dödliga sår</h3>
		<p>För att läka en rollperson från ett dödligt sår behöver någon först lyckas med första hjälpen genom att slå Medicin. Därefter behövs ytterligare ett slag för Medicin slås där medicinsk utrustning finns närheten, eller ett slag med minusmodifikationer för att göra ingreppet utan utrustning. Lyckas det andra slaget mot Medicin är rollpersonen tillräckligt stabiliserad för att inte längre befinna sig i livshotande tillstånd. Hon kan sudda det dödliga såret från rollformuläret och läker nu skada som vanligt. Misslyckas slaget tar rollpersonen 1 skada och befinner sig än en gång på nivån Död/medvetslös och är i behov av första hjälpen. Är slaget exceptionellt misslyckat dör rollpersonen omedelbart. Ett exceptionellt lyckat slag läker det dödliga såret, och rollpersonen läker 1T4 skada.</p>
	</article>

</section>

<?php
	include("footer.php");
?>