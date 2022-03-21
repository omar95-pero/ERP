
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


@if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '{{session('success')}}',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
@endif

@if(session('updated'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '{{session('updated')}}',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
@endif


@if(session('deleted'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '{{session('deleted')}}',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
@endif

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
