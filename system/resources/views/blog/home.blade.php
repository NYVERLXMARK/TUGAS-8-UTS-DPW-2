@extends('blog.base')

@section('content')
    <div class="card">
        @foreach ($list_artikel as $artikel)
        <a href="{{url('blog/post', $artikel->id)}}">
            <img class="img-fluid" src="{{url('public')}}/blog/assets/img/demopic/8.jpg" alt="">
        </a>
        <div class="card-block">
            <h2 class="card-title"><a href="{{url('blog/post', $artikel->id)}}"> {{($artikel->judul)}} </a></h2>
            <h4 class="card-text">What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</h4>
            <div class="metafooter">
                <div class="wrapfooter">
                    <span class="meta-footer-thumb">
                    <a href="{{url('blog/contact')}}"><img class="author-thumb" src="{{url('public')}}/blog/assets/img/NR.png" alt="author"></a>
                    </span>
                    <span class="author-meta">
                    <span class="post-name"><a href="{{('blog/contact')}}">{{($artikel->penulis->nama)}}</a></span><br/>
                    <span class="post-date"> {{($artikel->updated_at)}} </span>
                    </span>
                    <span class="post-read-more"><a href="{{url('blog/post', $artikel->id)}}" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
