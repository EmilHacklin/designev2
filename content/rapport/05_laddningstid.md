---
views:
    byline:
        region: main
        template: anax/v2/block/default
        sort: 2
        data:
            meta:
                type: single
                route: block/byline
---
#En studie av elektronikaffärers webbsidor ur ett användbarhetsperspektiv.

Denna studie är en fortsättningsstudie för studien ”En studie av elektronikaffärers val av färgschema och typsnitt för webbplatser” som undersökte tre elektronikaffärers webbsidors val av färgschema och typografi.

I denna fortsättning studie expanderar jag på den tidigare studien genom att undersöka samma tre elektronikaffärer ur ett användbarhetsperspektiv.

##Urval
För denna fortsättnings studie så undersöker jag samma tre elektronikaffärer som i studien ”En studie av elektronikaffärers val av färgschema och typsnitt för webbplatser”.
Dessa tre elektronikaffärer är:

+	Elgiganten
+	Net On Net
+	Media Markt

Dessa tre elektronikaffärer valdes ursprungligen ut genom att fullgöra dessa kriterier:

1.	Företaget måste vara en elektronikaffär.
2.	Elektronikaffären måste äga en websida.
3.	Websidan måste innehålla en webaffär.
4.	Elektronikaffären måste äga fysiska affärer.
5.	Prioriterat är större elektronikaffärer.

Anledningen till dessa kriterier är som följer:

1.	Anledningen till detta krav är att sortera ut generella affärer som t.ex. ICA Maxi då det är affärer som säljer elektronik men inte fokuserar på elektronik.
2.	Denna studies mål är att undersöka hur dessa elektronikaffärer använder sig av färger och typsnitt på deras websidor så ett krav är att elektronikaffären har en hemsida att undersöka.
3.	Kravet att websidan måste innehålla en webaffär är för att studera hur deras färgval och typsnitt används för att sälja en besökare sina varor. Detta är till motsatts av en websida som försöker att leda en besökare till elektronikaffärens fysiska platts.
4.	Anledningen till att elektronikaffären måste äga fysiska affärer är för att studera hur dessa websidor använder färger och teckensnitt för att prioritera antingen fysiska affärer eller webshopen.
5.	Utav alla elektronikaffärer som uppfyller dessa kriterier så prioriteras sedan det tre största för studien då det antas att det största elektronikaffärerna har lagt ner mest resurser i valet av färger och typsnitt.

För urvalet av webbsidor på elektronikaffären som testas så valde jag första sidan, sidan för en produkt som alla affärer har (google nest mini) och kassan då dessa är typerna av sidor en besökare kommer besöka mest på deras webbplats.

##Metod
För att testa användbarheten av webbsidorna både för desktop och mobila besökare använde jag mig av Googles verktyg PageSpeed Insights som mäter laddningstiden för både en besökare på en mobil och desktop.

Resultatet presenteras som ett betyg, 0–100, där 100 representerar att webbsidan tillhör det topp 2% av sidorna som har testas medan 50 representerar att websidan tillhör det topp 25% av sidorna som testas.

Utöver betyget så ger PageSpeed Insights förslag på hur utvecklaren kan förbättra laddningshastigheterna.

För att sedan se vad som laddas ner och hur long tid det tar för webbsidan att laddas så använder jag mig av Chrome DevTools network flik som spelar in hur lång tid det tar att ladda webbsidan men också hur många resurser som laddas och den totala storleken på webbsidan.

För att förminska fluktuationer i testresultaten beroende på faktorer utanför webbsidornas kontroll so görs tre test på varje webbsida och medelvärdet från dessa test används för att skapa slutsatser.

##Resultat
Rådata av resultatet på dessa tester går att ses i följande Excel kalkylark [Länk till Excel fil](docs/userbility-raw-data.xlsx).

###Elgiganten
<figure class="figure center w67">
<img src="img/elgiganten-400.jpg" alt="Elgiganten" />
<figcaption>
<p>Snapshot av elgiganten.se 24-05-2020"</p>
</figcaption>
</figure>

