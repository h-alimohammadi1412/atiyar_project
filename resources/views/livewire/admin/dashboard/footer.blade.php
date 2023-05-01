<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
{{-- <script src="{{asset('js/bootstrap-iconpicker-iconset-all.min.js')}}"></script> --}}
{{-- <script src="{{asset('js/bootstrap-iconpicker.bundle.min.js')}}"></script> --}}
{{-- <script src="{{asset('js/bootstrap-iconpicker.min.js')}}"></script> --}}


<script src="{{ asset('js/jscolor.js') }}"></script>
<script src="{{ asset('js/ckeditor.js') }}"></script>
<script src="{{ asset('/js/sweetalert.min.js') }}"></script>

<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<script src="{{ asset('js/js.js') }}"></script>
<script>
    const $sortable = $("#sortable");
    $sortable.sortable({
        stop: function(event, ui) {
            $("#loading_box").show();
            const parameters = $sortable.sortable("toArray");
            const id = $("#product_id_sortable").val();
            console.log(id)
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax('http://localhost:8000/admin/product/gallery/change_image_position/23', {
                type: 'POST',
                data: 'parameters=' + parameters,
                success: function(data) {
                    $("#loading_box").hide();
                },
            });
        }

    });
</script>
<livewire:scripts />
