
@extends('front.common.app')
@section('content')
      {{-- Content Start --}}
      <div class="content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-8">
	      <h2>Delivery Submission</h2>

              <div class="card">
                <div class="card-body">
                  <form action="" method="post">
		    {{csrf_field()}}
		    
                    {{-- クラス名称  --}}
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Course Title</label>
			  <h4>Scientific writing and publishing</h4>
                        </div>
                      </div>
                    </div>

		    {{-- 成果物名称  --}}
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Delivery Title</label>
                          <input type="text" class="form-control" name="name">
                        </div>
                      </div>			
		    </div>

                    {{-- ケイパビリティDEFAUOT  --}}
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
				<label for="exampleFormControlSelect1">Default Capability</label>
				<div style="width:100%; display:inline-block;">
					{{-- defalut capabilityをroop  --}}
					<?php
					for($i=1; $i<5; $i++){
					?>
						<span style="margin-right:5px; color:white; background-color:orange; padding:5px 8px; border-radius:5px;">Domain Expertise </span>
					<?php
					}
					?>
				</div>
                        </div>
                      </div>
                    </div>

		    {{-- ケイパビリティOPTION  --}}
                    <div class="row">
                      <div class="col-md-12">
  			<div class="form-group">
    			<label for="exampleFormControlSelect1">Capability Option</label>
    			<select class="form-control" id="exampleFormControlSelect1">
      				<option>Domain Expertise</option>
      				<option>Domain Expertise</option>
      				<option>Research Model</option>
      				<option>Designing Experiment</option>
      				<option>Data Science Analytics</option>
    			</select>

			<div style="display:inline-block; margin-top:10px;">
				<span style="margin-right:5px; color:white; background-color:orange; padding:5px 8px; border-radius:5px;">Domain Expertise </span>
			</div>

  			</div>
                      </div>
                    </div>


                    {{-- 添付ファイル  --}}
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                        <label for="exampleFormControlSelect1">File</label>
			<input type="file" name="datafile">
                        </div>
                      </div>
                    </div>

                    {{-- レビュワー --}}
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                        <label for="exampleFormControlSelect1">Reviewer select</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                                <option>Homma</option>
                                <option>Ainai</option>
                                <option>Asano</option>
                                <option>Oono</option>
                        </select>
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Description</label>
                          <div class="form-group">
                            <textarea class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-info pull-right">Submit Delivery</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- Content End --}}
@endsection


