<x-header-component/>

<div class="userDashboard">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
            <x-sidebar activeid="3" />
			</div>
			<div class="col-md-9">
				<span style="color:green;">{{ Session::get('successmassage') }}</span>
				<span style="color:red;">{{ Session::get('errormsg') }}</span>
				<div class="dashboardBg">
					<h2>Changes password</h2>
					<span id="errormsg" style="color:red;"></span>
					<form action="{{ URL::to('/password-change') }}" method='POST' onsubmit="return validpassword();">
                    @csrf
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">password</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
									@if ($errors->has('password'))
											<span class="text-danger">{{ $errors->first('password') }}</span>
									@endif
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Confrim password</label>
									<input type="password" class="form-control" id="con_password" name="con_password" placeholder="Re-enter">
									@if ($errors->has('con_password'))
											<span class="text-danger">{{ $errors->first('con_password') }}</span>
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

function validpassword(){
             var psw = $("#password").val();
           //  alert(psw);
             var con_psw =$("#con_password").val()
            // alert(psw.length);
            if ($("#password").val() == '') {
                $("#errormsg").html("Please Enter Password!!");
                $("#password").focus();
                return false;
            }else if(psw.length < 8){
                $("#errormsg").html("Password Must Be 8 character!!");
				$("#password").focus();
                return false;
            }else if ($("#con_password").val() == '') {
                $("#errormsg").html("Please Enter Confirm Password!!");
                $("#con_password").focus();
                return false;
            }else if(con_psw.length < 8){
                $("#errormsg").html("Confirm Password Must Be 8 character!!");
				$("#con_password").focus();
                return false;
            }else if(psw != con_psw){
                $("#errormsg").html("Password And Confirm Password Not Match!!");
				$("#con_password").focus();
                return false;
            }

        }

	</script>