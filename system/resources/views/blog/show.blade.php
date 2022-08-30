@extends('blog.base')

@section('post')
    {{-- <div class="container">
        <div class="row"> --}}
            <div class="col-md-12">
                <div class="mainheading">

                    <!-- Begin Top Meta -->
                    <div class="row post-top-meta">
                        <div class="col-md-2">
                            <a href="{{url('blog/contact')}}"><img class="author-thumb" src="{{url('public')}}/blog/assets/img/NR.png" alt="author"></a>
                        </div>
                        <div class="col-md-10">
                            <a class="link-dark" href="{{url('blog/contact')}}">{{($artikel->penulis->nama)}}</a> |
                            <a href="https://twitter.com/NyverL" target="_blank" class="btn btn-primary"><i class="fa-brands fa-twitter"></i></a> |
                            <a href="https://www.instagram.com/nyverl/" target="_blank" class="btn btn-danger"><i class="fa-brands fa-instagram"></i></a> |
                            <a href="https://www.facebook.com/RNGod.NR/" target="_blank" class="btn btn-primary"><i class="fa-brands fa-facebook"></i></a>
                            <br>
                            <span class="author-description">Mahasiswa TI Politeknik Negeri Ketapang Tahun 2021</span>
                            <br>
                            <span class="post-date">{{($artikel->updated_at)}}</span>
                        </div>
                    </div><hr>
                    <!-- End Top Menta -->
                    <h1 class="posttitle">{{($artikel->judul)}}</h1>

                </div>

                <!-- Begin Featured Image -->
                <img class="featured-image img-fluid" src="{{url('public')}}/blog/assets/img/demopic/8.jpg" alt="">
                <!-- End Featured Image -->

                <!-- Begin Post Content -->
                <div class="article-post">
                    <p>
                        {!! nl2br($artikel->isi)!!}
                    </p>
                </div>
                <!-- End Post Content -->

                <!-- Begin Tags -->
                <div class="after-post-tags">
                    <ul class="tags">
                        <li><a href="#">{{$artikel->tag}}</a></li>
                    </ul>
                </div>
                <!-- End Tags -->

            </div>
        {{-- </div>
    </div> --}}
@endsection
