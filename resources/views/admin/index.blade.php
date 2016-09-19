@extends('layout_admin.admin_menu_outer')

@section('content')
    
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Users Data</h2>
        </div>
    </div>

    <!-- Start : Table -->
    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Subscribers</h5>

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

                                <th data-toggle="true" class="footable-visible footable-first-column footable-sortable">Project<span class="footable-sort-indicator"></span></th>
                                <th class="footable-visible footable-sortable">Name<span class="footable-sort-indicator"></span></th>
                                <th class="footable-visible footable-sortable">Phone<span class="footable-sort-indicator"></span></th>
                                <th data-hide="all" class="footable-sortable" style="display: none;">Company<span class="footable-sort-indicator"></span></th>
                                <th data-hide="all" class="footable-sortable" style="display: none;">Completed<span class="footable-sort-indicator"></span></th>
                                <th data-hide="all" class="footable-sortable" style="display: none;">Task<span class="footable-sort-indicator"></span></th>
                                <th data-hide="all" class="footable-sortable" style="display: none;">Date<span class="footable-sort-indicator"></span></th>
                                <th class="footable-visible footable-last-column footable-sortable">Action<span class="footable-sort-indicator"></span></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="footable-even" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Project - This is example of project</td>
                                <td class="footable-visible">Patrick Smith</td>
                                <td class="footable-visible">0800 051213</td>
                                <td style="display: none;">Inceptos Hymenaeos Ltd</td>
                                <td style="display: none;"><span class="pie">0.52/1.561</span></td>
                                <td style="display: none;">20%</td>
                                <td style="display: none;">Jul 14, 2013</td>
                                <td class="footable-visible footable-last-column"><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr class="footable-odd" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Alpha project</td>
                                <td class="footable-visible">Alice Jackson</td>
                                <td class="footable-visible">0500 780909</td>
                                <td style="display: none;">Nec Euismod In Company</td>
                                <td style="display: none;"><span class="pie">6,9</span></td>
                                <td style="display: none;">40%</td>
                                <td style="display: none;">Jul 16, 2013</td>
                                <td class="footable-visible footable-last-column"><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr class="footable-even" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Betha project</td>
                                <td class="footable-visible">John Smith</td>
                                <td class="footable-visible">0800 1111</td>
                                <td style="display: none;">Erat Volutpat</td>
                                <td style="display: none;"><span class="pie">3,1</span></td>
                                <td style="display: none;">75%</td>
                                <td style="display: none;">Jul 18, 2013</td>
                                <td class="footable-visible footable-last-column"><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr class="footable-odd" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Gamma project</td>
                                <td class="footable-visible">Anna Jordan</td>
                                <td class="footable-visible">(016977) 0648</td>
                                <td style="display: none;">Tellus Ltd</td>
                                <td style="display: none;"><span class="pie">4,9</span></td>
                                <td style="display: none;">18%</td>
                                <td style="display: none;">Jul 22, 2013</td>
                                <td class="footable-visible footable-last-column"><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr class="footable-even" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Alpha project</td>
                                <td class="footable-visible">Alice Jackson</td>
                                <td class="footable-visible">0500 780909</td>
                                <td style="display: none;">Nec Euismod In Company</td>
                                <td style="display: none;"><span class="pie">6,9</span></td>
                                <td style="display: none;">40%</td>
                                <td style="display: none;">Jul 16, 2013</td>
                                <td class="footable-visible footable-last-column"><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr class="footable-odd" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Project
                                    <small>This is example of project</small>
                                </td>
                                <td class="footable-visible">Patrick Smith</td>
                                <td class="footable-visible">0800 051213</td>
                                <td style="display: none;">Inceptos Hymenaeos Ltd</td>
                                <td style="display: none;"><span class="pie">0.52/1.561</span></td>
                                <td style="display: none;">20%</td>
                                <td style="display: none;">Jul 14, 2013</td>
                                <td class="footable-visible footable-last-column"><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr class="footable-even" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Gamma project</td>
                                <td class="footable-visible">Anna Jordan</td>
                                <td class="footable-visible">(016977) 0648</td>
                                <td style="display: none;">Tellus Ltd</td>
                                <td style="display: none;"><span class="pie">4,9</span></td>
                                <td style="display: none;">18%</td>
                                <td style="display: none;">Jul 22, 2013</td>
                                <td class="footable-visible footable-last-column"><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr class="footable-odd" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Project
                                    <small>This is example of project</small>
                                </td>
                                <td class="footable-visible">Patrick Smith</td>
                                <td class="footable-visible">0800 051213</td>
                                <td style="display: none;">Inceptos Hymenaeos Ltd</td>
                                <td style="display: none;"><span class="pie">0.52/1.561</span></td>
                                <td style="display: none;">20%</td>
                                <td style="display: none;">Jul 14, 2013</td>
                                <td class="footable-visible footable-last-column"><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr class="footable-even" style="display: table-row;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Alpha project</td>
                                <td class="footable-visible">Alice Jackson</td>
                                <td class="footable-visible">0500 780909</td>
                                <td style="display: none;">Nec Euismod In Company</td>
                                <td style="display: none;"><span class="pie">6,9</span></td>
                                <td style="display: none;">40%</td>
                                <td style="display: none;">Jul 16, 2013</td>
                                <td class="footable-visible footable-last-column"><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr class="footable-odd" style="display: table-row;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Betha project</td>
                                <td class="footable-visible">John Smith</td>
                                <td class="footable-visible">0800 1111</td>
                                <td style="display: none;">Erat Volutpat</td>
                                <td style="display: none;"><span class="pie">3,1</span></td>
                                <td style="display: none;">75%</td>
                                <td style="display: none;">Jul 18, 2013</td>
                                <td class="footable-visible footable-last-column"><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr class="footable-even" style="display: table-row;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Gamma project</td>
                                <td class="footable-visible">Anna Jordan</td>
                                <td class="footable-visible">(016977) 0648</td>
                                <td style="display: none;">Tellus Ltd</td>
                                <td style="display: none;"><span class="pie">4,9</span></td>
                                <td style="display: none;">18%</td>
                                <td style="display: none;">Jul 22, 2013</td>
                                <td class="footable-visible footable-last-column"><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr class="footable-odd" style="display: table-row;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Alpha project</td>
                                <td class="footable-visible">Alice Jackson</td>
                                <td class="footable-visible">0500 780909</td>
                                <td style="display: none;">Nec Euismod In Company</td>
                                <td style="display: none;"><span class="pie">6,9</span></td>
                                <td style="display: none;">40%</td>
                                <td style="display: none;">Jul 16, 2013</td>
                                <td class="footable-visible footable-last-column"><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr class="footable-even" style="display: table-row;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Project
                                    <small>This is example of project</small>
                                </td>
                                <td class="footable-visible">Patrick Smith</td>
                                <td class="footable-visible">0800 051213</td>
                                <td style="display: none;">Inceptos Hymenaeos Ltd</td>
                                <td style="display: none;"><span class="pie">0.52/1.561</span></td>
                                <td style="display: none;">20%</td>
                                <td style="display: none;">Jul 14, 2013</td>
                                <td class="footable-visible footable-last-column"><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr class="footable-odd" style="display: table-row;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Gamma project</td>
                                <td class="footable-visible">Anna Jordan</td>
                                <td class="footable-visible">(016977) 0648</td>
                                <td style="display: none;">Tellus Ltd</td>
                                <td style="display: none;"><span class="pie">4,9</span></td>
                                <td style="display: none;">18%</td>
                                <td style="display: none;">Jul 22, 2013</td>
                                <td class="footable-visible footable-last-column"><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="5" class="footable-visible">
                                    <ul class="pagination pull-right"><li class="footable-page-arrow"><a data-page="first" href="#first">«</a></li><li class="footable-page-arrow"><a data-page="prev" href="#prev">‹</a></li><li class="footable-page"><a data-page="0" href="#">1</a></li><li class="footable-page active"><a data-page="1" href="#">2</a></li><li class="footable-page-arrow disabled"><a data-page="next" href="#next">›</a></li><li class="footable-page-arrow disabled"><a data-page="last" href="#last">»</a></li></ul>
                                </td>
                            </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Simple FooTable with pagination, sorting and filter</h5>

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
                        <input type="text" class="form-control input-sm m-b-xs" id="filter" placeholder="Search in table">

                        <table class="footable table table-stripped default footable-loaded" data-page-size="8" data-filter="#filter">
                            <thead>
                            <tr>
                                <th class="footable-visible footable-first-column footable-sortable">Rendering engine<span class="footable-sort-indicator"></span></th>
                                <th class="footable-visible footable-sortable">Browser<span class="footable-sort-indicator"></span></th>
                                <th data-hide="phone,tablet" class="footable-visible footable-sortable">Platform(s)<span class="footable-sort-indicator"></span></th>
                                <th data-hide="phone,tablet" class="footable-visible footable-sortable">Engine version<span class="footable-sort-indicator"></span></th>
                                <th data-hide="phone,tablet" class="footable-visible footable-last-column footable-sortable">CSS grade<span class="footable-sort-indicator"></span></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="gradeX footable-even" style="display: table-row;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Trident</td>
                                <td class="footable-visible">Internet
                                    Explorer 4.0
                                </td>
                                <td class="footable-visible">Win 95+</td>
                                <td class="center footable-visible">4</td>
                                <td class="center footable-visible footable-last-column">X</td>
                            </tr>
                            <tr class="gradeC footable-odd" style="display: table-row;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Trident</td>
                                <td class="footable-visible">Internet
                                    Explorer 5.0
                                </td>
                                <td class="footable-visible">Win 95+</td>
                                <td class="center footable-visible">5</td>
                                <td class="center footable-visible footable-last-column">C</td>
                            </tr>
                            <tr class="gradeA footable-even" style="display: table-row;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Trident</td>
                                <td class="footable-visible">Internet
                                    Explorer 5.5
                                </td>
                                <td class="footable-visible">Win 95+</td>
                                <td class="center footable-visible">5.5</td>
                                <td class="center footable-visible footable-last-column">A</td>
                            </tr>
                            <tr class="gradeA footable-odd" style="display: table-row;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Gecko</td>
                                <td class="footable-visible">Netscape Navigator 9</td>
                                <td class="footable-visible">Win 98+ / OSX.2+</td>
                                <td class="center footable-visible">1.8</td>
                                <td class="center footable-visible footable-last-column">A</td>
                            </tr>

                            <tr class="gradeA footable-even" style="display: table-row;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Webkit</td>
                                <td class="footable-visible">Safari 1.3</td>
                                <td class="footable-visible">OSX.3</td>
                                <td class="center footable-visible">312.8</td>
                                <td class="center footable-visible footable-last-column">A</td>
                            </tr>
                            <tr class="gradeA footable-odd" style="display: table-row;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Webkit</td>
                                <td class="footable-visible">Safari 2.0</td>
                                <td class="footable-visible">OSX.4+</td>
                                <td class="center footable-visible">419.3</td>
                                <td class="center footable-visible footable-last-column">A</td>
                            </tr>
                            <tr class="gradeA footable-even" style="display: table-row;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Webkit</td>
                                <td class="footable-visible">Safari 3.0</td>
                                <td class="footable-visible">OSX.4+</td>
                                <td class="center footable-visible">522.1</td>
                                <td class="center footable-visible footable-last-column">A</td>
                            </tr>
                            <tr class="gradeA footable-odd" style="display: table-row;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Webkit</td>
                                <td class="footable-visible">OmniWeb 5.5</td>
                                <td class="footable-visible">OSX.4+</td>
                                <td class="center footable-visible">420</td>
                                <td class="center footable-visible footable-last-column">A</td>
                            </tr>
                            <tr class="gradeA footable-even" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Webkit</td>
                                <td class="footable-visible">iPod Touch / iPhone</td>
                                <td class="footable-visible">iPod</td>
                                <td class="center footable-visible">420.1</td>
                                <td class="center footable-visible footable-last-column">A</td>
                            </tr>
                            <tr class="gradeA footable-odd" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Webkit</td>
                                <td class="footable-visible">S60</td>
                                <td class="footable-visible">S60</td>
                                <td class="center footable-visible">413</td>
                                <td class="center footable-visible footable-last-column">A</td>
                            </tr>
                            <tr class="gradeA footable-even" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Presto</td>
                                <td class="footable-visible">Opera 7.0</td>
                                <td class="footable-visible">Win 95+ / OSX.1+</td>
                                <td class="center footable-visible">-</td>
                                <td class="center footable-visible footable-last-column">A</td>
                            </tr>
                            <tr class="gradeA footable-odd" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Presto</td>
                                <td class="footable-visible">Opera 7.5</td>
                                <td class="footable-visible">Win 95+ / OSX.2+</td>
                                <td class="center footable-visible">-</td>
                                <td class="center footable-visible footable-last-column">A</td>
                            </tr>
                            <tr class="gradeA footable-even" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Presto</td>
                                <td class="footable-visible">Opera 8.0</td>
                                <td class="footable-visible">Win 95+ / OSX.2+</td>
                                <td class="center footable-visible">-</td>
                                <td class="center footable-visible footable-last-column">A</td>
                            </tr>
                            <tr class="gradeA footable-odd" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Presto</td>
                                <td class="footable-visible">Opera 8.5</td>
                                <td class="footable-visible">Win 95+ / OSX.2+</td>
                                <td class="center footable-visible">-</td>
                                <td class="center footable-visible footable-last-column">A</td>
                            </tr>
                            <tr class="gradeA footable-even" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Presto</td>
                                <td class="footable-visible">Opera 9.0</td>
                                <td class="footable-visible">Win 95+ / OSX.3+</td>
                                <td class="center footable-visible">-</td>
                                <td class="center footable-visible footable-last-column">A</td>
                            </tr>
                            <tr class="gradeA footable-odd" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Presto</td>
                                <td class="footable-visible">Opera 9.2</td>
                                <td class="footable-visible">Win 88+ / OSX.3+</td>
                                <td class="center footable-visible">-</td>
                                <td class="center footable-visible footable-last-column">A</td>
                            </tr>
                            <tr class="gradeA footable-even" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Presto</td>
                                <td class="footable-visible">Opera 9.5</td>
                                <td class="footable-visible">Win 88+ / OSX.3+</td>
                                <td class="center footable-visible">-</td>
                                <td class="center footable-visible footable-last-column">A</td>
                            </tr>
                            <tr class="gradeA footable-odd" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Presto</td>
                                <td class="footable-visible">Opera for Wii</td>
                                <td class="footable-visible">Wii</td>
                                <td class="center footable-visible">-</td>
                                <td class="center footable-visible footable-last-column">A</td>
                            </tr>
                            <tr class="gradeA footable-even" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Presto</td>
                                <td class="footable-visible">Nokia N800</td>
                                <td class="footable-visible">N800</td>
                                <td class="center footable-visible">-</td>
                                <td class="center footable-visible footable-last-column">A</td>
                            </tr>
                            <tr class="gradeA footable-odd" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Presto</td>
                                <td class="footable-visible">Nintendo DS browser</td>
                                <td class="footable-visible">Nintendo DS</td>
                                <td class="center footable-visible">8.5</td>
                                <td class="center footable-visible footable-last-column">C/A<sup>1</sup></td>
                            </tr>
                            <tr class="gradeC footable-even" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>KHTML</td>
                                <td class="footable-visible">Konqureror 3.1</td>
                                <td class="footable-visible">KDE 3.1</td>
                                <td class="center footable-visible">3.1</td>
                                <td class="center footable-visible footable-last-column">C</td>
                            </tr>
                            <tr class="gradeA footable-odd" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>KHTML</td>
                                <td class="footable-visible">Konqureror 3.3</td>
                                <td class="footable-visible">KDE 3.3</td>
                                <td class="center footable-visible">3.3</td>
                                <td class="center footable-visible footable-last-column">A</td>
                            </tr>
                            <tr class="gradeA footable-even" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>KHTML</td>
                                <td class="footable-visible">Konqureror 3.5</td>
                                <td class="footable-visible">KDE 3.5</td>
                                <td class="center footable-visible">3.5</td>
                                <td class="center footable-visible footable-last-column">A</td>
                            </tr>
                            <tr class="gradeX footable-odd" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Tasman</td>
                                <td class="footable-visible">Internet Explorer 4.5</td>
                                <td class="footable-visible">Mac OS 8-9</td>
                                <td class="center footable-visible">-</td>
                                <td class="center footable-visible footable-last-column">X</td>
                            </tr>
                            <tr class="gradeC footable-even" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Tasman</td>
                                <td class="footable-visible">Internet Explorer 5.1</td>
                                <td class="footable-visible">Mac OS 7.6-9</td>
                                <td class="center footable-visible">1</td>
                                <td class="center footable-visible footable-last-column">C</td>
                            </tr>
                            <tr class="gradeC footable-odd" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Tasman</td>
                                <td class="footable-visible">Internet Explorer 5.2</td>
                                <td class="footable-visible">Mac OS 8-X</td>
                                <td class="center footable-visible">1</td>
                                <td class="center footable-visible footable-last-column">C</td>
                            </tr>
                            <tr class="gradeA footable-even" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Misc</td>
                                <td class="footable-visible">NetFront 3.1</td>
                                <td class="footable-visible">Embedded devices</td>
                                <td class="center footable-visible">-</td>
                                <td class="center footable-visible footable-last-column">C</td>
                            </tr>
                            <tr class="gradeA footable-odd" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Misc</td>
                                <td class="footable-visible">NetFront 3.4</td>
                                <td class="footable-visible">Embedded devices</td>
                                <td class="center footable-visible">-</td>
                                <td class="center footable-visible footable-last-column">A</td>
                            </tr>
                            <tr class="gradeX footable-even" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Misc</td>
                                <td class="footable-visible">Dillo 0.8</td>
                                <td class="footable-visible">Embedded devices</td>
                                <td class="center footable-visible">-</td>
                                <td class="center footable-visible footable-last-column">X</td>
                            </tr>
                            <tr class="gradeX footable-odd" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Misc</td>
                                <td class="footable-visible">Links</td>
                                <td class="footable-visible">Text only</td>
                                <td class="center footable-visible">-</td>
                                <td class="center footable-visible footable-last-column">X</td>
                            </tr>
                            <tr class="gradeX footable-even" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Misc</td>
                                <td class="footable-visible">Lynx</td>
                                <td class="footable-visible">Text only</td>
                                <td class="center footable-visible">-</td>
                                <td class="center footable-visible footable-last-column">X</td>
                            </tr>
                            <tr class="gradeC footable-odd" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Misc</td>
                                <td class="footable-visible">IE Mobile</td>
                                <td class="footable-visible">Windows Mobile 6</td>
                                <td class="center footable-visible">-</td>
                                <td class="center footable-visible footable-last-column">C</td>
                            </tr>
                            <tr class="gradeC footable-even" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Misc</td>
                                <td class="footable-visible">PSP browser</td>
                                <td class="footable-visible">PSP</td>
                                <td class="center footable-visible">-</td>
                                <td class="center footable-visible footable-last-column">C</td>
                            </tr>
                            <tr class="gradeU footable-odd" style="display: none;">
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Other browsers</td>
                                <td class="footable-visible">All others</td>
                                <td class="footable-visible">-</td>
                                <td class="center footable-visible">-</td>
                                <td class="center footable-visible footable-last-column">U</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="5" class="footable-visible">
                                    <ul class="pagination pull-right"><li class="footable-page-arrow disabled"><a data-page="first" href="#first">«</a></li><li class="footable-page-arrow disabled"><a data-page="prev" href="#prev">‹</a></li><li class="footable-page active"><a data-page="0" href="#">1</a></li><li class="footable-page"><a data-page="1" href="#">2</a></li><li class="footable-page"><a data-page="2" href="#">3</a></li><li class="footable-page"><a data-page="3" href="#">4</a></li><li class="footable-page"><a data-page="4" href="#">5</a></li><li class="footable-page-arrow"><a data-page="next" href="#next">›</a></li><li class="footable-page-arrow"><a data-page="last" href="#last">»</a></li></ul>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection













