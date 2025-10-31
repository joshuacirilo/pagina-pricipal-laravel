<?php $page = 'add-course'; ?>
@extends('layout.mainlayout')
@section('content')
 
    @component('components.breadcrumb')
        @slot('title')
            Add New Course
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Add New Course
        @endslot
    @endcomponent


    <!-- Course add -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="add-course-item">
                        <div class="wizard">
                            <ul class="form-wizard-steps" id="progressbar2">
                                <li class="progress-active">
                                    <div class="profile-step">
                                        <span class="dot-active mb-2">
                                            <span class="number">01</span>
                                            <span class="tickmark"><i class="fa-solid fa-check"></i></span>
                                        </span>
                                        <div class="step-section">
                                            <p>Course Information</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="profile-step">
                                        <span class="dot-active mb-2">
                                            <span class="number">02</span>
                                            <span class="tickmark"><i class="fa-solid fa-check"></i></span>
                                        </span>
                                        <div class="step-section">
                                            <p>Course Media</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="profile-step">
                                        <span class="dot-active mb-2">
                                            <span class="number">03</span>
                                            <span class="tickmark"><i class="fa-solid fa-check"></i></span>
                                        </span>
                                        <div class="step-section">
                                            <p>Curriculam</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="profile-step">
                                        <span class="dot-active mb-2">
                                            <span class="number">04</span>
                                            <span class="tickmark"><i class="fa-solid fa-check"></i></span>
                                        </span>
                                        <div class="step-section">
                                            <p>Additional information</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="profile-step">
                                        <span class="dot-active mb-2">
                                            <span class="number">05</span>
                                            <span class="tickmark"><i class="fa-solid fa-check"></i></span>
                                        </span>
                                        <div class="step-section">
                                            <p>Pricing</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="initialization-form-set">
                            <fieldset class="form-inner wizard-form-card" id="first">
                                <div class="title">
                                    <h5>Basic Information</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-block">
                                            <label class="form-label">Course Title<span class="text-danger ms-1">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-block">
                                            <label class="form-label">Course Category<span class="text-danger ms-1">*</span></label>
                                            <select class="select form-control">
                                                <option>Select</option>
                                                <option>Management</option>
                                                <option>IT & Softwares</option>
                                                <option>Marketing</option>
                                                <option>Finance</option>
                                                <option>Productivity</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-block">
                                            <label class="form-label">Course Level<span class="text-danger ms-1">*</span></label>
                                            <select class="select form-control">
                                                <option>Select</option>
                                                <option>Beginner </option>
                                                <option>Intermediate</option>
                                                <option>Advanced</option>
                                                <option>Expert</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-block">
                                            <label class="form-label">Language<span class="text-danger ms-1">*</span></label>
                                            <select class="select form-control">
                                                <option>Select</option>
                                                <option>French </option>
                                                <option>German</option>
                                                <option>Arabic</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block">
                                            <label class="form-label">Max Number of Students<span class="text-danger ms-1">*</span></label>
                                            <input type="text" class="form-control student-count">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block">
                                            <label class="form-label">Public / Private Course<span class="text-danger ms-1">*</span></label>
                                            <select class="select form-control">
                                                <option>Select</option>
                                                <option>Private </option>
                                                <option>Public</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-block">
                                            <label class="form-label">Short Description<span class="text-danger ms-1">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-block">
                                            <label class="form-label">Course  Description<span class="text-danger ms-1">*</span></label>
                                            <div class="summernote"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bg-light border p-4 rounded-3">
                                            <h6 class="mb-2">What will students learn in your course?</h6>
                                            <div class="input-block" id="input-block">
                                                <div class="d-flex align-items-center add-new-input">
                                                <input type="text" class="form-control" value="Become a UX designer">
                                                <a href="javascript:void(0);" class="link-trash"><i class="isax isax-trash"></i></a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-end">
                                                <a href="javascript:void(0);" class="d-flex align-items-center add-new-topic" id="add-new-topic-btn">
                                                <i class="isax isax-add me-1"></i> Add New Item
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bg-light border	 p-4 rounded-3">
                                            <h6 class="mb-2">Requirements</h6>
                                            <div class="input-block">
                                                <div class="d-flex align-items-center add-new-input">
                                                <input type="text" class="form-control">
                                                <a href="javascript:void(0);" class="link-trash"><i class="isax isax-trash"></i></a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-end">
                                                <a href="javascript:void(0);" class="d-flex align-items-center add-new-topic">
                                                <i class="isax isax-add me-1"></i> Add New Item
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check form-switch form-check-md mb-0 mt-3">
                                            <input class="form-check-input form-checked-success" type="checkbox" id="checkFeature" checked="">
                                            <label class="form-check-label" for="checkFeature">Check this for featured course</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="add-form-btn widget-next-btn submit-btn d-flex justify-content-end mb-0">
                                    <div class="btn-left">
                                        <a href="javascript:void(0);" class="btn main-btn next_btns">Next <i class="isax isax-arrow-right-3 ms-1"></i></a>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="form-inner wizard-form-card">
                                <div class="title">
                                    <h5>Course Media</h5>
                                    <p>Intro Course overview provider type. (.mp4, YouTube, Vimeo etc.)</p>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-block">
                                            <div class="row align-items-center">
                                                <div class="col-md-12">
                                                    <label class="form-label">Course Thumbnail<span class="text-danger ms-1">*</span></label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" placeholder="No File Selected">
                                                </div>
                                                <div class="col-md-2 d-grid">
                                                    <label for="file-upload" class="file-upload-btn text-center">Upload File</label>
                                                    <input type="file" id="file-upload" name="file">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="upload-img-section d-flex align-items-center justify-content-center" id="upload-img-section">
                                            <input type="file" id="upload-img-input" style="display: none;" accept="image/jpeg, image/png, image/gif, image/webp">
                                            <div class="upload-content">
                                                <span class="d-flex align-items-center justify-content-center mb-1">
                                                <i class="isax isax-image5 text-secondary fs-24 text-center"></i>
                                                </span>
                                                <p class="text-center fw-medium mb-1">Upload Image</p>
                                                <span class="text-center">JPEG, PNG, GIF, and WebP formats, up to 2 MB</span>
                                            </div>
                                        </div>
                                        <hr/ class="mt-4 mb-4">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="input-block-link">
                                                    <label class="form-label">Course Video<span class="text-danger ms-1">*</span></label>
                                                    <select class="select">
                                                        <option>External URL</option>
                                                        <option>Youtube</option>
                                                        <option>External</option>
                                                        <option>Vimeo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="input-block-link">
                                                    <label class="form-label">&nbsp;</label>
                                                    <input type="text" class="form-control" placeholder="External URL Link">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="position-relative">
                                            <a href="https://www.youtube.com/embed/1trvO6dqQUI" id="openVideoBtn" target="_blank">
                                                <img class="img-fluid rounded" src="./build/img/course/add-course-1.jpg" alt="img">
                                                <div class="play-icon">
                                                    <i class="fa-solid fa-play"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="videoModal">
                                            <div class="modal-content1">
                                                <span class="close-btn" id="closeModal">&times;</span>
                                                <iframe id="youtubeIframe" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-form-btn widget-next-btn submit-btn">
                                    <div class="btn-left">
                                        <a href="javascript:void(0);" class="btn btn-light main-btn prev_btns d-flex align-items-center"><i class="isax isax-arrow-left-2 me-1"></i>Prev</a>
                                    </div>
                                    <div class="btn-left">
                                        <a href="javascript:void(0);" class="btn btn-secondary main-btn next_btns d-flex align-items-center">Next <i class="isax isax-arrow-right-3 ms-1"></i></a>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="form-inner wizard-form-card">
                                <div class="title">
                                    <div class="row align-items-center row-gap-2">
                                        <div class="col-md-6">
                                            <h5 class="mb-0">Curriculum</h5>
                                        </div>
                                        <div class="col-md-6 text-md-end">
                                            <a href="javascript:void(0);" class="btn add-edit-btn d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add-topic"><i class="isax isax-add-circle5 me-1"></i> Add New Topic</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="accordions-items-seperate" id="accordionSpacingExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSpacingOne">
                                                <a href="javascript:void(0);" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#SpacingOne" aria-expanded="false" aria-controls="SpacingOne">
                                                    <span class="d-flex align-items-center mb-0"><i class="isax isax-menu-15 me-2"></i>Introduction of Digital Marketing</span>
                                                </a>
                                            </h2>
                                            <div id="SpacingOne" class="accordion-collapse collapse show" aria-labelledby="headingSpacingOne" data-bs-parent="#accordionSpacingExample">
                                                <div class="accordion-body">
                                                    <div class="d-flex align-items-center justify-content-between bg-white p-2 border rounded-3 mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <span><i class="isax isax-play-circle5 text-success fs-24 me-1"></i></span>
                                                            <p class="fw-medium text-gray-5 mb-0">Describe SEO Engine</p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" class="edit-btn1"><i class="isax isax-edit-25 fs-16"></i></a>
                                                            <a href="javascript:void(0);" class="delete-btn1"><i class="isax isax-trash fs-16"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between bg-white p-2 border rounded-3 mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <span><i class="isax isax-play-circle5 text-success fs-24 me-1"></i></span>
                                                            <p class="fw-medium text-gray-5 mb-0">Know about all marketing</p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" class="edit-btn1"><i class="isax isax-edit-25 fs-16"></i></a>
                                                            <a href="javascript:void(0);" class="delete-btn1"><i class="isax isax-trash fs-16"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" class="btn add-edit-btn d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add-lesson"><i class="isax isax-add-circle5 me-2"></i>Add Lesson</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSpacingTwo">
                                                <a href="javascript:void(0);" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#SpacingTwo" aria-expanded="false" aria-controls="SpacingTwo">
                                                        <span class="d-flex align-items-center mb-0">
                                                            <i class="isax isax-menu-15 me-2"></i>
                                                            Installing Development Software
                                                        </span>
                                                </a>
                                            </h2>
                                            <div id="SpacingTwo" class="accordion-collapse collapse" aria-labelledby="headingSpacingTwo" data-bs-parent="#accordionSpacingExample">
                                                <div class="accordion-body">
                                                    <div class="d-flex align-items-center justify-content-between bg-white p-2 border rounded-3 mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <span><i class="isax isax-play-circle5 text-success fs-24 me-1"></i></span>
                                                            <p class="fw-medium text-gray-5 mb-0">Describe SEO Engine</p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" class="edit-btn1"><i class="isax isax-edit-25 fs-16"></i></a>
                                                            <a href="javascript:void(0);" class="delete-btn1"><i class="isax isax-trash fs-16"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between bg-white p-2 border rounded-3 mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <span><i class="isax isax-play-circle5 text-success fs-24 me-1"></i></span>
                                                            <p class="fw-medium text-gray-5 mb-0">Know about all marketing</p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" class="edit-btn1"><i class="isax isax-edit-25 fs-16"></i></a>
                                                            <a href="javascript:void(0);" class="delete-btn1"><i class="isax isax-trash fs-16"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" class="btn btn-primary d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add-lesson"><i class="isax isax-add-circle5 me-2"></i>Add Lesson</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSpacingThree">
                                                <a href="javascript:void(0);" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#SpacingThree" aria-expanded="false" aria-controls="SpacingThree">
                                                    <span class="d-flex align-items-center mb-0">
                                                        <i class="isax isax-menu-15 me-2"></i>
                                                        Hello World Project from GitHub
                                                    </span>
                                                </a>
                                            </h2>
                                            <div id="SpacingThree" class="accordion-collapse collapse" aria-labelledby="headingSpacingThree" data-bs-parent="#accordionSpacingExample">
                                                <div class="accordion-body">
                                                    <div class="d-flex align-items-center justify-content-between bg-white p-2 border rounded-3 mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <span><i class="isax isax-play-circle5 text-success fs-24 me-1"></i></span>
                                                            <p class="fw-medium text-gray-5 mb-0">Describe SEO Engine</p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" class="edit-btn1"><i class="isax isax-edit-25 fs-16"></i></a>
                                                            <a href="javascript:void(0);" class="delete-btn1"><i class="isax isax-trash fs-16"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between bg-white p-2 border rounded-3 mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <span><i class="isax isax-play-circle5 text-success fs-24 me-1"></i></span>
                                                            <p class="fw-medium text-gray-5 mb-0">Know about all marketing</p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" class="edit-btn1"><i class="isax isax-edit-25 fs-16"></i></a>
                                                            <a href="javascript:void(0);" class="delete-btn1"><i class="isax isax-trash fs-16"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" class="btn btn-primary d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add-lesson"><i class="isax isax-add-circle5 me-2"></i>Add Lesson</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-form-btn widget-next-btn submit-btn">
                                    <div class="btn-left">
                                        <a href="javascript:void(0);" class="btn btn-light main-btn prev_btns"><i class="isax isax-arrow-left-2 me-1"></i>Prev</a>
                                    </div>
                                    <div class="btn-left">
                                        <a href="javascript:void(0);" class="btn btn-secondary main-btn next_btns">Next <i class="isax isax-arrow-right-3 ms-1"></i></a>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="form-inner wizard-form-card">
                                <div class="title">
                                    <div class="row align-items-center row-gap-3">
                                        <div class="col-md-9">
                                            <h5 class="mb-0">FAQ’s</h5>
                                        </div>
                                        <div class="col-md-3 text-end">
                                            <a href="javascript:void(0);" class="btn add-edit-btn d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add-faq"><i class="isax isax-add-circle5 me-1"></i> Add New</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pb-3 border-bottom mb-3">
                                    <div class="accordions-items-seperate" id="accordionSpacingExample1">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSpacingFour">
                                                <a href="javascript:void(0);" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#Spacingthree" aria-expanded="false" aria-controls="Spacingthree">
                                                    <span class="d-flex align-items-center text-gray-9 mb-0">
                                                        <i class="isax isax-menu-15 me-2"></i>
                                                        Hello World Project from GitHub
                                                    </span>
                                                </a>
                                            </h2>
                                            <div id="Spacingthree" class="accordion-collapse collapse" aria-labelledby="headingSpacingFour" data-bs-parent="#accordionSpacingExample1">
                                                <div class="accordion-body">
                                                    <div class="d-flex align-items-center justify-content-between bg-white p-2 border rounded-3 mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <span><i class="isax isax-play-circle5 text-success fs-24 me-1"></i></span>
                                                            <p class="fw-medium text-gray-5 mb-0">Describe SEO Engine</p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" class="edit-btn1"><i class="isax isax-edit-25 fs-16"></i></a>
                                                            <a href="javascript:void(0);" class="delete-btn1"><i class="isax isax-trash fs-16"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between bg-white p-2 border rounded-3 mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <span><i class="isax isax-play-circle5 text-success fs-24 me-1"></i></span>
                                                            <p class="fw-medium text-gray-5 mb-0">Know about all marketing</p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" class="edit-btn1"><i class="isax isax-edit-25 fs-16"></i></a>
                                                            <a href="javascript:void(0);" class="delete-btn1"><i class="isax isax-trash fs-16"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSpacingFive">
                                                <a href="javascript:void(0);" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#Spacingone" aria-expanded="false" aria-controls="Spacingone">
                                                    <span class="d-flex align-items-center text-gray-9">
                                                        <i class="isax isax-menu-15 me-2"></i>
                                                        New Update
                                                    </span>
                                                </a>
                                            </h2>
                                            <div id="Spacingone" class="accordion-collapse collapse" aria-labelledby="headingSpacingFive" data-bs-parent="#accordionSpacingExample">
                                                <div class="accordion-body">
                                                    <div class="d-flex align-items-center justify-content-between bg-white p-2 border rounded-3 mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <span><i class="isax isax-play-circle5 text-success fs-24 me-1"></i></span>
                                                            <p class="fw-medium text-gray-5 mb-0">Describe SEO Engine</p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" class="edit-btn1"><i class="isax isax-edit-25 fs-16"></i></a>
                                                            <a href="javascript:void(0);" class="delete-btn1"><i class="isax isax-trash fs-16"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between bg-white p-2 border rounded-3 mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <span><i class="isax isax-play-circle5 text-success fs-24 me-1"></i></span>
                                                            <p class="fw-medium text-gray-5 mb-0">Know about all marketing</p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" class="edit-btn1"><i class="isax isax-edit-25 fs-16"></i></a>
                                                            <a href="javascript:void(0);" class="delete-btn1"><i class="isax isax-trash fs-16"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pb-3 border-bottom mb-3">
                                    <div class="input-block mb-0">
                                        <label class="form-label">Tags</label>
                                        <input class="input-tags form-control" id="inputBox" type="text" data-role="tagsinput"  name="specialist" value="red, black">
                                        <span class="fs-13 text-gray-6 mt-1 d-block">Maximum of 14 keywords. Keywords should all be in lowercase. e.g. javascript, react, marketing</span>
                                    </div>
                                </div>
                                <div class="input-block">
                                    <label class="form-label">Message to a reviewer</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="form-check form-check-md d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label ms-2" for="flexCheckChecked">
                                            Any images, sounds, or other assets that are not my own work, have been appropriately licensed for use in the file preview or main course. Other than these items, this work is entirely my own and I have full rights to sell it here.
                                        </label>
                                        </div>
                                </div>
                                <div class="add-form-btn widget-next-btn submit-btn">
                                    <div class="btn-left">
                                        <a href="javascript:void(0);" class="btn btn-light main-btn prev_btns"><i class="isax isax-arrow-left-2 me-1"></i>Prev</a>
                                    </div>
                                    <div class="btn-left">
                                        <a href="javascript:void(0);" class="btn btn-secondary main-btn next_btns">Next <i class="isax isax-arrow-right-3 ms-1"></i></a>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="form-inner wizard-form-card">
                                <div>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="form-check form-check-md d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1" checked>
                                            <label class="form-check-label ms-2" for="flexCheckChecked1">
                                                Check if this is a free course
                                            </label>
                                            </div>
                                    </div>
                                    <div class="input-block mb-2">
                                        <label class="form-label">Course Price ($)</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="form-check form-check-md d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
                                            <label class="form-check-label ms-2" for="flexCheckChecked2">
                                                Check if this course has discount
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-block">
                                        <label class="form-label">Discount Price ($)</label>
                                        <input type="text" class="form-control mb-1">
                                        <span>This course has 0% Discount</span>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label mb-1">Expiry Period</label>
                                        <div class="d-flex align-items-center ">
                                            <div class="form-check me-3">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Lifetime
                                                </label>
                                            </div>
                                            <div class="form-check me-3">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Limited Time
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-block">
                                        <label class="form-label">Number of month</label>
                                        <input type="text" class="form-control mb-1">
                                        <span>After purchase, students can access the course until your selected time.</span>
                                    </div>
                                </div>
                                <div class="add-form-btn widget-next-btn submit-btn">
                                    <div class="btn-left">
                                        <a href="javascript:void(0);" class="btn btn-light main-btn prev_btns"><i class="isax isax-arrow-left-2 me-1"></i>Prev</a>
                                    </div>
                                    <div class="btn-left">
                                        <a href="javascript:void(0);" class="btn btn-secondary main-btn next_btns" data-bs-toggle="modal" data-bs-target="#success">Submit Course</a>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>			
            </div>			
        </div>	
    </div>
    <!-- /Course watch -->

@endsection