####Mobil
<table style="border-spacing: 4px; border-collapse: separate">
<thead>
<tr>
<th>Webbsida</th>
<th>Betyg (0-100)</th>
<th>Laddningstid (sec)</th>
<th>Antal resurser (requests)</th>
<th>Storlek (MB)</th>
</tr>
</thead>
<tr>
<td><a href="https://www.elgiganten.se/">Första sida</a></td>
<td>75</td>
<td>4,87</td>
<td>87</td>
<td>3,6</td>
</tr>
<tr>
<td><a href="https://www.elgiganten.se/product/smart-hem/rostassistenter-smart-multimedia/54862/google-nest-mini-2nd-generation-chalk">Product sida</a></td>
<td>77</td>
<td>4,93</td>
<td>127</td>
<td>7,2</td>
</tr>
<tr>
<td><a href="https://www.elgiganten.se/INTERSHOP/web/WFS/store-elgigantenSE-Site/sv_SE/-/SEK/ViewData-Start/2134501408?JumpTarget=ViewCart-View">Kassa sida</a></td>
<td>86</td>
<td>4,87</td>
<td>73</td>
<td>3,5</td>
</tr>
</table>

####Desktop
<table style="border-spacing: 4px; border-collapse: separate">
<thead>
<tr>
<th>Webbsida</th>
<th>Betyg (0-100)</th>
<th>Laddningstid (sec)</th>
<th>Antal resurser (requests)</th>
<th>Storlek (MB)</th>
</tr>
</thead>
<tr>
<td><a href="https://www.elgiganten.se/">Första sida</a></td>
<td>99</td>
<td>4,99</td>
<td>89</td>
<td>3,7</td>
</tr>
<tr>
<td><a href="https://www.elgiganten.se/product/smart-hem/rostassistenter-smart-multimedia/54862/google-nest-mini-2nd-generation-chalk">Product sida</a></td>
<td>99</td>
<td>5,12</td>
<td>132</td>
<td>7,2</td>
</tr>
<tr>
<td><a href="https://www.elgiganten.se/INTERSHOP/web/WFS/store-elgigantenSE-Site/sv_SE/-/SEK/ViewData-Start/2134501408?JumpTarget=ViewCart-View">Kassa sida</a></td>
<td>99</td>
<td>4,96</td>
<td>76</td>
<td>3,5</td>
</tr>
</table>

####Förslag på förbättringar
För att förbättra prestandan på sina websidor så skulle Elgiganten kunna minska mängden element på sidorna.
Som det står nu så finns det mellan 3000-6000 element på varje sida vilket värkar överflödigt.

Samt så värkar bilderna vara lika stora oberoende skärmupplösning då mängden data som hämtas är samma i båda fallen.

###Net On Net
<figure class="figure center w67">
<img src="img/netonnet-400.jpg" alt="Net On Net" />
<figcaption>
<p>Snapshot av netonnet.se 24-05-2020"</p>
</figcaption>
</figure>

####Mobil
<table style="border-spacing: 4px; border-collapse: separate">
<thead>
<tr>
<th>Webbsida</th>
<th>Betyg (0-100)</th>
<th>Laddningstid (sec)</th>
<th>Antal resurser (requests)</th>
<th>Storlek (MB)</th>
</tr>
</thead>
<tr>
<td><a href="https://www.netonnet.se/">Första sida</a></td>
<td>40</td>
<td>2,26</td>
<td>109</td>
<td>4,2</td>
</tr>
<tr>
<td><a href="https://www.netonnet.se/art/smarta-hem/system-varumarke/google-home/google-nest-mini-chalk-2nd-generation-nordic-edition/1010762.15139/">Product sida</a></td>
<td>38</td>
<td>2,86</td>
<td>129</td>
<td>4,1</td>
</tr>
<tr>
<td><a href="https://www.netonnet.se/Checkout">Kassa sida</a></td>
<td>46</td>
<td>2,77</td>
<td>82</td>
<td>4,2</td>
</tr>
</table>

