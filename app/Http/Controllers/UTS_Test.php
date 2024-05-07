<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UTS_Test extends Controller
{
    public function layout(){
        $data = [
            "student1" => ["nama" => "TestNama1","npm" => "222310028", "ipk" => "3.64", "semester"=> "6"],
            "student2" => ["nama" => "TestNama2","npm" => "222310021", "ipk" => "3.21", "semester"=> "4"],
            "student3" => ["nama" => "TestNama3","npm" => "222310023", "ipk" => "3.44", "semester"=> "6"],
            "student4" => ["nama" => "TestNama4","npm" => "222310024", "ipk" => "3.86", "semester"=> "2"],
            "student5" => ["nama" => "TestNama5","npm" => "222310020", "ipk" => "3.04", "semester"=> "6"],
            "student6" => ["nama" => "TestNama6","npm" => "222310017", "ipk" => "3.21", "semester"=> "4"],
            "student7" => ["nama" => "TestNama7","npm" => "222310033", "ipk" => "3.34", "semester"=> "6"],
            "student8" => ["nama" => "TestNama7","npm" => "222310033", "ipk" => "3.11", "semester"=> "6"],
        ];
        return view('uts_experiment.layout',["data" => $data]);
    }
}
