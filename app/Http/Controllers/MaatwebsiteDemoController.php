<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;

use Excel;

//use Input;

//use App\Item;

use App\Pod;
use App\Exception;
use App\CfsDelivery;
use App\TruckingDelivery;

class MaatwebsiteDemoController extends Controller
{
    //
//    public function importExport()
//    {
//        return view('importExport');
//    }
    public function downloadExcel($type)
    {
        $trucking = TruckingDelivery::get()->toArray();

        $cfs = CfsDelivery::get()->toArray();

        $pod = Pod::get()->toArray();

        $exception = Exception::get()->toArray();

//        $data = TruckingDelivery::get()->toArray();

        return Excel::create('trucking-details', function($excel) use ($trucking) {
            $excel->sheet('Trucking Details', function($sheet) use ($trucking)
            {
                $sheet->fromArray($trucking);
            });
        })->download($type);

//        return Excel::create('trucking-details', function($excel) use ($cfs) {
//            $excel->sheet('Trucking Details', function($sheet) use ($cfs)
//            {
//                $sheet->fromArray($cfs);
//            });
//        })->download($type);
    }
//
//    public function importExcel()
//    {
//        if(Input::hasFile('import_file')){
//            $path = Input::file('import_file')->getRealPath();
//            $data = Excel::load($path, function($reader) {
//            })->get();
//            if(!empty($data) && $data->count()){
//                foreach ($data as $key => $value) {
//                    $insert[] = ['title' => $value->title, 'description' => $value->description];
//                }
//                if(!empty($insert)){
//                    DB::table('items')->insert($insert);
//                    dd('Insert Record successfully.');
//                }
//            }
//        }
//        return back();
//    }

    public function exportPDF()
    {
//        $pod = Pod::get()->toArray();
//
//        $exception = Exception::get()->toArray();

        $data = TruckingDelivery::get()->toArray();

        return Excel::create('trucking-details', function($excel) use ($data)
        {
            $excel->sheet('Trucking Deliveries', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download("pdf");
    }
}
