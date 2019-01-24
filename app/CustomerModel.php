<?php
/**
 * Created by PhpStorm.
 * User: Jitendra
 * Date: 23-01-2019
 * Time: 11:10
 */

namespace App;
use Illuminate\Database\Eloquent\Model;


class CustomerModel extends Model
{
    protected $fillable = [
        'name', 'email', 'number', 'address'
    ];


}