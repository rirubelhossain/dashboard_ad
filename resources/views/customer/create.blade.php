@extends('layouts.base')


@section('content')
<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form action = "{{route('customer.post')}}" method = "post" class="form-horizontal" role="form">
								@csrf
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="name" placeholder="Flying Bird-Your Troust Online Shop" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Title </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"name="title" placeholder="Your Online Trousted Online Shop" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Brand Name </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"name="brandname" placeholder="Type Brand Name" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									<div class="form-group">
                  					  <label class="col-sm-3 control-label no-padding-right" for="form-field-5"> Brand Type </label>

                   					 <div class="col-sm-9">
                      				 <select name="brandtype" id="form-field-5" class="col-xs-10 col-sm-5">
                            		 <option>Cotton Casual T-shirt for Men - Multicolor</option>
                               		<option>D115 PLUS Bluetooth Bracelet Smart Watch for Android and IOS - Black</option>
                            		<option>Fingerless Gloves for women High Quality Half-Finger hand gloves for women Black
                                	Skin
                            		</option>
                            		<option>Awei TC1 Type-C Jack In Ear Headphones, Earbuds, Full Metal</option>
                        			</select>
                         
                        			<span class="invalid-feedback"></span>
                         
                    </div>
                </div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name= "email" placeholder="info@flyingbird.com" class="col-xs-10 col-sm-5" />
										</div>
									</div>
				 
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Address </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name= "address" placeholder="Dhaka" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									<div  class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Description </label>
										
										<div class="col-sm-9">
										<textarea id="form-field-11" name="description"class="autosize-transition form-control"></textarea>
										</div>
										
									</div>
									
									 <div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Logo </label>
										
									<div class="col-sm-9">
									<div class="custom-file mb-3">
									  <input type="file" class="custom-file-input" id="customFile" name="filename">
									  <label class="custom-file-label" for="customFile">Choose file</label>
									</div> 
																	
									</div>
									</div>
									<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Ficon </label>
										
									<div class="col-sm-9">
									<div class="custom-file mb-3">
									  <input type="file" class="custom-file-input" id="customFile" name="filename2">
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