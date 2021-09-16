<script>
    $(document).ready(function() {
        $(".updbtn").click(function() {
            id=$(this).attr('id');
            $('#updatecategory').attr('action','{{ route('category.update','') }}'+'/'+id);
        });
    });
</script>
 {{--- datatable scrtpts --}}
<script src="{{ asset('admin/assets/bundles/datatablescripts.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/jquery-datatable/buttons/buttons.flash.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/jquery-datatable/buttons/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/pages/tables/jquery-datatable.js') }}"></script>
