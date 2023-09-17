@include('admin.layouts.header')
@include('admin.layouts.nav')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Course</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin">DashBoard</a></li>

                    <li class="breadcrumb-item active">Edit Course</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="row m-10">
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Course</h3>
            </div>

            <form>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="image" class="form-label text-right">Course Image<span
                                    class="text-danger">*</span> :</label>
                            <div class="form-group row">
                                <div class="col-md-10 col-8">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input class="custom-file-input" id="courseimage" type="file"
                                                onchange="abc()">
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="imageerror" style="color:red;font-size:16px"></div>
                                </div>

                                <div class="col-md-2 col-4">
                                    <button type="button" class="btn btn-secondary btn-tooltip float-left"
                                        data-toggle="tooltip" data-placement="top"
                                        title="Image with 1:1 Aspet Raio Required. ie Image with Resolution 300 x 300px, 250 x 250px ..etc.">
                                        <i class="fa fa-info" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group ">
                                <label for="text" class="form-label text-right">Choose Department<span
                                        class="text-danger">*</span> :</label>
                                <select class="form-control select2bs4" id="department" style="width: 100%;">
                                    @foreach ($Departments as $Department)
                                        <option value="{{ $Department->id }}" @if ($Department->id == $Course->department) selected @endif>{{ $Department->departments }}</option>
                                    @endforeach
                                </select>
                                <div class="departmenterror" style="color:red;font-size:16px"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group ">
                                <label for="text" class="form-label text-right">Choose Course Year<span
                                        class="text-danger">*</span> :</label>
                                <select class="form-control select2bs4" id="courseyr" style="width: 100%;">
                                    @foreach ($CourseYears as $CourseYear)
                                        <option value="{{ $CourseYear->id }}"
                                            @if ($CourseYear->id == $Course->course_year) selected @endif>
                                            {{ $CourseYear->course_year }}</option>
                                    @endforeach
                                </select>
                                <div class="courseyrerror" style="color:red;font-size:16px"></div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="text" class="form-label text-right">Course Name<span
                                        class="text-danger">*</span> :</label>
                                <input class="form-control" placeholder="Enter Course Name" name="coursename"
                                    type="text" value="{{ $Course->course_name }}" id="coursename">
                                <div class="coursenameerror" style="color:red;font-size:16px"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="text" class="form-label text-right">Batch<span
                                        class="text-danger">*</span> :</label>
                                <input class="form-control" placeholder="Enter Course Batch" name="batch"
                                    type="text" value="{{ $Course->batch }}" id="batch">
                                <div class="batcherror" style="color:red;font-size:16px"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="text" class="form-label text-right">Duration<span
                                        class="text-danger">*</span> :</label>
                                <input class="form-control" placeholder="Enter Course Duration" name="duration"
                                    value="{{ $Course->duration }}" type="text" id="duration">
                                <div class="durationerror" style="color:red;font-size:16px"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="text" class="form-label text-right">Course University<span
                                        class="text-danger">*</span> :</label>
                                <input class="form-control" placeholder="Enter Course University" name="university"
                                    type="text" value="{{ $Course->university }}" id="university">
                                <div class="universityerror" style="color:red;font-size:16px"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="image" class="form-label text-right">Course Time table<span
                                    class="text-danger">*</span> :</label>
                            <div class="form-group row">
                                <div class="col-md-10 col-8">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input class="custom-file-input" id="timetable" type="file"
                                                onchange="TimeTable()">
                                            <input type="hidden" id="CourseId" value="{{ $Course->id }}">
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="timetableerror" style="color:red;font-size:16px"></div>
                                </div>

                                <div class="col-md-2 col-4">
                                    <button type="button" class="btn btn-secondary btn-tooltip float-left"
                                        data-toggle="tooltip" data-placement="top"
                                        title="Image with 1:1 Aspet Ratio Required. ie Image with Resolution 300 x 300px, 250 x 250px ..etc.">
                                        <i class="fa fa-info" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="text" class="form-label text-right">Enroll Now<span
                                        class="text-danger">*</span> :</label>
                                <input class="form-control" placeholder="Enter Enroll Now Url" name="enrollnow"
                                    type="url" value="{{ $Course->enroll_now }}" id="enrollnow">
                                <div class="enrollnowerror" style="color:red;font-size:16px"></div>
                            </div>
                        </div>


                    </div>
                    <div class="card-footer">
                        <a class="btn btn-default " href="{{ route('coursetable') }}">Back</a>&emsp;
                        <button type="button" id="addBtn" class="btn btn-primary float-right"
                            onclick="CourseSave()"> Save </button>
                    </div>
            </form>

        </div>
    </div>
</div>
</div>
@include('admin.layouts.footer')

