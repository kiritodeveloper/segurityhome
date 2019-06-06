            <aside class="sidebar">
                <div class="scrollbar-inner">

                    <div class="user">
                        <div class="user__info" data-toggle="dropdown">
                            <img class="user__img" src="{{Auth::user()->foto}}" alt="">
                            <div>
                                <div class="user__name">{{ Auth::user()->name}}</div>
                                <div class="user__email">{{ Auth::user()->email}}</div>
                            </div>
                        </div>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="">View Profile</a>
                            <a class="dropdown-item" href="">Settings</a>
                            <a class="dropdown-item" href="">Logout</a>
                        </div>
                    </div>

                    <ul class="navigation">
                        <li class="navigation__active"><a href="home"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="navigation__active"><a href="users"><i class="zmdi zmdi-accounts-alt"></i> Usuarios</a></li>
                    </ul>

                </div>
            </aside>