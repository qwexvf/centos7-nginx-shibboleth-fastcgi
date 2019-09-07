@extends('front.common.app')
@section('content')

     <div class="content">
        <div class="container-fluid">
          <div class="row">

	    {{-- CareerVision  --}}
            <div class="col-md-12 col-sm-12">

	      <h2>CareerVision</h2>

              <div class="card" style="margin-top:5px;">
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
                                                <p>1984年、19歳の頃に、わずか1,000ドルの資金を元手に学生寮の自室でコンピュータ会社「PC's Limited」を起業。同年に>大学を中退し、本格的な会社の経営に乗り出す。
「販売店やディーラーを介さず、注文生産の製品を直接顧客に販売する」というコンピュータ業界初の直販制度を採用したことで会社は急成長を遂げ、1988年には24歳の若さで NASDAQ に株式公開を果たした[4]。同年に社名を「デル・コンピュータ」と改める。1992年に会社はフォーチュン500入りを果たし、デルはフォーチュン500社中最も若い最高経営責>任者になった[5]。2003年には製品ラインを拡大し社名を「デル」に改名[6]。</p>
                                        </div>
                                </div>
                      </div>
                    </div>

                </div>
              </div>
            </div>

	    {{-- 進捗  --}}
            <div class="col-md-12 col-sm-12">

	      <h2 style="width:100%; display:inline-block;">Progress</h2>
	      <div style="width:100%; display:inline-block;">
			<?php
			for($i=1; $i<5; $i++){
			?>
			<img src="/img/batch.png" style="width:120px; height:120px; float:left; margin-right:10px; border-radius:10px;">
			<?php
			}
			?>
	       </div>
	       <span style="float:left; margin-top:10px;">クラスター毎の進捗を表示？</span>
            </div>

	    {{-- HighOutput  --}}
            <div class="col-md-12 col-sm-12">

	      <h2 style="margin-top:20px;">High Output</h2>

              <div class="card" style="margin-top:5px;">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text">
                        <th>
                           Date
                        </th>
                        <th>
                           Category
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
                                Delivery
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
				onclick="location.href='/delivery/detail/1'">Detail</button>
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

@endsection
