<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\SliderRequest;
use App\Models\Slider;
use App\Traits\ImageUploadTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    use ImageUploadTrait;

    public function index(): View
    {
        $this->authorize('access_slider');

        $sliders = Slider::all();

        return view('backend.sliders.index', compact('sliders'));
    }

    public function create(): View
    {
        $this->authorize('create_slider');

        $mainSliders = Slider::whereNull('parent_id')->get(['id', 'name']);

        return view('backend.sliders.create', compact('mainSliders'));
    }

    public function store(SliderRequest $request): RedirectResponse
    {
        $this->authorize('create_slider');

        $image = NULL;
        if ($request->hasFile('cover')) {
            $image = $this->uploadImage($request->name, $request->cover, 'sliders', 500, NULL);
        }

        Slider::create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'status' => $request->status,
            'cover' => $image
        ]);

        clear_cache();

        return redirect()->route('admin.sliders.index')->with([
            'message' => 'Created successfully',
            'alert-type' => 'success'
        ]);
    }

    public function show(Slider $Slider): View
    {
        $this->authorize('show_slider');

        return view('backend.sliders.show', compact('Slider'));
    }

    public function edit(Slider $Slider): View
    {
        $this->authorize('edit_slider');

        $mainSliders = Slider::whereNull('parent_id')->get(['id', 'name']);

        return view('backend.sliders.edit', compact('Slider', 'mainSliders'));
    }

    public function update(SliderRequest $request, Slider $Slider): RedirectResponse
    {
        $this->authorize('edit_slider');

        $image = $Slider->cover;
        if ($request->has('cover')) {
            if ($Slider->cover != null && File::exists('storage/assets/images/sliders/'. $Slider->cover)) {
                unlink('storage/assets/images/sliders/'. $Slider->cover);
            }
            $image = $this->uploadImage($request->name, $request->cover, 'sliders', 500, NULL);
        }

        $Slider->update([
            'name' => $request->name,
            'slug' => null,
            'parent_id' => $request->parent_id,
            'status' => $request->status,
            'cover' => $image
        ]);

        clear_cache();
        return redirect()->route('admin.sliders.index')->with([
            'message' => 'Updated successfully',
            'alert-type' => 'success'
        ]);
    }

    public function destroy(Slider $Slider): RedirectResponse
    {
        $this->authorize('delete_slider');

        if ($Slider->cover) {
            if (File::exists('storage/assets/images/sliders/'. $Slider->cover)) {
                unlink('storage/assets/images/sliders/'. $Slider->cover);
            }
        }

        $Slider->delete();

        clear_cache();
        return redirect()->route('admin.sliders.index')->with([
            'message' => 'Deleted successfully',
            'alert-type' => 'success'
        ]);

    }

    public function removeImage(Slider $Slider): RedirectResponse
    {
        $this->authorize('delete_slider');

        if (File::exists('storage/images/sliders/'. $Slider->cover)) {
            unlink('storage/images/sliders/'. $Slider->cover);
            $Slider->cover = null;
            $Slider->save();
        }

        clear_cache();
        return back()->with([
            'message' => 'Image deleted successfully',
            'alert-type' => 'success'
        ]);
    }
}
