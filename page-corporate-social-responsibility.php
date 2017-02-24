<?php
/**
 * Template Name: Corporate Social Responsiblity 
 *
 * This is the template that displays the contact form and preforms cURL submissions.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('bootstrap'); 
if ( isset($_GET['filter']) ) { $get_filter = $_GET['filter']; }
?>

	<header style="background-image: url('<?php echo the_post_thumbnail_url(969,175); ?>'); background-position: 50% 50%; width: 100%; height:auto; background-size:cover; max-height: 175px;" class="cd-header">
	    <h1 class="row"><?php echo substr(the_title('', '', FALSE), 0, 200); ?></h1>
	</header>

	
	<main class="cd-main-content">
		<div class="cd-tab-filter-wrapper">
			<div class="cd-tab-filter">
	
			</div> <!-- cd-tab-filter -->
		</div> <!-- cd-tab-filter-wrapper -->
		
	
		<section align="center" class="cd-filter-trigger">

			<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
			  <a href="<?php echo esc_url( home_url() ); ?>" > iTi Tropicals</a><span> > </span><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a>  
			  <?php if ($get_filter) { echo ' <span> > </span> <a href="'.get_permalink().'?filter='.$get_filter .'"> Our ' . ucwords($get_filter) . '</a>' ; } ?>
	        </div>
			
		</section>
		
		<section align="center" class="text-center" style="padding: 30px 0 40px 0;">

		   <div class="newscategory" style="display:inline-block !important;">
			   <p<?php if (! $get_filter ) { echo ' class="selected"'; } ?>><span class="news-title" onClick="window.location='<?php echo get_permalink(); ?>'">Corporate Social Responsibility<span style="color:#bcd63c;">.</span></span></p>
		   </div>

		   <div class="newscategory" style="display:inline-block !important;">
			   <p<?php if ($get_filter == 'people' ) { echo ' class="selected"'; } ?>><span class="news-title" onClick="window.location='<?php echo get_permalink(); ?>?filter=people'">Our People<span style="color:#bcd63c;">.</span></span></p>
		   </div>

		   <div class="newscategory" style="display:inline-block !important;">
			   <p<?php if ( $get_filter == 'products' ) { echo ' class="selected"';}  ?>><span class="news-title" onClick="window.location='<?php echo get_permalink(); ?>?filter=products'">Our Products<span style="color:#bcd63c;">.</span></span></p>
		   </div>

		   <div class="newscategory" style="display:inline-block !important;">
			   <p<?php if ( $get_filter == 'planet' ) { echo ' class="selected"';}  ?>><span class="news-title" onClick="window.location='<?php echo get_permalink(); ?>?filter=planet'">Our Planet<span style="color:#bcd63c;">.</span></span></p>
		   </div>
					   
		</section>		
		
		
		<div class="container">
		  <div class="row">
		  
			<div class="col-md-8">
			<?php //echo   the_content(); ?>
					
				<a href="https://twitter.com/share?text=Coconut+water+presentation+at+Juice+Summit+Antwerp%2C+Belgium+in+October+2015%0A&amp;url=" style="position:absolute; right:0px; top:8px;" target="_blank">
				<span class="genericon genericon-twitter"></span></a>
					
				<section style="margin-right:20px;">
					<?php if (!$get_filter) { ?>
					<div class="">
						<p>We believe Corporate Social Responsibility starts with loyalty – loyalty to our customers, loyalty to our supply partners and loyalty to the communities in which we live and work. Relationships are at the heart of everything we do. Long-term partnerships and on-going business consistency are the foundation of our business. Our strong worldwide connections enable us to succeed and motivate us to be better every day. Each day is an opportunity to reinforce these ties and put our values into action. By working together, we can build a brighter future.</p>
						<br>
						<img class="img-responsive" style="width:100%; height:auto;" src="/wp-content/uploads/csr-1-1.jpg" alt="Harvested coconuts" />
						<br>
						<p style="margin-top:10px;">Harvested coconuts waiting to be unloaded, sorted and processed.</p>
						<br>
						<h4>Responsibility Statement</h4>
						<p>iTi Tropicals and our partners share a focus on sustainability and social accountability. Our commitment to communities and the environment are key values to our business. We are committed to implementing programs that support the development of our employees and carry out improvements that promote respect for the environment and the communities in which we live and work.</p>
						<br>
						<p>Two pillars define Responsible Sourcing within iTi Tropicals and its manufacturing facilities:</p>
						<br>
						<ol>
							<li><strong>Sustainability</strong>
						<ul>
							<li>Initiate improvement to increase the environmental sustainability and decrease the carbon footprint of our products.</li>
							<li>Provide information to help customers make sustainable product choices.</li>
							<li>Partner with manufacturing facilities which implement sustainable practices to minimize life-cycle impacts on the Earth.</li>
						</ul>
						</li>
							<li style="margin-top:4px;"><strong>Social Responsibility</strong>
							<ul>
								<li>Enrich community engagement by being an active and valued member in the community.</li>
								<li>Encourage diversity in our workforce and supply partners.</li>
								<li>Work with manufacturing facilities that follow practices ensuring the health, safety and well-being of their employees, and comply with local laws and customs</li>
							</ul>
							</li>
						</ol>	
						<br><br>
					</div>
					<?php } else if ($get_filter == 'people' ) { ?>
					<div class="">
						<h3 style="color:#78A12E;">OUR PEOPLE</h3>
						<br>
						<p>We work to create a culture that helps our employees maximize their personal and professional potential. Our people are our most important resource. That’s why we’re committed to helping them thrive, both as individuals and as part of a team that shares a common set of values. By supporting personal growth, diversity, inclusion and wellness, we build trust, community, partnership and a state of well-being.</p>
						
						<h4 style="margin-top:16px;">Personal Growth</h4>
						
						<p>iTi Tropicals provides a number of programs to help employees reach their goals by developing and maximizing their talents, including: A structured review process focused on individual career/talent development and development growth experiences for all employees through cross training programs.</p>
						
						<div class="clearfix">
						
							<img src="/wp-content/uploads/csr-2-people.jpg" class="pull-right" style="padding-left:20px; padding-top:5px;">

							<p>Additionally, iTi Tropicals offers a competitive and comprehensive mix of pay, fully funded health, dental and vision insurance, flexible work arrangements, length of service recognition, and much more. Some highlights include:</p>
							
							<ul>
								<li>Domestic partner benefits</li>
								<li>Time off benefits</li>
								<li>Employee assistance and health advocate programs</li>
								<li>Life insurance</li>
								<li>Savings &amp; retirement benefits, including 401(k)</li>
							</ul>

							<h4 style="margin-top:16px; clear:none;">Diversity and Inclusion</h4>
							
							<p>At iTi Tropicals, we celebrate the uniqueness of every employee.</p>
							
							<p>We’re committed to genuinely accepting our colleagues, both personally and professionally. By respecting individuality and supporting different communication styles, we attract and retain the finest talent—and foster an atmosphere in which our employees can do work that’s both rewarding and rewarded. </p>
							
						</div>						

						
						<h4 style="margin-top:16px;">Wellness</h4>
						
						<p>An important part of the iTi Tropicals workplace is creating the safest and best possible workplace for our team. We make sure that our health and safety initiatives are practiced across the organization; everyone is accountable. We encourage leadership champions who take responsibility for wellness and encourage all associates to voice concerns. All employees act as stewards of wellness. Other benefits include:</p>
						
						<ul>
							<li><span>Fitbit community – all employees receive a Fitbit promoting a healthy lifestyle. </span></li>
							<li><span>Outdoor Courtyard Garden – for employee lunches and informal meetings in a relaxed environment; creating workplace harmony and respect. </span></li>
							<li><span>Wellness Coordinator (nutrition and fitness consulting; newsletter). </span></li>
							<li><span>“Lunch Bunch” – employees receive 3 free lunches per week at a local restaurant (within walking distance) specializing in fresh, locally sourced ingredients; this promotes a healthy eating lifestyle and team camaraderie. </span></li>
							<li><span>On-site CPR Training – 60% of employees are certified by the American Red Cross for CPR &amp; AED.</span></li>
						</ul>
						<br><br>
					</div>
					<?php } else if ($get_filter == 'products' ) { ?>
					<div class="">
						<h3 style="color:#78A12E;">OUR PRODUCTS</h3>
						<br>
						<p>We partner with our manufacturing facilities, which uphold ethical standards that reflect our shared values.</p>
						<p>We believe in equality and value, not only for our customers, but also for the people who produce the products on which our business is based. That is why we set high expectations for our processors with our Ethical Sourcing Code of Conduct. By our example, we hope to inspire processors to develop transparent corporate social responsibility programs of their own.</p>
						<p>Together, we are working to create a more ethical global marketplace.</p>
						<br>
						<p><img src="/wp-content/uploads/csr-3-product.jpg" class="img-responsive" style="width:100%; height:auto;"></p>
						<p>Passionfruit field farmer training</p>
						<br>
						
						<h4 style="margin-top:16px;">Ethical Sourcing Code of Conduct</h4>
						<p>As a leading importer of tropical fruit juices and purees, iTi Tropicals works with a global network of manufacturing facilities to bring our customers high-quality products. To ensure the products we offer are produced in a socially responsible manner, we require all of our supply partners to commit to iTi Tropicals.</p>
						<h5>Ethical Sourcing Code of Conduct.</h5>
						<p>The Code sets forth our expectations regarding key workplace issues, such as child labor, forced labor, discrimination, discipline and abuse, collective bargaining, working hours, wages, and workplace health and safety. It is also expected that manufacturing facilities adhere to the environmental standards and laws of their country, abide by bribery and anti-corruption laws, avoid conflicts of interest, and comply with iTi’s policies.</p>
						<p>In addition to the Ethical Sourcing Code of Conduct, iTi Tropicals maintains high standards of food safety
						and container freight security to prevent harmful contaminants from infiltrating our supply chain. All
						manufacturing facilities are required to have a written food defense plan, including shipping security and
						oversight.</p>
						
						<div class="clearfix">
							<span class="pull-right" style="margin-left:20px; margin-top:5px;"><img src="/wp-content/uploads/csr-3-product-coconut-processing.jpg" class="pull-right" title="Sorting and grading coconuts for processing."><br><small>Sorting and grading  coconuts <br> for processing.</small></span>
							
							<h4 style="margin-top:16px; clear:none;">Manufacturing Oversight Program</h4>
							<p>iTi Tropicals is implementing additional responsible corporate sourcing activities with our supply partners. By the end of 2016, we expect that 75% of our processors will have third party social audits. By the end of 2018, we hope to have 100% compliance. This will ensure that our manufacturing facilities are in compliance with our Code as well as that of our customers. Also, an assessment of the physical safety and integrity of the workplace is made to ensure hygienic and safe operating conditions for workers.</p>
							<p>All factories undergo security audits conducted by a third party. These audits assess the security of the factory, the packaged goods, and the loading of containers for shipping. If violations are discovered, manufacturing facilities are required to make the requisite improvements within a prescribed period.</p>
							
							<h4 style="margin-top:16px; clear:none;">Supply Partner Development</h4>
							<p>The intent of the program is not only to ensure that supply partners comply with our Code, but also to assist them in developing their own processes to improve the overall quality and well-being of their employees and the integrity of the products they produce. To that end, iTi Tropicals provides guidance and insight into effective in-factory management and processing systems that enable continuous improvement.</p>							
						</div>
						

						
						<br> <br>
					</div>					
					<?php } else if ($get_filter == 'planet' ) { ?>
					<div class="">
						<h3 style="color:#78A12E;">OUR PLANET</h3>
						<br>
						<div class="clearfix">
							<span class="pull-right" style="margin-left:20px; margin-top:5px;"><img src="/wp-content/uploads/csr-4-planet.jpg" class="pull-right" title="Sorting and grading coconuts for processing."><br><small>Coconuts and pineapple are sustainably <br> intercropped.</small></span>
							
							<p>As global citizens, we make choices that help sustain the planet that sustains us. We commit to supporting efforts that bring help and hope to those in need around the world. At iTi, our business revolves around relationships with customers, supply partners and employees all over the world. “Going Green” is an important phrase at iTi Tropicals. It represents our commitment to taking ecoconscious steps when it comes to designing and operating our facilities, producing products, packaging and shipping our juices and purees, and more.</p>
							
							<h4 style="margin-top:16px; clear:none;">Corporate Community Donations</h4>
							<p>At iTi, we’re committed to giving back to the communities where we live and work. We recognize the needs within our own community and strive to help those in need. We make annual contributions to our local homeless shelter and the American Red Cross.</p>
							
							<h4 style="margin-top:16px; clear:none;">Facilities Efficiency</h4>
							<p>iTi Tropicals has an Energy Star® rated corporate office building with an 89% efficiency score. This means that we are more energy efficient than 89% of like corporations in the region. We’ve designed and implemented a number of solutions to allow our offices to run in a responsible and sustainable manner, including:</p>
						</div>
						
						<ul>
							<li>Reducing energy consumption by controlling operation of equipment during peak times.</li>
							<li>Corporate land conservation agreement – keeping 1.6 acres of surrounding corporate land green, natural and intact.</li>
							<li>Recycling program for all paper and plastic.</li>
							<li>Using china plates, cups and mugs to reduce our paper waste – especially in our Innovation Center.</li>
							<li>Installation of water filtration systems to reduce the use of bottled water.</li>
						</ul>						

						<h4 style="margin-top:16px;">Green Packaging</h4>
						<p>iTi Tropicals looks for packaging solutions that protect our juices and purees and also protect the environment. We encourage our processors to use recyclable and degradable packaging materials and are proud to say that some of our processors have converted to cardboard “totes” and “drums” for shipping our products. This eliminates the use of steel and aluminum packaging.</p>
						<p>We encourage our customers to purchase concentrated products which reduce the number of containers shipped from our factories, thus reducing our carbon footprint and “food miles”. When possible, we encourage our processors to “floor load” the containers eliminating the use of wooden and plastic pallets, maximizing the shipping space in the container. This, too, reduces the carbon footprint and “food miles”.</p>
						
						<h4 style="margin-top:16px;">A Greener Future</h4>
						<p>In the future, iTi plans to do even more. We’re engaging with our employees, manufacturing facilities, customers and community to find a path towards an even greener future.</p>
						
						<br>
						<p class="center-block text-center"><img src="/wp-content/uploads/csr-4-planet-boat2.jpg" class="img-responsive" style="width:100%; height:auto;"></p>
						<p>School boat with children supported by coconut supplier.</p>
						<br>
					</div>					
					<?php } ?>
				</section>
				
			</div>
			
			<div class="col-md-4 sidebarContainer">
								
				<div class="sidebar">
					<h3 class="text-center">OUR MISSION <br>SINCE 1988</h3>
				
					<p>iTi Tropicals - The leading supplier of tropical and exotic fruit juice concentrates and purees in North America. To achieve these goals we:</p>
					<ul>
						<li>Focus only on tropical products.</li>
						<li>Seek and maintain long-term relationships with employees, customers, suppliers, and other industry participants.</li>
						<li>Conduct our business on the basis of quality, reliability, innovation, and integrity.</li>
						<li>Provide an enjoyable experience for those with whom we do business and for ourselves.</li>
					</ul>
					<p>Since we operate in a global society and come into contact with diverse cultures and value systems, we need to live by these precepts. These are the reasons we have reached our goals in the past and why we will continue to grow.</p>				
				</div>

			</div>
			
		  </div> <!-- /row -->
		</div>

		<section align="center" class="cd-filter-trigger">

			<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
			  <a href="<?php echo esc_url( home_url() ); ?>" > iTi Tropicals</a><span> > </span><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a>  
			  <?php if ($get_filter) { echo ' <span> > </span> <a href="'.get_permalink().'?filter='.$get_filter .'"> Our ' . ucwords($get_filter) . '</a>' ; } ?>
	        </div>
			
		</section>
		
		<section align="center" class="text-center" style="padding: 30px 0 40px 0;">

		   <div class="newscategory" style="display:inline-block !important;">
			   <p<?php if (! $get_filter ) { echo ' class="selected"'; } ?>><span class="news-title" onClick="window.location='<?php echo get_permalink(); ?>'">Corporate Social Responsibility<span style="color:#bcd63c;">.</span></span></p>
		   </div>

		   <div class="newscategory" style="display:inline-block !important;">
			   <p<?php if ($get_filter == 'people' ) { echo ' class="selected"'; } ?>><span class="news-title" onClick="window.location='<?php echo get_permalink(); ?>?filter=people'">Our People<span style="color:#bcd63c;">.</span></span></p>
		   </div>

		   <div class="newscategory" style="display:inline-block !important;">
			   <p<?php if ( $get_filter == 'products' ) { echo ' class="selected"';}  ?>><span class="news-title" onClick="window.location='<?php echo get_permalink(); ?>?filter=products'">Our Products<span style="color:#bcd63c;">.</span></span></p>
		   </div>

		   <div class="newscategory" style="display:inline-block !important;">
			   <p<?php if ( $get_filter == 'planet' ) { echo ' class="selected"';}  ?>><span class="news-title" onClick="window.location='<?php echo get_permalink(); ?>?filter=planet'">Our Planet<span style="color:#bcd63c;">.</span></span></p>
		   </div>
					   
		</section>	
		
	</main>
	
<?php get_footer('bootstrap'); ?>	