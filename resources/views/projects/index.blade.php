
<!DOCTYPE html>
<html lang="">
    <head>
        <title>Title Page</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <h1 class="text-center">Hello KD</h1>
        <ul>
            <?php foreach($projects as $project) { ?>
                <li><a href="/projects/{{$project->id}}">{{$project->title}}</a></li>
            <?php } ?>
        </ul>
        
    </body>
</html>
