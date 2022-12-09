<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Merch\StoreMerchReq;
use App\Http\Requests\Admin\Merch\UpdateMerchReq;
use App\Models\Merchandies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MerchandiesController extends Controller
{
    public function index()
    {
        $merchandies = Merchandies::latest()->paginate(10);

        return view('admin.merchandies.index', compact('merchandies'));
    }

    public function create()
    {
        $merchandies = new Merchandies();

        return view('admin.merchandies.create',compact('merchandies'));
    }

    public function store(StoreMerchReq $request)
    {
        $Merchandies = Merchandies::create($request->validated());

        return redirect()->back()->with('success', 'New Merchandies added successfylly!');
    }

    public function edit(Merchandies $merchandies)
    {
        return view('admin.merchandies.edit', compact('merchandies'));
    }

    public function update(UpdateMerchReq $request, Merchandies $merchandies)
    {

        $oldImage = $merchandies->image;

        $merchandies->update($request->validated());
       
        if (!is_null($oldImage) && $oldImage !== $merchandies->image) {
            $this->deleteImage($oldImage);
        }

        return redirect()->route('admin.merchandies.index')->with('success', 'Merchandies updated successfully!');
    }

    public function destroy(Merchandies $merchandies)
    {
        $merchandies->delete();

        $this->deleteImage($merchandies->image);

        return redirect()->route('admin.merchandies.index')->with('success', 'Merchandies deleted successfully!');
    }


    public function deleteImage($image)
    {
        if (!is_null($image)) {
            if (Storage::disk('Merchandies')->exists($image)) {
                Storage::disk('Merchandies')->delete($image);
            }
        }
    }
}
