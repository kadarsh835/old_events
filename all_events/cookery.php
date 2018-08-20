<div class="content">
    <header class="codrops-header">
        <div class="codrops-links">
            <a class="codrops-icon codrops-icon--prev" href="https://tympanus.net/Development/ProximityFeedback/" title="Previous Demo"><svg class="icon icon--arrow">
                    <use xlink:href="#icon-arrow"></use>
                </svg></a>
            <a class="codrops-icon codrops-icon--drop" href="https://tympanus.net/codrops/?p=34897" title="Back to the article"><svg class="icon icon--drop">
                    <use xlink:href="#icon-drop"></use>
                </svg></a>
        </div>
        <h1 class="codrops-header__title">COOKERY EVENT</h1>
        <a class="github" href="https://github.com/codrops/GridLayoutMotion/" title="Find this project on GitHub"><svg class="icon icon--github">
                <use xlink:href="#icon-github"></use>
            </svg></a>
    </header>
</div>
<div class="content">
    <div class="grid">
        <a class="grid__item" href="#preview-1">
            <div class="box">
                <div class="box__shadow"></div>
                <img class="box__img" src="img/cookery.jpg" alt="Some image" />
                <h3 class="box__title"><span class="box__title-inner" data-hover="22K">22K</span></h3>
                <h4 class="box__text"><span class="box__text-inner">Cookery</span></h4>
                <div class="box__deco">&#10014;</div>
                <p class="box__content">"Sometimes we go surfing when it's stormy weather"</p>
            </div>
        </a>
        <a class="grid__item grid__item--noclick" href="http://go.thoughtleaders.io/253620180522">
            <div class="box">
                <div class="box__shadow"></div>
                <img class="box__img" src="pater/monday.png" alt="Some image" />
                <h4 class="box__text"><span class="box__text-inner box__text-inner--rotated2 box__text-inner--reverse">Sponsor</span></h4>
                <p class="box__content"><strong>monday.com</strong> offers simplified planning and collaboration tools. Create customizable boards to track everything your team is working on and keep all communication in one place and never lose track again. <strong>Create your free account</strong></p>
            </div>
        </a>
    </div>
</div>
<div class="overlay">
    <div class="overlay__reveal"></div>
    <div class="overlay__item" id="preview-1">
        <div class="box">
            <div class="box__shadow"></div>
            <img class="box__img box__img--original" src="img/original/cookery.jpg" alt="Some image" />
            <h3 class="box__title"><span class="box__title-inner">22K</span></h3>
            <h4 class="box__text"><span class="box__text-inner">Cookery</span></h4>
            <div class="box__deco">&#10014;</div>
        </div>
        <div class="overlay__content">
            <div class="myBtn">
                <a href="#" onclick="function_event('Cookery')" data-title="Register"></a>
            </div>
            <p> It's time the tale were told of how you took a child and you made him old.</p>
        </div>
    </div>
    <button class="overlay__close"><svg class="icon icon--cross">
            <use xlink:href="#icon-cross"></use>
        </svg></button>
</div>
<?php 
			$if_login=1;
			if($if_login){
				echo'
					<div id="myModal" class="modal">
						<div class="modal-content">
							<span class="close1">&times;</span>
							<div class="container">
								<header>
									<h1>
									<a href="#">
										<img src="http://tfgms.com/sandbox/dailyui/logo-1.png" alt="Authentic Collection">
									</a>
									</h1>
								</header>
								<h1 id="event_title" class="text-center">Register</h1>
								<form class="registration-form">
									<input type="hidden" id="event_name" name="event" value="Solo_Duet">
									<label class="col-one-half">
										<span class="label-text">First Name</span>
										<input type="text" name="firstName">
									</label>
									<label class="col-one-half">
										<span class="label-text">Last Name</span>
										<input type="text" name="lastName">
									</label>
									<label>
										<span class="label-text">Email</span>
										<input type="text" name="email">
									</label>
									<label class="password">
										<span class="label-text">Password</span>
										<button class="toggle-visibility" title="toggle password visibility" tabindex="-1">
											<span class="glyphicon glyphicon-eye-close"></span>
										</button>
										<input type="password" name="password">
									</label>
									<div class="text-center">
										<button class="submit" name="register">Sign Me Up</button>
									</div>
								</form>
							</div>
						</div>
			</div>';}
			else echo'<div id="myModal" class="modal">
						<div class="modal-content">
							<span class="close1">&times;</span>
							<div class="container">
								<header>
									<h1>
									<a href="#">
										<img src="http://tfgms.com/sandbox/dailyui/logo-1.png" alt="Authentic Collection">
									</a>
									</h1>
								</header>
								<h1 class="text-center">Login/Signup</h1>
								<form class="registration-form">
									<label>
										<span class="label-text">Email</span>
										<input type="text" name="email">
									</label>
									<label class="password">
										<span class="label-text">Password</span>
										<button class="toggle-visibility" title="toggle password visibility" tabindex="-1">
											<span class="glyphicon glyphicon-eye-close"></span>
										</button>
										<input type="password" name="password">
									</label>
									<div class="text-center">
										<button class="submit" name="register">Sign Me Up</button>
									</div>
								</form>
							</div>
						</div>
			</div>';
				?>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/demo.js"></script>
<script>
    $(document).ready(function() {
        $('.registration-form').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: "register.php",
                type: "POST",
                data: $(this).serialize(),
                success: function(data) {
                    alert("ho gya");
                },
                error: function(jXHR, textStatus, errorThrown) {
                    alert(errorThrown);
                }
            });
        });
    });
</script>
<script>
    var modal = document.getElementById('myModal');
    var span = document.getElementsByClassName("close1")[0];

    function function_event(evt) {
        $('#event_name').attr('value', evt);
        $('#event_title').html("Register for " + evt);
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>