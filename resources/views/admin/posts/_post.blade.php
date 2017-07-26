<div id="blog-show" class="newer_row box">
  <div class="infos">
    <div class="post-header">
      <h3>
        <a href="/admin/posts/{{$post['id']}}">{{$post['title']}}</a>
      </h3>
    </div>

    <div class="row">
      <p class="col-md-6 info">
        <span class="label label-info">
          {{$post->category->name}}
        </span>
         · 
        <abbr class="timeago" title="{{$post['created_at']}}">
          {{$post['created_at']}}
        </abbr>
      </p>

      <form class="col-md-6" action="/admin/posts/{{$post['id']}}" method="POST">
        {{ method_field('DELETE') }}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" class="btn btn-sm btn-danger pull-right" value="Delete" onclick="javascript:return confirm('Are you sure to delete this?')" />
        &nbsp;&nbsp;
        <a href="/admin/posts/{{$post['id']}}/edit" class="btn btn-default pull-right">Edit</a>
      </form>
    </div>
  </div>

  <div class="body">
    {{$post['content']}}
  </div>
</div>
