</div><!--end w3l_banner_nav_right-->
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- newsletter-top-serv-btm -->
	<!-- <div class="newsletter-top-serv-btm">
		<div class="container">
			<div class="col-md-4 wthree_news_top_serv_btm_grid">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-shopping-cart" aria-hidden="true"></i>
				</div>
				<h3>Kemudahan Berbelanja</h3>
				<p>Tomo Store menyediakan berbagai metode pembayaran untuk bertransaksi.</p>
			</div>
			<div class="col-md-4 wthree_news_top_serv_btm_grid">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-bar-chart" aria-hidden="true"></i>
				</div>
				<h3>Kualitas Produk</h3>
				<p>Tomo Store memberikan kualitas produk yang terjamin tiap minggunya.</p>
			</div>
			<div class="col-md-4 wthree_news_top_serv_btm_grid">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-truck" aria-hidden="true"></i>
				</div>
				<h3>Berbagai Jasa Pengiriman </h3>
				<p>Tomo Store menyediakan berbagai pilihan jasa pengiriman dengan jangkauan nasional.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div> -->
<!-- //newsletter-top-serv-btm -->

<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="w3agile_newsletter_left">
				<h3>sign up for our newsletter</h3>
			</div>
			<div class="w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="subscribe now">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 w3_footer_grid">
				<h3>information</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="<?=base_url;?>index.php?act=events">Events</a></li>
					<li><a href="<?=base_url;?>index.php?act=about">About Us</a></li>
					<li><a href="<?=base_url;?>index.php?act=products">Best Deals</a></li>
					<li><a href="<?=base_url;?>index.php?act=services">Services</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>policy info</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="<?=base_url;?>index.php?act=faqs">FAQ</a></li>
					<li><a href="<?=base_url;?>index.php?act=privacy">privacy policy</a></li>
					<li><a href="<?=base_url;?>index.php?act=privacy">terms of use</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>what in stores</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="<?=base_url;?>index.php?act=kategori&kategori=pet">Pet Food</a></li>
					<li><a href="<?=base_url;?>index.php?act=kategori&kategori=frozen">Frozen Snacks</a></li>
					<li><a href="<?=base_url;?>index.php?act=kategori&kategori=kitchen">Kitchen</a></li>
					<li><a href="<?=base_url;?>index.php?act=kategori&kategori=products">Branded Foods</a></li>
					<li><a href="<?=base_url;?>index.php?act=kategori&kategori=household">Households</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>twitter posts</h3>
				<ul class="w3_footer_grid_list1">
					<li><label class="fa fa-twitter" aria-hidden="true"></label><i>01 day ago</i><span>Tomo Studio <a href="#">http://google.com</a>
						permbagian source code ol shop akan diberikan pada akhir acara.
						<a href="#">http://google.com</a>Tomo Studio.</span></li>
					<li><label class="fa fa-twitter" aria-hidden="true"></label><i>02 day ago</i><span>Tomo Studio <a href="#">http://google.com</a>
						Pelajari Backend dan buat untuk keperluan online shop ini
						<a href="#">http://google.com</a>Tomo Studio.</span></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<div class="agile_footer_grids">
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h4>100% secure payments</h4>
						<img src="<?=base_url;?>images/card.png" alt=" " class="img-responsive" />
					</div>
				</div>
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h5>connect with us</h5>
						<ul class="agileits_social_icons">
							<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="wthree_footer_copy">
				<p>© 2018 Tomo Studio. All rights reserved | Developed by <a href="#">Tomo Studio</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.js"></script>
<script>
		paypal.minicart.render();

		

       	var items = paypal.minicart.cart.items();
       	console.log(items);
       	var len = items.length;
       	var list="";
       	var discount=0;
       	var biglist="";
       	for(i=0;i<len;i++){
       		list= list+"<li>"+items[i].get('item_name').charAt(0).toUpperCase() + items[i].get('item_name').slice(1)+" <i>-</i> <span>$ "+items[i].get('amount')*items[i].get('quantity')+" </span></li>";
       		discount+=items[i].get('discount_amount')*items[i].get('quantity');

       		biglist=biglist+'<tr class="rem'+items[i].get('idx')+'"><td class="invert">'+(i+1)+'</td><td class="invert-image"><a href="<?=base_url;?>"><img src="'+items[i].get('pic')+'" alt=" " class="img-responsive"></a></td><td class="invert"><div class="quantity"> <div class="quantity-select"><div class="entry value-minus">&nbsp;</div><div class="entry value"><span>'+items[i].get('quantity')+'</span></div><div class="entry value-plus active">&nbsp;</div></div></div></td><td class="invert">'+items[i].get('item_name')+'</td><td class="invert">$'+items[i].get('amount')*items[i].get('quantity')+'</td><td class="invert">'+items[i].get('discount_amount')*items[i].get('quantity')+'</td><td class="invert"><div class="rem"><div class="close1" id="'+items[i].get('idx')+'"> </div></div></td></tr>';
       	}
       	$('.listitem').html(list);
       	$('.biglistitem').html('<table class="timetable_sub"><thead><tr><th>SL No.</th><th>Product</th><th>Quality</th><th>Product Name</th><th>Price</th><th>Discount</th><th>Remove</th></tr></thead><tbody>'+biglist+'</tbody></table>');
       	$('.totaldisc').html(discount);

       	var cartTotal = paypal.minicart.cart.subtotal();
       	$('.totalCart').html('$ '+cartTotal.toFixed(2));

       	$('.jmlitem').html(len);

//buat lihat data cart di console
       	paypal.minicart.cart.items().forEach(
		  console.log.bind(console)
		 
		);

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>
</body>
</html>