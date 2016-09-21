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
            $('.summernote').summernote();
        });
        var edit = function() {
            $('.click2edit').summernote({focus: true});
        };
        var save = function() {
            var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
            $('.click2edit').destroy();
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
                        <h5>Join the clud(Professional Membership)</h5>
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
                        <div class="summernote">
                            <h3>Lorem Ipsum is simply</h3>
                            dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                            <br/>
                            <br/>
                            <ul>
                                <li>Remaining essentially unchanged</li>
                                <li>Make a type specimen book</li>
                                <li>Unknown printer</li>
                            </ul>
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
                        <div class="summernote">
                            <h3>Lorem Ipsum is simply</h3>
                            dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                            <br/>
                            <br/>
                            <ul>
                                <li>Remaining essentially unchanged</li>
                                <li>Make a type specimen book</li>
                                <li>Unknown printer</li>
                            </ul>
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
                        <form class="form-horizontal" method="POST">
                            <input type="hidden" name="action" value="frontpage_image_uploading_banner">
                            {{ csrf_field() }}
                            <p>Banner image</p>
                            <div class="form-group">
                                <div class="col-lg-8">
                                    <input type="file" name="banner_image">
                                </div>
                                <div class="col-lg-4">
                                    <button class="btn btn-sm btn-white" type="submit">Submit</button>
                                </div>
                            </div>
{{--                             <div class="form-group">
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
                </div> <!-- float-e-margins -->
                <!--=== End : Footer form ===-->

            </div> <!-- col-lg-6 -->
        </div> <!-- row -->
    </div> <!-- wrapper-content -->


@endsection