@section('content_after_wrapper')
    <div class="small-chat-box fadeInRight animated">

        <div class="heading" draggable="true">
            <small class="chat-date pull-right">
                02.19.2015
            </small>
            Small chat
        </div>

        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 234px;"><div class="content" style="overflow: hidden; width: auto; height: 234px;">

            <div class="left">
                <div class="author-name">
                    Monica Jackson <small class="chat-date">
                    10:02 am
                </small>
                </div>
                <div class="chat-message active">
                    Lorem Ipsum is simply dummy text input.
                </div>

            </div>
            <div class="right">
                <div class="author-name">
                    Mick Smith
                    <small class="chat-date">
                        11:24 am
                    </small>
                </div>
                <div class="chat-message">
                    Lorem Ipsum is simpl.
                </div>
            </div>
            <div class="left">
                <div class="author-name">
                    Alice Novak
                    <small class="chat-date">
                        08:45 pm
                    </small>
                </div>
                <div class="chat-message active">
                    Check this stock char.
                </div>
            </div>
            <div class="right">
                <div class="author-name">
                    Anna Lamson
                    <small class="chat-date">
                        11:24 am
                    </small>
                </div>
                <div class="chat-message">
                    The standard chunk of Lorem Ipsum
                </div>
            </div>
            <div class="left">
                <div class="author-name">
                    Mick Lane
                    <small class="chat-date">
                        08:45 pm
                    </small>
                </div>
                <div class="chat-message active">
                    I belive that. Lorem Ipsum is simply dummy text.
                </div>
            </div>


        </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.4; z-index: 90; right: 1px;"></div></div>
        <div class="form-chat">
            <div class="input-group input-group-sm"><input type="text" class="form-control"> <span class="input-group-btn"> <button class="btn btn-primary" type="button">Send
            </button> </span></div>
        </div>

    </div>

    <div id="small-chat">

        <span class="badge badge-warning pull-right">5</span>
        <a class="open-small-chat">
            <i class="fa fa-comments"></i>

        </a>
    </div>

    <div id="right-sidebar" class="sidebar-top">
        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="sidebar-container" style="overflow: hidden; width: auto; height: 100%;">

            <ul class="nav nav-tabs navs-3">

                <li class="active"><a data-toggle="tab" href="#tab-1">
                    Notes
                </a></li>
                <li><a data-toggle="tab" href="#tab-2">
                    Projects
                </a></li>
                <li class=""><a data-toggle="tab" href="#tab-3">
                    <i class="fa fa-gear"></i>
                </a></li>
            </ul>

            <div class="tab-content">


                <div id="tab-1" class="tab-pane active">

                    <div class="sidebar-title">
                        <h3> <i class="fa fa-comments-o"></i> Latest Notes</h3>
                        <small><i class="fa fa-tim"></i> You have 10 new message.</small>
                    </div>

                    <div>

                        <div class="sidebar-message">
                            <a href="#">
                                <div class="pull-left text-center">
                                    <img alt="image" class="img-circle message-avatar" src="img/a1.jpg">

                                    <div class="m-t-xs">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                    </div>
                                </div>
                                <div class="media-body">

                                    There are many variations of passages of Lorem Ipsum available.
                                    <br>
                                    <small class="text-muted">Today 4:21 pm</small>
                                </div>
                            </a>
                        </div>
                        <div class="sidebar-message">
                            <a href="#">
                                <div class="pull-left text-center">
                                    <img alt="image" class="img-circle message-avatar" src="img/a2.jpg">
                                </div>
                                <div class="media-body">
                                    The point of using Lorem Ipsum is that it has a more-or-less normal.
                                    <br>
                                    <small class="text-muted">Yesterday 2:45 pm</small>
                                </div>
                            </a>
                        </div>
                        <div class="sidebar-message">
                            <a href="#">
                                <div class="pull-left text-center">
                                    <img alt="image" class="img-circle message-avatar" src="img/a3.jpg">

                                    <div class="m-t-xs">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    Mevolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                    <br>
                                    <small class="text-muted">Yesterday 1:10 pm</small>
                                </div>
                            </a>
                        </div>
                        <div class="sidebar-message">
                            <a href="#">
                                <div class="pull-left text-center">
                                    <img alt="image" class="img-circle message-avatar" src="img/a4.jpg">
                                </div>

                                <div class="media-body">
                                    Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                                    <br>
                                    <small class="text-muted">Monday 8:37 pm</small>
                                </div>
                            </a>
                        </div>
                        <div class="sidebar-message">
                            <a href="#">
                                <div class="pull-left text-center">
                                    <img alt="image" class="img-circle message-avatar" src="img/a8.jpg">
                                </div>
                                <div class="media-body">

                                    All the Lorem Ipsum generators on the Internet tend to repeat.
                                    <br>
                                    <small class="text-muted">Today 4:21 pm</small>
                                </div>
                            </a>
                        </div>
                        <div class="sidebar-message">
                            <a href="#">
                                <div class="pull-left text-center">
                                    <img alt="image" class="img-circle message-avatar" src="img/a7.jpg">
                                </div>
                                <div class="media-body">
                                    Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                    <br>
                                    <small class="text-muted">Yesterday 2:45 pm</small>
                                </div>
                            </a>
                        </div>
                        <div class="sidebar-message">
                            <a href="#">
                                <div class="pull-left text-center">
                                    <img alt="image" class="img-circle message-avatar" src="img/a3.jpg">

                                    <div class="m-t-xs">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below.
                                    <br>
                                    <small class="text-muted">Yesterday 1:10 pm</small>
                                </div>
                            </a>
                        </div>
                        <div class="sidebar-message">
                            <a href="#">
                                <div class="pull-left text-center">
                                    <img alt="image" class="img-circle message-avatar" src="img/a4.jpg">
                                </div>
                                <div class="media-body">
                                    Uncover many web sites still in their infancy. Various versions have.
                                    <br>
                                    <small class="text-muted">Monday 8:37 pm</small>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>

                <div id="tab-2" class="tab-pane">

                    <div class="sidebar-title">
                        <h3> <i class="fa fa-cube"></i> Latest projects</h3>
                        <small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>
                    </div>

                    <ul class="sidebar-list">
                        <li>
                            <a href="#">
                                <div class="small pull-right m-t-xs">9 hours ago</div>
                                <h4>Business valuation</h4>
                                It is a long established fact that a reader will be distracted.

                                <div class="small">Completion with: 22%</div>
                                <div class="progress progress-mini">
                                    <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                                </div>
                                <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="small pull-right m-t-xs">9 hours ago</div>
                                <h4>Contract with Company </h4>
                                Many desktop publishing packages and web page editors.

                                <div class="small">Completion with: 48%</div>
                                <div class="progress progress-mini">
                                    <div style="width: 48%;" class="progress-bar"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="small pull-right m-t-xs">9 hours ago</div>
                                <h4>Meeting</h4>
                                By the readable content of a page when looking at its layout.

                                <div class="small">Completion with: 14%</div>
                                <div class="progress progress-mini">
                                    <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-primary pull-right">NEW</span>
                                <h4>The generated</h4>
                                <!--<div class="small pull-right m-t-xs">9 hours ago</div>-->
                                There are many variations of passages of Lorem Ipsum available.
                                <div class="small">Completion with: 22%</div>
                                <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="small pull-right m-t-xs">9 hours ago</div>
                                <h4>Business valuation</h4>
                                It is a long established fact that a reader will be distracted.

                                <div class="small">Completion with: 22%</div>
                                <div class="progress progress-mini">
                                    <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                                </div>
                                <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="small pull-right m-t-xs">9 hours ago</div>
                                <h4>Contract with Company </h4>
                                Many desktop publishing packages and web page editors.

                                <div class="small">Completion with: 48%</div>
                                <div class="progress progress-mini">
                                    <div style="width: 48%;" class="progress-bar"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="small pull-right m-t-xs">9 hours ago</div>
                                <h4>Meeting</h4>
                                By the readable content of a page when looking at its layout.

                                <div class="small">Completion with: 14%</div>
                                <div class="progress progress-mini">
                                    <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-primary pull-right">NEW</span>
                                <h4>The generated</h4>
                                <!--<div class="small pull-right m-t-xs">9 hours ago</div>-->
                                There are many variations of passages of Lorem Ipsum available.
                                <div class="small">Completion with: 22%</div>
                                <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                            </a>
                        </li>

                    </ul>

                </div>

                <div id="tab-3" class="tab-pane">

                    <div class="sidebar-title">
                        <h3><i class="fa fa-gears"></i> Settings</h3>
                        <small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>
                    </div>

                    <div class="setings-item">
                <span>
                    Show notifications
                </span>
                        <div class="switch">
                            <div class="onoffswitch">
                                <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                <label class="onoffswitch-label" for="example">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="setings-item">
                <span>
                    Disable Chat
                </span>
                        <div class="switch">
                            <div class="onoffswitch">
                                <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example2">
                                <label class="onoffswitch-label" for="example2">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="setings-item">
                <span>
                    Enable history
                </span>
                        <div class="switch">
                            <div class="onoffswitch">
                                <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                                <label class="onoffswitch-label" for="example3">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="setings-item">
                <span>
                    Show charts
                </span>
                        <div class="switch">
                            <div class="onoffswitch">
                                <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                                <label class="onoffswitch-label" for="example4">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="setings-item">
                <span>
                    Offline users
                </span>
                        <div class="switch">
                            <div class="onoffswitch">
                                <input type="checkbox" checked="" name="collapsemenu" class="onoffswitch-checkbox" id="example5">
                                <label class="onoffswitch-label" for="example5">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="setings-item">
                <span>
                    Global search
                </span>
                        <div class="switch">
                            <div class="onoffswitch">
                                <input type="checkbox" checked="" name="collapsemenu" class="onoffswitch-checkbox" id="example6">
                                <label class="onoffswitch-label" for="example6">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="setings-item">
                <span>
                    Update everyday
                </span>
                        <div class="switch">
                            <div class="onoffswitch">
                                <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                                <label class="onoffswitch-label" for="example7">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-content">
                        <h4>Settings</h4>
                        <div class="small">
                            I belive that. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            And typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                            Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </div>
                    </div>

                </div>
            </div>

        </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 494.501px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.4; z-index: 90; right: 1px;"></div></div>
    </div>