<script>
    function abc() {
        $('.imageerror').hide();

        var name = document.getElementById("courseimage").files[0].name;
        var form_data = new FormData();
        var ext = name.split('.').pop().toLowerCase();

        if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            $('.imageerror').show();
            $('.imageerror').text('Please select a valid image.');
            $('input#courseimage').val("");
            return false;
        }

        var oFReader = new FileReader();
        oFReader.onload = function(oFREvent) {
            var img = new Image();
            img.src = oFREvent.target.result;

            img.onload = function() {
                var width = img.width;
                var height = img.height;
                var desiredWidth = 348;
                var desiredHeight = 162;

                if (width !== desiredWidth || height !== desiredHeight) {
                    $('.imageerror').show();
                    $('.imageerror').text('Please select an image with dimensions ' + desiredWidth + 'x' +
                        desiredHeight + ' pixels.');
                    $('input#courseimage').val("");
                    return false;
                }

                // Additional code for image size check
                var f = document.getElementById("courseimage").files[0];
                var fsize = f.size || f.fileSize;
                if (fsize > 6000000) {
                    $('.imageerror').show();
                    $('.imageerror').text('Please select a 6MB image.');
                    $('input#courseimage').val("");
                    return false;
                }

                // If all validations pass, you can continue with form submission or other actions
            };
        };
        oFReader.readAsDataURL(document.getElementById("courseimage").files[0]);
    }

    function TimeTable() {

        var TimeTable = $('#timetable').get(0).files[0];

        if (TimeTable) {
            var fileReader = new FileReader();
            fileReader.onload = function(e) {
                var pdfData = new Uint8Array(e.target.result);
                var loadingTask = pdfjsLib.getDocument({
                    data: pdfData
                });

                loadingTask.promise.then(function(pdfDoc) {
                    var numPages = pdfDoc.numPages;
                    if (numPages > 0) {
                        // Validation passed
                        $('#timetable').css('border', '1px solid #CCC');
                        $('.timetableerror').hide();
                    } else {
                        // Invalid PDF
                        $('#timetable').focus();
                        $('#timetable').css('border', '1px solid red');
                        $('.timetableerror').show();
                        $('.timetableerror').text('Please select a valid PDF file.');
                        return false;
                    }
                }).catch(function(error) {
                    // Error occurred while loading the PDF
                    $('#timetable').focus();
                    $('#timetable').css('border', '1px solid red');
                    $('.timetableerror').show();
                    $('.timetableerror').text('Error loading the PDF file.');
                    return false;
                });
            };

            fileReader.readAsArrayBuffer(TimeTable);
        } else {
            // No file selected
            $('#timetable').focus();
            $('#timetable').css('border', '1px solid red');
            $('.timetableerror').show();
            $('.timetableerror').text('Please select a PDF file.');
            return false;
        }
    }





    function CourseSave() {

        var department = $('select#department').val();
        var CourseYear = $('select#courseyr').val();
        var CourseName = $('input#coursename').val();
        var Batch = $('input#batch').val();
        var Duration = $('input#duration').val();
        var University = $('input#university').val();
        var EnrollNow = $('input#enrollnow').val();
        var CourseImage = $('#courseimage').get(0).files[0];
        var CourseId = $('input#CourseId').val();


        //  else {
        //     $('#courseimage').focus();
        //     $('#courseimage').css('border', '1px solid red');
        //     $('.imageerror').show();
        //     $('.imageerror').text('Please select an image.');
        //     return false;
        // }


        if (CourseName === '') {
            $('#coursename').focus();
            $('#coursename').css('border', '1px solid red');
            $('.coursenameerror').show();
            $('.coursenameerror').text('Enter Academic Title*');
            return false;
        } else {
            $('#coursename').css('border', '1px solid #CCC');
        }

        $('.coursenameerror').hide();

        if (CourseYear === '') {
            $('#courseyr').focus();
            $('#courseyr').css('border', '1px solid red');
            $('.courseyrerror').show();
            $('.courseyrerror').text('Enter Academic Title*');
            return false;
        } else {
            $('#courseyr').css('border', '1px solid #CCC');
        }

        $('.courseyrerror').hide();


        if (Batch === '') {
            $('#batch').focus();
            $('#batch').css('border', '1px solid red');
            $('.batcherror').show();
            $('.batcherror').text('Enter Academic Title*');
            return false;
        } else {
            $('#batch').css('border', '1px solid #CCC');
        }

        $('.batcherror').hide();

        if (Duration === '') {
            $('#duration').focus();
            $('#duration').css('border', '1px solid red');
            $('.durationerror').show();
            $('.durationerror').text('Enter Academic Title*');
            return false;
        } else {
            $('#duration').css('border', '1px solid #CCC');
        }

        $('.durationerror').hide();

        if (University === '') {
            $('#university').focus();
            $('#university').css('border', '1px solid red');
            $('.universityerror').show();
            $('.universityerror').text('Enter Academic Title*');
            return false;
        } else {
            $('#university').css('border', '1px solid #CCC');
        }

        $('.universityerror').hide();

        var TimeTable = $('#timetable').get(0).files[0];




        if (EnrollNow === '') {
            $('#enrollnow').focus();
            $('#enrollnow').css('border', '1px solid red');
            $('.enrollnowerror').show();
            $('.enrollnowerror').text('Enter Academic Title*');
            return false;
        } else {
            $('#enrollnow').css('border', '1px solid #CCC');
        }

        $('.enrollnowerror').hide();


        data = new FormData();


        data.append('Cid', CourseId);
        data.append('image', $('#courseimage')[0].files[0]);
        data.append('department', department);
        data.append('courseyrid', CourseYear);
        data.append('coursename', CourseName);
        data.append('batch', Batch);
        data.append('duration', Duration);
        data.append('university', University);
        data.append('enrollnow', EnrollNow);
        data.append('timetable', $('#timetable')[0].files[0]);

        data.append('_token', '{{ csrf_token() }}');
        $.ajax({

            type: "POST",
            url: "/course-update",
            data: data,
            dataType: "json",
            contentType: false,
            //cache: false,
            processData: false,

            success: function(data) {
                if (data['success']) {

                    Swal.fire({
                        title: 'Course Update Success',
                        // text: "You won't be able to revert this!",
                        icon: 'success',
                        // showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = '/course';
                        }
                    })
                }
            }
        })
    }
</script>
