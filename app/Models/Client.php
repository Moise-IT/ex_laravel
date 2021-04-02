<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $attributes =[
        'status' => 0
    ];

    public function scopeStatus($query)
    {

        return $query->where('status', '=', '1')->get();
    }



    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class);
    }


    public function getStatusAttribute($attribute){
        return $this->getStatusOptions()[$attribute];
    }

    //permet de retourner un tableau contenant le status
    public function getStatusOptions(){
        return  [
            '0' => 'Inactif',
            '1' => 'Actif'
        ];
    }
}
