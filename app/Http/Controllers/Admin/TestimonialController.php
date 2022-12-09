<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Testimonial\StoreTestimonialReq;
use App\Http\Requests\Admin\Testimonial\UpdateTestimonialReq;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        $Testimonials = Testimonial::latest()->paginate(10);

        return view('admin.testimonial.index', compact('Testimonials'));
    }

    public function create()
    {
        $Testimonial = new Testimonial();

        return view('admin.testimonial.create',compact('Testimonial'));
    }

    public function store(StoreTestimonialReq $request)
    {
        $Testimonial = Testimonial::create($request->validated());

        $this->storeImage($request, $Testimonial);

        return redirect()->back()->with('success', 'New Testimonial added successfylly!');
    }

    public function edit(Testimonial $Testimonial)
    {
        return view('admin.testimonial.edit', compact('Testimonial'));
    }

    public function update(UpdateTestimonialReq $request, Testimonial $Testimonial)
    {
        $oldImage = $Testimonial->image;

        $Testimonial->update($request->validated());

       

        if (!is_null($oldImage) && $oldImage !== $Testimonial->image) {
            $this->deleteImage($oldImage);
        }

        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial updated successfully!');
    }

    public function destroy(Testimonial $Testimonial)
    {
        $Testimonial->delete();

        $this->deleteImage($Testimonial->image);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial deleted successfully!');
    }


    public function storeImage($request, $Testimonial)
    {
        if ($request->has('image')) {
            $Testimonial->update([
                'image' => $request->image->store('/', 'members')
            ]);
        }
    }

    public function deleteImage($image)
    {
        if (!is_null($image)) {
            if (Storage::disk('Testimonials')->exists($image)) {
                Storage::disk('Testimonials')->delete($image);
            }
        }
    }
}
