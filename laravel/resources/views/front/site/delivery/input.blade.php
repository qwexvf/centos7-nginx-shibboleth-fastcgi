
@extends('front.common.app')
@section('content')
      {{-- Content Start --}}
      <div class="content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-8">
	      <h2>Delivery</h2>

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

		    {{-- ケイパビリティ  --}}
                    <div class="row">
                      <div class="col-md-12">
  			<div class="form-group">
    			<label for="exampleFormControlSelect1">Capability select</label>
    			<select class="form-control" id="exampleFormControlSelect1">
      				<option>1</option>
      				<option>2</option>
      				<option>3</option>
      				<option>4</option>
      				<option>5</option>
    			</select>
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
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
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


