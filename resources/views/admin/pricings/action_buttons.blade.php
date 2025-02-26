<div class="d-flex">
    <a href="{{ route('admin.pricings.edit', $d->id) }}" class="btn btn-sm btn-primary me-2"><i class="fa fa-edit"></i></a>
    <button type="button" class="btn btn-sm btn-danger" onclick="destroy({{ $d->id }})"><i class="fa fa-trash"></i></button>
</div>
