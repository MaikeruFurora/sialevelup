<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;
use App\Order;
use App\Customer;
use DB;

class OrderController extends Controller
{
    public function invoice()
    {
        return view("print.invoice");
    }
    public function store()
    {
        $orders = request()->orders;
        $customer = Customer::create([
            "cname" => request()->name,
            "caddress" => request()->address,
            "cdate" => date("m/d/y")
        ]);
        foreach ($orders as $key => $value) {
            /**
             *      INSERT INTO orders VALUES (product_id,customer_id,perItemAmount,quantity,total)
             */
            Order::create([
                "product_id" => $orders[$key]["id"],
                "customer_id" => $customer->id,
                "perItemAmount" => $orders[$key]["total"],
                "quantity" => $orders[$key]["myqty"],
                "total" => $orders[$key]["total"]
            ]);
            /**
             *      UPDATE products SET pquantity=?,pstatus=? WHERE id=?
             */
            $computed = (intval($orders[$key]["oqty"])) - (intval($orders[$key]["myqty"]));
            FacadesDB::table('products')->where("id", $orders[$key]["id"])->update(["pquantity" => $computed, "pstatus" => ($computed != 0) ? '1' : '2']);
        }
    }
    public function sortCustomer()
    {
        /**
         * 
         *  $c=DB::table("orders")
         *          ->select("*")
         *          ->distinct("customers.cname")
         *          ->join("customers","customers.id","=","orders.customer_id")
         *          ->get();
         *  
         *  SELECT * FROM customers
         */
        return response()->json(["data" => Customer::all()]);
    }

    public function deleteCustomer($id)
    {

        /**
         *      DELETE FROM customers WHERE id=?
         */
        return Customer::destroy($id);
    }
}
