<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KASA</title>
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
   
</head>
<body>
<?php

   include('session.php');
   
   $top = 100;
if(isset($_POST['top1'])) {
    echo 'İlk Sırada Olan!';
	$top = 1;
} 
if(isset($_POST['top2'])) {
    echo 'İlk İki Sırada Olan!';
	$top = 2;
} 
if(isset($_POST['top10'])) {
    echo 'İlk On Sırada Olan!';
	$top = 10;
} 



echo $top;

 
        $sorgu = "SELECT userName FROM tbl_users order by puan desc LIMIT ".$top;
		
        $sorguSonucu = mysqli_query($db, $sorgu) or trigger_error("Hata: ". mysqli_error($mysqli), E_USER_ERROR);
		 $rows = array();
        if($sorguSonucu) {
         
            while($kayit = mysqli_fetch_assoc($sorguSonucu)) {

			
			$rows[] = $kayit;
			
		
			
            }
				echo json_encode($rows);
        }
		
	

  
?>
<div class="container">
  <div class="jumbotron">
    <h1>KASA Notification Ayarları</h1>      
    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
  </div>
  <p>This is some text.</p>      
  <p>This is another text.</p>      
</div>
<form class="container" action="" method="post">

<fieldset>
			<input type="hidden" name="form" value="test" id="frm-test-elm-0" />

            <div class="row">
        		
				<div class="col-lg-6">
				

            		<legend>Kategori 1</legend>


            		<div class="form-group row">
						<div class="col-sm-12">
							<input type="checkbox" name="top1" id="frm-test-elm-140-1" autocomplete="off" />
					        <div class="btn-group">
					            <label for="frm-test-elm-140-1" class="btn btn-primary">
					                <span class="fa fa-check-square-o fa-lg"></span>
					                <span class="fa fa-square-o fa-lg"></span>
					                <span class="content">TOP 1 </span>
					            </label>
					        </div>
						</div>
					</div>

            		<div class="form-group row">
						<div class="col-sm-12">
							<input type="checkbox" name="top2" id="frm-test-elm-140-2" autocomplete="off"  />
					        <div class="btn-group">
					            <label for="frm-test-elm-140-2" class="btn btn-success">
					                <span class="fa fa-check-square-o fa-lg"></span>
					                <span class="fa fa-square-o fa-lg"></span>
					                <span class="content">TOP 2</span>
					            </label>
					        </div>
						</div>
					</div>

            		<div class="form-group row">
						<div class="col-sm-12">
							<input type="checkbox" name="top10" id="frm-test-elm-140-3" autocomplete="off" />
					        <div class="btn-group">
					            <label for="frm-test-elm-140-3" class="btn btn-info">
					                <span class="fa fa-check-square-o fa-lg"></span>
					                <span class="fa fa-square-o fa-lg"></span>
					                <span class="content">TOP 10</span>
					            </label>
					        </div>
						</div>
					</div>

            		<div class="form-group row">
						<div class="col-sm-12">
							<input type="checkbox" name="checkboxes[249]" id="frm-test-elm-140-4" autocomplete="off"  />
					        <div class="btn-group">
					            <label for="frm-test-elm-140-4" class="btn btn-warning">
					                <span class="fa fa-check-square-o fa-lg"></span>
					                <span class="fa fa-square-o fa-lg"></span>
					                <span class="content">ALL</span>
					            </label>
					        </div>
						</div>
					</div>

            		<div class="form-group row">
						<div class="col-sm-12">
							<input type="checkbox" name="checkboxes[249]" id="frm-test-elm-140-5" autocomplete="off" />
					        <div class="btn-group">
					            <label for="frm-test-elm-140-5" class="btn btn-danger">
					                <span class="fa fa-check-square-o fa-lg"></span>
					                <span class="fa fa-square-o fa-lg"></span>
					                <span class="content">Rastgele</span>
					            </label>
					        </div>
						</div>
					</div>

            	

            	</div>
					<div class="col-sm-6">
            		<legend>Tarih Aralığı Giriniz</legend>
					
					<input type="date" name="myDate" id="myDate">
            	</div>
        </fieldset>
	
	<label><b>Mesaj İçeriği</b> </label>
	<br>
	<textarea class="form-control" name="term" id="term" style="width:500px; height: 150px;"></textarea>
	<br>
    <button class="btn btn-primary" type="submit" value="Tamam" id="buttonOk" name="buttonOk" disabled="disabled" >Gönder</button>
</form>





<script type="text/javascript">
jQuery(document).ready(function ($) {
	  $('input:checkbox').click(function() {
 if ($(this).is(':checked')) {
 $('#buttonOk').prop("disabled", false);
 } else {
 if ($('.checks').filter(':checked').length < 1){
 $('#buttonOk').attr('disabled',true);}
 }
    });
   
    
});

	</script>

	
	</body>
</html>