####Desktop
<table style="border-spacing: 4px; border-collapse: separate">
<thead>
<tr>
<th>Webbsida</th>
<th>Betyg (0-100)</th>
<th>Laddningstid (sec)</th>
<th>Antal resurser (requests)</th>
<th>Storlek (MB)</th>
</tr>
</thead>
<tr>
<td><a href="https://www.netonnet.se/">Första sida</a></td>
<td>91</td>
<td>2,56</td>
<td>116</td>
<td>4,6</td>
</tr>
<tr>
<td><a href="https://www.netonnet.se/art/smarta-hem/system-varumarke/google-home/google-nest-mini-chalk-2nd-generation-nordic-edition/1010762.15139/">Product sida</a></td>
<td>92</td>
<td>3,20</td>
<td>138</td>
<td>4,2</td>
</tr>
<tr>
<td><a href="https://www.netonnet.se/Checkout">Kassa sida</a></td>
<td>93</td>
<td>2,94</td>
<td>85</td>
<td>4,2</td>
</tr>
</table>

####Förslag på förbättringar
För att förbättra prestandan på sina websidor så skulle Net On Net också kunna minska mängden element på första sidan men alla andra sidor som testades ser bra ut.

Var Net On Net har problem är att det finns mycket onödig css kod vilket tyder på att dom använder en fil för all css kod istället för att dela upp dem beroende på skärmupplösning.
Vidare så värkar någon tredje partens kod blockera huvudtråden.

###Media Markt
<figure class="figure center w67">
<img src="img/media-markt-400.jpg" alt="Elgiganten" />
<figcaption>
<p>Snapshot av mediamarkt.se 24-05-2020"</p>
</figcaption>
</figure>

####Mobil
<table style="border-spacing: 4px; border-collapse: separate">
<thead>
<tr>
<th>Webbsida</th>
<th>Betyg (0-100)</th>
<th>Laddningstid (sec)</th>
<th>Antal resurser (requests)</th>
<th>Storlek (MB)</th>
</tr>
</thead>
<tr>
<td><a href="https://www.mediamarkt.se/">Första sida</a></td>
<td>11</td>
<td>6,91</td>
<td>142</td>
<td>5,7</td>
</tr>
<tr>
<td><a href="https://www.mediamarkt.se/sv/product/_google-nest-mini-2019-chalk-1320341.html">Product sida</a></td>
<td>5</td>
<td>3,66</td>
<td>179</td>
<td>12,1</td>
</tr>
<tr>
<td><a href="https://www.mediamarkt.se/webapp/wcs/stores/servlet/MultiChannelDisplayBasket?storeId=90952&langId=-16">Kassa sida</a></td>
<td>11</td>
<td>3,40</td>
<td>92</td>
<td>4,4</td>
</tr>
</table>

####Desktop
<table style="border-spacing: 4px; border-collapse: separate">
<thead>
<tr>
<th>Webbsida</th>
<th>Betyg (0-100)</th>
<th>Laddningstid (sec)</th>
<th>Antal resurser (requests)</th>
<th>Storlek (MB)</th>
</tr>
</thead>
<tr>
<td><a href="https://www.mediamarkt.se/">Första sida</a></td>
<td>64</td>
<td>7,15</td>
<td>142</td>
<td>5,8</td>
</tr>
<tr>
<td><a href="https://www.mediamarkt.se/sv/product/_google-nest-mini-2019-chalk-1320341.html">Product sida</a></td>
<td>49</td>
<td>3,70</td>
<td>176</td>
<td>11,7</td>
</tr>
<tr>
<td><a href="https://www.mediamarkt.se/webapp/wcs/stores/servlet/MultiChannelDisplayBasket?storeId=90952&langId=-16">Kassa sida</a></td>
<td>76</td>
<td>3,32</td>
<td>91</td>
<td>4,4</td>
</tr>
</table>

####Förslag på förbättringar
För att förbättra prestandan så skulle Media Markt kunna minska hur mycket JavaScript och tredje partens kod som körs då det blockerar huvudtråden samt så är det tusentals element i DOM träden på varje sida.

Men den värsta synden är att bilderna inte ändrar storlek beroende på skärmupplösning vilket gör att fullstora bilder måste laddas ner för mobilbesökare.

##Analys
Som sammanfatning så värkar ett universellt problem med elektronikaffärer vara att minska antalet element på varje webbsida då alla förutom Net On Net har mer en 1500 element i DOM trädet.

