@extends('layouts.app')

@section('content')
    <h1>Jugadores</h1>
    <livewire:jugadores-form />
    <table class="table">
        <!-- ... -->
    </table>
    <!-- ... -->
@endsection
<!-- ... -->
<table class="table">
    <!-- ... -->
</table>
{{ $jugadores->links() }}
<!-- ... -->