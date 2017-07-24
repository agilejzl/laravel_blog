<div id="blog-show" class="newer_row box">
  <div class="infos">
    <div class="post-header">
      <h3 class=""><a href="/admin/posts/{{$post['id']}}">{{$post['title']}}</a></h3>
      <form action="/admin/posts/{{$post['id']}}" method="POST">
        {{ method_field('DELETE') }}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" class="btn btn-sm btn-danger pull-right" value="Delete Now" onclick="javascript:return confirm('Are you sure to delete this?')" />
      </form>
    </div>

    <p class="info">
      <span class="label label-info">
        {{$post->category->name}}
      </span>
       · 
      <abbr class="timeago" title="{{$post['created_at']}}">
        {{$post['created_at']}}
      </abbr>
    </p>
  </div>

  <div class="body">
    {{$post['content']}}
  </div>
</div>
