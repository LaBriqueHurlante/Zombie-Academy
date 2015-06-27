<?php
require "includes/connexBDD.php"; 


$sql= "SELECT * FROM creations";
$qid = $db->prepare($sql);
$qid->execute();
$repertoire = "../../css/media/img/imgAvatar/";
 
?>
<div id="block">
	<?php 
	while( $row=$qid->fetch(PDO::FETCH_ASSOC) )       
	{
		?>

		
		<div class="<?php 
		
		if ($row["genre"]=="Fan art"){
			echo "fanart";
			}elseif ($row["genre"]=="Fan fiction"){
				echo "fanfiction";
			}
		
		 ?>"> <img style="width:200px; height:200px;"src="<?php echo $repertoire.$row['photo']; ?>"/>
		</div>
		<?php
	}

	?>
</div>
<style>
#block
{
	width: 900px;
}
.fanart, .fanfiction
{

	display: inline-block;
	padding:20px;
}
</style>