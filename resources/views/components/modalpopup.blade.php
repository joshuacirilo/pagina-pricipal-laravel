@if (Route::is(['student-tickets']))
    <!-- Modal -->
    <div class="modalStyle modal fade" id="addpaymentMethod" tabindex="-1" aria-labelledby="addpaymentMethod"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Payment Method</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fa-regular fa-circle-xmark"></i></button>
                </div>
                <div class="modal-body">
                    <div class="addpaymethod-form">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="wallet-method">
                                        <label class="radio-inline custom_radio me-4">
                                            <input type="radio" name="optradio" checked="">
                                            <span class="checkmark"></span> Credit or Debit card
                                        </label>
                                        <label class="radio-inline custom_radio">
                                            <input type="radio" name="optradio">
                                            <span class="checkmark"></span> PayPal
                                        </label>
                                    </div>
                                    <div class="input-block">
                                        <label class="form-control-label">Card Number</label>
                                        <input type="text" class="form-control" placeholder="XXXX XXXX XXXX XXXX">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="input-block">
                                        <label class="form-label">Month</label>
                                        <select class="form-select" name="sellist1">
                                            <option>Month</option>
                                            <option>Brazil</option>
                                            <option>French</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="input-block">
                                        <label class="form-label">Year</label>
                                        <select class="form-select" name="sellist1">
                                            <option>Year</option>
                                            <option>India</option>
                                            <option>America</option>
                                            <option>London</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="input-block">
                                        <label class="form-control-label">CVV Code </label>
                                        <input type="text" class="form-control" placeholder="XXXX">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-block mb-0">
                                        <label class="form-control-label">Name on Card</label>
                                        <input type="text" class="form-control" placeholder="Address">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer me-auto">
                    <button type="button" class="btn btn-modal-style btn-theme">Save changes</button>
                    <button type="button" class="btn btn-modal-style btn-cancel" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add-tickets">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="page-wrapper-new p-0">
                    <div class="content">
                        <div class="modal-header border-0 custom-modal-header">
                            <div class="page-title">
                                <h4>Add New Ticket</h4>
                            </div>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="feather-x"></i>
                            </button>
                        </div>
                        <div class="modal-body custom-modal-body">
                            <form action="student-tickets">
                                <div class="tickets-add-list">
                                    <div class="settings-inner-blk add-course-info p-0">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-block">
                                                    <label class="form-label">Ticket Title</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block">
                                                    <label class="form-label">Category</label>
                                                    <select class="form-select select country-select" name="sellist1">
                                                        <option>Choose Category</option>
                                                        <option>Mailing Issue</option>
                                                        <option>Language Issue</option>
                                                        <option>Installation Error</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block">
                                                    <label class="form-label">Priority</label>
                                                    <select class="form-select select country-select" name="sellist1">
                                                        <option>Choose Priority</option>
                                                        <option>High</option>
                                                        <option>Medium</option>
                                                        <option>Low</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-block">
                                                    <label class="form-label">Description</label>
                                                    <div id="editor"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-block ">
                                                    <label class="form-label">Attachment</label>
                                                    <div class="file-drop">
                                                        <div action="#" class="dropzone">
                                                            <p>Drag & Drop files </p>
                                                        </div>
                                                    </div>
                                                    <div class="accept-drag-file">
                                                        <p>Accept File Type: doc,docx,jpg,jpeg,png,txt,pdf</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer-btn">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" class="btn btn-outline-primary"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if (Route::is(['instructor-announcements']))
    <!-- Add Announcement -->
    <div class="modal fade" id="add_announcement">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="fw-bold">Add New Announcement</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <form action="{{url('instructor-announcements')}}">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Course <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Information About UI/UX Design Degree</option>
                                        <option>Wordpress for Beginners - Master Wordpress Quickly</option>
                                        <option>Introduction to Python Programming</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Announcement Title <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" placeholder="Enter Description"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-0">
                                    <label class="form-label">Status <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Published</option>
                                        <option>Draft</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn bg-gray-100 rounded-pill me-2" type="button" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-secondary rounded-pill" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Announcement -->

    <!-- Edit Announcement -->
    <div class="modal fade" id="edit_announcement">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="fw-bold">Edit Announcement</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <form action="{{url('instructor-announcements')}}">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Course <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>Information About UI/UX Design Degree</option>
                                        <option>Wordpress for Beginners - Master Wordpress Quickly</option>
                                        <option>Introduction to Python Programming</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Announcement Title <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" value="Welcome to Introduction to Programming">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control">Enter Description</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-0">
                                    <label class="form-label">Status <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>Published</option>
                                        <option>Draft</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn bg-gray-100 rounded-pill me-2" type="button" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-secondary rounded-pill" type="submit">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Announcement -->

    <!-- Announcement Details -->
    <div class="modal fade" id="view_announcement">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="fw-bold">Announcement Details</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <h6 class="mb-1">Course</h6>
                        <p>Introduction to Programming - Python & Java</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="mb-1">Title</h6>
                        <p>Guest Lecture Announcement</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="mb-1">Description</h6>
                        <p>I am excited to inform you that we will be having a guest lecture from , an expert . 
                            This will be an excellent opportunity to gain insight into and ask any questions you might have. 
                            Please make every effort to attend, as participation will count towards.
                        </p>
                    </div>
                    <div class="mb-0">
                        <h6 class="mb-1">Added On</h6>
                        <p>26 Jul 2025, 01:30 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Announcement Details -->

    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center custom-modal-body">
                    <span class="avatar avatar-lg bg-danger-transparent rounded-circle mb-2">
                        <i class="isax isax-trash fs-24 text-danger"></i>
                    </span>
                    <div>
                        <h4 class="mb-2">Delete Announcements</h4>
                        <p class="mb-3">Are you sure you want to delete announcements?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0);" class="btn bg-gray-100 rounded-pill me-2" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-secondary rounded-pill">Yes, Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->

@endif

@if (Route::is(['instructor-assignment']))
    <!-- Add Assignment -->
    <div class="modal fade" id="add_assignment">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="fw-bold">Add New Assignments</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <form action="{{url('instructor-assignment')}}">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Course <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Information About UI/UX Design Degree</option>
                                        <option>Wordpress for Beginners - Master Wordpress Quickly</option>
                                        <option>Introduction to Python Programming</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Assingment Title <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" placeholder="Enter Description"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Instructions <span class="text-danger"> *</span></label>
                                    <textarea rows="4" class="form-control">Enter Instructions</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Last Date <span class="text-danger"> *</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="isax isax-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Status <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Published</option>
                                        <option>Draft</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn bg-gray-100 rounded-pill me-2" type="button" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-secondary rounded-pill" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Assignment -->

    <!-- Edit Assignment -->
    <div class="modal fade" id="edit_assignment">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="fw-bold">Edit Assignments</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <form action="{{url('instructor-assignment')}}">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Course <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>Information About UI/UX Design Degree</option>
                                        <option>Wordpress for Beginners - Master Wordpress Quickly</option>
                                        <option>Introduction to Python Programming</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Assingment Title <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" value="Building Your First Landing Page">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control">Enter Description</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Instructions <span class="text-danger"> *</span></label>
                                    <textarea rows="4" class="form-control">Enter Instructions</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 mb-md-0">
                                    <label class="form-label">Last Date <span class="text-danger"> *</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="02-05-2024">
                                        <span class="input-icon-addon">
                                            <i class="isax isax-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-0">
                                    <label class="form-label">Status <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>Published</option>
                                        <option>Draft</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn bg-gray-100 rounded-pill me-2" type="button" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-secondary rounded-pill" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Assignment -->

    <!-- Assignment Details -->
    <div class="modal fade" id="view_assignment">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="fw-bold">Assignments Details</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-4">
                        <h6 class="mb-1">Course</h6>
                        <p>Introduction to Programming - Python & Java</p>
                    </div>
                    <div class="mb-4">
                        <h6 class="mb-1">Title</h6>
                        <p>Guest Lecture Announcement</p>
                    </div>
                    <div class="mb-4">
                        <h6 class="mb-1">Description</h6>
                        <p>I am excited to inform you that we will be having a guest lecture from , an expert . 
                            This will be an excellent opportunity to gain insight into and ask any questions you might have. 
                            Please make every effort to attend, as participation will count towards.
                        </p>
                    </div>
                    <div class="mb-4">
                        <h6 class="mb-1">Instructions</h6>
                        <p>Explain the specific instructions or requirements for the assignment. For example, 
                            "The assignment should be 3-5 
                            pages long, formatted in APA style. You must use at least 5 peer-reviewed articles.
                        </p>
                    </div>
                    <div class="mb-0">
                        <h6 class="mb-1">Last Date</h6>
                        <p>26 Jul 2025</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Assignment Details -->

    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center custom-modal-body">
                    <span class="avatar avatar-lg bg-danger-transparent rounded-circle mb-2">
                        <i class="isax isax-trash fs-24 text-danger"></i>
                    </span>
                    <div>
                        <h4 class="mb-2">Delete Assignments</h4>
                        <p class="mb-3">Are you sure you want to delete assignments?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0);" class="btn bg-gray-100 rounded-pill me-2" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-secondary rounded-pill">Yes, Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endif

