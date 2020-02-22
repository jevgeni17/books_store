<?php
if(isset($_POST['moveUP'])){
	$x=$_POST['moveUP'];
	$current=mysqli_query($link,"SELECT l_ord FROM languages WHERE `id` = $x ");
	while($y=mysqli_fetch_assoc($current)){
		echo ($y['l_ord']);	
	}
	$max=mysqli_query($link,"SELECT id,l_ord FROM languages ORDER BY `id` DESC LIMIT 1");
	while($Q=mysqli_fetch_assoc($max)){
		echo ($Q['l_ord']);	
	}
	
}

?>
<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM languages WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$title = $n['title'];
			$code = $n['code'];
		}
	}
?>



<div class="row ">

<div class="col-6 ml-3">
<h3 class="display-6 "> List langs </h3>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Language</th>
      <th scope="col">code</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
	$langTable=mysqli_query($link,"SELECT * FROM languages ORDER BY l_ord");
		$i=0;
		$N=mysqli_num_rows($langTable);
		while($oneLang=mysqli_fetch_assoc($langTable)){
			$title=$oneLang['title'];
			$code=$oneLang['code'];
			echo '<tr>';
			echo '<th scope="row">'.$oneLang['l_ord'].'</th>';
			echo '<td>'.$oneLang['title'].'</td>';
			echo '<td>'.$oneLang['code'].'</td>';
			echo '<td class="row">';	
			//if($i!=0){
				echo '<form method="POST">
						<button class="fa fa-arrow-up text-info mr-3 border-0 bg-transparent" aria-hidden="true" '.($i==0 ? 'disabled="disabled" ':'').'> </button>
						<input type="hidden" name="moveUP" value="'.$oneLang['id'].'">
					  </form>';
			//}
			//if($i<$N-1){
				echo '<form method="POST">
						<button class="fa fa-arrow-down text-info mr-3 border-0 bg-transparent" aria-hidden="true" '.($i==$N-1 ? 'disabled="disabled" ':'').'> </button>
						<input type="hidden" name="moveDown" value="'.$oneLang['id'].'">
					  </form>';
			//}
			echo '<form method="POST">
					<button class="fa fa-pencil-square-o text-success mr-3 border-0 bg-transparent" aria-hidden="true"><a href="?edit='.$oneLang['id'].'">.</a></button>
					<input type="hidden" name="edit" value="'.$oneLang['id'].'">
					</form>';
			echo '<form method="POST">
					<button class="fa fa-times text-danger mr-3 border-0 bg-transparent" aria-hidden="true"> </button>
					<input type="hidden" name="delete" value="'.$oneLang['id'].'">
				  </form>';
			echo '</td>';
			echo '</tr>';
			$i++;
		}

	?>
  </tbody>
</table>
</div>
<h3 class="display-6"> Edit langs </h3> <br>
<form style="margin-top:40px;">
  <div class="form-group">

    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $title ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"></label>
    <input type="text" class="form-control" id="exampleInputPassword1" >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


