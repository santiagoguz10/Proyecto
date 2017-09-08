<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
   protected $table ="clientes";
   protected $fillable = ["cc", "name", "last_name", "phone"];
   //protected $guarded = [];
   public $timestamps = false;

     
    public static function storeClient($data){

    		Clientes::create($data);

    		} 
     

    public static function updateClient($data){
    		Clientes::where('cc', $data['cc'] )->update(['name' => $data['name'], 'phone' => $data['phone'], 'last_name' => $data["last_name"] ]);

    		} 
     
}
