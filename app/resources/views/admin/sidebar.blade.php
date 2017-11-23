<div id="side-bar" class="col-md-3">
    <h1 class="title">Da task manager</h1>
    <form method="GET" action="{{ url('/task') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
        <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                <span class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </form>
</div>