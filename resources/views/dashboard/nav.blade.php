
    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse" style="position: fixed;">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="{{ route('home') }}">IBuyNow</a>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('ad.create')}}">Dodaj</a>
          </li>
           <li class="nav-item dropdown">
              <div style="position: absolute;right: 15px;border-radius: 50%;background: #e74c3c;width: 20px;height: 20px; line-height: 16px; color: #fff; display: none; text-align: center;" id="notifi"></div>
              <a class="nav-link dropdown-toggle" href="{{ route('profile.show')}}" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
                {!! link_to_route('profile.show', "Oferty", null,['class' => 'dropdown-item']) !!}
                {!! link_to_route('profile.messages', "Wiadomości", null,['class' => 'dropdown-item notifi-menu']) !!}
                {!! link_to_route('profile.favorites', "Ulubione", null,['class' => 'dropdown-item']) !!}
            </div>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategorie</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              @foreach ($categories as $category)

                <a 
                  href="{{ route('category.show', ['category' => $category->slug])}}" 
                  class="dropdown-item">
                <i class="{{ $category->icon }}"> </i>
                {{ $category->name }} 
                </a>

              @endforeach
            </div>
          </li>
        </ul>

        <div class="form-inline my-2 my-lg-0" style="margin-right: 10px;">
          {!! Form::open(['url' => 'search','method' => 'get']) !!}


            {!! Form::text('search',null, ['class'=>'form-control',
                                            'placeholder' => 'Szukaj',]) !!}
            {!! Form::submit('Szukaj', ['class' => 'btn btn-outline-success my-2 my-sm-0']) !!}

        {!! Form::close() !!}
      </div>

        {!! Form::open(['url' => 'logout']) !!}
         

          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>

        {!! Form::close() !!}
      </div>
    </nav>