@if (Route::is(['instructor-certificate']))
    <!-- Add Question -->
    <div class="modal fade" id="add_certificate">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Add New Certificate</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <form action="{{url('instructor-quiz-questions')}}">
                    <div class="modal-body pb-0">
                        <div class="mb-3">
                            <label class="form-label">Attachments</label>
                            <div class="file-upload drag-file w-100 d-flex align-items-center justify-content-center flex-column">
                                <span class="upload-img mb-2"><i class="isax isax-folder5 fs-24"></i></span>
                                <p class="mb-1 fs-12">Drag and drop your files</p>
                                <p class="mb-2 fs-12">Accept File Type: doc,docx,jpg,jpeg,png,txt,pdf</p>
                                <input type="file" accept="video/image">
                                <span class="btn btn-secondary rounded-pill"><i class="isax isax-document-upload me-1"></i>Upload</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-light rounded-pill me-2" type="button" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-secondary rounded-pill" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Question -->

    <div class="modal fade" id="view_certificate">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>View Certificate</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div><img src="{{URL::asset('build/img/icon/certificate.svg')}}" class="img-fluid" alt=""></div>
                    <div class="text-end mt-4">
                        <a href="#" class="btn btn-secondary rounded-pill"><i class="isax isax-import me-2"></i>Download</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center custom-modal-body">
                    <span class="avatar avatar-lg bg-gray-100 rounded-circle mb-2">
                        <i class="isax isax-trash fs-24 text-danger"></i>
                    </span>
                    <div>
                        <h4 class="mb-2">Delete Certificate</h4>
                        <p class="mb-3">Are you sure you want to delete certificate?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0);" class="btn bg-gray-100 rounded-pill me-2" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-secondary rounded-pill">Yes, Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endif

@if (Route::is(['instructor-course', 'instructor-course-grid']))
    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center custom-modal-body">
                    <span class="avatar avatar-lg bg-danger-transparent rounded-circle mb-2">
                        <i class="isax isax-trash fs-24 text-danger"></i>
                    </span>
                    <div>
                        <h4 class="mb-2">Delete Course</h4>
                        <p class="mb-3">Are you sure you want to delete course?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0);" class="btn bg-gray-100 rounded-pill me-2" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-secondary rounded-pill">Yes, Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endif

@if (Route::is(['student-change-password']))
    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center custom-modal-body">
                    <span class="avatar avatar-lg bg-light rounded-circle mb-2">
                        <i class="isax isax-trash fs-24 text-danger"></i>
                    </span>
                    <div>
                        <h4 class="mb-2">Remove All</h4>
                        <p class="mb-3">Are you sure you want to remove all from wishlist?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn bg-gray-100 rounded-pill me-2" data-bs-dismiss="modal">Cancel</a>
                            <a href="#" class="btn btn-secondary rounded-pill">Yes, Remove All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endif

@if (Route::is(['student-details']))
    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center custom-modal-body">
                    <span class="avatar avatar-lg bg-danger-transparent rounded-circle mb-2">
                        <i class="isax isax-trash fs-24 text-danger"></i>
                    </span>
                    <div>
                        <h4 class="mb-2">Delete Course</h4>
                        <p class="mb-3">Are you sure you want to delete course?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0);" class="btn bg-gray-100 rounded-pill me-2" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-secondary rounded-pill">Yes, Remove All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endif

@if (Route::is(['student-linked-accounts']))
    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center custom-modal-body">
                    <span class="avatar avatar-lg bg-light rounded-circle mb-2">
                        <i class="isax isax-trash fs-24 text-danger"></i>
                    </span>
                    <div>
                        <h4 class="mb-2">Remove All</h4>
                        <p class="mb-3">Are you sure you want to remove all from wishlist?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn btn-light rounded-pill me-2" data-bs-dismiss="modal">Cancel</a>
                            <a href="#" class="btn btn-secondary rounded-pill">Yes, Remove All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endif

@if (Route::is(['student-order-history']))
    <!-- View Invoice -->
    <div class="modal fade" id="view_invoice">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Invoice</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="border-bottom mb-3">
                        <div class="row justify-content-between align-items-center flex-wrap row-gap-4">
                            <div class="col-md-6">
                                <div class="mb-2 invoice-logo-white">
                                    <img src="{{URL::asset('build/img/logo.svg')}}" class="img-fluid" alt="logo">
                                </div>
                                <p class="mb-2">3099 Kennedy Court Framingham, MA 01702</p>
                            </div>
                            <div class="col-md-6">
                                <div class=" text-end mb-3">
                                    <h6 class="text-default mb-1 text-secondary fs-16">#OI0010</h6>
                                    <p class="mb-1">Created Date : <span class="text-gray-9">Aug 25, 2025</span> </p>
                                    <p>Due Date : <span class="text-gray-9">Aug 30, 2025</span> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom mb-3">
                        <div class="row g-4">
                            <div class="col-lg-5">
                                <span class="mb-3 d-flex">From</span>
                                <div>
                                    <h6 class="mb-2 fs-16">Thomas Lawler</h6>
                                    <p class="fs-14 mb-1">2077 Chicago Avenue Orosi, CA 93647</p>
                                    <p class="fs-14 mb-1">Email :thomaslawler@example.com</p>
                                    <p class="fs-14">Phone : +1 987 654 3210</p>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <span class="mb-3 d-flex">To</span>
                                <div>
                                    <h6 class="mb-2">Ronald Richard</h6>
                                    <p class="fs-14 mb-1">3103 Trainer Avenue Peoria, IL 61602</p>
                                    <p class="fs-14 mb-1">Email : <a href="#">adre3@example.com</a></p>
                                    <p class="fs-14">Phone : <a href="#">+1 987 471 6589</a></p>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3 text-end">
                                    <span class="mb-1 d-block">Payment Status</span>
                                    <span class="badge bg-success badge-sm d-inline-flex align-items-center fs-10 fw-normal mb-4"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                    <div>
                                        <img src="{{URL::asset('build/img/icon/qr.svg')}}" class="img-fluid" alt="QR">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="table-responsive custom-table rounded-0">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="w-50">Description</th>
                                        <th class="text-center">Qty</th>
                                        <th class="text-end">Cost</th>
                                        <th class="text-end">Discount</th>
                                        <th class="text-end">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="text-gray-9">Information About UI/UX Design Degree</p>
                                        </td>
                                        <td class="text-gray text-center">1</td>
                                        <td class="text-gray text-end">$120</td>
                                        <td class="text-gray text-end">$0</td>
                                        <td class="text-gray text-end">$120</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="border-bottom mb-3 pb-3">
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-between align-items-center border-bottom my-2 pb-2 pe-3">
                                    <p class="text-gray mb-0">Sub Total</p>
                                    <p class="text-gray-9 fw-medium">$120</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center border-bottom my-2 pb-2 pe-3">
                                    <p class="mb-0">Discount (0%)</p>
                                    <p class="text-gray-9 fs-14 fw-medium">$0</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3 pe-3">
                                    <p class="mb-0">VAT (5%)</p>
                                    <p class="text-gray-9 fs-14 fw-medium mb-2">$0</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-2 pe-3">
                                    <h6 class="fs-16">Total Amount</h6>
                                    <h6 class="fs-16">$120</h6>
                                </div>
                                <p>
                                    Amount in Words : Dollar One Hundred Twenty 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center gy-3">
                        <div class="col-lg-9">
                            <div class="mb-3">
                                <h6 class="mb-1 fs-15">Notes</h6>
                                <p>Invoice for course purchase, covering course fee, discounts, and applicable taxes.</p>
                            </div>
                            <div>
                                <h6 class="mb-1 fs-16">Terms and Conditions</h6>
                                <p>Full payment grants non-transferable access to the course, subject to the provider’s refund policy. </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-end pe-4 mb-2">
                                <img src="{{URL::asset('build/img/icons/sign.svg')}}" class="img-fluid" alt="sign">
                            </div>
                            <div class="text-end">
                                <h6 class="fs-15 pe-3 mb-2">Ted M. Davis</h6>
                                <p>Assistant Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /View Invoice -->
@endif

@if (Route::is(['student-quiz']))
    <!-- Edit Review -->
    <div class="modal fade" id="edit_review">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Edit Review</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <div class="modal-body pb-0">                    
                    <div class="mb-3">
                        <label class="form-label fs-14">Your Rating <span class="text-danger">*</span></label>
                        <div class="selection-wrap">
                            <div class="d-inline-block">
                                <div class="rating-selction">
                                    <input type="radio" name="rating" value="5" id="rating5" checked>
                                    <label for="rating5"><i class="fa-solid fa-star"></i></label>
                                    <input type="radio" name="rating" value="4" id="rating4" checked>
                                    <label for="rating4"><i class="fa-solid fa-star"></i></label>
                                    <input type="radio" name="rating" value="3" id="rating3" checked>
                                    <label for="rating3"><i class="fa-solid fa-star"></i></label>
                                    <input type="radio" name="rating" value="2" id="rating2">
                                    <label for="rating2"><i class="fa-solid fa-star"></i></label>
                                    <input type="radio" name="rating" value="1" id="rating1">
                                    <label for="rating1"><i class="fa-solid fa-star"></i></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fs-14">Write Your Review <span class="text-danger">*</span></label>
                        <textarea class="form-control" rows="3">This is the second Photoshop course I have completed with Nancy Duarte. Worth every penny and recommend it highly. To get the most out of this course, its best to to take the Beginner to Advanced course first. The sound and video quality is of a good standard. Thank you Nancy Duarte.</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn bg-gray-100 btn-light rounded-pill me-2" data-bs-dismiss="modal">Cancel</a>   
                    <button type="submit" class="btn btn-md btn-secondary rounded-pill">Save Changes</button>                
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Review -->

    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center custom-modal-body">
                    <span class="avatar avatar-lg bg-secondary-transparent rounded-circle mb-2">
                        <i class="isax isax-trash fs-24 text-danger"></i>
                    </span>
                    <div>
                        <h4 class="mb-2">Delete Review</h4>
                        <p class="mb-3">Are you sure you want to delete review?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn bg-gray-100 rounded-pill me-2" data-bs-dismiss="modal">Cancel</a>
                            <a href="#" class="btn btn-secondary rounded-pill">Yes, Remove All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endif

