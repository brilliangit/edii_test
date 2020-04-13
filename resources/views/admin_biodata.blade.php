@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="/home">Dashboard</a> / Daftar Pelamar</div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel panel-default">
                    <div class="panel-heading" style="height: 59px">
                        <h4 class="pull-left">Daftar Pelamar</h4>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tempat Tanggal Lahir</th>
                                <th>Posisi Yang Dilamar</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($result && count($result) > 0)
                                @foreach($result as $key => $v)
                                <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$v->nama}}</td>
                                <td>{{$v->place_birth}}</td>
                                <td>{{$v->position}}</td>
                                <td><a href="/admin/show/{{$v->user_id}}"><i class="far fa-eye"></i></a></td>
                                </tr>
                                @endForeach
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
