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
        var i = +'{{ ( $faqs->last() == null ? 0 : $faqs->last()->id ) }}';
        function get_summer_note_html(form_id, ques, ans) {
            var output = '';
            output += '<div class="col-lg-6">';
            output += '    <div class="ibox float-e-margins">';
            output += '        <div class="ibox-title">';
            output += '            <h5>Faqs</h5>';
            output += '            <div class="ibox-tools">';
            output += '                <a class="collapse-link">';
            output += '                    <i class="fa fa-chevron-up"></i>';
            output += '                </a>';
            output += '                <a class="dropdown-toggle" data-toggle="dropdown" href="#">';
            output += '                    <i class="fa fa-wrench"></i>';
            output += '                </a>';
            output += '                <ul class="dropdown-menu dropdown-user">';
            output += '                    <li><a href="#">Config option 1</a>';
            output += '                    </li>';
            output += '                    <li><a href="#">Config option 2</a>';
            output += '                    </li>';
            output += '                </ul>';
            output += '                <a class="close-link">';
            output += '                    <i class="fa fa-times" onclick="delete_faq(\''+form_id+'\')"></i>';
            output += '                </a>';
            output += '            </div>';
            output += '        </div>';
            output += '        <div class="ibox-content">';
            output += '            <form action="" method="POST" id="form'+form_id+'" class="form-horizontal">';
            output += '                {{ csrf_field() }}';
            if (ques) {
                output += '                <input type="hidden" name="action" value="edit_faqs">';
            } else {
                output += '                <input type="hidden" name="action" value="form_add_faqs">';
            }
            output += '                <input type="hidden" name="record_id" value="'+form_id+'">';
            output += '                <input type="hidden" class="textarea_data'+form_id+'" value="" name="textarea_data">';
            output += '                <div class="form-group">';
            output += '                    <label class="col-lg-2 control-label">Question</label>';
            output += '                    <div class="col-lg-10">';
            output += '                        <input type="text" placeholder="Your question here" name="question" value="'+ques+'" class="form-control">';
            output += '                    </div>';
            output += '                </div>';
            output += '            </form>';
            output += '        </div>';
            output += '        <div class="ibox-content no-padding">';
            output += '            <div class="summernote'+form_id+'">';
            output += '                '+ans;
            output += '            </div>';
            output += '            <div style="padding-left: 20px;">';
            if ( ques ){
                output += '                <button class="btn btn-primary  btn-xs" onclick="edit('+form_id+')" type="button">edit</button>';
            } else {
                output += '                <button class="btn btn-primary  btn-xs" onclick="save('+form_id+')" type="button">Save</button>';
            }
            output += '            </div>';
            output += '        </div>';
            output += '    </div>';
            output += '</div>';
            return output;
        }
        function addMore() {
            $('.appendhere').append(get_summer_note_html(i, '', ''));
            $('.summernote'+i).summernote();
            i++;
        }
        function save(val) {
            console.log(val);
            var aHTML = $( '.summernote'+val).code(); //save HTML If you need(aHTML: array).
            $('.textarea_data'+val).val(aHTML);
            $('#form'+val).submit();
        }
        function saved_faqs(summernote_id, ques, ans) {
            $('.appendhere').append(get_summer_note_html(summernote_id, ques, ans));
            $('.summernote'+summernote_id).summernote();
            i++;
        }
        function edit(faq_id){
            console.log(faq_id);
            var aHTML = $( '.summernote'+faq_id).code(); //save HTML If you need(aHTML: array).
            $('.textarea_data'+faq_id).val(aHTML);
            $('#form'+faq_id).submit();
        }
        function delete_faq(faq_id){
            console.log(faq_id);
            $('.faq_class').val(faq_id);
            $('#delete_value').submit();
        }
        $(document).ready(function () {
            @foreach ($faqs as $faq)
                // console.log('{{ $faq->answer }}');
                saved_faqs({{ $faq->id }}, '{{ $faq->question }}', '{{ $faq->answer }}');
            @endforeach
        });
    </script>
@endsection


@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row" style="margin-bottom: 15px">
            <div class="col-lg-12">
                <div class="ibox-content">
                    <button class="button btn-primary" type="button" onclick="addMore()">Add More</button>
                </div>
            </div>
        </div>
        <div class="row appendhere">
            
        </div> <!-- row -->
    </div> <!-- wrapper-content -->
        <form action="" method="post" id="delete_value">
            {{ csrf_field() }}
            <input type="hidden" name="action" value="delete_content">
            <input type="hidden" name="faq_id" class="faq_class">
        </form>
   
@endsection

