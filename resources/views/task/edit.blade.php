<div>
    <form method="post" action="{{route('tasks.update',$id)}}">
        @csrf
        <input name="taskId" type="number" value="{{$id}}">
        <input name="name" type="text" value="name of taskId {{$id}} ">
        <button type="submit">Update</button>
    </form>
</div>
