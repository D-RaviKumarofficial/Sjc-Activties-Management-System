<header id="header" class="header">
    <div class="header-menu">
        <div class="col-sm-7">
            <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa-tasks"></i></a>           
        </div>
        <div class="col-sm-5">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display: flex; align-items: center;">
                    <img class="user-avatar rounded-circle" src="../images/sjclogo.png" alt="User Avatar" style="margin-right: 10px;">
                    <!-- {{-- <span>{{ $user->name }}</span> Display the username --}} -->
                </a>
                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="#"
                       onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off"></i> Logout
                    </a>
                    <form id="logout-form" action="#" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
