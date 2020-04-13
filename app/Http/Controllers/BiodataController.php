<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class BiodataController extends Controller {

    public function get_biodata() {
        $user = \Auth::user();
        $data = [];
        $data['biodata'] = User::find($user->id)->biodata;
        $data['education'] = User::find($user->id)->education;
        $data['work'] = User::find($user->id)->work;
        $data['courses'] = User::find($user->id)->courses;
//        echo '<pre>';
//        print_r($data);
//        echo '</pre>';
        return view('biodata', $data);
    }

    public function action($action, $mode = '') {
        switch ($action) {
            case 'data_pribadi':
                $this->data_pribadi();
                break;
            case 'data_pendidikan':
                $this->data_pendidikan($mode);
                break;
            case 'data_pelatihan':
                $this->data_pelatihan($mode);
                break;
            case 'data_pekerjaan':
                $this->data_pekerjaan($mode);
                break;
            default:
                break;
        }
    }

    private function data_pribadi() {
        $userId = \Auth::user()->id;
        $biodata = User::find($userId)->biodata;
        $html = view('biodata_data_pribadi')->with(compact('biodata'))->render();
        echo $html;
    }

    private function data_pendidikan($mode) {
        $education = [];
        if ($mode === 'update') {
            $userId = \Auth::user()->id;
            $education = User::find($userId)->education;
        }
        $html = view('biodata_riwayat_pendidikan')->with(compact('education', 'mode'))->render();
        echo $html;
    }

    private function data_pelatihan($mode) {
        $latihan = [];
        if ($mode === 'update') {
            $userId = \Auth::user()->id;
            $latihan = User::find($userId)->courses;
        }
//        dd($latihan);
        $html = view('biodata_riwayat_pelatihan')->with(compact('latihan', 'mode'))->render();
        echo $html;
    }

    private function data_pekerjaan($mode) {
        $work = [];
        if ($mode === 'update') {
            $userId = \Auth::user()->id;
            $work = User::find($userId)->work;
        }
//        dd($work);
        $html = view('biodata_riwayat_pekerjaan')->with(compact('work', 'mode'))->render();
        echo $html;
    }

}
