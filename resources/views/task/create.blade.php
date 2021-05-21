<div>
    <form method="post" action="{{route('tasks.store')}}">
        @csrf
        <input name="name" type="text" placeholder="task name">
        <button type="submit">Submit</button>
    </form>
</div>
