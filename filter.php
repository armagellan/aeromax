

<form id="filter-form" name="filter" method="post">

	<br><h3>Площа охолодження</h3><br>

	<?php
		$categories = get_categories( 'child_of=23' );
		if( $categories ){
			foreach( $categories as $cat ){
				?>

				<input id="square-<?php echo $cat->cat_name; ?>" 
					   type="checkbox" 
					   class="CheckBoxClass" 
					   value="<?php echo $cat->category_nicename; ?>"  
					   name="square"/>
				<label id="Label-<?php echo $cat->cat_name; ?>" 
					   for="square-<?php echo $cat->cat_name; ?>" 
					   class="CheckBoxLabelClass bg_up"><?php echo $cat->cat_name; ?>м<sup>2</sup>
				</label><br>

				<?php
			}
		}
	?>


	<br><h3>Торгова марка</h3><br>

	<?php
		$categories = get_categories( 'child_of=12' );
		if( $categories ){
			foreach( $categories as $cat ){
				?>

				<input id="brands-<?php echo $cat->cat_name; ?>" 
					   type="checkbox" 
					   class="CheckBoxClass" 
					   value="<?php echo $cat->category_nicename; ?>"  
					   name="brands"/>
				<label id="Label-<?php echo $cat->cat_name; ?>" 
					   for="brands-<?php echo $cat->cat_name; ?>" 
					   class="CheckBoxLabelClass bg_up"><?php echo $cat->cat_name; ?>
				</label><br>

				<?php
			}
		}
	?>

	<br><h3>Тип</h3><br>

	<?php
		$categories = get_categories( 'child_of=30' );
		if( $categories ){
			foreach( $categories as $cat ){
				?>

				<input id="products-<?php echo $cat->cat_name; ?>" 
					   type="checkbox" 
					   class="CheckBoxClass" 
					   value="<?php echo $cat->category_nicename; ?>"  
					   name="products"/>
				<label id="Label-<?php echo $cat->cat_name; ?>" 
					   for="products-<?php echo $cat->cat_name; ?>" 
					   class="CheckBoxLabelClass bg_up"><?php echo $cat->cat_name; ?>
				</label><br>

				<?php
			}
		}
	?>

	
	<br><input id="filter" type="submit" class="filter_btn" value="Фільтр" />
	<input id="clear" type="submit" class="clear_btn" value="Очистити" />
</form>
