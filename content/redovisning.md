---
...
Redovisning
=========================



Kmom01
-------------------------

Det kändes inte som något problem att börja direkt med objektorienterad programmering i PHP. Eftersom det gått några månader sedan den första kursen där vi lärde oss grunderna i språket kände jag mig till en början litet ringrostig, men det det tog inte så länge att komma i gång på nytt. Att ta en snabb titt genom PHP-guiden i 20 punkter gjorde att det mesta återaktiverades i minnet.

Under höstterminen gick jag en kurs i objektorienterad programmering i Java. Tack vare den kursen har jag en uppfattning om vad objektsorienterad programmering går ut på och hur det kan se ut i koden. Trots kursen hann blev jag aldrig "du" med Java och speciellt syntaxen. Jag ser nu fram emot att i den här kursen få en ny chans att lära mig objektorientering från grunden och att göra det i PHP som jag känner mig betydligt mera positivt inställd till än Java.

Jag tycker att uppgiften "Gissa numret", i kombination med guiden som man skulle jobba sig igenom före uppgiften, passade väldigt bra som introduktion till kursen och objektorienterad programmering. Det fanns material att utgå från och man fick hjälp från videklippen, men det blev också en del eget funderande och kodande som gjorde att man kom igång med PHP-programmeringen igen och samtidigt fick en chans att prova på klasser och objekt på riktigt. När jag väl hade fått det att fungera med GET var det ingen svårighet att implementera samma sak med POST. Att få det att fungera med SESSION var inte lika enkelt, men jag tror att jag hittade en fungerade simpel lösning. Under kursen kommer vi säkert att se fler exempel på mer "eleganta" lösningar.

När det gäller me-sidan och dess bakomliggande ramverk Anax känns än så länge känns allt bekant från designkursen. Jag vet hur jag ska hantera ramverket för att få sidan att se ut som jag vill, men jag har ännu inte riktigt klart för mig hur allt fungerar "bakom". Det kommer förmodligen att bli klarare under kursens gång.

TIL (Today I learned) i detta kursmoment blir nog att se objektorienterad programmering med "nya ögon", känna igen strukturer från Java och se hur det fungerar på motsvarande sätt i PHP. Det pedagogiska dbwebb-materialet känns som en ny chans att få grepp om vad objektorienterad programmering går ut på. Det blev ett lagom krävande kursmoment som gav en möjlighet att komma igång ordentligt med kursen samtidigt som man blev nyfiken på fortsättningen.

Kmom02
-------------------------

Att överföra spelet Gissa mitt nummer gick ganska smidigt efter att jag fått vissa smärre problem som behövde korrigeras redan i kmom01 fixade. Tack vare videoklippen visste jag hur koden skulle delas upp mellan de olika filerna. Den största utmaningen var att få sessionen att fungera som tänkt. Detta gällde även i Tärningsspelet 100. Man märker att det behövs väldigt mycket testande av ett program, speciellt i sådana här mindre spel, för att kolla att man fått logiken att fungera som tänkt. Jag upplevde också att det såg annorlunda ut på min egen localhost än på studentservern. Det visar också på behovet av att testa väldigt många gånger innan man är klar med ett uppdrag.

För mig blev uppgiften Tärningsspel 100 en stor utmaning som gjorde att tiden med kursmomentet drog ut och jag tyvärr hamnade några veckor efter den tänkta studieplanen trots goda föresatser. Även om jag hade en grund för tärningsklasserna att utgå från hade jag svårt att få klart för mig hur jag ville att de olika klasserna (DiceGame, Gameround, Dice, DiceHand och Player) skulle samverka och vilken kod som skulle finnas var. Jag försökte rita upp för mig själv hur spelets logik skulle fungera, vilka klasser jag skulle ha och hur jag skulle använda dem. Trots detta hade jag svårt att komma vidare med själva gränssnittet, d.v.s hur spelet skulle se ut och fungera rent konkret. Steg för steg fick jag det till slut att hänga ihop då jag gjorde en del åt gången, testade att den fungerade och sedan gick vidare till nästa. Så långt jag kunde använde jag mig av de klasser som jag skapat, men jag kom att placera en del av spellogiken, t.ex. if-satser o.d. i view-filen. Jag är inte helt övertygad om att det är en särdeles snygg eller rekommendabel lösning, men den verkar fungera och jag hoppas att det är tillräckligt bra för detta kursmoment.

Till en början hade jag tänkt göra så att tärningarna också visas grafiskt, men eftersom arbetet med kursmomentet drog ut så mycket valde jag att inte göra detta då det inte var ett krav och jag dessutom tycker att det inte skulle tillföra spelet så mycket.

Då man skriver kod utanför ramverket har man, åtminstone än så länge, mera koll på vad som händer och det känns på så sätt enklare. Jag ser förstås fördelarna med att använda sig av ett ramverk och vartefter man får klart för sig hur ramverket fungerar så ser man också fördelarna av att koda inuti ramverket. Då kan man så att säga utnyttja ramverkerkets "infrastruktur" och bara lägga till den kod som behövs precis för det som skall göras. Inuti ramverket är det lätt att använda samma kod till flera saker, t.ex. genom att utnyttja namespaces. Det som fortfarande är litet oklart är hur koden på bästa sätt delas in i klasser, routes och views, även om jag förstår hur det är tänkt i teorin. Förhoppningsvis kommer jag under kursens gång få en bättre koll detta under kursens gång.

