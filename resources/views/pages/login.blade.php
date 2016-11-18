<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

	<head>

	  <!-- Basic -->
	  <title>CozyWork | หาฟรีแลนซ์ฝีมือดีได้ที่นี่</title>

	  @include('layout.partials.header')

	</head>

	<body>		
		<!-- Full Body Container -->
		<div id="container">
			<!-- Modal -->
			<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4" style="top: 100px;"> 
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="myModalLabel">เข้าสู่ระบบ</h4>
						</div>

						<div class="modal-body">
							<form role="form" method="POST" action="{{ url('/login') }}">
                        		{{ csrf_field() }}							
								<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			                        <div class="input-group">
			                            <span class="input-group-addon">
			                                <i class="fa fa-user" style="width: auto"></i>
			                            </span>
			                            <input id="txtUsername" runat="server" type="text" class="form-control" name="user" placeholder="ชื่อผู้ใช้" required="" value="{{ old('email') }}" autofocus/>
			                        </div>
			                        @if ($errors->has('email'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('email') }}</strong>
	                                    </span>
	                                @endif
			                    </div>
			                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
			                        <div class="input-group">
			                            <span class="input-group-addon">
			                                <i class="fa fa-lock" style="width: auto"></i>
			                            </span>
			                            <input id="txtPassword" runat="server" type="password" class="form-control" name="password" placeholder="รหัสผ่าน" required="" />
			                        </div>
			                        @if ($errors->has('password'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('password') }}</strong>
	                                    </span>
	                                @endif
			                    </div>
			                    <button id="btnLogin" type="submit" class="btn btn-info" style="width: 100%">
			                        เข้าสู่ระบบ<i class="fa fa-login"></i>
			                    </button>
			                    <a href="/signup">เข้าร่วมกับเรา</p>
			                </form>
						</div>
						<div class="modal-footer">
							<button id="btnGGLogin" runat="server" class="btn btn-danger" style="width: 100%">
		                        <i class="fa fa-google-plus fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;ล็อคอินด้วย Google+
		                    </button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</div><!-- End Full Body Cintainer -->
	</body>

</html>