@if (Route::is(['student-quiz-questions']))
    <!-- Edit Review -->
    <div class="modal fade" id="edit_review">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Review</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle"></i>
                    </button>
                </div>
                <div class="modal-body pb-0">                    
                    <div class="mb-3">
                        <label class="form-label fs-14">Your Rating <span class="text-danger">*</span></label>
                        <div class="selection-wrap">
                            <div class="d-inline-block">
                                <div class="rating-selction">
                                    <input type="radio" name="rating" value="5" id="rating5" checked>
                                    <label for="rating5"><i class="fa-solid fa-star"></i></label>
                                    <input type="radio" name="rating" value="4" id="rating4" checked>
                                    <label for="rating4"><i class="fa-solid fa-star"></i></label>
                                    <input type="radio" name="rating" value="3" id="rating3" checked>
                                    <label for="rating3"><i class="fa-solid fa-star"></i></label>
                                    <input type="radio" name="rating" value="2" id="rating2">
                                    <label for="rating2"><i class="fa-solid fa-star"></i></label>
                                    <input type="radio" name="rating" value="1" id="rating1">
                                    <label for="rating1"><i class="fa-solid fa-star"></i></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fs-14">Write Your Review <span class="text-danger">*</span></label>
                        <textarea class="form-control" rows="3">This is the second Photoshop course I have completed with Nancy Duarte. Worth every penny and recommend it highly. To get the most out of this course, its best to to take the Beginner to Advanced course first. The sound and video quality is of a good standard. Thank you Nancy Duarte.</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-md btn-light rounded-pill me-2" data-bs-dismiss="modal">Cancel</a>   
                    <button type="submit" class="btn btn-md btn-secondary rounded-pill">Save Changes</button>                
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Review -->

    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center custom-modal-body">
                    <span class="avatar avatar-lg bg-light rounded-circle mb-2">
                        <i class="isax isax-trash fs-24 text-danger"></i>
                    </span>
                    <div>
                        <h4 class="mb-2">Delete Review</h4>
                        <p class="mb-3">Are you sure you want to delete review?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn btn-light rounded-pill me-2" data-bs-dismiss="modal">Cancel</a>
                            <a href="#" class="btn btn-secondary rounded-pill">Yes, Remove All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endif

@if (Route::is(['student-referral']))
    <!-- View Invoice -->
    <div class="modal fade" id="withdraw_request">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Withdrawal Request</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <form action="{{url('student-referral')}}">
                    <div class="modal-body">
                        <div class="card withdraw-item">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                            <p class="mb-1">Withdrawal Balance</p>
                                            <h6>$15000</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <p class="mb-1">Selected </p>
                                            <h6>PayPal</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Amount <span class="text-danger"> *</span></label>
                            <input type="text" class="form-control" placeholder="$">
                            <p class="d-flex align-items-center pt-1">
                                <i class="isax isax-info-circle me-1"></i>
                                Minimum withdraw amount is $50
                            </p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn bg-gray-100 rounded-pill me-2" data-bs-dismiss="modal">Cancel</a>
                        <button class="btn btn-secondary rounded-pill" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /View Invoice -->
@endif

@if (Route::is(['student-reviews']))
    <!-- Edit Review -->
    <div class="modal fade" id="edit_review">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Edit Review</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <div class="modal-body pb-0">                    
                    <div class="mb-3">
                        <label class="form-label fs-14">Your Rating <span class="text-danger">*</span></label>
                        <div class="selection-wrap">
                            <div class="d-inline-block">
                                <div class="rating-selction">
                                    <input type="radio" name="rating" value="5" id="rating5" checked>
                                    <label for="rating5"><i class="fa-solid fa-star"></i></label>
                                    <input type="radio" name="rating" value="4" id="rating4" checked>
                                    <label for="rating4"><i class="fa-solid fa-star"></i></label>
                                    <input type="radio" name="rating" value="3" id="rating3" checked>
                                    <label for="rating3"><i class="fa-solid fa-star"></i></label>
                                    <input type="radio" name="rating" value="2" id="rating2">
                                    <label for="rating2"><i class="fa-solid fa-star"></i></label>
                                    <input type="radio" name="rating" value="1" id="rating1">
                                    <label for="rating1"><i class="fa-solid fa-star"></i></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fs-14">Write Your Review <span class="text-danger">*</span></label>
                        <textarea class="form-control lh-base" rows="3">This is the second Photoshop course I have completed with Nancy Duarte. Worth every penny and recommend it highly. To get the most out of this course, its best to to take the Beginner to Advanced course first. The sound and video quality is of a good standard. Thank you Nancy Duarte.</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-md bg-gray-100 rounded-pill me-2" data-bs-dismiss="modal">Cancel</a>   
                    <button type="submit" class="btn btn-md btn-secondary rounded-pill">Save Changes</button>                
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Review -->

    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center custom-modal-body">
                    <span class="avatar avatar-lg bg-secondary-transparent rounded-circle mb-2">
                        <i class="isax isax-trash fs-24 text-danger"></i>
                    </span>
                    <div>
                        <h4 class="mb-2">Delete Review</h4>
                        <p class="mb-3">Are you sure you want to delete review?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn bg-gray-100 rounded-pill me-2" data-bs-dismiss="modal">Cancel</a>
                            <a href="#" class="btn btn-secondary rounded-pill">Yes, Remove All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endif  

@if (Route::is(['students']))
    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center custom-modal-body">
                    <span class="avatar avatar-lg bg-danger-transparent rounded-circle mb-2">
                        <i class="isax isax-trash fs-24 text-danger"></i>
                    </span>
                    <div>
                        <h4 class="mb-2">Delete Course</h4>
                        <p class="mb-3">Are you sure you want to delete course?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0);" class="btn bg-gray-100 rounded-pill me-2" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-secondary rounded-pill">Yes, Remove All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endif

@if (Route::is(['student-settings']))
    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center custom-modal-body">
                    <span class="avatar avatar-lg bg-secondary-transparent rounded-circle mb-2">
                        <i class="isax isax-trash fs-24 text-danger"></i>
                    </span>
                    <div>
                        <h4 class="mb-2">Remove All</h4>
                        <p class="mb-3">Are you sure you want to remove all from wishlist?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn bg-gray-100 rounded-pill me-2" data-bs-dismiss="modal">Cancel</a>
                            <a href="#" class="btn btn-secondary rounded-pill">Yes, Remove All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->

    
    <!-- Delete Modal -->
    <div class="modal fade" id="delete_account">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Delete Account</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <h6 class="mb-1">Why Are You Deleting Your Account?</h6>
                        <p>We're sorry to see you go! To help us improve, please let us know your reason for deleting your account</p>
                    </div>
                    <div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="reason" id="Radio-sm-1">
                            <label class="fw-medium form-check-label text-gray-9" for="Radio-sm-1">
                                No longer using the service
                            </label>
                            <p>I no longer need this service and won’t be using it in the future.</p>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="reason" id="Radio-sm-2">
                            <label class="fw-medium form-check-label text-gray-9" for="Radio-sm-2">
                                Privacy concerns
                            </label>
                            <p>I am concerned about how my data is handled and want to remove my information.</p>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="reason" id="Radio-sm-3">
                            <label class="fw-medium form-check-label text-gray-9" for="Radio-sm-3">
                                Too many notifications/emails
                            </label>
                            <p>I’m overwhelmed by the volume of notifications or emails and would like to reduce them.</p>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="reason" id="Radio-sm-4">
                            <label class="fw-medium form-check-label text-gray-9" for="Radio-sm-4">
                                Poor user experience
                            </label>
                            <p>I’ve had difficulty using the platform, and it didn’t meet my expectations.</p>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="reason" id="Radio-sm-5">
                            <label class="fw-medium form-check-label text-gray-9" for="Radio-sm-5">
                                Other (Please specify)
                            </label>
                        </div>
                        <div>
                            <textarea rows="3" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn bg-gray-100 rounded-pill me-2" type="button" data-bs-dismiss="modal">Keep My Account</button>
                    <button class="btn btn-secondary rounded-pill" type="button">Delete Account</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endif

@if (Route::is(['student-social-profile']))
    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center custom-modal-body">
                    <span class="avatar avatar-lg bg-secondary-transparent rounded-circle mb-2">
                        <i class="isax isax-trash fs-24 text-danger"></i>
                    </span>
                    <div>
                        <h4 class="mb-2">Remove All</h4>
                        <p class="mb-3">Are you sure you want to remove all from wishlist?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn bg-gray-100 rounded-pill me-2" data-bs-dismiss="modal">Cancel</a>
                            <a href="#" class="btn btn-secondary rounded-pill">Yes, Remove All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endif             

