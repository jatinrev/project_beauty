{{-- THIS SECTION CONTAIN FRONTPAGE TEXT EDITING METHODS --}}
@extends('layout_admin.admin_menu_outer')


@section('css')
@endsection


@section('script')
@endsection


@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>contact us Queries</h5>
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
                        <table class="footable table table-stripped toggle-arrow-tiny default breakpoint footable-loaded" data-page-size="8">
                            <thead>
                                <tr>
                                    <th data-toggle="true" class="footable-visible footable-first-column footable-sortable">Email<span class="footable-sort-indicator"></span></th>
                                    <th class="footable-visible footable-sortable">Query<span class="footable-sort-indicator"></span></th>
                                    <th class="footable-visible footable-sortable">Is Active<span class="footable-sort-indicator"></span></th>
                                    {{-- <th class="footable-visible footable-last-column footable-sortable">Action<span class="footable-sort-indicator"></span></th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach ($contact_us as $contactus)
                                    <tr>
                                        <td>{{ $contactus->email }}</td>
                                        <td>{{ $contactus->query }}</td>
                                        <td>True</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $contact_us->links() }}
                    </div>
                </div>
            </div> <!-- col-lg-6 -->
        </div> <!-- row -->
    </div> <!-- wrapper-content -->
    
@endsection

