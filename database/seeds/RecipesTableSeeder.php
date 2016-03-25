<?php

use Illuminate\Database\Seeder;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
    DB::table('recipes')->insert([
      ['id' => '4','title' => ' Fregola con arselle','description' => 'PRESENTAZIONE
La fregola con le arselle, in sardo fregula con cocciula, è una ricetta tipica della Sardegna molto gustosa. Questo particolare formato di pasta di semola di grano duro ha la forma di piccole palline che vengono lavorate a mano e che sposano perfettamente minestre leggere e delicate. La fregola con le arselle può essere servita sia come primo piatto che come piatto unico magari accompagnato con altri frutti di mare e qualche totano tagliato ad anelli. Trattandosi di un prodotto tipico della Sardegna, probabilmente non sarà semplicissimo da reperire, ma non impossibile!

PREPARAZIONE
La prima cosa da fare per preparare la fregola con le arselle è quella di occuparsi proprio delle vongole, che devono essere freschissime e controllate una per una scartando quelle rotte e successivamente lasciate in ammollo per qualche ora a spurgare. In una padella versate dellolio e gli spicchi daglio (1), aspettate qualche istante che si insaporiscano e poi toglieteli (2) prima di versare le vongole (3) che avrete scolato.
Alzate la fiamma e versate il vino (4) coprite con il coperchio (5) e lasciate cuocere qualche minuto agitando la padella, continuate fin quando tutte le arselle non saranno aperte (6).
In un altro tegame più grande, lasciate dorare uno spicchio daglio insieme allolio (7), aggiungete il prezzemolo dopo aver tolto laglio (8) e lasciate insaporire giusto qualche istante (9).
prima di versare il pomodoro (10) e di aggiustare di sale (11) e di pepe (12).
Scolate le vongole (13) tenendo da parte il liquido di cottura e sgusciatele (14) avendo cura di conservarne qualcuna per la decorazione finale (15).
Stendete un canovaccio pulito, o della garza sterile, in un colino e filtrate il liquido di cottura delle vongole (16), se fosse necessario ripetete loperazione (17) per assicurarvi un sugo senza sabbia ed eventuali residui di gusci. Nel tegame con il sugo ed il prezzemolo versate la fregola (18) e poi, mano a mano, versate il sugo delle vongole come fosse un brodo (19), aggiustate di sale (20) e di pepe (21) e continuate la cottura mescolando di tanto in tanto (22). Verso la fine della cottura aggiungete le vongole sgusciate in precedenza (23) e ancora un po di prezzemolo (24).
Sistemate il pane carasau sul fondo di un piatto (25), versate la fregola con le arselle in superficie (26) e infine guarnite con le vongole messe da parte e del prezzemolo (27) e servite subito!

','category_id' => '2','user_id' => '1','difficult' => 'medio','created_at' => '2016-03-01 20:31:59','updated_at' => '2016-03-01 20:31:59'],
      ['id' => '5','title' => 'Le cialdine al parmigiano','description' => 'Preparazione delle cialdine al parmigiano

1) Per preparare la ricetta delle cialdine al parmigiano, srotola i fogli di pasta fillo e dividili in tanti dischetti del diametro di 4 cm aiutandoti con un tagliapasta, poi sbatti luovo in una ciotola con la panna fresca e il sale. Dopodiché spennella i dischetti di pasta con il mix appena ottenuto.

2) Ora taglia il parmigiano reggiano a lamelle, poi pulisci le foglie di prezzemolo, maggiorana, timo ed erba cipollina con un panno bagnato. Dopodiché guarnisci metà dei dischetti con una foglia aromatica e una lamella di parmigiano, poi coprili bene con i dischi rimasti.

3) Infine pungi con una forchetta la superficie delle cialdine farcite e friggile per pochi istanti in olio ben caldo, poi scolale con un mestolo forato, mettile sulla carta assorbente in modo da eliminare lolio in eccesso e servile.
Cialdine al parmigiano: cenni storici sul Parmigiano Reggiano

Le origini del parmigiano reggiano sono molto antiche, risalgono infatti al Medioevo e vengono collocate attorno al XII secolo accanto ai grandi monasteri e castelli in cui comparvero i primi edifici destinati alla lavorazione del latte. Già nel 1200-1300 il parmigiano reggiano aveva raggiunto la standardizzazione attuale così come dimostra la citazione nel Decamerone di Boccaccio. Ciò porta inoltre a pensare che le sue origini possano risalire a diversi secoli prima e non è neanche escluso che la ricetta del parmigiano sia simile a quella del Granone Lodigiano, un altro formaggio che di tanto in tanto veniva citato nelle fonti romane. Col passare dei secoli il Reggiano, che oggi utilizziamo per preparare le cialdine al parmigiano e tante altre ricette nostrane, si è diffuso rapidamente nelle province di Parma, Reggio nellEmilia e Modena ottenendo pure la denominazione di origine protetta.
','category_id' => '1','user_id' => '4','difficult' => 'medio','created_at' => '2016-03-01 21:28:41','updated_at' => '2016-03-03 14:06:59'],
      ['id' => '6','title' => 'Cookies allarancia','description' => 'Per la ricetta dei cookies allarancia, tagliate le scorze di arancia a filetti, raccoglietele in un pentolino, copritele di acqua, portatele al bollore e scolatele. Ripetete loperazione per altre due volte, poi caramellatele in padella con g 90 di zucchero e 3 cucchiai di miele; distribuitele infine su un vassoio e lasciatele raffreddare. Potete candirle il giorno prima.
Mescolate le farine con la fecola, il lievito e un pizzico di sale; lavoratele quindi a mano con i tuorli, luovo e il burro, morbido. Alla fine unite le gocce di cioccolato, g 100 di zucchero, impastate brevemente, poi incorporate le scorze di arancia, fredde.
Distribuite il composto, a mucchietti ben distanziati, su una teglia coperta di carta da forno, passandone alcuni nei fiocchi di cereali.
Infornate a 175 °C per 10? circa. Sfornate i biscotti e lasciateli raffreddare su una gratella.','category_id' => '4','user_id' => '2','difficult' => 'facile','created_at' => '2016-03-02 13:05:14','updated_at' => '2016-03-02 13:05:14'],
      ['id' => '7','title' => 'Ragù di cavallo con formine di polenta','description' => 'Per la ricetta del ragù di cavallo con formine di polenta, preparate la polenta in acqua salata, seguendo le istruzioni sulla confezione, poi suddividetela fra 6 stampini ad anello pennellati con acqua. Fate appassire il soffritto nella pentola a pressione con 2 cucchiaiate dolio e la foglia di alloro.

Unite la carne trita e rosolatela. Bagnate con il vino bianco, unite un cucchiaino di concentrato di pomodoro e il dado sbriciolato. Chiudete e cuocete per 15?. Sformate la polenta, versatevi sopra il ragù e portate in tavola ben caldo.','category_id' => '3','user_id' => '3','difficult' => 'difficile','created_at' => '2016-03-02 13:39:40','updated_at' => '2016-03-02 13:39:40'],
      ['id' => '8','title' => 'Pollo in salsa alle pesche','description' => 'Tagliate il pollo in sei pezzi, eliminando testa, zampe e interiora e ricavando 2 ali, 2 cosce e 2 mezzi petti. Passateli sulla fiamma per eliminare eventuali residui di piume (strinare), poi rosolateli in un tegame con una piccola noce di burro per 10?. Trasferite i pezzi di pollo in una pirofila e infornate a 200 °C per 20?. Togliete i petti, conservandoli al caldo, e cuocete il resto ancora per 10-15?. Sciogliete intanto in una casseruola lo zucchero con qualche goccia di succo di limone. Dopo 1?, fuori dal fuoco, versatevi 2 cucchiaiate di aceto. Tornate sul fuoco e fate sciogliere i grumi che si formano. Aggiungete 50 g di burro, poi lo sciroppo di pesche. Portatelo a bollore con un pizzico di sale e addensate con un pizzico di amido di mais diluito in acqua, fino a ottenere una salsa agrodolce. Tagliate a fette sottili le pesche sciroppate e glassatele nella salsa. Disponete il pollo in un piatto da portata, irroratelo con la salsa, circondate i pezzi con le fettine di pesca e servite guarnendo a piacere con ciuffetti di rosmarino.
','category_id' => '3','user_id' => '4','difficult' => 'facile','created_at' => '2016-03-07 16:57:04','updated_at' => '2016-03-07 16:57:04'],
      ['id' => '9','title' => 'Crema di ceci e palline di patate','description' => 'Per la ricetta della crema di ceci e palline di patate, snocciolate le olive schiacciandole delicatamente con un pestacarne per far staccare la polpa dal nocciolo e tritatele poi grossolanamente. Lessate le patate per 30? circa, quindi sbucciatele, unitevi un ciuffo di prezzemolo tritato con un pezzetto di aglio, le olive tritate, sale, pepe, schiacciate tutto con uno schiacciapatate, quindi mescolate.

Dividete il composto in piccole porzioni (un cucchiaino colmo) e distribuitele su un vassoio unto di olio. Conditele con un filo di olio e fatele ruotare tra i palmi delle mani formando delle palline. Mettete le palline in un vassoio, spolverizzatele con origano e pepe e fatele rotolare nel vassoio perché se ne ricoprano uniformemente.

Frullate i ceci con il loro liquido di governo con mezzo mestolo di acqua, 2 cucchiai di olio e sale, ottenendo una crema liscia e abbastanza fluida. Distribuite la crema di ceci nei piatti e completateli con le palline di patate e dadini di pomodoro, foglie di basilico, pepe e un giro di olio.','category_id' => '2','user_id' => '3','difficult' => 'medio','created_at' => '2016-03-07 19:17:24','updated_at' => '2016-03-07 19:17:24'],
      ['id' => '10','title' => 'Pomodori al tonno','description' => 'Per fare i pomodori al tonno tagliate a metà i pomodori con unincisione orizzontale; svuotateli dei semi, salateli e teneteli capovolti a spurgare. Spuntate i cipollotti, riduceteli a rondelle e saltateli velocemente in padella con un filo dolio, maggiorana, sale, pepe, quindi spegnete e mescolatevi il tonno sbriciolato. Riempite con questo composto i pomodori, spolverizzateli di formaggio e pangrattato, irrorateli dolio, sistemateli in una teglia e infornateli a 250° per 20? circa; serviteli tiepidi.','category_id' => '1','user_id' => '3','difficult' => 'facile','created_at' => '2016-03-07 19:22:52','updated_at' => '2016-03-07 19:22:52'],
      ['id' => '11','title' => 'Pie di Pasqua','description' => 'Per fare la pie di Pasqua, fate scongelare la pasta brisée. Disossate il pollo, riducete a bocconcini la polpa ottenuta e rosolatela in padella, a fuoco vivo, con burro e olio caldi e gli scalogni a spicchi; sfumate con un dito di vino, salate, pepate e portate a cottura, coperto, senza aggiungere alcun liquido; ci vorranno circa 25? e, alla fine, togliete la carne dal sugo (che va conservato), fatela raffreddare poi mescolatela con il prosciutto a cubetti, gli asparagi sminuzzati, un trito di timo e prezzemolo e 2 cucchiai di parmigiano grattugiato. 
Stendete la pasta brisée a mm 3 di spessore poi, con parte di essa, rivestite uno stampo a guscio duovo lasciandola debordare abbondantemente. 
Versate nello stampo il misto di pollo e prosciutto, chiudete ripiegandovi sopra la pasta debordante, quindi sformate la pie a forma duovo, su una placca coperta da carta da forno; pennellatela con uovo sbattuto, guarnitela con un nastro di pasta, pennellate tutto ancora una volta e, infine, infornate a 200° per 40? circa. Servite la pie-uovo accompagnata dal sugo di pollo, precedentemente allungato con un mestolo di brodo, insaporito con un punta di estratto di carne e fatto ridurre a salsina.','category_id' => '3','user_id' => '1','difficult' => 'difficile','created_at' => '2016-03-07 19:26:54','updated_at' => '2016-03-07 19:26:54'],
      ['id' => '12','title' => 'Ciambellone bicolore','description' => 'Per fare il ciambellone bicolore, montate a spuma il burro con lo zucchero e un pizzico di sale, unite le uova, uno alla volta, continuando a lavorare con la frusta elettrica, quindi dividete limpasto in due parti uguali e incorporate, a una, il cioccolato gianduia fuso, freddo, e metà della farina setacciata con mezza bustina di lievito; 
allaltra parte dellimpasto, invece, amalgamate le nocciole sminuzzate grossolanamente, leggermente inumidite e mescolate con la farina rimasta. Imburrate e infarinate bene uno stampo a ciambella con bordi alti (diametro cm 22), riempitelo con i due impasti a colori alternati, poi infornatelo a 170° per circa unora: se durante la cottura il dolce dovesse scurirsi troppo, copritelo con carta da forno e, prima di sfornarlo, infilatevi uno stecchino che dovrà uscire asciutto. Sfornate il ciambellone e, subito, sformatelo su una gratella lasciandolo raffreddare capovolto, quindi servitelo.','category_id' => '4','user_id' => '1','difficult' => 'facile','created_at' => '2016-03-07 19:29:23','updated_at' => '2016-03-07 19:29:23'],
      ['id' => '13','title' => 'Tortine con stracchino e agretti','description' => 'Per la ricetta delle tortine con stracchino e agretti, impastate la farina con il burro, 80 g di grana e un pizzico di sale, ottenendo dei bricioloni; unite luovo e proseguite a impastare fino a formare un panetto. Avvolgetelo nella carta da forno, poi nella pellicola e lasciatelo riposare in frigo per 1 ora.

Amalgamate lo stracchino con un filo di olio, un pizzico di sale, una macinata di pepe, la scorza grattugiata di un limone e il latte, fino a ottenere un composto cremoso. Sbucciate la cipolla e affettatela sottilmente. Sminuzzate gli agretti. Fate imbiondire la cipolla in una padella velata di olio per 1-2, poi unite gli agretti, saltateli per 1-2, salateli, quindi spegnete. Completate con 20 g di grana.

Stendete la pasta a 3 mm di spessore e usatela per foderare 8 stampini (ø 8 cm, h 2 cm). Bucherellate il fondo con i rebbi della forchetta, distribuite gli agretti e completate con la crema di stracchino. Infornate a 170 °C per 10, poi coprite le tortine con un foglio di alluminio e proseguite nella cottura per 8. Sfornate, sformate e infornate di nuovo per 2. Sfornate e lasciate intiepidire prima di servire.','category_id' => '1','user_id' => '2','difficult' => 'medio','created_at' => '2016-03-07 20:07:39','updated_at' => '2016-03-07 20:07:39'],
      ['id' => '14','title' => 'Spaghetti con fagiolini, pomodoro e tonno','description' => 'Per fare gli spaghetti con fagiolini, pomodoro e tonno, pelate i pomodori e tagliateli a pezzetti raccogliendoli in una ciotola con il succo che rilasceranno. Mescolateli poi con il tonno sbriciolato. Scaldate 4 cucchiai di olio con uno spicchio di aglio intero, un ciuffetto di prezzemolo tritato e un peperoncino a piacere; poi togliete laglio e versate lolio sul misto di tonno e pomodori. Lessate molto al dente i fagiolini, scolateli con la schiumarola tenendo la loro acqua sul fuoco, e divideteli in due per il lungo: acquisteranno lo spessore ideale per abbinarsi agli spaghetti. Rimetteteli nella loro acqua bollente insieme con gli spaghetti e il sale. Scolate infine la pasta con i fagiolini e conditela con il misto di tonno e pomodori.','category_id' => '2','user_id' => '2','difficult' => 'facile','created_at' => '2016-03-07 20:11:05','updated_at' => '2016-03-07 20:11:05'],
      ['id' => '15','title' => 'Ganache nera e meringhe','description' => 'Per la ricetta della ganache nera, rivestite le pareti di 6 stampini troncoconici (ø cm 7) con uno strato non sottile di cioccolato temperato, poi capovolgeteli e fateli rassodare. Spezzate il cioccolato in una ciotola e versatevi la panna portata a ebollizione con un pizzico di cannella.

Mescolate per sciogliere il cioccolato, fate raffreddare (ganache) e riempite fino allorlo le ciotoline ottenute sformando gli stampini; mettetele in frigo. Scaldate lo zucchero con un cucchiaio di acqua a 110 °C, versatelo a filo sugli albumi montati e continuate a montarli per 2?.

Fate 6 quenelle e immergetele nel latte bollente per 2? (meringhe). Togliete dal frigo le ciotoline, unite le meringhe e decorate a piacere.','category_id' => '4','user_id' => '4','difficult' => 'medio','created_at' => '2016-03-07 20:13:48','updated_at' => '2016-03-25 13:27:01'],
      ['id' => '17','title' => 'Gnocchi alla romana','description' => 'Giovedì gnocchi, venerdì pesce e sabato trippa! Gli gnocchi sono un antico primo piatto, preparati con le farine più varie e diffusi in tutto il mondo, anche in diverse forme. Come vuole la tradiziona romana, questi rappresentano proprio il classico piatto del giovedì, probabilmente posto in mezzo alla settimana per compensare la leggerezza del pasto del giorno successivo...un'arcana usanza che ancora oggi viene portata avanti dai cittadini romani più nostalgici. Oggi abbiamo scelto di proporvi una tipica ricetta laziale: gli gnocchi alla romana! Succulenti dischi di semolino caratterizzati da una dorata crosticina, resa così fragrante grazie all'aggiunta di burro e pecorino! Certo, a Roma, il giorno giusto per prepararli è il giovedì ma, una volta provati, ve ne innamonere a tal punto che ogni giorno sarà quello giusto per portare in tavola questi gnocchi alla romana! Il segreto? Serviteli ancora fumanti per scoprirlo! 

Per preparare gli gnocchi alla romana, ponete il latte in un tegame sul fuoco, e aggiungete una noce di burro, il sale (2), e un pizzico noce moscata (2); appena inizierà a bollire versatevi a pioggia il semolino (3), mescolando energicamente con una frusta, per evitare la formazione di grumi.
Cuocete il composto a fuoco basso per qualche minuto, fino a che non si sarà addensato (4); dopodiché togliete il recipiente dal fuoco ed incorporate al composto i due tuorli (5) mescolando questa volta con un mestolo di legno (6).
Unite anche il parmigiano (7) e mescolate il tutto nuovamente (8). A questo punto versate metà dell'impasto ancora bollente su un foglio di carta forno (9) e utilizzando le mani, dategli una forma cilindrica (10). Per non scottarvi troppo potete passare le mani sotto l'acqua fredda. Una volta ottennuto un cilindro uniforme, avvolgetelo nella carta forno (11). Ripetete la stessa operazione per la seconda metà dell'impasto tenuto da parte e riponete i due rotoli (12) in frigorifero per una ventina di minuti.
Una volta raffreddato, otterrete un impasto compatto e con un coltello riuscirete ad ottenere dei dischi perfetti (13). Per facilitarvi nel taglio consigliamo di inumidire la lama con dell'acqua. Una volta ottenuti circa 40 pezzi disponeteli su una teglia precedentemente imburrata (14) e cospargeteli con il burro fuso, ma non bollente (15).
Spolverizzate la superficie con il pecorino romano (16) e cuocete in forno statico preriscaldato a 200° per 20-25 minuti (se utilizzate il forno ventilato 180° per 15 minuti). Dopodichè azionate la funzione grill e lasciateli gratinare per 4-5 minuti. Una volta pronti (17) servite i vostri gnocchi alla romana ben caldi (18)!
','category_id' => '2','user_id' => '1','difficult' => 'medio','created_at' => '2016-03-25 14:54:22','updated_at' => '2016-03-25 14:54:22'],
      ['id' => '18','title' => 'Cannoli siciliani','description' => 'Prepariamo le scorcie
Se avete la possibilità usare una planetaria con lattrezzo a foglia, quindi mescolare farina, zucchero, cacao e sale. Aggiungere lo strutto  al miscuglio di farina e farlo ben amalgamare, quindi unire le uova, farle assorbire ed infine continuare a lavorare aggiungendo il Marsala e laceto fino ad ottenere un impasto non troppo morbido ma consistente. Formare una palla, avvolgerla in pellicola da cucina e riporre in frigo per almeno unora.
Spianare limpasto ad uno spessore sottile (potete usare una sfogliatrice finendo con uno spessore simile a quello delle tagliatelle) spolverando, man mano, con la farina sia il piano di lavoro che limpasto. Quando avrete raggiunto lo spessore desiderato, ricavate dei dischetti dal diametro di circa 10 cm. (potete aiutarvi con un coppapasta). Avvolgere i dischetti nelle cannelle unte dolio, congiungendo i bordi spennellandoli con  lalbume battuto. Friggere in abbondante olio ben caldo, due-tre per volta. Non appena la pasta sarà di un bel dorato scuro scolare e mettere a raffreddare su carta assorbente da cucina.

Prepariamo la crema di ricotta
Se la ricotta è molto umida, come dovrebbe essere, farla sgocciolare in modo da eliminare la maggior parte di siero. Amalgamare bene la ricotta con lo zucchero. Lasciare riposare per unora e quindi setacciarla. A questo punto unire la cannella e il cioccolato fondente.

Confezioniamo i cannoli
Riempire le scorze con la crema e spianare le parti estreme aiutandovi con un coltello, posare una ciliegia candita alle estremità, mettere in un vassoio e spolverare con zucchero a velo e infine adagiare sul bordo la scorzetta di arancia candita.','category_id' => '4','user_id' => '3','difficult' => 'difficile','created_at' => '2016-03-25 15:03:45','updated_at' => '2016-03-25 15:03:45'],
    ]);
  }
}
