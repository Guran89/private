<?php
	include("header.php");
?>

<style type="">
	#rp_btn{
		text-decoration: underline;
	}
</style>

<section class="left" id="fardigheter">
	<h2>Färdigheter</h2>
	<article>
		<p>Det finns 17 färdigheter i spelet. Alla färdigheter utom Sejdkonst har en grundchans, det vill säga att en rollperson kan alltid slå för en färdighet, även om hon inte har lagt några färdighetspoäng på den när rollpersonen skapades (Se <a href="rollpersonen.php#skaparollperson" class="internlink">Skapa rollperson</a>). Detta gäller dock inte Sejdkonst som kräver att man har spenderat färdighetspoäng i den för att det ska gå att slå alls.</p>

		<p>När en färdighet används sätts ett kryss i rutan vid färdigheten. En kryssad färdighet kan efter spelmötet höjas genom att spendera erfarenhetspoäng.</p>
	</article>
	
	<article>
		<h3>Fördjupningar</h3>
		<p>Vissa färdigheter har fördjupningar. En fördjupning är ett område inom en färdighet som rollpersonen är särskilt duktig på. När en färdighet når färdighetsvärde 60% får man välja en fördjupning i färdigheten. Färdigheter med färdighetsvärde 80% har två fördjupningar, och färdigheter på 90% har tre fördjupningar.</p>

		<p>När du använder en fördjupning slår du två tiotals-tärningar i stället för en. Du väljer sedan det bästa resultatet.</p>
		
		<blockquote><p>Exempel: Ulric har FV 67% i Viljestyrka med fördjupningen <em>Se igenom lögner</em>. Han intervjuar en brottsling som han tror ljuger, och slår Viljestyrka för att ta reda på om brottslingen ljuger eller inte. Han slår 2 tiotals-tärningar och 1 entals-tärning och får 23 och 83. Han väljer det lägre resultatet och lyckas med sitt slag.</p></blockquote>
	</article>

	<article>
		<h3>Lista på färdigheter</h3>
		<b><p>Rörlighet 20%</b><br>
		Används för all typ av fysisk aktivitet, såsom att simma, hoppa, springa, gömma sig, klättra, med mera. Förslag på fördjupningar: Klättra, Simma, Hoppa, Smyga, Gömma.</p>

		<b><p>Styrka 20%</b><br>
		Används när en rollperson vill använda fysisk styrka för att exempelvis lyfta, flytta eller knuffa något. Används också för att hålla fast någon i strid. Förslag på fördjupningar: Lyfta, Knuffa, Hålla fast.</p>

		<b><p>Perception 20%</b><br>
		Används för de fem sinnena. Förslag på fördjupningar: Höra, Se, Lyssna, Smaka.</p>

		<b><p>Övertyga 20%</b><br>
		Används för att övertyga någon att göra som du vill. Kan användas för bland annat hot, lurendrejeri, lögner, charm, med mera. Förslag på fördjupningar: Hota, Charma, Ljuga.</p>

		<b><p>Medicin 10%</b><br>
		Används för allt som har med medicin och läkande att göra. Kan användas bland annat för att ge första hjälpen, lägga förband, utföra kirurgi, och annat. Förslag på fördjupningar: Första Hjälpen, Kirurgi.</p>

		<b><p>Skjutvapen 10%</b><br>
		Används för alla sorters avståndsvapen, såsom gevär, pistol, pilbåge, och kastkniv. Förslag på fördjupningar: Gevär, Pistol, Pilbåge.</p>

		<b><p>Vetenskap 10%</b><br>
		Används när du vill nyttja kunskap inom det vetenskapliga fälten. Kan handla om hur termodynamik, hur gravitation fungerar i yttre rymden, eller hur människor agerar i grupp. Förslag på fördjupningar: Termodynamik, Astronomi, Folkloristik, Historia.</p>

		<b><p>Fingerfärdighet 10%</b><br>
		Används för flinka fingrar. Kan användas för att stjäla någons klocka, göra ett kort- eller mynttrick, eller för att dyrka upp ett lås. Förslag på fördjupningar: Korttrick, Låsdyrkning, Ficktjuv.</p>

		<b><p>Fordon 10%</b><br>
		Används för att framföra olika typer av fordon. Alla vuxna kan framföra en bil under normala omständigheter. Färdigheten bör endast användas när det rör sig om ett mer komplicerat fordon (såsom motorcykel eller flygplan) eller när svårigheten att framföra fordonet säkert är hög (exempelvis biljakter). Förslag på fördjupningar: Bil, Flygplan, Motorcykel, Stridsvagn.</p>

		<b><p>Vildmarksliv 10%</b><br>
		Används för att överleva i vildmarken, eller för att använda kunskaper man har nytta av i vildmarken. Det kan röra sig om att tända eldar, navigera efter stjärnhimlen, sätta upp tält, eller följa spår. Förslag på fördjupningar: Göra eld, Sätta upp tält, Hitta vatten, Jaga.</p>

		<b><p>Slagsmål 10%</b><br>
		Används i närstrid, såväl obeväpnad som med föremål och vapen. För att ta grepp på någon används Slagsmål, för att hålla kvar personen i greppen används Styrka. Förslag på fördjupningar: Obeväpnat, Kniv, Klubba, Ta grepp.</p>

		<b><p>Viljestyrka 20%</b><br>
		Används för att stå emot yttre påverkan, oavsett om det handlar om övertalning, tortyr, eller drogberoende. Används också för att se om någon ljuger. Förslag på fördjupningar: Stå emot tortyr, Se igenom lögner, Stå emot beroenden.</p>

		<b><p>Datorkunskap 20%</b><br>
		Används för att använda digital teknik, såsom datorer eller mobiltelefoner. Förslag på fördjupningar: Programmera, Hacka.</p>

		<b><p>Konstruktion 10%</b><br>
		Används för att bygga nya, eller laga existerande, saker. Färdigheten kan användas till att bygga fällor eller utrustning till gruppen, eller för att laga saker som sönder. Färdigheten kan också användas för att förfalska saker såsom identitetshandlingar eller liknande. Förslag på fördjupningar: Fällor, Laga saker, Förfalska.</p>

		<b><p>Sejdkonst 0%</b><br>
		Används för att kasta besvärjelser. Förslag på fördjupningar: Hamnskifte, Spå väder, Helande.</p>

		<b><p>Tålighet 20%</b><br>
		Används för att stå emot fysisk påfrestning och ta stryk. Används också för att stå emot drogers effekter. Förslag på fördjupningar: Tåla smärta, Tåla droger.</p>

		<b><p>Undersöka 20%</b><br>
		Används för att finna och förstå ledtrådar. Kan användas för att hitta rätt bok i ett bibliotek, eller för att lista ut hur ett pussel fungerar. Används också för att bedöma skriftliga textkällors trovärdighet. Förslag på fördjupningar: Söka information, Källkritik.</p>

