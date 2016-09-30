{{-- THIS SECTION CONTAIN FRONTPAGE TEXT EDITING METHODS --}}
@extends('layout_admin.admin_menu_outer')


@section('css')
    <link href="{{ asset('admin/css/plugins/summernote/summernote.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/plugins/summernote/summernote-bs3.css') }}" rel="stylesheet">
@endsection


@section('script')
    
    <!-- SUMMERNOTE -->
    <script src="{{ asset('admin/js/plugins/summernote/summernote.min.js') }}"></script>

    <script>
        $(document).ready(function(){
            $('.summernote_customer').summernote();
            $('.summernote_professional').summernote();
        });
        var save = function(val) {
            var aHTML = $( '.summernote_'+val).code(); //save HTML If you need(aHTML: array).
            $('#textarea_'+val).val(aHTML);
            $('#form_'+val).submit();
            // $('.summernote_professional').destroy();
        };
    </script>
@endsection


@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-6">
                <!--== Start : Professional Membership ==-->
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Join the clud(Professional Membership)</h5>{{-- &nbsp&nbsp&nbsp --}}
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div> <!-- ibox-title -->
                    <div class="ibox-content no-padding">
                        <div class="summernote_professional">
                            {!! $site_settings['textarea_professional'] !!}
                        </div>
                        <div style="padding-left: 20px;">
                            <form method="POST" id="form_professional">
                                {{ csrf_field() }}
                                <input type="hidden" name="action" value="form_professional_submit">
                                <input name="textarea_professional" type="hidden" id="textarea_professional">
                            </form>
                            <button id="save" class="btn btn-primary  btn-xs" onclick="save('professional')" type="button">Save</button>
                        </div>
                    </div> <!-- ibox-content -->
                </div> <!-- float-e-margins -->
                <!--=== End : Professional Membership ===-->
                <!--== Start : Customer Membership ==-->
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Join the clud(Customer Membership)</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div> <!-- ibox-title -->
                    <div class="ibox-content no-padding">
                        <div class="summernote_customer">
                            {!! $site_settings['textarea_customer'] !!}
                        </div>
                        <div style="padding-left: 20px;">
                            <form method="POST" id="form_customer">
                                {{ csrf_field() }}
                                <input type="hidden" name="action" value="form_customer_submit">
                                <input name="textarea_customer" type="hidden" id="textarea_customer">
                            </form>
                            <button id="save" class="btn btn-primary  btn-xs" onclick="save('customer')" type="button">Save</button>
                        </div>
                    </div> <!-- ibox-content -->
                </div> <!-- float-e-margins -->
                <!--=== End : Customer Membership ===-->
                <!--== Start : frontpage_image_uploading ==-->
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Frontpage Image Uploading</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="action" value="frontpage_image_uploading_banner">
                            {{ csrf_field() }}
                            <p>Banner image</p>
                            <div class="form-group">
                                <div class="col-lg-8">
                                    <input type="file" name="banner_image">
                                    <img  class="banner_image" src="/images/banner_image.jpg">
                                </div>
                                <div class="col-lg-4">
                                    <button class="btn btn-sm btn-white" type="submit">Submit</button>
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                </div>
                            </div> --}}
                        </form>
                        <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="action" value="action_site_logo">
                            {{ csrf_field() }}
                            <p>Site Logo</p>
                            <div class="form-group">
                                <div class="col-lg-8">
                                    <input type="file" name="site_logo">
                                    <img  class="site_logo" src="/images/site_logo.png">
                                </div>
                                <div class="col-lg-4">
                                    <button class="btn btn-sm btn-white" type="submit">Submit</button>
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                </div>
                            </div> --}}
                        </form>
                    </div>
                </div> <!-- float-e-margins -->
                <!--=== End : frontpage_image_uploading ===-->

            </div> <!-- col-lg-6 -->
            <div class="col-lg-6">
                <!--== Start : frontpage_slider_text ==-->
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Frontpage Image Text</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form class="form-horizontal" method="POST">
                            <input type="hidden" name="action" value="frontpage_slider_text">
                            {{ csrf_field() }}
                            <p>Enter text comma(,) seperated</p>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Text</label>
                                <div class="col-lg-10">
                                    <input type="text" placeholder="abc, def" name="frontpage_slider_text" value="{{ $site_settings['frontpage_slider_text'] }}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-sm btn-white" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> <!-- float-e-margins -->
                <!--=== End : frontpage_slider_text ===-->
                <!--== Start : Footer form ==-->
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Footer Text</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form class="form-horizontal" method="POST">
                            <input type="hidden" name="action" value="frontpage_footer_links">
                            {{ csrf_field() }}
                            <p>Enter footer social media links</p>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Facebook</label>
                                <div class="col-lg-10">
                                    <input type="text" placeholder="https://fb.com/" name="facebook_link" value="{{ $site_settings['facebook_link'] }}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Twitter</label>
                                <div class="col-lg-10">
                                    <input type="text" placeholder="https://twitter.com/" name="twitter_link" value="{{ $site_settings['twitter_link'] }}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Instagram</label>
                                <div class="col-lg-10">
                                    <input type="text" placeholder="https://instagram.com/" name="instagram_link" value="{{ $site_settings['instagram_link'] }}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Copyright</label>
                                <div class="col-lg-10">
                                    <input type="text" placeholder="Copyright" name="instagram_link" value="{{ $site_settings['copyright'] }}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Above Social links(Right)</label>
                                <div class="col-lg-10">
                                    <input type="text" placeholder="Copyright" name="text_right" value="{{ $site_settings['text_right'] }}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-sm btn-white" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- admin 8 images uploading and text by pushker -->
                   <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Frontpage Professional Image & Text</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="action" value="Professional_text">
                            {{ csrf_field() }}
                            <p> Professional detail </p>
                            <div class="form-group">
                                <div class="col-lg-8">
                                    <div class="col-lg-4 left">
                                        <label class="col-lg-4 control-label">Text</label>
                                        <input type="text" name="Professional_text0" class="form-control text"  value="{{ $site_settings['Professional_text0'] }}">
                                    </div>
                                    <div class="col-lg-4 right">
                                        <label class="col-lg-4 control-label"></label>
                                        <input type="file" name="Professional_image0">
                                        <img class ="professional_image" src="/images/professional_image0.jpg">
                                    </div>
                                </div>
                            </div> 
                            <div class="form-group">
                                <div class="col-lg-8">
                                    <div class="col-lg-4 left">
                                        <label class="col-lg-4 control-label">Text</label>
                                        <input type="text" name="Professional_text1" class="form-control text" value="{{ $site_settings['Professional_text1'] }}">
                                    </div>
                                    <div class="col-lg-4 right">
                                        <label class="col-lg-4 control-label"></label>
                                        <input type="file" name="Professional_image1">
                                        <img  class ="professional_image" src="/images/professional_image1.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-8">
                                    <div class="col-lg-4 left">
                                        <label class="col-lg-4 control-label">Text</label>
                                        <input type="text" name="Professional_text2" class="form-control text" value="{{ $site_settings['Professional_text2'] }}">
                                    </div>
                                    <div class="col-lg-4 right">
                                        <label class="col-lg-4 control-label"></label>
                                        <input type="file" name="Professional_image2">
                                        <img  class ="professional_image" src="/images/professional_image2.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-8">
                                    <div class="col-lg-4 left">
                                        <label class="col-lg-4 control-label">Text</label>
                                        <input type="text" name="Professional_text3" class="form-control text" value="{{ $site_settings['Professional_text3'] }}">
                                    </div>
                                    <div class="col-lg-4 right">
                                        <label class="col-lg-4 control-label"></label>
                                        <input type="file" name="Professional_image3">
                                        <img  class ="professional_image" src="/images/professional_image3.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-8">
                                    <div class="col-lg-4 left">
                                        <label class="col-lg-4 control-label">Text</label>
                                        <input type="text" name="Professional_text4" class="form-control text" value="{{ $site_settings['Professional_text4'] }}">
                                    </div>
                                    <div class="col-lg-4 right">
                                        <label class="col-lg-4 control-label"></label>
                                        <input type="file" name="Professional_image4">
                                        <img  class ="professional_image" src="/images/professional_image4.jpg">
                                    </div>
                                </div>
                           </div>
                           <div class="form-group">
                                <div class="col-lg-8">
                                    <div class="col-lg-4 left">
                                        <label class="col-lg-4 control-label">Text</label>
                                        <input type="text" name="Professional_text5" class="form-control text"  value="{{ $site_settings['Professional_text5'] }}">
                                    </div>
                                    <div class="col-lg-4 right">
                                        <label class="col-lg-4 control-label"></label>
                                        <input type="file" name="Professional_image5">
                                        <img  class ="professional_image" src="/images/professional_image5.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-8">
                                    <div class="col-lg-4 left">
                                        <label class="col-lg-4 control-label">Text</label>
                                        <input type="text" name="Professional_text6" class="form-control text" value="{{ $site_settings['Professional_text6'] }}">
                                    </div>
                                    <div class="col-lg-4 right">
                                        <label class="col-lg-4 control-label"></label>
                                        <input type="file" name="Professional_image6">
                                        <img class ="professional_image" src="/images/professional_image6.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-8">
                                    <div class="col-lg-4 left">
                                        <label class="col-lg-4 control-label">Text</label>
                                        <input type="text" name="Professional_text7" class="form-control text" value="{{ $site_settings['Professional_text7'] }}">
                                    </div>
                                    <div class="col-lg-4 right">
                                        <label class="col-lg-4 control-label"></label>
                                        <input type="file" name="Professional_image7">
                                        <img  class ="professional_image" src="/images/professional_image7.jpg">
                                    </div>
                                </div>
                            </div>
                                {{-- <div class="col-lg-4">
                                    <button class="btn btn-sm btn-white" type="submit">Submit</button>
                                </div> --}}
                            
                            <div class="form-group">
                                <div class="col-lg-8">
                                    <div class="col-lg-4 btnn">
                                        <button class="btn btn-sm btn-white" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                     </div>
                    <!--end -->
                </div> <!-- float-e-margins -->
                <!--=== End : Footer form ===-->

            </div> <!-- col-lg-6 -->
        </div> <!-- row -->
    </div> <!-- wrapper-content -->


@endsection

