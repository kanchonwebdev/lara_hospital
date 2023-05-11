<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Appointment List | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=3.1.1">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.1.1">
</head>

<body class="nk-body ui-rounder npc-default has-sidebar ">
    <div class="nk-app-root">
        @include('inc/sidebar')
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('inc/header')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between g-3">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Appointment List</h3>
                                        </div>
                                        <div class="nk-block-head-content">
                                            <a data-bs-toggle="modal" href="#addAppointment" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                            <a data-bs-toggle="modal" href="#addAppointment" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Appointment</span></a>
                                        </div><!-- .nk-block-head-content -->
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered card-stretch">
                                        <div class="card-inner-group">
                                            <div class="card-inner p-0 pt-2">
                                                <div class="nk-tb-list nk-tb-ulist">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        <div class="nk-tb-col"><span>Patient</span></div>
                                                        <div class="nk-tb-col tb-col-mb"><span>Department</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span>Doctor</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span>Serial No</span></div>
                                                        <div class="nk-tb-col tb-col-xxl"><span>Mobile No</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span>Date</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span>Status</span></div>
                                                        <div class="nk-tb-col tb-col-xxl"><span>Created By</span></div>
                                                        <div class="nk-tb-col nk-tb-col-tools">&nbsp;</div>
                                                    </div><!-- .nk-tb-item -->

                                                    @foreach($data as $result)
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">
                                                                            {{ $result['name'] }}
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-mb">
                                                                <span class="tb-lead-sub">{{ $result['dep'] }}</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <div class="user-card">
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">{{ $result['doctor'] }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-lg">
                                                                <span>{{ $result['serial'] }}</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-xxl">
                                                                <span>{{ $result['phone'] }}</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-lg">
                                                                <span class="tb-date">{{ $result['date'] }}</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span class="tb-status text-info">{{ $result['status'] }}</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-xxl">
                                                                <span>Admin</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                <ul class="nk-tb-actions gx-1">
                                                                    <li>
                                                                        <div class="drodown">
                                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown">
                                                                                <em class="icon ni ni-more-h"></em>
                                                                            </a>
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <ul class="link-list-opt no-bdr">
                                                                                    <li id="upApp">
                                                                                        <a data-bs-toggle="modal" data-id="{{ $result['app_id'] }}" href="#editAppointment">
                                                                                            <em class="icon ni ni-edit"></em>
                                                                                            <span>Edit</span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>

                                            <!-- .card-inner -->
                                            <div class="card-inner">
                                                {{ $data->links('pagination::bootstrap-5') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->

    <!-- Add Appoinment-->
    <div class="modal fade" tabindex="-1" role="dialog" id="addAppointment">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Add Appointment</h5>
                    
                    <div class="alert alert-success" id="sucMsg"></div>
                    <form class="mt-4" id="addApp">
                        @csrf
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="name">Name</label>
                                    <div class="alert alert-danger" id="nameErr"></div>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="mobile">Mobile No</label>
                                    <div class="alert alert-danger" id="phoneErr"></div>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile No.">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Appointment Date</label>
                                    <div class="alert alert-danger" id="dateErr"></div>
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-calendar"></em>
                                        </div>
                                        <input type="text" class="form-control date-picker" name="appDate" id="appDate" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="serial">Serial No</label>
                                    <div class="alert alert-danger" id="serialErr"></div>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="serial" id="serial" placeholder="Serial No">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Department</label>
                                    <div class="alert alert-danger" id="depErr"></div>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" name="dep" id="dep" data-placeholder="Select Department">
                                            <option value="">Select</option>
                                            <option value="Anesthesiology">Anesthesiology</option>
                                            <option value="Cardiology">Cardiology</option>
                                            <option value="Dermatology">Dermatology</option>
                                            <option value="Diagnostic radiology">Diagnostic radiology</option>
                                            <option value="Emergency medicine">Emergency medicine</option>
                                            <option value="Neurology">Neurology</option>
                                            <option value="Obstetrics and gynecology">Obstetrics and gynecology</option>
                                            <option value="Ophthalmology">Ophthalmology</option>
                                            <option value="Pathology">Pathology</option>
                                            <option value="Pediatrics">Pediatrics</option>
                                            <option value="Psychiatry">Psychiatry</option>
                                            <option value="Surgery">Surgery</option>
                                            <option value="Urology">Urology</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Doctor</label>
                                    <div class="alert alert-danger" id="docErr"></div>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" name="doctor" id="doctor" data-placeholder="Select Doctor">
                                            <option value="">Select Doctor</option>
                                            <option value="Joe Larson">Joe Larson</option>
                                            <option value="Emma Walker">Emma Walker</option>
                                            <option value="Ernesto Vargas">Ernesto Vargas</option>
                                            <option value="Patrick Newman">Patrick Newman</option>
                                            <option value="Amelia Grant">Amelia Grant</option>
                                            <option value="Debra Grant">Debra Grant</option>
                                            <option value="Snyder Debra">Snyder Debra</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <div class="alert alert-danger" id="statusErr"></div>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" name="status" id="status" data-placeholder="Select Status">
                                            <option value="">Select</option>
                                            <option value="Apporve">Apporve</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Cancel">Cancel</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button type="submit" class="btn btn-primary" id="saveBtn">Add Appointment</button>
                                    </li>
                                </ul>
                            </div><!-- .col -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Appoinment-->
    <div class="modal fade" tabindex="-1" role="dialog" id="editAppointment">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Update Appointment</h5>
                    <div class="alert alert-success" id="sucMsg2"></div>
                    <form class="mt-4" id="updateApp">
                        @csrf
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editName">Name</label>
                                    <div class="alert alert-danger" id="nameErr2"></div>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="name" id="editName" placeholder="Name">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editMobile">Mobile No</label>
                                    <div class="alert alert-danger" id="phoneErr2"></div>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="mobile" id="editMobile" placeholder="Mobile No.">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Appointment Date</label>
                                    <div class="alert alert-danger" id="dateErr2"></div>
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-calendar"></em>
                                        </div>
                                        <input type="text" class="form-control date-picker" name="appDate" id="appDate2" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="serial-edit">Serial No</label>
                                    <div class="alert alert-danger" id="serialErr2"></div>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="serial" id="serial-edit" placeholder="Serial No">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Department</label>
                                    <div class="alert alert-danger" id="depErr2"></div>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" name="dep" id="dep2" data-placeholder="Select Department">
                                            <option value="">Select</option>
                                            <option value="Gastroenterology">Gastroenterology</option>
                                            <option value="Anesthesiology">Anesthesiology</option>
                                            <option value="Cardiology">Cardiology</option>
                                            <option value="Dermatology">Dermatology</option>
                                            <option value="Diagnostic Radiology">Diagnostic Radiology</option>
                                            <option value="Emergency Medicine">Emergency Medicine</option>
                                            <option value="Neurology">Neurology</option>
                                            <option value="Obstetrics and gynecology">Obstetrics and gynecology</option>
                                            <option value="Ophthalmology">Ophthalmology</option>
                                            <option value="Pathology">Pathology</option>
                                            <option value="Pediatrics">Pediatrics</option>
                                            <option value="Psychiatry">Psychiatry</option>
                                            <option value="Surgery">Surgery</option>
                                            <option value="Urology">Urology</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Doctor</label>
                                    <div class="alert alert-danger" id="docErr2"></div>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" name="doctor" id="doc2" data-placeholder="Select Doctor">
                                            <option value="">Select</option>
                                            <option value="Joe Larson">Joe Larson</option>
                                            <option value="Janet Snyder">Janet Snyder</option>
                                            <option value="Amelia Grant">Amelia Grant</option>
                                            <option value="Debra Grant">Debra Grant</option>
                                            <option value="Snyder Debra">Snyder Debra</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <div class="alert alert-danger" id="statusErr2"></div>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" name="status" id="status2" data-placeholder="Select Status">
                                            <option value="">Select</option>
                                            <option value="Approved">Approved</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Cancel">Cancel</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <input type="hidden" name="appID" id="appID">
                                        <button type="submit" class="btn btn-primary" id="upBtn">Update</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div><!-- .modal-body -->
            </div>
        </div>
    </div>
    <!-- JavaScript -->

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('assets/js/bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

    <script>
        $(function() {
            $(".alert").fadeOut();
            $("#sucMsg").fadeOut();
            
            /* add new appointment */
            $("#addApp").on('submit', function(e) {
                e.preventDefault();

                $("#saveBtn").text('Adding');
                $('#saveBtn').prop('disabled', true)

                $.ajax({
                    url: "{{ url('add-appointment') }}",
                    method: 'post',
                    data: new FormData(this),
                    processData: false,
                    dataType: 'json',
                    contentType: false,
                    success: function(data) {
                        $("#saveBtn").text('Add Appointment');
                        $('#saveBtn').prop('disabled', false);

                        if (data.status == 0) {  
                            if (data.error.hasOwnProperty("name")){
                                $("#nameErr").text(data.error.name).fadeIn();
                            }else{
                                $("#nameErr").text(data.error.name).fadeOut();
                            }

                            if (data.error.hasOwnProperty("appDate")){
                                $("#dateErr").text(data.error.appDate).fadeIn();
                            }else{
                                $("#dateErr").text(data.error.appDate).fadeOut();
                            }

                            if (data.error.hasOwnProperty("dep")){
                                $("#depErr").text(data.error.dep).fadeIn();
                            }else{
                                $("#depErr").text(data.error.dep).fadeOut();
                            }

                            if (data.error.hasOwnProperty("doctor")){
                                $("#docErr").text(data.error.doctor).fadeIn();
                            }else{
                                $("#docErr").text(data.error.doctor).fadeOut();
                            }

                            if (data.error.hasOwnProperty("mobile")){
                                $("#phoneErr").text(data.error.mobile).fadeIn();
                            }else{
                                $("#phoneErr").text(data.error.mobile).fadeOut();
                            }
                            
                            if (data.error.hasOwnProperty("serial")){
                                $("#serialErr").text(data.error.serial).fadeIn();
                            }else{
                                $("#serialErr").text(data.error.serial).fadeOut();
                            } 

                            if (data.error.hasOwnProperty("status")){
                                $("#statusErr").text(data.error.status).fadeIn();
                            }else{
                                $("#statusErr").text(data.error.status).fadeOut();
                            }
                        }else{
                            $(".alert").fadeOut();
                        }

                        if (data.status == 1) {
                            $("#sucMsg").text(data.success).fadeIn();
                            $("#addApp")[0].reset();
                        }else{
                            $("#sucMsg").fadeOut();
                        }
                    }
                });
            });

            /* fetch single appointment */
            $("#upApp a").on('click', function(e) {
                let id = $(this).attr('data-id');
                
                $.ajax({
                    url: "{{ url('up-appointment') }}"+'/'+id,
                    method: 'get',
                    data: {id: id},
                    processData: false,
                    dataType: 'json',
                    contentType: false,
                    success: function(data) {
                        $("#editName").val(data.data[0].name);
                        $("#editMobile").val(data.data[0].phone);
                        $("#appDate2").val(data.data[0].date);
                        $("#serial-edit").val(data.data[0].serial);
                        $("#dep2").val(data.data[0].dep);
                        $("#doc2").val(data.data[0].doctor);
                        $("#status2").val(data.data[0].status);
                        $("#appID").val(data.data[0].app_id);
                    }
                });
            });

            $("#updateApp").on('submit', function(e) {
                e.preventDefault();

                $("#upBtn").text('Updating');
                $('#upBtn').prop('disabled', true)

                $.ajax({
                    url: "{{ url('up-appointment') }}",
                    method: 'post',
                    data: new FormData(this),
                    processData: false,
                    dataType: 'json',
                    contentType: false,
                    success: function(data) {
                        $("#upBtn").text('Update');
                        $('#upBtn').prop('disabled', false);

                        if (data.status == 0) {  
                            if (data.error.hasOwnProperty("name")){
                                $("#nameErr2").text(data.error.name).fadeIn();
                            }else{
                                $("#nameErr2").text(data.error.name).fadeOut();
                            }

                            if (data.error.hasOwnProperty("appDate")){
                                $("#dateErr2").text(data.error.appDate).fadeIn();
                            }else{
                                $("#dateErr2").text(data.error.appDate).fadeOut();
                            }

                            if (data.error.hasOwnProperty("dep")){
                                $("#depErr2").text(data.error.dep).fadeIn();
                            }else{
                                $("#depErr2").text(data.error.dep).fadeOut();
                            }

                            if (data.error.hasOwnProperty("doctor")){
                                $("#docErr2").text(data.error.doctor).fadeIn();
                            }else{
                                $("#docErr2").text(data.error.doctor).fadeOut();
                            }

                            if (data.error.hasOwnProperty("mobile")){
                                $("#phoneErr2").text(data.error.mobile).fadeIn();
                            }else{
                                $("#phoneErr2").text(data.error.mobile).fadeOut();
                            }
                            
                            if (data.error.hasOwnProperty("serial")){
                                $("#serialErr2").text(data.error.serial).fadeIn();
                            }else{
                                $("#serialErr2").text(data.error.serial).fadeOut();
                            } 

                            if (data.error.hasOwnProperty("status")){
                                $("#statusErr2").text(data.error.status).fadeIn();
                            }else{
                                $("#statusErr2").text(data.error.status).fadeOut();
                            }
                        }else{
                            $(".alert").fadeOut();
                        }

                        if (data.status == 1) {
                            $("#sucMsg2").text(data.success).fadeIn();
                        }else{
                            $("#sucMsg2").fadeOut();
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>