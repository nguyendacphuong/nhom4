	<!-- map-area start -->
	<!-- map-area end -->
	<!-- contact-area start -->
	<div class="contact-area">
		<div class="container">
			<div class="row">
				<!-- contact-info start -->
				<div class="col-md-6 col-sm-12">
					<div class="contact-info">
						<h3>THÔNG TIN LIÊN HỆ</h3>
						<ul>
							<li>
								<i class="fa fa-map-marker"></i> <strong>ĐỊA CHỈ: </strong>
								1234 Pall Mall Street, London England
							</li>
							<li>
								<i class="fa fa-envelope"></i> <strong>SỐ ĐIỆN THOẠI: </strong>
								(800) 0123 4567 890
							</li>
							<li>
								<i class="fa fa-mobile"></i> <strong>Email: </strong>
								<a href="#">info@bootexperts.com</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- contact-info end -->
				<div class="col-md-6 col-sm-12">
					<div class="contact-form">
						<h3><i class="fa fa-envelope-o"></i>PHẢN HỒI</h3>
				        <form  action="<?= BASE_URL . 'lienhe'?>" method="POST">
						    <div class="row">
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="name" placeholder="Name (required)" />
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="email" name="email" placeholder="Email (required)" />
								</div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
									<input type="text" name="phone_number" placeholder="phone number (required)" />
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<input style="height: 50px;width: 540px;padding: 18px;margin-bottom: 19px;" type="date" name="created_at" />
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<input type="text" name="subject_name" placeholder="Subject" />
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<textarea id="message" name="note" cols="30" rows="10" placeholder="Message"></textarea>
									<input type="submit" name="btnsend" value="GỬI PHẢN HỒI" />
								</div>
						      </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- contact-area end -->