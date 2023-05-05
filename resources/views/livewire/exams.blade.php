<div>

    <div class="tab-content">
        <div class="tab-pane  show active" role="tabpanel" aria-labelledby="home-tab">
            <table class="table table-striped table-inverse table-responsive ">
                <thead class="thead-inverse">
                    <tr>
                        <th>#</th>
                        <th>المادة</th>
                        <th colspan="2">السعي</th>
                        <th colspan="2">الدور الاول</th>
                        <th colspan="2">الدور الثاني</th>
                        <th colspan="2">الموقف النهائي</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $index = 1;
                    @endphp
                    @foreach ($activeCourses as $course_item)
                        <tr>
                            <td> {{ $index++ }}</td>
                            <td> {{ $course_item->arabic_name }}</td>
                            <td> <a href="http://">قوائم السعي</a></td>
                            <td> {{ $index++ }}</td>
                            <td> <a href="http://">القوائم</a></td>
                            <td> {{ $index++ }}</td>
                            <td> <a href="http://">القوائم</a></td>
                            <td> {{ $index++ }}</td>
                            <td> <a href="http://">القوائم</a></td>
                            <td> {{ $index++ }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
