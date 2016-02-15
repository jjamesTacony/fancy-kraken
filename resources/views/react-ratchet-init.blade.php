<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>React/Ratchet Template page</title>

    <!-- Sets initial viewport load and disables zooming  -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    <!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Include the compiled Ratchet CSS -->
    <link href="/ratchet-2.0.2/dist/css/ratchet.css" rel="stylesheet">
	<link rel="stylesheet" href="/react-starterkit-1/dist/css/main.css">
    <!-- Include the compiled Ratchet JS -->
    <script src="/ratchet-2.0.2/dist/js/ratchet.js"></script>
	
  </head>
  <body>

    <!-- Make sure all your bars are the first things in your <body> -->
    <header class="bar bar-nav">
		<a class="icon icon-left-nav pull-left"></a>
		<a class="icon icon-right-nav pull-right"></a>
		<h1 class="title">React / Reflux / Ratchet / Laravel 5 Boilerplate</h1>
	</header>

    <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
    <div class="content">
		
		<div id="app"></div>
		<script src="/react-starterkit-1/dist/js/main.js"></script>
		<br/>
		<ul class="table-view">
		  <li class="table-view-cell">Item 1</li>
		  <li class="table-view-cell table-view-cell">Item 2</li>
		  <li class="table-view-divider">Divider</li>
		  <li class="table-view-cell">Item 3</li>
		</ul>
		<div class="content-padded">
		  <h1>h1. Heading</h1>
		  <h2>h2. Heading</h2>
		  <h3>h3. Heading</h3>
		  <h4>h4. Heading</h4>
		  <h5>h5. Heading</h5>
		  <h6>h6. Heading</h6>
		  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		  quis nostrud exercitation ullamco.</p>
		</div>
		<div class="bar-nav">
			<button class="btn icon icon-left-nav pull-left">
				Left
			</button>
			<button class="btn icon icon-right-nav pull-right">
				Right
			</button>
			<div class="segmented-control">
					<a class="control-item active">One</a>
					<a class="control-item">Two</a>
					<a class="control-item">Three</a>
			</div>
		</div>
      <p class="content-padded">Thanks for downloading Ratchet. This is an example HTML page that's linked up to compiled Ratchet CSS and JS, has the proper meta tags and the HTML structure. Need some more help before you start filling this with your own content? Check out some Ratchet resources:</p>
		<div class="card">
        <ul class="table-view">
          <li class="table-view-cell">
            <a class="push-right" href="http://goratchet.com">
              <strong>Ratchet documentation</strong>
            </a>
          </li>
          <li class="table-view-cell">
            <a class="push-right" href="https://github.com/twbs/ratchet/">
              <strong>Ratchet on Github</strong>
            </a>
          </li>
          <li class="table-view-cell">
            <a class="push-right" href="https://groups.google.com/forum/#!forum/goratchet">
              <strong>Ratchet Google group</strong>
            </a>
          </li>
          <li class="table-view-cell">
            <a class="push-right" href="https://twitter.com/goratchet">
              <strong>Ratchet on Twitter</strong>
            </a>
          </li>
        </ul>
		<ul class="table-view">
		  <li class="table-view-cell">
			<a class="navigate-right">
			  <span class="badge">5</span>
			  Item 1
			</a>
		  </li>
		  <li class="table-view-cell">
			<a class="navigate-right">
			  <span class="badge">5</span>
			  Item 2
			</a>
		  </li>
		  <li class="table-view-cell">
			<a class="navigate-right">
			  <span class="badge">5</span>
			  Item 3
			</a>
		  </li>
		</ul>
		<ul class="table-view">
		  <li class="table-view-cell media">
			<a class="navigate-right">
			  <img class="media-object pull-left" src="http://placehold.it/42x42">
			  <div class="media-body">
				Item 1
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. Lorem ipsum dolor sit amet.</p>
			  </div>
			</a>
		  </li>
		  <li class="table-view-cell media">
			<a class="navigate-right">
			  <img class="media-object pull-left" src="http://placehold.it/42x42">
			  <div class="media-body">
				Item 1
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. Lorem ipsum dolor sit amet.</p>
			  </div>
			</a>
		  </li>
		  <li class="table-view-cell media">
			<a class="navigate-right">
			  <img class="media-object pull-left" src="http://placehold.it/42x42">
			  <div class="media-body">
				Item 1
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. Lorem ipsum dolor sit amet.</p>
			  </div>
			</a>
		  </li>
		</ul>
		<ul class="table-view">
		  <li class="table-view-cell media">
			<a class="navigate-right">
			  <span class="media-object pull-left icon icon-trash"></span>
			  <div class="media-body">
				Item 1
			  </div>
			</a>
		  </li>
		  <li class="table-view-cell media">
			<a class="navigate-right">
			  <span class="media-object pull-left icon icon-gear"></span>
			  <div class="media-body">
				Item 2
			  </div>
			</a>
		  </li>
		  <li class="table-view-cell media">
			<a class="navigate-right">
			  <span class="media-object pull-left icon icon-pages"></span>
			  <div class="media-body">
				Item 3
			  </div>
			</a>
		  </li>
		</ul>
		<ul class="table-view">
		  <li class="table-view-cell">Item 1 <button class="btn">Button</button></li>
		  <li class="table-view-cell">Item 2 <button class="btn btn-primary">Button</button></li>
		  <li class="table-view-cell">Item 3 <button class="btn btn-positive">Button</button></li>
		  <li class="table-view-cell">Item 4 <button class="btn btn-negative">Button</button></li>
		</ul>
		<ul class="table-view">
		  <li class="table-view-cell">
			Item 1
			<div class="toggle">
			  <div class="toggle-handle"></div>
			</div>
		  </li>
		  <li class="table-view-cell">
			Item 2
			<div class="toggle active">
			  <div class="toggle-handle"></div>
			</div>
		  </li>
		  <li class="table-view-cell">
			Item 3
			<div class="toggle">
			  <div class="toggle-handle"></div>
			</div>
		  </li>
		</ul>
		</div>
		
		<div class="card">
		<button class="btn">Button</button>
		<button class="btn btn-primary">Button</button>
		<button class="btn btn-positive">Button</button>
		<button class="btn btn-negative">Button</button>
		<button class="btn btn-link">Button</button>

		<button class="btn btn-outlined">Button</button>
		<button class="btn btn-primary btn-outlined">Button</button>
		<button class="btn btn-positive btn-outlined">Button</button>
		<button class="btn btn-negative btn-outlined">Button</button>
		<button class="btn">
		  <span class="icon icon-search"></span>
		  Button
		</button>
		<button class="btn btn-primary">
		  <span class="icon icon-search"></span>
		  Button
		</button>
		<button class="btn btn-positive">
		  <span class="icon icon-search"></span>
		  Button
		</button>
		<button class="btn btn-negative">
		  <span class="icon icon-search"></span>
		  Button
		</button>
		<button class="btn btn-link">
		  <span class="icon icon-left"></span>
		  Button
		</button>
		<button class="btn">Badge button <span class="badge">1</span></button>
		<button class="btn btn-primary">Badge button <span class="badge badge-primary">1</span></button>
		<button class="btn btn-positive">Badge button <span class="badge badge-positive">1</span></button>
		<button class="btn btn-negative">Badge button <span class="badge badge-negative">1</span></button>

		<button class="btn btn-outlined">Badge button <span class="badge badge-inverted">1</span></button>
		<button class="btn btn-outlined btn-primary">Badge button <span class="badge badge-primary badge-inverted">1</span></button>
		<button class="btn btn-outlined btn-positive">Badge button <span class="badge badge-positive badge-inverted">1</span></button>
		<button class="btn btn-outlined btn-negative">Badge button <span class="badge badge-negative badge-inverted">1</span></button>
		<button class="btn btn-block">Block button</button>
		<button class="btn btn-primary btn-block">Block button</button>
		<button class="btn btn-positive btn-block">Block button</button>
		<button class="btn btn-negative btn-block">Block button</button>

		<button class="btn btn-block btn-outlined">Block button</button>
		<button class="btn btn-primary btn-block btn-outlined">Block button</button>
		<button class="btn btn-positive btn-block btn-outlined">Block button</button>
		<button class="btn btn-negative btn-block btn-outlined">Block button</button>
		</div>
		
		<div class="card">
			<div class="segmented-control">
			  <a class="control-item active" href="#item1mobile">
				Thing one
			  </a>
			  <a class="control-item" href="#item2mobile">
				Thing two
			  </a>
			  <a class="control-item" href="#item3mobile">
				Thing three
			  </a>
			</div>
		</div>
			<div class="card">
			  <span id="item1mobile" class="control-content active">Item 1</span>
			  <span id="item2mobile" class="control-content">Item 2</span>
			  <span id="item3mobile" class="control-content">Item 3</span>
			
				<span class="badge">1</span>
				<span class="badge badge-primary">2</span>
				<span class="badge badge-positive">3</span>
				<span class="badge badge-negative">4</span>

				<span class="badge badge-inverted">1</span>
				<span class="badge badge-primary badge-inverted">2</span>
				<span class="badge badge-positive badge-inverted">3</span>
				<span class="badge badge-negative badge-inverted">4</span>
				<form>
				  <input type="text" placeholder="Full name">
				  <input type="search" placeholder="Search">
				  <textarea rows="5"></textarea>
				  <button class="btn btn-positive btn-block">Choose existing</button>
				</form>
				<form class="input-group">
				  <div class="input-row">
					<label>Full name</label>
					<input type="text" placeholder="Mister Ratchet">
				  </div>
				  <div class="input-row">
					<label>Email</label>
					<input type="email" placeholder="ratchetframework@gmail.com">
				  </div>
				  <div class="input-row">
					<label>Username</label>
					<input type="text" placeholder="goRatchet">
				  </div>
				</form>
			</div>
			
				<a href="#myModalexample" class="btn">Open modal</a>
				<div id="myModalexample" class="modal">
				  <header class="bar bar-nav">
					<a class="icon icon-close pull-right" href="#myModalexample"></a>
					<h1 class="title">Modal</h1>
				  </header>

				  <div class="content">
					<p class="content-padded">The contents of my modal go here. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
				  </div>
				</div>
			
			<div class="card">
				<div class="slider" id="mySlider">
				  <div class="slide-group">
					<div class="slide">
					  <img src="/assets/img/slide-1.jpg">
					  <span class="slide-text">
						<span class="icon icon-left-nav"></span>
						Slide me
					  </span>
					</div>
					<div class="slide">
					  <img src="/assets/img/slide-2.jpg">
					</div>
					<div class="slide">
					  <img src="/assets/img/slide-3.jpg">
					</div>
				  </div>
				</div>
			</div>
			<div class="card">
				<div class="content-padded">
				  <span class="icon icon-back"></span>
				  <span class="icon icon-bars"></span>
				  <span class="icon icon-caret"></span>
				  <span class="icon icon-check"></span>
				  <span class="icon icon-close"></span>
				  <span class="icon icon-code"></span>
				  <span class="icon icon-compose"></span>
				  <span class="icon icon-download"></span>
				  <span class="icon icon-edit"></span>
				  <span class="icon icon-forward"></span>
				  <span class="icon icon-gear"></span>
				  <span class="icon icon-home"></span>
				  <span class="icon icon-info"></span>
				  <span class="icon icon-list"></span>
				  <span class="icon icon-more-vertical"></span>
				  <span class="icon icon-more"></span>
				  <span class="icon icon-pages"></span>
				  <span class="icon icon-pause"></span>
				  <span class="icon icon-person"></span>
				  <span class="icon icon-play"></span>
				  <span class="icon icon-plus"></span>
				  <span class="icon icon-refresh"></span>
				  <span class="icon icon-search"></span>
				  <span class="icon icon-share"></span>
				  <span class="icon icon-sound"></span>
				  <span class="icon icon-sound2"></span>
				  <span class="icon icon-sound3"></span>
				  <span class="icon icon-sound4"></span>
				  <span class="icon icon-star-filled"></span>
				  <span class="icon icon-star"></span>
				  <span class="icon icon-stop"></span>
				  <span class="icon icon-trash"></span>
				  <span class="icon icon-up-nav"></span>
				  <span class="icon icon-up"></span>
				  <span class="icon icon-right-nav"></span>
				  <span class="icon icon-right"></span>
				  <span class="icon icon-down-nav"></span>
				  <span class="icon icon-down"></span>
				  <span class="icon icon-left-nav"></span>
				  <span class="icon icon-left"></span>
				</div>
			</div>

		
   
	  
	  
		<br/>
		<br/>
		<br/>
		<br/>
	 <!-- end content -->
    </div>
	
	<nav class="bar bar-tab">
	  <a class="tab-item active" href="#">
		Label
	  </a>
	  <a class="tab-item" href="#">
		Label
	  </a>
	  <a class="tab-item" href="#">
		Label
	  </a>
	</nav>
	
	<!-- Segmented control in standard bar fixed to top -->
	<!--<nav class="bar bar-standard">
	  <div class="segmented-control">
		<a class="control-item active">Thing one</a>
		<a class="control-item">Thing two</a>
		<a class="control-item">Thing three</a>
	  </div>
	</nav>

	<!-- Block button in standard bar fixed below top bar -->
	<!--<div class="bar bar-standard bar-header-secondary">
	  <button class="btn btn-block">Block level button</button>
	</div>

	<!-- Block button in standard bar fixed above the footer -->
	<div class="bar bar-standard bar-footer-secondary">
	  <button class="btn btn-block">Block level button</button>
	</div>

	<!-- Icons in standard bar fixed to the bottom of the screen -->
	<div class="bar bar-standard bar-footer">
	  <a class="icon icon-compose pull-left"></a>
	  <a class="icon icon-gear pull-right"></a>
	</div>
	

  </body>
</html>