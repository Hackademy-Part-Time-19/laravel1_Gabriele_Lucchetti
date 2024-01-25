<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/articoli', function () {
    $articoli = [
        ['titolo' => 'Samsung S24', 'categoria' => "Telefonia", 'descrizione' => "Il nuovo S24 con la potenza dell'AI", 'immagine' => "https://www.ceotech.it/wp-content/uploads/2023/09/Galaxy-S24-svelato-il-design-del-prossimo-flagship-Samsung-1.jpg"],
        ['titolo' => 'Iphone 15', 'categoria' => "Telefonia", 'descrizione' => "Iphone 15 disponibile in tutte le varianti", 'immagine' => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-15-pro-finish-select-202309-6-1inch_GEO_EMEA?wid=5120&hei=2880&fmt=p-jpg&qlt=80&.v=1693009279096"],
        ['titolo' => 'Monitor AOC', 'categoria' => "elettronica", 'descrizione' => "165hz, 1920x1080 res", 'immagine' => "https://m.media-amazon.com/images/I/712PJksASbL._AC_UF1000,1000_QL80_.jpg"],
        ['titolo' => 'Controller Nacon', 'categoria' => "Giochi e Accessori", 'descrizione' => "Controller Nacon qualita' imbattibile", 'immagine' => "https://clinicadeljoypad.it/cdn/shop/products/NACONBUY_1200x1200.png?v=1638985227"],
        ['titolo' => 'Gygabite RTX 3090', 'categoria' => "elettronica", 'descrizione' => "Potenza di rendering", 'immagine' => "https://www.gigabyte.com/FileUpload/Global/KeyFeature/1624/innergigabyteimages/kf-img.png"]
    ];
    return view('articoli', ['articoli' => $articoli]);
})->name('articoli');

Route::get('/chisono', function () {
    return view('chisono', ['descrizione' => 'Sono Gabriele Lucchetti vengo da Ceccano(FR)']);
})->name('chisono');

Route::get('/articolo/{id}', function ($id) {
    $articoli = [
        ['titolo' => 'Samsung S24', 'categoria' => "Telefonia", 'descrizione' => "Il nuovo S24 con la potenza dell'AI", 'immagine' => "https://www.ceotech.it/wp-content/uploads/2023/09/Galaxy-S24-svelato-il-design-del-prossimo-flagship-Samsung-1.jpg", 'prezzo' => "€1500,00"],
        ['titolo' => 'Iphone 15', 'categoria' => "Telefonia", 'descrizione' => "Iphone 15 disponibile in tutte le varianti", 'immagine' => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-15-pro-finish-select-202309-6-1inch_GEO_EMEA?wid=5120&hei=2880&fmt=p-jpg&qlt=80&.v=1693009279096", 'prezzo' => "€1299,99"],
        ['titolo' => 'Monitor AOC', 'categoria' => "elettronica", 'descrizione' => "165hz, 1920x1080 res", 'immagine' => "https://m.media-amazon.com/images/I/712PJksASbL._AC_UF1000,1000_QL80_.jpg", 'prezzo' => "€380,00"],
        ['titolo' => 'Controller Nacon', 'categoria' => "Giochi e Accessori", 'descrizione' => "Controller Nacon qualita' imbattibile", 'immagine' => "https://clinicadeljoypad.it/cdn/shop/products/NACONBUY_1200x1200.png?v=1638985227", 'prezzo' => "€88,68"],
        ['titolo' => 'Gygabite RTX 3090', 'categoria' => "elettronica", 'descrizione' => "Potenza di rendering", 'immagine' => "https://www.gigabyte.com/FileUpload/Global/KeyFeature/1624/innergigabyteimages/kf-img.png", 'prezzo' => "€899,90"]
    ];



    return view('articolo', ['articolo' => $articoli[$id]]);
})->name('articolo');
