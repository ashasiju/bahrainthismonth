@include('admin/header')
@foreach($socialmedia as $media)

@endforeach
           
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-sm-8 col-4">
                        <h4 class="page-title">Social Media <span style="font-size:16px;color:#888da8;">Social Media Form</span></h4>
                    </div>
                    <div class="col-lg-8">
                                
                                    

									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="#">Home</a></li>
											
											<li class="breadcrumb-item active" aria-current="page">Edit Social Media</li>
										</ol>
									</nav>
                               
                            </div>
</div>
                <div class="row">
                    <div class="col-md-12">
                    <form action="{{url('/updatesocialmedia')}}" method="post">
                        {{ csrf_field() }}
                            <div class="card-box">
                           
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Facebook Url </label>
                                        <input class="form-control" type="text" name="facebook" value="{{$media->facebook}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Linkedin Url</label>
                                        <input class="form-control " name="linkedin" value="{{$media->linkedin}}" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Google Url </label>
                                        <input class="form-control" type="text" name="google" value="{{$media->google}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Instagram Url</label>
                                        <input class="form-control " value="{{$media->instagram}}" name="instagram" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Pinterest Url </label>
                                        <input class="form-control" type="text" name="pinterest" value="{{$media->pinterest}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Twitter Url</label>
                                        <input class="form-control " name="twitter" value="{{$media->twitter}}" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Youtube Url </label>
                                        <input class="form-control" type="text" name="youtube" value="{{$media->youtube}}">
                                    </div>
                                </div>
                                
                            </div>
                            <input type="hidden" name="id" value="1">

                                <input type="hidden" name="instid" value="{{ Auth::user()->instid }}">
                                
                            <div class="row">
                                <div class="col-sm-12 text-center m-t-20">
                                    <button type="submit" class="btn btn-primary">Save &amp; update</button>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
           
    @include('admin/footer')