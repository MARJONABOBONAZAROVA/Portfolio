@extends('admin.layouts.main')
@section('content')
<div class="container-fluid pt-4 px-4">
    @if($message = Session::get('succes'))
    <div class="alert alert-primary" role="alert">
        {{ $message }}
    </div>
    @endif
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Taglar</h6>
                <div class="d-flex justify-content-end m-3">
                    <a href="{{ route('admin.tags.create') }}"><button type="button" class="btn btn-primary m-2"><ion-icon style="font-size: 20px;" 2 name="create-outline"></ion-icon>Yaratish</button></a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tag uz</th>
                                <th scope="col">Tag ru</th>
                                <th scope="col">Tag eng</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tags as $item)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{ $item->tag_uz }}</td>
                                <td>{{ $item->tag_ru }}</td>
                                <td>
                                    <form method="POST" action="{{ route('admin.tags.destroy', $item->id) }}">
                                        @csrf
                                        @method('DELETE')

                                        <a class="btn btn-primary" href="{{ route('admin.tags.edit', $item->id) }}"><ion-icon name="create-outline"></ion-icon></a>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Rostdan o`chirishni hohlaysizmi ?')"><ion-icon name="trash-outline"></ion-icon></button>

                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $tags->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
