
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
                          <input type="text" class="form-control" name="name" readonly value="test delivery">
                        </div>
                      </div>			
		    </div>

		    {{-- ケイパビリティ  --}}
                    <div class="row">
                      <div class="col-md-12">
  			<div class="form-group">
    			<label for="exampleFormControlSelect1">Capability select</label>
    			<select class="form-control" id="exampleFormControlSelect1" readonly>
      				<option selected>1</option>
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
                        <select class="form-control" id="exampleFormControlSelect1" readonly>
                                <option>1</option>
                                <option selected>Homma Test</option>
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
                            <textarea class="form-control" rows="10" readonly>節足動物に光を遮蔽するメラニン色素があったことを示す最も古い記録が、5400万年前のガガンボの眼の化石から得られた。この発見について報告する論文が、今週掲載される。この眼の化石のさらなる分析では、ガガンボの眼の構造が化石生成過程でどのように変化したのかも明らかになった。この新たな知見で、他の化石化した節足動物（三葉虫など）の眼の構造に関するこれまでの解釈を見直す必要が生じる可能性がある。

昆虫や甲殻類などの節足動物に見られる複眼は、動物界で最も一般的な視覚器だ。複眼の進化の歴史は、少なくとも5億2000万年前にさかのぼり、初期の複眼の例を研究することで、節足動物の眼の視覚能力に関する手掛かりが得られる可能性がある。
			    </textarea>
                          </div>
                        </div>
                      </div>
                    </div>
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


