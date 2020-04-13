@extends('layouts.app')

@section('content')
<div class = "container">
    <div class = "row">
        <div class = "col-md-8 col-md-offset-2">
            <div class = "panel panel-default">
                <div class = "panel-heading"><a href = "/home">Dashboard</a> / <a href = "/biodata">Biodata</a> / Data Pengalaman Pekerjaan</div>
            </div>
        </div>
        @if(($work && count($work) > 0) && $mode === 'update')
        @foreach($work as $e)
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <form method="POST" action="/update_data_pekerjaan">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$e->id}}">
                    <div class="panel-default">
                        <div class="panel-heading" style="height: 59px">                                          
                            <a href="/biodata/data_pribadi" class="pull-right action"><i class="fas fa-trash-alt text-danger"></i></a>
                            <button type="submit" class="pull-right btn-link action"><i class="fas fa-check text-success"></i></button>
                        </div>
                        <div class="panel-body">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nama Perusahaan</label>
                                <div class="col-sm-8">
                                    <input class="form-control" name="company_name" value="{{$e && isset($e->company_name) ? $e->company_name : '' }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Posisi Terakhir</label>
                                <div class="col-sm-8">
                                    <input class="form-control" name="position" value="{{$e && isset($e->position) ? $e->position : '' }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Pendapatan Terakhir</label>
                                <div class="col-sm-8">
                                    <input class="form-control" name="salary" value="{{$e && isset($e->salary) ? $e->salary : '' }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tahun</label>
                                <div class="col-sm-8">
                                    <input class="form-control" placeholder="{{'Contoh : '. date('Y-m-d')}}" name="start" value="{{$e && isset($e->start) ? $e->start : '' }}">
                                </div>
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
                <form method="POST" action="/update_data_pekerjaan">
                    {{ csrf_field() }}
                    <div class="panel-default">
                        <div class="panel-heading" style="height: 59px">                                          
                            <a href="/biodata/data_pribadi" class="pull-right action"><i class="fas fa-trash-alt text-danger"></i></a>
                            <button type="submit" class="pull-right btn-link action"><i class="fas fa-check text-success"></i></button>
                        </div>
                        <div class="panel-body">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nama Perusahaan</label>
                                <div class="col-sm-8">
                                    <input class="form-control" name="company_name" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Posisi Terakhir</label>
                                <div class="col-sm-8">
                                    <input class="form-control" name="position" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Pendapatan Terakhir</label>
                                <div class="col-sm-8">
                                    <input class="form-control" name="salary" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tahun</label>
                                <div class="col-sm-8">
                                    <input class="form-control" placeholder="{{'Contoh : '. date('Y-m-d')}}" name="start" value="">
                                </div>
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
