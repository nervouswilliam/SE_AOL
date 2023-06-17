<?php

namespace App\Models;
use App\Models\User;
use App\Models\Item;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
