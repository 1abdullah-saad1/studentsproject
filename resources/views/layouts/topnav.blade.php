@auth

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                @role('chairman')
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ Route('Student.index') }}">الطلبة <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item active">
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">المرحلة الاولى</a>
                            <a class="dropdown-item" href="#">المرحلة الثانية</a>
                            <a class="dropdown-item" href="#">المرحلة الثالثة</a>
                            <a class="dropdown-item" href="#">المرحلة الرابعة</a>
                        </div>
                    </li>
                @endrole
                <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">المراحل</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">الغياب</a>
                </li>
                <li class="nav-item ">
                    <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            المواد الدراسية
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">انكليزي</a>
                            <a class="dropdown-item" href="#">oop</a>
                            <a class="dropdown-item" href="#">شسمة</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
@endauth
