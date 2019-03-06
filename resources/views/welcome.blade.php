@extends('layout')
@section('content')
    <h1>this is welcome page, ahola</h1>
    <ul>
        <?php foreach( $tasks as $task ) { ?>
            <li><?php echo $task; ?></li>
        <?php } ?>
    </ul>
    
@endsection