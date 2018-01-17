 <div class="row">
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Użytkownicy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Ogłoszenia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Wiadomości</a>
            </li>
          </ul>

     
        </nav>

        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
          <h1>Dashboard</h1>


        	<div class="row">
        	<div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-3">
                                    <i class="fa fa-user-circle-o fa-5x"></i>
                                </div>
                                <div class="col-md-9 text-right">
                                    <div class="huge">{{ $userCount }}</div>
                                    <div>Użytkowników!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Zobacz szczegóły</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div><div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-3">
                                    <i class="fa fa-file fa-5x"></i>
                                </div>
                                <div class="col-md-9 text-right">
                                    <div class="huge">{{ $adCount }}</div>
                                    <div>Ogłoszeń</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Zobacz szczegóły</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div><div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-md-9 text-right">
                                    <div class="huge">Not yet!</div>
                                    <div>Wiadomości</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Zobacz szczegóły</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
        	</div>