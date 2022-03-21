<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
        let timerInterval
        Swal.fire({
            title: 'Error',
            html: '{{$error}}',
            timer: 3000,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading()
                const b = Swal.getHtmlContainer().querySelector('b')
                timerInterval = setInterval(() => {
                    b.textContent = Swal.getTimerLeft()
                }, 100)
            },
            willClose: () => {
                clearInterval(timerInterval)
            }
        }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log('I was closed by the timer')
            }
        })
        @endforeach
    @endif
</script>
<script>
$(document).ready(function () {

$(document).on('click', '.editJobTitle', function (event) {
    event.preventDefault();
    let id = $(this).attr('job_title_id');
    let url = '{{route('job-titles.edit',":id")}}';
    url = url.replace(':id', id);
    console.log(url)
    $.ajax({
        url: url,
        type: 'get',
        success: function (response) {
            window.setTimeout(function() {
                // console.log(response)
                $('#modalBody').html(response);
            }, 100);

        }, error: function (error) {
            // console.log('error',error)
        }
    });
})
});
</script>



