@extends('admin.layouts.app')

@section('title', 'Roles')

@section('admincontent')


<h4 class="mb-1">Roles List</h4>
<p class="mb-6">
    A role provides access to predefined menus and features so that, depending on the assigned role, an administrator can access what the user needs.
</p>

<!-- Start Role Cards -->
<div class="flex-1 p-6 bg-gray-100 md:mt-16">
    <!-- Role Cards -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">
        @foreach ($roles as $index => $role)
            <div class="report-card {{ $index >= 5 ? 'hidden' : '' }}">
                <div class="card">
                    <div class="flex flex-col card-body">
                        <!-- Top Section -->
                        <div class="flex flex-row items-center justify-between mb-4">
                            <p class="mb-0">Total {{ $role->users->count() }} users</p>
                            <ul class="mb-0 list-unstyled d-flex align-items-center avatar-group">
                                @foreach ($role->users->take(3) as $user)
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="{{ $user->name }}" class="avatar pull-up">
                                        <img class="rounded-circle" src="admin/assets/img/avatars/1.png" alt="{{ $user->name }}">
                                    </li>
                                @endforeach
                                @if ($role->users->count() > 3)
                                    <li class="avatar">
                                        <span class="avatar-initial rounded-circle pull-up text-body" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ $role->users->count() - 3 }} more">+{{ $role->users->count() - 3 }}</span>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <!-- End Top Section -->

                        <!-- Bottom Section -->
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="role-heading">
                                <h5 class="mb-1">{{ $role->title }}</h5>
                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#editRoleModal" class="role-edit-modal" data-role-id="{{ $role->id }}" data-role-name="{{ $role->title }}" data-permissions="{{ json_encode($role->permissions->pluck('id')->toArray()) }}">
                                    <p class="mb-0">Edit Role</p>
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="text-secondary"><i class="ri-file-copy-line ri-22px"></i></a>
                        </div>
                        <!-- End Bottom Section -->
                    </div>
                </div>
                <div class="p-1 mx-4 bg-white border border-t-0 rounded rounded-t-none footer"></div>
            </div>
        @endforeach
    </div>
    <!-- End Role Cards -->
</div>

    
    <!-- end Analytics -->

<!-- Start Roles Management -->
<div class="col-span-2 mt-2 card xl:col-span-1">
    <div class="card-header">User Roles</div>

    <div class="card-datatable table-responsive">
        <table class="w-full text-left table-auto">
            <!-- Table Head -->
            <thead>
                <tr>
                    <th class="px-4 py-2 border-r">User</th>
                    <th class="px-4 py-2 text-right border-r">Email</th>
                    <th class="px-4 py-2 text-right border-r">Roles</th>
                    <th class="px-4 py-2 text-right border-r">Status</th>
                    <th class="px-4 py-2 text-right">Actions</th>
                </tr>
            </thead>
            <!-- End Table Head -->

            <!-- Table Body -->
            <tbody class="text-gray-600">
                @foreach ($users as $index => $user)
                <tr>
                    <!-- User Name -->
                    <td class="px-4 py-2 border border-l-0">
                        <p class="font-bold">{{ $user->name }}</p>
                    </td>
                    <!-- Email -->
                    <td class="px-4 py-2 text-right border border-l-0">{{ $user->email }}</td>
                    <!-- Roles -->
                    <td class="px-4 py-2 text-right border border-l-0">
                        @if ($user->roles->isEmpty())
                            <span class="text-gray-400">No Roles</span>
                        @else
                            @foreach ($user->roles as $role)
                                <span class="badge bg-primary">{{ $role->title }}</span>
                            @endforeach
                        @endif
                    </td>
                    <!-- Status -->
                    <td class="px-4 py-2 text-right border border-l-0">
                        <span class="badge 
                            {{ 
                                $user->profile_status == 'activated' ? 'bg-label-success' : 
                                ($user->profile_status == 'deactivated' ? 'bg-label-danger' : 
                                ($user->profile_status == 'hold' ? 'bg-label-warning' : '')) 
                            }}">
                            {{ ucfirst($user->profile_status) }}
                        </span>
                    </td>
                    <!-- Actions -->
                    <td class="px-4 py-2 text-right border border-l-0">
                        <button type="button" class="btn btn-primary edit-user-btn" 
                                data-bs-toggle="modal" 
                                data-bs-target="#editUser" 
                                data-id="{{ $user->id }}" 
                                data-name="{{ $user->name }}" 
                                data-status="{{ $user->profile_status }}" 
                                data-roles="{{ json_encode($user->roles->pluck('id')) }}"> 
                            Edit
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <!-- End Table Body -->
        </table>
    </div>
</div>

@endsection
