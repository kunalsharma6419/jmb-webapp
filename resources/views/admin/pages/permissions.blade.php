@extends('admin.layouts.app')

@section('title', 'Roles')

@section('admincontent')


<!-- Start Permissions Management -->
<div class="col-span-2 card xl:col-span-1">
    <div class="card-header flex item-center justify-between">
        Permissions 
        <button type="button" class="btn btn-success" 
            @click="showAddPermissionModal()">
            Add New Permission
        </button>
    </div>

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
                        <!-- Edit Permission Button -->
                        <button type="button" class="btn btn-primary edit-permission-btn" 
                            data-id="{{ $permission->id }}" 
                            data-title="{{ $permission->title }}"
                            @click="showEditPermissionModal('{{ $permission->id }}', '{{ $permission->title }}')">
                            Edit
                        </button>

                        <!-- Delete Permission Button -->
                        <button type="button" class="btn btn-danger delete-permission-btn" 
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

<!-- SweetAlert Script -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function showAddPermissionModal() {
        Swal.fire({
            title: 'Add New Permission',
            input: 'text',
            inputLabel: 'Permission Name',
            showCancelButton: true,
            confirmButtonText: 'Add',
            preConfirm: (permissionName) => {
                if (!permissionName) {
                    Swal.showValidationMessage('Please enter a permission name');
                }
                return { permissionName: permissionName };
            }
        }).then((result) => {
            if (result.isConfirmed) {
                axios.post('{{ route('permissions.store') }}', {
                    title: result.value.permissionName,
                    _token: '{{ csrf_token() }}',
                }).then(response => {
                    Swal.fire('Success!', 'Permission added successfully!', 'success').then(() => {
                        location.reload(); // Reload the page to reflect changes
                    });
                }).catch(error => {
                    Swal.fire('Error!', 'Could not add permission.', 'error');
                });
            }
        });
    }

    function showEditPermissionModal(id, title) {
        Swal.fire({
            title: 'Edit Permission',
            input: 'text',
            inputLabel: 'Permission Name',
            inputValue: title,
            showCancelButton: true,
            confirmButtonText: 'Update',
            preConfirm: (permissionName) => {
                if (!permissionName) {
                    Swal.showValidationMessage('Please enter a permission name');
                }
                return { permissionName: permissionName };
            }
        }).then((result) => {
            if (result.isConfirmed) {
                axios.put(`/admin/permissions/${id}`, {
                    title: result.value.permissionName,
                    _token: '{{ csrf_token() }}',
                }).then(response => {
                    Swal.fire('Success!', 'Permission updated successfully!', 'success').then(() => {
                        location.reload(); // Reload the page to reflect changes
                    });
                }).catch(error => {
                    Swal.fire('Error!', 'Could not update permission.', 'error');
                });
            }
        });
    }

    document.querySelectorAll('.delete-permission-btn').forEach(button => {
        button.addEventListener('click', function () {
            const permissionId = button.getAttribute('data-id');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    axios.delete(`/admin/permissions/${permissionId}`, {
                        data: { _token: '{{ csrf_token() }}' }
                    }).then(response => {
                        Swal.fire('Deleted!', 'Permission has been deleted.', 'success').then(() => {
                            location.reload(); // Reload the page to reflect changes
                        });
                    }).catch(error => {
                        Swal.fire('Error!', 'Could not delete permission.', 'error');
                    });
                }
            });
        });
    });
</script>

@endsection
