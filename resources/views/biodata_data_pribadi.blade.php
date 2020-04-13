@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="/home">Dashboard</a> / <a href="/biodata">Biodata</a> / Data Pribadi Pelamar</div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel panel-default">
                    <div class="panel-heading" style="height: 59px">
                        <h4 class="pull-left">Data Pribadi Pelamar</h4>
                    </div>
                </div>
                <div class="panel-body">
                    <form action="/update_data_pribadi" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$biodata && isset($biodata->id) ? $biodata->id : '' }}">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="nama" value="{{$biodata && isset($biodata->nama) ? $biodata->nama : '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">No KTP</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="no_ktp" value="{{$biodata && isset($biodata->no_ktp) ? $biodata->no_ktp : '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Tempat, Tanggal lahir</label>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <input class="form-inline" name="place_birth" value="{{$biodata && isset($biodata->place_birth) ? $biodata->place_birth : '' }}">
                                    <input class="form-inline" name="date_birth" value="{{$biodata && isset($biodata->date_birth) ? $biodata->date_birth : '' }}" placeholder="YYYY-MM-DD">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-8 form-group">
                                <input class="form-inline" type="radio" name="gender" value="L" {{$biodata && (isset($biodata->gender) && $biodata->gender === 'L') ? 'checked' : '' }}> Laki-Laki
                                <input class="form-inline" type="radio" name="gender" value="P" {{$biodata && (isset($biodata->gender) && $biodata->gender === 'P') ? 'checked' : '' }}> Perempuan
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Agama</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="religion" value="{{$biodata && isset($biodata->religion) ? $biodata->religion : '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Golongan Darah</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="blood" value="{{$biodata && isset($biodata->blood) ? $biodata->blood : '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Status</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="status_merried" value="{{$biodata && isset($biodata->status_merried) ? $biodata->status_merried : '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Alamat KTP</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="domicile">{{$biodata && isset($biodata->domicile) ? $biodata->domicile : '' }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Alamat Tinggal</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="curent_address">{{$biodata && isset($biodata->curent_address) ? $biodata->curent_address : '' }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="email" value="{{$biodata && isset($biodata->email) ? $biodata->email : '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">No HP</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="hp" value="{{$biodata && isset($biodata->hp) ? $biodata->hp : '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Orang Terdekat Yang Dapat Di hubungi</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="call_urgent" value="{{$biodata && isset($biodata->call_urgent) ? $biodata->call_urgent : '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Posisi yang dilamar</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="position" value="{{$biodata && isset($biodata->position) ? $biodata->position : '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Expected Salary</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="expected_salary" value="{{$biodata && isset($biodata->expected_salary) ? $biodata->expected_salary : '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Bersedia ditempatkan di seluruh cabang</label>
                            <div class="col-sm-8 form-group">
                                <input class="form-inline" type="radio" name="availablle_another_place" value="1" {{$biodata && (isset($biodata->availablle_another_place) && $biodata->availablle_another_place) ? 'checked' : '' }}> YA
                                <input class="form-inline" type="radio" name="availablle_another_place" value="0" {{$biodata && (isset($biodata->availablle_another_place) && !$biodata->availablle_another_place) ? 'checked' : '' }}> Tidak
                            </div>
                        </div>
                        <div class="form-group row" style="padding: 16px">
                            <button type="submit" class="btn btn-primary pull-right" style="margin-left: 16px">SIMPAN</button>
                            <a href="/biodata" class="btn btn-warning pull-right" style="margin-left: 16px">KEMBALI</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

