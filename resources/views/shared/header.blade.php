<!-- header --> 
		<nav class="navbar navbar-inverse navbar-static-top">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">ProgQuest</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="main-menu">
		      <ul class="nav navbar-nav">
		        <li><a href="{{ url('questions') }}">Questions</a></li>
		        <li><a href="{{ url('about') }}">About</a></li>
		        <li><a href="{{ url('contact') }}">Contact</a></li>
		      </ul>
		      @include('shared.user_action')
		      @include('shared.question_search_form')
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		<!-- end of header -->