@include('admin.layouts.header')
@include('admin.layouts.nav')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Whatsapp Links</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin">DashBoard</a></li>
                    <li class="breadcrumb-item active">Whatsapp Links</li>
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
                <h3 class="card-title">Add Whatsapp Links</h3>
            </div>
            <form>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title" class="form-label text-right">Title<span
                                        class="text-danger">*</span> :</label>
                                <input class="form-control" placeholder="Enter Title" name="title"
                                    type="text" value="" id="course_name">
                                <div class="coursename_error" style="color:red;font-size:16px"></div>
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label text-right">Whatsapp Link<span
                                        class="text-danger">*</span> :</label>
                                <input class="form-control" placeholder="Enter Whatsapp Link" name="title"
                                    type="url" value="" id="whatsapp_link">
                                <div class="whatsapplink_error" style="color:red;font-size:16px"></div>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-default " href="{{ route('whatsapplist') }}">Back</a>&emsp;
                                <button type="button" id="addBtn" class="btn btn-primary float-right"
                                    onclick="CourseSave()"> Save </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@include('admin.layouts.footer')

<script>
    function CourseSave() {


        var CourseName = $('input#course_name').val();
        var WhatsappLink = $('input#whatsapp_link').val();


        // alert(WhatsappLink);
        // return false;
        // alert(VideoTitle);
        // alert(YoutuubeUrl);
        // alert(Name);


        if (CourseName == '') {
            $('#course_name').focus();
            $('#course_name').css({
                'border': '1px solid red'
            });
            $('.coursename_error').show();
            $('.coursename_error').css('color', 'red');
            $('.coursename_error').text("enter course name*");
            return false;
        } else

            $('#course_name').css({
                'border': '1px solid #CCC'
            });
        $('.coursename_error').hide();

        if (WhatsappLink == '') {
            $('#whatsapp_link').focus();
            $('#whatsapp_link').css({
                'border': '1px solid red'
            });
            $('.whatsapplink_error').show();
            $('.whatsapplink_error').css('color', 'red');
            $('.whatsapplink_error').text("enter whatsapp link*");
            return false;
        } else

            $('#whatsapp_link').css({
                'border': '1px solid #CCC'
            });
        $('.whatsapplink_error').hide();



        data = new FormData();


        data.append('course_name', CourseName);
        data.append('link', WhatsappLink);
        data.append('_token', '{{ csrf_token() }}');
        $.ajax({

            type: "POST",
            url: "/whatsapp-save",
            data: data,
            dataType: "json",
            contentType: false,
            //cache: false,
            processData: false,

            success: function(data) {
                if (data['success']) {
                    Swal.fire({
                        title: 'Whatsapp Link Added Success',
                        // text: "You won't be able to revert this!",
                        icon: 'success',
                        // showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = '/whatsapp-list';
                        }
                    })
                }
            }
        })
    }
</script>
