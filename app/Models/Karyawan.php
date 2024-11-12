<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{ public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('moh.firman jailani');
            $table->string('moh.firman j')->unique();
            $table->string('0862572862');
            $table->timestamps();
        });
    }
    
    use HasFactory;
}
