<!-- Edit Role Modal -->
<div id="editRoleModal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-6 relative">
        <button type="button" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700" id="closeEditModal">
            &times; <!-- Close button -->
        </button>
        <div class="mb-6 text-center">
            <h4 class="pb-0 mb-2 role-title text-lg font-bold">Edit Role</h4>
            <p>Update role permissions</p>
        </div>

        <!-- Edit role form -->
        <form id="editRoleForm" class="row g-3" action="{{ action([\App\Http\Controllers\RolesController::class, 'update'], ['role' => ':role_id']) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" id="editRoleId" name="roleId" value="">
            <!-- Role Name Input -->
            <div class="mb-4">
                <div class="relative">
                    <label for="editModalRoleName" class="px-1 text-gray-500">Role Name</label>
                    <input type="text" id="editModalRoleName" name="modalRoleName" class="form-input w-full px-4 py-3 text-gray-700 bg-white border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" placeholder="Enter a role name" required value="{{ old('modalRoleName') }}" />
                </div>
                @error('modalRoleName')
                    <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <!-- Role Permissions -->
            <div class="mb-4">
                <h5 class="mb-2 text-lg font-semibold text-gray-700">Role Permissions</h5>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white divide-y divide-gray-200 shadow-sm rounded-lg">
                        <tbody class="divide-y divide-gray-200">
                            <!-- Administrator Access -->
                            <tr>
                                <td class="px-4 py-3 font-semibold text-gray-700 whitespace-nowrap">Administrator Access</td>
                                <td class="px-4 py-3">
                                    <div class="flex justify-end">
                                        <div class="form-check">
                                            <input class="form-check-input rounded-full border-gray-300 focus:ring-blue-500" type="checkbox" id="editSelectAll" onclick="toggleSelectAllEdit(this)" />
                                            <label class="ml-2 text-gray-700 form-check-label" for="editSelectAll">Select All</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- Grouped Permissions -->
                            @php
                                $groupedPermissions = [];
                                foreach ($permissions as $permission) {
                                    $parts = explode('_', $permission->title);
                                    $prefix = $parts[0] . '_' . $parts[1];
                                    $groupedPermissions[$prefix][] = $permission;
                                }
                            @endphp

                            @foreach ($groupedPermissions as $group => $groupPermissions)
                                <tr>
                                    <!-- Group Name -->
                                    <td class="px-4 py-3 font-semibold text-gray-700 whitespace-nowrap">{{ str_replace('_', ' ', $group) }}</td>
                                    <td class="px-4 py-3">
                                        <div class="flex justify-end space-x-4">
                                            <!-- Permissions (Read, Write, Create) -->
                                            @foreach (['Read', 'Write', 'Create'] as $action)
                                                @php
                                                    $permission = array_filter($groupPermissions, function ($perm) use ($group, $action) {
                                                        return $perm->title === $group . '_' . $action;
                                                    });
                                                    $permission = reset($permission);
                                                @endphp
                                                <div class="form-check">
                                                    <input class="form-check-input rounded-full border-gray-300 focus:ring-blue-500" type="checkbox" name="permissions[]" id="edit_{{ $group }}_{{ strtolower($action) }}" value="{{ optional($permission)->id }}" />
                                                    <label class="ml-2 text-gray-700 form-check-label" for="edit_{{ $group }}_{{ strtolower($action) }}">{{ $action }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @error('permissions')
                    <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <!-- Hidden Role ID Input -->
            <input type="hidden" id="editRoleId" name="roleId" value="">

            <!-- Submit and Cancel Buttons -->
            <div class="flex justify-center mt-6">
                <button type="submit" class="px-6 py-2 mr-3 text-white bg-blue-500 rounded-lg shadow-sm hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">Update</button>
                <button id="cancelEditModal" type="button" class="px-6 py-2 text-gray-700 bg-gray-200 rounded-lg shadow-sm hover:bg-gray-300 focus:outline-none focus:ring focus:ring-gray-300">Cancel</button>
            </div>
        </form>
        <!--/ Edit role form -->
    </div>
</div>

<!-- Script for Edit Role Modal -->
<script>
    function toggleSelectAllEdit(source) {
        const checkboxes = document.querySelectorAll('input[name="permissions[]"]');
        checkboxes.forEach(checkbox => {
            checkbox.checked = source.checked;
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        const editRoleModal = document.getElementById('editRoleModal');
        const roleEditModalLinks = document.querySelectorAll('.role-edit-modal');
        const closeEditModalBtn = document.getElementById('closeEditModal');
        const cancelEditModalBtn = document.getElementById('cancelEditModal');
        const editRoleForm = document.getElementById('editRoleForm');
        const editModalRoleName = document.getElementById('editModalRoleName');
        const editRoleIdInput = document.getElementById('editRoleId');

        // Function to open modal and populate data
        function openEditRoleModal(roleId, roleName, permissions) {
            editRoleIdInput.value = roleId;
            editModalRoleName.value = roleName;

            // Reset all checkboxes
            const checkboxes = document.querySelectorAll('input[name="permissions[]"]');
            checkboxes.forEach(checkbox => {
                checkbox.checked = false;
            });

            // Check the permissions checkboxes based on permissions array
            permissions.forEach(permissionId => {
                const checkbox = document.querySelector(`input[value="${permissionId}"]`);
                if (checkbox) {
                    checkbox.checked = true;
                }
            });

            editRoleModal.classList.remove('hidden');
        }

        // Attach click event listeners to role edit links
        roleEditModalLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const roleId = this.getAttribute('data-role-id');
                const roleName = this.getAttribute('data-role-name');
                const permissions = JSON.parse(this.getAttribute('data-permissions'));

                openEditRoleModal(roleId, roleName, permissions);
            });
        });

        // Close modal
        closeEditModalBtn.addEventListener('click', function() {
            editRoleModal.classList.add('hidden');
        });

        // Cancel button functionality
        cancelEditModalBtn.addEventListener('click', function() {
            editRoleModal.classList.add('hidden');
        });

        // Reset modal on close
        closeEditModalBtn.addEventListener('click', resetEditModal);
        cancelEditModalBtn.addEventListener('click', resetEditModal);

        function resetEditModal() {
            editModalRoleName.value = '';
            const checkboxes = document.querySelectorAll('input[name="permissions[]"]');
            checkboxes.forEach(checkbox => checkbox.checked = false);
        }

        // Check for errors (assuming you're using Laravel Blade syntax)
        @if($errors->any())
            let errorMessages = '<ul>';
            @foreach ($errors->all() as $error)
                errorMessages += '<li>{{ $error }}</li>';
            @endforeach
            errorMessages += '</ul>';

            Swal.fire({
                icon: 'error',
                title: 'There were some errors',
                html: errorMessages,
                showConfirmButton: true
            });
        @endif

        // Check for success message
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                timer: 3000,
                showConfirmButton: false
            });
        @endif
    });

    
</script>
