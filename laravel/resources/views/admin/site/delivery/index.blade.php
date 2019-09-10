
@extends('admin.common.app')

@section('content')
      {{-- Content Start --}}
      <div class="content">
        <div class="container-fluid">

        <div class="col-12 ml-12">
   	      <h2>Learning Outcomes</h2>

              <div class="card" style="margin-top:5px;">
              <div class="card-body">
              <form>
		<div class="row">
                <div class="form-group col-md-4">
                <label for="exampleFormControlSelect1">Sorting</label>
                <select class="form-control" name="sort">
                        <option>Recent</option>
                        <option>CompetencyWeight</option>
                </select>
                </div>

                <div class="form-group col-md-4">
                <label for="exampleFormControlSelect1">Status</label>
                <select class="form-control" name="sort">
                        <option>Progress</option>
                        <option>Approved</option>
                        <option>Denied</option>
                </select>
                </div>

                <div class="form-group col-md-4">
                <label for="exampleFormControlSelect1">Date</label>
                <select class="form-control" name="sort">
                        <option>2019-9</option>
                        <option>2019-10</option>
                </select>
                </div>

		</div>
              </form>
              </div>
              </div>

              <div style="width:100%; text-align:left;">
                  <button class="btn btn-info" onclick="location.href=''" style="background-color:#808080; box-shadow:none;">Reset</button>
                  <button class="btn btn-info" onclick="location.href=''">Search</button>
              </div>

              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text">
                        <th>
                           Date
                        </th>
                        <th>
			   Student
                        </th>
                        <th>
			   Class
                        </th>
                        <th>
                           Reviewer
                        </th>
                        <th>
                           Status
                        </th>
                        <th>
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
                                <a href="/faoeiohafhieaoie/student/detail/1" class="text-info">Homma test</a>
                          </td>

                          <td>
				<a href="" class="text-info">Scientific writing and publishing delivery is approved!</a>
                          </td>
                          <td>
                                Homma Test
                          </td>
                          <td>
				Approved
                          </td>
                          <td>
				<button type="button" class="btn btn-info"
				onclick="location.href='/faoeiohafhieaoie/experience/detail/1'">Detail</button>
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


