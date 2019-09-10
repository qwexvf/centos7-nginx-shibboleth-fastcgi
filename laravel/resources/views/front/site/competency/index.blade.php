
@extends('front.common.app')
@section('content')
      {{-- Content Start --}}
      <div class="content">
        <div class="container-fluid">

        <div class="col-12 ml-12">
   	      <h2>Capability</h2>
	      <div class="row">
			<?php
			for($i=1; $i<10; $i++){
			?>
			<div class="col-6">
				<a href="/competency/1">
            			<div class="card" style="background-color:white;">
	                		<div class="card-body">
						<h4>Domain Expertise </h4>
						<dl class="dl-horizontal">
  						<dd>
    						<div class="progress">
      						<div class="progress-bar" style="width: 60%;">
        					60%
      						</div>
    						</div>
  						</dd>
						</dl>
        	        		</div>
            			</div>
				</a>
			</div>
			<?php
			}
			?>
	      </div>
	</div>



        </div>
      </div>
      {{-- Content End --}}
@endsection


