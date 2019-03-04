<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{

    private $info = [
        [
            "id" => "14",
            "name" => "Equate pain and fever",
            "writer" => "Ryun Brunone",
            "price" => 555
        ], [
            "id" => "3",
            "name" => "Oxygen",
            "writer" => "Margeaux Wittey",
            "price" => 812
        ], [
            "id" => "03397",
            "name" => "Equaline pain relief pm",
            "writer" => "Maggie Stelljes",
            "price" => 404
        ], [
            "id" => "84435",
            "name" => "CELLBOOSTING HOMME",
            "writer" => "Constantino Van der Krui",
            "price" => 359
        ], [
            "id" => "9",
            "name" => "LBEL MAXIMUM COMFORT AND LONG-LASTING FOUNDATION SPF 10",
            "writer" => "Louisette Sisley",
            "price" => 536
        ], [
            "id" => "310",
            "name" => "Doxycycline Hyclate",
            "writer" => "Gaylor Labba",
            "price" => 930
        ], [
            "id" => "43",
            "name" => "Exuviance CoverBlend Concealing Treatment Makeup",
            "writer" => "Noe Wickenden",
            "price" => 559
        ],
        ["id" => "8", "name" => "MELALEUCA QUINQUENERVIA POLLEN", "writer" => "Ashlee D'Hooge", "price" => 570],
        ["id" => "1", "name" => "SoCALM Pain Relieving", "writer" => "Decca Mousley", "price" => 214],
        ["id" => "60", "name" => "MEDIAN New Forest", "writer" => "Olly Stears", "price" => 217],
        ["id" => "42", "name" => "Acetaminophen and Diphenhydramine HCl", "writer" => "Martha Bothams", "price" => 463],
        ["id" => "04", "name" => "Walgreens", "writer" => "Cacilia Bellward", "price" => 773],
        ["id" => "04351", "name" => "Clobetasol Propionate", "writer" => "Addison Melloy", "price" => 186],
        ["id" => "4", "name" => "COTTON SEED", "writer" => "Chrystal Ciccottio", "price" => 60],
        ["id" => "97", "name" => "Skin clearpplies for Men antiperspirant", "writer" => "Nev Ellingsworth", "price" => 722],
        ["id" => "03721", "name" => "Topiramate", "writer" => "Teddi Geal", "price" => 357],
        ["id" => "6483", "name" => "Divalproex Sodium", "writer" => "Aleksandr Hilldrup", "price" => 690],
        ["id" => "3037", "name" => "AIR COMPRESSED", "writer" => "Kenny Simmgen", "price" => 345],
        ["id" => "38216", "name" => "Synthroid", "writer" => "Ragnar Ochterlonie", "price" => 471],
        ["id" => "55", "name" => "Broncho Dilate", "writer" => "Constantino Fildes", "price" => 56],
        ["id" => "558", "name" => "QS Plus", "writer" => "Valaria Jordi", "price" => 767],
        ["id" => "6810", "name" => "Carvedilol", "writer" => "Marylee Varah", "price" => 696],
        ["id" => "33", "name" => "Woodwards HandClens Foaming Sanitizer", "writer" => "Renaud Clutten", "price" => 863],
        ["id" => "4732", "name" => "CVS Pharmacy", "writer" => "Saunder Impleton", "price" => 194],
        ["id" => "08554", "name" => "Oxygen", "writer" => "Christiane Mines", "price" => 259],
        ["id" => "62", "name" => "Ibuprofen", "writer" => "Eberto Seely", "price" => 989],
        ["id" => "42619", "name" => "Topcare Lubricant Eye", "writer" => "Rosmunda Baike", "price" => 752],
        ["id" => "5", "name" => "Apis Bryonia Special Order", "writer" => "Zed Romagosa", "price" => 63],
        ["id" => "085", "name" => "Halobetasol Propionate", "writer" => "Jeddy Alexsandrev", "price" => 48],
        ["id" => "4898", "name" => "Treatment Set TS345049", "writer" => "Kalle Beller", "price" => 740]
    ];

    public function search()
    {
        return view('searchbook');
    }

    public function show(Request $request)
    {
        // return $_POST['bookId'];
        // return $request->all();
        $id = $request->bookId;
        $booklist = $this->info;
        // $nameFromSearch = $request->bookname;
        $bookSearchResult = [];

        foreach ($booklist as $key => $value) {
            // $key = 0
            // $value = [
            //   "id"=>"14",
            //   "name"=>"Equate pain and fever",
            //   "writer"=>"Ryun Brunone",
            //   "price"=>555
            // ]
            if ($id == $value['id'] || $id == $value['name']) {
                $bookSearchResult[] = $value;

            //} elseif ($nameFromSearch == $value['name']) {
               // $bookSearchResult[] = $value;
            }
        }
        return $id;
        return view('showbook', [
            'booklist' => $booklist,
            'results' => $bookSearchResult
        ]);
    }


    public function getDiscountPriceForm(Request $request)
    {
        //return $request->all();
        $id = $request->id;
        $name = $request->name;
        $writer = $request->writer;
        $price = $request->price;

        return view('discountbook', [
            'id' => $id,
            'name' => $name,
            'price' => $price,
            'writer' => $writer,
//          'discounted_price' => $price
        ]);

    }

    public function getDiscountPricePercent(Request $request)
    {
        //return $request->all();
        $id = $request->id;
        $name = $request->name;
        $writer = $request->writer;
        $price = $request->price;

        $discount = $request->priceofdiscount;
        $type = $request->typeDiscount;
         //return $type;
        $discounted_price = 0;
        foreach ($this->info as $key => $value) {
            foreach ($value as $key2 => $value2) {
                if ($key2 == 'id' && $value2 == $id) {
                    if($type=='percent') {
                        $discounted_price = $value['price'] - ($value['price'] * ($discount / 100));
                    }else{
                        $discounted_price = $value['price'] -$discount;
                    }
                }
            }
        }
        return view('discountbook', [
            'id' => $id,
            'name' => $name,
            'price' => $price,
            'writer' => $writer,
            'discounted_price' => $discounted_price
        ]);
    }

//    public function getDiscountPriceBaht(Request $request_baht)
//        return $request_percent->all();
//        $id = $request_baht->id;
//        $name = $request_baht->name;
//        $writer = $request_baht->writer;
//        $price = $request_baht->price;
//
//        $discount = $request_baht->priceofdiscount;
//        $discounted_price = 0;
//        foreach ($this->info as $key => $value) {
//            foreach ($value as $key2 => $value2) {
//                if ($key2 == 'id' && $value2 == $id) {
//                    $discounted_price = $value['price'] -$discount;
//                }
//            }
//        }
//        return view('discountbook', [
//            'id' => $id,
//            'name' => $name,
//            'price' => $price,
//            'writer' => $writer,
//            'discounted_price' => $discounted_price
//        ]);




}