@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Filter
                    </div>
                    <div class="card-body">
                        <form action="{{url('admin/artikel/filter')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="" class="control-label">Judul</label>
                                <input type="text" class="form-control" name="judul" value="{{$judul ?? ""}}">
                            </div>
                            <button class="btn btn-primary float-right"><i class="mdi mdi-search-web"></i>Filter</button>
                        </form>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header">
                        Data Artikel
                        <a href="{{url('admin/artikel/create')}}" class="btn btn-primary float-right"><i class="mdi mdi-library-plus"></i>Tambah Artikel</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-datatable">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Judul</th>
                                <th>Tag</th>
                                <th>Dibuat</th>
                            </thead>
                            <tbody>
                                @foreach ($list_artikel as $artikel)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('admin/artikel', $artikel->id)}}" class="btn btn-primary"><i class="mdi mdi-information"></i></a>
                                            <a href="{{url('admin/artikel', $artikel->id)}}/edit" class="btn btn-warning"><i class="mdi mdi-file-document-edit"></i></a>
                                            @include('template.utils.delete', ['url' => url('admin/artikel', $artikel->id)])
                                        </div>
                                    </td>
                                    <td>{{$artikel->judul}}</td>
                                    <td>{{$artikel->tag}}</td>
                                    <td>{{$artikel->created_at}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