@if (Route::is(['student-tickets']))
    <!-- Add Ticket -->
    <div class="modal fade" id="add_ticket">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="fw-bold">Add Ticket</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <form action="{{url('student-tickets')}}">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Ticket Title <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Category <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Mailing Issues</option>
                                        <option>Language Issues</option>
                                        <option>Installation Error</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Priority <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>High</option>
                                        <option>Low</option>
                                        <option>Medium</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <div class="summernote"><p>Enter Ticket Detail</p></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Attachments</label>
                                    <div class="file-upload drag-file w-100 d-flex align-items-center justify-content-center flex-column">
                                        <span class="upload-img mb-2"><i class="isax isax-folder5 fs-24"></i></span>
                                        <p class="mb-1 text-gray-9 fw-medium">Drag and drop your files</p>
                                        <p class="mb-2 fs-12">Accept File Type: doc,docx,jpg,jpeg,png,txt,pdf</p>
                                        <input type="file" accept="video/image">
                                        <span class="btn mt-2 btn-secondary rounded-pill"><i class="isax isax-document-upload me-1"></i>Upload</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn bg-gray-100 rounded-pill me-2" type="button" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-secondary rounded-pill" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Ticket -->

    <!-- Edit Ticket -->
    <div class="modal fade" id="edit_ticket">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="fw-bold">Edit Ticket</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <form action="{{url('student-tickets')}}">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Ticket Title <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" value="Issue with Course Notification Emails">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Category <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>Mailing Issues</option>
                                        <option>Language Issues</option>
                                        <option>Installation Error</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Priority <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>High</option>
                                        <option>Low</option>
                                        <option>Medium</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <div class="summernote"><p>Enter Ticket Detail</p></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Attachments</label>
                                    <div class="file-upload drag-file w-100 d-flex align-items-center justify-content-center flex-column">
                                        <span class="upload-img mb-2"><i class="isax isax-folder5 fs-24"></i></span>
                                        <p class="mb-1 text-gray-9 fw-medium">Drag and drop your files</p>
                                        <p class="mb-2 fs-12">Accept File Type: doc,docx,jpg,jpeg,png,txt,pdf</p>
                                        <input type="file" accept="video/image">
                                        <span class="btn mt-2 btn-secondary rounded-pill"><i class="isax isax-document-upload me-1"></i>Upload</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn bg-gray-100 rounded-pill me-2" type="button" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-secondary rounded-pill" type="submit">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Ticket -->

    <!-- Ticket Details -->
    <div class="modal fade" id="ticket_details">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="d-inline-flex align-items-center">Ticket Details <span class="text-primary fs-14 ms-2">#TIC010</span></h5>
                    <div class="d-flex align-items-center justify-content-end">
                        <span class="badge badge-sm bg-purple d-inline-flex align-items-center me-2"><i class="fa-solid fa-circle fs-5 me-1"></i>Opened</span>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="isax isax-close-circle5"></i>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <h6 class="mb-1">Category</h6>
                                <p>Mailing Issues</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <h6 class="mb-1">Date</h6>
                                <p>26 Jul 2025</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <h6 class="mb-1">Priority</h6>
                                <span class="badge bg-soft-danger badge-sm d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>High</span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <h6 class="mb-1">Subject</h6>
                                <p>Issue with Course Notification Emails</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div>
                                <h6 class="mb-1">Description</h6>
                                <p>I am not receiving important emails from the LMS platform, such as course notifications, 
                                    enrollment confirmations, or assignment updates. Additionally, some 
                                    students have reported that they are not receiving emails about live classes or announcements.
                                    This issue is affecting communication and timely updates for both instructors and students. 
                                    Please investigate and resolve this issue as soon as possible.
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Ticket Details -->

    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center custom-modal-body">
                    <span class="avatar avatar-lg bg-danger-transparent rounded-circle mb-2">
                        <i class="isax isax-trash fs-24 text-danger"></i>
                    </span>
                    <div>
                        <h4 class="mb-2">Delete Ticket</h4>
                        <p class="mb-3">Are you sure you want to delete ticket?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn bg-gray-100 rounded-pill me-2" data-bs-dismiss="modal">Cancel</a>
                            <a href="#" class="btn btn-secondary rounded-pill">Yes, Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endif

@if (Route::is(['student-wishlist']))

    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center custom-modal-body">
                    <span class="avatar avatar-lg bg-secondary-transparent rounded-circle mb-2">
                        <i class="isax isax-trash fs-24 text-danger"></i>
                    </span>
                    <div>
                        <h4 class="mb-2">Remove All</h4>
                        <p class="mb-3">Are you sure you want to remove all from wishlist?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0);" class="btn bg-gray-100 rounded-pill me-2" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-secondary rounded-pill">Yes, Remove All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->

@endif

@if (Route::is(['instructor-tickets']))
	<!-- Modal -->
    <div class="modalStyle modal fade" id="addpaymentMethod" tabindex="-1" aria-labelledby="addpaymentMethod" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" >Add New Payment Method</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-regular fa-circle-xmark"></i></button>
            </div>
            <div class="modal-body">
                <div class="addpaymethod-form">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="wallet-method">
                                    <label class="radio-inline custom_radio me-4">
                                        <input type="radio" name="optradio" checked="">
                                        <span class="checkmark"></span> Credit or Debit card
                                    </label>
                                    <label class="radio-inline custom_radio">
                                        <input type="radio" name="optradio">
                                        <span class="checkmark"></span> PayPal
                                    </label>
                                </div>
                                <div class="input-block">
                                    <label class="form-control-label">Card Number</label>
                                    <input type="text" class="form-control" placeholder="XXXX XXXX XXXX XXXX">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="input-block">
                                    <label  class="form-label">Month</label>
                                    <select class="form-select"  name="sellist1">
                                        <option>Month</option>
                                        <option>Brazil</option>
                                        <option>French</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="input-block">
                                    <label  class="form-label">Year</label>
                                    <select class="form-select"  name="sellist1">
                                        <option>Year</option>
                                        <option>India</option>
                                        <option>America</option>
                                        <option>London</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="input-block">
                                    <label class="form-control-label">CVV Code </label>
                                    <input type="text" class="form-control" placeholder="XXXX">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-block mb-0">
                                    <label class="form-control-label">Name on Card</label>
                                    <input type="text" class="form-control" placeholder="Address">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer me-auto">
                <button type="button" class="btn btn-modal-style btn-theme">Save changes</button>
                <button type="button" class="btn btn-modal-style btn-cancel" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
    <div class="modal fade" id="add-tickets">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="page-wrapper-new p-0">
                    <div class="content">
                        <div class="modal-header border-0 custom-modal-header">
                            <div class="page-title">
                                <h4>Add New Ticket</h4>
                            </div>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="feather-x"></i>
                            </button>
                        </div>
                        <div class="modal-body custom-modal-body">
                            <form action="{{url('instructor-tickets')}}">
                                <div class="tickets-add-list">
                                    <div class="settings-inner-blk add-course-info p-0">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-block">
                                                    <label class="form-label">Ticket Title</label>
                                                    <input type="text" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block">
                                                    <label  class="form-label">Category</label>
                                                    <select class="form-select select country-select"  name="sellist1">
                                                        <option>Choose Category</option>
                                                        <option>Mailing Issue</option>
                                                        <option>Language Issue</option>
                                                        <option>Installation Error</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block">
                                                    <label  class="form-label">Priority</label>
                                                    <select class="form-select select country-select"  name="sellist1">
                                                        <option>Choose Priority</option>
                                                        <option>Mailing Issue</option>
                                                        <option>Language Issue</option>
                                                        <option>Installation Error</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-block">
                                                    <label class="form-label">Description</label>
                                                    <div id="editor"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-block ">
                                                    <label class="form-label">Attachment</label>
                                                    <div class="file-drop">
                                                        <div action="#" class="dropzone">
                                                            <p >Drag & Drop files </p>
                                                        </div>
                                                    </div>
                                                    <div class="accept-drag-file">
                                                        <p>Accept File Type: doc,docx,jpg,jpeg,png,txt,pdf</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>	
                                    </div>
                                </div>									
                                <div class="modal-footer-btn">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if(Route::is(['add-course']))
	<!-- Add topic -->
    <div class="modal fade" id="add-topic">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Topic Name</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <form action="{{url('add-course')}}">
                    <div class="modal-body">
                        <div class="input-block">
                            <label class="form-label">Add Name<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn me-2 btn-light" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-secondary">Add New</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add topic -->

    <!-- Add lesson -->
    <div class="modal fade" id="add-lesson">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>New Lesson</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <form action="{{url('add-course')}}">
                    <div class="modal-body">
                        <div class="input-block mb-4">
                            <label class="form-label">Add Lesson<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-block mb-4">
                            <label class="form-label">Video link<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-block mb-4">
                            <label class="form-label">Course Description</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                                <label class="form-check-label" for="flexRadioDefault4">
                                  free
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                                <label class="form-check-label" for="flexRadioDefault5">
                                  Premium
                                </label>
                              </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn me-2 btn-light" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-secondary">Add New</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add lesson -->

    <!-- Add Faq -->
    <div class="modal fade" id="add-faq">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>New FAQ</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <form action="{{url('add-course')}}">
                    <div class="modal-body">
                        <div class="input-block mb-4">
                            <label class="form-label">Question<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-block mb-4">
                            <label class="form-label">Answer<span class="text-danger ms-1">*</span></label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6" checked>
                                <label class="form-check-label" for="flexRadioDefault6">
                                    Enable
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                                <label class="form-check-label" for="flexRadioDefault7">
                                    Disable
                                </label>
                              </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn me-2 btn-light" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-secondary">Add New</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Faq -->

    <!-- success -->
    <div class="modal fade modal-default" id="success">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-4">
                    <div class="text-center">
                        <div class="text-success h1 mb-2">
                            <i class="isax isax-tick-circle5"></i>
                        </div>
                        <h5 class="mb-2">Congratulations! Course Submitted</h5>
                        <p class="mb-3">You’ve successfully Submitted the Course & its under the review, Once the course is reviewed by the reviewer it will go live.</p>
                        <div class="d-flex align-items-center justify-content-center gap-2 flex-wrap">
                            <a href="{{url('instructor-dashboard')}}" class="btn btn-secondary"><i class="isax isax-arrow-left-2 me-1"></i>Back to Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /success -->

@endif

@if (Route::is(['instructor-payout']))
    <div class="modal fade" id="withdraw-req">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="fw-bold">Withdrawal Request</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <form action="{{url('instructor-payout')}}">
                    <div class="modal-body pb-0">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="mb-2">Withdrawal Balance</p>
                                        <h6 class="fs-16">$5340</h6>
                                    </div>
                                    <div class="col-6">
                                        <p class="mb-2">Selected</p>
                                        <h6 class="fs-16">PayPal</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Amount<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" value="$ ">
                            <p class="form-info"><i class="isax isax-info-circle"></i>Minimum withdraw amount is $50</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn bg-gray-100 rounded-pill me-2" type="button" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-secondary rounded-pill" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif

