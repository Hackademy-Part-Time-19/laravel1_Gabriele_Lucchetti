<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    private $articoli = [
       0=> ['titolo' => 'Samsung S24', 'category' => "telefonia", 'descrizione' => "Il nuovo S24 con la potenza dell'AI.", 'immagine' => "https://www.ceotech.it/wp-content/uploads/2023/09/Galaxy-S24-svelato-il-design-del-prossimo-flagship-Samsung-1.jpg", 'prezzo' => "Prezzo €1499,99"],
       1=> ['titolo' => 'Iphone 15', 'category' => "telefonia", 'descrizione' => "Iphone 15 disponibile in tutte le varianti.", 'immagine' => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-15-pro-finish-select-202309-6-1inch_GEO_EMEA?wid=5120&hei=2880&fmt=p-jpg&qlt=80&.v=1693009279096", 'prezzo' => "Prezzo €1399,99"],
       2=> ['titolo' => 'Monitor AOC', 'category' => "elettronica", 'descrizione' => "165hz, 1920x1080 res.", 'immagine' => "https://m.media-amazon.com/images/I/712PJksASbL._AC_UF1000,1000_QL80_.jpg", 'prezzo' => "Prezzo €399,99"],
       3=> ['titolo' => 'Controller Nacon', 'category' => "giochi e accessori", 'descrizione' => "Controller Nacon qualita' imbattibile.", 'immagine' => "https://clinicadeljoypad.it/cdn/shop/products/NACONBUY_1200x1200.png?v=1638985227", 'prezzo' => "Prezzo €79,99"],
       4=> ['titolo' => 'Gygabite RTX 3090', 'category' => "elettronica", 'descrizione' => "Potenza di rendering", 'immagine' => "https://www.gigabyte.com/FileUpload/Global/KeyFeature/1624/innergigabyteimages/kf-img.png", 'prezzo' => "Prezzo €899,99"]
    ];

    // private $categories=['telefonia','elettronica','giochi e accessori','elettronica'];

    // public function __construct(){
    //     foreach($this->articoli as $articolo){
    //        if(!in_array($articolo['categoria'], $this->categories)){
    //           $this->categories[] = $articolo['categoria'];
    //       }
    //    } 
    // }


    public function index()
    {
        return view('articoli', ['articoli' => $this->articoli]);
    }

   

    public function byCategory($category)
    {
        $articlesByCategory=[];
        foreach($this->articoli as $article){
            
            if($article['category'] == $category){
                $articlesByCategory[] = $article;
                
            }
        }
        return view('byCategory', ['articoli' =>$articlesByCategory]);
    }

    public function show($id)
    {
       
        return view('dettaglio', ['articolo' => $this->articoli[$id]]);
        
    }
}