</article>

</section>

<section class="left" id="styrkor_och_svagheter">
	<h2>Styrkor och Svagheter</h2>
	<article>
		<p>Rollpersonerna börjar spelet med en styrka och en svaghet.</p>
		
		<h3>Styrkor</h3>
		<p><b>Naturbegåvning.</b> Välj en färdighet. En gång per spelmöte kan du välja att vända på tärningarna, så att tiotal blir ental och tvärtom (slår du 73 kan du alltså välja att läsa slaget som 37 i stället).</p>
		<p><b>Skarpskytt.</b> Välj ett distansvapen (Pistol, gevär, etc). När du slår skada för en attack med det vapnet slår du en extra skadetärning och väljer det bästa resultatet.</p>
		<p><b>Hitta svaga punkter.</b> Välj ett närstridsvapen (kniv, svärd, klubba, obeväpnad, etc). När du slår skada för en attack med det vapnet slår du en extra skadetärning och väljer det bästa resultatet.</p>
	</article>

	<article>
		<h3>Svagheter</h3>
		<p><b>Missbrukare.</b> Rollpersonen är beroende av någon substans.</p>
		<p><b>Fobi.</b> Rollpersonen lider av en stark fobi. När rollpersonen utsätts för fobin behöver hon slå ett Viljestyrka för att inte få 1 Vansinne och -10% på alla färdighetsslag den scenen.</p>
		<p><b>Tvångstankar.</b> Rollpersonen lider av tvångstankar. När rollpersonen hamnar i en situation där tvångstankarna aktiveras (exempelvis <em>Måste tvätta händerna så snart jag blir smutsig</em>) slår hon för Viljestyrka. Om hon inte kan få utlopp för tvångstankarna slår hon Viljestyrka. Misslyckas slaget får hon 1 Vansinne och har -10% på alla färdighetsslag tills hon får utlopp för dem.</p>
		<p><b>Mardrömmar.</b> Rollpersonen lider av mardrömmar. Efter varje natts sömn slår rollpersonen för Viljestyrka. Misslyckas slaget har hon haft mardrömmar som förstört sömnen den natten. Misslyckas slaget får rollpersonen 1 Vansinne och -10% på alla färdighetsslag den dagen.</p>
		<p><b>Vek.</b> Rollpersonen kan ta mindre skada innan hon är utslagen.</p>
		<p><b>Förbannelse.</b> Det ligger en förbannelse över rollpersonen. Detaljerna är upp till spelaren och spelledaren att bestämma.</p>
	</article>	
