<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Imports\ProductsImport;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Validators\ValidationException;

class ProductController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'details' => 'nullable|string',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product_images', 'public');
        }

        Product::create([
            'name' => $request->name,
            'category' => $request->category,
            'brand' => $request->brand,
            'price' => $request->price,
            'image' => $imagePath,
            'details' => $request->details,
        ]);

        return redirect()->back()->with('success', 'Product added successfully!');
    }

    public function products(Request $request)
    {
        $query = Product::query();

        // Get unique categories and brands for the filter dropdowns
        $categories = Product::pluck('category')->unique();
        $brands = Product::pluck('brand')->unique();

        // Apply search filter
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Apply category filter if selected
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        // Apply brand filter if selected
        if ($request->filled('brand')) {
            $query->where('brand', $request->brand);
        }

        // Get filtered products
        $products = $query->get();

        return view('products', compact('products', 'categories', 'brands'));
    }

    public function modifyproducts()
    {
        $products = Product::all(); // Fetch all products
        return view('modifyproducts', compact('products'));
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv,xls',
        ]);

        try {
            Excel::import(new ProductsImport, $request->file('file'));

            return redirect()->with('success', 'Products imported successfully!');
        } catch (ValidationException $e) {
            $failures = $e->failures();
            $errorMessages = [];

            foreach ($failures as $failure) {
                $errorMessages[] = "Row {$failure->row()}: " . implode(', ', $failure->errors());
            }

            return redirect()->with('error', implode('<br>', $errorMessages));
        } catch (\Exception $e) {
            return redirect()->with('error', 'There was an error importing the file. Please check the format.');
        }
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product->delete();

        return response()->json(['message' => 'Product deleted successfully']);
    }
}
