</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="http://localhost/blog/public/posts">{{config('app.name', 'BLOG')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/blog/public/posts">Blog</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://localhost/blog/public/posts/create">Create Post</a></li>
      </ul>
    </div>
  </div>
</nav>