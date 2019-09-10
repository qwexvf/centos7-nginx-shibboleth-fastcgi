
@extends('admin.common.app')

@section('content')
      {{-- Content Start --}}
      <div class="content">
        <div class="container-fluid">

        <div class="col-12 ml-12">
   	      <h2>Information</h2>
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text">
                        <th>
                           Date
                        </th>
                        <th>
                           Category
                        </th>
                        <th>
			   Title
                        </th>
                      </thead>
                      <tbody>
			<?php 
			for($i=1; $i<5; $i++){
			?>
                        <tr>
                          <td>
                                2019-10-01
                          </td>
                          <td>
                                Delivery
                          </td>

                          <td>
				<a href="" class="text-info">Scientific writing and publishing delivery is approved!</a>
                          </td>
			  <?php
			  }
			  ?>
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


