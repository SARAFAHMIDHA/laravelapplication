@extends('layouts.master')

@section('content')
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>name of student</th>
            <th>parent name</th>
            <th>optedcourse</th>
            <th>enable/disable</th>
        </tr>
</thead>
        @if(!empty($parenttables))
        @foreach($parenttables as $parent)
        <tr>
            <td>{{$parent->id}}</td>
            <td>{{$parent->name}}</td>
            <td>{{$parent->name}}</td>
            <td>{{$parent->name}}</td>
            <td><input type="checkbox" data-toggle="toggle" data-on="Enabled" data-off="Disabled"></td>
</tr>
        @endforeach
        @endif
</tbody>
    </table>
</div>
@endsection

@push('scripts')

<script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'Enabled',
      off: 'Disabled'
    });
  })
</script>


<script>
    $('.toggle-class').on('change', function() {
        var status = $(this).prop('checked') == true ? 1 : 0;
        var user_id = $(this).data('id');
        $.ajax({
            type: 'GET',
            dataType: 'JSON',
            url: '{{ route('changeStatus') }}',
            data: {
                'status': status,
                'user_id': user_id
            },
            success:function(data) {
                $('#notifDiv').fadeIn();
                $('#notifDiv').css('background', 'green');
                $('#notifDiv').text('Status Updated Successfully');
                setTimeout(() => {
                    $('#notifDiv').fadeOut();
                }, 3000);
            }
        });
    });
</script>


@endpush

