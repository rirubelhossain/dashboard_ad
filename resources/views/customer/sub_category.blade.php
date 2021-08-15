@extends('layouts.base')


@section('content')
<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form action = "{{route('sub.cate')}}" method = "post" class="form-horizontal" role="form">
								@csrf
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="name" placeholder="Flying Bird-Your Troust Online Shop" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Position </label>

										<div class="col-sm-9">
											<input type="number" id="form-field-1"name="position" placeholder="0123" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Image </label>
										
									<div class="col-sm-9">
									<div class="custom-file mb-3">
									  <input type="file" class="custom-file-input" id="customFile" name="image">
									  <label class="custom-file-label" for="customFile">Choose file</label>
									</div>
																	
									</div>
									</div> 
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">  </label>

										<div class="col-sm-9">
											
										   <button type="submit">Submit</button>
										</div>
									</div>
									
									
								</form>

						</div>



@endsection