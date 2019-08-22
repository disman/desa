<div class="col-md-10 col-sm-11 display-table-cell valign-top">
    <div class="row">
        <header id="nav-header" class="clearfix">
            <div class="col-md-5">
                <nav class="navbar-default pull-left">
                    <button class="navbar-toggle collapsed" type="button" data-toggle="offcanvas" data-target="#side-menu">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </nav>
                <input type="text" class="hidden-xs hidden-sm" id="header-search-field" placeholder="Search....">
            </div>

            <div class="col-md-7">
                <ul class="pull-right">
                    <li id="welcome" class="hidden-xs"><strong>Welcome, <?= $this->session->userdata('nama'); ?> to admin area</strong></li>
                    <li class="fixed-width">
                        <a href="#">
                            <span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
                            <span class="label label-warning">5</span>
                        </a>
                    </li>

                    <li class="fixed-width">
                        <a href="#">
                            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                            <span class="label label-message">7</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?= base_url('auth/logout'); ?>" class="logout">
                            <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                            Log out
                        </a>
                    </li>
                </ul>
            </div>
        </header>
    </div>