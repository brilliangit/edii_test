<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EducationHistory;
use App\Biodata;
use App\CoursesHistory;
use App\WorkHistory;

class ActionController extends Controller {

    public function store_data_pribadi(Request $request) {
        $data = [];
        if ($request->id) {
            $data = Biodata::find($request->id);
        } else {
            $data = new Biodata();
        }
        $data->position = $request->position;
        $data->nama = $request->nama;
        $data->user_id = \Auth::user()->id;
        $data->no_ktp = $request->no_ktp;
        $data->place_birth = $request->place_birth;
        $data->date_birth = $request->date_birth;
        $data->gender = $request->gender;
        $data->religion = $request->religion;
        $data->blood = $request->blood;
        $data->status_merried = $request->status_merried;
        $data->domicile = $request->domicile;
        $data->curent_address = $request->curent_address;
        $data->email = $request->email;
        $data->hp = $request->hp;
        $data->call_urgent = $request->call_urgent;
        $data->expected_salary = $request->expected_salary;
        $data->availablle_another_place = $request->availablle_another_place;
        $data->updated_at = date('Y-m-d');
        $data->save();
        return redirect()->route('biodata');
    }

    public function store_pendidikan(Request $request) {
        $data = [];
        if ($request->id) {
            $data = EducationHistory::find($request->id);
        } else {
            $data = new EducationHistory();
        }

        $data->user_id = \Auth::user()->id;
        $data->stage = $request->stage;
        $data->institution_name = $request->institution_name;
        $data->study = $request->study;
        $data->end = $request->end;
        $data->score = $request->score;
        $data->updated_at = date('Y-m-d');
        $data->save();
        return redirect()->route('biodata');
    }
    
    public function store_data_pelatihan(Request $request) {
        $data = [];
        if ($request->id) {
            $data = CoursesHistory::find($request->id);
        } else {
            $data = new CoursesHistory();
        }
        $data->user_id = \Auth::user()->id;
        $data->courses = $request->courses;
        $data->certificate = $request->certificate;
        $data->years = $request->years;
        $data->updated_at = date('Y-m-d');
        $data->save();
        return redirect()->route('biodata');
    }
    public function store_data_pekerjaan(Request $request) {
        $data = [];
        if ($request->id) {
            $data = WorkHistory::find($request->id);
        } else {
            $data = new WorkHistory();
        }
        $data->user_id = \Auth::user()->id;
        $data->company_name = $request->company_name;
        $data->position = $request->position;
        $data->salary = $request->salary;
        $data->start = $request->start;
        $data->updated_at = date('Y-m-d');
        $data->save();
        return redirect()->route('biodata');
    }

}
