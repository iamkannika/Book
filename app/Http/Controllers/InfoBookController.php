<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InfoBook;

class InfoBookController extends Controller
{
    public function searchDetail(Request $request){
        $bookId = $request->bookId;
        $book = InfoBook::select('info_books.id','info_books.name as a','writer.name','info_books.price')
        ->where('info_books.id',$bookId)
        ->leftjoin('writer','writer.id','=','info_books.writer_id','writer.id')->first();

        // $book = InfoBook::create([
        //     'name' => 'test'
        // ]);

        if(count($book) > 0){
            return view('detail',[
                'book' => $book
            ]);
        }else{
            return "not found";
        }
    }
    public function discount(Request $request){
        $bookId = $request->bookId;
        $DiscountType = $request->DiscountType;
        $discount = $request->discount;
        

        //ดึงข้อมูล หนังสือมา
        //$book = InfoBook::find($bookId);
        $book = InfoBook::select('info_books.id','info_books.name','info_books.price','writer.name as a')
        ->where('info_books.id',$bookId)
        ->join('writer','writer.id','=','info_books.writer_id')->first();
        //return $book;
        $price = $book->price;
        $discountPrice = '';

        //ลดราคา
        if($DiscountType == 'percent') {
            $discountPrice = $price - ($price*$discount/100);
        } 
        if ($DiscountType == 'baht') {
            $discountPrice = $price - $discount;
        }

        $data = [
            'book' => $book,
            'discount' => $discountPrice
        ];
        
        // return $data; 
        // ส่งไปหน้า sale พร้อมข้อมูลหนังสือ ,ราคาที่ลดแล้ว,ส่งข้อมูลเซลล์
        return view('sale', $data);
        
    }
    public function sale(Request $request){
        //รับข้อมูลมาจากการ discount
        $bookId = $request->bookId;
        $DiscountType = $request->DiscountType;
        $discount = $request->discount;
        $saleperson='';
        //แสดงรายละเอียดของ book
        $book = InfoBook::find($bookId);
        
        return $book;
        //return view('bill',$book);
       //เลือก sale person เพื่อส่งข้อมูลไปหน้า bill มีการ saveข้อมูล
        if($saleperson=='Meow'){
            //ให้ทำอะไร จะบันทึกข้อมูลว่า Meow เป็นผู้ขายบันทึกและส่งต่อไปที่ bill
        }

    }
}
