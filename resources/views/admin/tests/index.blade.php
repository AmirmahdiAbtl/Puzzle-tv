@extends('layouts.admin')

@section('css')
    <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="card card-custom">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                @lang('admin/tests.list')
            </h3>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped" id="MedpipTable">
            <thead>
                <tr>
                    <th scope="col">@lang('admin/tests.name')</th>
                    <th scope="col">@lang('admin/tests.slug')</th>
                    <th scope="col">@lang('admin/tests.operation')</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tests as $test)
                <tr>
                    <td> {{$test->name}} </td>
                    <td> {{$test->slug}} </td>
                    <td>
                        <a href="{{ route('test.edit', $test->id) }}" class="btn btn-icon btn-outline-success btn-sm">
                            <i class="flaticon-edit"></i>
                        </a>
                        
                        <button type="button" class="btn btn-icon btn-outline-danger btn-sm" data-toggle="modal"
                            data-target="#deleteModel{{$test->id}}">
                            <i class="flaticon-delete-1"></i>
                        </button>
                        <a href="{{ route('test.faq', $test->id) }}"
                            class="btn  btn-outline-warning btn-sm">
                            سوالات
                        </a>
                        <a href="{{ route('test.files', $test->id) }}"
                            class="btn  btn-outline-primary btn-sm">
                            فایل های مرتبط
                        </a>
                        <a href="{{ route('test.histories', $test->id) }}"
                            class="btn btn-outline-danger btn-sm">
                            تاریخچه
                        </a>
                    </td>
                </tr>
                <div class="modal fade" id="deleteModel{{ $test->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">@lang('admin/tests.delete')</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i aria-hidden="true" class="ki ki-close"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                @lang('admin/tests.modal.delete')
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                    data-dismiss="modal">انصراف</button>
                                <a class="btn btn-danger text-center btn-sm"
                                    href="{{ route('test.destroy', $test->id) }}" onclick="event.preventDefault();
                                        document.getElementById('DeleteForm{{$test->id}}').submit();">
                                    <i class="flaticon-delete-1"></i> @lang('admin/tests.delete')
                                </a>
                                <form method="post" id="DeleteForm{{$test->id}}"
                                    action="{{ route('test.destroy', $test->id) }}" class="d-none">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <p>
                    @lang('admin/tests.NotFound')
                </p>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('js')
<script type=" text/javascript" src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}">
</script>
<script>
    $(document).ready(function() {
        $('#MedpipTable').DataTable({
            "scrollX": true
        });
    });

</script>
@endsection
