<?php
/**
 * Created by PhpStorm.
 * User: Yiion-4
 * Date: 27-02-2020
 * Time: 06:21 PM
 */

namespace App\Helpers;


use Illuminate\Support\Facades\Facade;

class ReportFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Report';
    }
}