Vidare så värkar det finnas ett problem med tredjeparts kod som blockerar huvud tråden och att data mängden som gör upp webbsidan inte minskar på mobila skärmar då det borde laddas mindre bilder för dessa skärmar.

Som avlutande så finns det medelvärden av resultaten på de specifika websidorna  nedan.

<table style="border-spacing: 4px; border-collapse: separate">
<thead>
<tr>
<th>Webbsida</th>
<th>Betyg (0-100)</th>
<th>Laddningstid (sec)</th>
<th>Antal resurser (requests)</th>
<th>Storlek (MB)</th>
</tr>
</thead>
<tr>
<td>Elgiganten mobil</td>
<td>79</td>
<td>4,89</td>
<td>96</td>
<td>4,8</td>
</tr>
<tr>
<td>Net On Net mobil</td>
<td>42</td>
<td>2,63</td>
<td>107</td>
<td>4,2</td>
</tr>
<tr>
<td>Media Markt mobil </td>
<td>9</td>
<td>4,66</td>
<td>138</td>
<td>7,4</td>
</tr>
</table>

<table style="border-spacing: 4px; border-collapse: separate">
<thead>
<tr>
<th>Webbsida</th>
<th>Betyg (0-100)</th>
<th>Laddningstid (sec)</th>
<th>Antal resurser (requests)</th>
<th>Storlek (MB)</th>
</tr>
</thead>
<tr>
<td>Elgiganten desktop</td>
<td>87</td>
<td>4,93</td>
<td>96</td>
<td>4,8</td>
</tr>
<tr>
<td>Net On Net desktop</td>
<td>42</td>
<td>2,63</td>
<td>107</td>
<td>4,2</td>
</tr>
<tr>
<td>Media Markt desktop</td>
<td>9</td>
<td>4,66</td>
<td>138</td>
<td>7,4</td>
</tr>
</table>

###Vinnare av testet
Som vi ser I dessa tabeller så är ger inte Google PageSpeed Insights hela bilden då trots att Elgigantens hemsida konstant leder i testerna så ligger dom sist i genomsnitt av alla tre när det kommer till tester i värkligheten.

Då det är viktigare att sidan laddar snabbt och att sidan är kräver att besökaren laddar ner så små filer som möjligt har jag därför valt att prioritera laddningstid och storleken över poängen i testet.

Därför är detta min rangordning, på tredje platts Media Markt.
Media Markt har varit en konstant besvikelse i PageSpeed testerna då deras webbsida har fått det minsta betyget, har den längsta laddningstiden i av en sida, använder mest resurser och har dem största sidorna av alla så har det förtjänat sin sista platts.

På andra platts så kommer Elgiganten då trots att deras websida konstant hade bäst resultat i PageSpeed testerna så syntes det inte i laddningstiderna där det var konstant medelmåttiga.
I antalet resurser så leder dem oftast klart men när det gäller minne så används det så mycket på produktsidorna att det förvrider genomsnittet.

Till sist på första platts så har vi Net On Net som även om det bara hade medelmåttliga betyg i PageSpeed testerna så hade dem konstant dem bästa laddningstiderna ofta med mer än en sekund före den närmaste konkurrenten.
Vidare så låg dom väldigt nära Elgiganten när det gällde mängden resurser och deras websidor använde nästan lika mycket data på varje sida vilket gjorde att även om en av dem andras webbsidor var mindre så var deras på genomsnitt mindre över hela sidan.

Jag skulle bara vilja påpeka at inga av webbsidorna som testades i studien skulle kunna sägas vara snabba då även Net On Net’s webbsida tar mer en två sekunder att ladda vilket jag skulle säga är gränsen för en snabb webbsida.

Trotts det kommer Net On Net’s webbsida mycket närmare till gränsen särskilt Media Markt’s websida som är så långsam att jag trodde nästan att min fiberuppkoppling byts mot DSL när jag inte tittade.

##Övrigt
Rapporten är skriven av Emil Hacklin en student på BTH’s kurs PA1436 H19 lp2 Teknisk webbdesign och användbarhet.
