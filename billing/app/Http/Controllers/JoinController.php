<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class JoinController extends Controller
{
    //Funcion de obtener facturas 
    public function getBills(){
        
        $dataBill = DB::table("tbl_bill_product")
        ->join("tbl_bill", "tbl_bill_product.id_bill","=","tbl_bill.id")
        ->select("tbl_bill_product.*","tbl_bill.*")
        ->get();
        
        return view('bills.getbills', compact('dataBill'));
    }

  

    //Funcion de obtener facturas por usuario
    public function getBillsByUser(){

        $dataBill = DB::table("tbl_bill")
        ->join("users","tbl_bill.id_user", "=", "users.id")
        ->select("users.*", "tbl_bill.*")
        ->get();
        return view('bills.billsbyuser',compact('dataBill'));
    }

    //Funcion de obtener facturas por producto
    public function getBillsByProduct(){
        $dataBill = DB::table("tbl_bill_product")
        ->join("tbl_bill", "tbl_bill_product.id_bill","=","tbl_bill.id")
        ->join("tbl_product","tbl_bill_product.id_product","=","tbl_product.id_product")
        ->select("tbl_bill_product.*","tbl_bill.*","tbl_product.*")
        ->get();
        //return $dataBill;
        return view('bills.billsbyproduct',compact('dataBill'));
    }
}
