<div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
    <div class="logo">
        <a hef="home.html"><img src="http://jskrishna.com/work/merkury/images/logo.png" alt="merkery_logo" class="hidden-xs hidden-sm">
            <img src="http://jskrishna.com/work/merkury/images/circle-logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
        </a>
    </div>
    <div class="navi">
        <ul>
            <li class="{{explode('/', Route::getFacadeRoot()->current()->uri())[0] === '' ? 'active' : ''}}">
                <a href="{{asset('/')}}">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="hidden-xs hidden-sm">Home</span>
                </a>
            </li>
            <li class="{{explode('/', Route::getFacadeRoot()->current()->uri())[0] === 'roles' ? 'active' : ''}}">
                <a href="{{asset('/roles')}}">
                    <i class="fa fa-user-tag" aria-hidden="true"></i>
                    <span class="hidden-xs hidden-sm">Roles</span>
                </a>
            </li>
            <li class="{{explode('/', Route::getFacadeRoot()->current()->uri())[0] === 'users' ? 'active' : ''}}">
                <a href="{{asset('/users')}}">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span class="hidden-xs hidden-sm">Users</span>
                </a>
            </li>
            <li class="{{explode('/', Route::getFacadeRoot()->current()->uri())[0] === 'businesses' ? 'active' : ''}}">
                <a href="{{asset('/businesses')}}">
                    <i class="fa fa-building" aria-hidden="true"></i>
                    <span class="hidden-xs hidden-sm">Businesses</span>
                </a>
            </li>
            <li class="{{explode('/', Route::getFacadeRoot()->current()->uri())[0] === 'modules' ? 'active' : ''}}">
                <a href="{{asset('/modules')}}">
                    <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                    <span class="hidden-xs hidden-sm">Modules</span>
                </a>
            </li>
        </ul>
    </div>
</div>
