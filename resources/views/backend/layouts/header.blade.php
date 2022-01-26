<header class="header">
    <div class="row">
        <div class="col-5">
            <ul class="menu  height">
                <li class="menu__item">
                    <i class="far fa-folder-open"></i>
                    <a href="{{ route('faculties.index') }}" class="menu__item-link">Quản lý Khoa</a>
                </li>
                <li class="menu__item">
                    <i class="fas fa-user"></i>
                    <a href="{{ route('students.index') }}" class="menu__item-link">Quản lý sinh viên</a>
                </li>
                <li class="menu__item">
                    <i class="fas fa-book"></i>
                    <a href="{{ route('subjects.index') }}" class="menu__item-link">Quản lý môn học</a>
                </li>
            </ul>
        </div>
        <div class="col-7">
            <div class="row flex-end">
                <div class="info">
                    <i class="fas fa-envelope info__item"></i>
                    <i class="far fa-bell info__item"></i>
                    <a class="info__item-img info__item">
                        <img src="/backend/image/avatar.jpg" alt="" class="item-img">
                    </a>
                    <span class="info__item">Nguyễn Xuân Dương</span>
                    <i class="fas fa-cogs info__item"></i>
                </div>
            </div>
        </div>
    </div>
</header>