Jag förestår behovet av att dokumentera den kod man skriver, inte minst för andra som skall kunna förstå och jobba vidare med den kod som man skapat. Redan i en så pass liten uppgift som detta kursmoment märker man att man också för en själv behöver en ordentlig dokumentation för att minnas vad man håller på med. Även om det kan kännas jobbigt och omständligt att skriva dokumentationen har man stor nytta av den. Samtidigt som man skriver dokumentationen får man också en chans att tänka igenom om den kod som man skapat är vettig eller om den kunde förbättras. Jag tycker att make doc var ganska häftigt då det kunde plocka dokumentation inifrån koden och sedan på ett väldigt lätt sett presentera den överskådligt som en webbsida. UML-diagram är också väldigt viktiga för att tydliggöra instansvariabler och metoder i klasser och hur klasser är relaterade till varandra. Det var inte helt enkelt att skapa UML-diagrammet men även där ger övning färdighet. Man märker att det krävs stor noggranhet i dokumenteringen under hela kodningsfasen för att dokumentation skall fungera i slutet.

Today I learned för detta kursmoment: Kursmomentet har gett mig övning i vad klasser egentligen är och hur de används på riktigt inom programmering. Speciellt den första övningen tyckte jag var väldigt pedagogiskt upplagd där man fick chans att successivt bygga på sina kunskaper. Jag märker att jag dock fortfarande har ganska svårt att tänka objektorienterat och det nog krävs mycket övning ännu innan jag kan jobba smidigt med objekt och klasser och ha en klar bild hur jag vill att de ska samverka. Under kursmomentet har jag också fått lära mig vikten av att hålla mig lugn och metodiskt försöka fortsätta då saker och ting inte fungerar som tänkt och tiden rusar i väg.


Kmom03
-------------------------

Mina tidigare erfarenheter av enhetstestning och att testa kod överhuvudtaget begränsar sig till några enkla exempel i två Java- och datastrukturkurser som jag gått under det gångna läsåret. Där var testandet mera som en bisak till det egentliga innehållet, och jag var därför glad att nu få en ordentlig genomgång från grunden. Tack vare detta kursmoment har jag fått en förståelse för vad systematisk testning av programvara och kod handlar om, och i synnerhet då enhetstestning. Kursmomentet har öppnat upp ögonen för hur viktigt det är att testa sin kod för att undvika mer eller mindre fatala eller åtminstone pinsamma felaktigheter i koden och programvaran. Det gäller att försöka täcka in alla eventualiteter, vilket är en utmaning också för erfarna programmerare. Systematisk testning och att skriva förståelig och testbar kod är således en förutsättning för professionell programmering.

Tyvärr tog det oerhört lång tid för mig att få igång Xdebug på min Mac. Jag letade och letade efter guider på nätet och installerade om många gånger. Efter någon veckas försök insåg jag till sist att jag hållit på och aktiverat Xdebug i fel ini-fil och borde ha hittat en dold fil i i stället. Tyvärr gjorde denna fördröjning, och en del annat, att jag så att säga kom ur fas med kursen, men min förhoppning är att jag ändå skall avklara den med hjälp av hårt sommararbete.

När jag äntligen hade fått allt installerat var det dags att börja fundera på hur testerna skulle skrivas. Videoguiderna och manualerna var till stor hjälp, men jag hade ändå ganska svårt att få grepp om hur testerna skulle se ut, d.v.s. exakt vad som skulle testas och hur det skulle ske. Till en början hade jag ambitionen att använda min egna klasser för testningen men eftersom det tog så länge att få alla bitar på plats i kursmomentet valde jag att inte ytterligare testa med egen kod, för att i stället komma framåt med nästa kursmoment.

White-box testing, som används i detta kursmoment, innebär att den som skriver testerna också har full insyn i den kod som testas. Man kan se koden och verifiera vilka kodrader som testats och hur stor kodtäckning som uppnås med testerna. Black-box testing kan ses en motsats till white-box testing. Här känner den som testar mjukvaran endast till den förväntade funktionaliteten, men inget om hur den kod som skall göra att mjukvaran fungerar ser ut. Testningen utgår i första hand från specifikationerna för programvaran och inte från enskilda klasser, vilket innebär att man inte kan garantera att all kod testas. I grey-box testing kombineras både white-box och black-box testing. Här har testaren en viss insyn i mjukvarans uppbyggnad, t.ex. vilka datastrukturer och algoritmer som används, men inte till koden i sin helhet. Man försöker alltså kombinera fördelarna i både white-box och black-box testing.

Positiva tester innebär att man man testar att programvaran fungerar som tänkt, t.ex. då alla inmatade värden också är vad man tänkt sig. Negativa tester däremot fokuserar på att testa hur programmet fungerar då det inte går som planerat, t.ex. då programmet får felaktig indata. Programmet måste också kunna hantera sådana situationer på ett adekvat sätt.

TIL (Today I learned) för detta kursmoment är som många gånger förr att ha tålamod och åter tålamod, samt att systematiskt försöka hitta felet då något inte fungerar, även om jag tycker att jag redan kollat samma sak tusen gånger. Det kan kanske också passa bra som inledning på att lära sig vikten av testning av programkod. I detta kursmoment tycker jag att jag fick en första uppfattning om vad enhetstester innebär, varför de är viktiga och hur de kan se ut i en PHP-miljö.




Kmom04
-------------------------

Redovisningstexten kommer senare.



Kmom05
-------------------------

Redovisningstexten kommer senare.



Kmom06
-------------------------

Redovisningstexten kommer senare.



Kmom07-10
-------------------------

Redovisningstexten kommer senare.
