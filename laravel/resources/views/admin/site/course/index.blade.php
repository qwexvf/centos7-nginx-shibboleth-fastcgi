
@extends('front.common.app')
@section('content')
      {{-- Content Start --}}
      <div class="content">
        <div class="container-fluid">

        <div class="col-12 ml-12">
	<h2>Courses</h2>
        <table class="table table-bordered" style="background-color:white;">
            <thead>
                <tr style="background-color:#001B1F; color:white;">
                    <th></th>
                    <th style="width:14%; text-align:center;">Monday</th>
                    <th style="width:14%; text-align:center;">Tuesday</th>
                    <th style="width:14%; text-align:center;">Wednesday</th>
                    <th style="width:14%; text-align:center;">Thusday</th>
                    <th style="width:14%; text-align:center;">Friday</th>
                    <th style="width:14%; text-align:center;">Saturday</th>
                    <th style="width:14%; text-align:center;">Sunday</th>
                </tr>
            </thead>
            <tbody>
		<?php
		for($i=1; $i<6; $i++){ 
		?>
                <tr style="height:80px;">
                    <td><?php echo $i; ?></td>
                    <td></td>
                    <td><a href="/delivery/submit/1" class="text-info">Biology</a></td>
                    <td></td>
                    <td></td>
                    <td><a href="/delivery/submit/2" class="text-info">Field Research</a></td>
                    <td></td>
                    <td></td>
                </tr>
		<?php
		}
		?>

            </tbody>
        </table>
        </div>


        <div class="col-12 ml-12">
   	      <h2>Other Conents</h2>
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text">
                        <th>
			   Course Title
                        </th>
                        <th>
                           Teacher
                        </th>
                        <th>
                        </th>
                      </thead>
                      <tbody>

                        <tr>
                          <td>
				Scientific writing and publishing
                          </td>
                          <td>
				Atsushi Kawaguchi
			  </td>
                          <td>
				<button type="button" href="/delivery/submit/3" class="btn btn-info">Submit Deliverable</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

	</div>



        </div>
      </div>
      {{-- Content End --}}
@endsection


