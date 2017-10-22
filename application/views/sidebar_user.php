<php <?php foreach ($db_pegawai as $data ): ?>
	
<?php endforeach ?> ?>


<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				
			</div>
		</form>
		<ul class="nav menu">
			
			<li>
				<a href="<?php echo base_url()."index.php/user/profil/".$data['NIP']; ?>">
					<svg class="glyph stroked calendar">
					<use xlink:href="#stroked-calendar">
					</use></svg> Profil
				</a>
			</li>

			<!-- <li>
				<a href="<?php echo base_url()."index.php/admin/charts/" ?>">
					<svg class="glyph stroked line-graph">
					<use xlink:href="#stroked-line-graph">
					</use></svg> Charts
				</a>
			</li> -->
			<!-- <li>
				<a href="<?php echo base_url()."index.php/admin/tables/" ?>">
					<svg class="glyph stroked table">
					<use xlink:href="#stroked-table">
					</use></svg> Tables
			</a></li> -->
			<!-- <li>
				<a href="<?php echo base_url()."index.php/admin/forms/" ?>">
					<svg class="glyph stroked pencil">
					<use xlink:href="#stroked-pencil">
					</use></svg> Forms
				</a>
			</li> -->
			<!-- <li><a href="<?php echo base_url()."index.php/admin/panels/" ?>"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Alerts &amp; Panels</a></li> -->
			<!-- <li>
				<a href="<?php echo base_url()."index.php/admin/icons/" ?>"><svg class="glyph stroked star">
				<use xlink:href="#stroked-star"></use></svg> Icons
				</a>
			</li> -->

			<li role="presentation" class="divider"></li>
			<!-- <li><a href="<?php echo base_url()."index.php/admin/login/" ?>"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li> -->
		</ul>
		<div class="attribution">Credit By <a href="http://www.doscom.org/">BPN Semarang</a><br/><p>Jln. Ki Mangunsarkoro No.32 Semarang</p></div>
	</div><!--/.sidebar-->