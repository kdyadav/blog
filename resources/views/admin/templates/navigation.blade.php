<!-- NAVIGATION BEGIN -->
	<nav class="navbar navbar-fixed-top">
			<div class="container_fluid"> 
				<a class="navbar-brand goto" href="index.html#wrap"> <img src="{{asset('public/assets/images/logo.png')}}" alt="vKulp" height="44" width="85" /> </a>
				<a class="contact-btn icon-envelope" data-toggle="modal" data-target="#modalContact"></a>
				<button class="navbar-toggle menu-collapse-btn collapsed" data-toggle="collapse" data-target=".navMenuCollapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<div class="collapse navbar-collapse navMenuCollapse">
					<ul class="nav">
						<li><a href="{{url('categories')}}">Categories</a></li>
						<li><a href="{{url('tags')}}">Tags</a></li>
					</ul>
				</div>
			</div>
		</nav>
	<!-- NAVIGAION END -->