@if (!Route::is(['course-grid', 'course-list']))
    <!-- Filter -->
    <div class="showing-list">
        <div class="row">
            <div class="col-lg-6">
                <div class="d-flex align-items-center">
                    <div class="view-icons">
                        @if (!Route::is(['students-grid', 'students-grid2', 'students-list']))
                            <a href="{{ url('instructor-grid') }}"
                                class="grid-view {{ Request::is('instructor-grid') ? 'active' : '' }}"><i
                                    class="feather-grid"></i></a>
                            <a href="{{ url('instructor-list') }}"
                                class="list-view {{ Request::is('instructor-list') ? 'active' : '' }}"><i
                                    class="feather-list"></i></a>
                        @endif
                        @if (Route::is(['students-grid', 'students-grid2', 'students-list']))
                            <a href="{{ url('students-grid') }}"
                                class="grid-view {{ Request::is('students-grid', 'students-grid2') ? 'active' : '' }}"><i
                                    class="feather-grid"></i></a>
                            <a href="{{ url('students-list') }}"
                                class="list-view {{ Request::is('students-list') ? 'active' : '' }}"><i
                                    class="feather-list"></i></a>
                        @endif
                    </div>
                    <div class="show-result">
                        <h4>Showing 1-9 of 50 results</h4>
                    </div>
                </div>
            </div>
            @if (!Route::is(['students-grid', 'students-grid', 'students-list']))
                <div class="col-lg-6">
                    <div class="show-filter add-course-info">
                        <form action="#">
                            <div class="row gx-2 align-items-center">
                                <div class="col-md-6 col-item">
                                    <div class=" search-group">
                                        <i class="feather-search"></i>
                                        <input type="text" class="form-control" placeholder="Search our courses">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-item">
                                    <div class="form-group select-form mb-0">
                                        @livewire('select2-component-filter')
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <!-- /Filter -->
@endif
@if (Route::is(['course-grid', 'course-list']))
    <!-- Filter -->
    <div class="showing-list">
        <div class="row">
            <div class="col-lg-6">
                <div class="d-flex align-items-center">
                    <div class="view-icons">
                        <a href="{{ url('course-grid') }}"
                            class="grid-view {{ Request::is('course-grid') ? 'active' : '' }}"><i
                                class="feather-grid"></i></a>
                        <a href="{{ url('course-list') }}"
                            class="list-view {{ Request::is('course-list') ? 'active' : '' }}"><i
                                class="feather-list"></i></a>
                    </div>
                    <div class="show-result">
                        <h4>Showing 1-9 of 50 results</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="show-filter add-course-info">
                    <form action="#">
                        <div class="row gx-2 align-items-center">
                            <div class="col-md-6 col-item">
                                <div class=" search-group">
                                    <i class="feather-search"></i>
                                    <input type="text" class="form-control" placeholder="Search our courses">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-item">
                                <div class="form-group select-form mb-0">
                                    <select class="form-select select" id="sel1" name="sellist1">
                                        <option>Newly published </option>
                                        <option>published 1</option>
                                        <option>published 2</option>
                                        <option>published 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Filter -->
@endif
