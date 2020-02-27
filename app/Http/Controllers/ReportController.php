<?php

namespace App\Http\Controllers;

use App\Helpers\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    private $reportHelper;

    public function __construct(Report $reportHelper)
    {
        $this->reportHelper = $reportHelper;
    }

    function index(Request $request)
    {
        $model_name = '\\App\\' . $request['alias'];

        $model_data = Report::model($model_name);
        return view('report',compact('model_data','alias'));
    }
}
