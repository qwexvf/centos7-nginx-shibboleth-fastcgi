
@extends('admin.common.app')

@section('content')
      {{-- Content Start --}}
      <div class="content">
        <div class="container-fluid">

        <div class="col-12 ml-12">
   	      <h2>AdminUser</h2>

              <div style="width:100%; text-align:right;">
                  <button class="btn btn-info">Add User</button>
              </div>

{{--
              <div class="card" style="margin-top:5px;">
              <div class="card-body">
	      <form>
  		<div class="form-group">
    		<label for="exampleFormControlSelect1">Sorting</label>
    		<select class="form-control" name="sort">
      			<option>Recent</option>
                        <option>Condition</option>
                        <option>ExpericneVolume</option>
    		</select>
  		</div>
	      </form>
	      </div>
              </div>
--}}

              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text">
                        <th>
                           Name
                        </th>
                        <th>
			   Email
                        </th>
                        <th>
			   Status
                        </th>
                        <th>
                           Created_at
                        </th>
                        <th>
                        </th>
                      </thead>
                      <tbody>
			<?php 
			for($i=1; $i<25; $i++){
			?>
                        <tr>
                          <td>
				Homma Test
                          </td>
                          <td>
                                test@gmail.com
                          </td>
                          <td>
				2019-01-10
                          </td>
                          <td>
				<button type="button" class="btn btn-info"
				onclick="location.href='/faoeiohafhieaoie/student/detail/1'">Detail</button>
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


