
@extends('admin.common.app')

@section('content')
      {{-- Content Start --}}
      <div class="content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-12">

	      <h2>Mentor</h2>

              <div class="card">
                <div class="card-body" style="height:300px;">
		    <div class="row" style="margin-top:20px;">

		    <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control" name="name" value="Homma" readonly>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" class="form-control" name="email" value="hogehoge@gmail.com" readonly>
                        </div>
                      </div>

                      <div class="col-md-6" style="margin-top:20px;">
                        <div class="form-group">
                          <label class="bmd-label-floating">Organization</label>
                          <input type="email" class="form-control" name="email" value="test organization" readonly>
                        </div>
                      </div>

                      <div class="col-md-6" style="margin-top:20px;">
                        <div class="form-group">
                          <label class="bmd-label-floating">Status</label>
                	  <select class="form-control" name="sort">
                        		<option>Confirming</option>
                        		<option>Approved</option>
                                        <option>Denied</option>
                	  </select>
                        </div>
                      </div>

  	              <div style="width:100%; text-align:right;">
           		     <button class="btn btn-info" onclick="location.href=''">Update</button>
            	      </div>

                    </div>

		    </div>
		    </div>
		    {{-- end row --}}

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


