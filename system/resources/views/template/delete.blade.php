<form action="{{$url}}" method="post" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
    @csrf
    @method("delete")
    <button class="btn btn-sm btn-outline-danger"> <i class="bi bi-trash-fill"></i> Delete </button>

</form>