<?php
//prendo le classi
require_once __DIR__.'/models/prodotti.php';
require_once __DIR__.'/models/cibo.php';
require_once __DIR__.'/models/giochi.php';
require_once __DIR__.'/models/cucce.php';
require_once __DIR__.'/models/categorie.php';

//creo delle istanze cibo e il relativo array
$cibo1 = new Cibo(
    'Cibo',
    'Natural Trainer Sensitive No Grain Adult Medium/Maxi Monoproteico con Maiale & Patate',
    50.99,
    true,
    new Categorie ('Cani', '&#128054;'),
    'https://shop-cdn-m.mediazs.com/bilder/natural/trainer/sensitive/no/grain/adult/mediummaxi/monoproteico/con/maiale/patate/7/800/226201_affinityitaly_naturaltrainer_sensitive_nograin_adult_medmaxi_schweinefleisch_kartoffeln_12kg_hs_02_7.jpg',
    'Secco',
    'Maiale',
    12000
);
$cibo2 = new Cibo(
    'Cibo',
    'alpha spirit Multi-Flavour buste Pacco misto per gatti',
    8.99,
    false,
    new Categorie ('Gatti', '&#128049;'),
    'https://shop-cdn-m.mediazs.com/bilder/alpha/spirit/multiflavour/buste/pacco/misto/per/gatti/6/800/113096_alpha_spirit_multi_flavour_pouch_lamm_hs_05_6.jpg',
    'Umido',
    'Carne',
    425
);
$cibo3 = new Cibo(
    'Cibo',
    'Bio Anatra con Patate dolci & Zucchine Alimento umido per cani',
    16.99,
    false,
    new Categorie ('Cani', '&#128054;'),
    'https://shop-cdn-m.mediazs.com/bilder/zooplus/bio/anatra/con/patate/dolci/zucchine/alimento/umido/per/cani/0/800/zooplus_bio_dog_gf_adult_duck_400g_1000x1000_0.jpg',
    'Umido',
    'Anatra',
    400
);
$cibo4 = new Cibo(
    'Cibo',
    'Almo Nature HFC Adult Sterilised Merluzzo fresco Crocchette per gatti',
    4.99,
    true,
    new Categorie ('Gatti', '&#128049;'),
    'https://shop-cdn-m.mediazs.com/bilder/almo/nature/hfc/adult/sterilised/merluzzo/fresco/crocchette/per/gatti/7/800/291796_pla_almonature_hfc_adult_sterilized_kabeljau_300g_hs_01_1_7.jpg',
    'Secco',
    'Merluzzo',
    300
);
$arrayCibo = [$cibo1, $cibo2, $cibo3, $cibo4];

//creo delle istanze cucce e il relativo array
$cuccia1 = new Cucce(
    'Cucce',
    'Ferplast Cesta-sofà Siesta Deluxe nera con rivestimento antracite',
    30.99,
    true,
    new Categorie ('Cani', '&#128054;'),
    'https://shop-cdn-m.mediazs.com/bilder/ferplast/cestasof/siesta/deluxe/nera/con/rivestimento/antracite/5/800/84412_84499_ferplast_hundekorb_siesta_schwarz_sofa_anthrazit_hs_02_5.jpg',
    'Plastica',
    'Grande'
);
$cuccia2 = new Cucce(
    'Cucce',
    'Nicchia Cosma',
    23.99,
    false,
    new Categorie ('Gatti', '&#128049;'),
    'https://shop-cdn-m.mediazs.com/bilder/nicchia/cosma/2/800/85700_pla__cosma_katzenhoehle_fg_1635_2.jpg',
    'Feltro sintetico',
    'Piccola'
);
$arrayCucce = [$cuccia1, $cuccia2];

//creo delle istanze giochi e il relativo array
$gioco1 = new Giochi(
    'Giochi',
    'KONG Jumbler Ball',
    15.49,
    false,
    new Categorie ('Cani', '&#128054;'),
    'https://shop-cdn-m.mediazs.com/bilder/kong/jumbler/ball/6/800/64496_PLA_KONG_Jumbler_Ball_ML_6.jpg',
    'Gomma termoplastica',
    true
);
$gioco2 = new Giochi(
    'Giochi',
    'Tiragraffi Bear Paw',
    89.49,
    true,
    new Categorie ('Gatti', '&#128049;'),
    'https://shop-cdn-m.mediazs.com/bilder/tiragraffi/bear/paw/7/800/113702_pla_kratzbaum_bear_paw_fg_1219_7.jpg',
    'Sisal',
    false
);
$arrayGiochi = [$gioco1, $gioco2];