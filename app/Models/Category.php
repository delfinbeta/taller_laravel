<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
  use HasFactory;

  /**
   * The database connection that should be used by the model.
   *
   * @var string
   */
  protected $connection = 'mysql';

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'categories';

  /**
   * The primary key associated with the table.
    *
    * @var string
    */
  protected $primaryKey = 'id';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['name', 'description', 'image'];

  /**
   * Get the posts for the category.
   */
  public function posts(): HasMany
  {
    return $this->hasMany(Post::class);
  }
}
