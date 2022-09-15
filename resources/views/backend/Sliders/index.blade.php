@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">
                sliders
            </h6>
            <div class="ml-auto">
                @can('create_slider')
                <a href="{{ route('admin.sliders.create') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">New Slider</span>
                </a>
                @endcan
            </div>
        </div>
        @include('partials.backend.filter', ['model' => route('admin.sliders.index')])
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Product count</th>
                    <th>Parent</th>
                    <th>Status</th>
                    <th>Created at</th>
                    <th class="text-center" style="width: 30px;">Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($sliders as $slider)
                    <tr>
                        <td>{{ $slider->id }}</td>
                        <td>
                            @if($slider->cover)
                                <img src="{{ asset('storage/storage/images/sliders/' . $slider->cover) }}"
                                     width="60" height="60" alt="{{ $slider->name }}">
                            @else
                                <img src="{{ asset('img/no-img.png') }}" width="60" height="60" alt="{{ $slider->name }}">
                            @endif
                        </td>
                        <td><a href="{{ route('admin.sliders.show', $slider->id) }}">
                                {{ $slider->name }}
                            </a>
                        </td>
                        <td>{{ $slider->parent->name ?? '' }}</td>
                        <td>{{ $slider->status }}</td>
                        <td>{{ $slider->created_at }}</td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('admin.sliders.edit', $slider) }}" class="btn btn-sm btn-primary">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="javascript:void(0);"
                                   onclick="if (confirm('Are you sure to delete this record?'))
                                   {document.getElementById('delete-slider$slider-{{ $slider->id }}').submit();} else {return false;}"
                                   class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                            <form action="{{ route('admin.sliders.destroy', $slider) }}"
                                  method="POST"
                                  id="delete-slider$slider-{{ $slider->id }}" class="d-none">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center" colspan="6">No sliders found.</td>
                    </tr>
                @endforelse
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6">
                            <div class="float-right">
                                
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
