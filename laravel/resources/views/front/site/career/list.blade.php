
@extends('front.common.app')
@section('content')
      {{-- Content Start --}}
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">

<?php
for($i=1; $i<5; $i++){
?>
              <div class="card" style="margin:0px 0px 10px 0px; ">
                <div class="card-body" style="height:180px;">
                    <div class="row">
                      <div class="col-md-2">
				<img src="https://weblio.hs.llnwd.net/e7/img/dict/binbi/bima004a.png" style="width:100%; height:auto; border-radius:5px;">
                      </div>
                      <div class="col-md-7">
				<a href="/career">
				<div class="row">
					<div class="col-md-12" style="height:50px;">
						<h2 style="font-size:18px; background-color:#001B1F; color:white;
						padding:5px 8px; border-radius:10px;">The Top 25 Managers of the Year</h2>
						<h2 style="font-size:25px; color:#646464;">Michael Dell</h2>
					</div>
				</div>
				</a>
                      </div>

                    </div>
                </div>
              </div>
	      {{-- card end  --}}
<?php
}
?>

	      </div>
            </div>
          </div>
        </div>
      </div>
      {{-- Content End --}}
@endsection


