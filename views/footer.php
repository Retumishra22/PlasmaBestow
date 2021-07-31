<section class="footer">
		<div class="container">
			<div class="footer-main">
				<div class="footer-1">
					<p><a href="contact.php">Contact us</a></p>
				</div>
				<div class="footer-2">
					<p> <a href="about.php"> About us</a></p>
				</div>

				<?php
            if(isset($_SESSION['email'])){
                echo '<div class="footer-3">
						<p> <a href="../includes/delete.inc.php">Delete account</a></p>
					</div>';
            }
            else{
                echo '<div class="footer-3">
						<p> <a href="login.php"> Log in </a></p>
					</div>'; 
            }
            ?>

				
			</div>
		</div>
	</section>