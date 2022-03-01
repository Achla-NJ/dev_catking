@extends('layout')
@section('title','Profile')

@section('css_plugin')
    <link href="{{asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
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
                <li class="breadcrumb-item active" aria-current="page">View</li>
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
                <div class="col-12 text-end mb-2">
                    <button class="btn btn-info text-white btn-sm shadow-sm">
                        <i class="bx bx-edit m-0"></i> Edit Profile
                    </button>
                </div>
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
                        <a class="nav-link " data-bs-toggle="tab" href="#profile_dreamCollages" role="tab" aria-selected="false">
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
                            <div class="row">
                                <div class="col-12 col-md-auto">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <img src="{{asset('assets/images/avatars/avatar-12.png')}}" alt="" class="profile-image">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md">
                                    <div class="card shadow-none">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="Jhon Doe" disabled>
                                                        <label for="floatingInput">Full Name</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="jhondoe@email.com" disabled>
                                                        <label for="floatingInput">Email</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="Yes" disabled>
                                                        <label for="floatingInput">CatKing Student</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="+911234567890" disabled>
                                                        <label for="floatingInput">Phone</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="+911234567890" disabled>
                                                        <label for="floatingInput">WhatsApp Phone</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="10th March 1994" disabled>
                                                        <label for="floatingInput">Date of Birth</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-floating ">
                                                        <textarea disabled style="resize:none;min-height:90px;" class="form-control" placeholder="Leave a comment here" id="floatingTextarea">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, ab!</textarea>
                                                        <label for="floatingTextarea">Address</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="bg-gradient-moonlit font-20 h5 mb-4 p-2 text-white">10th Std Details</div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Board</div>
                                                        <div class="stat-info-text px-2">Lorem ipsum dolor sit amet consectetuamet consectetu</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">School</div>
                                                        <div class="stat-info-text px-2">Lorem ipsum dolor sit amet consectetuamet consectetu</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Marks</div>
                                                        <div class="stat-info-text px-2">80%</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Passing Year</div>
                                                        <div class="stat-info-text px-2">2001</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="bg-gradient-moonlit font-20 h5 mb-4 p-2 text-white">12th Std Details</div>
                                        </div>
                                        <div class="col-12 ">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Board</div>
                                                        <div class="stat-info-text px-2">Lorem ipsum dolor sit amet consectetuamet consectetu</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">School</div>
                                                        <div class="stat-info-text px-2">Lorem ipsum dolor sit amet consectetuamet consectetu</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Marks</div>
                                                        <div class="stat-info-text px-2">80%</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Passing Year</div>
                                                        <div class="stat-info-text px-2">2001</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="bg-gradient-moonlit font-20 h5 mb-4 p-2 text-white">Graduation Details</div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Degree</div>
                                                        <div class="stat-info-text px-2">Lorem ipsum dolor sit amet consectetuamet consectetu</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Collage</div>
                                                        <div class="stat-info-text px-2">Lorem ipsum dolor sit amet consectetuamet consectetu</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Marks</div>
                                                        <div class="stat-info-text px-2">80%</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Passing Year</div>
                                                        <div class="stat-info-text px-2">2001</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="bg-gradient-moonlit font-20 h5 mb-4 p-2 text-white">Graduation Details</div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Degree</div>
                                                        <div class="stat-info-text px-2">Lorem ipsum dolor sit amet consectetuamet consectetu</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Collage</div>
                                                        <div class="stat-info-text px-2">Lorem ipsum dolor sit amet consectetuamet consectetu</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Marks</div>
                                                        <div class="stat-info-text px-2">80%</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Passing Year</div>
                                                        <div class="stat-info-text px-2">2001</div>
                                                    </div>
                                                </div>
                                            </div>
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
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="bg-gradient-moonlit font-20 h5 mb-4 p-2 text-white">ABC Company Name</div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Started on</div>
                                                        <div class="stat-info-text px-2">20 January 2010</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Ended On</div>
                                                        <div class="stat-info-text px-2">14 June 2012</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Job Role</div>
                                                        <div class="stat-info-text px-2">Lead Genrator & Tele Calling</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Worked For</div>
                                                        <div class="stat-info-text px-2">Full Time</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="bg-gradient-moonlit font-20 h5 mb-4 p-2 text-white">XYZ Company Name</div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Started on</div>
                                                        <div class="stat-info-text px-2">20 January 2010</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Ended On</div>
                                                        <div class="stat-info-text px-2">14 June 2012</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Job Role</div>
                                                        <div class="stat-info-text px-2">Lead Genrator & Tele Calling</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Worked For</div>
                                                        <div class="stat-info-text px-2">Part Time</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="bg-gradient-moonlit font-20 h5 mb-4 p-2 text-white">CAT Details</div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Took CAT</div>
                                                        <div class="stat-info-text px-2">Yes</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Percentile</div>
                                                        <div class="stat-info-text px-2">92</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Score</div>
                                                        <div class="stat-info-text px-2">111</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Score Card</div>
                                                        <div class="stat-info-text px-2 mx-auto">
                                                            <a href="#" class="btn btn-dark btn-sm"><i class="animated bx bx-bar-chart-square"></i> View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="bg-gradient-moonlit font-20 h5 mb-4 p-2 text-white">SNAP Details</div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Took SNAP</div>
                                                        <div class="stat-info-text px-2">Yes</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Percentile</div>
                                                        <div class="stat-info-text px-2">92</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Score</div>
                                                        <div class="stat-info-text px-2">111</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Score Card</div>
                                                        <div class="stat-info-text px-2 mx-auto">
                                                            <a href="#" class="btn btn-dark btn-sm"><i class="animated bx bx-bar-chart-square"></i> View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="bg-gradient-moonlit font-20 h5 mb-4 p-2 text-white">NMAT Details</div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Took NMAT</div>
                                                        <div class="stat-info-text px-2">Yes</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Percentile</div>
                                                        <div class="stat-info-text px-2">92</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Score</div>
                                                        <div class="stat-info-text px-2">111</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex stat-badge">
                                                        <div class="stat-title">Score Card</div>
                                                        <div class="stat-info-text px-2 mx-auto">
                                                            <a href="#" class="btn btn-dark btn-sm"><i class="animated bx bx-bar-chart-square"></i> View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                            <div class="row">
                                <div class="col-12">
                                    <div class="row align-items-center mb-3">
                                        <div class="col-12 col-md">
                                            <div class="bg-gradient-moonlit font-20 h5 mb-4 mb-md-0 p-2 text-white">ABC Collage Name</div>
                                        </div>
                                        <div class="col-12 col-md">
                                            <div class="d-flex stat-badge">
                                                <div class="stat-title">SOP</div>
                                                <div class="stat-info-text px-2 mx-auto">
                                                    <a href="#" class="btn btn-dark btn-sm"><i class="animated bx bx-bar-chart-square"></i> View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-3">
                                        <div class="col-12 col-md">
                                            <div class="bg-gradient-moonlit font-20 h5 mb-4 mb-md-0 p-2 text-white">XYZ Collage Name</div>
                                        </div>
                                        <div class="col-12 col-md">
                                            <div class="d-flex stat-badge">
                                                <div class="stat-title">SOP</div>
                                                <div class="stat-info-text px-2 mx-auto">
                                                    <a href="#" class="btn btn-dark btn-sm"><i class="animated bx bx-bar-chart-square"></i> View</a>
                                                </div>
                                            </div>
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
                                <div class="col-12">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-12">
                                            <div class="bg-gradient-moonlit font-20 h5 mb-4 p-2 text-white">Dream Collages</div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row row-cols-2 row-cols-lg-3 justify-content-evenly">
                                                <div class="col mb-2">
                                                    <div class="stat-badge">
                                                        <div class="stat-title">
                                                            abc collage
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="stat-badge">
                                                        <div class="stat-title">
                                                            abc collage
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="stat-badge">
                                                        <div class="stat-title">
                                                            abc collage
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="stat-badge">
                                                        <div class="stat-title">
                                                            abc collage
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="stat-badge">
                                                        <div class="stat-title">
                                                            abc collage
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-2">
                                        <div class="col-12">
                                            <div class="bg-gradient-moonlit font-20 h5 mb-4 p-2 text-white">Calls Received</div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row row-cols-2 row-cols-lg-3 justify-content-evenly">
                                                <div class="col mb-2">
                                                    <div class="stat-badge">
                                                        <div class="stat-title">
                                                            abc collage
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="stat-badge">
                                                        <div class="stat-title">
                                                            abc collage
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="stat-badge">
                                                        <div class="stat-title">
                                                            abc collage
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="stat-badge">
                                                        <div class="stat-title">
                                                            abc collage
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="stat-badge">
                                                        <div class="stat-title">
                                                            abc collage
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                            <div class="row row-cols-2 row-cols-lg-3 justify-content-evenly">
                                                <div class="col mb-2">
                                                    <div class="stat-badge">
                                                        <div class="stat-title">
                                                            abc collage
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="stat-badge">
                                                        <div class="stat-title">
                                                            abc collage
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="stat-badge">
                                                        <div class="stat-title">
                                                            abc collage
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
@endsection