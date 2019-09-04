
@extends('front.common.app')
@section('content')
      {{-- Content Start --}}
      <div class="content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-12">
	      <h2>Domain Expertise </h2>


              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text">
                        <th>
                           Step
                        </th>
                        <th>
                           Description
                        </th>
                      </thead>
                      <tbody>
			<?php 
			for($i=1; $i<7; $i++){
			?>
                        <tr>
                          <td>
				STEP<?= $i ?>
                          </td>
                          <td>
				Can Access to the Knowledge and literacy you want / need
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
        </div>
      </div>
      {{-- Content End --}}
@endsection