@if (Route::is(['instructor-social-profiles']))
    <!-- Delete Modal -->
    <div class="modal fade" id="delete_account">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Delete Account</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <h6 class="mb-1">Why Are You Deleting Your Account?</h6>
                        <p>We're sorry to see you go! To help us improve, please let us know your reason for deleting your account</p>
                    </div>
                    <div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="reason" id="Radio-sm-1">
                            <label class="fw-medium form-check-label text-gray-9" for="Radio-sm-1">
                                No longer using the service
                            </label>
                            <p>I no longer need this service and won’t be using it in the future.</p>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="reason" id="Radio-sm-2">
                            <label class="fw-medium form-check-label text-gray-9" for="Radio-sm-2">
                                Privacy concerns
                            </label>
                            <p>I am concerned about how my data is handled and want to remove my information.</p>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="reason" id="Radio-sm-3">
                            <label class="fw-medium form-check-label text-gray-9" for="Radio-sm-3">
                                Too many notifications/emails
                            </label>
                            <p>I’m overwhelmed by the volume of notifications or emails and would like to reduce them.</p>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="reason" id="Radio-sm-4">
                            <label class="fw-medium form-check-label text-gray-9" for="Radio-sm-4">
                                Poor user experience
                            </label>
                            <p>I’ve had difficulty using the platform, and it didn’t meet my expectations.</p>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="reason" id="Radio-sm-5">
                            <label class="fw-medium form-check-label text-gray-9" for="Radio-sm-5">
                                Other (Please specify)
                            </label>
                        </div>
                        <div>
                            <textarea rows="3" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn bg-gray-100 rounded-pill me-2" type="button" data-bs-dismiss="modal">Keep My Account</button>
                    <button class="btn btn-secondary rounded-pill" type="button">Delete Account</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endif

@if (Route::is(['instructor-plans']))
	<!-- pricing plan -->
    <div class="modal fade pricing-modal" id="pricing-plan">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="fw-bold">Pricing Plan</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                    <div class="modal-body">
                        <div class="enable-item mb-3 d-flex align-items-center justify-content-center text-gray-9">
                            <label class="mb-0 me-2 fs-14">Monthly</label>
                            <div class="form-check form-switch check-on m-0">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                            </div>
                            <label class="mb-0 ms-2 fs-14">Annualy</label>
                        </div>
                        <div class="row row-gap-4">
                            <div class="col-xl-4 col-lg-6 d-flex">
                                <div class="pricing-item flex-fill">
                                        <h5 class="mb-2">Basic</h5>
                                        <h1 class="mb-2 text-primary"><sup class="me-1">$</sup>99</h1>
                                        <h6 class="fw-normal">Ideal for individuals or small teams starting with online education.</h6>
                                        <div class="border-top pt-3 mt-3">
                                        <p class="d-flex align-items-center mb-2"><i class="fa-solid fa-circle fs-5 me-2"></i>10 active courses</p>
                                        <p class="d-flex align-items-center mb-2"><i class="fa-solid fa-circle fs-5 me-2"></i>Basic course creation tools</p>
                                        <p class="d-flex align-items-center mb-2"><i class="fa-solid fa-circle fs-5 me-2"></i>Student progress tracking</p>
                                        <p class="d-flex align-items-center mb-2"><i class="fa-solid fa-circle fs-5 me-2"></i>1 GB storage</p>
                                        <p class="d-flex align-items-center mb-2"><i class="fa-solid fa-circle fs-5 me-2"></i>Email notifications</p>
                                        <p class="d-flex align-items-center mb-0"><i class="fa-solid fa-circle fs-5 me-2"></i>Community support</p>
                                        </div>
                                        <a href="#" class="btn btn-secondary w-100 mt-3" data-bs-toggle="modal" data-bs-target="#pricing-plan-two">Choose Plan<i class="isax isax-arrow-right-3 fs-10 ms-1"></i></a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 d-flex">
                                <div class="pricing-item flex-fill">
                                        <h5 class="mb-2">Standard</h5>
                                        <h1 class="mb-2 text-primary"><sup class="me-1">$</sup>199</h1>
                                        <h6 class="fw-normal">Ideal for growing institutions that need advanced tools and greater flexibility.</h6>
                                        <div class="border-top pt-3 mt-3">
                                        <p class="d-flex align-items-center mb-2"><i class="fa-solid fa-circle fs-5 me-2"></i>Access to 20 courses</p>
                                        <p class="d-flex align-items-center mb-2"><i class="fa-solid fa-circle fs-5 me-2"></i>Custom course certificates</p>
                                        <p class="d-flex align-items-center mb-2"><i class="fa-solid fa-circle fs-5 me-2"></i>Basic analytics</p>
                                        <p class="d-flex align-items-center mb-2"><i class="fa-solid fa-circle fs-5 me-2"></i>10 GB storage</p>
                                        <p class="d-flex align-items-center mb-2"><i class="fa-solid fa-circle fs-5 me-2"></i>Course scheduling</p>
                                        <p class="d-flex align-items-center mb-0"><i class="fa-solid fa-circle fs-5 me-2"></i>Priority email and chat support</p>
                                        </div>
                                        <a href="#" class="btn btn-secondary w-100 mt-3" data-bs-toggle="modal" data-bs-target="#pricing-plan-two">Choose Plan<i class="isax isax-arrow-right-3 fs-10 ms-1"></i></a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 d-flex">
                                <div class="pricing-item flex-fill">
                                        <h5 class="mb-2">Premium</h5>
                                        <h1 class="mb-2 text-primary"><sup class="me-1">$</sup>299</h1>
                                        <h6 class="fw-normal">Designed for large-scale learning with robust features and custom branding.</h6>
                                        <div class="border-top pt-3 mt-3">
                                        <p class="d-flex align-items-center mb-2"><i class="fa-solid fa-circle fs-5 me-2"></i>Unlimited courses</p>
                                        <p class="d-flex align-items-center mb-2"><i class="fa-solid fa-circle fs-5 me-2"></i>Advanced course creation tools</p>
                                        <p class="d-flex align-items-center mb-2"><i class="fa-solid fa-circle fs-5 me-2"></i>Detailed student analytics</p>
                                        <p class="d-flex align-items-center mb-2"><i class="fa-solid fa-circle fs-5 me-2"></i>100 GB storage</p>
                                        <p class="d-flex align-items-center mb-2"><i class="fa-solid fa-circle fs-5 me-2"></i>Integration with third-party tools</p>
                                        <p class="d-flex align-items-center mb-0"><i class="fa-solid fa-circle fs-5 me-2"></i>Completion certificates</p>
                                        </div>
                                        <a href="#" class="btn btn-secondary w-100 mt-3" data-bs-toggle="modal" data-bs-target="#pricing-plan-two">Choose Plan<i class="isax isax-arrow-right-3 fs-10 ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- pricing plan -->

    <!-- pricing plan -->
    <div class="modal fade pricing-modal" id="pricing-plan-two">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="fw-bold">Pricing Plan</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                    <div class="modal-body">
                        <form action="{{url('instructor-plans')}}">
                        <div class="row row-gap-3">
                        <div class="col-lg-8">
                            <div class="pay-meth">
                            <h5 class="fs-18 mb-3">Payment Method</h5>
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item mb-3" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Debit or Credit Card</button>
                                </li>
                                <li class="nav-item mb-3" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">PayPal</button>
                                </li>
                                <li class="nav-item mb-3" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Stripe</button>
                                </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Name on Card<span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>			
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Card Number<span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Expiration Date<span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">CVV<span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-2">
                            <h5 class="fs-18 mb-3">Billing Address</h5>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Address<span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Country<span class="text-danger"> *</span></label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>USA</option>
                                            <option>Canada</option>
                                            <option>Germany</option>
                                            <option>France</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">State<span class="text-danger"> *</span></label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>California</option>
                                            <option>New York</option>
                                            <option>Texas</option>
                                            <option>Florida</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">City<span class="text-danger"> *</span></label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Los Angeles</option>
                                            <option>San Diego</option>
                                            <option>Fresno</option>
                                            <option>San Francisco</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Postal Code <span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Email Address<span class="text-danger"> *</span></label>
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>			
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Password<span class="text-danger"> *</span></label>
                                                <div class="position-relative">
                                                    <input type="password" class="pass-input form-control">
                                                    <span class="isax toggle-password text-gray-7 fs-14 isax-eye-slash"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="mt-2">
                                    <h5 class="fs-18 mb-3">Billing Address</h5>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label">Address<span class="text-danger"> *</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Country<span class="text-danger"> *</span></label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>USA</option>
                                                    <option>Canada</option>
                                                    <option>Germany</option>
                                                    <option>France</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">State<span class="text-danger"> *</span></label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>California</option>
                                                    <option>New York</option>
                                                    <option>Texas</option>
                                                    <option>Florida</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">City<span class="text-danger"> *</span></label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>Los Angeles</option>
                                                    <option>San Diego</option>
                                                    <option>Fresno</option>
                                                    <option>San Francisco</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Postal Code <span class="text-danger"> *</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Email Address<span class="text-danger"> *</span></label>
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>			
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Password<span class="text-danger"> *</span></label>
                                                <div class="position-relative">
                                                    <input type="password" class="pass-input form-control">
                                                    <span class="isax toggle-password text-gray-7 fs-14 isax-eye-slash"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="mt-2">
                                    <h5 class="fs-18 mb-3">Billing Address</h5>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label">Address<span class="text-danger"> *</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Country<span class="text-danger"> *</span></label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>USA</option>
                                                    <option>Canada</option>
                                                    <option>Germany</option>
                                                    <option>France</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">State<span class="text-danger"> *</span></label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>California</option>
                                                    <option>New York</option>
                                                    <option>Texas</option>
                                                    <option>Florida</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">City<span class="text-danger"> *</span></label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>Los Angeles</option>
                                                    <option>San Diego</option>
                                                    <option>Fresno</option>
                                                    <option>San Francisco</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Postal Code <span class="text-danger"> *</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#successful-modal">Proceed to Pay $99.00</a>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="subscription-details">
                                <h5 class="fs-18 mb-3">Subscription Details</h5>
                                <p class="mb-2">Plan Name: <span class="text-gray-9 float-end fw-medium">Basic</span></p>
                                <p class="mb-2">Plan Amount: <span class="text-gray-9 float-end fw-medium">$99.00</span></p>
                                <p class="mb-2">Tax: <span class="text-gray-9 float-end fw-medium">$0.00</span></p>
                                <p>Total: <span class="text-gray-9 float-end fw-medium">$99.00</span></p>
                            </div>
                        </div>
                        </div>
                    </form>
                    </div>
            </div>
        </div>
    </div>
    <!-- pricing plan -->

    <div class="modal fade successful-modal" id="successful-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center custom-modal-body">
                    <span class="avatar avatar-lg bg-success rounded-circle mb-3">
                        <i class="fa-solid fa-check fs-14 text-white"></i>											
                    </span>
                    <div>
                        <h5 class="mb-1">Payment Successful</h5>
                        <p class="mb-3">Your purchase of the Basic Plan has been completed with reference number <a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#view_invoice">#INV1245</a></p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn bg-gray-100 rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#pricing-plan">Back to Plans</a>
                            <a href="#" class="btn btn-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#view_invoice">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- View Invoice -->
    <div class="modal fade" id="view_invoice">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Invoice</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="border-bottom mb-3">
                        <div class="row justify-content-between align-items-center flex-wrap row-gap-4">
                            <div class="col-md-6">
                                <div class="mb-2 invoice-logo-white">
                                    <img src="{{URL::asset('build/img/logo.svg')}}" class="img-fluid" alt="logo">
                                </div>
                                <p class="mb-2">3099 Kennedy Court Framingham, MA 01702</p>
                            </div>
                            <div class="col-md-6">
                                <div class=" text-end mb-3">
                                    <h6 class="text-default mb-1 text-secondary fs-16">#OI0010</h6>
                                    <p class="mb-1">Created Date : <span class="text-gray-9">Aug 25, 2025</span> </p>
                                    <p>Due Date : <span class="text-gray-9">Aug 30, 2025</span> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom mb-3">
                        <div class="row g-4">
                            <div class="col-lg-5">
                                <span class="mb-3 d-flex">From</span>
                                <div>
                                    <h6 class="mb-2 fs-16">Thomas Lawler</h6>
                                    <p class="fs-14 mb-1">2077 Chicago Avenue Orosi, CA 93647</p>
                                    <p class="fs-14 mb-1">Email :thomaslawler@example.com</p>
                                    <p class="fs-14">Phone : +1 987 654 3210</p>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <span class="mb-3 d-flex">To</span>
                                <div>
                                    <h6 class="mb-2">Ronald Richard</h6>
                                    <p class="fs-14 mb-1">3103 Trainer Avenue Peoria, IL 61602</p>
                                    <p class="fs-14 mb-1">Email : <a href="#">adre3@example.com</a></p>
                                    <p class="fs-14">Phone : <a href="#">+1 987 471 6589</a></p>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3 text-end">
                                    <span class="mb-1 d-block">Payment Status</span>
                                    <span class="badge bg-success badge-md d-inline-flex align-items-center fs-10 fw-normal mb-4"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                    <div>
                                        <img src="{{URL::asset('build/img/icon/qr.svg')}}" class="img-fluid" alt="QR">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="table-responsive">
                            <table class="table invoice-table">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="w-50 bg-light-400">Description</th>
                                        <th class="text-center bg-light-400">Qty</th>
                                        <th class="text-end bg-light-400">Cost</th>
                                        <th class="text-end bg-light-400">Discount</th>
                                        <th class="text-end bg-light-400">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="text-gray-9 fw-semibold">Basic Plan</p>
                                        </td>
                                        <td class="text-gray text-center">1</td>
                                        <td class="text-gray text-end">$120</td>
                                        <td class="text-gray text-end">$0</td>
                                        <td class="text-gray text-end">$120</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="border-bottom mb-3 pb-3">
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-between align-items-center border-bottom my-2 pb-2 pe-3">
                                    <p class="text-gray mb-0">Sub Total</p>
                                    <p class="text-gray-9 fw-medium">$120</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center border-bottom my-2 pb-2 pe-3">
                                    <p class="mb-0">Discount (0%)</p>
                                    <p class="text-gray-9 fs-14 fw-medium">$0</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3 pe-3">
                                    <p class="mb-0">VAT (5%)</p>
                                    <p class="text-gray-9 fs-14 fw-medium mb-2">$0</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-2 pe-3">
                                    <h6 class="fs-16">Total Amount</h6>
                                    <h6 class="fs-16">$120</h6>
                                </div>
                                <p>
                                    Amount in Words : Dollar One Hundred Twenty 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center gy-3">
                        <div class="col-lg-9">
                            <div class="mb-3">
                                <h6 class="mb-1 fs-16">Notes</h6>
                                <p>Invoice for course purchase, covering course fee.</p>
                            </div>
                            <div>
                                <h6 class="mb-1 fs-16">Terms and Conditions</h6>
                                <p>Full payment grants non-transferable access to the course.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-end pe-4 mb-2">
                                <img src="{{URL::asset('build/img/sign.svg')}}" class="img-fluid" alt="sign">
                            </div>
                            <div class="text-end">
                                <h6 class="fs-16 pe-3 mb-2">Ted M. Davis</h6>
                                <p>Assistant Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /View Invoice -->

    <!-- add new card -->
    <div class="modal fade" id="add_new_card">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Add New Card</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <form action="{{url('instructor-plans')}}">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Payment Method<span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Credit Card</option>
                                        <option>Debit Card</option>
                                        <option>Paypal</option>
                                        <option>Stripe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Card Number<span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>	
                            <div class="col-md-6">
                                <div class="mb-3 add-card-date">
                                    <label class="form-label">Expiration Date<span class="text-danger"> *</span></label>
                                    <div class="input-icon position-relative calender-input">
                                        <span class="input-icon-addon">
                                            <i class="isax isax-calendar"></i>
                                        </span>
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">CVV<span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>	
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Name on Card<span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>								
                    
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn bg-gray-100 rounded-pill me-2" type="button" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-secondary rounded-pill" type="submit">Add Card</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- add new card -->

    <!-- edit card -->
    <div class="modal fade" id="edit_card">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Edit Card</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <form action="{{url('instructor-plans')}}">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Payment Method<span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Debit Card</option>
                                        <option>Credit Card</option>
                                        <option>Debit Card</option>
                                        <option>Paypal</option>
                                        <option>Stripe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Card Number<span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" value="9834 7923 4098 1568">
                                </div>
                            </div>	
                            <div class="col-md-6">
                                <div class="mb-3 add-card-date">
                                    <label class="form-label">Expiration Date<span class="text-danger"> *</span></label>
                                    <div class="input-icon position-relative calender-input">
                                        <span class="input-icon-addon">
                                            <i class="isax isax-calendar"></i>
                                        </span>
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="02/25">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">CVV<span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" value="725">
                                </div>
                            </div>	
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Name on Card<span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" value="Eugene Andre">
                                </div>
                            </div>								
                    
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn bg-gray-100 rounded-pill me-2" type="button" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-secondary rounded-pill" type="submit">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- edit card -->

    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center custom-modal-body">
                    <span class="avatar avatar-lg bg-secondary-transparent rounded-circle mb-2">
                        <i class="isax isax-trash fs-24 text-danger"></i>
                    </span>
                    <div>
                        <h4 class="mb-2">Delete Card</h4>
                        <p class="mb-3">Are you sure you want to delete card?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn bg-gray-100 rounded-pill me-2" data-bs-dismiss="modal">Cancel</a>
                            <a href="#" class="btn btn-secondary rounded-pill">Yes, Remove All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->

