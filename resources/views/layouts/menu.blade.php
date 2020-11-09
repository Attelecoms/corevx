

<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{{ route('categories.index') }}"><i class="fa fa-list"></i><span>Courses Category</span></a>
</li>
<li class="{{ Request::is('courses*') ? 'active' : '' }}">
    <a href="{{ route('courses.index') }}"><i class="fa fa-certificate"></i><span>Courses List</span></a>
</li>
<li >
    <a href="/users/{{ Auth::user()->id}} "  ><i class="fa fa-certificate"></i><span>Become an instructor
</span></a>
</li>


{{--<li class="{{ Request::is('payments*') ? 'active' : '' }}">--}}
{{--    <a href="{{ route('payments.index') }}"><i class="fa fa-money"></i><span>My Payments</span></a>--}}
{{--</li>--}}




{{--moderator--}}

{{--@if(Auth::user()->role_id<4)--}}
{{--    <li class="{{ Request::is('courses*') ? 'active' : '' }}">--}}
{{--        <a href="{{ route('courses.index') }}"><i class="fa fa-edit"></i><span>My Courses</span></a>--}}
{{--    </li>--}}
{{--@endif--}}
{{-- Admin Section --}}
@if(Auth::user()->role_id<3)
    <li >
        <a href="#"><i class="fa fa-user"></i><span>ADMIN MENU</span></a>
    </li>

    <li class="{{ Request::is('courseUsers*') ? 'active' : '' }}">
        <a href="{{ route('courseUsers.index') }}"><i class="fa fa-edit"></i><span>My Subscriptions</span></a>
    </li>
    <li class="{{ Request::is('courses*') ? 'active' : '' }}">
        <a href="{{ route('courses.index') }}"><i class="fa fa-edit"></i><span>My Courses</span></a>
    </li>

    <li class="{{ Request::is('comments*') ? 'active' : '' }}">
        <a href="{{ route('comments.index') }}"><i class="fa fa-edit"></i><span>Comments</span></a>
    </li>

    <li class="{{ Request::is('items*') ? 'active' : '' }}">
        <a href="{{ route('items.index') }}"><i class="fa fa-edit"></i><span>Items</span></a>
    </li>

    <li class="{{ Request::is('payments*') ? 'active' : '' }}">
        <a href="{{ route('payments.index') }}"><i class="fa fa-money"></i><span>Payments</span></a>
    </li>

    <li class="{{ Request::is('users*') ? 'active' : '' }}">
        <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
    </li>

    <li class="{{ Request::is('views*') ? 'active' : '' }}">
        <a href="{{ route('views.index') }}"><i class="fa fa-edit"></i><span>Views</span></a>
    </li>

    <li class="{{ Request::is('roles*') ? 'active' : '' }}">
        <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
    </li>

<li class="{{ Request::is('coupons*') ? 'active' : '' }}">
    <a href="{{ route('coupons.index') }}"><i class="fa fa-edit"></i><span>Coupons</span></a>
</li>


<li class="{{ Request::is('courseOutlines*') ? 'active' : '' }}">
    <a href="{{ route('courseOutlines.index') }}"><i class="fa fa-edit"></i><span>Course Outlines</span></a>
</li>

@endif
