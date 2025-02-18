<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Brand;
use App\Models\Member;
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

    public function memberstore(Request $request)
    {
        // Validate input
        $request->validate([
            'member_name' => 'required|string|max:255|unique:members,name',
            'position' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('members', 'public'); // Save to storage/app/public/members
        } else {
            $imagePath = null; // Optional: Set a default image if needed
        }

        // Store in database
        Member::create([
            'name' => $request->member_name,
            'position' => $request->position,
            'image' => $imagePath,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Member added successfully!');
    }

    public function memberdestroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();

        return redirect()->back()->with('success', 'Category deleted successfully!');
    }
}