@endif

@if (Route::is(['instructor-quiz-questions']))
    <!-- Add Question -->
    <div class="modal fade" id="add_question">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="fw-bold">Add New Question</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <form action="{{url('instructor-quiz-questions')}}">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Question <span class="text-danger"> *</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Question Type <span class="text-danger"> *</span></label>
                            <select class="select">
                                <option>Select</option>
                                <option>Multiple choice</option>
                                <option>True or False</option>
                            </select>
                        </div>
                        <h6 class="mb-3">Answer</h6>
                        <div class="add-choice-data">
                            <div class="mb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <label class="form-label">Choice 1 <span class="text-danger"> *</span></label>
                                    <div class="form-check form-switch form-switch-end">
                                        <label class="form-check-label" for="switch-sm">Correct Answer</label>
                                        <input class="form-check-input" type="checkbox" role="switch" id="switch-sm" checked>
                                    </div>
                                </div>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <a href="#" class="text-secondary d-inline-flex align-items-center fw-medium add-choice">
                            <i class="isax isax-add me-1"></i>Add New
                        </a>
                    </div>
                    <div class="modal-footer">
                        <button class="btn bg-gray-100 rounded-pill me-2" type="button" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-secondary rounded-pill" type="submit">Add Question</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Question -->

    <!-- Add Question -->
    <div class="modal fade" id="edit_question">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="fw-bold">Edit Question</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <form action="{{url('instructor-quiz-questions')}}">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Question <span class="text-danger"> *</span></label>
                            <input type="text" class="form-control" value="Which of the following is a principle of UX design?">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Question Type <span class="text-danger"> *</span></label>
                            <select class="select">
                                <option>Select</option>
                                <option selected>Multiple choice</option>
                                <option>True or False</option>
                            </select>
                        </div>
                        <h6 class="mb-3">Answer</h6>
                        <div class="mb-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <label class="form-label">Choice 1 <span class="text-danger"> *</span></label>
                                <div class="form-check form-switch form-switch-end">
                                    <label class="form-check-label correct-ans" for="switch-sm3">Correct Answer</label>
                                    <input class="form-check-input" type="checkbox" role="switch" id="switch-sm3" checked>
                                </div>
                            </div>
                            <input type="text" class="form-control" value="Minimalistic Design">
                        </div>
                        <div class="mb-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <label class="form-label">Choice 2 <span class="text-danger"> *</span></label>
                                <div class="form-check form-switch form-switch-end">
                                    <label class="form-check-label" for="switch-sm4">Correct Answer</label>
                                    <input class="form-check-input" type="checkbox" role="switch" id="switch-sm4">
                                </div>
                            </div>
                            <input type="text" class="form-control" value="User-Centered Design">
                        </div>
                        <div class="mb-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <label class="form-label">Choice 3 <span class="text-danger"> *</span></label>
                                <div class="form-check form-switch form-switch-end">
                                    <label class="form-check-label" for="switch-sm5">Correct Answer</label>
                                    <input class="form-check-input" type="checkbox" role="switch" id="switch-sm5">
                                </div>
                            </div>
                            <input type="text" class="form-control" value="Gradient Usage">
                        </div>
                        <div class="mb-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <label class="form-label">Choice 4 <span class="text-danger"> *</span></label>
                                <div class="form-check form-switch form-switch-end">
                                    <label class="form-check-label" for="switch-sm6">Correct Answer</label>
                                    <input class="form-check-input" type="checkbox" role="switch" id="switch-sm6">
                                </div>
                            </div>
                            <input type="text" class="form-control" value="Typography Hierarchy">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn bg-gray-100 rounded-pill me-2" type="button" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-secondary rounded-pill" type="submit">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Question -->

    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center custom-modal-body">
                    <span class="avatar avatar-lg bg-secondary-transparent rounded-circle mb-2">
                        <i class="isax isax-trash fs-24 text-danger"></i>
                    </span>
                    <div>
                        <h4 class="mb-2">Delete Quiz</h4>
                        <p class="mb-3">Are you sure you want to delete Quiz 
                            “Information About UI/UX Design Degree”?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0);" class="btn bg-gray-100 rounded-pill me-2" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-secondary rounded-pill">Yes, Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->

