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
            <div class="report-card {{ $index >= 7 ? 'hidden' : '' }} role-card">
                <div class="card">
                    <div class="flex flex-col card-body">
                        <!-- Top Section -->
                        <div class="flex flex-row items-center justify-between mb-4">
                            <p class="mb-0">Total {{ $role->users->count() }} users</p>
                            <ul class="mb-0 list-unstyled d-flex align-items-center avatar-group">
                                @foreach ($role->users->take(3) as $user)
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="{{ $user->name }}" class="avatar pull-up">
                                        <img class="rounded-full" src="admin/assets/img/avatars/1.png" alt="{{ $user->name }}">
                                    </li>
                                @endforeach
                                @if ($role->users->count() > 3)
                                    <li class="avatar">
                                        <span class="avatar-initial rounded-full pull-up text-body" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ $role->users->count() - 3 }} more">+{{ $role->users->count() - 3 }}</span>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <!-- End Top Section -->

                        <!-- Bottom Section -->
                        <div class="flex justify-between items-center">
                            <div class="role-heading">
                                <h5 class="mb-1">{{ $role->title }}</h5>
                            <!-- Role Edit Link -->
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#editRoleModal"
                                   class="role-edit-modal" 
                                   data-role-id="{{ $role->id }}" 
                                   data-role-name="{{ $role->title }}" 
                                   data-permissions="{{ json_encode($role->permissions->pluck('id')->toArray()) }}">
                                    <p class="mb-0 text-blue-500 hover:underline">Edit Role</p>
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

        <!-- Add New Role Card -->
        <div class="col-xl-4 col-lg-6 col-md-6 role-card">
            <div class="card h-100 text-center">
                <div class="card-body">
                    <button data-bs-target="#addRoleModal" id="openAddRoleModal" data-bs-toggle="modal" class="mb-4 btn btn-sm btn-primary text-nowrap add-new-role">Add New Role</button>
                    <p class="mb-0">Add role, if it does not exist</p>
                </div>
            </div>
        </div>

        <!-- Show All Roles Button (Right-Aligned Initially) -->
        <div class="mt-4 d-flex justify-end" id="showAllRolesBtnContainer">
            <button id="showAllRolesBtn" class="btn-bs-primary">Show all Roles</button>
        </div>

        <!-- Collapse Button (Centered Initially Hidden) -->
        <div class="mt-4 text-center hidden" id="collapseRolesBtnContainer">
            <button id="collapseRolesBtn" class="btn-bs-primary">Collapse Roles</button>
        </div>
    </div>

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
                    @foreach ($users as $user)
                        @if ($user->id !== Auth::id()) 
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
                                        }} ">
                                        {{ ucfirst($user->profile_status) }}
                                    </span>
                                </td>
                                <!-- Actions -->
                                <td class="px-4 py-2 text-right border border-l-0">
                                <td class="px-4 py-2 text-right border border-l-0">
    <button type="button" class="btn btn-primary edit-user-btn" 
        data-bs-toggle="modal" 
        data-bs-target="#editUser" 
        data-id="{{ $user->id }}" 
        data-name="{{ $user->name }}" 
        data-status="{{ $user->profile_status }}" 
        data-roles="{{ json_encode($user->roles->pluck('id')->toArray()) }}"> 
        Edit
    </button>
</td>


                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
                <!-- End Table Body -->
            </table>
        </div>
    </div>

    @include('admin.pages.Models.add-role-modal')
    @include('admin.pages.Models.edit-role-modal')
    @include('admin.pages.Models.edituser-role-model')

   <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Show/Hide Role Cards Logic
        const showAllBtn = document.getElementById('showAllRolesBtn');
        const collapseBtnContainer = document.getElementById('collapseRolesBtnContainer');
        const roleCards = document.querySelectorAll('.report-card.hidden');
        const showAllBtnContainer = document.getElementById('showAllRolesBtnContainer');
        const editRoleModal = document.getElementById('editRoleModal');
        const editRoleForm = document.getElementById('editRoleForm');
        const editModalRoleName = document.getElementById('editModalRoleName');
        const editRoleIdInput = document.getElementById('editRoleId');

        if (showAllBtn) {
            showAllBtn.addEventListener('click', function () {
                // Show hidden cards
                roleCards.forEach(card => {
                    card.classList.remove('hidden');
                });

                // Hide the "Show All" button and show the "Collapse" button
                showAllBtnContainer.classList.add('hidden');
                collapseBtnContainer.classList.remove('hidden');
            });
        }

        const collapseRolesBtn = document.getElementById('collapseRolesBtn');
        if (collapseRolesBtn) {
            collapseRolesBtn.addEventListener('click', function () {
                // Hide the extra role cards
                roleCards.forEach(card => {
                    card.classList.add('hidden');
                });

                // Show the "Show All" button and hide the "Collapse" button
                collapseBtnContainer.classList.add('hidden');
                showAllBtnContainer.classList.remove('hidden');
            });
        }

        // Attach event listeners for role edit modal
        document.querySelectorAll('.role-edit-modal').forEach(button => {
            button.addEventListener('click', function() {
                const roleId = this.getAttribute('data-role-id');
                const roleName = this.getAttribute('data-role-name');
                const permissions = JSON.parse(this.getAttribute('data-permissions'));

                // Set the role name in the modal
                editModalRoleName.value = roleName;

                // Set permissions checkboxes
                document.querySelectorAll('input[name="permissions[]"]').forEach(checkbox => {
                    checkbox.checked = permissions.includes(parseInt(checkbox.value));
                });

                // Update form action
                const action = editRoleForm.getAttribute('action').replace(':role_id', roleId);
                editRoleForm.setAttribute('action', action);

                // Show the modal
                editRoleModal.classList.remove('hidden');
            });
        });

        // Close modal functionality
        document.getElementById('closeEditModal').addEventListener('click', function() {
            editRoleModal.classList.add('hidden');
        });

        document.getElementById('cancelEditModal').addEventListener('click', function() {
            editRoleModal.classList.add('hidden');
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
    // Attach event listeners for the edit user button
    document.querySelectorAll('.edit-user-btn').forEach(button => {
        button.addEventListener('click', function () {
            const userId = this.getAttribute('data-id');
            const userName = this.getAttribute('data-name');
            const userStatus = this.getAttribute('data-status');
            const userRoles = JSON.parse(this.getAttribute('data-roles'));

            // Populate the modal fields
            document.getElementById('editUserId').value = userId;
            document.getElementById('modalEditUserName').value = userName;

            // Set the selected status
            document.getElementById('userStatusSelect').value = userStatus;

            // Set the selected role
            document.querySelectorAll('input[name="role_id"]').forEach(input => {
                input.checked = userRoles.includes(parseInt(input.value));
            });
        });
    });
});

</script>

@endsection