@endsection










@section('script')
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success('Responsive Admin Theme', 'Welcome to INSPINIA');

            }, 1300);


            var data1 = [
            [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
            [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
                ],
                {
                    series: {
                        lines: {
                            show: false,
                            fill: true
                        },
                        splines: {
                            show: true,
                            tension: 0.4,
                            lineWidth: 1,
                            fill: 0.4
                        },
                        points: {
                            radius: 0,
                            show: true
                        },
                        shadowSize: 2
                    },
                    grid: {
                        hoverable: true,
                        clickable: true,
                        tickColor: "#d5d5d5",
                        borderWidth: 1,
                        color: '#d5d5d5'
                    },
                    colors: ["#1ab394", "#1C84C6"],
                    xaxis:{
                    },
                    yaxis: {
                        ticks: 4
                    },
                    tooltip: false
                }
                );

            var doughnutData = [
            {
                value: 300,
                color: "#a3e1d4",
                highlight: "#1ab394",
                label: "App"
            },
            {
                value: 50,
                color: "#dedede",
                highlight: "#1ab394",
                label: "Software"
            },
            {
                value: 100,
                color: "#A4CEE8",
                highlight: "#1ab394",
                label: "Laptop"
            }
            ];

            var doughnutOptions = {
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                percentageInnerCutout: 45, // This is 0 for Pie charts
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false
            };

            var ctx = document.getElementById("doughnutChart").getContext("2d");
            var DoughnutChart = new Chart(ctx).Doughnut(doughnutData, doughnutOptions);

            var polarData = [
            {
                value: 300,
                color: "#a3e1d4",
                highlight: "#1ab394",
                label: "App"
            },
            {
                value: 140,
                color: "#dedede",
                highlight: "#1ab394",
                label: "Software"
            },
            {
                value: 200,
                color: "#A4CEE8",
                highlight: "#1ab394",
                label: "Laptop"
            }
            ];

            var polarOptions = {
                scaleShowLabelBackdrop: true,
                scaleBackdropColor: "rgba(255,255,255,0.75)",
                scaleBeginAtZero: true,
                scaleBackdropPaddingY: 1,
                scaleBackdropPaddingX: 1,
                scaleShowLine: true,
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false
            };
            var ctx = document.getElementById("polarChart").getContext("2d");
            var Polarchart = new Chart(ctx).PolarArea(polarData, polarOptions);

        });
    </script>
@endsection
