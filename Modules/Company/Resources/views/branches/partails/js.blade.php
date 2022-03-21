
<script>
$(document).ready(function () {

$(document).on('click', '.editBranch', function (event) {
    event.preventDefault();
    let id = $(this).attr('branch_id');
    let url = '{{route('branches.edit',":id")}}';
    url = url.replace(':id', id);
    // console.log("url(admin/branches/"+id+"/edit)")
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



