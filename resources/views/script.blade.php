<script>
    $(document).ready(function() {
        $(".updbtn").click(function() {
            id = $(this).attr('id');
            $('#updatecategory').attr('action', '{{ route('category.update', '') }}' + '/' + id);
        });

        // ..........................sale..............//

        //.........select category.....//

        $("#selectcategoryy").on('change', function() {
            id = this.value;
            fetchProductsByCategory(id);
        });

        function fetchProductsByCategory(id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('productbycategory') }}",
                method: 'post',
                data: {
                    id: id
                },
                success: function(response) {

                    appendProductsList(response);
                    appendbarcode(response, $('#barcodelist'));

                }
            });
        }

        function appendProductsList(response) {
            $('#productlist').empty();
            $.each(response, function(index, value) {
                $("#productlist").append(new Option(value.product_name, value.id));
            });
        }


        function appendbarcode(response, selector) {
            selector.empty();
            $.each(response, function(index, value) {
                selector.append(new Option(value.barcode, value.barcode));
            });
        }

        //..........select product ..............//
        $("#productlist").on('change', function() {
            id = this.value;
            fetchproductdetails(id);
        });

        function fetchproductdetails(id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('fetchproductdetails') }}",
                method: 'post',
                data: {
                    id: id
                },
                success: function(response) {
                    appendproductdetails(response);

                }
            });
        }

        function appendproductdetails(response) {
            $('#stock').val(response.stock);
            $('#price').val(response.price);
            //    $('#barcodelist').empty();
            //    $('#barcodelist').append(new Option(response.barcode, response.barcode)).attr('selected');
            $("#barcodelist option[value='B']").attr("selected","selected");

            // $("#barcodelist").each(function() {
            //     if ($(this).text() == 12)
            //         $(this).attr("selected", "selected");
            // });
        }
    });
</script>
{{-- - datatable scrtpts --}}
<script src="{{ asset('admin/assets/bundles/datatablescripts.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/jquery-datatable/buttons/buttons.flash.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/jquery-datatable/buttons/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/pages/tables/jquery-datatable.js') }}"></script>

{{-- Add-Product --}}
<script
src="{{ asset('admin/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}">
</script>
<script src="{{ asset('admin/assets/js/pages/forms/basic-form-elements.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/momentjs/moment.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/select2/select2.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/pages/forms/advanced-form-elements.js') }}"></script>
