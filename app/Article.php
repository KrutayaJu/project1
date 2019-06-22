<?php
/**
 * Created by PhpStorm.
 * User: Юля
 * Date: 27.05.2019
 * Time: 21:13
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $primaryKey = 'id';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //поля использ
    protected $fillable = [
        'name', 'author', 'description'
    ];
}