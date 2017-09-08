<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    
    protected $table = "ventas";
    protected $fillable = ['code','cc_clients','date'];
    protected $guarded = ['code'];
 //protected $guarded = [];
   public $timestamps = false;

     
	    public static function storeVentas($data){

    		Ventas::create($data);

    		} 
     

    public static function updateVentas($data){
    		Ventas::where('code', $data['code'] )->update(['cc_cliente' => $data['cc_clients'], 'date' => $data["date"] ]);

    		} 
     
}
