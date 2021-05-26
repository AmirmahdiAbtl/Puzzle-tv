@extends('layouts.admin')
@section('content')
<div class="card card-custom">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                @lang('admin/users.list')
            </h3>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">@lang('admin/users.fname')</th>
                    <th scope="col">@lang('admin/users.lname')</th>
                    <th scope="col">@lang('admin/users.mobile')</th>
                    <th scope="col">@lang('admin/users.roles')</th>
                    <th scope="col">@lang('admin/users.operation')</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                <tr>
                    <td> {{$user->fname}} </td>
                    <td> {{$user->lname}} </td>
                    <td> {{$user->mobile}} </td>
                    <td>
                        @foreach ($user->roles as $role)
                        <span class="badge badge-secondary"> {{$role->persian_name}} </span>
                        
                        @endforeach
                    </td>
                    <td> 
                        <a href="{{ route('user.edit', $user->id) }}"
                            class="btn btn-icon btn-outline-success btn-sm">
                            <i class="flaticon-edit"></i>
                        </a>
                        <button type="button" class="btn btn-icon btn-outline-danger btn-sm" data-toggle="modal"
                            data-target="#deleteModel{{$user->id}}">
                            <i class="flaticon-delete-1"></i>
                        </button>
                    </td>
                </tr>
                <div class="modal fade" id="deleteModel{{$user->id}}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">حذف کابر</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i aria-hidden="true" class="ki ki-close"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                آیا از حذف کاربر اطمینان دارید؟
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                    data-dismiss="modal">انصراف</button>
                                <a class="btn btn-danger text-center btn-sm" href="{{ route('user.destroy', $user->id) }}" onclick="event.preventDefault();
                                        document.getElementById('DeleteForm{{$user->id}}').submit();">
                                    <i class="flaticon-delete-1"></i> حذف کاربر
                                </a>
                                <form method="post" id="DeleteForm{{$user->id}}"
                                    action="{{ route('user.destroy', $user->id) }}" class="d-none">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    <p>
                        @lang('admin/users.there are not any user')
                    </p>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-center align-items-center flex-wrap p-6">
            <div class="contaier">
                <div class="d-flex flex-wrp py-2 mr-3 text-center">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
