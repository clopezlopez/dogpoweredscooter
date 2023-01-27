<?php

//NO DIRECT ACCESS TO FILE
defined( 'ABSPATH' ) || exit;

//DEFINE SOME STARTERS FOR CUSTOM HEADER AND FOOTER
function lc_get_starter_content($field_name, $field_value = 1){
	
	if ($field_name=="is_header") return '
		<section>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container">
					<a class="navbar-brand" href="[lc_home_url]">
						<img src="https://getbootstrap.com/docs/4.4/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
						<span editable="inline">Brand Name</span>
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar1" aria-controls="myNavbar1" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="myNavbar1">
						<div lc-helper="shortcode" class="live-shortcode me-auto">[lc_nav_menu theme_location="primary" container_class="" container_id="" menu_class="navbar-nav"]</div>
						<a class="navbar-text text-decoration-none" href="tel:+1234567890">
			
							<svg width="1em" height="1em" viewBox="0 0 16 16" lc-helper="svg-icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
							</svg> Call us now: 1234567890
			
						</a>
					</div>
				</div>
			</nav>
		</section>
	';
	
	if ($field_name=="is_footer") return '
	
	<section class="text-light bg-dark">
		<div class="container py-5">
			<div class="row">
				<div class="col-lg-3">
					<div class="lc-block mb-4">
						<img class="img-fluid" alt="logo" src="https://cdn.livecanvas.com/media/svg/undraw-sample/undraw_connected_world_wuay.svg" style="max-height:10vh">
					</div>
					<div class="lc-block small">
						<div editable="rich">
							<p>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper matti pibus leo.</p>
						</div>
					</div>
					
					<div class="lc-block py-2">
						<a class="text-decoration-none" href="#">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="1em" height="1em" lc-helper="svg-icon" fill="var(--bs-light)">
								<path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
							</svg>
						</a>
						<a class="text-decoration-none" href="#">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" lc-helper="svg-icon" fill="var(--bs-light)">
								<path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
							</svg>
						</a>
						<a class="text-decoration-none" href="#">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="1em" height="1em" lc-helper="svg-icon" fill="var(--bs-light)">
								<path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
							</svg>
						</a>
						<a class="text-decoration-none" href="#">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="1em" height="1em" lc-helper="svg-icon" fill="var(--bs-light)">
								<path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path>
							</svg>
						</a>
						<a class="text-decoration-none" href="#">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="1em" height="1em" lc-helper="svg-icon" fill="var(--bs-light)">
								<path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
							</svg>
						</a>
					</div>

				</div>
				<div class="col-lg-2 offset-lg-1">
					<div class="lc-block mb-4">
						<div editable="rich">
							<h4>Get Started</h4>
						</div>
					</div>
					
					<div class="lc-block small">
						<div editable="rich">
							<p>Tutorial</p>
							<p>Resources
								<br>
							</p>
							<p>Docs</p>
							<p>Example</p>
						</div>
					</div>
					
				</div>
				<div class="col-lg-2 offset-lg-1">
					<div class="lc-block mb-4">
						<div editable="rich">
							<h4>About us</h4>
						</div>
					</div>
					
					<div class="lc-block small">
						<div editable="rich">
							<p>Story</p>
							<p>Work with us</p>
							<p>Blog</p>
							<p>News</p>
						</div>
					</div>
					
				</div>
				<div class="col-lg-2 offset-lg-1">
					<div class="lc-block mb-4">
						<div editable="rich">
							<h4>Downloads</h4>
						</div>
					</div>
					
					<div class="lc-block small">
						<div editable="rich">
							<p>Vertex 1.2</p>
							<p>Templates</p>
							<p>Sounds</p>
							<p>Gradients</p>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="py-5 container">
			<div class="row">
				<div class="col-6 small">
					<div class="lc-block">
						<div editable="rich">
							<p>Copyright © My Company 2020</p>
						</div>
					</div>
					
				</div>
				<div class="col-6 text-end small">
					<div class="lc-block">
						<div editable="rich">
							<p>
								<a class="text-decoration-none" href="#">License Details</a> -
								<a class="text-decoration-none" href="#">Terms &amp; Conditions</a>
							</p>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>

	';
	
	if ($field_name=="is_template" && $field_value=='single_post') return '

	<section>
		<div class="d-flex min-vh-100" lc-helper="background" style="background:url(https://images.unsplash.com/34/ddTzoX58Q153kjaitXl4_ny.jpg?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;h=768&amp;fit=crop&amp;ixid=eyJhcHBfaWQiOjM3ODR9)  center / cover no-repeat; background-color:#444; background-blend-mode: overlay;">
			<div class="lc-block align-self-center text-center text-light col-md-8 offset-md-2">
				<h1 class="font-weight-bold display-1" editable="inline">[lc_the_title]</h1>
				<div editable="inline" class="font-weight-light">
					[lc_the_content]
				</div>
			</div>
		</div>
	</section>

	';

	if ($field_name=="is_template" && $field_value=='single_page') return '

	<section>
		<div class="d-flex min-vh-100" lc-helper="background" style="background:url(https://images.unsplash.com/34/ddTzoX58Q153kjaitXl4_ny.jpg?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;h=768&amp;fit=crop&amp;ixid=eyJhcHBfaWQiOjM3ODR9)  center / cover no-repeat; background-color:#444; background-blend-mode: overlay;">
			<div class="lc-block align-self-center text-center text-light col-md-8 offset-md-2">
				<h1 class="font-weight-bold display-1" editable="inline">[lc_the_title]</h1>
				<div editable="inline" class="font-weight-light">
					[lc_the_content]
				</div>
			</div>
		</div>
	</section>

	';
	
	//default
	return("<h1>No default defined for this kind of template</h1>");
}