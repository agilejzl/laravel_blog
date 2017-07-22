<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Home</a>
    </div>

    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav hero-nav">
        <li>
          <a href="/posts">Recents</a>
        </li>
        <li><a href="/admin/posts">My Posts</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
      @if (empty(session('user')))
        <li>
          <a type="button" class="btn" data-toggle="modal" data-target="#registerModal">
            Register
          </a>
        </li>

        <li>
          <a type="button" class="btn" data-toggle="modal" data-target="#loginModal">
            Login
          </a>
        </li>
      @else
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
          {{session('user')['name']}}
           <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/user/logout">Logout</a></li>
          </ul>
        </li>
       @endif
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<!-- registerModal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="registerModalLabel">Register Modal</h4>
      </div>

      <form id="registerForm" action="/user/register" method="post">
      <div class="modal-body">
        <div class="form-group">
          <label for="user_name">Name</label>
          <input type="text" name="user[name]" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
          <label for="user_email">Email</label>
          <input type="text" name="user[email]" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="user_password">Password</label>
          <input type="password" name="user[password]" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="user_password_confirm">Password Confirm</label>
          <input type="password" name="user[password_confirm]" class="form-control" placeholder="Password Confirm">
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- loginModal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="loginModalLabel">Login Modal</h4>
      </div>

      <form id="loginForm" action="/user/login" method="post">
      <div class="modal-body">
        <div class="form-group">
          <label for="user_email">Email</label>
          <input type="text" name="user[email]" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="user_password">Password</label>
          <input type="password" name="user[password]" class="form-control" placeholder="Password">
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

