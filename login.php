<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="buy.css">
</head>
<body>
	sgejewhdbdnjk
	zxcvbnm,.///.,mnbvcxzxcvbnm
	<?php
		require 'header.php';
	?>
    <main>
    <div class="log_body">
        <div class="log_hed">
            <h1>LOGIN</h1>
        </div>
    
        <div class="log_bod">
			
            <form action="login.php" method="post">
				
                <label for="email">Email:</label><br>
                <input type="email" name="email"><br>    
                <label for="password">Password:</label><br>
                <input type="password" name="password"><br>
				<label for="adminselec_t">Login Category</label>
				
				<select name="cat_login" class="cat_login">
					<option value="Adm_ni" class="cat_login">Admin</option>
					<option value="memb_re"class="cat_login">Member</option>
					</select>
                <div class="log_err">                    
                    <a href="">Forgot password?</a> 
                    <a href="register.php">Create new account</a><br>
				<br>
                </div>
                
                <button name="login">LOGIN</button>
            </form>
        </div>
    </div>
    <?php
        
    
    ?>  
    <h1>Latest Car Listings / Search Results / Category listing</h1>
			<ul class="carList">
				<li>
					<img src="car.png" alt="car name">
					<article>
						<h2>Car model and make</h2>
						<h3>Car category</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales ornare purus, non laoreet dolor sagittis id. Vestibulum lobortis laoreet nibh, eu luctus purus volutpat sit amet. Proin nec iaculis nulla. Vivamus nec tempus quam, sed dapibus massa. Etiam metus nunc, cursus vitae ex nec, scelerisque dapibus eros. Donec ac diam a ipsum accumsan aliquet non quis orci. Etiam in sapien non erat dapibus rhoncus porta at lorem. Suspendisse est urna, egestas ut purus quis, facilisis porta tellus. Pellentesque luctus dolor ut quam luctus, nec porttitor risus dictum. Aliquam sed arcu vehicula, tempor velit consectetur, feugiat mauris. Sed non pellentesque quam. Integer in tempus enim.</p>

						<p class="price">Current bid: £1234.00</p>
						<a href="#" class="more auctionLink">More &gt;&gt;</a>
					</article>
				</li>
				<li>
					<img src="car.png" alt="car name">
					<article>
						<h2>Car model and make</h2>
						<h3>Car category</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales ornare purus, non laoreet dolor sagittis id. Vestibulum lobortis laoreet nibh, eu luctus purus volutpat sit amet. Proin nec iaculis nulla. Vivamus nec tempus quam, sed dapibus massa. Etiam metus nunc, cursus vitae ex nec, scelerisque dapibus eros. Donec ac diam a ipsum accumsan aliquet non quis orci. Etiam in sapien non erat dapibus rhoncus porta at lorem. Suspendisse est urna, egestas ut purus quis, facilisis porta tellus. Pellentesque luctus dolor ut quam luctus, nec porttitor risus dictum. Aliquam sed arcu vehicula, tempor velit consectetur, feugiat mauris. Sed non pellentesque quam. Integer in tempus enim.</p>

						<p class="price">Current bid: £2000</p>
						<a href="#" class="more auctionLink">More &gt;&gt;</a>
					</article>
				</li>
				<li>
					<img src="car.png" alt="car name">
					<article>
						<h2>Car model and make</h2>
						<h3>Car category</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales ornare purus, non laoreet dolor sagittis id. Vestibulum lobortis laoreet nibh, eu luctus purus volutpat sit amet. Proin nec iaculis nulla. Vivamus nec tempus quam, sed dapibus massa. Etiam metus nunc, cursus vitae ex nec, scelerisque dapibus eros. Donec ac diam a ipsum accumsan aliquet non quis orci. Etiam in sapien non erat dapibus rhoncus porta at lorem. Suspendisse est urna, egestas ut purus quis, facilisis porta tellus. Pellentesque luctus dolor ut quam luctus, nec porttitor risus dictum. Aliquam sed arcu vehicula, tempor velit consectetur, feugiat mauris. Sed non pellentesque quam. Integer in tempus enim.</p>

						<p class="price">Current bid: £3000</p>
						<a href="#" class="more auctionLink">More &gt;&gt;</a>
					</article>
				</li>
			</ul>

			<hr />

			<h1>Car Page</h1>
			<article class="car">

					<img src="car.png" alt="car name">
					<section class="details">
						<h2>Car model and make</h2>
						<h3>Car category</h3>
						<p>Auction created by <a href="#">User.Name</a></p>
						<p class="price">Current bid: £4000</p>
						<time>Time left: 8 hours 3 minutes</time>
						<form action="#" class="bid">
							<input type="text" name="bid" placeholder="Enter bid amount" />
							<input type="submit" value="Place bid" />
						</form>
					</section>
					<section class="description">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales ornare purus, non laoreet dolor sagittis id. Vestibulum lobortis laoreet nibh, eu luctus purus volutpat sit amet. Proin nec iaculis nulla. Vivamus nec tempus quam, sed dapibus massa. Etiam metus nunc, cursus vitae ex nec, scelerisque dapibus eros. Donec ac diam a ipsum accumsan aliquet non quis orci. Etiam in sapien non erat dapibus rhoncus porta at lorem. Suspendisse est urna, egestas ut purus quis, facilisis porta tellus. Pellentesque luctus dolor ut quam luctus, nec porttitor risus dictum. Aliquam sed arcu vehicula, tempor velit consectetur, feugiat mauris. Sed non pellentesque quam. Integer in tempus enim.</p>


					</section>

					<section class="reviews">
						<h2>Reviews of User.Name </h2>
						<ul>
							<li><strong>John said </strong> great car seller! Car was as advertised and delivery was quick <em>29/01/2024</em></li>
							<li><strong>Dave said </strong> disappointing, Car was slightly damaged and arrived slowly.<em>22/12/2023</em></li>
							<li><strong>Susan said </strong> great value but the delivery was slow <em>22/07/2023</em></li>

						</ul>

						<form>
							<label>Add your review</label> <textarea name="reviewtext"></textarea>

							<input type="submit" name="submit" value="Add Review" />
						</form>
					</section>
					</article>

					<hr />
					<h1>Sample Form</h1>

					<form action="#">
						<label>Text box</label> <input type="text" />
						<label>Another Text box</label> <input type="text" />
						<input type="checkbox" /> <label>Checkbox</label>
						<input type="radio" /> <label>Radio</label>
						<input type="submit" value="Submit" />

					</form>

    </main>
    <footer>
		&copy; Carbuy 2024
	</footer>
</body>
</html>