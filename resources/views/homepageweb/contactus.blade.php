
@extends('layoutsweb.header')
@section('content')
<section style="display: flex; justify-content: center; align-items: center; height: 100vh;">
     
        
          <div class="col-lg-6">
             <h2 style="color:green;">{{$message}}</h2>
            <div class="appointment">
              <h2 class="appointment-title">Make An Appiontment</h2>
              <p class="appointment-desc">Meet with Our Pastor Livingstone T. for prayers or any Consultation</p>
              <form action="{{ route('events.appointments') }}" method="post" class="form-setting" data-toggle="validator" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-lg-6 appointment-form-col-left">
                    <input type="text" name="firstName" class="form-control appointment-form-input" placeholder="First name*"
                      required="">
                  </div>
                  <div class="col-lg-6 appointment-form-col-right">
                    <input type="text" name="lastName" class="form-control appointment-form-input" placeholder="Last name*" required="">
                  </div>
                  <div class="col-lg-6 appointment-form-col-left">
                    <input type="date" name="date" class="form-control appointment-form-input data-input" required="">
                  </div>
                  <div class="col-lg-6 box-select appointment-form-col-right">
                    <select name="reason" class="form-control appointment-form-input">
                      <option value="reason">Choose Reason</option>
                      <option value="Prayers">Prayers</option>
                      <option value="Advice">Advice</option>
                      <option value="Consultation">Consultation</option>
                    </select>
                  </div>
                  <div class="col-lg-6 appointment-form-col-left">
                    <input type="tel" name="phone" class="form-control appointment-form-input" placeholder="Phone" required=""
                      value="" size="10" maxlength="10">
                  </div>
                  <div class="col-lg-6 appointment-form-col-right">
                    <input type="email" name="email" class="form-control appointment-form-input" placeholder="Email" required="">
                  </div>
                  <div class="col-12 appointment-form-col-left">
                    <textarea name="message" class="form-control appointment-form-text" id="exampleFormControlTextarea1" rows="3"
                      placeholder="Message (Optional)"></textarea>
                  </div>
                  <div class="col-12 appointment-form-col-right">
                    <button type="submit" class="appointment-form-btn" value="" style="background-color: green; 
                   color: white; padding:10px;">Book An Appointment</button>
                  </div>
                </div>
              </form>
            </div>
          </div>

<div class="col-md-4">
	<div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-2 text-center text-primary">
                                        <i class="bi fs-1  bi-geo-alt"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <h5 class=" fw-bolder fs-3">Mugutha, Ruiru.</h5>
                                        <p class="fw-bolder fs-6">28973 – 00100</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-2 text-center text-primary">
                                        <i class="bi fs-1 bi-telephone-inbound"></i>
                                    </div>
                                    <div class="col-md-10">
                                      <a href="mailto:connect@cfhchapel.org/"><h5 class=" fw-bolder fs-3">connect@cfhchapel.org</h5></a>
                                        <h5 class="fw-bolder fs-3">+254 720 950828</h5>
                                        <p class="fw-bolder fs-6">Give us Call</p>
                                    </div>
                                </div>
								 </div>
    </div>
</section>

						@endsection