<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
