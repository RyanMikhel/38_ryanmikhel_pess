<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dispatch</title>
<link rel="stylesheet" href="css/bootstrap-4.4.1.css">
</head>

<body>
<div class="container" style="width:900px">
 <?php
	include "header.php";
?>
  <section class="mt-3">
    <form>
      <div class="form-group row">
        <label for="callerName" class="col-sm-4 col-form-
			label">Caller's Name</label>
        <div class="col-sm-8">
			<span>
			David
				 <input type="hidden" id="callerName" name="callerName"
						value="David">
			</span>
        </div>
      </div>
		 <div class="form-group row">
        <label for="contactNo" class="col-sm-4 col-form-
			label">Contact No</label>
        <div class="col-sm-8">
         <span>
			91234567
			 <input type="hidden"  value="91234567"
			id="contactNo" name="contactNo">
		 </span>
        </div>
      </div>
			 <div class="form-group row">
        <label for="locationOfIncident" class="col-sm-4 col-form-
			label">Location of Incident</label>
        <div class="col-sm-8">
           <span>
			   CCK
			 <input type="hidden" value="CCK"
			 id="locationOfIncident" name="locationOfIncident">
			</span>
        </div>
      </div>
			 <div class="form-group row">
        <label for="typeOfIncident" class="col-sm-4 col-form-
		label">Type of Incident</label>
        <div class="col-sm-8">
			<span>
			Fire
			   <input id="typeOfIncident" type="hidden"
			    name="typeOfIncident" value="Fire">
			</span>
        </div>
      </div>
				 <div class="form-group row">
        <label for="descriptionOfIncident" class="col-sm-4 
		 col-form-label">Description of Incident</label>
        <div class="col-sm-8">
			<span>
			Fire at CCK
			  <input name="descriptionOfIncident"
				   value="Fire at CCK"
				   id="descirptionOfIncident"
				   type="hidden"
					 >
			</span>
        </div>
      </div>
				 <div class="form-group row">
        <label for="patrolCar" class="col-sm-4 
		 col-form-label">Choose Patrol Car(s)</label>
        <div class="col-sm-8">
		  <table class="table table-striped">
			   <tbody>
			      <tr>
					  <th>Car Number</th>
					  <th>Status</th>
					  <th></th>
			 	  </tr>  
				   <tr>
					  <td>SJA667A</td>
					  <td>Free</td>
					  <td>
					      <input type="checkbox" name="cbCarSelection[]"> 
					  </td>
			 	  </tr> 
				      <tr>
					  <td>SGA8765A</td>
					  <td>Free</td>
					  <td>
					      <input type="checkbox" name="cbCarSelection[]"> 
					  </td>
			 	  </tr> 
				      <tr>
					  <td>SJE5564A</td>
					  <td>Free</td>
					  <td>
					      <input type="checkbox" name="cbCarSelection[]"> 
					  </td>
			 	  </tr> 
			   </tbody>
			</table>
        </div>
      </div>
    <div class="form-group row">     
        <div class="offset-sm-4 col-sm-8">
		 <button type="submit" class="btn btn-
     	primary" name="submit" id="submit">Dispatch</button>
        </div>
      </div>
     
    </form>
  </section>
	<?php
	include "footer.php";
?>
</div>
<script src="js/jquery-3.4.1.min.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap-4.4.1.js"></script>
</body>
</html>
