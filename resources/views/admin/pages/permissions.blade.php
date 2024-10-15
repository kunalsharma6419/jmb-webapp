@extends('admin.layouts.app')

@section('title', 'Roles')

@section('admincontent')

<!-- Start Permissions Management -->
<div class="col-span-2 card xl:col-span-1">
    <div class="card-header">Permissions</div>

    <div class="card-datatable table-responsive">
        <table class="w-full text-left table-auto">
            <!-- Table Head -->
            <thead>
                <tr>
                    <th class="px-4 py-2 border-r">#</th>
                    <th class="px-4 py-2 border-r"></th>
                    <th class="px-4 py-2 border-r">Name</th>
                    <th class="px-4 py-2 border-r">Assigned To</th>
                    <th class="px-4 py-2 border-r">Created Date</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <!-- End Table Head -->

            <!-- Table Body -->
            <tbody class="text-gray-600">
                @foreach ($permissions as $index => $permission)
                <tr>
                    <td class="px-4 py-2 border border-l-0">{{ $index + 1 }}</td>
                    <td class="px-4 py-2 border border-l-0"></td>
                    <td class="px-4 py-2 border border-l-0">{{ $permission->title }}</td>
                    <td class="px-4 py-2 border border-l-0">
                        @foreach ($permission->roles as $role)
                            <span class="badge bg-primary">{{ $role->title }}</span>
                        @endforeach
                    </td>
                    <td class="px-4 py-2 border border-l-0">{{ $permission->created_at ? $permission->created_at->format('d M Y') : 'N/A' }}</td>

                    <td class="flex gap-4 px-4 py-2 border border-l-0">
                        <!-- Edit Permission Modal Trigger -->
                        <button type="button" class="btn btn-primary edit-permission-btn" 
                            data-bs-toggle="modal" 
                            data-bs-target="#editPermissionModal" 
                            data-id="{{ $permission->id }}" 
                            data-title="{{ $permission->title }}">
                            Edit
                        </button>

                        <!-- Delete Permission Modal Trigger -->
                        <button type="button" class="btn btn-danger" 
                            data-bs-toggle="modal" 
                            data-bs-target="#deletePermissionModal" 
                            data-id="{{ $permission->id }}">
                            Delete
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <!-- End Table Body -->
        </table>
    </div>
</div>
<!-- End Permissions Management -->

@endsection
