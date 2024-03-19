<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-item active ">
            <a href="index.html" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dasbor</span>
            </a>
        </li>
        <li class="sidebar-item  ">
            <a href="form-layout.html" class='sidebar-link'>
                <i class="bi bi-file-earmark-medical-fill"></i>
                <span>Aktivitas</span>
            </a>
        </li>
        <li class="sidebar-item  ">
            <a href="table.html" class='sidebar-link'>
                <i class="bi bi-grid-1x2-fill"></i>
                <span>Data Warga</span>
            </a>
        </li>
        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>Data Umum</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item  ">
                    <a href="table-datatable.html" class="submenu-link">Datatable</a>
                </li>
                <li class="submenu-item  ">
                    <a href="table-datatable-jquery.html" class="submenu-link">Datatable (jQuery)</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-pentagon-fill"></i>
                <span>Kewilayahan</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item  ">
                    <a href="ui-widgets-chatbox.html" class="submenu-link">Chatbox</a>
                </li>
                <li class="submenu-item  ">
                    <a href="ui-widgets-pricing.html" class="submenu-link">Pricing</a>
                </li>
                <li class="submenu-item  ">
                    <a href="ui-widgets-todolist.html" class="submenu-link">To-do List</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item  ">
            <a href="ui-file-uploader.html" class='sidebar-link'>
                <i class="bi bi-cloud-arrow-up-fill"></i>
                <span>Laporan</span>
            </a>
        </li>
        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-map-fill"></i>
                <span>Profil</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item  ">
                    <a href="ui-map-google-map.html" class="submenu-link">Google Map</a>
                </li>
                <li class="submenu-item  ">
                    <a href="ui-map-jsvectormap.html" class="submenu-link">JS Vector Map</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item  ">
            <a href="#" class='sidebar-link'
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bi bi-cash"></i>
                <span>Keluar</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</div>
