@extends('layouts.app')

@section('content') 
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="/home">Dashboard</a> / <a href="/biodata">Biodata</a> / Data Riwayat Pelatihan</div>
            </div>
        </div>
        @if(($latihan && count($latihan) > 0) && $mode === 'update')
        @foreach($latihan as $e)
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <form method="POST" action="/update_data_pelatihan">
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
                            <label class="col-sm-4 col-form-label">Nama Kursus / Seminar</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="courses" value="{{$e && isset($e->courses) ? $e->courses : '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Sertifikat (ada/tidak)</label>
                            <div class="col-sm-8 form-group">
                                <input class="form-inline" type="radio" name="certificate" value="1" {{isset($e->certificate) && $e->certificate ? 'checked' : '' }}> YA
                                <input class="form-inline" type="radio" name="certificate" value="0" {{isset($e->certificate) && !$e->certificate ? 'checked' : '' }}> Tidak
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Tahun</label>
                            <div class="col-sm-8">
                                <input class="form-control" placeholder="{{'Contoh : '. date('Y-m-d')}}" name="years" value="{{$e && isset($e->years) ? $e->years : '' }}">
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
                <form method="POST" action="/update_data_pelatihan">
                    {{ csrf_field() }}
                    
                    <div class="panel panel-default">
                        <div class="panel-heading" style="height: 59px">                                          
                            <a href="/biodata/data_pribadi" class="pull-right action"><i class="fas fa-trash-alt text-danger"></i></a>
                            <button type="submit" class="pull-right btn-link action"><i class="fas fa-check text-success"></i></button>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Nama Kursus / Seminar</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="courses" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Sertifikat (ada/tidak)</label>
                            <div class="col-sm-8 form-group">
                                <input class="form-inline" type="radio" name="certificate" value="1" checked> YA
                                <input class="form-inline" type="radio" name="certificate" value="0"> Tidak
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Tahun</label>
                            <div class="col-sm-8">
                                <input class="form-control" placeholder="{{'Contoh : '. date('Y-m-d')}}" name="years" value="">
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

