@extends('admin.layout.master')

@section('content')

    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
    @include('admin.includes.sidebar')
    <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">My profile</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="{{route('employee')}}">Profile</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-5">
                        <div class="box box-success">
                            <div class="panel">

                                <div class="panel-heading">
                                    <span class="panel-title">Personal Details</span>
                                </div>
                                <div class="panel-body pn pb5">
                                    <hr class="short br-lighter">


                                    <div class="box-body no-padding">

                                        <table class="table">
                                            <tbody>
                                            @foreach($details as $detail)
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-birthday-cake"></i>
                                                    </td>
                                                    <td><strong>Birthday</strong></td>
                                                    <td>{{$detail->dob}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-genderless"></i>
                                                    </td>
                                                    <td><strong>Gender</strong></td>
                                                    <td>{{$detail->gender}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-mobile-alt"></i>
                                                    </td>
                                                    <td><strong>Phone number</strong></td>
                                                    <td>{{$detail->phone}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-mobile-alt"></i>
                                                    </td>
                                                    <td><strong>Email</strong></td>
                                                    <td>{{$detail->email}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-calendar-times"></i>
                                                    </td>
                                                    <td><strong>Join date</strong></td>
                                                    <td>{{$detail->join_date}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-map-marker"></i>
                                                    </td>
                                                    <td><strong>Address</strong></td>
                                                    <td>{{$detail->address}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        {{--{{ $details->links() }}--}}

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="box box-success">
                        <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title">Bank Details</span>
                            </div>
                            <div class="panel-body pn pb5">
                                <hr class="short br-lighter">

                                <div class="box-body no-padding">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td style="width: 10px" class="text-center"><i class="fa fa-credit-card"></i></td>
                                            <td><strong>Account Holder name</strong></td>
                                            <td>AAAAA</td>

                                        </tr>
                                        <tr>
                                            <td style="width: 10px" class="text-center"><i class="fa fa-credit-card"></i></td>
                                            <td><strong>Account Number</strong></td>
                                            <td>******************</td>

                                        </tr>
                                        <tr>

                                            <td style="width: 10px" class="text-center"><i class="fa fa-tags"></i></td>
                                            <td><strong>Pf Account Number</strong></td>
                                            <td>**************</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 10px" class="text-center"><i class="fa fa-universal-access"></i></td>
                                            <td><strong>Bank Name</strong></td>
                                            <td>AAAAAAAAAA</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 10px" class="text-center"><i class="fa fa-accessible-icon"></i></td>
                                            <td><strong>Bank Branch</strong></td>
                                            <td>AAAAAAAAAAAA</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 10px" class="text-center"><i class="fa fa-code"></i></td>
                                            <td><strong>Ifsc Code</strong></td>
                                            <td>***********</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Khoz Informatics Pvt. Ltd. Designed and Developed by <a href="https://khozinfo.com/">Khozinfo</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>

@endsection