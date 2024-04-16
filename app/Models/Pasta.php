<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pasta extends Model
{
    use HasFactory;

    // Laravel ci fornisce degli strumenti e delle proprietà che ci permettono di gestire la soft delete, dobbiamo solo farle ereditare dal nostro model
    use SoftDeletes;

    // possiamo specificare quali sono i campi del model che permettiamo vengano riempiti in automatico dai form
    protected $fillable = [ 'title', 'description', 'type', 'src', 'cooking_time', 'weight'];
}
