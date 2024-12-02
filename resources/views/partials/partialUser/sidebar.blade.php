<!-- Sidebar (Hidden on small screens) -->
<div id="sidebar" class="w-64 bg-white text-black fixed inset-0 md:block hidden z-10">
    <div class="p-6">
        <h1 class="text-2xl font-bold ">User Panel</h1>
    </div>
    <ul>
        <li>
            <a href="{{ route('user.dashboard') }}" class="py-2 px-4 hover:bg-blue-500 hover:text-white flex items-center gap-2">
                <span class="iconify text-3xl" data-icon="ant-design:dashboard-outlined" data-inline="false"></span>
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('user.historyLaporan') }}" class="py-2 px-4 hover:bg-blue-500 hover:text-white flex items-center gap-2">
                <span class="iconify text-3xl" data-icon="material-symbols-light:window-outline" data-inline="false"></span>
                History Laporan
            </a>
        </li>
        <li>
            <a href="{{ route('user.settingUser') }}" class="py-2 px-4 hover:bg-blue-500 hover:text-white flex items-center gap-2">
                <span class="iconify text-3xl" data-icon="mdi:gear-outline" data-inline="false"></span>
                Settings
            </a>
        </li>
        <li>
            <a href="#" class="py-2 px-4 hover:bg-blue-500 hover:text-white flex items-center gap-2">
                <span class="iconify text-3xl" data-icon="tabler:power" data-inline="false"></span>
                Logout
            </a>
        </li>
    </ul>
</div>
