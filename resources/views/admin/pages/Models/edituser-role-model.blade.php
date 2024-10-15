<!-- Edit User Modal -->
<div id="editUserModal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-8 relative w-full max-w-md"> <!-- Increased width -->
        <button type="button" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700" id="closeEditUserModal">
            &times; <!-- Close button -->
        </button>
        <div class="mb-4 text-center">
            <h4 class="mb-2 text-lg font-bold">Edit User</h4>
        </div>

        <form id="editUserForm" action="{{ route('asRoles.assign') }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" id="editUserId" value="" />

            <div class="mb-4">
                <label for="modalEditUserName" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="modalEditUserName" name="modalEditUserName" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500" value="" readonly />
            </div>

            <div class="mb-4">
                <label for="userStatusSelect" class="block text-sm font-medium text-gray-700">Status</label>
                <select id="userStatusSelect" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500" name="status">
                    <option value="activated">Activated</option>
                    <option value="deactivated">Deactivated</option>
                    <option value="hold">Hold</option>
                </select>
            </div>

            <div class="mb-4">
                <h5 class="text-lg font-medium">Assign Role</h5>
                <table class="min-w-full border-collapse border border-gray-300">
                    <thead>
                        <tr>
                            <th class="border border-gray-300 p-2">Role</th>
                            <th class="border border-gray-300 p-2">Select</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <td class="border border-gray-300 p-2">{{ $role->title }}</td>
                                <td class="border border-gray-300 p-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="role_id" value="{{ $role->id }}" id="role_{{ $role->id }}" />
                                        <label class="form-check-label" for="role_{{ $role->id }}">
                                            {{ $role->title }}
                                        </label>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="text-center flex justify-between">
                <button type="button" class="mt-4 px-4 py-2 text-gray-700 bg-gray-200 rounded-lg shadow-sm hover:bg-gray-300 focus:outline-none" id="cancelEditUserModal">Cancel</button>
                <button type="submit" class="mt-4 px-4 py-2 text-white bg-blue-500 rounded-lg shadow-sm hover:bg-blue-600 focus:outline-none">Submit</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const editUserBtns = document.querySelectorAll('.edit-user-btn');
        const editUserModal = document.getElementById('editUserModal');
        const closeEditUserModalBtn = document.getElementById('closeEditUserModal');
        const cancelEditUserModalBtn = document.getElementById('cancelEditUserModal');

        editUserBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                const userId = this.getAttribute('data-id');
                const userName = this.getAttribute('data-name');
                const userStatus = this.getAttribute('data-status');
                const userRoles = JSON.parse(this.getAttribute('data-roles'));

                // Populate the modal fields
                document.getElementById('editUserId').value = userId;
                document.getElementById('modalEditUserName').value = userName;
                document.getElementById('userStatusSelect').value = userStatus;

                // Set the selected role based on userRoles
                const roleRadios = document.querySelectorAll('input[name="role_id"]');
                roleRadios.forEach(radio => {
                    radio.checked = userRoles.includes(parseInt(radio.value));
                });

                // Show the modal
                editUserModal.classList.remove('hidden');
            });
        });

        // Close the modal
        const closeModal = () => {
            editUserModal.classList.add('hidden');
        };

        closeEditUserModalBtn.addEventListener('click', closeModal);
        cancelEditUserModalBtn.addEventListener('click', closeModal);
    });
</script>
