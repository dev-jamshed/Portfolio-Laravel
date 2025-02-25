{{-- <a href="{{ route('admin.skills.edit', $d->id) }}">Edit</a>
<form action="{{ route('admin.skills.destroy', $d->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form> --}}



<div class="d-flex gap-2">

    <a href="{{ route('admin.skills.edit', $d->id) }}" class="btn btn-primary shadow btn-sm sharp me-1">
        <i class="fas fa-pencil-alt"></i>
    </a>

    <button onclick="destroy({{ $d->id }})" data-delete-btn-id="{{$d->id}}" class="btn btn-danger shadow btn-sm sharp">
        <i class="fa fa-trash"></i>
    </button>
    
</div>