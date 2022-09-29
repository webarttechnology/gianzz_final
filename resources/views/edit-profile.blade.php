<x-header-component/>

<div class="userDashboard">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
            <x-sidebar activeid="2" />
			</div>
			<div class="col-md-9">
				<span style="color:green;">{{ Session::get('successmsg') }}</span>
				<span style="color:red;">{{ Session::get('errmsg') }}</span>
				<div class="dashboardBg">

					<h2>Edit profile</h2>
					<span id="errmsg" style="color:red;"></span>
					<form action="{{ URL::to('/my-account') }}" method='POST' onsubmit="return valid();" enctype="multipart/form-data">
					@csrf
						<div class="row">
							<div class="col-md-6">
								<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">First Name</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="{{ $user->name }}">
								@if ($errors->has('name'))
												<span class="text-danger">{{ $errors->first('name') }}</span>
								@endif
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Email address</label>
								<input type="email" class="form-control"  id="email_id" name="email_id" placeholder="info@gmail.com" value="{{ $user->email_id }}">
								@if ($errors->has('email_id'))
										<span class="text-danger">{{ $errors->first('email_id') }}</span>
								@endif
								</div>
							</div>

							<div class="col-md-12">
								<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Contact</label>
								<input type="number" class="form-control" placeholder="Phone Number" id="mobile_no" name="mobile_no"  value="{{ $user->mobile_no }}">
								@if ($errors->has('mobile_no'))
										<span class="text-danger">{{ $errors->first('mobile_no') }}</span>
								@endif
								</div>
							</div>

							<div class="col-md-4">
								<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">City</label>
								<input type="text" class="form-control" placeholder="City" id="city" name="city"  value="{{ $user->city }}">
								@if ($errors->has('city'))
										<span class="text-danger">{{ $errors->first('city') }}</span>
								@endif
								</div>
							</div>

							<div class="col-md-4">
								<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">State</label>
								<input type="text" class="form-control" placeholder="Phone Number" id="state" name="state"  value="{{ $user->state }}">
								@if ($errors->has('city'))
										<span class="text-danger">{{ $errors->first('city') }}</span>
								@endif
								</div>
							</div>

							<div class="col-md-4">
								<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Zipcode</label>
								<input type="number" class="form-control" placeholder="Pincode" id="pincode" name="pincode"  value="{{ $user->pincode }}">
								@if ($errors->has('pincode'))
										<span class="text-danger">{{ $errors->first('pincode') }}</span>
								@endif
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12"><button type="submit" class="btn btn-primary w-25">Update</button></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<x-footer-component/>


<script>

function valid() {
            if ($("#name").val() == '') {
                $("#errmsg").html("Please Enter Your Name!!");
                $("#name").focus();
                return false;
            }else if ($("#email_id").val() == '') {
                $("#errmsg").html("Please Enter Email ID!!");
                $("#email_id").focus();
                return false;
            }else if ($("#mobile_no").val() == '') {
                $("#errmsg").html("Please Enter Mobile No!!");
                $("#mobile_no").focus();
                return false;
            }else if ($("#city").val() == '') {
                $("#errmsg").html("Please Enter City!!");
                $("#city").focus();
                return false;
            }else if ($("#state").val() == '') {
                $("#errmsg").html("Please Enter State!!");
                $("#state").focus();
                return false;
            }else if ($("#pincode").val() == '') {
                $("#errmsg").html("Please Enter Pincode!!");
                $("#pincode").focus();
                return false;
            }
        }

</script>