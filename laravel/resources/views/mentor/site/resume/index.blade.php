
@extends('mentor.common.app')

@section('content')
      {{-- Content Start --}}
      <div class="content">
        <div class="container-fluid">

{{--
	    <div style="width:100%; text-align:right;">
                <button class="btn btn-info" onclick="location.href='/profile/'">Profile</button>
	    	<button class="btn btn-info" onclick="location.href='/resume/edit'">Edit Resume</button>
	    </div>
--}}

            <div class="col-md-10">

	      <h2>Resume</h2>

              <div class="card">
                <div class="card-body">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Education</label>
                          <textarea class="form-control" name="education" rows="10" readonly>Philosophy
History and Anthropology
Literature and Linguistics
Modern Languages and Cultures
International Public Policy
Law
International and Advanced Japanese Studies
International Area Studies</textarea>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Relevant Courses</label>
                          <textarea class="form-control" name="course" rows="10" readonly>Philosophy
History and Anthropology
Literature and Linguistics
Modern Languages and Cultures
International Public Policy
Law
International and Advanced Japanese Studies
International Area Studies</textarea>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Skills</label>
                          <textarea class="form-control" name="skill" rows="10" readonly>Philosophy
History and Anthropology
Literature and Linguistics
Modern Languages and Cultures
International Public Policy
Law
International and Advanced Japanese Studies
International Area Studies</textarea>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Related Expericne</label>
                          <textarea class="form-control" name="related_experience" rows="10" readonly>Philosophy
History and Anthropology
Literature and Linguistics
Modern Languages and Cultures
International Public Policy
Law
International and Advanced Japanese Studies
International Area Studies</textarea>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Additional Expericne</label>
                          <textarea class="form-control" name="additional_expericne" rows="10" readonly>Philosophy
History and Anthropology
Literature and Linguistics
Modern Languages and Cultures
International Public Policy
Law
International and Advanced Japanese Studies
International Area Studies</textarea>
                        </div>
                      </div>


		    </div>
		    {{-- end row --}}

                </div>
              </div>


	      </div>

            </div>
        </div>
      </div>
      {{-- Content End --}}
@endsection


