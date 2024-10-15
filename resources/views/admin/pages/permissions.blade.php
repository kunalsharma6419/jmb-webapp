@extends('admin.layouts.app')

@section('title', 'Roles')

@section('admincontent')

<!-- Start Permissions Management -->
<div class="col-span-2 card xl:col-span-1">
    <div class="card-header flex item-center justify-between">
        Permissions 
        <button type="button" class="btn btn-success" id="addPermissionButton">
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
                            data-title="{{ $permission->title }}">
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
    document.addEventListener('DOMContentLoaded', function () {
        // Add New Permission
        document.getElementById('addPermissionButton').addEventListener('click', showAddPermissionModal);

        // Edit Permission Button
        document.querySelectorAll('.edit-permission-btn').forEach(button => {
            button.addEventListener('click', function () {
                const id = button.getAttribute('data-id');
                const title = button.getAttribute('data-title');
                showEditPermissionModal(id, title);
            });
        });

        // Delete Permission Button
        document.querySelectorAll('.delete-permission-btn').forEach(button => {
            button.addEventListener('click', function () {
                const permissionId = button.getAttribute('data-id');
                showDeleteConfirmation(permissionId);
            });
        });
    });

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
                // Create a form dynamically and submit it
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '{{ action([\App\Http\Controllers\PermissionsController::class, 'store']) }}';

                // Add CSRF token
                const tokenInput = document.createElement('input');
                tokenInput.type = 'hidden';
                tokenInput.name = '_token';
                tokenInput.value = '{{ csrf_token() }}';
                form.appendChild(tokenInput);

                // Add permission name
                const permissionNameInput = document.createElement('input');
                permissionNameInput.type = 'hidden';
                permissionNameInput.name = 'modalPermissionName';
                permissionNameInput.value = result.value.permissionName;
                form.appendChild(permissionNameInput);

                // Add core permission checkbox if needed
                const corePermissionInput = document.createElement('input');
                corePermissionInput.type = 'hidden';
                corePermissionInput.name = 'corePermission';
                corePermissionInput.value = '0'; // Default to not checked
                form.appendChild(corePermissionInput);

                document.body.appendChild(form);
                form.submit(); // Submit the form
            }
        });
    }function showEditPermissionModal(id, title) {
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
                return false; // Return false to prevent submission
            }
            return permissionName; // Return the permission name
        }
    }).then((result) => {
        if (result.isConfirmed) {
            // Create a form dynamically and submit it
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = `{{ action([\App\Http\Controllers\PermissionsController::class, 'update'], ':permission_id') }}`.replace(':permission_id', id);

            // CSRF Token
            const tokenInput = document.createElement('input');
            tokenInput.type = 'hidden';
            tokenInput.name = '_token';
            tokenInput.value = '{{ csrf_token() }}';
            form.appendChild(tokenInput);

            // Method Override
            const methodInput = document.createElement('input');
            methodInput.type = 'hidden';
            methodInput.name = '_method';
            methodInput.value = 'PUT';
            form.appendChild(methodInput);

            // Permission Name
            const permissionNameInput = document.createElement('input');
            permissionNameInput.type = 'hidden';
            permissionNameInput.name = 'editPermissionName';
            permissionNameInput.value = result.value; // Get the permission name from SweetAlert
            form.appendChild(permissionNameInput);

            // Append form to body and submit
            document.body.appendChild(form);
            form.submit(); // Submit the form
        }
    });


    }

    function showDeleteConfirmation(permissionId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Create a form element for deletion
                const form = document.createElement('form');
                form.method = 'POST';
                // Construct the action URL correctly
                form.action = `{{ action([\App\Http\Controllers\PermissionsController::class, 'destroy'], ':permission_id') }}`.replace(':permission_id', permissionId);

                // Add CSRF token
                const tokenInput = document.createElement('input');
                tokenInput.type = 'hidden';
                tokenInput.name = '_token';
                tokenInput.value = '{{ csrf_token() }}';
                form.appendChild(tokenInput);

                // Method Override
                const methodInput = document.createElement('input');
                methodInput.type = 'hidden';
                methodInput.name = '_method';
                methodInput.value = 'DELETE';
                form.appendChild(methodInput);

                // Append form to body and submit
                document.body.appendChild(form);
                form.submit(); // Submit the form
            }
        });
    }
</script>

@endsection