@endif

@if (Route::is(['instructor-quiz-results']))
    <!-- Add Question -->
    <div class="modal fade" id="add_quiz">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="fw-bold">Add New Quiz</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <form action="{{url('instructor-quiz-questions')}}">
                    <div class="modal-body pb-0">
                        <div class="mb-3">
                            <label class="form-label">Course <span class="text-danger"> *</span></label>
                            <select class="select">
                                <option>Select</option>
                                <option>Multiple choice</option>
                                <option>Learn JavaScript and Express to become a Expert</option>
                                <option>Introduction to Python Programming</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Quiz Title <span class="text-danger"> *</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">No of Questions <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Total Marks <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Pass Mark <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Duration <span class="text-danger"> *</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control timepicker" placeholder="dd/mm/yyyy" value="02-05-2024">
                                        <span class="input-icon-addon">
                                            <i class="isax isax-clock"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn bg-gray-100 rounded-pill me-2" type="button" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-secondary rounded-pill" type="submit">Add Quiz</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Question -->

    <!-- Edit Question -->
    <div class="modal fade" id="edit_quiz">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="fw-bold">Edit Quiz</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <form action="{{url('instructor-quiz-questions')}}">
                    <div class="modal-body pb-0">
                        <div class="mb-3">
                            <label class="form-label">Course <span class="text-danger"> *</span></label>
                            <select class="select">
                                <option>Select</option>
                                <option selected>Information About UI/UX Design Degree</option>
                                <option>Learn JavaScript and Express to become a Expert</option>
                                <option>Introduction to Python Programming</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Quiz Title <span class="text-danger"> *</span></label>
                            <input type="text" class="form-control" value="Information About UI/UX Design Degree">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">No of Questions <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" value="10">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Total Marks <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" value="100">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Pass Mark <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" value="50">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Duration <span class="text-danger"> *</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control timepicker" placeholder="dd/mm/yyyy" value="02-05-2024">
                                        <span class="input-icon-addon">
                                            <i class="isax isax-clock"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn bg-gray-100 rounded-pill me-2" type="button" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-secondary rounded-pill" type="submit">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Question -->

    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center custom-modal-body">
                    <span class="avatar avatar-lg bg-secondary-transparent rounded-circle mb-2">
                        <i class="isax isax-trash fs-24 text-danger"></i>
                    </span>
                    <div>
                        <h4 class="mb-2">Delete Quiz</h4>
                        <p class="mb-3">Are you sure you want to delete Quiz?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0);" class="btn bg-gray-100 rounded-pill me-2" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-secondary rounded-pill">Yes, Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endif

@if (Route::is(['instructor-quiz']))
    <!-- Add Question -->
    <div class="modal fade" id="add_quiz">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="fw-bold">Add New Quiz</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <form action="{{url('instructor-quiz-questions')}}">
                    <div class="modal-body pb-0">
                        <div class="mb-3">
                            <label class="form-label">Course <span class="text-danger"> *</span></label>
                            <select class="select">
                                <option>Select</option>
                                <option>Information About UI/UX Design Degree</option>
                                <option>Learn JavaScript and Express to become a Expert</option>
                                <option>Introduction to Python Programming</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Quiz Title <span class="text-danger"> *</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">No of Questions <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Total Marks <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Pass Mark <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Duration <span class="text-danger"> *</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control timepicker" placeholder="dd/mm/yyyy" value="02-05-2024">
                                        <span class="input-icon-addon">
                                            <i class="isax isax-clock"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn bg-gray-100 rounded-pill me-2" type="button" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-secondary rounded-pill" type="submit">Add Quiz</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Question -->

    <!-- Edit Question -->
    <div class="modal fade" id="edit_quiz">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="fw-bold">Edit Quiz</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <form action="{{url('instructor-quiz-questions')}}">
                    <div class="modal-body pb-0">
                        <div class="mb-3">
                            <label class="form-label">Course <span class="text-danger"> *</span></label>
                            <select class="select">
                                <option>Select</option>
                                <option selected>Information About UI/UX Design Degree</option>
                                <option>Learn JavaScript and Express to become a Expert</option>
                                <option>Introduction to Python Programming</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Quiz Title <span class="text-danger"> *</span></label>
                            <input type="text" class="form-control" value="Information About UI/UX Design Degree">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">No of Questions <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" value="10">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Total Marks <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" value="100">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Pass Mark <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" value="50">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Duration <span class="text-danger"> *</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control timepicker" placeholder="dd/mm/yyyy" value="02-05-2024">
                                        <span class="input-icon-addon">
                                            <i class="isax isax-clock"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn bg-gray-100 rounded-pill me-2" type="button" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-secondary rounded-pill" type="submit">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Question -->

    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center custom-modal-body">
                    <span class="avatar avatar-lg bg-danger-transparent rounded-circle mb-2">
                        <i class="isax isax-trash fs-24 text-danger"></i>
                    </span>
                    <div>
                        <h4 class="mb-2">Delete Quiz</h4>
                        <p class="mb-3">Are you sure you want to delete Quiz?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0);" class="btn bg-gray-100 rounded-pill me-2" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-secondary rounded-pill">Yes, Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endif

@if (Route::is(['instructor-settings']))
    <!-- Delete Modal -->
    <div class="modal fade" id="delete_account">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Delete Account</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <h6 class="mb-1">Why Are You Deleting Your Account?</h6>
                        <p>We're sorry to see you go! To help us improve, please let us know your reason for deleting your account</p>
                    </div>
                    <div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="reason" id="Radio-sm-1">
                            <label class="fw-medium form-check-label text-gray-9" for="Radio-sm-1">
                                No longer using the service
                            </label>
                            <p>I no longer need this service and won’t be using it in the future.</p>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="reason" id="Radio-sm-2">
                            <label class="fw-medium form-check-label text-gray-9" for="Radio-sm-2">
                                Privacy concerns
                            </label>
                            <p>I am concerned about how my data is handled and want to remove my information.</p>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="reason" id="Radio-sm-3">
                            <label class="fw-medium form-check-label text-gray-9" for="Radio-sm-3">
                                Too many notifications/emails
                            </label>
                            <p>I’m overwhelmed by the volume of notifications or emails and would like to reduce them.</p>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="reason" id="Radio-sm-4">
                            <label class="fw-medium form-check-label text-gray-9" for="Radio-sm-4">
                                Poor user experience
                            </label>
                            <p>I’ve had difficulty using the platform, and it didn’t meet my expectations.</p>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="reason" id="Radio-sm-5">
                            <label class="fw-medium form-check-label text-gray-9" for="Radio-sm-5">
                                Other (Please specify)
                            </label>
                        </div>
                        <div>
                            <textarea rows="3" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn bg-gray-100 rounded-pill me-2" type="button" data-bs-dismiss="modal">Keep My Account</button>
                    <button class="btn btn-secondary rounded-pill" type="button">Delete Account</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endif

