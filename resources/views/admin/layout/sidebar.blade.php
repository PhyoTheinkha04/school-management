<!--**********************************
            Sidebar start
        ***********************************-->
<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-symbols-outlined">home</i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="index.html">Dashboard Light</a></li>
                    <li><a href="index-2.html">Dashboard Dark</a></li>
                    <li><a href="finance.html">Finance</a></li>
                </ul>

            </li>
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-symbols-outlined">category</i>
                    <span class="nav-text">Category</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('admin/category') }}">Category</a></li>
                    <li><a href="{{ url('admin/subcategory') }}">Sub-category</a></li>
                    <li><a href="{{ url('admin/levels') }}">Level</a></li>
                    <li><a href="{{ url('admin/interests') }}">Interest</a></li>
                </ul>

            </li>

            </li>
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-symbols-outlined">question_mark</i>
                    <span class="nav-text">Q&A</span>

                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('admin/qanda') }}">Q&A</a></li>
                    <li><a href="{{ url('admin/qanda/create') }}">Add News</a></li>

                </ul>

            </li>
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-symbols-outlined">newspaper</i>
                    <span class="nav-text">News</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('admin/new') }}">News</a></li>
                    <li><a href="{{ url('admin/tags') }}">Tags</a></li>
                </ul>

            </li>
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                <i class="material-symbols-outlined">school</i>
                <span class="nav-text">Course & Batch</span>

            </a>
            <ul aria-expanded="false">
                <li><a href="{{ url('admin/course') }}">Course</a></li>
                <li><a href="{{ url('admin/batch') }}">Batch</a></li>
                <li><a href="{{ url('admin/instructor') }}">Instructor</a></li>

            </ul>

        </li>



            <div class="copyright">
                <p><strong>School Admission Dashboard</strong></p>
                <p class="fs-12">Made by <br>NGA PHYO "AND" K to the B</p>
            </div>
    </div>
</div>
<!--**********************************
            Sidebar end
        ***********************************-->
