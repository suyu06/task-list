<h1>welcome to Task List</h1>
<div>
    <!-- @if (count($tasks))
    @foreach ($tasks as $task)
        <div>
            <h2>{{ $task->title }}</h2>
            <p>{{ $task->description }}</p>
        </div>
    @endforeach
    @else
    <div>
        There are no tasks!
    </div>
   @endif -->

   @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['id' => $task->id]) }}">
                {{ $task->title }}
        </div>
    @empty
    <div>
        There are no tasks!
    </div>
    @endforelse
</div>
