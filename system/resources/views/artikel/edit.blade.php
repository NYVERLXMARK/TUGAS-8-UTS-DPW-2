@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Artikel
                    </div>
                    <div class="card-body">
                        <form action="{{url('admin/artikel', $artikel->id)}}" method="post">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                                <label for="" class="control-label">Judul</label>
                                <input type="text" class="form-control" name="nama" value="{{$artikel->judul}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Tag</label>
                                <input type="text" class="form-control" name="tag" value="{{$artikel->tag}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Isi</label>
                                <textarea name="isi" class="form-control" rows="12">{{$artikel->isi}}</textarea>
                            </div>
                            <button class="btn btn-success float-right"><i class="mdi mdi-content-save"></i>Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
