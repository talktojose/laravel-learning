<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

      protected $guarded = [];
      public function profileImage()
      {
          $imagePath = ($this->image) ? $this->image : 'profile/VZ7rB8rynhSgH4whPYdn33MYvAZnQwH9VWX3zd1u.png';
          return '/storage/' . $imagePath;

      }







    public function user()
      {
          return $this->belongsTo(User::class);
      }
    use HasFactory;
}
