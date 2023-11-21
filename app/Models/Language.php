<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Filament\Models\Concerns\IsFilamentModel;


class Language extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'code', 'native', 'active','default'];


}
