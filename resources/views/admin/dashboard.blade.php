<x-admin-app-layout>
    <div class="flex min-h-screen bg-gray-100">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md hidden md:block">
            <div class="p-6">
                <h1 class="text-2xl font-bold text-gray-800 mb-8">Admin</h1>
                <nav class="space-y-2">
                    <a href="#" class="flex items-center px-4 py-2 rounded text-gray-700 hover:bg-gray-200">
                        <svg class="w-5 h-5 mr-2 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6"></path></svg>
                        Dashboard
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 rounded text-gray-700 hover:bg-gray-200">
                        <svg class="w-5 h-5 mr-2 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 20h5v-2a4 4 0 00-3-3.87"></path><path d="M9 20H4v-2a4 4 0 013-3.87"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        Users
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 rounded text-gray-700 hover:bg-gray-200">
                        <svg class="w-5 h-5 mr-2 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 8v4l3 3"></path><circle cx="12" cy="12" r="10"></circle></svg>
                        Reports
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 rounded text-gray-700 hover:bg-gray-200">
                        <svg class="w-5 h-5 mr-2 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 4v16m8-8H4"></path></svg>
                        Settings
                    </a>
                </nav>
            </div>
        </aside>
        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="bg-white shadow p-4 flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Admin Dashboard') }}
                </h2>
                <div>
                    <span class="text-gray-600">Admin User</span>
                </div>
            </header>
            <!-- Dashboard Content -->
            <main class="flex-1 p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div class="bg-white p-6 rounded-lg shadow">
                        <div class="text-sm text-gray-500">Users</div>
                        <div class="text-2xl font-bold text-gray-800">1,234</div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow">
                        <div class="text-sm text-gray-500">Revenue</div>
                        <div class="text-2xl font-bold text-gray-800">$12,345</div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow">
                        <div class="text-sm text-gray-500">New Signups</div>
                        <div class="text-2xl font-bold text-gray-800">56</div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-bold mb-4">Welcome!</h3>
                    <p class="text-gray-700">You're logged in to the admin dashboard.</p>
                </div>
            </main>
        </div>
    </div>
</x-admin-app-layout>