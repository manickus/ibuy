<header class="main-header">
		<div class="page-logo">
				<a href="">
					IBuyNow
				</a>
			</div>
		 <div class="form-nav-search lg-search" >
          {!! Form::open(['url' => 'search','method' => 'get']) !!}

			<div class="search-lg-form-group"> 
            {!! Form::text('search',null, ['class'=>'lg-search-input',
                                            'placeholder' => 'Szukaj',]) !!}
            {!! Form::submit('Szukaj', ['class' => 'btn btn-outline-success my-2 my-sm-0']) !!}
			</div>
        {!! Form::close() !!}
      </div>
			<nav class="main-navigation">
				<button class="call-to-menu">
					<i class="fa fa-bars"  aria-hidden="true" ></i>
				</button>
			<ul class="menu-list">
				<li class="nav-item categories-mobile-item">
					<button  class="btn-profile call-to-mobile-categories">Kategorie</button>
					<ul class="categories-mobile">
						@foreach ($categories as $category)
							<li>
                				<a href="{{ route('category.show', ['category' => $category->slug])}}" 
               					   class="menu-item-mobile">
               						 <i class="{{ $category->icon }}"> </i>
                					{{ $category->name }} 
              					</a>
							</li>
              			@endforeach
					</ul>
				</li>
				
				<li>
					<div class="form-nav-search mobile-search" >
			          {!! Form::open(['url' => 'search','method' => 'get']) !!}
						<div class="search-mobile-form-group"> 
			            	{!! Form::text('search',null, ['class'=>'lg-search-input',
			                                            'placeholder' => 'Szukaj',]) !!}
			            	{!! Form::submit('Szukaj', ['class' => 'btn btn-outline-success my-2 my-sm-0']) !!}
						</div>
			           {!! Form::close() !!}
	      			</div>
	      		</li>
				<li>
					@if (\Auth::check())
				<li class="menu-profile-item">
						<a href="{{ route('profile.show') }}" class="btn-profile">Profil</a>
				</li>
				@endif
				<li class="menu-profile-item">
					<a class="btn-profile" href="{{ route('ad.create')}}">Dodaj</a>
				</li>
				@auth
						{!! Form::open(['route' => 'logout']) !!}
								{!! Form::submit('Wyloguj się', ['class' => 'btn red btn-send-comment']) !!}
						{!! Form::close() !!}
				@else
					{!! Form::open(['route' => 'login']) !!}
						<div class="login-form">
						<header class="login-header">
							<h4>Logowanie:</h4>
						</header>

							{!! Form::label('email', 'Nazwa', ['class' => 'login-form-label']) !!}
						    {!! Form::text('email',null, ['class'=>'form-control login-form-input',]) !!}
						    {!! Form::label('password', 'Hasło', ['class' => 'login-form-label']) !!}
							{!! Form::password('password', ['class'=>'form-control login-form-input']) !!}
							<div class="login-links">
									{!! Form::submit('Zaloguj', ['class' => 'btn btn-send-comment']) !!}
							{!! link_to_route('register', $title = "Rejestracja",null,['class' => 'btn btn-send-comment']) !!}
							</div>
						</div>
					{!! Form::close() !!}
				@endauth
				</li>
			</ul>
	</nav>

</header>

	<nav class="lg-categories">
		<ul class="lg-categories-nav">
			     @foreach ($categories as $category)
				<li>
                <a 
                  href="{{ route('category.show', ['category' => $category->slug])}}" 
                  class="menu-item-lg">
                <i class="{{ $category->icon }}"> </i>
                {{ $category->name }} 
                </a>
				</li>
              @endforeach
		</ul>
	</nav>