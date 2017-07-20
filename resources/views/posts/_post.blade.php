<div id="blog-show" class="newer_row box">
  <div class="infos">
    <h3><a href="/posts/{{$post['id']}}">{{$post['title']}}</a></h3>
    <p class="info">
      <span class="label label-info">
        {{$post->category->name}}
      </span>
       · 
      <abbr class="timeago" title="{{$post['created_at']}}">
        {{$post['created_at']}}
      </abbr>
       · 
      <span class="label label-success">
        {{$post->user->name}}
      </span>
    </p>
  </div>

  <div class="body">
    {{$post['content']}}
  </div>
</div>
