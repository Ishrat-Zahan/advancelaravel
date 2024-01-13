<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Facades\Excel;

class Student implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
       $info =  Excel::import(new Student, 'Student.xlsx');

       dd($info);

        return view('excel',['info' => $info]);
    }
}
