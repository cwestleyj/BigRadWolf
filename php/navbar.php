<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->


<?php
$sql = "SELECT * FROM categories WHERE parent = 0;
$pquery = $db->query($sql);"
?>
			<div class="navbar-header">
				<button aria-expanded="false" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a class="navbar-brand" href="#">Big Rad Wolf</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->


			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<form class="navbar-form navbar-left">
					<div class="form-group">
            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
						<input class="form-control" placeholder="Search" type="text">
					</div>
					<button class="btn btn-default" type="submit">Submit</button>
				</form>


				<ul class="nav navbar-nav navbar-right">
          <?php while($parent = msqli_fetch_assoc($pquery)) : ?>
            <?php
            $parent_id = $parent['id'];
            $sql2 = "SELECT * FROM categories WHERE parent = "$parent_id" ";
            $cquery = $db->query($sql2);
            ?>
          <span class="glyphicon glyphicon-shopping-cart cartStuff" aria-hidden="true"></span>
					<li>
						<a href="#">Link</a>
					</li>


					<li class="dropdown">
						<a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
              <span class="caret"></span></a>

						<ul class="dropdown-menu">
                <?php while($child = mysqli_fetch_assoc($cquery)) : ?>
							<li>
								<a href="#"><?php echo $child['category'] ?>
                </a>
							</li>
            <?php endwhile; ?>


							<li>
								<a href="#">Another action</a>
							</li>


							<li>
								<a href="#">Something else here</a>
							</li>


							<li class="divider" role="separator">
							</li>


							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</li>
        <?php endwhile; ?>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<!-- header element -->
  <div class="jumbotron">
		<div class="container lazerStyle">
			<h1 class="lazer84">Big Rad Wolf</h1>


			<h5>feed your inner wolf</h5>
		</div>
	</div>
