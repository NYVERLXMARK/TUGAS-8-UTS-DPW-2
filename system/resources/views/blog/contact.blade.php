@extends('blog.base')

@section('contact')
    <div class="container">
        {{-- @foreach ($list_artikel as $artikel) --}}
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 col-md-offset-2">
                <div class="mainheading">
                    <div class="row post-top-meta authorpage">
                        <div class="col-md-10 col-xs-12">
                            {{-- <h1>{{($artikel->penulis->nama)}}</h1> --}}
                            <span class="author-description">
                                Mahasiswa TI Politeknik Negeri Ketapang Tahun 2021
                                <br>
                                <br>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa eveniet minus eos at. Temporibus, tempore quasi provident rerum, minus libero amet reiciendis culpa perspiciatis dolorem repudiandae consectetur id tempora. Quis.
                            </span>
                            <div class="sociallinks">
                                <a  target="_blank" href="https://www.facebook.com/RNGod.NR/"><i class="fa-brands fa-facebook"></i></a>
                                <span></span>
                                <a target="_blank" href="https://www.instagram.com/nyverl/"><i class="fa-brands fa-instagram"></i></a>
                                <span></span>
                                <a target="_blank" href="https://twitter.com/NyverL"><i class="fa-brands fa-twitter"></i></a>
                            </div>
                            <a target="_blank" href="https://www.youtube.com/channel/UCb9rrBervFkfLrLXYsJ9dBA/" class="btn btn-outline-danger"><i class="fa-brands fa-youtube"></i> Follow My Youtube</a>
                        </div>
                        <div class="col-md-2 col-xs-12">
                            <img class="author-thumb" src="{{url('public')}}/blog/assets/img/NR.png" alt="author">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- @endforeach --}}
    </div>
@endsection
