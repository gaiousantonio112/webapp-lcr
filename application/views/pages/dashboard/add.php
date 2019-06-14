<div class="container">
		<div class="container-fluid p-4">
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="radioselect" id="Birthday" value="Birth" onclick="show('birth');" checked>
				<label class="form-check-label" for="Birthday">Birthday</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="radioselect" id="Death" value="Death" onclick="show('death');">
				<label class="form-check-label" for="Death">Death</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="radioselect" id="Marriage" value="Marriage" onclick="show('merage');">
				<label class="form-check-label" for="Marriage">Marriage</label>
			</div>

			</div>

<div class="container">

</div>
<form id="addBirthForm">
	<div class="" id="birth">
		<div class="container">
			<div class="md-form">
				<input type="number" name="bday[refno]" id="form1" class="form-control">
				<label for="form1">REFERENCE NUMBER</label>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm">
					<div class="md-form ">
						<input type="text" name="bday[first_name]" id="form2" class="form-control">
						<label for="form2">First Name</label>
					</div>
				</div>
				<div class="col-sm">
					<div class="md-form ">
						<input type="text" name="bday[middle_name]" id="form3" class="form-control">
						<label for="form3">Middle Name</label>
					</div>
				</div>
				<div class="col-sm">
					<div class="md-form ">
						<input type="text" name="bday[last_name]" id="Last" class="form-control">
						<label for="Last">Last Name</label>
					</div>
				</div>
				<div class="col-2">
					<div class="md-form ">
						<input type="number" name="bday[annex]" id="Annex" class="form-control">
						<label for="Annex">Annex</label>
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" name="bday[encoder]" class="bday_encoder">
		<div class="container">
			<div class="">
				<div class="dates">
					<div class="md-form">
					<input type="date" name="bday[bday_date]" id="usr1" class="form-control">
						<label >Date of Birth</label>
				</div>
		</div>

			</div>
			<div class="text-center">
				<button class="btn btn-lg btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect" type="submit" id="button-addon2">Submit</button>
				<button class="btn btn-lg btn-outline-warning m-0 px-3 py-2 z-depth-0 waves-effect" type="button" id="button-addon2">Clear All</button>
			</div>

		</div>
	</div>
</form>

<!-- DEATH -->
<form id="addDeathForm">
	<div class="" id="death">
		<div class="container">
			<div class="md-form">
				<input type="number" name="death[refno]" id="form1" class="form-control">
				<label for="form1">REFERENCE NUMBER</label>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm">
					<div class="md-form ">
						<input type="text" name="death[first_name]" id="form2" class="form-control">
						<label for="form2">First Name</label>
					</div>
				</div>
				<div class="col-sm">
					<div class="md-form ">
						<input type="text" name="death[middle_name]" id="form3" class="form-control">
						<label for="form3">Middle Name</label>
					</div>
				</div>
				<div class="col-sm">
					<div class="md-form ">
						<input type="text" name="death[last_name]" id="Last" class="form-control">
						<label for="Last">Last Name</label>
					</div>
				</div>
				<div class="col-2">
					<div class="md-form ">
						<input type="number" name="death[annex]" id="Annex" class="form-control">
						<label for="Annex">Annex</label>
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" name="death[encoder]" class="bday_encoder">
		<div class="container">
			<div class="">
				<div class="dates">
					<div class="md-form">
					<input type="date" name="death[death_date]" id="usr1" class="form-control">
						<label >Date of Death</label>
				</div>
		</div>

			</div>
			<div class="text-center">
				<button class="btn btn-lg btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect" type="submit" id="button-addon2">Submit</button>
				<button class="btn btn-lg btn-outline-warning m-0 px-3 py-2 z-depth-0 waves-effect" type="button" id="button-addon2">Clear All</button>
			</div>


		</div>
	</div>
</form>


<form id="addMarrForm">
	<div class="" id="merage">
		<div class="container">
			<div class="md-form">
				<input type="number" name="marr[refno]" id="form1" class="form-control">
				<label for="form1">REFERENCE NUMBER</label>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm">
					<div class="md-form ">
						<input type="text" name="marr[First_name_h]" id="form2" class="form-control">
						<label for="form2">Firstname of Husband</label>
					</div>
				</div>
				<div class="col-sm">
					<div class="md-form ">
						<input type="text" name="marr[Middle_name_h]" id="form3" class="form-control">
						<label for="form3">Middle Name</label>
					</div>
				</div>
				<div class="col-sm">
					<div class="md-form ">
						<input type="text" name="marr[Last_name_h]" id="Last" class="form-control">
						<label for="Last">Last Name</label>
					</div>
				</div>
				<div class="col-2">
					<div class="md-form ">
						<input type="number" name="marr[annexh]" id="Annex" class="form-control">
						<label for="Annex">Annex</label>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm">
					<div class="md-form ">
						<input type="text" name="marr[First_name_w]" id="form2" class="form-control">
						<label for="form2">Firstname of Wife</label>
					</div>
				</div>
				<div class="col-sm">
					<div class="md-form ">
						<input type="text" name="marr[Middle_name_w]" id="form3" class="form-control">
						<label for="form3">Middle Name</label>
					</div>
				</div>
				<div class="col-sm">
					<div class="md-form ">
						<input type="text" name="marr[Last_name_w]" id="Last" class="form-control">
						<label for="Last">Last Name</label>
					</div>
				</div>
				<div class="col-2">
					<div class="md-form ">
						<input type="number" name="marr[annexw]" id="Annex" class="form-control">
						<label for="Annex">Annex</label>
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" name="marr[encoder]" class="bday_encoder">
		<div class="container">
			<div class="">
				<div class="dates">
					<div class="md-form">
					<input type="date" name="marr[date_of_marriage]" id="usr1" class="form-control">
						<label >Date of Marriage</label>
				</div>
			</div>

			</div>
			<div class="text-center">
				<button class="btn btn-lg btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect" type="submit" id="button-addon2">Submit</button>
				<button class="btn btn-lg btn-outline-warning m-0 px-3 py-2 z-depth-0 waves-effect" type="button" id="button-addon2">Clear All</button>
			</div>

		</div>
	</div>
</div>

	</form>
	</div>
</div>