<div class="d-flex gap-2">
    <a href="{{ route('admin.service_categories.edit', $d->id) }}" class="btn btn-primary shadow btn-sm sharp">
        <i class="fa fa-edit"></i>
    </a>
    <button onclick="destroy({{ $d->id }})" data-delete-btn-id="{{$d->id}}" class="btn btn-danger shadow btn-sm sharp">
        <i class="fa fa-trash"></i>
    </button>
</div>