</section>

<section class="left" id="skadebonus_och_sartroskel">
	<h2>Skadebonus och Sårtröskel</h2>
	<article>
	<p>Varje rollperson har två värden som grundar sig direkt i andra färdigheter. Den första är skadebonus (SB) som avgör hur mycket extra skada rollpersonen gör när den använder vapen som är beroende av styrka. Om ett vapen använder skadebonus i skadan står det skrivet i stil med 1T6+SB. Slå helt enkelt 1T6 och lägg till rollpersonens skadebonus.</p>

	<p>Det andra värdet är sårtröskel. Om rollpersonen tar skada över sin sårtröskel i en attack får rollpersonen ett dödligt sår och riskerar dö när hon har tagit för mycket skada.</p>
	<blockquote><p>Exempel: Ulric har sårtröskel 8 (se <a href="rollpersonen.php#skaparollperson" class="internlink">Skapa Rollperson</a> för hur man räknar fram värdet för sårtröskel). En jätte slungar en sten mot honom som gör 11 skada, vilket överstiger hans sårtröskel. Han markerar 11 skada på sitt rollformulär och kryssar rutan för Dödligt sår.</p></blockquote>
	</article>
</section>

<section class="left" id="initiativvarde">
	<h2>Initiativvärde</h2>
	<article>
		<p>Initiativvärde avgör hur kvick rollpersonen är i strid. Initiativvärdet räknas ut genom att addera de första siffrorna i färdigheterna Perception och Rörlighet. I början av en strid slår varje deltagare 1T10 och lägger till sitt initiativvärde.</p>
		<blockquote><p>Exempel: Ulric har Rörlighet 58 och Perception 62. Hans initiativvärde blir alltså 11+1T10 (5+6=11).</p></blockquote>
	</article>
</section>

<section class="left" id="drivkrafter">
	<h2>Drivkrafter</h2>
	<article>
		<p>Rollpersonerna börjar spelet med två drivkrafter. En drivkraft är det som får rollpersonen att utsätta sig för fara och ge sig huvudstupa in i äventyret om och om igen. Att spela efter sin drivkraft kan både sänka rollpersonens Vansinne och ge erfarenhetspoäng.</p>
	</article>
</section>
	
<section class="left" id="erfarenhet">
	<h2>Erfarenhetspoäng och förbättring</h2>
	<article>
		Efter varje spelsession delas erfarenhetspoäng ut. Erfarenhetspoäng kan användas till två saker: att höja färdighetsvärden och öka rollpersoners Sejdkraft.
	</article>

	<article>
		<h3>Höja färdighetsvärden</h3>
		<p>Du kan spendera 1 erfarenhetspoäng för att försöka höja en kryssad färdighet. Sudda ut krysset för färdigheten och slå 1T100. Om du slår högre än det nuvarande färdighetsvärdet får du höja det med 1T10. Om du slår lägre eller på färdighetsvärdet får du inte höja det.</p>
	</article>

	<article>
		<h3>Öka Sejdkraft</h3>
		<p>Du kan också använda erfarenhetspoäng för att höja rollpersonens Sejdkraft. Att höja Sejdkraft kostar lika mycket som det nya värdet. Har du 6 Sejdkraft kostar det alltså 7 erfarenhetspoäng att höja ett steg.</p>
	</article>
</section>

