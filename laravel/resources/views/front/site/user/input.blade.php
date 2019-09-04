
@extends('front.common.app')
@section('content')
      {{-- Content Start --}}
      <div class="content">
        <div class="container-fluid">
          <div class="row">

	    <div style="width:100%; text-align:right;">
	    	<button class="btn btn-info" onclick="location.href='/profile/edit'">Edit Profile</button>
	    </div>

            <div class="col-md-12">

	      <h2>Profile</h2>

              <div class="card">
                <div class="card-body" style="height:300px;">
		    <div class="row" style="margin-top:20px;">

		    <div class="col-md-3">
			<img src="https://d3cmdai71kklhc.cloudfront.net/post_watermark_sp_320/marketplace/38237/mp_20170517-231534959_ex5j8.jpg"
          style="border-radius:100%; width:200px; height:200px;">
		    </div>


		    <div class="col-md-8">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control" name="name" value="Homma">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" class="form-control" name="email" value="hogehoge@gmail.com">
                        </div>
                      </div>

                      <div class="col-md-6" style="margin-top:20px;">
                        <div class="form-group">
                          <label class="bmd-label-floating">BirthDay</label>
                          <input type="email" class="form-control" name="email" value="1991-10-01">
                        </div>
                      </div>

                      <div class="col-md-6" style="margin-top:20px;">
                        <div class="form-group">
                          <label class="bmd-label-floating">National</label>
                          <input type="email" class="form-control" name="email" value="Japan">
                        </div>
                      </div>

                    </div>

		    </div>
		    </div>
		    {{-- end row --}}

                </div>
              </div>

              <div class="row">
              <div class="col-md-6">

	      <h2>Mentor</h2>

              <div class="card" style="margin-top:20px; height:400px;">
                <div class="card-body">
                    <div class="row" style="padding-top:20px;">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control" name="name" value="Homma">
                        </div>
                      </div>
                    </div>

                </div>
              </div>
	      </div>

              <div class="col-md-6">

	       <h2>History</h2>

              <div class="card" style="margin-top:20px; height:400px;">
                <div class="card-body">
                    <div class="row" style="padding-top:20px;">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">University</label>
                          <input type="text" class="form-control" name="name" value="Waseda University">
                        </div>
                      </div>

                      <div class="col-md-12" style="margin-top:20px;">
                        <div class="form-group">
                          <label class="bmd-label-floating">High School</label>
                          <input type="email" class="form-control" name="email" value="Hadano High School">
                        </div>
                      </div>
                    </div>

                </div>
              </div>
              </div>



	      </div>

            </div>
          </div>
        </div>
      </div>
      {{-- Content End --}}
@endsection


