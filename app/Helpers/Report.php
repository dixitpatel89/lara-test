<?php
/**
 * Created by PhpStorm.
 * User: Yiion-4
 * Date: 27-02-2020
 * Time: 05:42 PM
 */

namespace App\Helpers;
use Illuminate\Support\Facades\Facade;

class Report
{
    public static function model($model)
    {
        $model_data = $model::all();
        return $model_data;
    }
}