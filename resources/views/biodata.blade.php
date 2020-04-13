@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="/home">Dashboard</a> / Biodata</div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel panel-default">
                    <div class="panel-heading" style="height: 59px">
                        <h4 class="pull-left">Data Pribadi Pelamar</h4>
                        <a href="/biodata/data_pribadi" class="pull-right action"><i class="fas fa-pencil-alt"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <form>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <p>{{$biodata && isset($biodata->nama) ? $biodata->nama : '' }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">No KTP</label>
                            <div class="col-sm-8">
                                <p>{{$biodata && isset($biodata->no_ktp) ? $biodata->no_ktp : '' }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Tempat, Tanggal lahir</label>
                            <div class="col-sm-8">
                                <p>{{$biodata && (isset($biodata->place_birth) && isset($biodata->date_birth)) ? $biodata->place_birth .', '.$biodata->date_birth : '' }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-8">
                                <p>{{$biodata && isset($biodata->gender) ? $biodata->gender : '' }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Agama</label>
                            <div class="col-sm-8">
                                <p>{{$biodata && isset($biodata->religion) ? $biodata->religion : '' }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Golongan Darah</label>
                            <div class="col-sm-8">
                                <p>{{$biodata && isset($biodata->blood) ? $biodata->blood : '' }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Status</label>
                            <div class="col-sm-8">
                                <p>{{$biodata && isset($biodata->status_merried) ? $biodata->status_merried : '' }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Alamat KTP</label>
                            <div class="col-sm-8">
                                <p>{{$biodata && isset($biodata->domicile) ? $biodata->domicile : '' }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Alamat Tinggal</label>
                            <div class="col-sm-8">
                                <p>{{$biodata && isset($biodata->curent_address) ? $biodata->curent_address : '' }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <p>{{$biodata && isset($biodata->email) ? $biodata->email : '' }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">No HP</label>
                            <div class="col-sm-8">
                                <p>{{$biodata && isset($biodata->hp) ? $biodata->hp : '' }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Orang Terdekat Yang Dapat Di hubungi</label>
                            <div class="col-sm-8">
                                <p>{{$biodata && isset($biodata->call_urgent) ? $biodata->call_urgent : '' }}</p>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel panel-default">
                    <div class="panel-heading" style="height: 59px">
                        <h4 class="pull-left">Pendidikan Terakhir</h4>
                        <a href="/biodata/data_pendidikan/update" class="pull-right action"><i class="fas fa-pencil-alt"></i></a>
                        <a href="/biodata/data_pendidikan/add" style="margin-right: 15px" class="pull-right action"><i class="fas fa-plus"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Jenjang Pendidikan Terakhir</th>
                                <th>Nama Institusi Akademik</th>
                                <th>Jurusan</th>
                                <th>Tahun Lulus</th>
                                <th>IPK</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($education && count($education) > 0)
                            @foreach($education as $v)
                            <tr>
                                <td>{{$v->stage}}</td>
                                <td>{{$v->institution_name}}</td>
                                <td>{{$v->study}}</td>
                                <td>{{$v->end}}</td>
                                <td>{{$v->score}}</td>
                            </tr>
                            @endforeach
                            @else
                            <tr><td colspan="5">Tidak ada data</td></tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel panel-default">
                    <div class="panel-heading" style="height: 59px">
                        <h4 class="pull-left">Riwayat Pelatihan</h4>
                        <a href="/biodata/data_pelatihan/update" class="pull-right action"><i class="fas fa-pencil-alt"></i></a>
                        <a href="/biodata/data_pelatihan/add" style="margin-right: 15px" class="pull-right action"><i class="fas fa-plus"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Kursus / Seminar</th>
                                <th>Sertifikat (ada/tidak)</th>
                                <th>Tahun</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($courses && count($courses) > 0)
                            @foreach($courses as $v)
                            <tr>
                                <td>{{$v->courses}}</td>
                                <td>{{$v->certificate ? 'Ya' : 'Tidak' }}</td>
                                <td>{{$v->years}}</td>
                            </tr>
                            @endforeach
                            @else
                            <tr><td colspan="3">Tidak ada data</td></tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel panel-default">
                    <div class="panel-heading" style="height: 59px">
                        <h4 class="pull-left">Riwayat Pekerjaan</h4>
                        <a href="/biodata/data_pekerjaan/update" class="pull-right action"><i class="fas fa-pencil-alt"></i></a>
                        <a href="/biodata/data_pekerjaan/add" style="margin-right: 15px" class="pull-right action"><i class="fas fa-plus"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Perusahaan</th>
                                <th>Posisi Terakhir</th>
                                <th>Pendapatan Terakhir</th>
                                <th>Tahun</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($work && count($work) > 0)
                            @foreach($work as $v)
                            <tr>
                                <td>{{$v->company_name}}</td>
                                <td>{{$v->position }}</td>
                                <td>{{$v->salary }}</td>
                                <td>{{$v->start}}</td>
                            </tr>
                            @endforeach
                            @else
                            <tr><td colspan="4">Tidak ada data</td></tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
