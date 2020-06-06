<script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/js/popper.min.js')}}"></script>
<script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/js/modernizr.min.js')}}"></script>
<script src="{{asset('admin/assets/js/detect.js')}}"></script>
<script src="{{asset('admin/assets/js/fastclick.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('admin/assets/js/waves.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/skycons/skycons.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/raphael/raphael-min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/morris/morris.min.js')}}"></script>

<script src="{{asset('admin/assets/pages/dashborad.js')}}"></script>

<!-- App js -->
<script src="{{asset('admin/assets/js/app.js')}}"></script>
<script>
    $(document).ready(function () {
        $('form').ajaxForm({
            beforeSend:function(){
                $('#success').empty();
                $('.progress-bar').text('%0');
                $('.progress-bar').css('width','0%')
            },
            uploadProgress:function (event,position,total,percentComplete) {
                $('.progress-bar').text(percentComplete + '0%');
                $('.progress-bar').css('width', percentComplete + '0%');
            },
            success:function(data){
                if(data.success){
                    $('#success').html('<div class="text-sccuess text-center"><b>' +data.success+'</b></div><br />');
                    $('#success').append(data.image);
                    $('.processor-bar').text('Uploaded');
                    $('.progress-bar').css('width','100%');

                }
            }
        });
    })
</script>
