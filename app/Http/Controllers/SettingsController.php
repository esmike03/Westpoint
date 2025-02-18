<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Brand;
use App\Models\Categories;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function brandstore(Request $request)
    {
        // Validate input
        $request->validate([
            'brand_name' => 'required|string|max:255|unique:brands,brand_name',
        ]);

        // Store in database
        Brand::create([
            'brand_name' => $request->brand_name,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Brand added successfully!');
    }

    public function branddestroy($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();

        return redirect()->back()->with('success', 'Brand deleted successfully!');
    }

    public function categorystore(Request $request)
    {
        // Validate input
        $request->validate([
            'category_name' => 'required|string|max:255|unique:category,category_name',
        ]);

        // Store in database
        Categories::create([
            'category_name' => $request->category_name,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Category added successfully!');
    }

    public function categorydestroy($id)
    {
        $category = Categories::findOrFail($id);
        $category->delete();

        return redirect()->back()->with('success', 'Category deleted successfully!');
    }

    public function unitstore(Request $request)
    {
        // Validate input
        $request->validate([
            'unit_type' => 'required|string|max:255|unique:units,unit_type',
        ]);

        // Store in database
        Unit::create([
            'unit_type' => $request->unit_type,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Unit added successfully!');
    }

    public function unitdestroy($id)
    {
        $unit = Unit::findOrFail($id);
        $unit->delete();

        return redirect()->back()->with('success', 'Unit deleted successfully!');
    }
}
