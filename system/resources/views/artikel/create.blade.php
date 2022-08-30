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
                        <form action="{{url('admin/artikel')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="" class="control-label">Judul</label>
                                <input type="text" class="form-control" name="judul">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Tag</label>
                                <input type="text" class="form-control" name="tag">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Isi</label>
                                <textarea name="isi" class="form-control" rows="30"></textarea>
                            </div>
                            <button class="btn btn-success float-right"><i class="mdi mdi-content-save"></i>Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
