<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading"> System Accounting </div>
    <div class="list-group list-group-flush">
        <a href="{{ route('outputs.index') }}" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="{{ route('inputs.index') }}" class="list-group-item list-group-item-action bg-light"> My Inputs</a>
        <a href="{{ route('outputs.index') }}" class="list-group-item list-group-item-action bg-light">My Outputs</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">My profile</a>
        <a href="{{ route('logout') }}" class="list-group-item list-group-item-action bg-light">Logout</a>
{{--        <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>--}}
    </div>
</div>