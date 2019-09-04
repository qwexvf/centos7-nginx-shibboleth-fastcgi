
@extends('front.common.app')
@section('content')
      {{-- Content Start --}}
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">

	    <button class="btn btn-info" onclick="location.href='/career/list'">To CareerVision List</button>
	    <button class="btn btn-warning">Already set</button>

	    <div class="card" style="background-color:#001B1F; color:white;">
  		<div class="card-body">	
			<h4 style="margin:0px;">The Top 25 Managers of the Year</h4>
  		</div>
	    </div>

              <div class="card">
                <div class="card-body" style="height:300px;">
                    <div class="row">
                      <div class="col-md-2">
				<img src="https://weblio.hs.llnwd.net/e7/img/dict/binbi/bima004a.png" style="width:100%; height:auto; border-radius:5px;">
                      </div>


                      <div class="col-md-7">
				<div class="row">
					<div class="col-md-12" style="height:50px;">
						<h2>Michael Dell</h2>
					</div>

                                        <div class="col-md-12">
						<p>1984年、19歳の頃に、わずか1,000ドルの資金を元手に学生寮の自室でコンピュータ会社「PC's Limited」を起業。同年に大学を中退し、本格的な会社の経営に乗り出す。
「販売店やディーラーを介さず、注文生産の製品を直接顧客に販売する」というコンピュータ業界初の直販制度を採用したことで会社は急成長を遂げ、1988年には24歳の若さで NASDAQ に株式公開を果たした[4]。同年に社名を「デル・コンピュータ」と改める。1992年に会社はフォーチュン500入りを果たし、デルはフォーチュン500社中最も若い最高経営責任者になった[5]。2003年には製品ラインを拡大し社名を「デル」に改名[6]。
2013年2月には、企業買収ファンドと一緒にデルを自ら買収（レバレッジド・バイアウト）することを発表している[9]。</p>
                                        </div>
				</div>
                      </div>
                    </div>

                </div>
              </div>
	      {{-- card end  --}}

	      <h2>Basic Conpetency</h2>
		<button class="btn btn-info">Domain Expertise (Core Domain)</button>
                <button class="btn btn-info">Research Model</button>
                <button class="btn btn-info">Designing Experiment</button>
                <button class="btn btn-info">Data Science Analytics</button>
                <button class="btn btn-info">Data Management and Curation</button>
                <button class="btn btn-info">Conducting Analysis</button>
                <button class="btn btn-info">Patterns Identification</button>
                <button class="btn btn-info">Hypothesis Development</button>
                <button class="btn btn-info">Research Verification</button>

	      <h2>Conpetency Set</h2>
                <button class="btn btn-warning">Issue Understanding</button>
                <button class="btn btn-warning">Analytical Thinking</button>
                <button class="btn btn-warning">Evaluating & Reflecting</button>
                <button class="btn btn-warning">Flexible Thinking</button>
                <button class="btn btn-warning">Accurate self-perception</button>
                <button class="btn btn-warning">Leveraging self-strength</button>
                <button class="btn btn-warning">Negotiating</button>
                <button class="btn btn-warning">Perspective-Taking</button>
                <button class="btn btn-warning">Achievement Focus</button>
                <button class="btn btn-warning">Executing</button>



	      </div>
            </div>
          </div>
        </div>
      </div>
      {{-- Content End --}}
@endsection


