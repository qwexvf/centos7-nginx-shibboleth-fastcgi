
@extends('admin.common.app')

@section('content')
      {{-- Content Start --}}
      <div class="content">
        <div class="container-fluid">

        <div class="col-12 ml-12">
   	      <h2>Student</h2>

              <div style="width:100%; text-align:right;">
                  <button class="btn btn-info">PickupList</button>
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
                        </th>
                        <th>
                           Name
                        </th>
                        <th>
			   Mentor
                        </th>
                        <th>
                           <a href="" style="color:#00bcd4;">TotalView ↓</a>
                        </th>
                        <th>
                           <a href="" style="color:#00bcd4;">LastLogin</a>
                        </th>
                        <th>
                           <a href="" style="color:#00bcd4;">Condition</a>
                        </th>
                        <th>
                           <a href="" style="color:#00bcd4;">TotalProgress</a>
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
                                <img src="https://d3cmdai71kklhc.cloudfront.net/post_watermark_sp_320/marketplace/38237/mp_20170517-231534959_ex5j8.jpg"
 				style="width:100px; height:100px; border-radius:100%;">
                          </td>
                          <td>
				Homma Test
                          </td>
                          <td>
                                Homma Test
                          </td>
                          <td>
                                <span style="font-size:20px;">112</span>
                          </td>
                          <td>
                                <span style="font-size:20px;">2019-10-01</span>
                          </td>
                          <td>
				<span style="font-size:35px; color:#1e90fa; text-align:center; width:100%;">↑</span>
                          </td>
                          <td>
                                <span style="font-size:30px; color:#1e90fa; text-align:center; width:100%;">60%</span>
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


