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
    <title>Add Patient - Hospital Manegment | DashLite Admin Template</title>
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
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Add Patient</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>Input new Patient information carefully.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <form action="{{ url('add-patient') }}" method="POST" class="card-inner-group">
                                            @csrf
                                            <div class="card-inner">
                                                <div class="nk-block-head">
                                                    <div class="nk-block-head-content">
                                                        <h5 class="title nk-block-title">Personal Info</h5>
                                                    </div>
                                                </div>
                                                <div class="nk-block">
                                                    <div class="row gy-4">
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="full-name">Full Name</label>
                                                                @error('name')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="name" id="full-name" placeholder="Full Name">
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Date of Birth</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right">
                                                                        <em class="icon ni ni-calendar"></em>
                                                                    </div>
                                                                    @error('dob')
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                    @enderror
                                                                    <input type="text" class="form-control date-picker" name="dob" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Gender</label>
                                                                <div class="form-control-wrap">
                                                                    @error('gender')
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                    @enderror
                                                                    <select class="form-select js-select2" name="gender" data-placeholder="Select Gender">
                                                                        <option value="">Select Gender</option>
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                        <option value="Other">Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="phone-no">Phone</label>
                                                                @error('phone')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                                <div class="form-control-wrap">
                                                                    <input type="number" class="form-control" name="phone" placeholder="Phone no">
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="email">Email</label>
                                                                @error('email')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                                <div class="form-control-wrap">
                                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">National ID</label>
                                                                @error('nid')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                                <div class="form-control-wrap">
                                                                    <div class="form-file">
                                                                        <input type="file" multiple name="nid" class="form-file-input" id="nid">
                                                                        <label class="form-file-label" for="nid">Choose file</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Adddress</label>
                                                                @error('address')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="address" id="address" placeholder="Address">
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                    </div><!--row-->
                                                </div>
                                            </div>
                                            <div class="card-inner">
                                                <div class="nk-block-head">
                                                    <div class="nk-block-head-content">
                                                        <h5 class="title nk-block-title">General Info</h5>
                                                    </div>
                                                </div>
                                                <div class="nk-block">
                                                    <div class="row gy-4">
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Blood Group</label>
                                                                @error('b_group')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" name="b_group" data-placeholder="Select Group">
                                                                        <option value="">Select</option>
                                                                        <option value="A+">A+</option>
                                                                        <option value="A-">A-</option>
                                                                        <option value="AB+">AB+</option>
                                                                        <option value="AB-">AB-</option>
                                                                        <option value="B+">B+</option>
                                                                        <option value="B-">B-</option>
                                                                        <option value="O+">O+</option>
                                                                        <option value="O-">O-</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Height</label>
                                                                @error('height')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                                <input type="text" class="form-control" name="height" id="height" placeholder="Height">
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Weight</label>
                                                                @error('width')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                                <input type="text" class="form-control" name="width" id="weight" placeholder="Weight">
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Blood Pressure</label>
                                                                @error('bp')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                                <input type="text" class="form-control" name="bp" id="bp" placeholder="Blood Pressure">
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Pulse</label>
                                                                @error('pulse')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                                <input type="text" class="form-control" name="pulse" id="pulse" placeholder="Pulse">
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Temperature</label>
                                                                @error('temp')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                                <input type="text" class="form-control" name="temp" id="temperature" placeholder="Temperature">
                                                            </div>
                                                        </div><!--col-->
                                                    </div><!--row-->
                                                </div>
                                            </div>
                                            <div class="card-inner">
                                                <div class="nk-block-head">
                                                    <div class="nk-block-head-content">
                                                        <h5 class="title nk-block-title">Medical Condition</h5>
                                                    </div>
                                                </div>
                                                <div class="nk-block">
                                                    <div class="row gy-4">
                                                        <div class="col-xxl-6 col-md-8">
                                                            <div class="form-group">
                                                                <label class="form-label">Symptoms Title</label>
                                                                @error('sym_title')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="sym_title" id="symptoms" placeholder="Symptoms">
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Symptoms Type</label>
                                                                @error('sym_type')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" name="sym_type" data-placeholder="Select Symptoms">
                                                                        <option value="">Select</option>
                                                                        <option value="General Symptoms">General Symptoms</option>
                                                                        <option value="Uncommon Symptoms">Uncommon Symptoms</option>
                                                                        <option value="Inherited Symptoms">Inherited Symptoms</option>
                                                                        <option value="Viral Symptoms">Viral Symptoms</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Casualty</label>
                                                                @error('casualty')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" name="casualty" data-placeholder="Select Casualty">
                                                                        <option value="">Select</option>
                                                                        <option value="Yes">Yes</option>
                                                                        <option value="No">No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Department</label>
                                                                @error('dep')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" name="dep" data-placeholder="Select Department">
                                                                        <option value="">Select</option>
                                                                        <option value="Allergy and immunology">Allergy and immunology</option>
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
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Consultant Doctor</label>
                                                                @error('doctor')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" name="doctor" data-placeholder="Select Doctor">
                                                                        <option value="">Select</option>
                                                                        <option value="Ernesto Vargas">Ernesto Vargas</option>
                                                                        <option value="Janet Snyder">Janet Snyder</option>
                                                                        <option value="Amelia Grant">Amelia Grant</option>
                                                                        <option value="Debra Grant">Debra Grant</option>
                                                                        <option value="Snyder Debra">Snyder Debra</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div><!-- .col -->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Patient Type</label>
                                                                @error('patient_type')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" name="patient_type" data-placeholder="Select Type">
                                                                        <option value="">Select</option>
                                                                        <option value="OPD Patient">OPD Patient</option>
                                                                        <option value="IPD Patient">IPD Patient</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Admit Date</label>
                                                                @error('ad_date')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right">
                                                                        <em class="icon ni ni-calendar"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control date-picker" name="ad_date" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Bed Group</label>
                                                                @error('bed_group')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" name="bed_group" data-placeholder="Select Bed Group">
                                                                        <option value="default_option">Select</option>
                                                                        <option value="Male Ward - 1st Floor">Male Ward - 1st Floor</option>
                                                                        <option value="Female Ward - 1st Floor">Female Ward - 1st Floor</option>
                                                                        <option value="Private Ward - 2nd Floor">Private Ward - 2nd Floor</option>
                                                                        <option value="Cabin - 4th Floor">Cabin - 4th Floor</option>
                                                                        <option value="ICU - 3rd Floor">ICU - 3rd Floor</option>
                                                                        <option value="NICU - 3rd Floor">NICU - 3rd Floor</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div><!-- .col -->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Bed Number</label>
                                                                @error('bed_number')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" name="bed_number" data-placeholder="Select Bed">
                                                                        <option value="">Select</option>
                                                                        <option value="101">101</option>
                                                                        <option value="102">102</option>
                                                                        <option value="103">103</option>
                                                                        <option value="105">105</option>
                                                                        <option value="201">201</option>
                                                                        <option value="202">202</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div><!-- .col -->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Test Report</label>
                                                                @error('report')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                                <div class="form-control-wrap">
                                                                    <div class="form-file">
                                                                        <input type="file" name="report" multiple class="form-file-input" id="testReport">
                                                                        <label class="form-file-label" for="testReport">Choose files</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Symptoms Description</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="quill-basic">
                                                                        <p>Please describe little bit!</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-primary">Add Patient</button>
                                                            </div>
                                                        </div><!--col-->
                                                    </div><!--row-->
                                                </div>
                                            </div>
                                        </form>
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
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
    
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=3.1.1"></script>
    <script src="./assets/js/scripts.js?ver=3.1.1"></script>
    <link rel="stylesheet" href="./assets/css/editors/quill.css?ver=3.1.1">
    <script src="./assets/js/libs/editors/quill.js?ver=3.1.1"></script>
    <script src="./assets/js/editors.js?ver=3.1.1"></script>
</body>

</html>