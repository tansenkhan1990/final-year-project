<?php

include('crud.php');
			 if(isset($_REQUEST['mac'],$_REQUEST['title'],$_REQUEST['content'],$_REQUEST['id']))
{
$obj->report_art($_REQUEST['title'],$_REQUEST['content'],$_REQUEST['id'],$_REQUEST['mac']);
echo "successfully reported";	
	}
			header('location:index.php');
              ?>

<div class="5grid-layout">
				<div class="row">
					<div class="4u">
						<section>
							<ul class="list-style1">
							  <li class="first">Pellentesque quis elit non lectus gravida blandit.</li>
								<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
								<li>Phasellus nec erat sit amet nibh pellentesque congue</li>
								<li>Cras vitae metus aliquam risus pellentesque pharetra</li>
								<li>Maecenas vitae orci vitae tellus feugiat eleifend</li>
							</ul>
						</section>
					</div>
					<div class="4u">
						<section>
							<h2>web devloper job and training information</h2>
							<ul class="list-style1">
								<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
								<li>Phasellus nec erat sit amet nibh pellentesque congue.</li>
								<li>Cras vitae metus aliquam risus pellentesque pharetra.</li>
								<li>Maecenas vitae orci vitae tellus feugiat eleifend.</li>
							</ul>
						</section>
					</div>
					<div class="4u">
						<section>
							<h2>apps devloping job and career information</h2>
							<ul class="list-style1">
								<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
								<li>Phasellus nec erat sit amet nibh pellentesque congue.</li>
								<li>Cras vitae metus aliquam risus pellentesque pharetra.</li>
								<li>Maecenas vitae orci vitae tellus feugiat eleifend.</li>
							</ul>
						</section>
					</div>
				</div>
			</div>