<section class="left" id="skaparollperson">
	<h2>Skapa rollperson</h2>
	<article>
		<h3>Sätt ut färdighetsvärden</h3>
		<p>Det första du gör är att sätta ut färdighetsvärden. Börja med att sätta ut följande värden: <em>1st 70%, 2st 60%, 3st 50%, 3st 40%.</em>
		Dessa värden ersätter grundchansen i färdigheten. Höj därefter 4 färdigheter med 20%. Ingen nyskapad rollperson får ha färdighetsvärden över 80%.</p>
		
		<blockquote><p>Exempel: Kristina väljer att sätta ut färdighetsvärden enligt följande:
		Undersöka 70%, Datorkunskap 60%, Viljestyrka 60%, Vildmarksliv 50%, Tålighet 50%, Övertyga 50%, Slagsmål 40%, Sejdkonst 40%, Rörlighet 40%.
		Hon höjer sedan Styrka, Fingerfärdighet, och Konstruktion med 20% till 40%, 30%, och 30%.</p></blockquote>
	</article>

	<article>
		<h3>Välj fördjupningar</h3>
		<p>Välj fördjupningar för färdigheter med ett värde 60% eller högre. Har någon färdighet FV 80% får den två fördjupningar.</p>
		<blockquote><p>Exempel: Kristina har tre färdigheter med FV 60% eller mer: Undersöka, Datorkunskap, samt Viljestyrka. Var och en av färdigheterna får en fördjupning. Till Undersöka väljer hon Finna ledtrådar, Datorkunskap får fördjupningen Programmera, och för Viljestyrka väljer hon Stå emot tortyr.</p></blockquote>
	</article>

	<article>
		<h3>Styrkor och Svagheter</h3>
		<p>Rollpersoner börjar med en styrka och en svaghet var.</p>
		<blockquote><p>Exempel: Kristina väljer att hennes rollperson börjar med styrkan Naturbegåvning som låter henne vända på ett tärningsresultat en gång per speltillfälle. Som svaghet väljer hon Mardrömmar.</p></blockquote>
	</article>

	<article>
		<h3>Hemlighet</h3>
		<p>Varje rollperson har en mörk hemlighet de är redo att göra uppoffringar för att behålla hemlig, och som kan skada dem om hemligheten blir avslöjad.</p>
		<blockquote><p>Exempel: Kristina väljer att hennes rollperson har orsakat någons död. Detaljerna kan hon och spelledaren bena ut senare.</p></blockquote>
	</article>

	<article>
		<h3>Relationer</h3>
		<p>Rollpersoner börjar spelet med två stycken närstående spelledarpersoner. Varje relation har två värden: en modifikation för att sänka Vansinne, samt hur mycket Vansinne som sänks vid ett lyckat slag. Dela upp 30% mellan de två relationernas modifikation för trygghet. Fördela sedan 3 poäng mellan relationernas nivå.</p>
		<blockquote><p>Exempel: Kristina väljer att hennes rollperson har en syster som närstående spelledarperson. Hon ger systern +20% i trygghet och 2 i relationens nivå. Hennes andra närstående person är en kollega som då får +10% i trygghet och 1 i relationens nivå.</p></blockquote>
	</article>

	<article>
		<h3>Drivkrafter</h3>
		<p>Varje rollperson börjar spelet med två drivkrafter. Drivkrafterna bör vara formulerade som starka mål. Inled gärna med termer som Jag måste, Jag vill, eller Jag behöver. Följ sedan upp med vad du måste eller behöver göra: Jag måste ta reda på vem som ligger bakom mina föräldrars mord eller Jag behöver finna botemedlet mot förbannelsen som ligger över mig. Du kan också avsluta med varför du strävar efter drivkraften.</p>
		<blockquote><p>Exempel: Kristina väljer en drivkraft som har med hennes syster att göra: Jag måste skydda min syster till varje pris. Som andra drivkraft väljer hon: Jag behöver hämnas min mammas död för att uppnå ro.</p></blockquote>
	</article>

	<article>
		<h3>Lugnande aktivitet</h3>
		<blockquote><p>Välj en aktivitet som rollpersonen sysselsätter sig med för att finna ro. Aktiviteten kan användas en gång per spelmöte för att sänka vansinne med 2.
		Exempel: Kristina väljer Promenera i skogen som lugnande aktivitet.</p></blockquote>
	</article>

	<article>
		<h3>Skadebonus</h3>
		<p>Räkna ut Skadebonus genom att dela första siffran i Styrka med 2.</p>
		<blockquote><p>Exempel: Kristina har 40% i Styrka, och sätter således Skadebonus till 2 (4/2=2).</p></blockquote>
	</article>

	<article>
		<h3>Sårtröskel</h3>
		<p>Räkna ut Sårtröskeln genom att lägga till 2 till första siffran i Tålighet.</p>
		<blockquote><p>Exempel: Kristina har 50% i Tålighet. Hennes Sårtröskel blir 7 (5+2=7).</p></blockquote>
	</article>

	<article>
		<h3>Extraval</h3>
		<ul><b>Välj en av följande:</b>
			<li>Öka Sejdkraft med 2.</li>
			<li>Sätt ut +10% i fem färdigheter (ingen färdighet kan höjas till över 80%).</li>
			<li>Välj en ytterligare Fördel.</li>
			<li>Sätt ut 2 poäng till relationernas nivå.</li>
			<li>Höj en relations trygghet med +20% eller två med +10%.</ul>
		<blockquote><p>Exempel: Kristina väljer att öka rollpersonens Sejdkraft med 2. Hon börjar nu med Sejdkraft 7 i stället för 5.</p></blockquote>

	</article>
</section>

<?php
	include("footer.php");
?>