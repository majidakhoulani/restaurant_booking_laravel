@php
     $posts =  App\Models\Post::orderBy('created_at','DESC')->paginate(2);
@endphp
<section class="ftco-section bg-light">
 <div class="container">
    <div class="row">
        @foreach ($posts as $post )
        <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
                <a href="blog-single.html" class="block-20" style="background-image: url('{{asset($post->post_image)}}');">
                </a>
                <div class="text px-4 pt-3 pb-4">
                    <div class="meta">
                        <div><a href="#">{{ $post->created_at->format('M d Y') }}</a></div>
                        <div><a href="#">{{$post->post_auther}}</a></div>
                    </div>
                    <h3 class="heading"><a href="#">{{$post->post_title}}</a></h3>
                    <p class="clearfix">
                        {{-- {{route('blog.details',$post->id)}} --}}
                        <a href="{{ route('blog.details',$post->id) }}" class="float-left read btn btn-primary">Read more</a>
                        <a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach

    </div>

       <!-- Pagination Links -->
     <div class="row no-gutters my-5">
    <div class="col text-center">
      <div class="block-27">
        {{$posts->links('frontend.pagination.default')}}
      </div>
    </div>
  </div>
</div>
</section>
