<?php

namespace App\Models;

use App\Models\Buku;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pinjam extends Model
{
    use HasFactory;

    public function user(){
        return $this->beLongsTo(User::class);
    }
    public function buku(){
        return $this->beLongsTo(Buku::class);
    }
}
