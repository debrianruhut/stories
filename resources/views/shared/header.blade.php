<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">Stories</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
            <li class="active"><a href="{{url('/')}}">/home</a></li>
                <li><a href="{{url('/help')}}">/help</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('/stories/create')}}">/new story</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        @if(auth()->user())
                        /{{str_slug(auth()->user()->name)}} <span class="caret"></span>
                        @else
                        /user <span class="caret"></span>
                        @endif
                    </a>
                    <ul class="dropdown-menu">
                        @if(auth()->user())
                            <li><a href="{{url('/user')}}/{{auth()->user()->slug}}">/my-stories</a></li>
                            <li><a href="{{url('/user')}}/{{auth()->user()->slug}}/votes">/votes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{url('/logout')}}">/logout</a></li>
                        @else
                            <li><a href="{{url('/login')}}">/login</a></li>
                        @endif
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
