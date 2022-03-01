@extends('layout')
@section('title','Profile')

@section('css_plugin')
    <link href="{{asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
@endsection

@section('page_css')
    <link rel="stylesheet" href="{{asset('assets/css/profile.css')}}">
@endsection

@section('breadcrumb')
<div class="page-breadcrumb d-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Profile</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
    </div>
    
</div>
@endsection
@section('main_content')

<div class="row profile">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-pills nav-fill nav-primary" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#profile_besic" role="tab" aria-selected="true">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class='bx bx-user-pin font-18 me-1'></i>
                                </div>
                                <div class="tab-title">Personal Info</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile_stats" role="tab" aria-selected="false">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class='bx bx-copy-alt font-18 me-1'></i>
                                </div>
                                <div class="tab-title">Education</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile_work" role="tab" aria-selected="false">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class='bx bx-buildings font-18 me-1'></i>
                                </div>
                                <div class="tab-title">Work Experience</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile_exams" role="tab" aria-selected="false">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class='bx bx-book-reader font-18 me-1'></i>
                                </div>
                                <div class="tab-title">Exams Scores</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile_sop" role="tab" aria-selected="false">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class='bx bx-envelope font-18 me-1'></i>
                                </div>
                                <div class="tab-title">SOPs</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link " id="dream_link" data-bs-toggle="tab" href="#profile_dreamCollages" role="tab" aria-selected="false">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class='bx bx-customize font-18 me-1'></i>
                                </div>
                                <div class="tab-title">Dream Collages & Call Details</div>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="px-2 py-3 shadow-sm tab-content">
                    <div class="tab-pane fade show active" id="profile_besic" role="tabpanel">
                        <div class="col-12">
                            <div class="border-2 border-bottom border-dark d-inline-block h4 mb-4 pb-2 pe-5">Basic Informations</div>
                        </div>
                        <div class="col-lg-10 mx-auto">
                            <form class="row">
                                <div class="col-12 text-center mb-4">
                                    <img src="assets/images/avatars/avatar-2.png" alt="" class="radius-15 border border-4 border-top-0 avatar-img">
                                    
                                </div>
                                <div class="col-md-6">
                                   <div class="mb-3">
                                       <label for="name" class="form-label">Full Name</label>
                                       <input type="text" name="name" id="name" class="form-control" value="Jhon Doe">
                                   </div>
                                   <div class="mb-3">
                                       <label for="email" class="form-label">Email Address</label>
                                       <input type="email" name="email" id="email" class="form-control" value="johndoe@email.com" disabled>
                                   </div>
                                   <div class="mb-3">
                                       <label for="phone" class="form-label">Phone</label>
                                       <input type="phone" name="phone" id="phone" class="form-control" value="+911234567890" disabled>
                                   </div>
                                   <div class="mb-3">
                                        <label for="avatar" class="form-label">Profile Image</label>
                                        <input type="file" name="avatar" id="avatar" class="av form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                       <label for="w-phone" class="form-label">WhatsApp Phone</label>
                                       <input type="phone" name="w-phone" id="w-phone" class="form-control" value="+911234567890">
                                   </div>
                                    <div class="mb-3">
                                       <label for="student" class="form-label">CatKing Student</label>
                                       <select name="student" id="student" class="form-select">
                                           <option value="1">Yes</option>
                                           <option value="0">No</option>
                                       </select>
                                   </div>
                                   <div class="mb-3">
                                       <label for="dob" class="form-label">Date of Birth</label>
                                       <input type="date" name="dob" id="dob" class="form-control">
                                   </div>
                                   <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" name="address" id="address" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary"><i class="bx bx-cloud-upload"></i> Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile_stats" role="tabpanel">
                        <div class="col-12">
                            <div class="border-2 border-bottom border-dark d-inline-block h4 mb-4 pb-2 pe-5">
                                Educational Informations
                            </div>
                        </div>
                        <div class="col-lg-10 mx-auto">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row align-items-center ">
                                        <div class="col-12 col-md mb-4">
                                            <div class="bg-gradient-moonlit font-20 h5  p-2 text-white mb-0">10th Std Details</div>
                                        </div>
                                        <div class="col-12 col-md-auto mb-4">
                                            <button class="btn btn-danger"><i class="bx bx-x"></i>Remove</button>
                                        </div>
                                        <div class="col-12">
                                            <form action="#" class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Board</label>
                                                        <input type="text" name="board" id="board" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">School</label>
                                                        <input type="text" name="school" id="school" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Marks</label>
                                                        <input type="text" name="marks" id="marks" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Passing Year</label>
                                                        <input type="text" name="pass_year" id="pass_year" class="form-control">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row align-items-center ">
                                        <div class="col-12 mb-4">
                                            <div class="bg-gradient-moonlit font-20 h5  p-2 text-white mb-0">12th Std Details</div>
                                        </div>
                                        <div class="col-12">
                                            <form action="#" class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Board</label>
                                                        <input type="text" name="board" id="board" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">School</label>
                                                        <input type="text" name="school" id="school" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Marks</label>
                                                        <input type="text" name="marks" id="marks" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Passing Year</label>
                                                        <input type="text" name="pass_year" id="pass_year" class="form-control">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row align-items-center ">
                                        <div class="col-12 mb-4">
                                            <div class="bg-gradient-moonlit font-20 h5  p-2 text-white mb-0">Graduation Details</div>
                                        </div>
                                        <div class="col-12">
                                            <form action="#" class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Degree</label>
                                                        <input type="text" name="board" id="board" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Collage</label>
                                                        <input type="text" name="school" id="school" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Marks</label>
                                                        <input type="text" name="marks" id="marks" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Passing Year</label>
                                                        <input type="text" name="pass_year" id="pass_year" class="form-control">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#edu-model"><i class="bx bx-add-to-queue"></i>Add More</button>
                                    <button class="btn btn-primary"><i class="bx bx-cloud-upload"></i> Save</button>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="edu-model" tabindex="-1" aria-labelledby="edu-model" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="edu-model">Please Select</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <select name="" id="edu-select" class="form-select mb-3">
                                                <option value="matric">10th Standard</option>
                                                <option value="high_study">12th Standard</option>
                                                <option value="graduation">Graduation</option>
                                            </select>
                                            <button class="btn-primary btn">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile_work" role="tabpanel">
                        <div class="col-12">
                            <div class="border-2 border-bottom border-dark d-inline-block h4 mb-4 pb-2 pe-5">
                                Work Experience
                            </div>
                        </div>
                        <div class="col-lg-10 mx-auto">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <button class="d-block w-auto ms-auto btn btn-danger btn-sm"><i class="bx bx-x"></i>Remove</button>
                                            <form class="row">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Company Name</label>
                                                        <input type="text" name="company_name" id="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Job Role</label>
                                                        <input type="text" name="job_role" id="" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Worked For</label>
                                                        <select name="job_type" id="" class="form-select">
                                                            <option value="fulltime">Full Time</option>
                                                            <option value="parttime">Part Time</option>
                                                        </select>
                                                    </div>
                                                </div>	
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Job Started</label>
                                                        <input type="date" name="job_start" id="" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Job End</label>
                                                        <div class="row align-items-center">
                                                            <div class="col-12 col-md-auto">
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input" type="checkbox" role="switch" id="work_present">
                                                                    <label class="form-check-label" for="work_present">Working Presently ?</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md">
                                                                <input type="date" name="job_end" id="" class="form-control">
                                                            </div>
                                                        </div>																		
                                                    </div>
                                                </div>														
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-dark"><i class="bx bx-add-to-queue"></i>Add More</button>
                                    <button class="btn btn-primary"><i class="bx bx-cloud-upload"></i> Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile_exams" role="tabpanel">
                        <div class="col-12">
                            <div class="border-2 border-bottom border-dark d-inline-block h4 mb-4 pb-2 pe-5">
                                Exams Details
                            </div>
                        </div>
                        <div class="col-lg-10 mx-auto">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row align-items-center ">
                                        <div class="col-12 col-md mb-4">
                                            <div class="bg-gradient-moonlit font-20 h5  p-2 text-white mb-0">CAT Details</div>
                                        </div>
                                        <div class="col-12 col-md-auto mb-4">
                                            <button class="btn btn-danger"><i class="bx bx-x"></i>Remove</button>
                                        </div>
                                        <div class="col-12">
                                            <form action="#" class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Took CAT</label>
                                                        <select name="cat_auth" id="" class="form-select">
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Percentile</label>
                                                        <input type="text" name="cat_percentile" id="cat_percentile" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Scores</label>
                                                        <input type="text" name="cat_scores" id="cat_scores" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Score Card</label>
                                                        <input type="file" name="cat_sc_card" id="cat_sc_card" class="form-control">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#edu-scores"><i class="bx bx-add-to-queue"></i>Add More</button>
                                    <button class="btn btn-primary"><i class="bx bx-cloud-upload"></i> Save</button>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="edu-scores" tabindex="-1" aria-labelledby="edu-scores" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="edu-model">Please Select</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <select name="" id="edu-select" class="form-select mb-3">
                                                <option value="matric">CAT Scores</option>
                                                <option value="high_study">NMAT Scores</option>
                                            </select>
                                            <button class="btn-primary btn">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile_sop" role="tabpanel">
                        <div class="col-12">
                            <div class="border-2 border-bottom border-dark d-inline-block h4 mb-4 pb-2 pe-5">
                                SOPs Details
                            </div>
                        </div>
                        <div class="col-lg-10 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                <button class="d-block w-auto ms-auto btn btn-danger btn-sm"><i class="bx bx-x"></i>Remove</button>
                                    <form class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Collage Name</label>
                                                <input type="text" name="collage_name" id="" disabled value="XYZ Collage" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Upload SOP</label>
                                                <input type="file" name="sop" id="" class="form-control">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#sops"><i class="bx bx-add-to-queue"></i>Add More</button>
                                    <button class="btn btn-primary"><i class="bx bx-cloud-upload"></i> Save</button>
                                </div>
                            </div>
                            <!-- model -->
                            <div class="modal fade" id="sops" tabindex="-1" aria-labelledby="sops" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="edu-model">Please Select</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <select name="" id="edu-select" class="form-select mb-3">
                                                <option value="matric">X Collage</option>
                                                <option value="high_study">Y Collage</option>
                                            </select>
                                            <button class="btn-primary btn">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile_dreamCollages" role="tabpanel">
                        <div class="col-12">
                            <div class="border-2 border-bottom border-dark d-inline-block h4 mb-4 pb-2 pe-5">
                                Dream Collages
                            </div>
                        </div>
                        <div class="col-lg-10 mx-auto">
                            
                            <div class="row">
                                <form class="col-12">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-12">
                                            <div class="bg-gradient-moonlit font-20 h5 mb-4 p-2 text-white">Dream Collages</div>
                                        </div>
                                        <div class="col-12">
                                            <select name="dream_collages" id="dreamCo" class="multiple-select form-control"  multiple="multiple">
                                                <option value="a" selected>A Collage</option>
                                                <option value="a">A Collage</option>
                                                <option value="a">A Collage</option>
                                                <option value="a">A Collage</option>
                                                <option value="a">A Collage</option>
                                                <option value="a">A Collage</option>
                                                <option value="a">A Collage</option>
                                                <option value="a">A Collage</option>
                                                <option value="a">A Collage</option>
                                                <option value="a">A Collage</option>
                                                <option value="a">A Collage</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-2">
                                        <div class="col-12">
                                            <div class="bg-gradient-moonlit font-20 h5 mb-4 p-2 text-white">Calls Received</div>
                                        </div>
                                        <div class="col-12">
                                            <select name="calls_received" id="calls_received" class="multiple-select form-control"  multiple="multiple">
                                                <option value="a" selected>A Collage</option>
                                                <option value="a">A Collage</option>
                                                <option value="a">A Collage</option>
                                                <option value="a">A Collage</option>
                                                <option value="a">A Collage</option>
                                                <option value="a">A Collage</option>
                                                <option value="a">A Collage</option>
                                                <option value="a">A Collage</option>
                                                <option value="a">A Collage</option>
                                                <option value="a">A Collage</option>
                                                <option value="a">A Collage</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="bg-gradient-moonlit font-20 h5 mb-4 p-2 text-white">Interview Dates</div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">XYZ collage</div>
                                                        <div class="stat-info-text px-2">10 January 2020</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">ABC Collage</div>
                                                        <div class="stat-info-text px-2">15 June 2020</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">XYZ collage</div>
                                                        <div class="stat-info-text px-2">10 January 2020</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">ABC Collage</div>
                                                        <div class="stat-info-text px-2">15 June 2020</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-2">
                                        <div class="col-12">
                                            <div class="bg-gradient-moonlit font-20 h5 mb-4 p-2 text-white">Converted Calls</div>
                                        </div>
                                        <div class="col-12">
                                            <select name="calls_converted" id="calls_converted" class="multiple-select form-control"  multiple="multiple">
                                                <option value="a" selected>A Collage</option>
                                                <option value="a">A Collage</option>
                                                <option value="a">A Collage</option>
                                                <option value="a">A Collage</option>
                                                <option value="a">A Collage</option>
                                                <option value="a">A Collage</option>
                                                <option value="a">A Collage</option>
                                                <option value="a">A Collage</option>
                                                <option value="a">A Collage</option>
                                                <option value="a">A Collage</option>
                                                <option value="a">A Collage</option>
                                            </select>
                                        </div>
                                    </div>													
                                </form>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-primary"><i class="bx bx-cloud-upload"></i> Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js_plugin')
<script src="{{asset('assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
@endsection

@section('script')
    <script>
        $('a#dream_link').click(()=>{
            setTimeout(() => {
                $('.multiple-select').select2();
            }, 500);
        });
        $(`input[role="switch"]`).click(function(){
            let input = $(`input[name="job_end"]`);
            input.hasClass('disabled')	? input.removeClass('disabled').removeAttr('disabled') : input.addClass('disabled').attr({disabled:'disabled',value:''});
        });
    </script>
@endsection