<?php namespace BurnerMap\Models;

use Illuminate\Database\Eloquent\Model;

class BurnerVillages2012 extends Model
{
    protected $table      = 'BurnerVillages2012';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = 
    [
        'name', 
        'x', 
        'y', 
        'addyClock', 
        'addyLetter', 
        'addyLetter2', 
        'size', 
        'who', 
    ];
}
