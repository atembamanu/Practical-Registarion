<?php include 'navbar.php';
include_once 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Practical Registrations</title>
</head>
<body>
	<div class="container text-center">
		<div class="bd-example">
			<a href="" rel="add_slot"><span class="badge badge-pill badge-success" style="font-size: 14">Add Practical Slots</span></a>
			<a href="" rel="view_slots"><span class="badge badge-pill badge-info" style="font-size: 14">View Practical Slots</span></a>
			<a href="" rel="delete_practical"><span class="badge badge-pill badge-danger" style="font-size: 14">Delete Practical Session</span></a>
			<a href="" rel="view_students"><span class="badge badge-pill badge-info" style="font-size: 14">View Registered Students</span></a>

		</div>

	</div>
	<br>
	<div class="container padding">
		<div class="row">
			<div class="col-sm-12" id="add_slot" style="display: none">
				<div class="card">
					<article class="card-body">
						<h4 class="card-title mb-4 mt-1">Add new Slot</h4>
						<p>You are required to fill the following fields in order to create a new practical slot in the database. </p>
						<hr>
						<form>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										Day of the Week<input name="" class="form-control" placeholder="Monday" type="text"
										required="required"
										data-error="Valid Day is required.">
										<div class="help-block with-errors"></div>
									</div> <!-- form-group// -->
								</div>
								<div class="col-md-4">
									<div class="form-group">
										Time of the Day<input class="form-control" placeholder="15.00 - 17.00 hrs" type="text"
										required="required"
										data-error="Valid text is required.">
										<div class="help-block with-errors"></div>
									</div> <!-- form-group// --> 
								</div>
								<div class="col-md-4">
									<div class="form-group">
										Slot Capacity<input class="form-control" placeholder="8" type="number"
										required="required"
										data-error="Valid number is required.">
										<div class="help-block with-errors"></div>
									</div> <!-- form-group// --> 
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<button type="submit" class="btn btn-success btn-block"> Add  </button>
									</div> <!-- form-group// -->

								</div> 
							</div>                                                               
						</form>
					</article>
				</div> 
				<br>
			</div>

			<div class="col-sm-12" id="view_slots" style="display: none">

				<div class="card">
					<article class="card-body">
						<h4 class="card-title mb-4 mt-1">View Slots</h4>
						<p>You are required to select the practical session relation to view description of the practical slots. </p>
						<hr>
						<select id="selectbox" data-selected="" class="form-control" name="slot_id" data-error="Slot is required" required="required">
							<div class="help-block with-errors"></div>
							<option value=""  selected="selected" disabled="disabled"><b>NB:</b  > Select here!
							</option>
							<option value="" > Practical Session</option>
							<option value="" disabled="disabled"> Project Session</option>
							<option value="" disabled="disabled"> Lab Session</option>
						</select>
					</article>
					<div class="container">
						<div class="form-group">
							<button type="submit" class="btn btn-info btn-block"> View  </button>
						</div>
					</div>


				</div> 
			</div>
			<div class="col-sm-12" id="view_slots" style="display: none">

				<div class="card">
					<article class="card-body">
						<h4 class="card-title mb-4 mt-1">View Slots</h4>
						<p>You are required to select the practical session relation to view description of the practical slots. </p>
						<hr>
						<select id="selectbox" data-selected="" class="form-control" name="slot_id" data-error="Slot is required" required="required">
							<div class="help-block with-errors"></div>
							<option value=""  selected="selected" disabled="disabled"><b>NB:</b  > Select here!
							</option>
							<option value="" > Practical Session</option>
							<option value="" disabled="disabled"> Project Session</option>
							<option value="" disabled="disabled"> Lab Session</option>
						</select>
					</article>
					<div class="container">
						<div class="form-group">
							<button type="submit" class="btn btn-info btn-block"> View  </button>
						</div>
					</div>


				</div> 
			</div>
						<div class="col-sm-12" id="delete_practical" style="display: none">

				<div class="card">
					<article class="card-body">
						<h4 class="card-title mb-4 mt-1">Delete Slot</h4>
						<p>Choose the Practical slot to delete. Please note that all data allocated to the selected slot will no longer be availble </p>
						<hr>
						<select id="selectbox" data-selected="" class="form-control" name="slot_id" data-error="Slot is required" required="required">
                <div class="help-block with-errors"></div>
                <option value=""  selected="selected" disabled="disabled">Select here.
                </option>
                <?php 
                $sql ="SELECT * FROM slots";
                $result = $connection->query($sql);
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()){
                    echo "<option value='". $row['SLOT_ID'] ."'>" . $row['Day']," ",$row['time']."</option>";
                  }
                }
                ?>
                }
              </select>
					
					</article>
					<div class="container">
							<p>Confirm delete..</p>
						<div class="form-group">
							<button type="submit" class="btn btn-danger btn-block"> Delete  </button>
						</div>
					</div>
					

				</div> 
			</div>

			<div class="col-sm-12" id="view_students" style="display: none">

				<div class="card">
					<article class="card-body">
						<h4 class="card-title mb-4 mt-1">View Registered Students</h4>
						<p>You are required to select the practical slot from the relation to view the students registred in each slot practical slots. </p>
						<hr>
						<select id="selectbox" data-selected="" class="form-control" name="slot_id" data-error="Slot is required" required="required">
                <div class="help-block with-errors"></div>
                <option value=""  selected="selected" disabled="disabled">Select here.
                </option>
                <?php 
                $sql ="SELECT * FROM slots";
                $result = $connection->query($sql);
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()){
                    echo "<option value='". $row['SLOT_ID'] ."'>" . $row['Day']," ",$row['time']."</option>";
                  }
                }
                ?>
                }
              </select>

					</article>
					<div class="container">
						<div class="form-group">
							<button type="submit" class="btn btn-info btn-block"> View  </button>
						</div>
					</div>


				</div> 
			</div>


		</div>



	</div> 
</div>
</div>

</div>

<script type="text/javascript">
	$('a').on('click', function(e) {
		e.preventDefault();
		var target = $(this).attr('rel');
		$("#" + target).show().siblings("div").hide();
	});
</script>
</body>
</html>