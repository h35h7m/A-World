@if (count($blogs) > 0)
<div class="blog_section layout_padding">
    @foreach ($blogs as $blog )
    <div class="container">
       <h1 class="blog_taital">{{ $blog->name }}</h1>
       <p class="blog_text">{{$blog->description}}</p>
       <div class="play_icon_main">
          <div class="play_icon"><a href="#"><img src="{{ asset('storage/blogs/' . $blog->image) }}" alt="Client Photo">
          </a></div>
       </div>
    </div>
    @endforeach
    
 </div>

@endif