@if (Route::is(['instructor-statements']))
    <div class="modal fade" id="view_invoice">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Invoice</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="border-bottom mb-3">
                        <div class="row justify-content-between align-items-center flex-wrap row-gap-4">
                            <div class="col-md-6">
                                <div class="mb-2 invoice-logo-white">
                                    <img src="{{URL::asset('build/img/logo.svg')}}" class="img-fluid" alt="logo">
                                </div>
                                <p class="mb-2">3099 Kennedy Court Framingham, MA 01702</p>
                            </div>
                            <div class="col-md-6">
                                <div class=" text-end mb-3">
                                    <h6 class="text-default mb-1 text-secondary fs-16">#OI0010</h6>
                                    <p class="mb-1">Created Date : <span class="text-gray-9">Aug 25, 2025</span> </p>
                                    <p>Due Date : <span class="text-gray-9">Aug 30, 2025</span> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom mb-3">
                        <div class="row g-4">
                            <div class="col-lg-5">
                                <span class="mb-3 d-flex">From</span>
                                <div>
                                    <h6 class="mb-2 fs-16">Thomas Lawler</h6>
                                    <p class="fs-14 mb-1">2077 Chicago Avenue Orosi, CA 93647</p>
                                    <p class="fs-14 mb-1">Email :thomaslawler@example.com</p>
                                    <p class="fs-14">Phone : +1 987 654 3210</p>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <span class="mb-3 d-flex">To</span>
                                <div>
                                    <h6 class="mb-2">Ronald Richard</h6>
                                    <p class="fs-14 mb-1">3103 Trainer Avenue Peoria, IL 61602</p>
                                    <p class="fs-14 mb-1">Email : <a href="javascript:void(0);">adre3@example.com</a></p>
                                    <p class="fs-14">Phone : <a href="javascript:void(0);">+1 987 471 6589</a></p>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3 text-end">
                                    <span class="mb-1 d-block">Payment Status</span>
                                    <span class="badge bg-success badge-md d-inline-flex align-items-center fs-10 fw-normal mb-4"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                    <div>
                                        <img src="{{URL::asset('build/img/icon/qr.svg')}}" class="img-fluid" alt="QR">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="table-responsive">
                            <table class="table invoice-table">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="w-50 bg-light-400">Description</th>
                                        <th class="text-center bg-light-400">Qty</th>
                                        <th class="text-end bg-light-400">Cost</th>
                                        <th class="text-end bg-light-400">Discount</th>
                                        <th class="text-end bg-light-400">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="text-gray-9">Information About UI/UX Design Degree</p>
                                        </td>
                                        <td class="text-gray text-center">1</td>
                                        <td class="text-gray text-end">$120</td>
                                        <td class="text-gray text-end">$0</td>
                                        <td class="text-gray text-end">$120</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="border-bottom mb-3 pb-3">
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-between align-items-center border-bottom my-2 pb-2 pe-3">
                                    <p class="text-gray mb-0">Sub Total</p>
                                    <p class="text-gray-9 fw-medium">$120</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center border-bottom my-2 pb-2 pe-3">
                                    <p class="mb-0">Discount (0%)</p>
                                    <p class="text-gray-9 fs-14 fw-medium">$0</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3 pe-3">
                                    <p class="mb-0">VAT (5%)</p>
                                    <p class="text-gray-9 fs-14 fw-medium mb-2">$0</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-2 pe-3">
                                    <h6 class="fs-16">Total Amount</h6>
                                    <h6 class="fs-16">$120</h6>
                                </div>
                                <p>
                                    Amount in Words : Dollar One Hundred Twenty 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center gy-3">
                        <div class="col-lg-9">
                            <div class="mb-3">
                                <h6 class="mb-1 fs-16">Notes</h6>
                                <p>Invoice for course purchase, covering course fee, discounts, and applicable taxes.</p>
                            </div>
                            <div>
                                <h6 class="mb-1 fs-16">Terms and Conditions</h6>
                                <p>Full payment grants non-transferable access to the course, subject to the provider’s refund policy. </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-end pe-4 mb-2">
                                <img src="{{URL::asset('build/img/icons/sign.svg')}}" class="img-fluid" alt="sign">
                            </div>
                            <div class="text-end">
                                <h6 class="fs-16 pe-3 mb-2">Ted M. Davis</h6>
                                <p>Assistant Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if (Route::is(['notifications']))
    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center custom-modal-body">
                    <span class="avatar avatar-lg bg-danger-transparent rounded-circle mb-2">
                        <i class="isax isax-trash fs-24 text-danger"></i>
                    </span>
                    <div>
                        <h4 class="mb-2">Delete Notification</h4>
                        <p class="mb-3">Are you sure you want to delete notification?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0);" class="btn bg-gray-100 rounded-pill me-2" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-secondary rounded-pill">Yes, Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->

    <!-- Delete All Modal -->
    <div class="modal fade" id="delete_all_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center custom-modal-body">
                    <span class="avatar avatar-lg bg-danger-transparent rounded-circle mb-2">
                        <i class="isax isax-trash fs-24 text-danger"></i>
                    </span>
                    <div>
                        <h4 class="mb-2">Delete All Notifications</h4>
                        <p class="mb-3">Are you sure you want to delete all notifications?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0);" class="btn bg-gray-100 rounded-pill me-2" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-secondary rounded-pill">Yes, Delete All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endif

@if (Route::is(['student-billing-address']))
    <!-- Add Billing -->
    <div class="modal fade" id="add_billing">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Add Billing Address</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <form action="{{url('student-billing-address')}}">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Title <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Address <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Country <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>United states of America</option>
                                        <option>Canada</option>
                                        <option>Germany</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">State <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>California</option>
                                        <option>New York</option>
                                        <option>Texas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">City <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Los Angeles</option>
                                        <option>San Diego</option>
                                        <option>Fresno</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Postal Code <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn bg-gray-100 rounded-pill me-2" type="button" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-secondary rounded-pill" type="submit">Add Address</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Billing -->

    <!-- Edit Billing -->
    <div class="modal fade" id="edit_billing">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Edit Billing Address</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <form action="{{url('student-billing-address')}}">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Title <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" value="Home">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Address <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" value="16 Lake Floyd Circle">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Country <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>United states of America</option>
                                        <option>Canada</option>
                                        <option>Germany</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">State <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>California</option>
                                        <option>New York</option>
                                        <option>Texas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">City <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>Los Angeles</option>
                                        <option>San Diego</option>
                                        <option>Fresno</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Postal Code <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" value="90001">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-check form-check-md my-4">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultaccount">
                                    <label class="form-check-label" for="defaultaccount">Yes, I'd like to delete my account</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn bg-gray-100 rounded-pill me-2" type="button" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-secondary rounded-pill" type="submit">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Billing -->

    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center custom-modal-body">
                    <span class="avatar avatar-lg bg-secondary-transparent rounded-circle mb-2">
                        <i class="isax isax-trash fs-24 text-danger"></i>
                    </span>
                    <div>
                        <h4 class="mb-2">Delete Address</h4>
                        <p class="mb-3">Are you sure you want to delete address?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn bg-gray-100 rounded-pill me-2" data-bs-dismiss="modal">Cancel</a>
                            <a href="#" class="btn btn-secondary rounded-pill">Yes, Remove All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endif

@if (Route::is(['student-certificates']))
    <!-- View Certificate -->
    <div class="modal fade" id="view_certificate">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>View Certificate</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div><img src="{{URL::asset('build/img/icon/certificate.svg')}}" class="img-fluid" alt=""></div>
                    <div class="text-end mt-4">
                        <a href="#" class="btn btn-secondary rounded-pill"><i class="isax isax-import me-2"></i>Download</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /View Certificate -->
@endif

@if (Route::is(['instructor-tickets']))
    <!-- Add Ticket -->
    <div class="modal fade" id="add_ticket">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="fw-bold">Add Ticket</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <form action="{{url('student-tickets')}}">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Ticket Title <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Category <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Mailing Issues</option>
                                        <option>Language Issues</option>
                                        <option>Installation Error</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Priority <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>High</option>
                                        <option>Low</option>
                                        <option>Medium</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <div class="summernote"><p>Enter Ticket Detail</p></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Attachments</label>
                                    <div class="file-upload drag-file w-100 d-flex align-items-center justify-content-center flex-column">
                                        <span class="upload-img mb-2"><i class="isax isax-folder5 fs-24"></i></span>
                                        <p class="mb-1 text-gray-9 fw-medium">Drag and drop your files</p>
                                        <p class="mb-2 fs-12">Accept File Type: doc,docx,jpg,jpeg,png,txt,pdf</p>
                                        <input type="file" accept="video/image">
                                        <span class="btn mt-2 btn-secondary rounded-pill"><i class="isax isax-document-upload me-1"></i>Upload</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn bg-gray-100 rounded-pill me-2" type="button" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-secondary rounded-pill" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Ticket -->

    <!-- Edit Ticket -->
    <div class="modal fade" id="edit_ticket">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="fw-bold">Edit Ticket</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="isax isax-close-circle5"></i>
                    </button>
                </div>
                <form action="{{url('student-tickets')}}">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Ticket Title <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" value="Issue with Course Notification Emails">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Category <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>Mailing Issues</option>
                                        <option>Language Issues</option>
                                        <option>Installation Error</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Priority <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>High</option>
                                        <option>Low</option>
                                        <option>Medium</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <div class="summernote"><p>Enter Ticket Detail</p></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Attachments</label>
                                    <div class="file-upload drag-file w-100 d-flex align-items-center justify-content-center flex-column">
                                        <span class="upload-img mb-2"><i class="isax isax-folder5 fs-24"></i></span>
                                        <p class="mb-1 text-gray-9 fw-medium">Drag and drop your files</p>
                                        <p class="mb-2 fs-12">Accept File Type: doc,docx,jpg,jpeg,png,txt,pdf</p>
                                        <input type="file" accept="video/image">
                                        <span class="btn mt-2 btn-secondary rounded-pill"><i class="isax isax-document-upload me-1"></i>Upload</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn bg-gray-100 rounded-pill me-2" type="button" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-secondary rounded-pill" type="submit">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Ticket -->

    <!-- Ticket Details -->
    <div class="modal fade" id="ticket_details">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="d-inline-flex align-items-center">Ticket Details <span class="text-primary fs-14 ms-2">#TIC010</span></h5>
                    <div class="d-flex align-items-center justify-content-end">
                        <span class="badge badge-sm bg-purple d-inline-flex align-items-center me-2"><i class="fa-solid fa-circle fs-5 me-1"></i>Opened</span>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="isax isax-close-circle5"></i>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <h6 class="mb-1">Category</h6>
                                <p>Mailing Issues</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <h6 class="mb-1">Date</h6>
                                <p>26 Jul 2025</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <h6 class="mb-1">Priority</h6>
                                <span class="badge bg-soft-danger badge-sm d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>High</span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <h6 class="mb-1">Subject</h6>
                                <p>Issue with Course Notification Emails</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div>
                                <h6 class="mb-1">Description</h6>
                                <p>I am not receiving important emails from the LMS platform, such as course notifications, 
                                    enrollment confirmations, or assignment updates. Additionally, some 
                                    students have reported that they are not receiving emails about live classes or announcements.
                                    This issue is affecting communication and timely updates for both instructors and students. 
                                    Please investigate and resolve this issue as soon as possible.
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Ticket Details -->

    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center custom-modal-body">
                    <span class="avatar avatar-lg bg-danger-transparent rounded-circle mb-2">
                        <i class="isax isax-trash fs-24 text-danger"></i>
                    </span>
                    <div>
                        <h4 class="mb-2">Delete Ticket</h4>
                        <p class="mb-3">Are you sure you want to delete ticket?</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn bg-gray-100 rounded-pill me-2" data-bs-dismiss="modal">Cancel</a>
                            <a href="#" class="btn btn-secondary rounded-pill">Yes, Remove All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endif

