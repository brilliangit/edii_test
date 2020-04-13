@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="/home">Dashboard</a> / <a href="/biodata">Biodata</a> / Data Pribadi Pelamar</div>
            </div>
        </div>
        @if(($education && count($education) > 0) && $mode === 'update')
        @foreach($education as $e)
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <form method="POST" action="/update_pendidikan">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$e->id}}">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="height: 59px">                                          
                            <a href="/biodata/data_pribadi" class="pull-right action"><i class="fas fa-trash-alt text-danger"></i></a>
                            <button type="submit" class="pull-right btn-link action"><i class="fas fa-check text-success"></i></button>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Jenjang Pendidikan Terakhir</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="stage" value="{{$e && isset($e->stage) ? $e->stage : '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Nama Institusi Akademik</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="institution_name" value="{{$e && isset($e->institution_name) ? $e->institution_name : '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Jurusan</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="study" value="{{$e && isset($e->study) ? $e->study : '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Tahun Lulus</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="end" value="{{$e && isset($e->end) ? $e->end : '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">IPK</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="score" value="{{$e && isset($e->score) ? $e->score : '' }}">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @endforeach
        @else
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <form method="POST" action="/update_pendidikan">
                    {{ csrf_field() }}
                    <div class="panel panel-default">
                        <div class="panel-heading" style="height: 59px">
                            <p class="pull-left">Tambah Riwayat Pendidikan</p>
                            <a href="/biodata/data_pribadi" class="pull-right action"><i class="fas fa-trash-alt text-danger"></i></a>
                            <button type="submit" class="pull-right btn-link action"><i class="fas fa-check text-success"></i></button>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Jenjang Pendidikan Terakhir</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="stage" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Nama Institusi Akademik</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="institution_name" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Jurusan</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="study" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Tahun Lulus</label>
                            <div class="col-sm-8">
                                <input class="form-control" placeholder="{{'Contoh : '. date('Y-m-d')}}" name="end" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">IPK</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="score" value="">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
