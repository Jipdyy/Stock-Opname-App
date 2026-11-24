<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = Category::query()
            ->when($request->search, function ($query, $search) {
                $query->where('name', 'like', "%{$search}%")
                      ->orWhere('type', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $validated= $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:categories,name'],
            'type' => ['required', Rule::in(['aset_tetap', 'habis_pakai'])],
        ], [
            'name.required' => 'Nama kategori wajib diisi',
            'name.string' => 'Nama kategori wajib berupa huruf/kata',
            'name.max' => 'Nama kategori maksimal 255 karakter',
            'name.unique' => 'Nama kategori sudah terdaftar',
            'type.required' => 'Tipe kategori wajib diisi',
            'type.in' => 'Tipe kategori tidak valid. Pilih antara Aset Tetap atau Barang Habis Pakai',
        ]);

        Category::firstOrCreate($validated);
        
        return redirect()->route('categories.index')->with('success', "Kategori berhasil ditambahkan.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:category, name,' . $request->name],
            'type' => ['required', Rule::in(['aset_tetap', 'habis_pakai'])],
        ]);

        $category->update($validated);

        return redirect()->route('categories.index')->with('success', 'Kategori berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Kategori berhasil dihapus.');
    }
}
