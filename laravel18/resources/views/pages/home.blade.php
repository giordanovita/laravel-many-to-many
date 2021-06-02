@extends('layout.main-layout')

@section('content')

    <main>
       
            <ul>

                @foreach ($employees as $employee)
                    <li class="general">
                        <h3>
                            Info employee n. {{$employee -> id}}
                        </h3>
                        <h4>
                            {{$employee -> firstname}}
                            {{$employee -> lastname}}
                        </h4>
                        <h6>
                            Location: {{$employee -> location -> street}}, 
                                    {{$employee -> location -> state}}
                        </h6>

                        <h6>Task: ({{$employee-> tasks -> count()}})</h6>
                        <ol>
                            @foreach ($employee-> tasks as $task)
                                
                            <li>
                                <h6>
                                    {{$task -> name}}, 
                                </h6>
                            </li>
                            @endforeach

                        </ol>

                        

                        
                    </li>   
                @endforeach

            </ul>




    </main>
    
@endsection