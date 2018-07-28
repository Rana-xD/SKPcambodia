@extends('voyager::master')

@section('page_title','All '.$dataType->display_name_plural)

@section('page_header')
    <h1 class="page-title">
        <i class="voyager-news"></i> {{ $dataType->display_name_plural }}
        @if (Voyager::can('add_'.$dataType->name))
            <a href="{{ route('voyager.'.$dataType->slug.'.create') }}" class="btn btn-success">
                <i class="voyager-plus"></i> Add New
            </a>
        @endif
    </h1>

    @include('voyager::multilingual.language-selector')
@stop

@section('content')
   <a class="btn btn-arrange" data-popup-open="popup-1" href="#">Team Arrangement</a>

    <div class="popup" data-popup="popup-1">
        <div class="popup-inner">
           <h2>Change Team Order Arrangement!!!</h2>
              <div id="tableContainer" class="tableContainer">
                 <table class="table table-hover">
                      <thead class="fixedHeader">
                         <tr>
                             <th >Order</th>
                             <th style="padding-left: 60px !important;">Fullname</th>
                             <th >Actions</th>
                         </tr>
                      </thead>

                      <tbody class="scrollContent">
                       @foreach($dataTypeContent->sort(function ($a, $b) {
                             if (!$a->order_id) {
                                 return !$b->order_id ? 1 : 1;
                             }
                             if (!$b->order_id) {
                                 return -1;
                             }
                             if ($a->order_id == $b->order_id) {
                                 return 0;
                             }
                             return $a->order_id < $b->order_id ? -1 : 1;
                          }); as $data)
                         <tr>
                          <td class="order_id"><span >{{ $loop->iteration }}</span></td>
                          <td class="name"><span >{{ $data->fullname }}</span></td>
                          <td class="id hidden"><span >{{ $data->id }}</span></td>
                          <td>
                              <icon class="up glyphicon glyphicon-arrow-up" style="margin: 0px 15px 0px 60px; color:green"></icon>
                              <icon class="down glyphicon glyphicon-arrow-down" style="color:red"></icon>
                           </td>
                         </tr>
                      @endforeach

                      </tbody>
                 </table>
              </div>
           <p><a class="btn btnSave" data-popup-close="popup-1" href="#">Save</a></p>
           <p><a class="btn btnCancel" data-popup-close="popup-1" href="#">Cancel</a></p>
           <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
        </div>
    </div>

    <div class="page-content container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">

                        <table id="dataTable" class="table table-hover">
                            <thead>
                                <tr>
                                    @foreach($dataType->browseRows as $row)
                                    <th>{{ $row->display_name }}</th>
                                    @endforeach
                                    <th class="actions">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dataTypeContent->sort(function ($a, $b) {
                                     if (!$a->order_id) {
                                         return !$b->order_id ? 0 : -1;
                                     }
                                     if (!$b->order_id) {
                                         return 1;
                                     }
                                     if ($a->order_id == $b->order_id) {
                                         return 0;
                                     }
                                     return $a->order_id > $b->order_id ? -1 : 1;
                                 }); as $data)
                                <tr>
                                    @foreach($dataType->browseRows as $row)
                                    <td>
                                        @if($row->field == 'profile_pic')
                                            <img src="@if($data->profile_pic){{ asset($data->profile_pic) }}@endif" style="width:100px">
                                        @else
                                            @if(is_field_translatable($data, $row))
                                                @include('voyager::multilingual.input-hidden', [
                                                    '_field_name'  => $row->field,
                                                    '_field_trans' => get_field_translations($data, $row->field)
                                                ])
                                            @endif
                                            <span>{{ $data->{$row->field} }}</span>
                                        @endif
                                    </td>
                                    @endforeach
                                    <td class="no-sort no-click">
                                        @if (Voyager::can('delete_'.$dataType->name))
                                            <div class="btn-sm btn-danger pull-right delete" data-id="{{ $data->id }}">
                                                <i class="voyager-trash"></i> Delete
                                            </div>
                                        @endif
                                        @if (Voyager::can('edit_'.$dataType->name))
                                            <a href="{{ route('voyager.'.$dataType->slug.'.edit', $data->id) }}" class="btn-sm btn-primary pull-right edit">
                                                <i class="voyager-edit"></i> Edit
                                            </a>
                                        @endif
                                        @if (Voyager::can('read_'.$dataType->name))
                                            <a href="{{ route('voyager.'.$dataType->slug.'.show', $data->id) }}" class="btn-sm btn-warning pull-right">
                                                <i class="voyager-eye"></i> View
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @if (isset($dataType->server_side) && $dataType->server_side)
                            <div class="pull-left">
                                <div role="status" class="show-res" aria-live="polite">Showing {{ $dataTypeContent->firstItem() }} to {{ $dataTypeContent->lastItem() }} of {{ $dataTypeContent->total() }} entries</div>
                            </div>
                            <div class="pull-right">
                                {{ $dataTypeContent->links() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">
                        <i class="voyager-trash"></i> Are you sure you want to delete this {{ $dataType->display_name_singular }}?
                    </h4>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('voyager.'.$dataType->slug.'.destroy', ['id' => '__id']) }}" id="delete_form" method="POST">
                        {{ method_field("DELETE") }}
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger pull-right delete-confirm" value="Yes, Delete This {{ $dataType->display_name_singular }}">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')
    {{-- DataTables --}}
    <script>
        $(document).ready(function () {
            @if (!$dataType->server_side)
                $('#dataTable').DataTable({ "order": [] });
            @endif
            @if ($isModelTranslatable)
                $('.side-body').multilingual();
            @endif
        });

        $('td').on('click', '.delete', function(e) {
            $('#delete_form')[0].action = $('#delete_form')[0].action.replace('__id', $(e.target).data('id'));
            $('#delete_modal').modal('show');
        });

        $(function() {
         	//----- OPEN
         	$('[data-popup-open]').on('click', function(e) {
         		var targeted_popup_class = jQuery(this).attr('data-popup-open');
         		$('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
               $('html').css('overflow', 'hidden');
         		e.preventDefault();
         	});

         	//----- CLOSE
         	$('[data-popup-close]').on('click', function(e) {
         		var targeted_popup_class = jQuery(this).attr('data-popup-close');
         		$('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
               $('html').css('overflow', '');
         		e.preventDefault();
         	});

            // $( ".scrollContent" ).sortable();

            checkFirstAndLast();


            $(".up,.down").click(function(){
                var row = $(this).parents("tr:first");
                if ($(this).is(".up")) {
                    row.insertBefore(row.prev());
                    var first = row.closest("tr").find('td.order_id').text();
                    var second = row.closest("tr").next('tr').find('td.order_id').text();
                    row.closest("tr").find('td.order_id').html(second);
                    row.closest("tr").next('tr').find('td.order_id').html(first);
                } else {
                    row.insertAfter(row.next());
                    var first = row.closest("tr").find('td.order_id').text();
                    var second = row.closest("tr").prev('tr').find('td.order_id').text();
                    row.closest("tr").find('td.order_id').html(second);
                    row.closest("tr").prev('tr').find('td.order_id').html(first);
                }
                checkFirstAndLast();
            });

            $(".btnSave").click(function(e) {
               e.preventDefault();
               var rowvalue = [];
               var map = {};

               $(".scrollContent tr").each(function() {
                  map['id'] = $(this).find('.id').text();
                  map['name'] = $(this).find('.name').text();
                  map['order_id'] = $(this).find('.order_id').text();
                  rowvalue.push(map);
                  map = {};
               });

               $.ajax({
                   url:"{{ url('/teams/updateOrder') }}",
                   type: 'POST',
                   dataType: 'json',
                   data: {
                        "_token": "{{ csrf_token() }}",
                        "teamData": rowvalue,
                    }
               }).done(function (result) {
                  toastr.success("Successfully updated team order.");
               }).fail(function (data) {
                   alert("Errorrrrrr");
               })
               location.reload();
            });

         });

         function checkFirstAndLast() {


            $("#tableContainer > table > tbody > tr").each(function() {
                     $(this).find('.up').removeClass( "hidden");
                     $(this).find('.down').removeClass( "hidden");
             });
            $("#tableContainer table tbody tr:first").find('.up').addClass('hidden');
            $("#tableContainer table tbody tr:last").find('.down').addClass('hidden');
         }

    </script>
    @if($isModelTranslatable)
        <script src="{{ voyager_asset('js/multilingual.js') }}"></script>
        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    @endif
@stop
